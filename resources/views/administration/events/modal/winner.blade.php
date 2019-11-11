<div class="uis-modal" id="winner-modal">
    <div class="uis-modal-dialog">
        <div class="uis-modal-body uis-text-center uis-padding">
            <div>
                <img
                    src="/static/svg/trophy.svg"
                    alt="Trophy SVG"
                    height="100px"
                    width="100px">
            </div>
            
            <div class="uis-margin-top">
                <p class="uis-text-bold
                    uis-margin-remove">
                    Congratulations!
                </p>

                <h2
                    id="winner-name"
                    class="uis-text-primary
                    uis-margin-xsmall-top
                    uis-margin-remove-bottom">
                    {{-- Inject by script --}}
                </h2>
            </div>

            <div class="uis-margin-top uis-text-center">
                <button
                    class="uis-button
                        uis-button-primary
                        uis-margin-small-right
                        js-save-winner"
                        data-id=""
                        data-send="true">
                    Save & Email
                </button>
    
                <button
                    class="uis-button
                        uis-button-secondary
                        js-save-winner"
                        data-id=""
                        data-send="false">
                    Save
                </button>
            </div>
        </div>
    </div>
</div>