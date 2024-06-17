export const createShowProjectButton = () => {
    const caseContainerEl = document.querySelector(
        '[data-el="case-container"]'
    );
    const buttonEl = document.querySelector('[data-el="show-project-button"]');

    if (!buttonEl || !caseContainerEl) {
        return;
    }

    // move button with mouse
    window.addEventListener("mousemove", (e) => {
        const x = e.pageX;
        const y = e.pageY;

        buttonEl.animate(
            {
                left: `${x}px`,
                top: `${y}px`,
            },
            { duration: 1000, fill: "forwards" }
        );
    });
};
