<?php

return [
    'caption' => 'Контакты',
    'introtext' => 'Контакты',
    'settings' => [
        'logo' => [
            'caption' => 'Лого',
            'type'  => 'image',
        ],      
        'address' => [
            'caption' => 'Адрес',
            'type'  => 'text',
            'note'  => '',
            'default_text' => '',
        ],
        'phone1' => [
            'caption' => 'Телефон №1',
            'type'  => 'text',
            'note'  => '',
            'default_text' => '',
        ],
        'phone1-full' => [
            'caption' => 'Телефон №1',
            'type'  => 'text',
            'note'  => 'В международном формате  (+74951234567)',
            'default_text' => '',
        ],
        'viber1' => [
            'caption' => 'Viber',
            'type'  => 'checkbox',
            'elements' => 'Да==1',
            'default_text' => '',
        ],
        'whatsapp1' => [
            'caption' => 'Есть WhatsApp',
            'type'  => 'checkbox',
            'elements' => 'Да==1',
            'default_text' => '',
        ],
        'phone2' => [
            'caption' => 'Телефон №2',
            'type'  => 'text',
            'note'  => '',
            'default_text' => '',
        ],
        'phone2-full' => [
            'caption' => 'Телефон №2',
            'type'  => 'text',
            'note'  => 'В международном формате (+74951234567)',
            'default_text' => '',
        ],
        'viber2' => [
            'caption' => 'Есть Viber',
            'type'  => 'checkbox',
            'elements' => 'Да==1',
            'default_text' => '',
        ],
        'whatsapp2' => [
            'caption' => 'Есть WhatsApp',
            'type'  => 'checkbox',
            'elements' => 'Да==1',
            'default_text' => '',
        ],
        'workTime' => [
            'caption' => 'Рабочие часы',
            'type'  => 'textareamini',
            'note'  => '',
            'default_text' => '',
        ],
        'email' => [
            'caption' => 'Email',
            'type'  => 'text',
            'note'  => '',
            'default_text' => '',
        ],
        'position' => [
            'caption' => 'Координаты для карты',
            'type'  => 'text',
            'note'  => '',
            'default_text' => '',
        ],
		'orderEmail' => [
            'caption' => 'Emailы для заказов<br><small>Можно несколько через ,</small>',
            'type'  => 'text',
            'note'  => '',
            'default_text' => '',
        ],        
    ],
];
