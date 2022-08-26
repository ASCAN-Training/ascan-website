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
                coloredFolderName: '',
                coloredParts: [],
                baseColoredPath: generator
                    .querySelector('.nft-generator__shuttle .colored')
                    .getAttribute('data-base-url'),
                //colored: generator.querySelectorAll('.nft-generator__shuttle .colored img'),
            };
            [...generator.querySelectorAll('.nft-generator__shuttle .colored img')].forEach((img) => {
                const obj = {
                    coloredPartsCount: Number(img.getAttribute('data-colored-parts')),
                    selectedColoredPart: 0,
                    imageElement: img,
                };
                shuttleParts.coloredParts.push(obj);
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
                const images = [...shuttleParts.skeleton];
                images.forEach((img) => img.classList.remove('active'));
                images[idx]?.classList.add('active');
                shuttleParts.coloredFolderName = images[idx]?.getAttribute('data-colored-folder');
            };
            const resetTimer = () => {
                clearInterval(intervalId);
                intervalId = setInterval(intervalHandler, timeout);
            };
            const updateVariationControls = () => {
                const selectedPartObject = shuttleParts.coloredParts[currentStage - 1];
                console.log(selectedPartObject);
                if (selectedPartObject.selectedColoredPart === selectedPartObject.coloredPartsCount) {
                    controls.partsSelectorNext.classList.add('disabled');
                } else {
                    controls.partsSelectorNext.classList.remove('disabled');
                }
                if (selectedPartObject.selectedColoredPart <= 0) {
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
                // [...shuttleParts.colored].forEach((img) => img.classList.remove('active'));
                // [...shuttleParts.colored]
                //     .slice(0, normalizedCurrentStage)
                //     .forEach((img) => img.classList.add('active'));
                highlightSelectedSkeletonPart(normalizedCurrentStage - 1);

                // if (normalizedCurrentStage === 1) {
                //     shuttleParts.skeleton[0].classList.add('hidden');
                // }
                // if (normalizedCurrentStage === 0) {
                //     shuttleParts.skeleton[0].classList.remove('hidden');
                // }
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
                if (selectedPartObject.selectedColoredPart < selectedPartObject.coloredPartsCount) {
                    shuttleParts.skeleton[currentStage - 2].classList.add('hidden');
                    resetTimer();
                    updateNftNavigation(currentStage - 1);
                    const generatedPath = `${shuttleParts.baseColoredPath}/${shuttleParts.coloredFolderName}/${
                        selectedPartObject.selectedColoredPart + 1
                    }.png`;
                    selectedPartObject.imageElement.src = generatedPath;
                    selectedPartObject.imageElement.classList.add('active');
                    selectedPartObject.selectedColoredPart++;
                    updateVariationControls();
                }
            });
            controls.partsSelectorPrev.addEventListener('click', () => {
                const selectedPartObject = shuttleParts.coloredParts[currentStage - 1];
                if (selectedPartObject.selectedColoredPart > 1) {
                    resetTimer();
                    updateNftNavigation(currentStage - 1);
                    const generatedPath = `${shuttleParts.baseColoredPath}/${shuttleParts.coloredFolderName}/${
                        selectedPartObject.selectedColoredPart - 1
                    }.png`;
                    selectedPartObject.imageElement.src = generatedPath;
                    selectedPartObject.imageElement.classList.add('active');
                    selectedPartObject.selectedColoredPart--;
                } else {
                    selectedPartObject.imageElement.classList.remove('active');
                    selectedPartObject.imageElement.src = '';
                    selectedPartObject.selectedColoredPart = 0;
                    shuttleParts.skeleton[currentStage - 2].classList.remove('hidden');
                }
                updateVariationControls();
            });
            updateStage();
        });
    });
}
