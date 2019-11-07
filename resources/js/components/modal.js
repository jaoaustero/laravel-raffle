import $ from 'jquery'
import Util from './util'


/**
 * ==================================================
 * Constants
 * ==================================================
 */

const ESCAPE_KEYCODE = 27 // KeyboardEvent.which value for Escape (Esc) key

const Event = {
    KEYDOWN_DISSMISS: 'keydown',
    CLICK_DATA_API: 'click touch'
}

const Selector = {
    DATA_TOGGLE: '[uis-modal]',
    MODAL: 'uis-modal',
    DIALOG_FLEX: 'uis-flex-top',
    PAGE: 'uis-modal-page',
    OVERFLOW_AUTO: '[uis-overflow-auto]',
    HTML: 'html'
}

const ClassName = {
    MODAL: '.uis-modal',
    DIALOG: '.uis-modal-dialog',
    CLOSE: '.uis-modal-close, .close-modal',
    OPEN: '.uis-open',
}

const State = {
    OPEN: 'uis-open'
}



/**
 * ==================================================
 * Class Definition
 * ==================================================
 */

class Modal
{
    constructor(element, target, option)
    {
        this._element = element
        this._target = target
        this._option = option

        this._escClose = true
        this._bgClose = false
    }



    // Public

    toggle()
    {
        $(this._target).hasClass(State.OPEN) ? this.close() : this.open()
    }

    open()
    {

        this._setConfig()

        this._setDialogPosition()
        this._setEscapeEvent()
        this._setBackDropEvent()


        setTimeout(() =>
        {
            $(this._target).addClass(State.OPEN)
            $(Selector.HTML).addClass(Selector.PAGE)
        }, 50)

        $(document).on('click', ClassName.CLOSE, () =>
        {
            this.close()
        })
    }

    close()
    {

        this._setConfig()

        $(this._target).removeClass(State.OPEN)
        $(Selector.HTML).removeClass(Selector.PAGE)

        setTimeout(() =>
        {
            this._unsetDialogPosition()
        }, 300)
    }



    // Private

    _setConfig()
    {
        if (this._option != null)
        {
            this._escClose = Util.getModifierValue(this._option, 'esc-close') ? Util.getModifierValue(this._option, 'esc-close') : this._escClose

            this._bgClose = Util.getModifierValue(this._option, 'bg-close') ? Util.getModifierValue(this._option, 'bg-close') : this._bgClose
        }
    }

    _setDialogPosition()
    {
        if ($(this._target).hasClass(Selector.DIALOG_FLEX))
            $(this._target).css('display', 'flex')
        else
            $(this._target).css('display', 'block')
    }

    _unsetDialogPosition()
    {
        $(this._target).removeAttr('style')
    }



    _setEscapeEvent()
    {

        $(document).on('keyup', (e) =>
        {
            if (e.keyCode == ESCAPE_KEYCODE)
            {
                JSON.parse(this._escClose) ? this.close() : ''
            }
        })
    }



    _setBackDropEvent()
    {
        const $this = this
        $(document).on('click', ClassName.MODAL, function (e)
        {
            if (e.target !== this)
                return

            JSON.parse($this._bgClose) ? $this.close() : ''
        })
    }


    // Static

    static initialize(element)
    {
        let target = Util.getAttributeValue(element)
        let options = null

        if (Util.getOptions(target))
        {
            options = Util.getOptions(target)
        }

        if (element)
        {
            let modal = new Modal(element, target, options)
            modal.toggle()
        }
    }

    static show(target)
    {
        let modal = new Modal(null, target, null)
        modal.open()
    }

    static hide(target)
    {
        let modal = new Modal(null, target, null)
        modal.close()
    }
}


/**
 * ==================================================
 * Data Api implementation
 * ==================================================
 */

$(document)
    .on(Event.CLICK_DATA_API, Selector.DATA_TOGGLE, function (event)
    {

        if (this.tagName === 'A' || this.tagName === 'AREA')
        {
            event.preventDefault()
        }

        Modal.initialize(this)
    })

export default Modal