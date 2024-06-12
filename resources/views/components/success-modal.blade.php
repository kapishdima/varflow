<!-- <button onclick="MicroModal.show('modal-1');">Open Modal Dialog</button> -->
<div class="micromodal" id="modal-1" aria-hidden="true">
    <div class="micromodal__overlay" tabindex="-1" data-micromodal-close>
        <div class="micromodal__container" role="dialog" aria-modal="true" aria-labelledby="modal-1-title">
            <button class="micromodal__close" aria-label="Close modal" data-micromodal-close><svg
                    xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30" height="30"
                    viewBox="0 0 24 24">
                    <path
                        d="M 20.496094 2.9921875 A 0.50005 0.50005 0 0 0 20.146484 3.1464844 L 12 11.292969 L 3.8535156 3.1464844 A 0.50005 0.50005 0 0 0 3.4941406 2.9941406 A 0.50005 0.50005 0 0 0 3.1464844 3.8535156 L 11.292969 12 L 3.1464844 20.146484 A 0.50005 0.50005 0 1 0 3.8535156 20.853516 L 12 12.707031 L 20.146484 20.853516 A 0.50005 0.50005 0 1 0 20.853516 20.146484 L 12.707031 12 L 20.853516 3.8535156 A 0.50005 0.50005 0 0 0 20.496094 2.9921875 z">
                    </path>
                </svg></button>

            <div class="done-block">
                <div class="done-block__circle">
                    <svg width="104" height="104" viewBox="0 0 104 104" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M33.882 8.26003C38.2776 3.20497 44.7644 0 52 0C59.2353 0 65.7217 3.20465 70.1173 8.25928C76.8006 7.79234 83.6545 10.1128 88.7713 15.2297C93.8882 20.3466 96.2087 27.2005 95.7418 33.8837C100.796 38.2792 104 44.7653 104 52C104 59.2361 100.795 65.7232 95.739 70.1188C96.2049 76.801 93.8843 83.6534 88.7683 88.7694C83.6524 93.8854 76.7999 96.206 70.1178 95.7401C65.7222 100.795 59.2356 104 52 104C44.7648 104 38.2784 100.795 33.8829 95.7409C27.1996 96.2079 20.3456 93.8874 15.2287 88.7705C10.1118 83.6536 7.79125 76.7996 8.2582 70.1163C3.20419 65.7208 0 59.2348 0 52C0 44.7649 3.20451 38.2785 8.25896 33.883C7.79253 27.2003 10.1131 20.347 15.2295 15.2306C20.346 10.1141 27.1993 7.79357 33.882 8.26003ZM71.2549 42.325C72.539 40.5273 72.1226 38.0291 70.325 36.7451C68.5273 35.461 66.0291 35.8774 64.7451 37.675L47.4896 61.8327L38.8284 53.1716C37.2663 51.6095 34.7337 51.6095 33.1716 53.1716C31.6095 54.7337 31.6095 57.2663 33.1716 58.8284L45.1716 70.8284C46.003 71.6599 47.1581 72.0834 48.3299 71.9864C49.5017 71.8894 50.5715 71.2817 51.2549 70.325L71.2549 42.325Z"
                            fill="white" />
                    </svg>

                </div>
                <div class="done-block__text">
                    <h3 class="done-block__text--status">@lang('default.contact_success_title')</h3>
                    <h4 class="done-block__text--status-info">@lang('default.contact_success_subtitle')</h4>
                </div>

            </div>
        </div>
    </div>
</div>
