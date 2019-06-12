<?php

/* @var $this yii\web\View */

$this->title = 'ثبت آگهی جدید';
?>
<h1>انتخاب دسته بندی
</h1>

<div class="new-index">
	<?php
	d($categories);
		foreach ($categories as $mod) {
			echo($mod->title);
			echo "<hr/>";
		}
	?>
</div>
