@extends('app')

@section('content')
<div class="uis-auth">
    <div class="uis-auth-container">

        <div
            class="uis-card
                uis-card-default
                uis-width-1-1">
            <form class="uis-form-stacked">
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
                                class="uis-input uis-form-danger"
                                placeholder="ex: john.doe@gigamare.com"
                                autofocus>

                            <small class="uis-text-danger">
                                Error Message!
                            </small>
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
                                placeholder="Your password">
                        </div>
                    </fieldset>
                </div>

                <div class="uis-card-footer uis-text-right">
                    <button
                        type="submit"
                        class="uis-button
                            uis-button-primary">
                        Sign In
                    </button>
                </div>
            </form>
        </div>

    </div>
</div>
@endsection
