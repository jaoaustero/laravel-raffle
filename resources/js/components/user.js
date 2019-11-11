import $ from 'jquery'
import CRUDHandler from './crud-handler';
import FormHelper from './form-helper';
import Modal from './modal';

class User
{
    constructor()
    {
        this.crudHandler = new CRUDHandler();
        this.formHelper = new FormHelper($('#user-form'));
    }

    submitForm(event, form)
    {
        const crudHandler = this.crudHandler.prepareData(form);
        const formHelper = this.formHelper;
        const user = new User();
        const sendButton = $('#js-submit');
        const message = $('#js-message');

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

                $('#js-users-container').prepend(user.buildCard(responseData));

                Modal.hide('#form-modal');
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
        }, 'GET', `/api/administration/user/${id}/edit`);
    }

    buildCard(data)
    {
        const list = $('<li />');

        const link = $('<a class="uis-link uis-link-reset" />');

        const card = $('<div class="uis-card uis-card-default uis-card-body uis-card-hover" />');

        const cardTitle = $('<h3 class="uis-card-title uis-text-primary uis-margin-small" />');
        cardTitle.text(data.user_profile.first_name + ' ' + data.user_profile.last_name);

        const cardSubtitle = $('<p class="uis-text-meta uis-text-default uis-margin-remove" />');
        cardSubtitle.text(data.email);

        card.html(cardTitle);
        card.append(cardSubtitle);

        link.html(card);

        list.html(link);

        return list;
    }

}

let module = new User();

$('#user-form').submit(function (event)
{
    module.submitForm(event, $(this));
});

$('.user-open-modal').click(function (event)
{
    const form = $('#user-form');

    const type = $(this).attr('data-type');

    if (type == 'edit')
    {
        const id = $(this).attr('data-id');

        form.attr('action', `/api/administration/user/${id}/update`);
        form.attr('method', 'PUT');

        $('#js-type').text('Update');

        module.edit(id);

        Modal.show('#form-modal');

        return;
    }

    $('#js-type').text('Create');
});