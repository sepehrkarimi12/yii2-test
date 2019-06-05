<?php

namespace backend\traits;

use yii\helpers\ArrayHelper;

trait listForDropDown {

	public static function getListForDropDown($first_field, $second_field)
	{
		$all = self::find()->all();
	    return ArrayHelper::map($all, $first_field, $second_field);
	}
}