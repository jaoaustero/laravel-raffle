import $ from 'jquery'
import CRUDHandler from './crud-handler';
import FormHelper from './form-helper';
import Modal from './modal';

class Setting
{
    constructor()
    {
        this.crudHandler = new CRUDHandler();
        this.fullNameFormHelper = new FormHelper($('#fullname-form'));
    }

    fullNameSubmitForm(event, form)
    {
        event.preventDefault();
        let crudHandler = this.crudHandler.prepareData(form);
        let formHelper = this.fullNameFormHelper;
        let sendButton = $('#js-fullname-submit');
        let message = $('#fullname-form').find('#js-message');

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

                location.href = window.location.href;
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

    emailSubmitForm(event, form)
    {
        let crudHandler = this.crudHandler.prepareData(form);
        let formHelper = this.formHelper;
        let sendButton = $('#email-form').find('#js-submit');
        let message = $('#email-form').find('#js-message');

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

                location.href = window.location.href;
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
}

let module = new Setting();

$('#fullname-form').submit(function (event)
{
    module.fullNameSubmitForm(event, $(this));
});