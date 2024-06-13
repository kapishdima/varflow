<form class="form" data-el="leed-form">
    <div class="form__item1">
        <label class="label" for="name">@lang('default.your_name') <span class="accent">*</span> </label>
        <input type="text" class="input" placeholder="Ваше имя" id="name" name="name" data-el="form-field"
            required />
    </div>
    <div class="form__item2">
        <label class="label" for="phone">@lang('default.your_phone') <span class="accent">*</span></label>
        <input type="tel" class="input" placeholder="+38 (0 _ _ ) _ _ _ _-_ _-_ _" id="phone" name="phone"
            data-el="form-field" required />
    </div>
    <div class="form__item3"><label class="label" for="">@lang('default.your_goal')</label>
        <div class="dropdown">
            <input class="dropdown-input" type="hidden" id="work_category" name="work_category" value=""
                data-el="form-field">
            <button class="dropdown-toggle" id="dropdownMenuButton" type="button" aria-haspopup="true"
                aria-expanded="false">
                @lang('default.select_project_type')
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                @foreach (explode('|', __('default.development_services')) as $developmentService)
                    <p class="dropdown-item" data-value="{{ $developmentService }}">{{ $developmentService }}</p>
                @endforeach
                @foreach (explode('|', __('default.design_services')) as $designService)
                    <p class="dropdown-item" data-value="{{ $designService }}">{{ $designService }}</p>
                @endforeach

            </div>
        </div>
    </div>
    <div class="form__item4">
        <label class="label" for="budget">@lang('default.budget')</label>
        <input class="input" placeholder="100 ГРН" id="budget" name="budget" data-el="form-field" />
    </div>
    <div class="form__item5">
        <label class="label" for="message">@lang('default.message')</label>
        <div>
            <textarea name="message" id="message" class="input textarea" placeholder="Расскажите подробнее о проекте"
                id="" cols="30" rows="10" data-el="form-field"></textarea>
        </div>
    </div>
    <div class="form__item6">
        <button class="link form__button" type="submit">@lang('default.start_project_text')
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
