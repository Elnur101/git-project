<?php
use yii\bootstrap\ActiveForm;
use yii\bootstrap\Html;
?>
<div class="fables-transparent">
    <div class="fables-transparent py-0 py-lg-0">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-6 pr-md-0 pl-0">
                    <nav class="navbar navbar-expand-md btco-hover-menu py-lg-2">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#fablesNavDropdown" aria-controls="fablesNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="fables-iconmenu-icon text-white font-16"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="fablesNavDropdown">
                            <ul class="navbar-nav fables-nav">
                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="<?=\yii\helpers\Url::home()?>">Главная</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="#courses">Курсы</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link " href="#about">О нас</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="#contact">Контакты</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
                <div class="col-12 col-md-6 col-lg-6 pr-md-0 icons-header-mobile">
                    <div class="fables-header-icons">
                        <a href="" class="open-search fables-third-text-color  font-15 top-header-link px-3 px-md-2 px-lg-4 max-line-height fables-main-hover-background-color"><span>Заказать</span></a>
                        <a href="" class=" fables-third-text-color  font-15 top-header-link px-3 px-md-2 px-lg-4 max-line-height fables-main-hover-background-color"><span class="fables-iconphone"></span>  +7 747 858 69 36</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="fables-index-servicese fables-header fables-after-overlay bg-ruless">
    <div class="container">
        <h2 class="fables-page-title fables-second-border-color wow fadeInLeft" data-wow-duration="1.5s">Курсы программирования и робототехники</h2>
    </div>
</div>

<div id="about" class="fables-counter-no-background my-4 my-md-2 overflow-hidden">
    <div class="container">
        <div class="fables-about-head-style">
            <div class="row wow fadeInDown" data-wow-delay=".5s">
                <div class="col-12 text-center">
                    <h2 class="fables-second-text-color mt-3 font-30 font-weight-bold text-center">О НАС</h2>
                </div>
                <div class="col-12 col-md-10 offset-md-1 mt-3 mb-3">
                    <p class="fables-forth-text-color text-center font-18">
                        Вы пройдёте курс тренингов по веб-программированию с самых азов, постепенно ознакамливаясь с принципами и технологиями веб-программирования.<br/> Познакомитесь с миром «WEB», начиная с ознакомления с клиентскими технологиями: HTML, CSS, JavaScript и серверных языков программирования PHP, Ruby, SQL.<br/> На основе этих языков, также рассмотрим современные, передовые фреймворки Yii2  и Laravel, алгоритмам, пакетным менеджерам и о многом другом.<br/>
                        В процессе тренингов Вы будете активно вовлечены в процесс получения новой информации. Домашние задания и практические упражнения помогут успешно освоить теоретическую часть программы курса.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row mt-2 mt-md-2">
        <div class="col-6 col-md-4">
            <div class="fables-counter">
                <p class="centerr">
                    <span class="fa fa-graduation-cap  fa-2x fables-second-background-color text-white rounded-circle d-inline-block p-4"></span>
                <h2 class="fables-counter-value font-40 font-weight-bold fables-forth-text-color d-inline-block px-4 py-2 " data-count="1564">0</h2>
                <h3 class="font-14 semi-font fables-forth-text-color">Выпускников</h3>
                </p>
            </div>
        </div>
        <div class="col-6 col-md-4">
            <div class="fables-counter">
                <p class="centerr">
                    <span class="fa fa-code fa-2x fables-second-background-color text-white rounded-circle d-inline-block p-4"></span>
                <h2 class="fables-counter-value font-40 font-weight-bold fables-forth-text-color d-inline-block px-4 py-2 " data-count="11">23</h2>
                <h3 class="font-14 semi-font fables-forth-text-color">Уникальных курсов</h3>
                </p>
            </div>
        </div>
        <div class="col-6 col-md-4">
            <div class="fables-counter">
                <p class="centerr">
                    <span class="fa fa-clock fa-2x fables-second-background-color text-white rounded-circle d-inline-block p-4"></span>
                <h2 class="fables-counter-value font-40 font-weight-bold fables-forth-text-color d-inline-block px-4 py-2 " data-count="3549">0</h2>
                <h3 class="font-14 semi-font fables-forth-text-color">Часов преподавания</h3>
                </p>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid mb-lg-2">
    <div class="row">
        <div class="col-12 col-lg-2 p-0">
            <div class="text-center fables-main-background-color fables-sqr-rotation fables-second-border-color fables-sqr-rotation-services">
                <div class="text-rotate">
                    <h2 class="text-white font-25">ЧТО ВЫ<br><span class="white-color font-40 bold-font mt-2 d-block">ПОЛУЧИТЕ</span>ПОСЛЕ ОБУЧЕНИЯ<br/></h2>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-10 p-0">
            <div class="fables-index-services fables-after-overlay py-md-5 px-4 pr-md-4 pl-md-5 bg-rules sm-index-products mt-lg-0 mt-xl-5">
                <div class="container z-index position-relative">
                    <div class="row">
                        <div class="col-12 col-lg-10 offset-lg-2">
                            <div class="row">
                                <div class="col-12 col-sm-6 pb-lg-5 mt-4 mt-lg-0 wow fadeInDown" data-wow-delay=".4s">
                                    <div class="row text-center text-md-left">
                                        <div class="col-12 col-md-3 col-xl-2 mb-4 mb-md-0">
                                            <span class="fa fa-certificate fables-second-text-color font-40"></span>
                                        </div>
                                        <div class="col-12 col-md-9 pl-md-0">
                                            <h2 class="text-white font-19 semi-font mb-2">Сертификат</h2>
                                            <div class="font-14 text-white">
                                                Персональный сертификат о прохождении специализации
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 pb-lg-5 mt-4 mt-lg-0 wow fadeInDown" data-wow-delay=".8s">
                                    <div class="row text-center text-md-left">
                                        <div class="col-12 col-md-3 col-xl-2 mb-3 mb-md-0">
                                            <span class="fa fa-phone fables-second-text-color font-40"></span>
                                        </div>
                                        <div class="col-12 col-md-9 pl-md-0">
                                            <h2 class="text-white font-19 semi-font mb-2">24/7 БЕЗ ВЫХОДНЫХ</h2>
                                            <div class="font-14 text-white">
                                                Вы можете связаться с нами по любому интересующему вопросу
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 pt-lg-5 mt-4 mt-lg-0 wow fadeInDown" data-wow-delay="1.2s">
                                    <div class="row text-center text-md-left">
                                        <div class="col-12 col-md-3 col-xl-2 mb-3 mb-md-0">
                                            <span class="fa fa-bomb fables-second-text-color font-40"></span>
                                        </div>
                                        <div class="col-12 col-md-9 pl-md-0">
                                            <h2 class="text-white font-19 semi-font mb-2">ПЕРВЫЙ КЭШ</h2>
                                            <div class="font-14 text-white">
                                                Получи свой первый заказ от реального клиента.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 pt-lg-5 mt-4 mt-lg-0 wow fadeInDown" data-wow-delay="1.6s">
                                    <div class="row text-center text-md-left">
                                        <div class="col-12 col-md-3 col-xl-2 mb-3 mb-md-0">
                                            <span class="fa fa-signal fables-second-text-color font-40"></span>
                                        </div>
                                        <div class="col-12 col-md-9 pl-md-0">
                                            <h2 class="text-white font-19 semi-font mb-2">Развитие карьеры и бизнеса</h2>
                                            <div class="font-14 text-white">
                                                Подборки вакансий, инсайты рынка труда,проекты в ваше портфолио
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-12 col-lg-8 offset-lg-2 text-center my-1 my-lg-1 py-0 py-lg-1">
            <div class="fables-404-page">
                <h3 class="font-25 font-weight-bold fables-second-text-color  text-center mb-4">Приведите друга и получите скидку 10%</h3>
                <h5 class="font-weight-bold  text-center fables-second-text-color mb-4">ДО КОНЦА ПРИЕМА ЗАЯВОК ОСТАЛОСЬ</h5>
                <div id="countdown"></div>
                <p id="note"></p>
                <a href="#" class="open-search btn  fables-second-background-color fables-second-border-color white-color rounded-0 px-md-6 py-2 mt-2 fables-second-hover-background-color">Записаться</a>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-12 col-lg-8 offset-lg-2 text-center my-1 my-lg-1 py-0 py-lg-1">
            <div class="fables-404-page">
                <h3 class="font-35 font-weight-bold fables-second-text-color text-center mb-4">Наши пакеты</h3>
            </div>
        </div>
    </div>
</div>

<div class="container mt-2">
    <div class="row overflow-hidden">
        <?php foreach ($packs as $pack):?>
            <div class="col-12 col-sm-6 mb-4 col-lg-4 text-center wow bounceInDown" data-wow-delay="1.2s">
                <div class="table-border-light fables-second-hover-border">
                    <div class="fables-main-background-color py-4 position-relative">
                        <h2 class="white-color bold-font fables-third-after font-20 pt-4 pb-6"><?=$pack->title?></h2>
                        <div class="center-number-table border-2 fables-main-background-color white-color rounded-circle border-white position-absolute p-4">
                            <h2 class="bold-font font-25 mt-2 d-inline-block"><?=$pack->price?></h2>
                            <p class="white-color font-13">тг/мес</p>
                        </div>
                    </div>
                    <div class="bg-white py-4 table-block">
                        <p class="fables-forth-text-color mt-6 mb-4 px-4 line-height-large font-15"><?=$pack->qty_st?> человек<br/><?=$pack->week?> раза в неделю<br/>26 часов</p>
                        <a href="" class="open-search btn fables-main-background-color white-color white-color-hover fables-btn-rounded px-5 py-2 font-15">Записаться</a>
                    </div>
                </div>

            </div>
        <?php endforeach;?>
    </div>
</div>

<div class="fables-index-products mt-lg-2 fables-after-overlay py-2 bg-rules" id="courses">
    <div class="container z-index position-relative overflow-hidden">
        <div class="row">
            <div class="col-12 col-md-12 wow fadeInLeft">
                <h2 class="fables-second-text-color font-35 font-weight-bold mt-2 text-center">КУРСЫ <span class="white-color"> ПРОГРАММИРОВАНИЯ</span></h2>
                <p class="fables-third-text-color wow fadeInLeft white-color text-center">Стань востребованным программистом, обучаясь у практиков</p>
            </div>
        </div>
        <div class="owl-carousel owl-theme dots-0 circle-nav carousel-items-4" >
            <?php foreach ($courses as $cours):?>
                <div class="card2 mb-4 wow fadeIn" data-wow-delay=".4s">
                    <div class="row ">
                        <div class="image-container">
                            <a href="" class="open-search"><?=Html::img("/web/uploads/{$cours->image}",['class' => 'card-img-top rounded-0 w-50'])?></a>
                        </div>
                        <div class="card-body2 col-12">
                            <h5 class="card-title text-center mx-3"><a href="" class="open-search fables-main-text-color fables-store-product-title fables-second-hover-color ">Курсы: "<?=$cours->title?>"</a></h5>
                            <p class="font-weight-bold fables-second-text-color text-center my-2 mb-3 mx-3">Цена: <?=$cours->price?> тг</p>
                            <p class="fables-product-info"><a class="btn fables-second-border-color open-search fables-second-text-color fables-btn-rouned fables-hover-btn-color font-14 px-4 py-2"><span class="fables-btn-value white-color">Записаться</span></a></p>
                        </div>
                    </div>
                </div>
            <?php endforeach;?>
        </div>
    </div>
</div>

<div class="container py-1">
    <div class="fables-Testimonials my-1">
        <h3 class="fables-second-text-color mb-4 font-weight-bold text-center"> ОТЗЫВЫ НАШИХ СТУДЕНТОВ </h3>
        <div class="row">
            <?php foreach ($comment as $commt):?>
                <div class="col-6">
                    <div class="fables-testimonial-block border fables-third-text-color py-4 px-6 mb-2 rounded position-relative">
                    <div class="row">
                        <div class="col-12 col-sm-3 text-center image-container shine-effect">
                            <?=Html::img("/web/uploads/{$commt->image}",['class' => 'fables-testimonial-block-img rounded-circle'])?>
                        </div>
                        <div class="col-12 col-sm-8">
                            <div class="fables-testimonial-block-info">
                                <h3 class="fables-forth-text-color mt-4 mb-2 font-15 semi-font"><?=$commt->name?></h3>
                                <h3 class="fables-fifth-text-color font-italic font-14 mt-2"><?=$commt->date?></h3>
                            </div>
                        </div>
                    </div>
                    <div class="fables-forth-text-color font-italic font-14 semi-font mt-3 d-none d-md-block">
                    <?=$commt->content?>
                    </div>
                </div>
                </div>
            <?php endforeach;?>
        </div>
<!--        <h2 class="fables-second-text-color fables-light-background-color my-3 my-lg-4 font-15 bold-font py-3 px-4">Оставить отзыв ...</h2>-->
<!--        --><?php //$form = ActiveForm::begin(); ?>
<!--            <div class="form-row">-->
<!--                        <div class="form-group col-md-6 mb-0">-->
<!--                            --><?//= $form->field($reviews, 'name')->textInput(['class' => 'form-control form-control rounded-0 p-3', 'placeholder' => 'Имя']) ?>
<!--                        </div>-->
<!--                        <div class="form-group col-md-6">-->
<!--                            --><?//= $form->field($reviews, 'email')->textInput(['class' => 'form-control form-control rounded-0 p-3', 'placeholder' => 'Email']) ?>
<!--                        </div>-->
<!--                    </div>-->
<!--            <div class="form-row">-->
<!--                        <div class="form-group col-md-12">-->
<!--                            --><?//= $form->field($reviews, 'content')->textarea(['rows' => 6,'class' => 'form-control form-control rounded-0 p-3', 'placeholder' => 'Текст']) ?>
<!--                        </div>-->
<!--                    </div>-->
<!--            <div class="form-row">-->
<!--                        <div class="form-group col-md-12">-->
<!--                            --><?//= Html::submitButton('Отправить', ['class' => 'btn fables-second-background-color rounded-0 text-white font-15 px-4 py-2']) ?>
<!--                        </div>-->
<!--                    </div>-->
<!--        --><?php //ActiveForm::end(); ?>
    </div>
</div>

<div class="container" >
    <div id="contact" class="row my-2">
        <div class="col-12 col-md-10 offset-md-1 col-lg-8 offset-lg-2">
            <h3 class="font-35 font-weight-bold fables-second-text-color text-center">СВЯЖИТЕСЬ С НАМИ</h3>
        </div>
    </div>
    <div class="row my-2 my-md-3 overflow-hidden">
        <div class="col-12 col-sm-6 col-md-4 text-center mb-4 mb-md-0 wow zoomIn" data-wow-duration="1.5s" data-wow-delay=".4s">
            <span class="fables-iconmap-icon fa-2x fables-second-background-color text-white rounded-circle d-inline-block p-4"></span>
            <h2 class="font-16 semi-font fables-second-text-color my-3">Адрес</h2>
            <p class="font-14 fables-forth-text-color">
                улица Кунаева 32, г. Алматы</p>

        </div>
        <div class="col-12 col-sm-6 col-md-4 text-center mb-4 mb-md-0 wow zoomIn" data-wow-duration="1.5s" data-wow-delay=".8s">
            <span class="fables-iconphone fa-2x  fables-second-background-color text-white rounded-circle d-inline-block p-4"></span>
            <h2 class="font-16 semi-font fables-second-text-color my-3">Почта & Телефон номер</h2>
            <p class="font-14 fables-forth-text-color">adminsupport@website.com</p>
            <p class="font-14 fables-forth-text-color">+333 111 111 000</p>
        </div>
        <div class="col-12 col-sm-6 col-md-4 text-center mb-4 mb-md-0 wow zoomIn" data-wow-duration="1.5s" data-wow-delay="1.2s">
            <span class="fables-iconshare-icon fa-2x fables-second-background-color text-white rounded-circle d-inline-block p-4"></span>
            <h2 class="font-16 semi-font fables-second-text-color my-3">Социальные сети</h2>
            <ul class="nav fables-contact-social-links">
                <li><a href="#" target="_blank"><i class="fab fa-facebook-f fables-forth-text-color fa-fw"></i></a></li>
                <li><a href="#" target="_blank"><i class="fab fa-instagram fables-forth-text-color  fa-fw"></i></a></li>
                <li><a href="#" target="_blank"><i class="fab fa-whatsapp fables-forth-text-color    fa-fw"></i></a></li>
                <li><a href="#" target="_blank"><i class="fab fa-vk fables-forth-text-color   fa-fw"></i></a></li>
            </ul>
        </div>
    </div>
</div>

<div class="justify">
    <iframe frameborder="no" style="box-sizing: border-box;" width="100%" height="400" src="http://widgets.2gis.com/widget?type=firmsonmap&amp;options=%7B%22pos%22%3A%7B%22lat%22%3A43.26669069837077%2C%22lon%22%3A76.94892883300783%2C%22zoom%22%3A16%7D%2C%22opt%22%3A%7B%22city%22%3A%22almaty%22%7D%2C%22org%22%3A%2270000001025131212%22%7D"></iframe>
</div>

<div class="copyright fables-main-background-color mt-0 border-0 white-color">
    <ul class="nav fables-footer-social-links just-center fables-light-footer-links">
        <li><a href="" class="fables-forth-text-color fables-single-link fables-second-hover-color"><span class="fables-iconwhatapp-icon"></span></a></li>
        <li><a href="" class="fables-forth-text-color fables-single-link fables-second-hover-color"><span class="fables-iconfacebook"></span></a></li>
        <li><a href="" class="fables-forth-text-color fables-single-link fables-second-hover-color"><span class="fables-iconinstagram"></span></a></li>
        <li><a href="" class="fables-forth-text-color fables-single-link fables-second-hover-color"><span class="fables-icongoogle-icon"></span></a></li>
    </ul>
    <p class="mb-0">Copyright © Fables 2018. All rights reserved.</p>
</div>
<div class="search-section">
    <a class="close-search" href="#"></a>
    <div class="d-flex justify-content-center align-items-center h-100">
        <div class="container">
            <div class="row my-4 my-lg-5 ">
                <div class="col-12 col-md-8 offset-md-2 col-lg-6 offset-lg-3 text-center form-site">
                    <p class="font-20 semi-font fables-forth-text-color mb-2 mb-lg-3">Оставьте заявку <br/>Наш менеджер свяжется с вами</p>
                    <?php $form = ActiveForm::begin(); ?>
                    <div class="form-group">
                        <div class="input-icon">
                            <span class="fables-iconuser fables-input-icon mt-2 font-13"></span>
                            <?= $form->field($model, 'name')->textInput(['class' => 'form-control rounded-0 py-3 pl-5 font-13 sign-register-input','placeholder' => 'Имя']) ?>
                        </div>

                    </div>
                    <div class="form-group">
                        <div class="input-icon">
                            <span class="fables-iconphone fables-input-icon font-19 mt-1"></span>
                            <?= $form->field($model, 'phone')->textInput(['class' => 'form-control rounded-0 py-3 pl-5 font-13 sign-register-input', 'placeholder' => 'Телефон']) ?>
                        </div>
                    </div>
                    <?= Html::submitButton('Отправить', ['class' => 'btn btn-block rounded-0 white-color fables-main-hover-background-color fables-second-background-color font-16 semi-font py-3']) ?>
                <?php ActiveForm::end();?>
                </div>
            </div>
        </div>
    </div>
</div>