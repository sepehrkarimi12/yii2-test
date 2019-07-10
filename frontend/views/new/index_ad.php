<?php

use yii\helpers\Url;

/* @var $this yii\web\View */

$this->title = 'ثبت آگهی جدید';
?>
<h1>انتخاب دسته بندی آگهی
</h1>

<div class="new-index">

  <div class="panel-group" id="accordion">
    <!-- 1 -->
  <?php foreach ($categories as $catergory) : ?>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse<?= $catergory->id ?>">
          <?= $catergory->title ?>
          </a>
        </h4>
      </div>
      <div id="collapse<?= $catergory->id ?>" class="panel-collapse collapse">
        <div class="panel-body">
          <?php if($catergory->childes) :?>
            <!-- 2 -->
            <div class="panel-group" id="accordion2">
            <?php foreach ($catergory->childes as $catergory) : ?>
              <?php if($catergory->childes) :?>
              <div class="panel panel-info">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion2" href="#collapse<?= $catergory->id ?>">
                    <?= $catergory->title ?></a>
                  </h4>
                </div>
                <div id="collapse<?= $catergory->id ?>" class="panel-collapse collapse">
                  <div class="panel-body">
                    <?php if($catergory->childes) :?>
                        <!-- 3 -->
                      <div class="panel-group" id="accordion3">
                      <?php foreach ($catergory->childes as $catergory) : ?>
                        <?php if($catergory->childes) :?>
                        <div class="panel panel-warning">
                          <div class="panel-heading">
                            <h4 class="panel-title">
                              <a data-toggle="collapse" data-parent="#accordion3" href="#collapse<?= $catergory->id ?>">
                              <?= $catergory->title ?></a>
                            </h4>
                          </div>
                          <div id="collapse<?= $catergory->id ?>" class="panel-collapse collapse">
                            <div class="panel-body">
                              <?php if($catergory->childes) :?>
                                <!-- 4 -->
                              <div class="panel-group" id="accordion3">
                              <?php foreach ($catergory->childes as $catergory) : ?>
                                <?php if($catergory->childes) :?>
                                <div class="panel panel-success">
                                  <div class="panel-heading">
                                    <h4 class="panel-title">
                                      <a data-toggle="collapse" data-parent="#accordion3" href="#collapse<?= $catergory->id ?>">
                                      <?= $catergory->title ?></a>
                                    </h4>
                                  </div>
                                  <div id="collapse<?= $catergory->id ?>" class="panel-collapse collapse">
                                    <div class="panel-body">
                                      گهیران
                                    </div>
                                  </div>
                                </div>
                                <?php else : ?>
                                  <div class="panel panel-success">
                                    <div class="panel-heading">
                                      <h4 class="panel-title">
                                        <a data-toggle="collapse" href="<?= Url::home() . 'new'?>">
                                          <?= $catergory->title ?>
                                        </a>
                                      </h4>
                                    </div>
                                  </div>
                                <?php endif; ?>
                              <?php endforeach; ?>
                              </div>
                              <?php else : ?>
                                گهیران
                              <?php endif; ?>
                            </div>
                          </div>
                        </div>
                        <?php else : ?>
                          <a href="<?= Url::toRoute(['new/create-ad', 'cat_id' => $catergory->id]) ?>">
                            <div class="panel panel-warning">
                              <div class="panel-heading">
                                <h4 class="panel-title">
                                    <?= $catergory->title ?>
                                </h4>
                              </div>
                            </div>
                          </a>
                        <?php endif; ?>
                      <?php endforeach; ?>
                      </div>
                    <?php else : ?>
                      <a href="<?= Url::toRoute(['new/create-ad', 'cat_id' => $catergory->id]) ?>">
                        <div class="panel panel-success">
                          <div class="panel-heading">
                            <h4 class="panel-title">
                                <?= $catergory->title ?>
                            </h4>
                          </div>
                        </div>
                      </a>
                    <?php endif; ?>
                  </div>
                </div>
              </div>
              <?php else : ?>
                <a href="<?= Url::toRoute(['new/create-ad', 'cat_id' => $catergory->id]) ?>">
                  <div class="panel panel-info">
                    <div class="panel-heading">
                      <h4 class="panel-title">
                          <?= $catergory->title ?>
                      </h4>
                    </div>
                  </div>
                </a>
              <?php endif; ?>
            <?php endforeach; ?>
            </div> 
          <?php else : ?>
            <a href="<?= Url::toRoute(['new/create-ad', 'cat_id' => $catergory->id]) ?>">
              <div class="panel panel-info">
                <div class="panel-heading">
                  <h4 class="panel-title">
                      <?= $catergory->title ?>
                  </h4>
                </div>
              </div>
            </a>
          <?php endif; ?>
        </div>
      </div>
    </div>
  <?php endforeach; ?> 
  </div>

</div>
