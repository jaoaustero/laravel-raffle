@extends('layouts.app')

@section('content')
<div class="uis-event">
    <header class="uis-event-header">
        <img
            src="{{ asset('img/logo/GMI-h-inverse.svg') }}"
            alt="GMI Logo Inverse">
    </header>

    <section class="uis-event-container">
        <div
            class="uis-card
                uis-card-default
                uis-card-large
                uis-width-1-1
                uis-margin-top uis-margin-bottom">
            
            {{-- When event is on going --}}
            <div class="uis-card-body">
                <h3
                    class="uis-card-title
                        uis-text-primary
                        uis-margin-remove">
                    Crew Connect 2019 Event
                </h3>
                <p
                    class="uis-text-meta
                            uis-text-default
                            uis-margin-xsmall">
                    SMX Convention Center, Taguig, Philippines
                </p>
                <p
                    class="uis-text-meta
                        uis-text-default
                        uis-margin-xsmall">
                    October 24, 2018
                </p>

                <form
                    class="uis-form-stacked uis-margin-medium-top">
                    <fieldset class="uis-fieldset">
                        
                        <div class="uis-margin">
                            <label
                                for="full-name"
                                class="uis-form-label">
                                Full name
                            </label>

                            <input
                                id="full-name"
                                type="text"
                                class="uis-input"
                                placeholder="ex: John Doe"
                                required
                                autofocus>
                        </div>

                        <div class="uis-margin">
                            <label
                                for="company-name"
                                class="uis-form-label">
                                Company
                            </label>

                            <input
                                id="company-name"
                                type="text"
                                class="uis-input"
                                placeholder="ex: GigaMare Inc"
                                required>
                        </div>

                        <div class="uis-margin">
                            <label
                                for="email-address"
                                class="uis-form-label"
                                required>
                                Email address
                            </label>

                            <input
                                id="email-address"
                                type="email"
                                class="uis-input"
                                placeholder="ex: John Doe">
                        </div>

                        <div class="uis-margin">
                            <label
                                for="contact-number"
                                class="uis-form-label">
                                Contact Number
                            </label>

                            <input
                                id="contact-number"
                                type="email"
                                class="uis-input"
                                placeholder="ex: 09xx xxx xxxx">
                        </div>

                        <label>
                            <input
                                type="checkbox"
                                class="uis-checkbox"
                                required>
                            I agree to <a href="">Terms and Condition</a>
                        </label>
                    </fieldset>

                    <div class="uis-text-center uis-margin-medium-top">
                        <button
                            type="submit"
                            class="uis-button
                                uis-button-primary">
                            Join Raffle
                        </button>
                    </div>
                </form>
            </div>

            {{-- When event is done --}}
            <div class="uis-card-body uis-text-center" style="display: none">
                <img
                    class="uis-margin-top"
                    src="{{ asset('img/svg/registration-done.svg') }}"
                    alt="Illustration raffle registration done">

                <div class="uis-margin-medium-top">
                    <h3
                        class="uis-card-title
                            uis-text-primary
                            uis-margin-remove">
                        Too late 😟
                    </h3>

                    <p>The <span class="uis-text-primary">Crew Connect 2019</span> event raffle registration is already done.</p>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
