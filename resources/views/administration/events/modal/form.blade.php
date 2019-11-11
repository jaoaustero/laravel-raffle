<div class="uis-modal" id="form-modal">
    <div class="uis-modal-dialog">
        <div class="uis-modal-body">
            <h2 class="uis-modal-title"><span id="js-type"></span> Event</h2>

            <div class="uis-margin-medium-top">
                {!! Form::open(['class' => 'uis-form-stacked', 'id' => 'event-form', 'action' => 'API\Administration\EventController@store', 'method' => 'POST']) !!}

                    <div class="uis-margin">
                        <label
                            class="uis-form-label"
                            for="event-title">
                            Title
                        </label>
                        <input
                            id="event-title"
                            type="text"
                            class="uis-input"
                            name="name"
                            placeholder="ex: GigaMare Event 2019 Day 1">

                        <small class="uis-text-danger form-error"></small>
                    </div>

                    <div class="uis-margin">
                        <label
                            class="uis-form-label"
                            for="event-name">
                            Location
                        </label>
                        <input
                            id="event-name"
                            type="text"
                            class="uis-input"
                            name="location"
                            placeholder="ex: Yacht Club, SBFZ, Philippines">

                        <small class="uis-text-danger form-error"></small>
                    </div>

                    <div class="uis-margin">
                        <label
                            class="uis-form-label"
                            for="event-date">
                            Date
                        </label>
                        <input
                            id="event-date"
                            type="date"
                            class="uis-input"
                            name="event_date"
                            placeholder="ex: Select date">

                        <small class="uis-text-danger form-error"></small>
                    </div>
                    
                    <div id="js-message" class="uis-text-center uis-margin-top"></div>

                    <div class="uis-text-right">
                        {{ Form::button('Submit', ['type' => 'submit', 'id' => 'js-submit', 'class' => 'uis-button uis-button-primary']) }}
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>