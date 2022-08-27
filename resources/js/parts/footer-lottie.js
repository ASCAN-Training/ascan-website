export function footerLottie(isExist, lottie, ScrollTrigger) {
    isExist('.footer-lottie', (boxes) => {
        boxes.forEach((box) => {
            const animationData = require('../lotties/main.json');
            const anim = lottie.loadAnimation({
                container: box, // the dom element that will contain the animation
                renderer: 'svg',
                loop: true,
                autoplay: false,
                animationData: animationData, // the path to the animation json
            });
            new ScrollTrigger({
                trigger: boxes,
                onEnter: () => anim.play(),
                onEnterBack: () => anim.play(),
                onLeave: () => anim.pause(),
                onLeaveBack: () => anim.pause(),
            });
        });
    });
}
