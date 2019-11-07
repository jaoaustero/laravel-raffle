import $ from 'jquery';

class FormHelper 
{
    constructor(form)
    {
        this.form = form;
    }

    setErrors(errors)
    {
        for (var key in errors)
        {
            let element = this.form.find("*[name='" + key + "']");
            element.addClass('uis-form-danger')
            element.siblings('.form-error').html(errors[key][0].toString());
        }
    }

    clearErrors(form = this.form)
    {
        form.find('.uis-form-danger').removeClass('uis-form-danger')
        form.find('.form-error').html('');
    }

    clearForm(form = this.form)
    {
        form[0].reset();
    }
}

export default FormHelper