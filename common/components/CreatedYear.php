<?php

namespace common\components;

use Yii;
use yii\base\Component;

class CreatedYear extends Component
{
    public function getYears()
    {
        $years = [];
        $now = 1398;
        $difference = 29;
        $least_year = $now - $difference;

        for ($i = $now;$i >= $least_year;$i--) {
            $years += [$i => $i];
        }
        $years += ["قبل از " . $least_year => "قبل از " . $least_year];

        return $years;
    }

}