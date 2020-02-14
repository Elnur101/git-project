<?php
use yii\bootstrap\ActiveForm;
use yii\bootstrap\Html;
?>
<div class="search-sectionn">
    <div class="d-flex justify-content-center align-items-center hh-100">
        <header id="header">
            <nav>
                <ul>
                    <li><a href="<?=\yii\helpers\Url::to(['/site/makeweb'])?>" class="white-color fables-second-hover-background-color">Заказ</a></li>
                </ul>
            </nav>
            <div class="content">
                <a href="<?= \yii\helpers\Url::to(['/site/makeweb'])?>"><h3 class="white-color font-25 font-weight-bold mb-2 mt-2 fables-second-hover-color">Разработка веб приложений и сайтов</h3></a>
                <div class="inner">
                    <a href="/"><img src="/web/public/assets/custom/images/fables-logo.png" alt="fables" class="img-fluid position-relative z-index mt-2 mt-sm-0"></a>
                </div>
                <a href="<?= \yii\helpers\Url::to(['/site/courses'])?>"><h3 class="white-color mb-3 font-25 font-weight-bold fables-second-hover-color">Курсы программирования</h3></a>
            </div>
            <nav>
                <ul>
                    <li><a href="<?=\yii\helpers\Url::to(['/site/courses'])?>" class="white-color fables-second-hover-background-color">Обучаться</a></li>
                </ul>
            </nav>
        </header>
    </div>
</div>
