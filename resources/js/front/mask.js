import IMask from "imask";

export const initPhoneMask = () => {
    const inputEls = document.querySelectorAll('input[type="tel"]');

    inputEls.forEach((inputEl) => {
        const maskOptions = {
            mask: "+{380}(00)000-00-00",
        };
        const mask = IMask(inputEl, maskOptions);
    });
};
