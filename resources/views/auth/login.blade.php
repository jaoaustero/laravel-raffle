@extends('app')

@section('content')
<div class="uis-auth">
    <div class="uis-auth-container">

        <div
            class="uis-card
                uis-card-default
                uis-width-1-1">
                {!! Form::open(['class' => 'uis-form-stacked', 'id' => 'login-form', 'action' => 'Auth\LoginController@login', 'method' => 'POST']) !!}
                <div class="uis-card-body">
                    <div class="uis-text-center">
                        <img
                            src="{{ asset('img/logo/GMI-h.svg') }}"
                            alt="GMI Horizontal Logo"
                            width="200px">
                    </div>

                    <fieldset
                        class="uis-fieldset
                        uis-margin-medium-top">
                        <div class="uis-margin">
                            <label
                                for="email-address"
                                class="uis-form-label">
                                Email address
                            </label>

                            <input
                                id="email-address"
                                type="text"
                                class="uis-input"
                                name="email"
                                placeholder="ex: john.doe@gigamare.com"
                                autofocus
                                required
                                >
                        </div>

                        <div class="uis-margin-top">
                            <label
                                for="password"
                                class="uis-form-label">
                                Password
                            </label>

                            <input
                                id="password"
                                type="password"
                                class="uis-input"
                                name="password"
                                placeholder="Your password"
                                required
                                >
                        </div>
                    </fieldset>
                </div>

                <small class="uis-text-danger js-error-message"></small>

                <div class="uis-card-footer uis-text-right">
                    {{ Form::button('Sign In', ['type' => 'submit', 'id' => 'js-submit', 'class' => 'uis-button uis-button-primary']) }}
                </div>
            {!! Form::close() !!}
        </div>

    </div>
</div>
@endsection
