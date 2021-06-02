<?php

return [

    'company' => [
        'description'                => 'Изменить название компании, email, адрес, налоговый номер и т.д.',
        'name'                       => 'Имя',
        'email'                      => 'E-mail',
        'phone'                      => 'Телефон',
        'address'                    => 'Адрес',
        'edit_your_business_address' => 'Изменить ваш бизнес-адрес',
        'logo'                       => 'Логотип',
    ],

    'localisation' => [
        'description'       => 'Установить финансовый год, часовой пояс, формат даты и другие локализации',
        'financial_start'   => 'Начало финансового года',
        'timezone'          => 'Часовой пояс',
        'financial_denote' => [
            'title'         => 'Начало финансового года',
            'begins'        => 'К тому году, в котором он начинается',
            'ends'          => 'К тому году, в котором он начинается',
        ],
        'date' => [
            'format'        => 'Формат даты',
            'separator'     => 'Разделитель даты',
            'dash'          => 'Тире (-)',
            'dot'           => 'Точка (.)',
            'comma'         => 'Запятая (,)',
            'slash'         => 'Слэш (/)',
            'space'         => 'Пробел ( )',
        ],
        'percent' => [
            'title'         => 'Процент позиции',
            'before'        => 'Перед числом',
            'after'         => 'После числа',
        ],
        'discount_location' => [
            'name'          => 'Расположение скидки',
            'item'          => 'В строке',
            'total'         => 'Всего',
            'both'          => 'В строке и всего',
        ],
    ],

    'invoice' => [
        'description'       => 'Настроить префикс счета, номер, термины, нижний колонтитул и т.д.',
        'prefix'            => 'Номерной префикс',
        'digit'             => 'Цифрой префикс',
        'next'              => 'Следующий номер',
        'logo'              => 'Логотип',
        'custom'            => 'Таможня',
        'item_name'         => 'Название номенклатуры',
        'item'              => 'Товары',
        'product'           => 'Товары',
        'service'           => 'Услуги',
        'price_name'        => 'Цена',
        'price'             => 'Цена',
        'rate'              => 'Оценка',
        'quantity_name'     => 'Количество',
        'quantity'          => 'Количество',
        'payment_terms'     => 'Условия оплаты',
        'title'             => 'Заголовок',
        'subheading'        => 'Подзаголовок',
        'due_receipt'       => 'Оплата при получении',
        'due_days'          => 'Оплата в течение :days дней',
        'choose_template'   => 'Выбрать шаблон инвойса',
        'default'           => 'По умолчанию',
        'classic'           => 'Классический',
        'modern'            => 'Современный',
        'hide'              => [
            'item_name'         => 'Скрыть имя товара или услуги',
            'item_description'  => 'Скрыть описание товара или услуги',
            'quantity'          => 'Скрыть количество',
            'price'             => 'Скрыть цену',
            'amount'            => 'Скрыть сумму',
        ],
    ],

    'default' => [
        'description'       => 'Учетная запись по умолчанию, валюта, язык вашей компании',
        'list_limit'        => 'Записей на странице',
        'use_gravatar'      => 'Использовать Gravatar',
        'income_category'   => 'Категория доходов',
        'expense_category'  => 'Категория расходов',
    ],

    'email' => [
        'description'       => 'Изменить протокол отправки и шаблоны электронной почты',
        'protocol'          => 'Протокол',
        'php'               => 'PHP Mail',
        'smtp' => [
            'name'          => 'SMTP',
            'host'          => 'SMTP-хост',
            'port'          => 'SMTP-порт',
            'username'      => 'SMTP-пользователь',
            'password'      => 'SMTP-пароль',
            'encryption'    => 'SMTP-защита',
            'none'          => 'Отсутствует',
        ],
        'sendmail'          => 'Sendmail',
        'sendmail_path'     => 'Путь к Sendmail',
        'log'               => 'Журнал E-mail\'ов',

        'templates' => [
            'subject'                   => 'Тема',
            'body'                      => 'Текст сообщения',
            'tags'                      => '<strong>Доступные теги:</strong> :tag_list',
            'invoice_new_customer'      => 'Новый шаблон счета (отправлен клиенту)',
            'invoice_remind_customer'   => 'Шаблон напоминания о счете (отправлен клиенту)',
            'invoice_remind_admin'      => 'Шаблон напоминания о счете (отправлен администратору)',
            'invoice_recur_customer'    => 'Шаблон повторяющегося счета (отправлен клиенту)',
            'invoice_recur_admin'       => 'Шаблон повторяющегося счета (отправлен администратору)',
            'invoice_payment_customer'  => 'Шаблон полученного платежа (отправлен клиенту)',
            'invoice_payment_admin'     => 'Шаблон полученного платежа (отправлен администратору)',
            'bill_remind_admin'         => 'Шаблон напоминания о закупке (отправлен администратору)',
            'bill_recur_admin'          => 'Шаблон повторяющейся закупки (отправлен администратору)',
        ],
    ],

    'scheduling' => [
        'name'              => 'Расписание',
        'description'       => 'Автоматические напоминания и команды для повторения',
        'send_invoice'      => 'Отправить напоминание с квитанцией',
        'invoice_days'      => 'Отправить после истечения дней',
        'send_bill'         => 'Отправить напоминание с закупкой',
        'bill_days'         => 'Отправить до истечения дней',
        'cron_command'      => 'Cron-команда',
        'schedule_time'     => 'Время выполнения',
    ],

    'categories' => [
        'description'       => 'Неограниченные категории для доходов, расходов и товаров',
    ],

    'currencies' => [
        'description'       => 'Создание и управление валютами и установка их курсов',
    ],

    'taxes' => [
        'description'       => 'Фиксированные, нормальные, включительные и сложные налоговые ставки',
    ],

];
