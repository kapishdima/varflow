export const createLeedForm = () => {
    const leedFormEl = document.querySelector('[data-el="leed-form"]');

    if (!leedFormEl) {
        return;
    }

    leedFormEl.addEventListener("submit", (event) => {
        event.preventDefault();
        event.stopPropagation();

        onLeedSubmit(leedFormEl);
    });
};

const onLeedSubmit = async (form) => {
    const formFieldEls = form.elements;

    const leedPayload = {
        name: formFieldEls.name.value,
        phone: formFieldEls.phone.value,
        work_category: formFieldEls.work_category.value,
        budget: formFieldEls.budget.value,
        message: formFieldEls.message.value,
    };

    const response = await fetch("/api/send-leed", {
        method: "POST",
        body: JSON.stringify(leedPayload),
        headers: {
            "Content-Type": "application/json",
            "X-CSRF-TOKEN": document
                .querySelector('meta[name="csrf-token"]')
                .getAttribute("content"),
        },
    });

    const result = await response.json();

    if (result.status === 200) {
        document.getElementsByClassName("done").style.display = "grid";
    }
};
