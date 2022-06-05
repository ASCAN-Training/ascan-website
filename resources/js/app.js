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

gsap.registerPlugin(ScrollToPlugin);
gsap.registerPlugin(ScrollTrigger);
gsap.registerPlugin(SplitText);

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
            buttons.forEach((button) => {
                button.addEventListener('click', () => {
                    const activePage = notepad.querySelector('.notepad__page-content.active');
                    const activeButton = notepad.querySelector('.notepad__button.active');
                    const selectedModule = button.getAttribute('data-module');
                    const target = [...pages].find((page) => page.getAttribute('data-module') === selectedModule);
                    if (target === activePage) return;
                    const tl = gsap.timeline({paused: true});
                    gsap.to(activePage, {
                        y: 30, autoAlpha: 0, display: 'none', duration: 0.2, onComplete: () => {
                            activePage.classList.remove('active');
                            tl.play();
                        }
                    });
                    tl.fromTo(
                        target,
                        {y: 30, autoAlpha: 0, display: 'none'},
                        {
                            y: 0,
                            autoAlpha: 1,
                            display: 'block',
                            duration: 0.2,
                            onComplete: () => target.classList.add('active')
                        },
                    );
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
            form.addEventListener('submit', (e) => {
                e.preventDefault();
                form.reset();
                tl.play();
                setTimeout(() => tl.reverse(), 10000)
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
                    const attention = title.querySelector('.attention .icon');
                    const underline = title.querySelector('.draw-underline .icon');
                    if (attention) {
                        gsap.fromTo(attention, {scale: .5, autoAlpha: 0}, {
                            scale: 1,
                            autoAlpha: 1,
                            ease: "back.out(3)",
                            duration: .5
                        });
                    }
                    if (underline) {
                        gsap.to(underline, {strokeDashoffset: 0, duration: .3, ease: "none"})
                    }
                };
                gsap.from(mySplitText.words, {
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
                    particles.push(new Circle(randomIntFromRange(innerWidth / 2 - 100, innerWidth / 2 + 100), randomIntFromRange(innerHeight / 2 - 50, innerHeight / 2 + 50), 200, randomIntFromRange(1,12), colors[i]))
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
    })

    // isExist('.counter', (counters) => {
    //     counters.forEach((counter) => {
    //
    //     });
    // });
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
