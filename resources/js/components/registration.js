import $ from 'jquery'
import CRUDHandler from './crud-handler';
import FormHelper from './form-helper';

class Registration
{
    constructor()
    {
        this.crudHandler = new CRUDHandler();
        this.formHelper = new FormHelper($('#event-registration-form'));
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
                formHelper.clearForm();

                message.html(`<p style="color: green;">${responseData.message}</p>`);

                window.location.href = '/thank-you';
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

let module = new Registration();

$('#event-registration-form').submit(function (event)
{
    module.submitForm(event, $(this));
});

// Disabled button
$('.registration-button').attr('disabled', true);

let check = $('#terms-and-condition').is(':checked');


$('#terms-and-condition').on('click', function ()
{
    if ($(this).is(':checked'))
    {
        $('.registration-button').removeAttr('disabled');
    }
    else
    {
        $('.registration-button').attr('disabled', true);
    }
})