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
                            href="/spinner"
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
                                uis-margin-xsmall-right"
                            uis-modal="#form-modal">
                            <span class="uis-event-button-icon">📝</span>
                            <span>Edit</span>
                        </button>

                        <button
                            class="uis-button
                                uis-event-button"
                            uis-modal="#close-event">
                            <span class="uis-event-button-icon">🚩</span>
                            <span>Close</span>
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
                    Players
                </h3>

                <ul class="uis-list uis-list-large uis-list-divider">
                    <li>
                        Sasha Sloan 🏆
                    </li>

                    <li>
                        Frank Spin 🏆
                    </li>

                    <li>
                        John Doe
                    </li>
                    <li>
                        John Doe
                    </li>

                    <li>
                        John Doe
                    </li>

                    <li>
                        John Doe
                    </li>
                </ul>

                <div class="uis-text-center uis-margin-top">
                    <a class="uis-link uis-link-primary">
                        + Load more
                    </a>
                </div>
            </div>
        </div>
    </div>

    @include('administration.events.modal.form')
    @include('administration.events.modal.close')
</section>
@endsection