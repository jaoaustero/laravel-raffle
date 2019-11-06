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

                <div class="uis-event-qr-container">

                    <div class="uis-position-relative">
                        <div class="uis-event-qr-tooltip">
                            "Scan to join on Raffle!"
                        </div>
                    </div>

                    <img
                        class="uis"
                        src="{{ asset('img/qr-code/crew-connect-2019.png') }}"
                        alt="QR Code">
                </div>
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
