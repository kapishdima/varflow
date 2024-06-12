<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;
use Storage;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Quincy project
        Project::create([
            'id' => 1,
            'card_title' => 'Quincy',
            'title' => 'Quincy: Инновационное решение для организации мероприятий',
            'description' => 'Мы рады представить вам Quincy, уникальное веб-приложение, созданное нашей командой для упрощения и улучшения процесса организации мероприятий. С Quincy планирование становится легким и увлекательным занятием, независимо от масштаба события.',
            'main_image' => Storage::url('images/projects/quincy/cover.png'),
            "card_image" => Storage::url('images/projects/quincy/card_image.jpg'),
            'type' => 'Web-приложение',
            'tags' => json_encode(['Web-приложение', "Верстка", "Firebase", "React.js", "TypeScript"]),
            'content' => json_encode([
                [
                    "type" => "image_full",
                    "image" => Storage::url("images/projects/quincy/1.png")
                ],
                [
                    "type" => "left_text_right_image",
                    "image" => Storage::url("images/projects/quincy/2.png"),
                    "text" => "<b>Список задач</b>: Эффективное управление задачами помогает организовать все этапы подготовки мероприятия. От создания задач до отслеживания их выполнения — все под вашим контролем."
                ],
                [
                    "type" => "right_text_left_image",
                    "image" => Storage::url("images/projects/quincy/4.png"),
                    "text" => "<b>Список покупок</b>: Никогда не забудьте важные детали. Ведите учет необходимых покупок, контролируйте их выполнение и будьте уверены, что все готово к вашему событию."
                ],
                [
                    "type" => "left_text_right_image",
                    "image" => Storage::url("images/projects/quincy/6.png"),
                    "text" => "<b>Список гостей</b>: Управляйте списком приглашенных с легкостью. Отправляйте приглашения, отслеживайте подтверждения и создавайте идеальные списки гостей.<br/><b>Настройки мероприятия</b>: Гибкие настройки позволяют вам адаптировать приложение под конкретные нужды вашего мероприятия, обеспечивая его успешное проведение."
                ],
                [
                    "type" => "image_full",
                    "image" => Storage::url("images/projects/quincy/5.png"),
                ],
            ]),
        ]);

        // Just Sell project
        Project::create(
            [
                'id' => 2,
                'card_title' => 'Just Sell',
                'title' => 'Just Sell: Личный кабинет для управления терминалами оплаты',
                'description' => 'Компания Just Sell — ведущий разработчик программного обеспечения для терминалов оплаты. Наша команда гордится своим вкладом в развитие этой компании, реализовав Личный кабинет, который предоставляет пользователям полный контроль над их платежными терминалами.',
                'main_image' => Storage::url('images/projects/just_sell/cover.png'),
                "card_image" => Storage::url('images/projects/just_sell/card_image.jpg'),
                'type' => 'Web-приложение',
                'tags' => json_encode(['Web-приложение', "Верстка", "Vue.js", "TypeScript", "Security"]),
                'content' => json_encode([
                    [
                        "type" => "image_full",
                        "image" => Storage::url("images/projects/just_sell/1.png")
                    ],
                    [
                        "type" => "left_text_right_image",
                        "image" => Storage::url("images/projects/just_sell/2.png"),
                        "text" => "<b>Управление терминалами</b>: Добавляйте новые терминалы с помощью сканирования QR-кода или заполнения формы. Удобный интерфейс позволяет легко и быстро настраивать устройства."
                    ],
                    [
                        "type" => "right_text_left_image",
                        "image" => Storage::url("images/projects/just_sell/3.png"),
                        "text" => "<b>Отслеживание транзакций</b>: Получайте подробные отчеты о всех транзакциях, проведенных через ваши терминалы. Фильтры и сортировка данных позволяют быстро находить необходимую информацию."
                    ],
                    [
                        "type" => "text_image",
                        "image" => Storage::url("images/projects/just_sell/4.png"),
                        "text" => "<b>Управление товарами</b>: Добавляйте и редактируйте товары, которые обслуживают ваши терминалы. Обновляйте цены, описание и другие параметры товаров в несколько кликов.."
                    ],
                    [
                        "type" => "image_full",
                        "image" => Storage::url("images/projects/just_sell/5.png"),
                    ],
                    [
                        "type" => "text_full",
                        "text" => "Компания Just Sell и наш Личный кабинет уже получили высокие оценки пользователей. Доверьте управление вашими платежными терминалами надежному и удобному инструменту, разработанному нашей командой. Присоединяйтесь к числу наших довольных клиентов и ощутите все преимущества работы с Just Sell.",
                    ],
                ]),
            ]
        );

        // Freexit project
        Project::create(
            [
                'id' => 3,
                'card_title' => 'Freexit',
                "card_image" => Storage::url('images/projects/freexit/card_image.jpg'),
                'title' => 'Freexit: Инновационные решения для онлайн-оплат',
                'description' => 'Freexit — это ведущая компания, специализирующаяся на интеграции систем оплаты и разработке собственного программного обеспечения для проведения онлайн-оплат. Мы помогаем бизнесам всех размеров эффективно принимать платежи в интернете, обеспечивая надежность, безопасность и удобство для их клиентов.',
                'main_image' => Storage::url('images/projects/freexit/cover.png'),
                'type' => 'Landing Page',
                'tags' => json_encode(['Landing Page', "Верстка", "Сайт под-ключ"]),
                'content' => json_encode([
                    [
                        "type" => "image_full",
                        "image" => Storage::url("images/projects/freexit/1.png")
                    ],
                    [
                        "type" => "image_full",
                        "image" => Storage::url("images/projects/freexit/2.png"),
                    ],
                    [
                        "type" => "image_full",
                        "image" => Storage::url("images/projects/freexit/3.png"),
                    ],
                    [
                        "type" => "image_full",
                        "image" => Storage::url("images/projects/freexit/4.png"),
                    ],
                    [
                        "type" => "image_full",
                        "image" => Storage::url("images/projects/freexit/5.png"),
                    ],
                    [
                        "type" => "text_full",
                        "text" => "Freexit — ваш надежный партнер в мире онлайн-оплат. Доверьте интеграцию и разработку платежных систем профессионалам и сосредоточьтесь на развитии вашего бизнеса. Присоединяйтесь к числу наших довольных клиентов и ощутите все преимущества работы с Freexit.",
                    ],
                ]),
            ]
        );

        // Wood Expert project
        Project::create(
            [
                'id' => 4,
                'card_title' => 'Wood Expert',
                'title' => 'Wood Expert: Искусство создания идеальных лестниц',
                'description' => 'Wood Expert — это мастерская, где создаются уникальные и высококачественные лестницы ручной работы. Наши мастера используют только лучшие материалы и проверенные технологии, чтобы каждая лестница стала настоящим произведением искусства и гармонично вписалась в ваш интерьер.',
                'main_image' => Storage::url('images/projects/wood_expert/cover.png'),
                "card_image" => Storage::url('images/projects/wood_expert/card_image.jpg'),
                'type' => 'Landing Page',
                'tags' => json_encode(['Landing Page', "Верстка", "Сайт под-ключ"]),
                'content' => json_encode([
                    [
                        "type" => "image_full",
                        "image" => Storage::url("images/projects/wood_expert/1.png")
                    ],
                    [
                        "type" => "image_full",
                        "image" => Storage::url("images/projects/wood_expert/2.png"),
                    ],
                    [
                        "type" => "image_full",
                        "image" => Storage::url("images/projects/wood_expert/3.png"),
                    ],
                    [
                        "type" => "image_full",
                        "image" => Storage::url("images/projects/wood_expert/4.png"),
                    ],
                    [
                        "type" => "image_full",
                        "image" => Storage::url("images/projects/wood_expert/5.png"),
                    ],
                    [
                        "type" => "image_full",
                        "image" => Storage::url("images/projects/wood_expert/6.png"),
                    ],
                    [
                        "type" => "image_full",
                        "image" => Storage::url("images/projects/wood_expert/7.png"),
                    ],

                ]),
            ]
        );

        // Indel Cosmetics project
        Project::create(
            [
                'id' => 5,
                'card_title' => 'Indel Cosmetics',
                'title' => 'Indel Cosmetics: Качество и инновации в каждом компоненте',
                'description' => 'Indel Cosmetics — ведущий поставщик высококачественных ингредиентов для создания косметической продукции. Мы предлагаем широкий ассортимент компонентов, которые помогут вам создать эффективные и безопасные косметические средства. Наша миссия — поддерживать вас на каждом этапе производства, предоставляя только лучшие ингредиенты и решения.',
                'main_image' => Storage::url('images/projects/indel_cosmetics/cover.jpg'),
                "card_image" => Storage::url('images/projects/indel_cosmetics/card_image.jpg'),
                'type' => 'Web-приложение',
                'tags' => json_encode(['Web-приложение', "Nuxt.js", "Сайт под-ключ"]),
                'content' => json_encode([
                    [
                        "type" => "image_full",
                        "image" => Storage::url("images/projects/indel_cosmetics/1.jpg")
                    ],
                    [
                        "type" => "image_full",
                        "image" => Storage::url("images/projects/indel_cosmetics/2.jpg")
                    ],
                    [
                        "type" => "image_full",
                        "image" => Storage::url("images/projects/indel_cosmetics/3.jpg")
                    ],
                    // [
                    //     "type" => "left_text_right_image",
                    //     "image" => Storage::url("images/projects/indel_cosmetics/1.jpg"),
                    //     "text" => "
                    //         <b>Активные ингредиенты</b>: Высококонцентрированные активные вещества, которые обеспечивают эффективность ваших косметических средств. <br/>
                    //         <b>Эмоленты и увлажнители</b>: Компоненты, которые смягчают и увлажняют кожу, придавая вашим продуктам уникальные свойства.
                    //     "
                    // ],
                    // [
                    //     "type" => "right_text_left_image",
                    //     "image" => Storage::url("images/projects/indel_cosmetics/2.jpg"),
                    //     "text" => "<b>Консерванты и стабилизаторы</b>: Надежные консерванты и стабилизаторы, которые продлевают срок годности продукции и сохраняют её качество."
                    // ],
                    // [
                    //     "type" => "left_text_right_image",
                    //     "image" => Storage::url("images/projects/indel_cosmetics/3.jpg"),
                    //     "text" => "
                    //         <b>Эмульгаторы и загустители</b>: Идеальные для создания однородных и стабильных эмульсий, которые легко наносятся и приятно ощущаются на коже.<br/>
                    //         <b>Экстракты и натуральные масла</b>: Натуральные экстракты и масла, которые придают косметическим средствам полезные свойства и приятный аромат.
                    //     "
                    // ],
                ]),
            ]
        );

        // Chempha project
        Project::create(
            [
                'id' => 6,
                'card_title' => 'Chempha',
                'title' => 'Chempha: Ваш надежный поставщик ингредиентов для косметической продукции',
                'description' => 'Chempha — ведущая компания, специализирующаяся на поставке высококачественных ингредиентов для производства косметической продукции. Мы стремимся обеспечить вас лучшими компонентами, чтобы помочь вам создавать эффективные, безопасные и инновационные косметические средства. Наш опыт и знания позволяют нам предлагать решения, идеально соответствующие вашим требованиям.',
                'main_image' => Storage::url('images/projects/chempha/cover.jpg'),
                "card_image" => Storage::url('images/projects/chempha/card_image.jpg'),
                'type' => 'Web-приложение',
                'tags' => json_encode(['Web-приложение', "Nuxt.js", "Сайт под-ключ"]),
                'content' => json_encode([
                    [
                        "type" => "image_full",
                        "image" => Storage::url("images/projects/chempha/1.jpg")
                    ],
                    [
                        "type" => "image_full",
                        "image" => Storage::url("images/projects/chempha/2.jpg")
                    ],
                    // [
                    //     "type" => "left_text_right_image",
                    //     "image" => Storage::url("images/projects/indel_cosmetics/1.jpg"),
                    //     "text" => "
                    //         <b>Активные ингредиенты</b>: Высококонцентрированные активные вещества, которые обеспечивают эффективность ваших косметических средств. <br/>
                    //         <b>Эмоленты и увлажнители</b>: Компоненты, которые смягчают и увлажняют кожу, придавая вашим продуктам уникальные свойства.
                    //     "
                    // ],
                    // [
                    //     "type" => "right_text_left_image",
                    //     "image" => Storage::url("images/projects/indel_cosmetics/2.jpg"),
                    //     "text" => "<b>Консерванты и стабилизаторы</b>: Надежные консерванты и стабилизаторы, которые продлевают срок годности продукции и сохраняют её качество."
                    // ],
                    // [
                    //     "type" => "left_text_right_image",
                    //     "image" => Storage::url("images/projects/indel_cosmetics/3.jpg"),
                    //     "text" => "
                    //         <b>Эмульгаторы и загустители</b>: Идеальные для создания однородных и стабильных эмульсий, которые легко наносятся и приятно ощущаются на коже.<br/>
                    //         <b>Экстракты и натуральные масла</b>: Натуральные экстракты и масла, которые придают косметическим средствам полезные свойства и приятный аромат.
                    //     "
                    // ],
                ]),
            ]
        );
    }
}
