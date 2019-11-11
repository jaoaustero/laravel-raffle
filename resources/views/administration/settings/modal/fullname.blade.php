<div class="uis-modal" id="fullname-modal">
    <div class="uis-modal-dialog">
        <div class="uis-modal-body">
            <h2 class="uis-modal-title">Full name</h2>
            <p>Change your full name that will be displayed on the application</p>

            <div class="uis-margin-medium-top">
                {!! Form::open(['class' => 'uis-form-stacked', 'id' => 'fullname-form', 'action' => 'SettingController@updateFullname', 'method' => 'POST']) !!}

                    <div class="uis-margin">
                        <label
                            class="uis-form-label"
                            for="first-name">
                            First name
                        </label>
                        <input
                            id="first-name"
                            type="text"
                            class="uis-input"
                            value="{{auth()->user()->userProfile->first_name}}"
                            name="first_name"
                            placeholder="ex: John Doe">
                        <small class="uis-text-danger form-error"></small>
                    </div>
                    <div class="uis-margin">
                        <label
                            class="uis-form-label"
                            for="last-name">
                            Last name
                        </label>
                        <input
                            id="last-name"
                            type="text"
                            class="uis-input"
                            value="{{auth()->user()->userProfile->last_name}}"
                            name="last_name"
                            placeholder="ex: John Doe">
                        <small class="uis-text-danger form-error"></small>
                    </div>
                    <div id="js-message" class="uis-text-center uis-margin-top"></div>

                    <div class="uis-text-right">
                        {{ Form::button('Submit', ['type' => 'submit', 'id' => 'js-fullname-submit', 'class' => 'uis-button uis-button-primary']) }}
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>