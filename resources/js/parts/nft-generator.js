export function nftGenerator(isExist, gsap) {
    isExist('.nft-generator', (generators) => {
        generators.forEach((generator) => {
            let currentStage = 1;
            const timeout = 10000;
            const stages = Number(generator.getAttribute('data-stages'));
            const currentStageNumber = generator.querySelector('.current-stage');
            const controls = {
                arrowLeft: generator.querySelector('.nft-generator__controls__arrow.left'),
                arrowRight: generator.querySelector('.nft-generator__controls__arrow.right'),
                paginationPips: [],
                labels: [],
                partsSelectorPrev: generator.querySelector('.parts-selector__button--prev'),
                partsSelectorNext: generator.querySelector('.parts-selector__button--next'),
            };
            const shuttleParts = {
                skeleton: generator.querySelectorAll('.nft-generator__shuttle .skeleton img'),
                coloredParts: [],
            };
            const coloredContainer = generator.querySelectorAll(
                '.nft-generator__shuttle .colored [data-part-container]',
            );
            [...coloredContainer].forEach((container) => {
                shuttleParts.coloredParts.push({
                    container: container,
                    parts: [...container.children],
                });
            });
            [...generator.querySelectorAll('.pagination-pip')].forEach((pip, idx) => {
                const progressBar = pip.querySelector('.progress');
                const anim = gsap.fromTo(
                    progressBar,
                    {
                        width: 0,
                    },
                    {
                        paused: true,
                        width: '100%',
                        duration: timeout / 1000,
                        ease: 'none',
                    },
                );
                controls.paginationPips.push({
                    elem: pip,
                    animation: anim,
                    isActive: idx === 0,
                });
            });
            [...generator.querySelectorAll('.nft-generator__state span')].forEach((label, idx) => {
                const animIn = () => {
                    return gsap.fromTo(
                        label,
                        {
                            yPercent: -100,
                            opacity: 0,
                        },
                        {
                            yPercent: 0,
                            opacity: 1,
                        },
                    );
                };
                const animOut = () => {
                    return gsap.fromTo(
                        label,
                        {
                            yPercent: 0,
                            opacity: 1,
                        },
                        {
                            yPercent: 100,
                            opacity: 0,
                        },
                    );
                };
                controls.labels.push({
                    elem: label,
                    animationIn: animIn,
                    animationOut: animOut,
                    isActive: idx === 0,
                });
            });
            const intervalHandler = () => {
                changeCurrentStage(currentStage + 1);
            };
            let intervalId = setInterval(intervalHandler, timeout);
            const changeCurrentStage = (newStage) => {
                if (newStage > currentStage && currentStage === stages) return;
                if (newStage < currentStage && currentStage === 1) return;
                currentStage = newStage;
                updateStage();
            };
            const highlightSelectedSkeletonPart = (idx) => {
                const selectedContainer = shuttleParts.coloredParts[idx];
                shuttleParts.coloredParts.forEach((container) => {
                    container.container.classList.remove('active');
                });
                selectedContainer.container.classList.add('active');
            };
            const resetTimer = () => {
                clearInterval(intervalId);
                intervalId = setInterval(intervalHandler, timeout);
            };
            const updateVariationControls = () => {
                const selectedPartObject = shuttleParts.coloredParts[currentStage - 1];
                if (selectedPartObject.parts[selectedPartObject.parts.length - 1].classList.contains('visible')) {
                    controls.partsSelectorNext.classList.add('disabled');
                } else {
                    controls.partsSelectorNext.classList.remove('disabled');
                }
                if (selectedPartObject.parts[0].classList.contains('visible')) {
                    controls.partsSelectorPrev.classList.add('disabled');
                } else {
                    controls.partsSelectorPrev.classList.remove('disabled');
                }
            };
            const updateNftNavigation = (normalizedCurrentStage) => {
                const oldPip = controls.paginationPips.find((pip) => pip.isActive);
                oldPip.isActive = false;
                oldPip.elem.classList.remove('active', 'completed');
                oldPip.animation.progress(0).pause();
                const newPip = controls.paginationPips[normalizedCurrentStage];
                newPip.elem.classList.add('active');
                newPip.isActive = true;
                newPip.animation.play();
                if (currentStage === 1) {
                    controls.arrowLeft.classList.add('disabled');
                } else {
                    controls.arrowLeft.classList.remove('disabled');
                }
                if (currentStage === stages) {
                    controls.arrowRight.classList.add('disabled');
                } else {
                    controls.arrowRight.classList.remove('disabled');
                }
            };
            const updateStage = () => {
                generator.setAttribute('data-current-stage', currentStage);
                currentStageNumber.textContent = `0${currentStage}`;
                const normalizedCurrentStage = currentStage - 1;
                const oldLabel = controls.labels.find((label) => label.isActive);
                const newLabel = controls.labels[normalizedCurrentStage];
                oldLabel.isActive = false;
                oldLabel.animationOut().play();
                newLabel.animationIn().play();
                newLabel.isActive = true;
                highlightSelectedSkeletonPart(normalizedCurrentStage);
                updateNftNavigation(normalizedCurrentStage);
                updateVariationControls();
            };
            controls.arrowLeft.addEventListener('click', () => {
                changeCurrentStage(currentStage - 1);
                resetTimer();
            });
            controls.arrowRight.addEventListener('click', () => {
                changeCurrentStage(currentStage + 1);
                resetTimer();
            });
            controls.partsSelectorNext.addEventListener('click', () => {
                const selectedPartObject = shuttleParts.coloredParts[currentStage - 1];
                const currentVisiblePartIdx = selectedPartObject.parts.findIndex((part) =>
                    part.classList.contains('visible'),
                );
                if (currentVisiblePartIdx === -1) return;
                selectedPartObject.parts[currentVisiblePartIdx].classList.remove('visible');
                selectedPartObject.parts[currentVisiblePartIdx + 1].classList.add('visible');
                resetTimer();
                updateNftNavigation(currentStage - 1);
                updateVariationControls();
            });
            controls.partsSelectorPrev.addEventListener('click', () => {
                const selectedPartObject = shuttleParts.coloredParts[currentStage - 1];
                const currentVisiblePartIdx = selectedPartObject.parts.findIndex((part) =>
                    part.classList.contains('visible'),
                );
                if (currentVisiblePartIdx === -1 || currentVisiblePartIdx === 0) return;
                selectedPartObject.parts[currentVisiblePartIdx].classList.remove('visible');
                selectedPartObject.parts[currentVisiblePartIdx - 1].classList.add('visible');
                resetTimer();
                updateNftNavigation(currentStage - 1);
                updateVariationControls();
            });
            updateStage();
        });
    });
}
