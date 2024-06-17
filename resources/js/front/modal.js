import MicroModal from "micromodal";

export function createModals() {
    MicroModal.init({
        openTrigger: "data-micromodal-trigger",
        closeTrigger: "data-micromodal-close",
        disableScroll: true,
        disableFocus: false,
        awaitCloseAnimation: true,
        awaitOpenAnimation: true,
    });
}
