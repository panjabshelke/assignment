<?php
    function remove_key($arr, $delKey) {
        $arr = array_diff_key($arr, array_flip((array) $delKey));
        foreach ($arr as $k => $a) {
            if (is_array($a)) {
                $arr[$k] = remove_key($a, $delKey);
            }
        }
        return $arr;
    }

    $delkey = '.';//['', 'a'];

        $array = ['a'=>[1,2,3,4], 'b'=>['1'=>['.'=>'abc', '3'=> ['.' => 'asda', 'a' => 'asdflkj']]]];

        echo "<pre>";
        print_r($array);
        $new_ar = remove_key($array, $delkey);
        echo "after removing";
        print_r($new_ar);
        die();
