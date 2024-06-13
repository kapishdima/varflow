import MicroModal from "micromodal"
export function micromodalInit() {
  MicroModal.init({
    openTrigger: "data-micromodal-trigger",
    closeTrigger: "data-micromodal-close",
    disableScroll: true,
    disableFocus: false,
    awaitCloseAnimation: true,
    awaitOpenAnimation: true,
  })
}
