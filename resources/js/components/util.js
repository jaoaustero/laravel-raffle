const Util = {

    /**
     * This function is usually use for targeting an element like modal
     * e.g `uis-modal="target: #my-id"`
     * It will return object that seperated by `colon`.
     */
    splitParameter(param)
    {
        return param.replace(/ /g, "").split(":");
    },



    /**
     * This function will return the parameter
     * e.g `uis-modal="#my-id"`
     * It will return `#my-id`
     * NOTE: Its only applicable for (Modal, Notification, and Off-canvas)
     */
    getAttributeValue(element)
    {
        if (element.getAttribute('uis-modal'))
        {
            return element.getAttribute('uis-modal');
        }
        else if (element.getAttribute('uis-notification'))
        {
            return element.getAttribute('uis-notification');
        }
        else if (element.getAttribute('uis-offcanvas'))
        {
            return element.getAttribute('uis-offcanvas');
        }
        else if (element.getAttribute('uis-subnav'))
        {
            return element.getAttribute('uis-subnav');
        }
        else if (element.getAttribute('uis-tooltip'))
        {
            return element.getAttribute('uis-tooltip');
        }
        else if (element.getAttribute('uis-theme'))
        {
            return element.getAttribute('uis-theme');
        }
    },


    formatToArray(config)
    {
        return config.split(':');
    },

    getOptions(element)
    {
        if (document.querySelector(element).getAttribute('uis-option') == null)
        {
            return false
        }
        return document.querySelector(element).getAttribute('uis-option').split(';');
    },



    /**
     * @param {*} config
     * Format Array to Object
     * e.g: config ['flip', 'true', 'overlay', 'false']
     * return {'flip', 'true', 'overlay', 'false'}
     */
    formatToObject(config)
    {
        if (config != null)
        {
            let object = {}

            for (let i = 0; i < config.length; i++)
            {
                let temp = this.splitParameter(config[i])
                object[temp[0]] = temp[1]
            }

            return object
        }

    },


    /**
     * @param {*} options
     * pass a config array 
     * @param {*} modifier
     * pass a string modifier
     * return modifier value
     */
    getModifierValue(options, modifier)
    {
        return this.formatToObject(options)[modifier]
    }



}

export default Util;