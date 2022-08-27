export function notepadSlides(isExist, gsap, SplitText) {
    isExist('.notepad-slides', (notepads) => {
        notepads.forEach((notepad) => {
            const slides = notepad.querySelectorAll('.notepad-slide');
            let activeSlide = 0;
            const controls = {
                prevButton: notepad.querySelector('.btn-prev'),
                nextButton: notepad.querySelector('.btn-next'),
            };
            const toggleSlide = (prevSlide, currentSlide) => {
                prevSlide.style.display = 'none';
                currentSlide.style.display = 'block';
                if (activeSlide + 1 === slides.length) {
                    controls.nextButton.style.display = 'none';
                } else {
                    controls.nextButton.style.display = 'inline-block';
                }
                if (activeSlide === 0) {
                    controls.prevButton.style.display = 'none';
                } else {
                    controls.prevButton.style.display = 'inline-block';
                }
                const heading = currentSlide.querySelector('h2');
                const paragraphs = currentSlide.querySelectorAll('.content p, h2');
                const targets = [];
                heading ? targets.push(heading) : false;
                paragraphs ? targets.push(paragraphs) : false;
                const splittedParagraphs = new SplitText(paragraphs, { type: 'lines' });
                gsap.set(targets, { visibility: 'visible' });
                gsap.fromTo(
                    splittedParagraphs.lines,
                    { autoAlpha: 0, y: 15, x: 5 },
                    { autoAlpha: 1, y: 0, x: 0, duration: 0.3, stagger: 0.05 },
                );
            };
            controls.nextButton.addEventListener('click', () => {
                if (activeSlide + 1 === slides.length) return;
                activeSlide++;
                toggleSlide(slides[activeSlide - 1], slides[activeSlide]);
            });
            controls.prevButton.addEventListener('click', () => {
                if (activeSlide === 0) return;
                activeSlide--;
                toggleSlide(slides[activeSlide + 1], slides[activeSlide]);
            });
        });
    });
}
