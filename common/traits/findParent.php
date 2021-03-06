<?php

namespace common\traits;

trait findParent {

	public function getParent()
	{
		return $this->hasOne(self::className(), ['id' => 'parent_id']);
	}
}