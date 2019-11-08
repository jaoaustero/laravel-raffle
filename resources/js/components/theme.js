import $ from 'jquery';
import Util from './util';

/**
 * ==================================================
 * Constants
 * ==================================================
 */

const Event = {
    CLICK_DATA_API: 'click touch'
}

const Selector = {
    DATA_TOGGLE: '[uis-theme]',
}



/**
 * ==================================================
 * Class Definition
 * ==================================================
 */
class Theme
{

    constructor(el)
    {
        this._target = el
    }


    // Public
    setTheme()
    {
        let theme = Util.getAttributeValue(this._target);

        switch (theme)
        {
            case 'default':
                $('body').removeClass('uis-theme-gloomy');
                $('body').removeClass('uis-theme-soft');
                $('body').removeClass('uis-theme-night');
                break;

            case 'gloomy':
                $('body').removeClass('uis-theme-soft');
                $('body').removeClass('uis-theme-night');

                $('body').addClass('uis-theme-gloomy');
                break;

            case 'soft':
                $('body').removeClass('uis-theme-gloomy');
                $('body').removeClass('uis-theme-night');

                $('body').addClass('uis-theme-soft');
                break;

            case 'night':
                $('body').removeClass('uis-theme-gloomy');
                $('body').removeClass('uis-theme-soft');

                $('body').addClass('uis-theme-night');
                break;
            default:
                break;
        }
        $('')
    }

    // Private

    // Static
    static initialize(el)
    {
        let theme = new Theme(el);
        theme.setTheme()
    }
};

/**
 * ==================================================
 * Data Api implementation
 * ==================================================
 */

$(document)
    .on(Event.CLICK_DATA_API, Selector.DATA_TOGGLE, function ()
    {
        Theme.initialize(this)
    })


export default Theme;