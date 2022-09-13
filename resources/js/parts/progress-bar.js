export function progressBar(isExist, gsap) {
    isExist('.progress-bar', (bars) => {
        bars.forEach((bar) => {
            const current = Number(bar.getAttribute('data-current'));
            const target = Number(bar.getAttribute('data-target'));
            const content = bar.querySelector('.progress-bar__content');
            const filler = bar.querySelector('.progress-bar__filler');
            const percentage = ((current / target) * 100).toFixed(0);
            const parentPos = bar.getBoundingClientRect();
            const contentPos = content.getBoundingClientRect().left - parentPos.left;
            gsap.fromTo(
                filler,
                { width: 0 },
                {
                    width: `calc(${percentage}% + 4px)`,
                    duration: 1,
                    scrollTrigger: bar,
                    onUpdate: () => {
                        const fillerWidth = filler.getBoundingClientRect().width;
                        fillerWidth >= contentPos ? bar.classList.add('progress-bar--bright') : false;
                    },
                    onComplete: () => {
                        if (percentage === '100') {
                            bar.classList.add('progress-bar--filled');
                        }
                    },
                },
            );
        });
    });
}
