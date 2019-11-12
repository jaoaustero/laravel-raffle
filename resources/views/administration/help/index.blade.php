@extends('app')

@section('content')

    @include('layouts.header', ['title' => $title])

    <div
        class="uis-container
                uis-container-small
                uis-margin-medium-top
                uis-margin-medium-bottom
                uis-animate
                uis-animate-fade-in">

        <div class="uis-text-center">
            <h2>
                Frequently Asked Questions
            </h2>
        </div>
                
        <ul
            class="uis-list
                    uis-list-large
                    uis-list-divider
                    uis-margin-large">

            <li>
                <p class="uis-text-bold">
                    🧿 What if the players have not QR-code reader?
                </p>

                <p>
                    Most of all apple iphones have a built-in on the camera, the android
                    must have the QR-code reader, if they don't have kindly type the URL
                    path provided under of the QR-code.
                </p>
            </li>

            <li>
                <p class="uis-text-bold">
                    🧿 Can players register multiple accounts?
                </p>

                <p>
                    The application will not allow multiple accounts with same email-address only.
                </p>
            </li>
                
            <li>
                <p class="uis-text-bold">
                    🧿 How to multiple date event?
                </p>

                <p>
                    Create a seperate event, with different QR code that will scan to join by the players, you
                    should close the past event to avoid problems.
                </p>
            </li>

            <li>
                <p class="uis-text-bold">
                    🧿 What happens if I close the event?
                </p>

                <p>
                    If the players trying to access the close event, they will see closed event message,
                    and the QR-code will not appear, this means the event is already done, but you can
                    still open the event again.
                </p>
            </li>

            <li>
                <p class="uis-text-bold">
                    🧿 How to cancel the winner if accidentally click the draw?
                </p>

                <p>
                    You can cancel by refreshing the page, or press <span class="uis-text-primary">esc</span>
                    key to close the modal, just avoid clicking the <span class="uis-text-primary">Save & Email</span>
                    or <span class="uis-text-primary">Save</span> button on the modal.
                </p>
            </li>

            <li>
                <p class="uis-text-bold">
                    🧿 How to view the QR-code generated?
                </p>

                <p>
                    Go the event list and select an event, then click the <span class="uis-text-primary">Details</span>
                    button on the top of the event details.
                </p>
            </li>

            <li>
                <p class="uis-text-bold">
                    🧿 How to see the winners after draw?
                </p>

                <p>
                    Go back to the events list and select the event, you can see on the right side the list of players
                    the winners have these 🏆 icon after their name.
                </p>
            </li>

            <li>
                <p class="uis-text-bold">
                    🧿 What is the minimum players need to be joined?
                </p>

                <p>
                    The spinner will work at-least 3 players or more than.
                </p>
            </li>

            <li>
                <p class="uis-text-bold">
                    🧿 Is there any maximum limit for the players who will join?
                </p>

                <p>
                    There are no limit, you can join as many as players that you have.
                </p>
            </li>

            <li>
                <p class="uis-text-bold">
                    🧿 What is the User tab?
                </p>

                <p>
                    Those are the system administrator or who have access on the application.
                </p>
            </li>
        </ul>

        <div class="uis-text-center
            uis-margin-large">
            <p>
                Don't find the answer on your question? Kindly contact the support team of GigaMare Inc.
                <span class="uis-text-primary">developers@gigamare.com</span>
            </p>
        </div>
    </div>
@endsection