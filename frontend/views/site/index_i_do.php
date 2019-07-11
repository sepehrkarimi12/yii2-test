<?php

/* @var $this yii\web\View */

$this->title = 'انجام میدم';
?>
<div class="site-index">
    <?php foreach ($posts as $post) : ?>
    <div class="col-sm-4 col-md-4">
        <div class="thumbnail">
            <?= \yii\helpers\Html::img('@web/' . $post->org_pic, ['alt' => $post->title, 'width' => '90%', 'width' => '3000px']) ?>
            <div class="caption">
                <h4><?= $post->title ?></h4>
                <hr/>
                <p>
                    <label>قیمت : </label> <?= $post->price ?> تومان
                </p>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
</div>
