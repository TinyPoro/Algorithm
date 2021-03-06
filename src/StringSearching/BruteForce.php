<?php
/**
 * Created by PhpStorm.
 * User: tinyporo
 * Date: 15/05/2018
 * Time: 08:47
 */

namespace Poro\Algorithm\StringSearching;

class BruteForce extends AlgorithmAbstract
{
    public function run($search){
        $time_start = microtime(true);

        $result = [];

        $ALen = strlen($this->input);
        $BLen = strlen($search);

        for($j = 0; $j <= $ALen - $BLen; $j++){
            $i = 0;

            while($i < $BLen && $this->input[$j + $i] == $search[$i]){
                $i++;
            }

            if($i == $BLen) $result[] = $j;
        }

        $time_end = microtime(true);

        $this->setTime(($time_end-$time_start)*1000000);
        $this->setResult($result);
    }
}