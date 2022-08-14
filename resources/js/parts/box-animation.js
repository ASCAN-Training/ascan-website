export function boxAnimation(isExist, gsap) {
    isExist('.box-animation', (svgs) => {
        svgs.forEach((svg) => {
            const box = svg.querySelector('.box-animation__box');
            const boxContent = svg.querySelectorAll('.box-animation__box-content > *');
            const tl = gsap.timeline({
                scrollTrigger: {
                    trigger: svg,
                    scrub: true,
                    end: 'bottom 70%',
                },
            });
            tl.fromTo(box, { rotate: -150 }, { rotate: 0, duration: 1 });
            tl.fromTo(boxContent, { opacity: 0, yPercent: -60 }, { opacity: 1, yPercent: 0, stagger: 0.1 }, '-=.2');
        });
    });
}
