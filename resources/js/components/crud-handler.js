import $ from 'jquery';

class CRUDHandler
{
    constructor()
    {
        this.formData = [];
    }

    prepareData($form)
    {
        this.formData = $form.serializeArray();
        return this;
    }

    addData($key, $value)
    {
        let $new = { 'name': $key, 'value': $value };

        this.formData.push($new);
        return this;
    }

    http($callback, $method = null, $uri = NULL)
    {
        $.ajax({
            method: $method,
            url: $uri,
            data: this.formData,
            headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
            beforeSend: function ()
            {
                // Add loader here
                console.log('Preparing custom form...');
            },
            success: function ($response)
            {
                // Add Success popup/notification here
                console.log('Success AJAX custom');
            },
            error: function ($jqXHR, $textStatus, $errorThrown)
            {
                // Add Error popup/notification here
                console.log('Error AJAX custom');
                // $callback($jqXHR);
            },
            complete: function ($jqXHR, $textStatus)
            {
                console.log('AJAX Call Completed!');
                $callback($jqXHR);
            }
        });
    }
}

export default CRUDHandler