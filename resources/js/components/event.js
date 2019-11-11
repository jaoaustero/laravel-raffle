import $ from 'jquery'
import CRUDHandler from './crud-handler';
import FormHelper from './form-helper';
import Modal from './modal';

class Event
{
    constructor()
    {
        this.crudHandler = new CRUDHandler();
        this.formHelper = new FormHelper($('#event-form'));
    }

    submitForm(event, form)
    {
        let crudHandler = this.crudHandler.prepareData(form);
        let formHelper = this.formHelper;
        let sendButton = $('#js-submit');
        let message = $('#js-message');

        formHelper.clearErrors();

        message.empty();

        sendButton
            .attr('disabled', true)
            .text('')
            .append(`<i class="fa fa-spinner fa-lg uis-animate uis-animate-infinite uis-animate-rotate"></i>`);

        event.preventDefault();

        crudHandler.http(function (response) 
        {
            let responseData = response.responseJSON;

            if (response.status === 200 || response.status === 201)
            {
                formHelper.clearForm();

                message.empty();

                location.href = responseData.path;
            }
            else if (response.status === 422) 
            {
                sendButton.text('Submit');

                formHelper.setErrors(responseData.error);
            }
            else 
            {
                console.log('Response Status: ' + response.status);
            }

            sendButton.find('i').remove();
            sendButton
                .attr('disabled', false)
                .text('Submit');

        }, form.attr('method'), form.attr('action'));
    }

    changeActive(id)
    {
        let submitButton = $('#js-status-submit');

        submitButton
            .attr('disabled', true)
            .text('')
            .append(`<i class="fa fa-spinner fa-lg uis-animate uis-animate-infinite uis-animate-rotate"></i>`);


        this.crudHandler.http(function (response)
        {
            let responseData = response.responseJSON;

            if (response.status == 200)
            {
                location.href = window.location.href;
            }
            else 
            {
                console.log('Response Status: ' + response.status);

                submitButton.find('i').remove();
                submitButton
                    .attr('disabled', false)
                    .text('Yes');
            }
        }, 'GET', `/api/administration/event/${id}/change-active`);
    }

    edit(id)
    {
        let formHelper = this.formHelper;

        this.crudHandler.http(function (response)
        {
            let responseData = response.responseJSON;

            if (response.status == 200)
            {
                formHelper.clearForm();

                formHelper.setDataInForm(responseData);
            }
            else 
            {
                console.log('Response Status: ' + response.status);
            }
        }, 'GET', `/api/administration/event/${id}/edit`);
    }

    loadMore(id)
    {
        let submitButton = $('.js-load-more');

        submitButton.hide();

        this.crudHandler.http(function (response)
        {
            const responseData = response.responseJSON.data;

            for (let i = 10; i < responseData.length; i += 1)
            {
                const li = $('<li />').text(responseData[i].full_name);

                $('#js-players-container').append(li);
            }


        }, 'GET', `/api/administration/players?filter[event_id]=${id}&order[is_selected]=desc&expose=true`);
    }
}

let module = new Event();

$('#event-form').submit(function (event)
{
    module.submitForm(event, $(this));
});

$('#js-status-submit').click(function (event)
{
    const id = $(this).attr('data-id');

    module.changeActive(id);
});

$('.event-open-modal').click(function (event)
{
    const form = $('#event-form');

    const type = $(this).attr('data-type');

    if (type == 'edit')
    {
        const id = $(this).attr('data-id');

        form.attr('action', `/api/administration/event/${id}/update`);
        form.attr('method', 'PUT');

        $('#js-type').text('Update');

        module.edit(id);

        Modal.show('#form-modal');

        return;
    }

    $('#js-type').text('Create');
});

$('.event-open-status-modal').click(function (event)
{
    const id = $(this).attr('data-id');

    const active = $(this).attr('data-active');

    const name = $(this).attr('data-name');

    $('#js-status-event-active').text(active == 1 ? 'Close' : 'Open');

    $('#js-status-event-name').text(name);

    $('#js-status-submit').attr('data-id', id);
});

$('.event-load-more').click(function ()
{
    const id = $(this).attr('data-id');

    module.loadMore(id);
});