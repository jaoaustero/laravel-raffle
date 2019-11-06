import $ from 'jquery';


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
        // get winner
        let winner = Math.ceil(Math.random() * ($('#players').children().length));

        $('#players').addClass('uis-active');

        let sample = setInterval(() =>
        {
            this._spin();
        }, 50);

        setTimeout(() =>
        {
            const ab = setInterval(() =>
            {
                console.log(parseInt($('#players').children('li.uis-active').attr('data-id')), winner);
                if (parseInt($('#players').children('li.uis-active').attr('data-id')) == winner)
                {
                    clearInterval(sample);
                    clearInterval(ab);
                    $('#players').removeClass('uis-active');
                }
            }, 300)
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
        }, 200);

    }

    /**
     * This will randomly select winner
     */
    _selectWinner()
    {

    }

    /**
     * This will randomly set spin count
     */
    _setSpinCount()
    {

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