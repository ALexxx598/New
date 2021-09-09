<?php
        $search = $_POST['search_number'];
        $numbers = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16];
        $left = 0;
        $right = count($numbers)-1;
        $middle = round((count($numbers)-1)/2);
        echo "Mass : " . print_r($numbers) . "<br>";
        echo "Search number : " . $search . "<br>";
        for(;;)
        {

            if($numbers[$left] == $search or $numbers[$middle] == $search or $numbers[$right] == $search)
            {
                if($numbers[$left] == $search) {
                    echo "index : " . 0;
                }
                elseif ($numbers[$middle] == $search) {
                    echo "index :" . $middle;
                }
                elseif ($numbers[$right] == $search) {
                    echo "index :" . $right;
                }
                break;
            }
            else
            {
                if($search<$numbers[$middle])
                {
                    $right = $middle;
                }
                else
                {
                    $left = $middle;
                }
                $middle = round(($right + $left)/2);
            }
        }
        
?>