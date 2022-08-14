export function footerLottie(isExist, lottie) {
    isExist('.footer-lottie', (boxes) => {
        boxes.forEach((box) => {
            const animationData = require('../lotties/main.json');
            const anim = lottie.loadAnimation({
                container: box, // the dom element that will contain the animation
                renderer: 'svg',
                loop: true,
                autoplay: true,
                animationData: animationData, // the path to the animation json
            });
            // if (isAlternate) {
            //     let isAlternated = false;
            //     anim.onComplete = function () {
            //         anim.setDirection(!isAlternated ? -1 : 1);
            //         isAlternated = !isAlternated;
            //         anim.play();
            //         console.log('comptle');
            //     };
            // }
        });
    });
}
