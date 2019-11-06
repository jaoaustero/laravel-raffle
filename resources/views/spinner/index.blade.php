@extends('app')

@section('content')
    <main class="uis-spinner-wrapper">
        <section class="uis-container uis-container-small">
            <div class="uis-text-center">
                <img
                    src="{{ asset('img/GMI-h-inverse.svg') }}"
                    alt="GMI Horizontal Logo Inverse">
            </div>

            <div class="uis-spinner">
                <div class="uis-spinner-body">
                    <div class="uis-spinner-roller uis-text-center">
                        <ul
                            class="uis-list
                            uis-spinner-list"
                            id="players">
                            {{-- Injected by script --}}
                        </ul>
                    </div>
                </div>
            </div>

            <div class="uis-text-center">
                <button
                    id="draw"
                    class="uis-button
                        uis-button-primary
                        uis-button-large">
                    DRAW!
                </button>

            </div>
        </section>
    </main>
@endsection