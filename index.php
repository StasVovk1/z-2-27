<?php 
    $mass = [-1,-2,-1,-5,3,6,8,45,-3,54,6,7,-6,7,8,-4,5,6,7,16];
    $mass_2 = [1,-7,2,6,20];
    echo 'Исходные данные: вставляемый массив: '.json_encode($mass_2).' array: '.json_encode(sortArray($mass));

    $array = arraysMerging($mass,$mass_2);
    $answer = sortArray($array);
    echo '<br> Ответ: '.json_encode($answer);


    function counts($mass){
        $i = 1;            
        while ($mass[$i].'' != ''){
            $i++;
        }
        return $i;
    }

    function sortArray ($array){
        for ($i = 0; $i < counts($array) - 1; $i++) {
            for ($j = 0; $j < counts($array) - $i - 1; $j++) {
                if ($array[$j] > $array[$j + 1]) {
                    $temp = $array[$j];
                    $array[$j] = $array[$j + 1];
                    $array[$j + 1] = $temp;
                }
            }
        }
        return $array;
    }

    function arraysMerging ($firstArray, $secondArray){
        for ($i = 0; $i < counts($secondArray); $i++){
            $firstArray[] = $secondArray[$i];
        }
        return $firstArray;    
    }

   
?>