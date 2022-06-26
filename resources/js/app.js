import {
    createEvent,
    isExist,
    //createCookie,
    //readCookie,
    //eraseCookie
} from './functions';

import gsap from 'gsap';
import {ScrollToPlugin} from 'gsap/ScrollToPlugin';
import {ScrollTrigger} from 'gsap/ScrollTrigger';
import {SplitText} from "./libs/SplitText.js";
import {MotionPathPlugin} from './libs/MotionPathPlugin.js'

gsap.registerPlugin(ScrollToPlugin);
gsap.registerPlugin(ScrollTrigger);
gsap.registerPlugin(SplitText);
gsap.registerPlugin(MotionPathPlugin);

const _debounce = require('lodash.debounce');
import SlimSelect from "slim-select";
import axios from "axios";
import Swal from "sweetalert2/dist/sweetalert2.min.js";

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

    isExist('.notepad', (notepads) => {
        notepads.forEach((notepad) => {
            const buttons = notepad.querySelectorAll('.notepad__button');
            const pages = notepad.querySelectorAll('.notepad__page-content');
            const mobileBreakPoint = window.matchMedia('(max-width: 600px)');
            buttons.forEach((button) => {
                button.addEventListener('click', () => {
                    const activePage = notepad.querySelector('.notepad__page-content.active');
                    const activeButton = notepad.querySelector('.notepad__button.active');
                    const selectedModule = button.getAttribute('data-module');
                    const target = [...pages].find((page) => page.getAttribute('data-module') === selectedModule);
                    if (target === activePage || !activePage) return;
                    const tl = gsap.timeline({paused: true});
                    gsap.to(activePage, {
                        y: 30, opacity: 0, duration: 0.3, onComplete: () => {
                            activePage.classList.remove('active');
                            target.classList.add('active');
                            setTimeout(() => {
                                tl.play();
                            }, 100)
                        }
                    });
                    tl.play();
                    tl.fromTo(
                        target,
                        {y: 100, opacity: 0,},
                        {
                            y: 0,
                            opacity: 1,
                            duration: .5,
                            onComplete: () => {
                                if (mobileBreakPoint.matches) {
                                    gsap.to(window, {scrollTo: {y: notepad, offsetY: 0}, duration: .5})
                                }
                            }
                        });
                    activeButton.classList.remove('active');
                    button.classList.add('active');
                });
            });
        });
    });

    isExist('.faq', (faqs) => {
        faqs.forEach((faq) => {
            const questions = faq.querySelectorAll('.faq__question');
            questions.forEach((question) => {
                const button = question.querySelector('button');
                const content = question.querySelector('.faq__question__content');
                if (question.classList.contains('active')) {
                    gsap.set(content, {height: 'auto'})
                } else {
                    gsap.set(content, {height: 0})
                }
                const expand = () => {
                    gsap.to(content, {height: "auto", duration: .2});
                    button.setAttribute('aria-expanded', 'true')
                    content.setAttribute('aria-hidden', 'false')
                };
                const collapse = () => {
                    gsap.to(content, {height: 0, duration: .2});
                    button.setAttribute('aria-expanded', 'false')
                    content.setAttribute('aria-hidden', 'true')
                }
                button.addEventListener('click', () => {
                    question.classList.contains('active') ? collapse() : expand();
                    question.classList.toggle('active')
                });
            });
        });
    });

    isExist('.footer-subscribe__main', (subscribs) => {
        subscribs.forEach((subscribe) => {
            const initialBox = subscribe.querySelector('.subscribe-initial');
            const successBox = subscribe.querySelector('.subscribe-success');
            const loader = successBox.querySelector('svg .orange')
            const counter = subscribe.querySelector('.counter .value');
            const form = subscribe.querySelector('form');
            const submitBtn = subscribe.querySelector('button[type="submit"]');
            const tl = gsap.timeline({paused: true});
            tl.to(initialBox, {y: 30, autoAlpha: 0, duration: .3});
            tl.fromTo(successBox, {y: 30, autoAlpha: 0}, {
                y: 0,
                autoAlpha: 1,
                duration: .3,
                onComplete: () => {
                    animateValue(counter, 0, 100, 1000)
                    loader.classList.toggle('active')
                },
                onReverseComplete: () => {
                    loader.classList.toggle('active')
                    counter.textContent = '0'
                }
            });
            const onSuccess = () => {
                form.reset();
                tl.play();
                setTimeout(() => tl.reverse(), 10000);
            };
            form.addEventListener('submit', (e) => {
                //e.preventDefault();
                //form.reset();
                //tl.play();
                handleMailchimpForm(e, form, submitBtn, false, true, onSuccess)
            });
        });
    });

    isExist('.draw-underline', (underlines) => {
        underlines.forEach((underline) => {

        });
    });

    isExist('.title-animation', (titles) => {
        titles.forEach((title) => {
            document.fonts.ready.then(function () {
                const mySplitText = new SplitText(title, {type: "lines,words,chars", linesClass: "split-line"});
                const onAnimComplete = () => {
                    mySplitText.revert();
                    const attentions = title.querySelectorAll('.attention .icon');
                    const underlines = title.querySelectorAll('.draw-underline .icon');
                    const highlightEllipses = title.querySelectorAll('.highlight-ellipse .icon');
                    if (attentions.length) {
                        gsap.fromTo(attentions, {scale: .5, autoAlpha: 0}, {
                            scale: 1,
                            autoAlpha: 1,
                            ease: "back.out(3)",
                            duration: .5
                        });
                    }
                    if (underlines.length) {
                        gsap.to(underlines, {strokeDashoffset: 0, duration: .3, ease: "none"})
                    }
                    if (highlightEllipses.length) {
                        gsap.to(highlightEllipses, {strokeDashoffset: 0, duration: .3, ease: "none"})
                    }
                };
                const splittedArray = mySplitText.words;
                splittedArray.forEach((word, idx) => {
                    if (word.nextElementSibling?.classList.contains('img-in-text')) {
                        splittedArray.splice(idx + 1, 0, word.nextElementSibling);
                    }
                });
                gsap.from(splittedArray, {
                    duration: 0.4,
                    opacity: 0,
                    y: 100,
                    stagger: 0.05,
                    scrollTrigger: {
                        trigger: title,
                        start: "top 80%"
                    },
                    onStart: () => title.style.visibility = 'visible',
                    onComplete: () => onAnimComplete()
                });
            });
        });
    });

    isExist('.title-simple-animation', (titles) => {
        titles.forEach((title) => {
            const attention = title.querySelector('.attention .icon');
            const underline = title.querySelector('.draw-underline .icon');
            const highlightEllipse = title.querySelector('.highlight-ellipse .icon');
            if (attention) {
                gsap.fromTo(attention, {scale: .5, autoAlpha: 0}, {
                    scale: 1,
                    autoAlpha: 1,
                    ease: "back.out(3)",
                    duration: .5,
                    scrollTrigger: {
                        trigger: title,
                        start: "top 80%"
                    },
                });
            }
            if (underline) {
                gsap.to(underline, {
                    strokeDashoffset: 0, duration: .3, ease: "none", scrollTrigger: {
                        trigger: title,
                        start: "top 80%"
                    },
                })
            }
            if (highlightEllipse) {
                gsap.to(highlightEllipse, {
                    strokeDashoffset: 0, duration: .3, ease: "none", scrollTrigger: {
                        trigger: title,
                        start: "top 80%"
                    },
                })
            }
        });
    });

    isExist('.grad', (canvases) => {
        canvases.forEach((canvas) => {
            const ctx = canvas.getContext('2d')
            const colors = ["rgba(165, 171, 190, 0.12)"]

            function randomIntFromRange(min, max) {
                return Math.floor(Math.random() * (max - min + 1) + min)
            }

            function Circle(x, y, radius, xAngle, color) {
                this.x = x
                this.y = y
                this.xAngle = xAngle;
                this.radius = radius
                this.radians = Math.random() * Math.PI * 2
                this.velocity = 0.005
                this.distanceFromCenter = randomIntFromRange(radius / 2, canvas.width / 2)

                this.draw = () => {
                    ctx.beginPath()
                    ctx.ellipse(this.x, this.y, this.radius, this.radius + this.radius * 1.3, this.xAngle, 0, 2 * Math.PI);
                    ctx.fillStyle = color
                    ctx.fill()
                    ctx.closePath()
                }

                this.update = () => {
                    this.radians += this.velocity
                    this.x = x + Math.cos(this.radians) * this.distanceFromCenter
                    this.y = y + Math.sin(this.radians) * (canvas.height / 4)
                    this.xAngle = this.xAngle + this.velocity / 2;
                    this.draw()
                }
            }

            let particles

            function init() {
                canvas.width = innerWidth
                canvas.height = innerHeight

                particles = []

                for (let i = 0; i < colors.length; i++) {
                    particles.push(new Circle(randomIntFromRange(innerWidth / 2 - 100, innerWidth / 2 + 100), randomIntFromRange(innerHeight / 2 - 50, innerHeight / 2 + 50), 200, randomIntFromRange(1, 12), colors[i]))
                }
            }

            function animate() {
                requestAnimationFrame(animate)
                ctx.clearRect(0, 0, canvas.width, canvas.height);

                particles.forEach(particle => {
                    particle.update()
                });
            }

            addEventListener('resize', init)

            init()
            animate()
        })
    });

    isExist('.team-members', (blocks) => {
        blocks.forEach((block) => {
            const path = block.querySelector('.ellipse-path');
            const cards = block.querySelectorAll('.team-member');
            const animDuration = 40;
            const tl = gsap.timeline();
            const blinkTl = gsap.timeline();
            const oldProps = {
                scale: 1,
                opacity: 1
            }

            cards.forEach((card, idx) => {

                tl.to(card, {
                    duration: animDuration,
                    repeat: -1,
                    delay: (animDuration / cards.length + idx * animDuration / cards.length) - animDuration / cards.length * (cards.length + 1),
                    ease: "none",
                    motionPath: {
                        path: path,
                        align: path,
                        alignOrigin: [.5, .5],
                    },
                }, 0);
                blinkTl.from(card, {
                    opacity: 0.5,
                    scale: .8,
                    duration: 3,
                    repeat: -1,
                    ease: "none",
                    yoyo: true
                });
                card.addEventListener('mouseenter', () => {
                    tl.pause();
                    blinkTl.pause();
                    oldProps.opacity = gsap.getProperty(card, 'opacity');
                    oldProps.scale = gsap.getProperty(card, 'scale');
                    console.log(oldProps.scale)
                    gsap.to(card, {
                        scale: 1,
                        opacity: 1,
                        duration: .2,
                        zIndex: 1
                    });
                });
                card.addEventListener('mouseleave', () => {
                    tl.play();
                    blinkTl.play();
                    gsap.to(card, {
                        scale: oldProps.scale,
                        opacity: oldProps.opacity,
                        duration: .2,
                        zIndex: -1
                    });
                });
            });
        });
    });

    isExist('.burger', (burgers) => {
        burgers.forEach((burger) => {
            const header = document.querySelector('header');
            const mobileMenu = document.querySelector('.mobile-menu');
            const overlay = header.querySelector('.overlay');
            const showMenuTl = gsap.timeline({paused: true});
            const menuItems = mobileMenu.querySelectorAll('li a');
            let lastScrollTop = 0;
            let isPinned = true;
            let isOpen = false;
            let isHeaderOnTop = true;
            showMenuTl.fromTo(mobileMenu, {opacity: 0}, {opacity: 1, duration: .2})
            showMenuTl.fromTo(menuItems, {yPercent: 100}, {yPercent: 0, duration: .1, stagger: 0.05})
            window.addEventListener('scroll', (e) => {
                let st = window.pageYOffset || document.documentElement.scrollTop;
                if (st === 0 || st < 0) {
                    isHeaderOnTop = true;
                    header.classList.remove('header--pinned')
                    header.classList.add('header--on-top')
                    return;
                } else {
                    isHeaderOnTop = false;
                    header.classList.remove('header--on-top')
                }
                if (isPinned && st > 150 && !isOpen) {
                    header.classList.remove('header--pinned')
                }
                if (st > lastScrollTop) {
                    // downscroll code
                    if (isOpen)
                        return
                    isPinned = false
                    header.classList.remove('header--pinned')
                } else {
                    // upscroll code
                    isPinned = true
                    header.classList.add('header--pinned')
                }
                lastScrollTop = st <= 0 ? 0 : st;
            });
            burger.addEventListener('click', () => {
                isOpen = !isOpen;
                if (isOpen) {
                    showMenuTl.play();
                    onOpenModal();
                    header.classList.toggle('mobile-menu--show');
                } else {
                    showMenuTl.reverse();
                    onCloseModal();
                    header.classList.toggle('mobile-menu--show');
                }
            })
            overlay.addEventListener('click', () => burger.click())
        })
    });

    isExist('.scroll-snap', (sliders) => {
        sliders.forEach((slider) => {
            const carousel = slider.querySelector('.scroll-snap__elements')
            const elems = slider.querySelectorAll('.scroll-snap__elements > *');
            const indicators = slider.querySelectorAll('.scroll-snap__indicator');
            const objects = {};
            indicators.forEach((indicator, idx) => {
                objects[`item-${idx}`] = {
                    element: elems[idx],
                    indicator: indicator,
                    isActive: idx === 0
                }
                indicator.addEventListener('click', () => {
                    const elPos = carousel.scrollLeft + elems[idx].getBoundingClientRect().left - (elems[idx].getBoundingClientRect().width / 2);
                    carousel.scrollTo(elPos, null);
                });
            });

            const updateIndicators = () => {
                let allVisible = true;
                Object.values(objects).forEach((object) => {
                    if (isElementInViewport(object.element)) {
                        object.indicator.classList.add('active')
                    } else {
                        allVisible = false;
                        object.indicator.classList.remove('active')
                    }
                });
                allVisible ? slider.classList.add('no-scroll') : slider.classList.remove('no-scroll');
            }
            updateIndicators();
            carousel.addEventListener('scroll', _debounce(updateIndicators, 15));
            const observer = new IntersectionObserver(function (entries, observer) {
                if (entries.length === elems.length && !entries.find((entry) => entry.intersectionRatio < 1)) {
                    console.log(entries, entries.length === elems.length)
                    slider.classList.add('no-scroll')
                } else {
                    slider.classList.remove('no-scroll')
                }
            }, {
                root: carousel, threshold: 0.9
            });

            const debounceReobserve = _debounce(() => {
                updateIndicators();
            }, 100)
            window.addEventListener('resize', debounceReobserve);
        })
    });

    isExist('.form-field__select', (fields) => {
        fields.forEach((field) => {
            const select = field.querySelector('select');
            const placeholderOptions = field.querySelector('[data-placeholder]');
            new SlimSelect({
                select: select,
                showSearch: false,
                placeholder: placeholderOptions.getAttribute('data-placeholderText')
            })
        })
    });

    isExist('.get-in-touch__form', (forms) => {
        forms.forEach((form) => {
            const submitBtn = form.querySelector('button[type="submit"]');

            form.addEventListener('submit', (e) => {
                handleMailchimpForm(e, form, submitBtn, true, true)
            });
        })
    })

});
createEvent(document, 'DOMContentLoaded', function () {
});

function animateValue(target, start, end, duration) {
    let startTimestamp = null;
    //const numberOfDigits = end.toString().length;
    const step = (timestamp) => {
        if (!startTimestamp) startTimestamp = timestamp;
        const progress = Math.min((timestamp - startTimestamp) / duration, 1);
        let num = Math.floor(progress * (end - start) + start);
        const numLength = num.toString().length;
        //const diff = numberOfDigits - numLength;
        //let append = '';
        //for (let i = 0; i < diff; i++) {
        //    append += '0';
        //}
        //num = append + num;
        target.textContent = num;
        if (progress < 1) {
            window.requestAnimationFrame(step);
        }
    };
    window.requestAnimationFrame(step);
}

function showTitleParts(underlines, attentions, ellipses, isWithScrollTrigger) {

}

// function getRandomDigit(min, max) {
//     return Math.random() * (max - min) + min;
// }
//
let scrollPosition = 0;

function handleMailchimpForm(evt, form, submitBtn, defaultSuccess, defaultError, onSuccess, onError) {
    evt.preventDefault();
    submitBtn.classList.add('disabled');
    const fireSwal = (message, type) => {
        Swal.fire({
            title: message,
            icon: type,
            timer: 2000,
            timerProgressBar: true,
            showConfirmButton: false
        });
    }
    const data = new FormData(form);
    axios({
        method: 'POST',
        url: '/../send',
        data: data,
    })
        .then((res) => {
            if (res && res.data) {
                const message = res.data.message;
                form.reset();
                console.log(message);
                if (defaultSuccess) {
                    fireSwal(message, 'success');
                } else {
                    onSuccess();
                }

            }
        })
        .catch((err) => {
            if (err && err.response && err.response.data) {
                const message = err.response.data.message;
                console.log(message);
                if (defaultError) {
                    fireSwal(message, 'error');
                } else {
                    onError();
                }
            }
        })
        .finally(() => {
            submitBtn.classList.remove('disabled');
        });
}

function onOpenModal() {
    scrollPosition = window.pageYOffset;
    document.body.style.overflow = 'hidden';
    document.body.style.position = 'fixed';
    document.body.style.top = `-${scrollPosition}px`;
    document.body.style.width = '100%';
}

function onCloseModal() {
    document.body.style.removeProperty('overflow');
    document.body.style.removeProperty('position');
    document.body.style.removeProperty('top');
    document.body.style.removeProperty('width');
    window.scrollTo(0, scrollPosition);
}

function isElementInViewport(el) {

    const rect = el.getBoundingClientRect();

    return (
        rect.left >= 0 &&
        rect.right <= (window.innerWidth || document.documentElement.clientWidth)
    );
}