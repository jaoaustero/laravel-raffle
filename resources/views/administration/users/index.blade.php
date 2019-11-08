@extends('app')

@section('content')

@include('layouts.header', ['title' => $title])

<section
class="uis-container
    uis-margin-medium-top
    uis-margin-medium-bottom">
    <div class="uis-margin-medium">
        <button
            class="uis-button uis-button-primary"
            uis-modal="#form-modal">
            + New user
        </button>
    </div>

    <div class="uis-margin-medium">
        <ul class="uis-list uis-list-large">
            <li>
                <a
                    class="uis-link
                        uis-link-reset">
                    <div class="uis-card
                            uis-card-default
                            uis-card-body
                            uis-card-hover">
                        <h3 class="uis-card-title
                            uis-text-primary
                            uis-margin-small">
                            System Administrator
                        </h3>
                        <p class="uis-text-meta
                                uis-text-default
                                uis-margin-remove">
                            system.administrator@gigamare.com
                        </p>
                        <p class="uis-text-meta
                                uis-margin-remove">
                            Last login: November 06, 2019 at 13:44
                        </p>
                    </div>    
                </a>
            </li>

            <li>
                <a
                    class="uis-link
                        uis-link-reset">
                    <div class="uis-card
                            uis-card-default
                            uis-card-body
                            uis-card-hover">
                        <h3 class="uis-card-title
                            uis-text-primary
                            uis-margin-small">
                            Chenee Olesco
                        </h3>
                        <p class="uis-text-meta
                                uis-text-default
                                uis-margin-remove">
                            chenee.olesco@gigamare.com
                        </p>
                        <p class="uis-text-meta
                                uis-margin-remove">
                            Last login: September 29, 2019 at 23:01
                        </p>
                    </div>    
                </a>
            </li>
        </ul>
    </div>

    @include('administration.users.modal.form')
</section>
@endsection