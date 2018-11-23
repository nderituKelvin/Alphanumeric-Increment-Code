<?php
    $num = "Z9Z";
    echo incMulti($num);

    function incMulti($string, $val = 1){
        if($val == 1){
            return addUp($string);
        }elseif($val > 1){
            for ($i = 0;$i < $val; $i++){
                $string = addUp($string);
            }
            return $string;
        }else{
            return 0;
        }
    }

    function addUp($str){
        $last = substr($str, -1);
        $hold = substr($str, 0, -1);
        switch ($last){
            case '':
                $upNext = "A";
                break;
            case 'Z':
                $upNext = '0';
                $reUse = addUp($hold);
                $hold = $reUse;
                break;
            case '9':
                $upNext = 'A';
                break;
            default:
                $upNext = ++$last;
                break;
        }

        $str = $hold.$upNext;
        return $str;
    }
?>