export function scrollWatcher(isExist, ScrollTrigger) {
    isExist('section', (sections) => {
        sections.forEach((section) => {
            new ScrollTrigger({
                trigger: section,
                onEnter: () => section.classList.add('section--visible'),
                onEnterBack: () => section.classList.add('section--visible'),
                onLeave: () => section.classList.remove('section--visible'),
                onLeaveBack: () => section.classList.remove('section--visible'),
            });
        });
    });
}
