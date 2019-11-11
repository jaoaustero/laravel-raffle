<div class="uis-modal" id="form-modal">
    <div class="uis-modal-dialog">
        <div class="uis-modal-body">
            <h2 class="uis-modal-title"><span id="js-type"></span> User</h2>

            <div class="uis-margin-top">
                {!! Form::open(['class' => 'uis-form-stacked', 'id' => 'user-form', 'action' => 'API\Administration\UserController@store', 'method' => 'POST']) !!}

                    <div class="uis-margin">
                        <label
                            class="uis-form-label"
                            for="firstname">
                            First name
                        </label>
                        <input
                            id="firstname"
                            type="text"
                            class="uis-input"
                            name="first_name"
                            placeholder="ex: John">
                        
                        <small class="uis-text-danger form-error"></small>
                    </div>

                    <div class="uis-margin">
                        <label
                            class="uis-form-label"
                            for="lastname">
                            Last name
                        </label>
                        <input
                            id="lastname"
                            type="text"
                            class="uis-input"
                            name="last_name"
                            placeholder="ex: Doe">

                        <small class="uis-text-danger form-error"></small>
                    </div>

                    <div class="uis-margin">
                        <label
                            class="uis-form-label"
                            for="email-adderss">
                            Email addres
                        </label>
                        <input
                            id="email-adderss"
                            type="email"
                            class="uis-input"
                            name="email"
                            placeholder="ex: john.doe@gigamare.com">

                        <small class="uis-text-danger form-error"></small>
                    </div>
                    <div id="js-message" class="uis-text-center uis-margin-top"></div>

                    <div class="uis-text-right">
                        {{ Form::button('Submit', ['type' => 'submit', 'id' => 'js-submit', 'class' => 'uis-button uis-button-primary']) }}
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>