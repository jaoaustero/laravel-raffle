@extends('app')

@section('content')

@include('layouts.header', ['title' => $title])

<section
    class="uis-container
        uis-margin-medium-top
        uis-margin-medium-bottom">
    
    <div class="uis-grid">
        <div class="uis-width-1-1@s uis-width-1-1@m uis-width-3-5@l uis-width-3-5@xl">
            <ul class="uis-list uis-list-large">
                <li>
                    <div class="uis-card uis-card-default uis-card-body">
                        <a
                            class="uis-link
                                uis-link-reset
                                uis-margin-xsmall-right"
                            href="{{ env('APP_URL') . '/events/' . $event->slug . '/spinner'}}"
                            target="_blank">
                            <button
                                    class="uis-button
                                    uis-event-button">
                                <span class="uis-event-button-icon">🎰</span>
                                <span>Draw</span>
                            </button>
                        </a>

                        <a
                            class="uis-link
                                uis-link-reset
                                uis-margin-xsmall-right"
                            href="/{{ $event->slug }}"
                            target="_blank">
                            <button
                                    class="uis-button
                                    uis-event-button">
                                <span class="uis-event-button-icon">📰</span>
                                <span>Details</span>
                            </button>
                        </a>

                        <button 
                            class="uis-button
                                    uis-event-button
                                    uis-margin-xsmall-right
                                    js-open-modal"
                            data-type="edit"
                            data-id="{{$event->id}}"
                            uis-modal="#form-modal">
                            <span class="uis-event-button-icon">📝</span>
                            <span>Edit</span>
                        </button>

                        <button
                            class="uis-button
                                    uis-event-button
                                    js-open-status-modal"
                            uis-modal="#close-event"
                            data-id="{{$event->id}}"
                            data-active="{{$event->is_active}}"
                            data-name="{{$event->name}}"
                            >
                            <span class="uis-event-button-icon">🚩</span>
                            <span>{{$event->is_active ? 'Close' : 'Open'}}</span>
                        </button>
                    </div>
                </li>

                <li>
                    <div class="uis-card uis-card-default uis-card-body">
                        <ul class="uis-list uis-list-large uis-padding-remove-left">
                            <li>
                                <p
                                    class="uis-text-primary
                                        uis-margin-remove">
                                    Status
                                </p>
                                <p class="uis-margin-remove">
                                    {{ $event->is_active ? 'Open' : 'Close' }}
                                </p>
                            </li>

                            <li>
                                <p
                                    class="uis-text-primary
                                        uis-margin-remove">
                                    Location
                                </p>
                                <p class="uis-margin-remove">
                                    {{ $event->location }}
                                </p>
                            </li>

                            <li>
                                <p
                                    class="uis-text-primary
                                        uis-margin-remove">
                                    Event Date
                                </p>
                                <p class="uis-margin-remove">
                                    {{ (new \DateTime($event->event_date))->format('F d, Y') }}
                                </p>
                            </li>
                            
                        </ul>
                    </div>
                </li>
            </ul>
        </div>

        <div class="uis-width-1-1@s uis-width-1-1@m uis-width-2-5@l uis-width-2-5@xl">
            <div class="uis-card uis-card-default uis-card-body">
                <h3 class="uis-card-title">
                    Players ({{count($players)}})
                </h3>

                @if(count($players))
                    <ul class="uis-list uis-list-large uis-list-divider" id="js-players-container">
                        @foreach($players->take(10) as $player)
                            <li>
                                {{$player->full_name}}
                                @if($player->is_selected)
                                    🏆
                                @endif
                            </li>
                        @endforeach
                    </ul>
                @else
                    <p>No players yet</p>
                @endif

                @if(count($players) > 10)
                    <div class="uis-text-center uis-margin-top">
                        <a class="uis-link uis-link-primary js-load-more" data-id="{{$event->id}}">
                            + Load more
                        </a>
                    </div>
                @endif
            </div>
        </div>
    </div>

    @include('administration.events.modal.form')
    @include('administration.events.modal.close')
</section>
@endsection