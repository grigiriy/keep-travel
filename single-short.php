<?php

/**
 * Template Name: Short
 * Template Post Type: post
 */

get_header(); 
$back_image = !empty(carbon_get_post_meta($post->ID, 'index_image')) ? carbon_get_post_meta($post->ID, 'index_image') : null ;
$back_image = wp_get_attachment_image_url( $back_image, 'full' );

$sub_name = !empty(carbon_get_post_meta($post->ID, 'sub_name')) ? carbon_get_post_meta($post->ID, 'sub_name') : null ;

$reports = !empty(carbon_get_post_meta($post->ID, 'reports', 'complex')) ? carbon_get_post_meta($post->ID, 'reports', 'complex') : null ;
$mini_texts = !empty(carbon_get_post_meta($post->ID, 'mini_texts', 'complex')) ? carbon_get_post_meta($post->ID, 'mini_texts', 'complex') : null ;
$tickets_left = !empty(carbon_get_post_meta($post->ID, 'backgrounds_post', 'complex')[0]['tickets_left']) ? carbon_get_post_meta($post->ID, 'backgrounds_post', 'complex')[0]['tickets_left'] : '7' ;
$tickets_total = !empty(carbon_get_post_meta($post->ID, 'backgrounds_post', 'complex')[0]['tickets_total']) ? carbon_get_post_meta($post->ID, 'backgrounds_post', 'complex')[0]['tickets_total'] : '8' ;
$table = !empty(carbon_get_post_meta($post->ID, 'table', 'complex')) ? carbon_get_post_meta($post->ID, 'table', 'complex') : null ;
while (have_posts()) : the_post();
$page_name = !empty($sub_name) ? $sub_name : get_the_title();
$date = !empty(carbon_get_post_meta($post->ID, 'calend', 'complex')) ? carbon_get_post_meta($post->ID, 'calend', 'complex') : null ;

$content_b = !empty(carbon_get_post_meta($post->ID, 'content_b')) ? carbon_get_post_meta($post->ID, 'content_b') : null ;
$content_c = !empty(carbon_get_post_meta($post->ID, 'content_c')) ? carbon_get_post_meta($post->ID, 'content_c') : null ;
$content_c_2 = !empty(carbon_get_post_meta($post->ID, 'content_c_2')) ? carbon_get_post_meta($post->ID, 'content_c_2') : null ;
$content_d = !empty(carbon_get_post_meta($post->ID, 'content_d')) ? carbon_get_post_meta($post->ID, 'content_d') : null ;

$is_video =  !empty(carbon_get_post_meta($post->ID, 'is_video'));
$is_eng =  !empty(carbon_get_post_meta($post->ID, 'is_eng'));
?>

<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick-theme.css" />
<style type="text/css">
.slick-prev::before,
.slick-next::before {
    color: #000;
}

@media(min-width: 570px) {
    .slick-prev {
        left: -14px !important;
    }
}
</style>
<!-- End Navbar -->
<div class="page-header" data-parallax="false" data-lang="<?= ($is_eng == 1) ? 'en' : 'ru' ?>"
    style="background-image: url(<?= $back_image ?>);">
    <?php if($is_video == 1) { ?>
    <script>
    let cl_width = document.body.clientWidth;
    if (cl_width > 768) {
        document.querySelector('.page-header').innerHTML = `
      <video id="huy" autoplay muted loop style="width: auto;min-height: 100vh;max-height: 1030px;min-width: 100vw;">
        <source src="/wp-content/uploads/2019/11/back_sri_video.mp4" type="video/mp4">
        <source src="/wp-content/uploads/2019/11/back_sri_video.webm" type="video/webm">
      </video>
      `;
    } else {
        document.querySelector('.page-header').classList.add('sri_video');
    }
    </script>
    <style>
    .page-header.sri_video {
        background-image: url("/wp-content/uploads/2019/11/back_sri_video.gif") !important;
    }
    </style>
    <?php } ?>
    <div class="filter"></div>
    <div class="content-center">
        <div class="motto">
            <?php
    $h1_style = '';
    if ($is_video == 1){
      $h1_style = 'font-size: 2.5em; text-transform: none; max-width: 720px; margin: 0 auto;padding: 0 20px;';
    }
  ?>
            <h1 class="title-uppercase text-center" id="pageName" data-name="<?= $page_name ?>"
                style="<?= $h1_style ?>"><?= $page_name ?></h1>
            <h5><?= $mini_texts[0]['days'] ?> <?= ($is_eng == 1) ? 'days' : 'дней' ?> /
                <?= $mini_texts[0]['pricerange'] ?></h5>
            <h3><strong><?= $table[0]['dates'] ?></strong></h3>
        </div>
        <div class="row my-5 py-5">
            <div class="col-md-12 pt-3 bigger">
                <p><i><?= ($is_eng == 1) ? 'Tickets left' : 'осталось' ?></i></p>
                <?php
                $tickets_left * 1;
                $tickets_total * 1;
                $tickets_total = ($tickets_total <= 8) ? $tickets_total : 8;
                $tickets_left = ($tickets_left <= $tickets_total) ? $tickets_left : $tickets_total;
                ?>
                <p>
                    <strong>
                        <?= $tickets_left ?><?= ($is_eng == 1) ? ' out of ' : ' мест из ' ?><?= $tickets_total ?>
                    </strong>
                </p>
            </div>
            <div class="col-md-8 mt-3 mx-auto">
                <?php for ($i = 1; $i <= $tickets_total; $i++){
          if($i > $tickets_left) { ?>
                <img src="/wp-content/uploads/2019/07/ticket_bw.png" class="ticket" />
                <?php } else { ?>
                <img src="/wp-content/uploads/2019/07/ticket_fill.png" class="ticket" />
                <?php }
        } ?>
            </div>
        </div>
    </div>
</div>
<?php
// print_r(get_post_meta($post->ID));
?>
<div class="wrapper">
    <div class="main">
        <div class="section section-white">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-md-10 mx-auto">
                        <?php if ($reports) { ?>
                        <h2 class="mb-5 text-center"><?= ($is_eng == 1) ? 'What awaits us!' : 'Что нас ждет!' ?></h2>
                        <?php } ?>
                        <div class="row">
                            <?php
              if ($reports) {
                for ($i = 0; $i < count($reports); $i++ ) {
                  $report_photo = !empty($reports[$i]['report_photo']) ? $reports[$i]['report_photo'] : null ;
                  $report_title = !empty($reports[$i]['report_title']) ? $reports[$i]['report_title'] : null ;
                  $image = wp_get_attachment_image_url( $report_photo, 'full' );
            ?>
                            <div class="col-md-6">
                                <div class="card card-blog">
                                    <div class="card-image"
                                        style="background:url(<?= $image ?>);background-size: cover;background-position:center;border-radius: 12px 12px 0 0;">
                                    </div>
                                    <div class="card-body text-center">
                                        <h5 class="card-title">
                                            <?= $report_title ?>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                            <?php
                }
              }
              if( $is_eng == 1 ){ // надо будет переписать ифу
                ?>
                            <div class="col-md-12">
                                <?= the_content(); ?>
                                <h2 class="mb-5">
                                    <?= ($is_eng == 1) ? 'How will the trip go ': 'Как будет проходить поездка' ?></h2>
                                <div class="article-content red-headlines" id="linked">
                                    <?= $content_b; ?>
                                </div>
                            </div>
                            <?php
                }
              ?>
                        </div>
                    </div>
                </div>
                <?php
    if ($content_c) {
    $is_c_2 = ($content_c_2) ? 1 : 0;
    ?>
                <div class="row">
                    <div class="col-md-<?= ($is_c_2) ? '6' : '12' ?>">
                        <div class="article-content red-headlines">
                            <h3 class="text-center mb-5">
                                <?= ($is_eng == 1) ? 'What is included in the trip' : 'Что включено в поездку' ?></h3>
                            <?= $content_c; ?>
                        </div>
                    </div>
                    <?php if ($is_c_2){ ?>
                    <div class="col-md-6">
                        <div class="article-content red-headlines">
                            <h3 class="text-center mb-5">
                                <?= ($is_eng == 1) ? 'Additional options' : 'Дополнительные опции' ?></h3>
                            <?= $content_c_2; ?>
                        </div>
                    </div>
                    <?php } ?>
                </div>
                <?php } ?>
                <?php if ($content_d) { ?>
                <div class="container my-5 sub-info">
                    <div class="row">
                        <div class="col-md-8 mx-auto text-center">
                            <?= $content_d; ?>
                        </div>
                    </div>
                </div>
                <?php } ?>
                <div class="row mt-5">
                    <div class="col-md-6">
                        <button type="button" class="btn btn-primary btn-block btn-round mx-auto mt-3"
                            data-target="info" onclick="show_modal(this)"
                            style="max-width: 300px;font-size: 18px;padding: 12px;"><?= ($is_eng == 1) ? 'Route info' : 'Смотреть маршрут' ?></button>
                    </div>
                    <div class="col-md-6">
                        <button type="button" class="btn btn-danger btn-block btn-round mx-auto mt-3" data-target="book"
                            onclick="show_modal(this)"
                            style="max-width: 300px;font-size: 18px;padding: 12px;"><?= ($is_eng == 1) ? 'Book now' : 'Забронировать место' ?></button>
                    </div>
                </div>
                <div class="row mt-5">
                    <h2 class="text-center mx-auto mt-5">
                        <?= ($is_eng == 1) ? 'Before travel:' : 'До путешествия осталось' ?></h2>
                </div>
                <div class="row">
                    <div id="date_countdown" class="mx-auto mt-3" data-until="<?= $date[0]['date'] ?>"></div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>


<footer class="footer footer-black  footer-white ">
    <div class="container">
        <div class="row">
            <nav class="footer-nav col-md-12">
                <ul class="navbar-nav w-100 mx-auto">
                    <li class="nav-item">
                        <a class="navbar-brand" href="/" rel="tooltip" data-placement="bottom">
                            <img src="/wp-content/themes/advantures/img/KeepTravel_White.png" style="height: 30px">
                        </a>
                        <p class="copyright left">Ул. Нижняя<br>Сыромятническая,<br>д. 10, стр. 9</p>
                        <p class="copyright left"><a href="tel:84993808699">+7-499-380-86-99</a></p>
                    </li>
                    <li class="nav-item">
                        <a href="https://www.facebook.com/keeptravelaroundtheworld/"
                            class="btn btn-round btn-just-icon">
                            <i class="fa fa-facebook" aria-hidden="true"></i>
                        </a>
                        <a href="https://www.instagram.com/keeptravel_agency/" class="btn btn-round btn-just-icon">
                            <i class="fa fa-instagram" aria-hidden="true"></i>
                        </a>
                        <a href="https://vk.com/keep_travel_ru" target="_blank" class="btn btn-round btn-just-icon">
                            <i class="fa fa-vk" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li class="nav-item ml-md-auto pt-3">
                        <a href="/">Главная</a>
                    </li>
                    <li class="nav-item pt-3">
                        <a href="/#group">Путешествия</a>
                    </li>
                    <li class="nav-item ml-md-auto">
                        <p class="copyright">© 2019, Keep Travel</p>
                        <p class="copyright">ИП Цымбалюк Владислав Дмитриевич<br>
                            ИНН: 7&zwj;71562423948<br>
                            ОГРН: 31977460&zwj;0153431</p>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</footer>

<!-- whatsapp form -->
<div id="wa_form" class="whatsapp_tracker"
    onclick="window.location.href = 'https://api.whatsapp.com/send?phone=79854287400';">
    <div class="_header">
        <img src="/wp-content/uploads/2019/11/whatsapp_icon.png">
        <span> <?= ($is_eng == 1) ? 'Connect us:' : 'Напишите нам сообщение:' ?></span>
    </div>
    <div class="_body">
        <div>
            <?= ($is_eng == 1) ? 'Hello! My name`s Vladislav. How can I help you?' : 'Здравствуйте. Меня зовут Владислав. Какой у вас вопрос?' ?>
        </div>
        <div><?= ($is_eng == 1) ? 'Enter your message:' : 'Введите сообщение:' ?></div>
    </div>
</div>
<span class="cross" onclick="hideWaform()">x</span>

<!-- end whatsapp form -->

<div id="phone_btn_wrap">
    <a class="whatsapp_tracker" href="https://api.whatsapp.com/send?phone=79854287400">
        <img src="/wp-content/uploads/2019/11/whatsapp_icon.png" style="width: 50px;">
    </a>
</div>

<div class="modal modal-lg fade mx-auto" id="question-modal" tabindex="-1" role="dialog" aria-labelledby="video-modal"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div id="info_form">
                    <h4 class="text-center pb-3 bold">
                        <?= ($is_eng == 1) ? 'Leave your details<br>and we will send you a travel program' : 'Оставьте свои данные<br>и мы отправим вам программу путешествия'?>
                    </h4>
                    <?= do_shortcode('[contact-form-7 id="1479"]'); ?>
                </div>
                <div id="book_form">
                    <h4 class="text-center pb-3 bold">
                        <?= ($is_eng == 1) ? 'Enter your contact details<br>for booking' : 'Оставьте свои данные<br>для бронирования путешествия'?>
                    </h4>
                    <?= do_shortcode('[contact-form-7 id="1480"]'); ?>
                </div>
            </div>
        </div>
    </div>
</div>


<?php
endwhile;
wp_footer();
?>


<script type="text/javascript">
var $ = jQuery;

var _lang = $('.page-header').data('lang');

if (_lang == 'en') {
    var date_type = ['Days', 'Hours', 'Minutes', 'Seconds'];
} else {
    var date_type = ['Дней', 'Часов', 'Минут', 'Секунд'];
}


var until_date = $('#date_countdown').data('until');

$('#date_countdown').countdown(until_date, function(event) {
    var $this = $(this).html(event.strftime('' +
        '<div><span>%D</span><span class="sub">' + date_type[0] + '</span></div> ' +
        '<div><span>%H</span><span class="sub">' + date_type[1] + '</span></div> ' +
        '<div><span>%M</span><span class="sub">' + date_type[2] + '</span></div> ' +
        '<div><span>%S</span><span class="sub">' + date_type[3] + '</span></div>'));
});

function hideNav() {
    $('.navbar-toggler').click();
}

function whatsappOpen() {
    $('#wa_form').addClass('opened');
}

function hideWaform() {
    $('#wa_form').removeClass('opened');
}

var sentOkMessage =
    '<div class="sent-ok-message col-md-10 mx-auto"><h5 class="description white bold">Спасибо, в ближайшее время наш менеджер свяжется с вами!</h5></div>'

var wpcf7Elm = document.querySelectorAll('.wpcf7');
for (var i = 0; i < wpcf7Elm.length; i++) {
    wpcf7Elm[i].addEventListener('wpcf7mailsent', function(event) {
        var formWrap = this.parentNode;
        formWrap.innerHTML = sentOkMessage;
    }, false);
}


$(function() {
    setTimeout(whatsappOpen, 30000);
});

function show_modal(e) {
    var questionModal = $('#question-modal');
    questionModal.modal('show');
    target = $(e).data('target') + '_form';

    var forma = questionModal.find('div#' + target);

    var pagename = forma.find('#pageurl');
    var name = $('title').text();
    pagename.attr('value', name);

    forma.show().siblings('div').hide();
}


$('.mask-phone').mask('+9 (999) 999-99-99');

$(function() {
    $("a[href^='#']").click(function() {
        var _href = $(this).attr("href");
        $("html, body").animate({
            scrollTop: $(_href).offset().top + "px"
        });
        return false;
    });
});
</script>
<!-- Yandex.Metrika counter -->
<script type="text/javascript">
(function(m, e, t, r, i, k, a) {
    m[i] = m[i] || function() {
        (m[i].a = m[i].a || []).push(arguments)
    };
    m[i].l = 1 * new Date();
    k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k,
        a)
})
(window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

ym(52611595, "init", {
    clickmap: true,
    trackLinks: true,
    accurateTrackBounce: true,
    webvisor: true
});
</script>
<noscript>
    <div><img src="https://mc.yandex.ru/watch/52611595" style="position:absolute; left:-9999px;" alt="" /></div>
</noscript>
<!-- /Yandex.Metrika counter -->
<!-- /Yandex.Metrika goals -->
<script type="text/javascript">
document.addEventListener('wpcf7submit', function(event) {
    yaCounter52611595.reachGoal('formsubmit');
}, false);
document.addEventListener('wpcf7mailsent', function(event) {
    yaCounter52611595.reachGoal('formsent');
}, false);
$("[href='tel:+74993808699']").click(function() {
    yaCounter52611595.reachGoal('phoneclick');
});
$("[href='tel:84993808699']").click(function() {
    yaCounter52611595.reachGoal('phoneclick');
});
$("[href='tel:8-800-550-47-39']").click(function() {
    yaCounter52611595.reachGoal('phoneclick');
});
</script>
<!-- /Yandex.Metrika goals -->
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-135472998-1"></script>
<script>
window.dataLayer = window.dataLayer || [];

function gtag() {
    dataLayer.push(arguments);
}
gtag('js', new Date());

gtag('config', 'UA-135472998-1');
</script>

<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

</body>

</html>