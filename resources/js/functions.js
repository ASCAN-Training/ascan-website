/*********************
 *** any addEventListener
 *
 * @param {string | Element | NodeList} elements  - Function to execute when ready
 * @param {string} event - Event tpe
 * @param {function} callback - Execute function when triggered event
 * @returns {Element}
 *********************/
export const createEvent = (elements, event, callback) => {
    getElements(elements).forEach((item) => {
        return item.addEventListener(event, callback, false);
    });
};

export function isExist(elements, callback) {
    if (getElements(elements)) {
        return callback(getElements(elements));
    } else {
        return false;
    }
}

export const getElements = (parameter) => {
    if ((typeof parameter === 'string' && typeof parameter !== 'object') || parameter.constructor === String) {
        try {
            if (document.querySelectorAll(parameter).length > 0) {
                return Array.from(document.querySelectorAll(parameter));
            } else {
                return false;
            }
        } catch (e) {
            console.warn(e);
            return false;
        }
    } else {
        if (parameter.constructor === NodeList) {
            return Array.from(parameter);
        } else {
            return Array.from([parameter]);
        }
    }
};

export const toggleAction = (elem, className, timeline) => {
    if (!elem.classList.contains(className)) {
        elem.classList.add(className);
        timeline.play();
    } else {
        elem.classList.remove(className);
        timeline.reverse();
    }
};

/*********************
 *** Check device gesture
 *
 * @returns {boolean}
 *********************/
// export function isTouchDevice() {
//
//     let prefixes = " -webkit- -moz- -o- -ms- ".split(" ");
//     let mq = function (query) {
//         return window.matchMedia(query).matches;
//     };
//
//     if (("ontouchstart" in window) || window.DocumentTouch && document instanceof window.DocumentTouch) {
//         return true;
//     }
//     let query = ["(", prefixes.join("touch-enabled),("), "heartz", ")"].join('');
//     return mq(query);
// }

/*********************
 *** Set browser cookie
 *
 * @param name
 * @param value
 * @param days
 * @returns {undefined}
 *********************/
export function createCookie(name, value, days) {
    let expires = '';
    if (days) {
        let date = new Date();
        date.setTime(date.getTime() + days * 24 * 60 * 60 * 1000);
        expires = '; expires=' + date.toUTCString();
    }
    document.cookie = name + '=' + value + expires + '; path=/';
}

/*********************
 *** Get browser cookie
 *
 * @param {string} name
 * @returns {string | null}
 //  *********************/
export function readCookie(name) {
    let nameEQ = name + '=';
    let ca = document.cookie.split(';');
    for (let i = 0; i < ca.length; i++) {
        let c = ca[i];
        while (c.charAt(0) === ' ') c = c.substring(1, c.length);
        if (c.indexOf(nameEQ) === 0) return c.substring(nameEQ.length, c.length);
    }
    return null;
}

/*********************
 *** Delete browser cookie
 *
 * @param name
 * @returns {undefined}
 *********************/
export function eraseCookie(name) {
    createCookie(name, '', -1);
}
