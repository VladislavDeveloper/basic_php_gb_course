<?php
$students = [
    'ИТ20' => [
        'Иванов Иван' => 5,
        'Кириллов Кирилл' => 3,
        'Эверств Серегй' => 4,
        'Бочарова Юлия' => 5,
        'Дрозденко Олег' => 4,
        'Сидорова Марина' => 2,
    ],
    'БАП20' => [
        'Антонов Антон' => 4,
        'Макарова Ксения' => 5,
        'Андреевский Борис' => 5,
        'Зимовский Борис' => 5,
        'Иванов Георгий' => 2
    ]
];

$groupsPerformance = [];
$deductionList = [];

//Цикл найдёт все среднии оценки для каждой группы независимо от их количества в массиве и добавит их в другой массив со средними оценками каждой группы
foreach($students as $index => $group){
    $groupsPerformance["$index"] = array_sum($group)/count($group);
};

//Цикл формирует список на отчисление студентов, с оценкой ниже чем 3
foreach($students as $groupIndex => $group){
    foreach($group as $index => $grade){
        if($grade < 3){
            $deductionList["$groupIndex"] = $index . " оценка : " . $grade;
        }
    }
}

//Находим группу с наилучшей успеваемостью в формате: название группы (ключ массива) и значение успеваемости
$maxPerformance = array_search(max($groupsPerformance), $groupsPerformance) . "-" . max($groupsPerformance) ;

echo "Наилучшая средняя успеваемость у группы: " . $maxPerformance . "\nСписок на отчисление: " . PHP_EOL;
print_r($deductionList);

