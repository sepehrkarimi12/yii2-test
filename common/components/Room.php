<?php

namespace common\components;

use Yii;
use yii\base\Component;

class Room extends Component
{
    public function getRoomsCount()
    {
        $rooms = [
            'بدون اتاق' => 'بدون اتاق',
            'یک' => 'یک',
            'دو' => 'دو',
            'سه' => 'سه',
            'چهار' => 'چهار',
            'پنج یا بیشتر' => 'پنج یا بیشتر',
        ];

        return $rooms;
    }

}