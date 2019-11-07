@extends('app')

@section('content')
<div class="uis-event">
    <header class="uis-event-header">
        <img
            src="{{ asset('img/logo/GMI-h-inverse.svg') }}"
            alt="GMI Logo Inverse">
    </header>

    <section class="uis-event-container" style="margin-top: 100px;">
        <div
            class="uis-card
                uis-card-default
                uis-card-large
                uis-width-1-1
                uis-margin-top uis-margin-bottom">
            
            {{-- When event is on going --}}
            @if($event->is_active)
                <div class="uis-card-body">
                    <h3
                        class="uis-card-title
                            uis-text-primary
                            uis-margin-remove">
                            {{$event->name}}
                    </h3>
                    <p
                        class="uis-text-meta
                                uis-text-default
                                uis-margin-xsmall">
                                {{$event->location}}
                    </p>
                    <p
                        class="uis-text-meta
                            uis-text-default
                            uis-margin-xsmall">
                            {{(new \DateTime($event->event_date))->format('F d, Y')}}
                    </p>
                    {!! Form::open(['class' => 'uis-form-stacked uis-margin-medium-top', 'id' => 'event-registration-form', 'action' => 'API\RaffleManagementController@register', 'method' => 'POST']) !!}
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
                                    name="full_name"
                                    placeholder="ex: John Doe"
                                    required
                                    autofocus>
                                <small class="uis-text-danger form-error"></small>
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
                                    name="company"
                                    placeholder="ex: GigaMare Inc"
                                    required>
                                <small class="uis-text-danger form-error"></small>
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
                                    name="email"
                                    placeholder="ex: John Doe">

                                <small class="uis-text-danger form-error"></small>
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
                            {{ Form::button('Submit', ['type' => 'submit', 'id' => 'js-submit', 'class' => 'uis-button uis-button-primary']) }}
                        </div>
                        <div id="js-message" class="uis-text-center uis-margin-top"></div>
                        <div>
                            <input type="hidden" name="event_id" value="{{$event->id}}">
                            <small class="uis-text-danger form-error"></small>
                        </div>
                    {!! Form::close() !!}
                </div>
            @else

                {{-- When event is done --}}
                <div class="uis-card-body uis-text-center">
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

            @endif
        </div>
    </section>
</div>
@endsection
