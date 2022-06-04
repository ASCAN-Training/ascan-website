import {
    createEvent,
    isExist,
    //createCookie,
    //readCookie,
    //eraseCookie
} from './functions';

import gsap from 'gsap';
import { ScrollToPlugin } from 'gsap/ScrollToPlugin';
import { ScrollTrigger } from 'gsap/ScrollTrigger';

gsap.registerPlugin(ScrollToPlugin);
gsap.registerPlugin(ScrollTrigger);

let screenWidth = 0;
let vh = 0;
let headerHeight = 0;

function loadAndResize() {
    if (window.innerWidth !== screenWidth) {
        vh = window.innerHeight * 0.01;
        document.documentElement.style.setProperty('--vh', `${vh}px`);
        headerHeight = document.querySelector('header').getBoundingClientRect().height;
        document.documentElement.style.setProperty('--headerHeight', `${headerHeight}px`);
    }
    screenWidth = window.innerWidth;
    window.site.scrollBarWidth = window.innerWidth - document.body.scrollWidth;
}

/*********************
 * initialize some site properties
 *********************/
if (!window.site.hasOwnProperty('scrollBarWidth')) {
    window.site.scrollBarWidth = window.innerWidth - document.body.scrollWidth;
}

createEvent(window, 'resize', function (e) {
    loadAndResize();
});

createEvent(document, 'DOMContentLoaded', function () {
    loadAndResize();
});
createEvent(document, 'DOMContentLoaded', function () {});

// function getRandomDigit(min, max) {
//     return Math.random() * (max - min) + min;
// }
//
// function onOpenModal() {
//     document.documentElement.style.overflow = 'hidden';
//     document.documentElement.style.marginRight = `${window.site.scrollBarWidth}px`;
// }
//
// function onCloseModal() {
//     document.documentElement.style.overflow = '';
//     document.documentElement.style.marginRight = '';
// }
