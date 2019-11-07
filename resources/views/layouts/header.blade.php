<header
     class="uis-header">
    <div
        class="uis-container">
        <h1 class="uis-header-title uis-margin-small-top">
            {{ $title }}
        </h1>
        
        <ul class="uis-subnav uis-visible@m">
            <li
                class="{{ Request::segment(1) == 'events' ? 'uis-active' : ''}}">
                <a href="/events">
                    Events
                </a>
            </li>

            <li
                class="{{ Request::segment(1) == 'users' ? 'uis-active' : ''}}">
                <a href="/users">
                    Users
                </a>
            </li>

            <li
                class="{{ Request::segment(1) == 'settings' ? 'uis-active' : ''}}">
                <a href="/settings">
                    Settings
                </a>
            </li>
        </ul>
    </div>
</header>