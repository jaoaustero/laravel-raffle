import $ from 'jquery'
import CRUDHandler from './crud-handler';
import FormHelper from './form-helper';

class Auth
{
    constructor()
    {
        this.crudHandler = new CRUDHandler();
        this.formHelper = new FormHelper($('#login-form'));
    }

    submitForm(event, form)
    {
        let crudHandler = this.crudHandler.prepareData(form);
        let formHelper = this.formHelper;
        let sendButton = $('#js-submit');
        let message = $('#js-message');

        this.formHelper.clearErrors();

        message.empty();

        sendButton
            .attr('disabled', true)
            .text('')
            .append(`<i class="fa fa-spinner fa-lg uis-animate uis-animate-infinite uis-animate-rotate"></i>`);

        event.preventDefault();

        crudHandler.http(function (response) 
        {
            let responseData = response.responseJSON;

            if (response.status === 200) 
            {
                window.location.href = '/events';
            }
            else if (response.status === 422) 
            {
                sendButton.text('Sign In');

                formHelper.setErrors(responseData.error);
            }
            else 
            {
                console.log('Response Status: ' + response.status);
            }

            sendButton.find('i').remove();
            sendButton
                .attr('disabled', false)
                .text('Sign In');

        }, form.attr('method'), form.attr('action'));
    }
}

let module = new Auth();

$('#login-form').submit(function (event)
{
    module.submitForm(event, $(this));
});