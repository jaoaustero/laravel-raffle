@extends('app')

@section('content')
<div class="uis-event">
    <header class="uis-event-header">
        <img
            src="{{ asset('static/logo/GMI-h-inverse.svg') }}"
            alt="GMI Logo Inverse">
    </header>

    <section class="uis-event-container" style="margin-top: 100px;">
        <div
            class="uis-card
                uis-card-default
                uis-card-large
                uis-width-1-1
                uis-margin-top uis-margin-bottom">
            
            {{-- When event is done --}}
            <div class="uis-card-body uis-text-center">
                <img
                    class="uis-margin-top"
                    src="{{ asset('static/svg/thankyou.svg') }}"
                    alt="Illustration raffle registration done">

                <div class="uis-margin-medium-top">
                    <h3
                        class="uis-card-title
                            uis-text-primary
                            uis-margin-remove">
                        Registered Success 😀
                    </h3>

                    <p>Thank you for registering on our event raffle, Please wait for anouncement of winners by visiting our facebook page</p>
                    <a
                        class="uis-button uis-button-primary"
                        href="https://www.facebook.com/GigaMare/" target="_blank">
                        Visit our Page
                    </a>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
