import $ from 'jquery'
import CRUDHandler from './crud-handler';

class SaveWinner
{
    constructor()
    {
        this.crudHandler = new CRUDHandler();
    }

    submitForm(element)
    {
        let playerId = element.attr('data-id');
        let sendNotification = (element.attr('data-send') == 'true');

        this.crudHandler.addData('player_id', playerId);
        this.crudHandler.addData('send_notification', sendNotification);

        element
            .attr('disabled', true)
            .text('')
            .append(`<i class="fa fa-spinner fa-lg uis-animate uis-animate-infinite uis-animate-rotate"></i>`);

        this.crudHandler.http(function (response) 
        {
            let responseData = response.responseJSON;

            if (response.status === 200) 
            {
                // Close modal
                location.href = window.location.href;
            }
            else if (response.status === 422) 
            {
                // Show error message
            }
            else 
            {
                console.log('Response Status: ' + response.status);
            }

            element.find('i').remove();
            element
                .attr('disabled', false)
                .text(sendNotification ? 'Send and Close' : 'Close');

        }, 'POST', '/api/save-winner');
    }
}

let module = new SaveWinner();

$('.js-save-winner').click(function ()
{
    module.submitForm($(this));
});