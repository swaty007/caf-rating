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

        <div class="container hidden-xs hidden-sm <?php if(!$this->context->hiddenlayout) echo 'hidden'; ?>">
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

        <div class="container hidden-md hidden-lg">
            <div class="col-md-12 text-center">
                <h2 class="mobile-title text-center margin-b">
                    afcon mbio
                </h2>
                <?= Html::img('@web/img/1.png',['class'=>'mobile-first-img']) ;?>
                <h3 class="mobile-title-white">
                    10.000$
                </h3>
                <p class="mobile-text">
                    <i>price pool</i>
                </p>
                <a href="#" class="mobile-btn-red">
                    <?= Html::img('@web/img/mobile-btn-red.png',['class'=>'']) ;?>
                </a>
                <a href="#" class="mobile-btn-yellow"><i>show rating</i></a>
                <a href="#" id="term-btn" class="term-btn mobile-text"><i>Terms and Conditions</i></a>

                <h2 class="mobile-title text-center">
                    tuzo
                </h2>
                <div id="pari_slide" class="pari-slide">
                    <div class="pari-block">
                        <?= Html::img('@web/img/2.png',['class'=>'slide-img']) ;?>
                        <h4 class="slide-title">1 mahali</h4>
                        <a href="#" class="slide-link">tvs hlx (bike)</a>
                    </div>
                    <div class="pari-block">
                        <?= Html::img('@web/img/3.png',['class'=>'slide-img']) ;?>
                        <h4 class="slide-title">2-3 mahali</h4>
                        <p class="slide-link">lg smart 43.0"</p>
                    </div>
                    <div class="pari-block">
                        <?= Html::img('@web/img/4.png',['class'=>'slide-img']) ;?>
                        <h4 class="slide-title">4-6 mahali</h4>
                        <p class="slide-link">Samsung m20 2019</p>
                    </div>
                    <div class="pari-block">
                        <?= Html::img('@web/img/5.png',['class'=>'slide-img']) ;?>
                        <h4 class="slide-title">7-10 mahali</h4>
                        <p class="slide-link">samsung a8 plus</p>
                    </div>
                </div>
                <div class="three-circle-block">
                    <div class="circle-block">
                        <div class="circle">
                            1
                        </div>
                        <h4 class="circle-title">
                            <i>weka beti ya matukio ya afcon</i>
                        </h4>
                    </div>
                    <div class="circle-block">
                        <div class="circle">
                            2
                        </div>
                        <h4 class="circle-title">
                            <i>kushinda mbio</i>
                        </h4>
                    </div>
                    <div class="circle-block">
                        <div class="circle">
                            3
                        </div>
                        <h4 class="circle-title">
                           <i>pata tuzo</i>
                        </h4>
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

    <div id="terms-wrap" class="terms-wrap">
        <div id="terms-info" class="terms-info">
            <span id="btn_close" class="btn_close">x</span>
            <p class="text">1.  The promotion is valid from __ to __ 2018.</p>
            <p class="text">2.  Only multiple bets from 5 or more events, which are made in the time interval from 09:00 till 19:00 with a coefficient of at least 1.50 per every event, take part in the promotion.</p>
            <p class="text">3.  In case of loss of only one event in the multiple bet, you receive compensation in the amount of 100% of the amount of the bet. The maximum amount of compensation (return) is 100,000 TZS.</p>
            <p class="text">4.  Bonus compensation of 100% will be credited within 24 hours.</p>
            <p class="text">5.  The company reserves the right to cancel the bonus and refuse in presentation of it to the client without any explanation of the reasons in case when during the verification of the game account, there are suspicions of violating the integrity of the game or applying of strategies that the company considers malicious at its discretion.</p>
            <p class="text">6.  In disputable situations the decision of authorized officers of the Company is final. Bonus offer can be used only once.</p>
            <p class="text">7.  This offer is only available for those customers who have registered only one account.</p>
            <p class="text">8.  In case of inconsistencies regarding the interpretation of the paragraphs of these rules and conditions, the interpretation of the organizer (the company "Pari-Match") is considered to be official, which is final and binding for execution.</p>
        </div>
    </div>
</div>



<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
