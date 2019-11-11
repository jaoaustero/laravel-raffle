<section class="uis-margin-large">
    <p
        class="uis-text-medium
            uis-text-emphasis">
        Themes
    </p>

    <hr
        class="uis-hr
            uis-margin">

    <div class="uis-grid
        uis-child-width-1-2
        uis-child-width-1-4@s
        uis-child-width-1-6@m
        uis-child-width-1-6@l">
        <div>
            <img
                src="{{ asset('static/svg/themes/default.svg') }}"
                alt="Default Theme">

            <div class="uis-margin-small">
                <label>
                    <input
                        uis-theme="default"
                        type="radio"
                        class="uis-radio"
                        name="theme"
                        checked>
                    Default
                </label>
            </div>
        </div>

        <div>
            <img
                src="{{ asset('/static/svg/themes/gloomy.svg') }}"
                alt="Gloomy Theme">

            <div class="uis-margin-small">
                <label>
                    <input
                        uis-theme="gloomy"
                        type="radio"
                        class="uis-radio"
                        name="theme">
                    Gloomy
                </label>
            </div>
        </div>

        <div>
            <img
                src="{{ asset('/static/svg/themes/soft.svg') }}"
                alt="Soft Theme">

            <div class="uis-margin-small">
                <label>
                    <input
                        uis-theme="soft"
                        type="radio"
                        class="uis-radio"
                        name="theme">
                    Soft
                </label>
            </div>
        </div>

        <div>
            <img
                src="{{ asset('/static/svg/themes/night.svg') }}"
                alt="Night Theme">

            <div class="uis-margin-small">
                <label>
                    <input
                        uis-theme="night"
                        type="radio"
                        class="uis-radio"
                        name="theme">
                    Night
                </label>
            </div>
        </div>
    </div>
</section>