<?php
$box = [
    [
        0 => 'Тетрадь',
        1 => 'Книга',
        2 => 'Настольная игра',
        3 => [
            'Настольная игра',
            'Настольная игра',
        ],
        4 => [
            [
                'Ноутбук',
                'Зарядное устройство'
            ],
            [
                'Компьютерная мышь',
                'Набор проводов',
                [
                    'Фотография',
                    'Картина'
                ]
            ],
            [
                'Инструкция',
                [
                    'Ключ'
                ]
            ]
        ]
    ],
    [
        0 => 'Пакет кошачьего корма',
        1 => [
            'Музыкальный плеер',
            'Книга'
        ]
    ]
];

function find($array, $key)
{
    global $response;
    $response = false;
    foreach($array as $value){
        if(is_array($value)){
            find($value, $key);
        }
        if($value == $key){
            $response = true;
        }
        if($response){
            return $response;
        }
        
    }
    return $response;
}

var_dump(find($box, 'Ключ'));