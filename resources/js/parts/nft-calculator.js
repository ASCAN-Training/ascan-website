import noUiSlider from 'nouislider';
import wNumb from 'wnumb';

export function nftCalculator(isExist) {
    isExist('.nft-calculator__slider', (sliders) => {
        sliders.forEach((slider) => {
            noUiSlider.create(slider, {
                range: {
                    min: 0,
                    max: 10000,
                },
                start: 0,
                step: 1,
                tooltips: true,
                connect: [true, false],
                format: wNumb({
                    decimals: 0,
                    thousand: '.',
                }),
            });
        });
    });
}
