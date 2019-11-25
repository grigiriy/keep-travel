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
// $table = !empty(carbon_get_post_meta($post->ID, 'table', 'complex')) ? carbon_get_post_meta($post->ID, 'table', 'complex') : null ;
while (have_posts()) : the_post();
$page_name = !empty($sub_name) ? $sub_name : get_the_title();

 ?>

 <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
 <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick-theme.css"/>
 <style type="text/css">
  .slick-prev::before,
  .slick-next::before {
    color: #000;
  }
   @media(min-width: 570px){
    .slick-prev {
      left: -14px!important;
    }
   }
 </style>
<!-- End Navbar -->
<div class="page-header" data-parallax="false" style="background-image: url(<?= $back_image ?>);">
<div class="filter"></div>
<div class="content-center">
  <div class="motto">
    <h1 class="title-uppercase text-center" id="pageName" data-name="<?= $page_name ?>">Путешествие по <?= $page_name ?></h1>
    <h5><?= $mini_texts[0]['days'] ?> дней / <?= $mini_texts[0]['pricerange'] ?></h5>
  </div>
</div>
</div>
<div class="wrapper">
<div class="main">
  <div class="section section-white">
    <div class="container">
      <div class="row">
        <div class="col-md-10 mx-auto">
          <h2 class="mb-5 text-center" >Что нас ждет!</h2>
          <div class="row">
              <?php for ($i = 0; $i < count($reports); $i++ ) {
                  $report_photo = !empty($reports[$i]['report_photo']) ? $reports[$i]['report_photo'] : null ;
                  $report_title = !empty($reports[$i]['report_title']) ? $reports[$i]['report_title'] : null ;
                  $image = wp_get_attachment_image_url( $report_photo, 'full' );
            ?>
            <div class="col-md-6">
              <div class="card card-blog">
                  <div class="card-image" style="background:url(<?= $image ?>);background-size: cover;background-position:center;border-radius: 12px 12px 0 0;">
                  </div>
                  <div class="card-body text-center">
                    <h5 class="card-title">
                      <?= $report_title ?>
                    </h5>
                  </div>
                </div>
            </div>
        <?php } ?>
        </div>
      </div>
    </div>
    <div class="row my-5">
      <div class="col-md-2 offset-md-1 pt-3">
        <p><i>осталось</i></p>
        <?php
        $tickets_left * 1;
        $tickets_total * 1;
        $tickets_total = ($tickets_total <= 8) ? $tickets_total : 8;
        $tickets_left = ($tickets_left <= $tickets_total) ? $tickets_left : $tickets_total;
        ?>
        <p><strong><?= $tickets_left ?> мест из <?= $tickets_total ?></strong></p>
      </div>
      <div class="col-md-9">
        <?php for ($i = 1; $i <= $tickets_total; $i++){
          if($i > $tickets_left) { ?>
        <img src="/wp-content/uploads/2019/07/ticket_bw.png" class="ticket"/>
          <?php } else { ?>
        <img src="/wp-content/uploads/2019/07/ticket_fill.png" class="ticket"/>
          <?php }
        } ?>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <button type="button" class="btn btn-primary btn-block btn-round mx-auto mt-3" data-target="info" onclick="show_modal(this)" style="max-width: 300px;">Смотреть маршрут</button>
      </div>
      <div class="col-md-6">
        <button type="button" class="btn btn-danger btn-block btn-round mx-auto mt-3" data-target="book" onclick="show_modal(this)" style="max-width: 300px;">Забронировать место</button>
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
            <li  class="nav-item">
            <a class="navbar-brand" href="/" rel="tooltip" data-placement="bottom">
              <img src="/wp-content/themes/advantures/img/KeepTravel_White.png" style="height: 30px">
            </a>
            </li>
            <li class="nav-item">
                <a href="https://www.facebook.com/keeptravelaroundtheworld/" class="btn btn-round btn-just-icon">
                    <i class="fa fa-facebook" aria-hidden="true"></i>
                </a>
                <a href="https://www.instagram.com/keeptravel_agency/" class="btn btn-round btn-just-icon">
                    <i class="fa fa-instagram" aria-hidden="true"></i>
                </a>
            </li>
            <li class="nav-item ml-md-auto pt-3">
            <a href="/">Главная</a>
        </li>
        <li class="nav-item pt-3">
            <a href="/#group">Путешествия</a>
        </li>
        <li class="nav-item mx-auto pt-3">
            <a href="tel:84993808699">+7-499-380-86-99</a>
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
<div id="wa_form" class="" onclick="window.location.href = 'https://api.whatsapp.com/send?phone=79169277027';">
  <div class="_header">
    <img src="/wp-content/uploads/2019/11/whatsapp_icon.png">
    <span> Напишите нам сообщение:</span>
  </div>
  <div class="_body">
    <div>Введите сообщение:</div>
  </div>
</div>
<span class="cross" onclick="hideWaform()">x</span>

<style type="text/css">
  @media(max-width:768px) {
    #wa_form,
    #wa_form+.cross{
      display:none!important;
    }
  }
  #wa_form {
    height: 50px;
    width: 300px;
    background: #a7ce64;
    position: fixed;
    bottom: 0px;
    z-index: 9999;
    right: 30px;
    border-radius: 10px 10px 0 0;
    box-shadow: 3px 3px 20px #000;
    color: #fff;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.5s;
  }
  #wa_form.opened {
    height: 400px;
  }
  #wa_form img {
    max-width: 20px;
    margin-right: 10px;
  }
  #wa_form ._header {
    margin: 15px;
  }
  #wa_form ._body {
    background: #fff;
    margin-top: 20px;
    height: 100%;
    color: #000;
    display: flex;
  }
  #wa_form ._body div {
    align-self: flex-end;
    border-top: solid 1px #ccc;
    width: 100%;
    padding: 15px;
    color: #777;
    font-weight: 100;
    margin-bottom: 60px;
    display: none;
  }
  #wa_form.opened ._body div {
    display: block;
  }
  #wa_form+.cross {
    display: none;
  }
  #wa_form.opened+.cross {
    display: block;
    float: right;
    border-bottom: solid 1px #fff;
    padding: 0px 8px 2px;
    border-radius: 0 8px 0 8px;
    position: fixed;
    right: 30px;
    bottom: 376px;
    cursor: pointer;
    border-left: solid 1px #fff;
    background: #fff;
    color: #a7ce64;
    z-index: 99999;
  }
</style>
<!-- end whatsapp form -->

<div id="phone_btn_wrap">
<a href="https://api.whatsapp.com/send?phone=79169277027">
  <img src="/wp-content/uploads/2019/11/whatsapp_icon.png" style="width: 50px;">
</a>
</div>

<div class="modal modal-lg fade mx-auto" id="question-modal" tabindex="-1" role="dialog" aria-labelledby="video-modal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <div id="info_form">
          <?= do_shortcode('[contact-form-7 id="1479"]'); ?>
        </div>
        <div id="book_form">
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
function whatsappOpen(){
  $('#wa_form').addClass('opened');
}
function hideWaform() {
  $('#wa_form').removeClass('opened');
}

var sentOkMessage = '<div class="sent-ok-message col-md-10 mx-auto"><h5 class="description">Спасибо, в ближайшее время наш менеджер свяжется с вами!</h5></div>'

var wpcf7Elm = document.querySelectorAll( '.wpcf7' );
  for (var i = 0; i < wpcf7Elm.length; i++){
  wpcf7Elm[i].addEventListener( 'wpcf7mailsent', function( event ) {
      var formWrap = this.parentNode;
      formWrap.innerHTML = sentOkMessage;
  }, false );
}


$(function(){
    var pagename = $('#pageurl');
    var name = $('title').text();
    pagename.attr('value',name);
    setTimeout(whatsappOpen, 30000);
});

function show_modal(e) {
  var questionModal = $('#question-modal');
  questionModal.modal('show');
  target = $(e).data('target') + '_form';

  questionModal.find('div#' + target).show().siblings('div').hide();
}


$('.mask-phone').mask('+9 (999) 999-99-99');

$(function(){
    $("a[href^='#']").click(function(){
        var _href = $(this).attr("href");
        $("html, body").animate({scrollTop: $(_href).offset().top+"px"});
        return false;
    });
});
</script>
<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(52611595, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/52611595" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
<!-- /Yandex.Metrika goals -->
<script type="text/javascript">
document.addEventListener( 'wpcf7submit', function( event ) {
yaCounter52611595.reachGoal('formsubmit');
}, false );
  document.addEventListener( 'wpcf7mailsent', function( event ) {
yaCounter52611595.reachGoal('formsent');
}, false );
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
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-135472998-1');
</script>

<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

</body>

</html>