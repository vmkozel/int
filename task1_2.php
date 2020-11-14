<!--2.Написать функцию вывода массива которая принимает 2 параметра (массив и символ для вывода)
Функция должна анализировать каждый элемент массива и если он является массивом, то должна вызывать себя еще раз
данные для примера $arr = [1,1,1,1,[2,2,2],1,1,[2,2,[3,[4,4,4],3]]]];
каждый вложенный массив будет выводится со сдвигом на - символ
т.е. у первого уровня нет сдвига
у второго будет -
у третьего будет --
-->
<?php

/*$arr = [1, 1, 1, 1, [2, 2, 2], 1, 1, [2, 2, [3, [4, 4, 4], 3]]];
echo "<pre>";
print_r($arr);

function recursive(array $arr, string $char)
{
    foreach ($arr as $key => $value) {
        if (!is_array($value)) {
            echo $charPrint . $value . "<br>";
            $lastKey = $key;
        } else {
            $charPrint .= $char;
            recursive($value, $charPrint);
        }
    }
}

recursive($arr, "-");*/

$arr = [1, 1, 1, 1, [2, 2, 2], 1, 1, [2, 2, [3, [4, 4, 4], 3]]];

function recursive(array $arr, string $char)
{
    foreach ($arr as $key => $value) {
        if (!is_array($value)) {
            for ($i = 1; $i < $value; $i++) {
                echo $char;
            }
            echo $value . "<br>";
        } else {
            recursive($value, $char);
        }
    }
}

recursive($arr, "-");