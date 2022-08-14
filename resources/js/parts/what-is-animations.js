export function whatIsAnimations(isExist, lottie) {
    isExist('.what-is-card', (cards) => {
        cards.forEach((card) => {
            const lottieHolder = card.querySelector('.what-is-card__image');
            const lottieName = lottieHolder.getAttribute('data-lottie-name');
            const isAlternate = lottieHolder.getAttribute('data-lottie-alternate') === 'true';
            const animationData = require(`../lotties/${lottieName}.json`);
            const anim = lottie.loadAnimation({
                container: lottieHolder, // the dom element that will contain the animation
                renderer: 'svg',
                loop: !isAlternate,
                autoplay: true,
                animationData: animationData, // the path to the animation json
            });
            if (isAlternate) {
                let isAlternated = false;
                anim.onComplete = function () {
                    anim.setDirection(!isAlternated ? -1 : 1);
                    isAlternated = !isAlternated;
                    anim.play();
                    console.log('comptle');
                };
            }
        });
    });
}
