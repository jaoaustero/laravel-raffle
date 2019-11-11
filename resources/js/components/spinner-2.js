import $ from 'jquery';
import Modal from './modal';

/**
 * ==================================================
 * Constants
 * ==================================================
 */
const Event = {
    CLICK_DATA_API: 'click touch'
}

const Id = {
    BUTTON_DRAW: '#draw'
}



/**
 * ==================================================
 * Class Definition
 * ==================================================
 */

class Spinner
{
    constructor(el)
    {
        this._element = el
        this._isSpinning = false
        this.spinCount = 10
        this.spinnerSpeed = 10
        this._spinnerDone = false
    }

    // Public
    draw()
    {
        // this._getPositionBottom();

        this._getChildren();
    }

    // Private
    /**
     * This will randomly set spin count
     */
    _getChildren()
    {
        if ($('#players').children().length < 3)
        {
            alert('Wag nyo na gamitin to mag jack n poy nalang kayo 🤣');
            return;
        }
        // Mark as spinner is NOT done
        this._spinnerDone = false

        // Hide the button
        this._toggleDrawButton(false);

        // get winner
        let winner = this._selectWinner();

        // Add blur on UL
        $('#players').addClass('uis-active');

        // Endless spin unless clearInterval
        let sample = setInterval(() =>
        {
            this._spin();
        }, 50);

        setTimeout(() =>
        {
            // Start reducing the speed
            this._reduceSpinnerSpeed();

            const ab = setInterval(() =>
            {
                console.log(parseInt($('#players').children('li.uis-active').attr('data-index')), winner);
                if (parseInt($('#players').children('li.uis-active').attr('data-index')) == winner)
                {
                    clearInterval(sample);
                    clearInterval(ab);
                    $('#players').removeClass('uis-active');

                    // Show the button
                    this._toggleDrawButton(true);

                    // Mark as spinner as done
                    this._spinnerDone = true;

                    // get winner name
                    const playerWinnerName = $('#players').find('.uis-active').text();

                    // get winner id
                    const playerWinnerId = $('#players').find('.uis-active').attr('data-id');

                    // Inject player winner
                    $('#winner-modal').find('#winner-name').text(playerWinnerName);

                    $('#winner-modal').find('.js-save-winner').attr('data-id', playerWinnerId)

                    // SHow the modal
                    Modal.show('#winner-modal');
                }
            }, this.spinnerSpeed)
        }, 3000)
    }

    _spin()
    {
        // remove all active
        $('#players').children().removeClass('uis-active');

        let firstPlayer = $('#players').children().get(0);

        // $('#players').children().eq(1).addClass('uis-spinner-item-exit');

        // add active on center child
        $('#players').children().eq(2).addClass('uis-active');

        setTimeout(() => 
        {
            $('#players').append(firstPlayer);
        }, this.spinnerSpeed);

    }

    /**
     * This will randomly select winner
     */
    _selectWinner()
    {
        return Math.ceil(Math.random() * ($('#players').children().length));
    }

    /**
     * Toggle Button
     * Adds visibility class to toggle the button 
     * Disable the button
     */
    _toggleDrawButton(bool)
    {
        bool
            ? $(Id.BUTTON_DRAW)
                .css('visibility', 'visible')
                .removeAttr('disabled')
            : $(Id.BUTTON_DRAW)
                .css('visibility', 'hidden')
                .attr('disabled', 'true');
    }

    /**
     * This will randomly set spin count
     */
    _reduceSpinnerSpeed()
    {
        let reducer = setInterval(() =>
        {
            // console.log(`reducing speed to ${this.spinnerSpeed}`);
            this.spinnerSpeed += 50;

            if (this._spinnerDone)
            {
                clearInterval(reducer);
            }
        }, 300);
    }

    /**
     * The 
     */
    _getPositionBottom()
    {
        const bottom = (($('#players').position().top + $('#players').outerHeight(true)) - 200);

        console.log(bottom);

        $('#players').css('top', `-${bottom}px`)
    }


    // Static
    static start(el)
    {
        console.log('spinner start');
        let spinner = new Spinner(el);
        spinner.draw();
    }
}


/**
 * ==================================================
 * Data Api implementation
 * ==================================================
 */

$(document)
    .on(Event.CLICK_DATA_API, Id.BUTTON_DRAW, function (event)
    {

        Spinner.start(this);
    });