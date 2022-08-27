export function whatIsAnimations(isExist, lottie, ScrollTrigger) {
    isExist('.what-is-card', (cards) => {
        cards.forEach((card) => {
            const lottieHolder = card.querySelector('.what-is-card__image');
            const lottieName = lottieHolder.getAttribute('data-lottie-name');
            const isAlternate = lottieHolder.getAttribute('data-lottie-alternate') === 'true';
            const renderer = lottieHolder.getAttribute('data-lottie-renderer');
            const animationData = require(`../lotties/${lottieName}.json`);
            const anim = lottie.loadAnimation({
                container: lottieHolder, // the dom element that will contain the animation
                renderer: renderer,
                loop: !isAlternate,
                autoplay: false,
                animationData: animationData, // the path to the animation json
            });
            new ScrollTrigger({
                trigger: cards,
                onEnter: () => anim.play(),
                onEnterBack: () => anim.play(),
                onLeave: () => anim.pause(),
                onLeaveBack: () => anim.pause(),
            });
            if (isAlternate) {
                let isAlternated = false;
                anim.onComplete = function () {
                    anim.setDirection(!isAlternated ? -1 : 1);
                    isAlternated = !isAlternated;
                    anim.play();
                };
            }
        });
    });
}
