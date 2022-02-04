<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $tanks_arr = [
            'lights' => [
                1 => ['hellcat' => [32], 'arll' => [23]],
                2 => ['ms_1' => [32], 'BDR' => [32]],
                3 => ['reanault' => [43], 'oni' => [44]],
                4 => ['oho' => [53], 'kv1' => [22]],
            ],
            'heavy' => [
                1 => ['su100' => [24], 'su85' => [52]],
                2 => ['pz4h' => [25], 'tiger' => [66]],
                3 => ['kv3' => [23], 'vk30.01' => [52]],
                4 => ['su76' => [32], 'ftbs' => [26]],
            ],
            'middle' => [
                1 => ['hetzer' => [12], 'kolosal' => [22]],
                2 => ['T29' => [23], 'KV85' => [22]],
                3 => ['leichtraktor' => [24], 'ft' => [42]],
                4 => ['stug3B' => [32], 'exelsior' => [55]],
            ],
            'spg' => [
                1 => ['churchil' => [27], 'matilda' => [37]],
                2 => ['wespe' => [72], 'leff' => [73]],
                3 => ['amx' => [74], 'chi_ri' => [47]],
                4 => ['pudel' => [72], 'pawlack' => [81]],
            ],
            'destroyers' => [
                1 => ['t1' => [18], 't85' => [81]],
                2 => ['amx13f3' => [29], 'fv304' => [39]],
                3 => ['grile' => [33], 'humel' => [24]],
                4 => ['bison' => [25], 'kolosal' => [35]],
                12=>['karavelovo'=>[77]]
            ]
        ];

//        uksort($tanks_arr, function ($a, $b) {
//
//            return ($a[1] > $b[1]) ? 1 : -1;
//        });
////////////////////////////////////////////////////////
        function split_array($arr) {
            if (is_array($arr)) {
                foreach ($arr as $a) {
                    split_array($a);
                }
            } else {
                echo $arr . '<br/>';
            }
        }

////////////////////////////////////////////
        $count = 's';
        $type_arr = array();
        $nm = 'Olivio';
        $name[] = $nm;
        $counter_foreach = 0;
        foreach ($tanks_arr as ${$count} => ${$name[$counter_foreach]}) {
            $type_arr[] = ${$count};
            $count .= 'o';
            $name[] = $nm . 'l';
            $counter_foreach++;
            foreach (${$name[$counter_foreach - 1]} as ${$count} => ${$name[$counter_foreach]}) {
                $sort_tanks[]=${$count} . '/..../'.join('/.../', $type_arr).' <br/>';
                $type_arr[] = ${$count};
                $count .= 'o';
                $name[] = $nm . 'l';
                $counter_foreach++;
                
                foreach (${$name[$counter_foreach - 1]} as ${$count} => ${$name[$counter_foreach]}) {
                    $type_arr[] = ${$count};
                    $count .= 'o';
                    $name[] = $nm . 'l';
                    $counter_foreach++;
                    
                    foreach (${$name[$counter_foreach - 1]} as ${$count} => ${$name[$counter_foreach]}) {


                       // echo ${$name[$counter_foreach]} . '/..../' . join('/.../', $type_arr) . '<br/>';
                        
                    }
                    array_pop($type_arr);
                }
                array_pop($type_arr);
            }
            array_pop($type_arr);
        }

//        die;
        sort($sort_tanks);
        split_array($sort_tanks);
//        die;

        echo "<pre>";
        var_dump($sort_tanks);
        echo "</pre>";
        die;
        foreach ($sort_tanks as $name => $things) {
            echo $name . join('/----/', $things);
        }
        ?>
    </body>
</html>
