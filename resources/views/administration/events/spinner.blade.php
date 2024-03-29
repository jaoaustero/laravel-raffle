@extends('app')

@section('content')
    <main class="uis-spinner-wrapper">
        <section
            class="uis-container
                uis-container-small">
            <div
                class="uis-text-center">
                <img
                    src="{{ asset('static/logo/GMI-h-inverse.svg') }}"
                    alt="GMI Horizontal Logo Inverse">
            </div>

            <div class="uis-spinner">
                <div class="uis-spinner-body">
                    <div class="uis-spinner-reel">
                        <ul
                            class="uis-list
                            uis-spinner-list"
                            id="players">
                            @foreach($players as $key=>$player)
                                <li
                                    class="{{ $key == 1 ? 'uis-active' : '' }}"
                                    data-id="{{ $player->id }}"
                                    data-index="{{$key+1}}">
                                    {{ $player->full_name }}
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>

            <div
                class="uis-text-center">
                <button
                    id="draw"
                    class="uis-button
                        uis-button-primary
                        uis-button-large">
                    DRAW!
                </button>

            </div>
        </section>

        @include('administration.events.modal.winner')
    </main>
@endsection