<?php

namespace App\Services\API;

use App\Models\SeoData;
use Telegram\Bot\Api;

class TelegramService {
    public function __construct(protected Api $telegram) {}

    public function sendLeed ($leedData) {
        $title = "<b>Заявка с сайта</b> 💰";
        $name = "<b>Имя: </b>" . $leedData["name"];
        $phone = "<b>Номер телефона: </b>" . $leedData["name"];
        $workCategory = "<b>Что интересует: </b>" . $leedData["work_category"];
        $budget = "<b>Бюджет проекта: </b>" . $leedData["budget"] ?? "Неизвестно";
        $message = "<b>Сообщение: </b>" . $leedData["message"];

        $content = implode("\n", [$title, $name, $phone, $workCategory, $budget, $message]);

        $this->telegram->sendMessage([
            "chat_id" => "-4198178896",
            "text" => $content,
            "parse_mode" => "html"
        ]);
    }
}
