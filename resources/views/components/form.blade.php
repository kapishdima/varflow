<form class="form" data-el="leed-form">
    <div class="form__item1">
        <label class="label" for="name">Ваше имя <span class="accent">*</span> </label>
        <input type="text" class="input" placeholder="Ваше имя" id="name" name="name" data-el="form-field"
            required />
    </div>
    <div class="form__item2">
        <label class="label" for="phone">Ваш телефон <span class="accent">*</span></label>
        <input type="tel" class="input" placeholder="+38 (0 _ _ ) _ _ _ _-_ _-_ _" id="phone" name="phone"
            data-el="form-field" required />
    </div>
    <div class="form__item3"><label class="label" for="">Что вас интересует</label>
        <div class="dropdown">
            <input class="dropdown-input" type="hidden" id="work_category" name="work_category" value=""
                data-el="form-field">
            <button class="dropdown-toggle" id="dropdownMenuButton" type="button" aria-haspopup="true"
                aria-expanded="false">
                Выберите значение
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <p class="dropdown-item" data-value="value1">Значение 1</p>
                <p class="dropdown-item" data-value="value2">Значение 2</p>
                <p class="dropdown-item" data-value="value3">Значение 3</p>
            </div>
        </div>
    </div>
    <div class="form__item4">
        <label class="label" for="budget">Бюджет проекта</label>
        <input class="input" placeholder="100 ГРН" id="budget" name="budget" data-el="form-field" />
    </div>
    <div class="form__item5">
        <label class="label" for="message">Сообщение</label>
        <div>
            <textarea name="message" id="message" class="input textarea" placeholder="Расскажите подробнее о проекте"
                id="" cols="30" rows="10" data-el="form-field"></textarea>
        </div>
    </div>
    <div class="form__item6">
        <button class="link form__button" type="submit">Начать проект
            <span class="link__icon form__button--icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14"
                    fill="none">
                    <path class="link__icon--path"
                        d="M3.65377 9.60377C3.44874 9.80879 3.44874 10.1412 3.65377 10.3462C3.85879 10.5513 4.19121 10.5513 4.39623 10.3462L9.45 5.29246L9.45 9.275C9.45 9.56495 9.68505 9.8 9.975 9.8C10.2649 9.8 10.5 9.56495 10.5 9.275L10.5 4.025C10.5 3.95382 10.4858 3.88594 10.4602 3.82404C10.4351 3.76352 10.3983 3.70674 10.3496 3.65721C10.3474 3.65491 10.3451 3.65262 10.3428 3.65036C10.2933 3.60172 10.2365 3.56487 10.176 3.53984C10.1141 3.51417 10.0462 3.5 9.975 3.5L4.725 3.5C4.43505 3.5 4.2 3.73505 4.2 4.025C4.2 4.31495 4.43505 4.55 4.725 4.55L8.70754 4.55L3.65377 9.60377Z"
                        fill="currentColor" />
                </svg>
            </span>
        </button>
    </div>
</form>
<div class="done">
    <div class="done-block">
        <div class="done-block__circle">
            <svg width="104" height="104" viewBox="0 0 104 104" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M33.882 8.26003C38.2776 3.20497 44.7644 0 52 0C59.2353 0 65.7217 3.20465 70.1173 8.25928C76.8006 7.79234 83.6545 10.1128 88.7713 15.2297C93.8882 20.3466 96.2087 27.2005 95.7418 33.8837C100.796 38.2792 104 44.7653 104 52C104 59.2361 100.795 65.7232 95.739 70.1188C96.2049 76.801 93.8843 83.6534 88.7683 88.7694C83.6524 93.8854 76.7999 96.206 70.1178 95.7401C65.7222 100.795 59.2356 104 52 104C44.7648 104 38.2784 100.795 33.8829 95.7409C27.1996 96.2079 20.3456 93.8874 15.2287 88.7705C10.1118 83.6536 7.79125 76.7996 8.2582 70.1163C3.20419 65.7208 0 59.2348 0 52C0 44.7649 3.20451 38.2785 8.25896 33.883C7.79253 27.2003 10.1131 20.347 15.2295 15.2306C20.346 10.1141 27.1993 7.79357 33.882 8.26003ZM71.2549 42.325C72.539 40.5273 72.1226 38.0291 70.325 36.7451C68.5273 35.461 66.0291 35.8774 64.7451 37.675L47.4896 61.8327L38.8284 53.1716C37.2663 51.6095 34.7337 51.6095 33.1716 53.1716C31.6095 54.7337 31.6095 57.2663 33.1716 58.8284L45.1716 70.8284C46.003 71.6599 47.1581 72.0834 48.3299 71.9864C49.5017 71.8894 50.5715 71.2817 51.2549 70.325L71.2549 42.325Z"
                    fill="white" />
            </svg>
        </div>
        <div class="done-block__text">
            <h3 class="done-block__text--status">Ваша заявка принята!</h3>
            <h4 class="done-block__text--status-info">Наш менеджер уже связывается с вами</h4>
        </div>
    </div>
</div>
<style>

</style>
