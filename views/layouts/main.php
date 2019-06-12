<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="pari-wrapp">
    <div class="header-wrapp <?php if(!$this->context->hiddenlayout) echo 'hidden-layout'; ?>">
        <header id="header">
            <div class="container">
                <div class="col-xs-12 col-md-12 text-left text-center-xs">
                    <?= Html::img('@web/img/pari-match-logo.svg', ['class' => 'logo']); ?>
                    <p class="logo-text">
                        they play - you win
                    </p>
                </div>
                <div class="col-xs-5 col-md-6 text-right hidden" style="display: none;">
                    <a href="#" class="login-btn">
                        Sign up
                    </a>
                </div>
            </div>
        </header>
        <div class="container <?php if(!$this->context->hiddenlayout) echo 'hidden'; ?>">
            <div class="row flex-center">
                <div class="col-md-6">
                    <div class="main-screen-h1-block">
                        <h1 class="title">
                            Become The<br> Winner of The Race
                        </h1>
                        <?= Html::img('@web/img/cup-mask.svg', ['class' => 'main-screen-img']); ?>
                        <?= Html::img('@web/img/black-text-bg.svg', ['class' => 'main-screen-text-bg-img hidden-xs hidden-sm']); ?>
                    </div>
                </div>
                <div class="col-md-6">
                        <div class="place-reward one">
                            <h3 class="reward-title">
                                1
                                <span>place</span>
                            </h3>
                            <?= Html::img('@web/img/moto.svg', ['class' => 'reward-icon']); ?>
                        </div>
                    <div class="text-right">
                        <div class="place-reward two">
                            <h3 class="reward-title">
                                2-3
                                <span>place</span>
                            </h3>
                            <?= Html::img('@web/img/tv.svg', ['class' => 'reward-icon']); ?>
                        </div>
                    </div>

                        <div class="place-reward three">
                            <h3 class="reward-title">
                                4-6
                                <span>place</span>
                            </h3>
                            <?= Html::img('@web/img/phone4-6.svg', ['class' => 'reward-icon']); ?>
                        </div>

                    <div class="text-right">
                        <div class="place-reward four">
                            <h3 class="reward-title">
                                7-10
                                <span>place</span>
                            </h3>
                            <?= Html::img('@web/img/phone7-10.svg', ['class' => 'reward-icon']); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content-wrapp">
        <div class="container">
            <?= $content ?>
        </div>
    </div>
</div>



<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
