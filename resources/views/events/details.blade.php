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

                <div class="uis-event-qr-container">

                    <div class="uis-position-relative">
                        <div class="uis-event-qr-tooltip">
                            "Scan to join on Raffle!"
                        </div>
                    </div>

                    <img
                        class="uis"
                        src="{{ asset('storage/' . $event->path) }}"
                        alt="QR Code">
                </div>

                <div class="uis-margin-top uis-text-center">
                    <p class="uis-margin-remove">
                        {{ env('APP_URL') .  '/' .$event->slug }}
                    </p>
                </div>
            </div>
            @else

            {{-- When event is done --}}
            <div class="uis-card-body uis-text-center">
                <img
                    class="uis-margin-top"
                    src="{{ asset('static/svg/registration-done.svg') }}"
                    alt="Illustration raffle registration done">

                <div class="uis-margin-medium-top">
                    <h3
                        class="uis-card-title
                            uis-text-primary
                            uis-margin-remove">
                        Too late 😟
                    </h3>

                    <p>The <span class="uis-text-primary">{{$event->name}}</span> event raffle registration is already done.</p>
                </div>
            </div>
            @endif
        </div>
    </section>
</div>
@endsection
