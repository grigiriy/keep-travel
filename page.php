<?php get_header(); 
$back_img = !empty(carbon_get_post_meta($post->ID, 'image', 'complex')) ? carbon_get_post_meta($post->ID, 'image', 'complex') : null ;
$about = !empty(carbon_get_post_meta($post->ID, 'about', 'complex')) ? carbon_get_post_meta($post->ID, 'about', 'complex') : null ;
$faq = !empty(carbon_get_post_meta($post->ID, 'faq', 'complex')) ? carbon_get_post_meta($post->ID, 'faq', 'complex') : null ;
$insta = !empty(carbon_get_post_meta($post->ID, 'insta', 'complex')) ? carbon_get_post_meta($post->ID, 'insta', 'complex') : null ;
$counters = !empty(carbon_get_post_meta($post->ID, 'counters', 'complex')) ? carbon_get_post_meta($post->ID, 'counters', 'complex') : null ;
$videos = !empty(carbon_get_post_meta($post->ID, 'videos', 'complex')) ? carbon_get_post_meta($post->ID, 'videos', 'complex') : null ;
$reviews = !empty(carbon_get_post_meta($post->ID, 'reviews', 'complex')) ? carbon_get_post_meta($post->ID, 'reviews', 'complex') : null ;
$founders = !empty(carbon_get_post_meta($post->ID, 'founders', 'complex')) ? carbon_get_post_meta($post->ID, 'founders', 'complex') : null ;
$gallery = !empty(carbon_get_post_meta($post->ID, 'gallery', 'complex')) ? carbon_get_post_meta($post->ID, 'gallery', 'complex') : null ;
while (have_posts()) : the_post();
?>
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick-theme.css" />
<div class="section-space"></div>


<div class="header-2" id="top">
    <div id="carouselExampleIndicators" class="page-header carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" style="height:100vh;background-size:cover">
                <!-- start first screen container -->
                <div class="page-header" id="first_video" style="background: transparent; position:absolute;top:0">
                    <div class="filter"></div>
                    <script>
                    let cl_width = document.body.clientWidth;
                    if (cl_width > 768) {
                        document.querySelector('#first_video>.filter').insertAdjacentHTML('beforeBegin', `
                        <video id="huy" autoplay muted="muted" loop style="width: auto;min-height: 100vh;max-height: 1030px;min-width: 100vw;">
                            <source src="/wp-content/uploads/2020/02/videoBG.mp4" type="video/mp4">
                            <source src="/wp-content/uploads/2020/02/videoBG.webm" type="video/webm">
                        </video>
                        `);
                    }
                    </script>
                    <style>
                    @media(max-width:768px) {
                        .page-header#first_video {
                            background-image: url("/wp-content/uploads/2020/02/videoBG.gif") !important;
                            background-repeat: no-repeat;
                            background-size: cover !important;
                            background-position-x: 50% !important;
                        }
                    }
                    </style>
                    <div class="content-center" id="phone">
                        <div class="container">
                            <div class="row my-5">
                                <div class="col-md-12 mx-auto text-center mb-5">
                                    <h1 class="title mb-5">Познай себя, познавая мир</h1>
                                    <h2 class="subtitle">Совершай невероятные открытия на уникальных маршрутах на пяти
                                        континентах</h2>
                                    <!-- <h5 class="subtitle">Если ты любишь путешествовать в компании позитивных и жизнерадостных людей, если ты готов осуществить мечты о посещении самых желанных уголков планеты, спеши забронировать свое место в наш ближайший road-трип!</h5> -->
                                </div>
                            </div> <!-- row -->
                        </div>
                    </div>
                </div>
            </div> <!-- закрылся айтем -->
            <?php

    $_args = [ 
      'posts_per_page' => -1,
      'post_status' => 'publish',
      'post_type' => 'post',
      'meta_query'=>[
        [
            'key' => '_is_index',
            'value' => 'yes',
          ],
      ],
    ];
    $query = get_posts($_args);


    foreach ($query as $key => $post ) :

      $sub_name = !empty(carbon_get_post_meta($post->ID, 'sub_name')) ? carbon_get_post_meta($post->ID, 'sub_name') : null ;
      $page_name = !empty($sub_name) ? $sub_name : get_the_title();
      $back_image = !empty(carbon_get_post_meta($post->ID, 'index_image')) ? carbon_get_post_meta($post->ID, 'index_image') : null ;
      $back_image = wp_get_attachment_image_url( $back_image, 'full' );
      $mini_texts = !empty(carbon_get_post_meta($post->ID, 'mini_texts', 'complex')) ? carbon_get_post_meta($post->ID, 'mini_texts', 'complex') : null ;
      $table = !empty(carbon_get_post_meta($post->ID, 'table', 'complex')) ? carbon_get_post_meta($post->ID, 'table', 'complex') : null ;
      $is_video =  !empty(carbon_get_post_meta($post->ID, 'video'));

    //   $is_video = ( $key == 0 ) ? true : false ;

      $is_video_class = $is_video ? 'is_video' : '';

      $table = !empty(carbon_get_post_meta($post->ID, 'table', 'complex')) ? carbon_get_post_meta($post->ID, 'table', 'complex') : null ;
    ?>
            <div class="carousel-item"
                style="background-image:url(<?= $back_image ?>);height:100vh;background-size:cover">
                <div class="page-header <?= $is_video_class; ?>"
                    style="background: transparent; position:absolute;top:0">
                    <?php if($is_video == 1) { ?>
                    <script>
                    let cl_width = document.body.clientWidth;
                    if (cl_width > 768) {
                        document.querySelector('.page-header.is_video').innerHTML = `
                          <video id="huy" autoplay muted loop style="width: auto;min-height: 100vh;max-height: 1030px;min-width: 100vw;">
                            <source src="/wp-content/uploads/2019/11/back_sri_video.mp4" type="video/mp4">
                            <source src="/wp-content/uploads/2019/11/back_sri_video.webm" type="video/webm">
                          </video>
                          `;
                    } else {
                        document.querySelector('.page-header.is_video').classList.add('sri_video');
                    }
                    </script>
                    <style>
                    .page-header.is_video.sri_video {
                        background-image: url("/wp-content/uploads/2019/11/back_sri_video.gif") !important;
                        /* background-image: url("/wp-content/uploads/2020/02/keepPro_opt.gif") !important; */
                    }
                    </style>
                    <?php } ?>
                    <div class="filter"></div>
                    <div class="content-center">
                        <div class="container">
                            <?php
                                $h1_style = '';
                                if ($is_video == 1){
                                $h1_style = 'font-size: 2.5em; text-transform: none; margin: 0 auto;padding: 0 20px;';
                                }
                            ?>
                            <div class="row my-5">
                                <div class="col-md-12 mx-auto text-center mb-5">
                                    <h1 class="title-uppercase text-center" id="pageName_<?= $key ?>"
                                        data-name="<?= $page_name ?>" style="<?= $h1_style ?>"><a style="color:inherit"
                                            href="<?= the_permalink($post->ID); ?>"><?= $page_name ?></a></h1>
                                    <?php
                                        if(!empty($mini_texts[0]['saleprice'])){
                                    ?>
                                    <h5><?= $mini_texts[0]['days'] ?> дней /
                                        <div style="display: inline-block;width: 130px;position:relative;top:10px">
                                            <span style="
                                            opacity: 0.7;
                                            font-size: 20px;
                                            display: block;
                                            text-decoration: line-through;
                                            line-height: 1em;
                                            "><?= $mini_texts[0]['pricerange'] ?></span>
                                            <span style="color: yellow;"><?= $mini_texts[0]['saleprice'] ?></span>
                                        </div>
                                    </h5>
                                    <?php } else { ?>
                                    <h5><?= $mini_texts[0]['days'] ?> дней / <?= $mini_texts[0]['pricerange'] ?></h5>
                                    <?php } ?>
                                    <h3><strong><?= $table[0]['dates'] ?></strong></h3>
                                    <div class="row">
                                        <div class="col-md-6 mx-auto">
                                            <a href="javascript:void(0)" class="main-links">
                                                <button type="button" class="btn btn-block btn-round mx-auto mt-3"
                                                    data-target="book" data-name="<?= get_the_title($post->ID); ?>"
                                                    onclick="show_modal(this)"
                                                    style="max-width: 300px;font-size: 18px;padding: 12px;background:yellow;color:#333;border: none;">Забронировать
                                                    место</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- закрылся айтем -->
            <?php
    // }
    endforeach;
    ?>

            <ol class="carousel-indicators" style="z-index:9999999;position:absolute">
                <?php
        for ($b = 0; $b < 2; $b++ ) { //костыль, почему-то не корректно считает
      ?>
                <li data-target="#carouselExampleIndicators" data-slide-to="<?= $b; ?>"
                    class="<?php if($b == 0){ echo 'active'; }; ?>"></li>
                <?php
      }
      ?>
            </ol>
        </div>
    </div>
</div> <!-- новый -->
<!-- end first screen container -->

<div class="section section-testimonials minh-100vh" id="parts">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 ml-auto mr-auto text-center">
                <h2 class="title">Составляющие наших туров</h2>
            </div>
        </div>
        <div class="row mb-5">
            <div class="abs_left">
                <div class="testimonials-people">
                    <div class="left-first-person"
                        style="background-image:url(/wp-content/uploads/2019/11/circs_1.jpg)">
                    </div>
                    <div class="left-third-person"
                        style="background-image:url(/wp-content/uploads/2019/11/second_circle_nov.jpg)">
                    </div>
                    <div class="left-fourth-person"
                        style="background-image:url(/wp-content/uploads/2019/11/circs_3.jpg)">
                    </div>
                    <div class="left-fifth-person"
                        style="background-image:url(/wp-content/uploads/2019/11/new_third_image.jpg)">
                    </div>
                </div>
            </div>
            <div class="our_tours_nav row" id="nav-parts">
                <h3 class="card-title title active" data-nav="programm" onclick="swipeTo(this);">
                    Программа
                </h3>
                <h3 class="card-title title" data-nav="people" onclick="swipeTo(this);">
                    Люди
                </h3>
                <h3 class="card-title title" data-nav="comfort" onclick="swipeTo(this);">
                    Комфорт
                </h3>
                <h3 class="card-title title" data-nav="memories" onclick="swipeTo(this);">
                    Воспоминания
                </h3>
                <svg xmlns="http://www.w3.org/2000/svg" id="start_svg">
                    <path d="M10 140 Q 20 50 240 70" stroke="#fff" fill="transparent" stroke-width="3"
                        stroke-dasharray="15"></path>
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" id="middle_svg">
                    <path d="M10 10 Q 70 20 150 10" stroke="#fff" fill="transparent" stroke-width="3"
                        stroke-dasharray="15"></path>
                </svg>

                <svg xmlns="http://www.w3.org/2000/svg" id="end_svg">
                    <path d="M10 80 Q 270 60 300 150" stroke="#fff" fill="transparent" stroke-width="3"
                        stroke-dasharray="15"></path>
                </svg>
                <script type="text/javascript">
                function swipeTo(e) {
                    let $this = $(e);
                    let $term = $('#t_' + $this.data('nav'));

                    $term.show(300);
                    $term.siblings('.card').hide(300);

                    let $prev = $('.nav-prev');
                    let $next = $('.nav-next');

                    let navs = $('#nav-parts').find('h3');
                    for (let i = 0; i < navs.length; i++) {
                        if ($(navs[i]).data('nav') == $this.data('nav')) {
                            $(navs[i]).addClass('active');
                        } else {
                            $(navs[i]).removeClass('active');
                        }
                    }
                    if ($this.data('nav') == 'programm') {
                        console.log($this.data('nav'));
                        $prev.data('nav', 'memories');
                        $next.data('nav', 'people');
                    } else if ($this.data('nav') == 'people') {
                        console.log($this.data('nav'));
                        $prev.data('nav', 'programm');
                        $next.data('nav', 'comfort');
                    } else if ($this.data('nav') == 'comfort') {
                        console.log($this.data('nav'));
                        $prev.data('nav', 'people');
                        $next.data('nav', 'memories');
                    } else if ($this.data('nav') == 'memories') {
                        console.log($this.data('nav'));
                        $prev.data('nav', 'comfort');
                        $next.data('nav', 'programm');
                    }
                }
                </script>
            </div>
            <div class="col-md-12">
                <div class="nav-prev" data-nav="memories" onclick="swipeTo(this)"></div>
                <div class="card card-plain" id="t_programm" style="">
                    <img src="/wp-content/uploads/2019/11/circle_3.jpg">
                    <div>
                        <h3>Программа</h3>
                        <p>Каждый наш маршрут уникален и составлен опытными Тревел Дизайнерами, живущими в данной стране
                            Путешествия. Во всех наших маршрутах мы предлагаем разную вариацию каждого дня на любой
                            вкус, чтобы Ваше время Путешествия стало для Вас незабываемым!</p>
                    </div>
                </div>
                <div class="card card-plain" id="t_people" style="display:none">
                    <img src="/wp-content/uploads/2019/11/first_circle.jpg">
                    <div>
                        <h3>Люди</h3>
                        <p>Наши участники - это энергичные и интересные люди со всех уголков Земли, которых объединяет
                            следующие цели: Путешествовать, узнавать Мир и развиваться.</p>
                    </div>
                </div>
                <div class="card card-plain" id="t_comfort" style="display:none">
                    <img src="/wp-content/uploads/2019/11/circle_2.jpg">
                    <div>
                        <h3>Комфорт</h3>
                        <p>Для нас комфорт и безопасность наших участников всегда на первом месте! Экономия на
                            проживании и транспорте - это не про Нас!</p>
                    </div>
                </div>
                <div class="card card-plain" id="t_memories" style="display:none">
                    <img src="/wp-content/uploads/2019/11/circs_4.jpg">
                    <div>
                        <h3>Воспоминания</h3>
                        <p>Мы стараемся сделать каждое наше Путешествие незабываемым, чтобы воспоминания о нем жили
                            вечно!</p>
                    </div>
                </div>
                <div class="nav-next" data-nav="programm" onclick="swipeTo(this)"></div>
            </div>
            <div class="abs_right">
                <div class="testimonials-people">
                    <div class="right-sixth-person"
                        style="background-image:url(/wp-content/uploads/2019/11/circs_5.jpg)">
                    </div>
                    <div class="right-second-person"
                        style="background-image:url(/wp-content/uploads/2019/11/circs_6.jpg)">
                    </div>
                    <div class="right-third-person"
                        style="background-image:url(/wp-content/uploads/2019/11/circs_7.jpg)">
                    </div>
                    <div class="right-fourth-person"
                        style="background-image:url(/wp-content/uploads/2019/11/eigth_circle_nov.jpg)">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- start индивидуальные screen -->
<!--     <div id="order" class="section d-flex contactus-1 section-image" style="align-items:center;background-image: url('/wp-content/uploads/2019/02/5.jpg')"> -->
<div class="d-none">
    <div class="col-md-8 ml-auto mr-auto  pb-3">
        <div class="card card-contact no-transition mb-3">
            <?= do_shortcode( '[contact-form-7 id="287" title="Форма индивидуального путешествия"]' )  ?>
        </div>
    </div>
</div>
<!-- end индивидуальные screen -->


<!-- start групповые screen -->
<div id="group" class="features-2 pt-1 pb-5 mb-0">
    <div class="minh-100vh px-3 pb-5">
        <div class="container-fluid px-0">
            <div class="row">
                <div class="col-md-8 ml-auto mr-auto text-center">
                    <p class="h1 title my-5">Наши ближайшие направления</p>
                </div>
            </div>
            <div class="row month_list">
                <?php
          $args = [ 
              'posts_per_page' => -1,
              'post_status' => 'publish',
              'post_type' => 'post',
          ];
          $posts = get_posts($args);

          for ($i = 4; $i < 16; $i++) {

            switch ($i) {
              case 0:
                $month = "Декабрь";
                break;
              case 1:
                $month = "Январь";
                break;
              case 2:
                $month = "Февраль";
                break;
              case 3:
                $month = "Март";
                break;
              case 4:
                $month = "Апрель";
                break;
              case 5:
                $month = "Май";
                break;
              case 6:
                $month = "Июнь";
                break;
              case 7:
                $month = "Июль";
                break;
              case 8:
                $month = "Август";
                break;
              case 9:
                $month = "Сентябрь";
                break;
              case 10:
                $month = "Октябрь";
                break;
              case 11:
                $month = "Ноябрь";
                break;
              case 12:
                $month = "Декабрь";
                break;
              case 13:
                $month = "Январь";
                break;
              case 14:
                $month = "Февраль";
                break;
              case 15:
                $month = "Март";
                break;
              case 16:
                $month = "Апрель";
                break;
              case 17:
                $month = "Май";
                break;
              case 18:
                $month = "Июнь";
                break;
              case 18:
                $month = "Июль";
                break;
              case 19:
                $month = "Август";
                break;
              case 20:
                $month = "Сентябрь";
                break;
              case 21:
                $month = "Октябрь";
                break;
              case 22:
                $month = "Ноябрь";
                break;
              default:
                $month = "...";
          };

            ?>

                <div class="col-lg-3 col-md-12 month_block" data-month="<?= $i; ?>">
                    <div class="text-center h3"><?= $month; ?></div>
                    <div class="_month">
                    </div>
                </div>
                <?php
        };
        ?>

                <?php
            $vis_arr = [];
            foreach ($posts as $key => $post ):
            if (is_sticky()) {
              continue;
            }
            $card_month = carbon_get_post_meta($post->ID, 'calend', 'complex')[0]['month'];
            $back_img = !empty(carbon_get_post_meta( $post->ID, 'backgrounds_post', 'complex') ) ? carbon_get_post_meta( $post->ID, 'backgrounds_post', 'complex' ) : null ;
            $image = wp_get_attachment_image_url( $back_img[0]['image1'], 'full' );
            $icon = wp_get_attachment_image_url( $back_img[0]['image2'], 'full' );
            $table = !empty(carbon_get_post_meta($post->ID, 'table', 'complex')) ? carbon_get_post_meta($post->ID, 'table', 'complex')[0] : null ;
            $calend = !empty(carbon_get_post_meta($post->ID, 'calend', 'complex')) ? carbon_get_post_meta($post->ID, 'calend', 'complex')[0] : null ;
            
            $corona = !empty(carbon_get_post_meta($post->ID, 'corona')) ? carbon_get_post_meta($post->ID, 'corona') : null ;

            $tickets_left = (carbon_get_post_meta($post->ID, 'backgrounds_post', 'complex')[0]['tickets_left'] != '') ? carbon_get_post_meta($post->ID, 'backgrounds_post', 'complex')[0]['tickets_left'] : 'X' ;

            if(!$corona){
                $tickets_left = ($tickets_left == 0) ? 'filled' : '';
            } else {
                $tickets_left = 'corona';
            }

            $is_offset =  !empty(carbon_get_post_meta($post->ID, 'calend', 'complex')[0]['offset']);
            // $is_offset = ($is_offset == 1) ? '_offset' : '';
            if ($is_offset == 1) {
              $is_offset = '_offset';
            } else {
              $is_offset = '';
              if (substr($calend['date'], -2) > 15) {
                if (substr($calend['date'], -2) == 28) {
                  $is_offset = ''; // костыль для января, можно будет переделать
                } else {
                  $is_offset = '_end';
                }
              }
            }
            ?>
                <div data-month="<?= $card_month ?>" class="card mt-3 _dark <?= $is_offset.' '.$tickets_left; ?>"
                    data-background="image" style="background-image: url(<?= $image; ?>)">
                    <a href="<?= the_permalink($post->ID); ?>" class="btn btn-link btn-neutral px-0 card-link-wrap">
                        <div class="card-body d-flex" style="flex-direction: column;">
                            <?php
                      $f_size = ($post->post_name == 'trailer_islandia') ? 'fs_14' : '';
                      ?>
                            <h6 class="card-category <?= $f_size; ?>"><?= get_the_title($post->ID); ?></h6>
                            <div class="card-icon" style="
                        <?php
                          if ($post->post_name == 'australia' || $post->post_name == 'roadtrip_australia') {
                            echo 'width: 140px;padding-top: 85px;margin-bottom: -15px;';
                          } else if ($post->post_name == 'california') {
                            echo 'width:145px';
                          } else if ($post->post_name == 'afrika') {
                            echo 'margin-top: 15px; margin-bottom: -15px; width:80px;';
                          } else {
                            echo 'width:80px';
                          }
                        ?>
                        ">
                                <?php if($icon){ ?>
                                <img src="<?= $icon ?>" alt="<?= $post->post_name ?>">
                                <?php } ?>
                            </div>
                            <div class="card-footer" style="margin-top: auto;">
                                <p class="_dates"><?= $table['dates'];?></p>
                                <p><i class="fa fa-book" aria-hidden="true"></i> Подробнее </p>
                            </div>
                        </div>
                    </a>
                </div>
                <style>
                .month_list>div[data-month="<?= $card_month; ?>"] {
                    display: block;
                }
                </style>
                <?php
              endforeach;
                ?>
            </div>
        </div>
    </div>
</div>
<!-- end групповые screen -->

<!-- start instagram screen -->
<div id="insta" class="pt-3" style="background-color:#202020">
    <div class="col-md-6 ml-auto mr-auto text-center">
        <h2 class="title white">C нами уже путешествовали</h2>
    </div>
    <div class="container-fluid">
        <div class="instas_wrap">
            <?php for ($i = 0; $i < count($insta); $i++){
          $instik = !empty($insta[$i]['instik']) ? $insta[$i]['instik'] : null ;
        ?>
            <div>

                <?= $instik ?>
            </div>
            <?php } ?>
            <svg xmlns="http://www.w3.org/2000/svg" id="start_svg_insta">
                <path d="M10 80 Q 80 90 120 10" stroke="#fff" fill="transparent" stroke-width="3" stroke-dasharray="15"
                    :="" style=""></path>
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" id="middle_svg_insta">
                <path d="M10 80 Q 120 60 150 150" stroke="#fff" fill="transparent" stroke-width="3"
                    stroke-dasharray="15" :="" style=""></path>
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" id="end_svg_insta">
                <path d="M10 80 Q 80 90 120 10" stroke="#fff" fill="transparent" stroke-width="3" stroke-dasharray="15"
                    :="" style=""></path>
            </svg>
        </div>
    </div>
    <script async src="//www.instagram.com/embed.js"></script>
    <div class="container counters mx-auto">
        <div class="row">
            <div class="col-md-4 info">
                <div class="description">
                    <h1 style="color:#51cbce"><?= $counters[0]['people'] ?></h1>
                    <h4 class="info-title white">Человек зарядили эмоциями</h4>
                    <p class="white">Из них с нами было <?= $counters[0]['male'] ?> мужчин<br>и
                        <?= $counters[0]['female'] ?> женщины</p>
                </div>
            </div>
            <div class="col-md-4 info">
                <div class="description">
                    <h1 style="color:#51cbce"><?= $counters[0]['years'] ?></h1>
                    <h4 class="info-title white">Средний возраст</h4>
                    <p class="white">С нами путешествовали в возрасте от 18 до 48 лет</p>
                </div>
            </div>
            <div class="col-md-4 info">
                <div class="description">
                    <h1 style="color:#51cbce"><?= $counters[0]['km'] ?></h1>
                    <h4 class="info-title white">Километров</h4>
                    <p class="white">Мы побывали на 5 континентах и в 16 странах</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end счетчики screen -->

<!-- start ценности screen -->
<div id="about" class="blog-3 pt-3">
    <div class="container-fluid">
        <h2 class="title text-center">Наша философия</h2>
        <div class="row">
            <div class="col-md-5 offset-xl-1">
                <img src="/wp-content/uploads/2019/12/feelo.png">
            </div>
            <div class="col-md-5 feel_slider">
                <?php
        for ($i = 0; $i < count($about); $i++ ) {
            $about_title = !empty($about[$i]['about_title']) ? $about[$i]['about_title'] : null ;
            $about_text = !empty($about[$i]['about_text']) ? $about[$i]['about_text'] : null ;
            $custom_class =  ($i == 1) ? '_smaller' : '' ;
          ?>
                <div class="card-body pl-3 pr-5">
                    <h3 class="card-title"><?= $about_title ?></h3>
                    <p class="card-description strong black <?= $custom_class ?>"><?= $about_text ?></p>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
<!-- end ценности screen -->

<!-- start гиды screen -->
<div id="guides" class="py-5">
    <div class="container mb-5">
        <div class="col-md-8 mx-auto text-center">
            <div class="space-top"></div>
            <h2 class="title">Основатели проекта</h2>
        </div>
        <div class="row">
            <?php
        for ($i = 0; $i < count($founders); $i++ ) {
            $founders_about = !empty($founders[$i]['founders_about']) ? $founders[$i]['founders_about'] : null ;

            $founders_name = !empty($founders[$i]['founders_name']) ? $founders[$i]['founders_name'] : null ;

            $founders_sub = !empty($founders[$i]['founders_sub']) ? $founders[$i]['founders_sub'] : null ;

            $founders_photo = !empty($founders[$i]['founders_photo']) ? $founders[$i]['founders_photo'] : null ;
            $image = wp_get_attachment_image_url( $founders_photo, 'full' );
        ?>
            <div class="col-md-6 text-center guid">
                <img src="<?= $image ?>" class="img-circle img-no-padding img-responsive rounded" alt="Rounded Image">
                <h4 class="mt-0 mb-2"><?= $founders_name ?></h4>
                <p class="mt-0 mb-2 text-center" style="min-height:45px"><i><?= $founders_sub ?></i></p>
                <p><?= $founders_about ?></p>
            </div>
            <?php } ?>
        </div>
    </div>
</div>
<!-- end гиды screen -->

<script type="text/javascript">
function changeTab(e) {
    $this = $(e);
    let $gall = $($this.data('nav'));

    $gall.show(300);
    $gall.siblings('.row').hide(300);

}
</script>
<!-- start видосы screen -->
<div class="row">
    <div class="col-md-8 mx-auto text-center">
        <div class="space-top"></div>
        <h2 class="title black">Воспоминания</h2>
    </div>
</div>
<div id="gallery" class="section-image">
    <div class="container-fluid">
        <div class="mb-5 mx-auto">
            <div class="gallery_list">
                <?php
        for ($i = 0; $i < count($gallery); $i++ ) {
          $gallery_title = !empty($gallery[$i]['place']) ? $gallery[$i]['place'] : null ;
          $gallery_preview =  !empty($gallery[$i]['image']) ? $gallery[$i]['image'] : null ;
          $preview = wp_get_attachment_image_url( $gallery_preview, 'full' );
          if ( $gallery_title ) { ?>
                <div class="tabza_nav" style="background-image:url(<?= $preview ?>)">
                    <h3 style="color:white; text-align: center" data-nav="#tab-<?= $i; ?>" onclick="changeTab(this)">
                        <?= $gallery_title ?></h3>
                </div>
                <?php
          }
        }
        ?>
            </div>
        </div>
        <?php
          for ($i = 0; $i < count($gallery); $i++ ) {
            $dsply = ($i == 0) ? 'flex' : 'none';
              $gallery_title = !empty($gallery[$i]['place']) ? $gallery[$i]['place'] : null ;
              if ( $gallery_title ) { 
                if ( isset($gallery[$i]['videos']) ) {
                  $video_col = '6';
                } else {
                  $video_col = '10 mx-auto';
                }
                ?>
        <div class="row" style="display:<?= $dsply ?>" id="tab-<?= $i; ?>">
            <div class="col-md-<?= $video_col ?>">
                <div class="gallery_wrap">
                    <h3 style="color:white; text-align: center"><?= $gallery_title ?></h3>
                </div>
                <div class="gallery_wrap">
                    <?php
                  for ($j = 0; $j < count($gallery[$i]['gallery']); $j+=2 ) {
                      $gallery_image_a =  !empty($gallery[$i]['gallery'][$j]['image']) ? $gallery[$i]['gallery'][$j]['image'] : null ;
                      $next_j = ($j+1) ? $j+1 : 4;
                      $gallery_image_b =  !empty($gallery[$i]['gallery'][$next_j]['image']) ? $gallery[$i]['gallery'][$next_j]['image'] : null ;
                      $image_a = wp_get_attachment_image_url( $gallery_image_a, 'full' );
                      $image_b = wp_get_attachment_image_url( $gallery_image_b, 'full' );
                      $preview_a = str_replace('.jpg', '_preview.jpg',( $image_a ) );
                      $preview_b = str_replace('.jpg', '_preview.jpg',( $image_b ) );
                  $att = ($j < 4) ? 'src' : 'data-lazy';
                  ?>
                    <div>
                        <a href="<?= $image_a ?>" rel="<?= $gallery_title ?>" data-fancybox="<?= 'group_' . $i ?>"
                            data-caption="<?= $gallery_title ?>" class="gallery_item">
                            <img class="" <?= $att ?>="<?= $preview_a ?>" alt="...">
                        </a>
                        <a href="<?= $image_b ?>" rel="<?= $gallery_title ?>" data-fancybox="<?= 'group_' . $i ?>"
                            data-caption="<?= $gallery_title ?>" class="gallery_item">
                            <img class="" <?= $att ?>="<?= $preview_b ?>" alt="...">
                        </a>
                    </div>
                    <?php
                  }
                  ?>
                </div>
            </div>
            <?php
                  if ( isset($gallery[$i]['videos']) ) {
                ?>
            <div class="col-md-6 d-flex video_col">

                <div class="card card-profile card-plain">
                    <div class="card-img-top">
                        <iframe width="100%" height="400px"
                            src="https://www.youtube.com/embed/<?= $gallery[$i]['videos'][0]['video'] ?>/"
                            frameborder="0"
                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
                </div>

            </div>
            <?php
                  }
                ?>
        </div>
        <?php
              }
            }
          ?>
    </div>
</div>
<!-- end видосы screen -->


<!-- start отзывы screen -->
<div class="container" style="min-height:350px;">
    <style type="text/css">
    .video {
        min-width: 500px;
        display: block;
    }

    @media(max-width:768px) {
        .video {
            min-width: 300px;
        }
    }

    .gallery_wrap_rev .slick-prev::before,
    .gallery_wrap_rev .slick-next::before {
        color: #000;
    }

    .video {
        position: relative;
        width: 100%;
        height: 0;
        padding-bottom: 56.25%;
        background-color: #000000;
    }

    .video__link {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }

    .video__media {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        border: none;
    }

    .video__button {
        position: absolute;
        top: 50%;
        left: 50%;
        z-index: 1;
        display: none;
        padding: 0;
        width: 68px;
        height: 48px;
        border: none;
        background-color: transparent;
        transform: translate(-50%, -50%);
        cursor: pointer;
    }

    .video__button-shape {
        fill: #212121;
        fill-opacity: 0.8;
    }

    .video__button-icon {
        fill: #ffffff;
    }

    .video__button:focus {
        outline: none;
    }

    .video:hover .video__button-shape,
    .video__button:focus .video__button-shape {
        fill: #ff0000;
        fill-opacity: 1;
    }

    /* Enabled */

    .video--enabled {
        cursor: pointer;
    }

    .video--enabled .video__button {
        display: block;
    }

    .gallery_wrap_rev .card.card-plain img {
        border-radius: 0 !important;
    }

    .gallery_wrap_rev .card {
        margin-bottom: 0 !important;
    }

    @media(max-width: 568px) {

        .gallery_wrap_rev .slick-prev,
        .gallery_wrap_rev .slick-next {
            top: calc(50% + 10px) !important;
        }
    }
    </style>

    <h2 class="title text-center mb-1">Они уже сделали это</h2>
    <!-- <div class="gallery_wrap_rev" style="max-width: 768px;"> -->
    <div class="gallery_wrap_rev">
        <?php for ($i = 0; $i < count($reviews); $i++ ) { 
  $review_video = !empty($reviews[$i]['review_video']) ? $reviews[$i]['review_video'] : null ;
  $review_name = !empty($reviews[$i]['review_name']) ? $reviews[$i]['review_name'] : null ;
  $review_instik = !empty($reviews[$i]['review_instik']) ? $reviews[$i]['review_instik'] : null ;
?>
        <div class="card card-plain">
            <div class="card-body text-center mx-auto">
                <div class="clearfix"></div>
                <?php if($review_video){ ?>
                <div class="video">

                    <a class="video__link" href="https://youtu.be/<?= $review_video ?>">
                        <picture>
                            <source srcset="https://i.ytimg.com/vi_webp/<?= $review_video ?>/maxresdefault.webp"
                                type="image/webp">
                            <img class="video__media"
                                src="https://i.ytimg.com/vi/<?= $review_video ?>/maxresdefault.jpg">
                        </picture>
                    </a>
                    <button class="video__button" type="button" aria-label="Запустить видео">
                        <svg width="68" height="48" viewBox="0 0 68 48">
                            <path class="video__button-shape"
                                d="M66.52,7.74c-0.78-2.93-2.49-5.41-5.42-6.19C55.79,.13,34,0,34,0S12.21,.13,6.9,1.55 C3.97,2.33,2.27,4.81,1.48,7.74C0.06,13.05,0,24,0,24s0.06,10.95,1.48,16.26c0.78,2.93,2.49,5.41,5.42,6.19 C12.21,47.87,34,48,34,48s21.79-0.13,27.1-1.55c2.93-0.78,4.64-3.26,5.42-6.19C67.94,34.95,68,24,68,24S67.94,13.05,66.52,7.74z">
                            </path>
                            <path class="video__button-icon" d="M 45,24 27,14 27,34"></path>
                        </svg>
                    </button>
                </div>
                <div class="review_insta">
                    <a href="<?= $review_instik ?>"><i class="fa fa-instagram" aria-hidden="true"></i>
                        <?= $review_name ?></a>
                </div>
                <?php } ?>
            </div>
        </div>
        <?php } ?>
    </div>
</div>
<!-- end отзывы screen -->

<div class="row __divider __divider_tobage"></div>

<!-- start вопрос-ответ  screen -->
<div id="faq" class="py-5 d-flex minh-100vh" style="background-color: lightgoldenrodyellow;">
    <div class="container d-flex" style="margin:auto">
        <div class="row">
            <div class="col-md-12 ml-auto mr-auto text-center">
                <h2 class="title">Частые вопросы</h2>
            </div>
            <div class="accordion col-md-8 mx-auto" id="FAQ_accardion">
                <?php
      for ($i = 0; $i < count($faq); $i++){
          $faq_title = !empty($faq[$i]['faq_title']) ? $faq[$i]['faq_title'] : null ;
          $faq_text = !empty($faq[$i]['faq_text']) ? $faq[$i]['faq_text'] : null ;
      ?>
                <div class="card card-plain faq_card">
                    <div class="card-header" id="<?= 'heading_' . $i ?>" data-background="color" data-color="brown">
                        <button class="btn btn-link" type="button" data-toggle="collapse"
                            data-target="<?= '#collapce_' . $i ?>" aria-expanded="true"
                            aria-controls="<?= 'collapce_' . $i ?>">
                            <h5 class="my-0"><?= $faq_title; ?></h5>
                        </button>
                    </div>
                    <div class="card-header collapse mt-3" id="<?= 'collapce_' . $i ?>"
                        aria-labelledby="<?= 'heading_' . $i ?>" data-parent="#FAQ_accardion">
                        <p><?= $faq_text; ?></p>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
<!-- end вопрос-ответ screen -->

<!-- start footer screen -->
<div id="footer"
    style="background: url(/wp-content/uploads/2019/10/bot_back.jpg) no-repeat;background-size:cover; padding: 100px 0 300px;">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card mx-auto">
                    <?= do_shortcode('[contact-form-7 id="286"]'); ?>
                </div>
            </div>
        </div>
    </div>
</div>

<footer class="footer footer-black  footer-white">
    <div class="container">
        <div class="row">
            <nav class="footer-nav col-md-12">
                <ul class="navbar-nav w-100 mx-auto">
                    <li class="nav-item">
                        <a class="navbar-brand left" href="/" rel="tooltip" data-placement="bottom">
                            <img src="/wp-content/themes/advantures/img/KeepTravel_White.png" style="height: 30px">
                        </a>
                        <p class="copyright left">Ул. Нижняя<br>Сыромятническая,<br>д. 10, стр. 9</p>
                        <p class="copyright left"><a href="tel:84993808699">+7-499-380-86-99</a></p>
                    </li>
                    <li class="nav-item">
                        <a href="https://www.facebook.com/keeptravelaroundtheworld/" target="_blank"
                            class="btn btn-round btn-just-icon">
                            <i class="fa fa-facebook" aria-hidden="true"></i>
                        </a>
                        <a href="https://www.instagram.com/keeptravel_agency/" target="_blank"
                            class="btn btn-round btn-just-icon">
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
                        <a href="#group">Путешествия</a>
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
    </div>
</footer>
<!-- end footer screen -->

<!-- whatsapp form -->
<div id="wa_form" class="whatsapp_tracker"
    onclick="window.location.href = 'https://api.whatsapp.com/send?phone=79854287400';">
    <div class="_header">
        <img src="/wp-content/uploads/2019/11/whatsapp_icon.png">
        <span> Напишите нам сообщение:</span>
    </div>
    <div class="_body">
        <div>Здравствуйте. Меня зовут Владислав. Какой у вас вопрос?</div>
        <div>Введите сообщение:</div>
    </div>
</div>
<span class="cross" onclick="hideWaform()">x</span>

<style type="text/css">
@media(max-width:768px) {

    #wa_form,
    #wa_form+.cross {
        display: none !important;
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
    flex-direction: column;
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

#wa_form ._body div:last-child {
    margin-top: auto;
}

#wa_form ._body div:first-child {
    margin-top: 0;
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

<div class="modal modal-lg fade mx-auto" id="video-modal" tabindex="-1" role="dialog" aria-labelledby="video-modal"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="video-area">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal modal-lg fade mx-auto" id="round-modal" tabindex="-1" role="dialog" aria-labelledby="video-modal"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <?= do_shortcode('[contact-form-7 id="308" title="Форма кругосветки"]'); ?>
            </div>
        </div>
    </div>
</div>
<div class="modal modal-lg fade mx-auto" id="question-modal" tabindex="-1" role="dialog" aria-labelledby="video-modal"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div id="question_wrapper" class="pb-3">
                    <h3 class='white'>Вы нашли, что искали?</h3>
                    <button class="btn" onclick="form_answer(this)">Да</button>
                    <button class="btn" onclick="form_answer(this)">Не совсем</button>
                </div>
                <div style="display:none" id="question_form">
                    <?= do_shortcode('[contact-form-7 id="1142" title="Форма через 60 сек"]'); ?>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal modal-lg fade mx-auto" id="book_modal" tabindex="-1" data-name="" role="dialog"
    aria-labelledby="video-modal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div id="book_form">
                    <?= do_shortcode('[contact-form-7 id="1480"]'); ?>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="modal modal-lg fade mx-auto" id="quiz_modal" tabindex="-1" role="dialog" aria-labelledby="video-modal"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <h3 class="mb-0 mt-1">Получите скидку 5% ответив на 3 вопроса</h3>
                <button class="btn" onclick="quiz_first()">ОК</button>
            </div>
        </div>
    </div>
</div>


<div id="phone_btn_wrap">
    <a class="whatsapp_tracker" href="https://api.whatsapp.com/send?phone=79854287400">
        <img src="/wp-content/uploads/2019/11/whatsapp_icon.png" style="width: 50px;">
    </a>
</div>
<?php
endwhile;
wp_footer();
?>
<script>
function hideWaform() {
    $('#wa_form').removeClass('opened');
}

function modalRoundOpen() {
    var roundModal = $('#round-modal');
    roundModal.modal('show');
    $(function($) {
        $(document).mouseup(function(e) {
            if (!roundModal.is(e.target) && roundModal.has(e.target).length === 0) {
                roundModal.modal('hide');
                removeVideo();
            }
        });
    });
};

function whatsappOpen() {
    $('#wa_form').addClass('opened');
}

function modalQuestionOpen() {
    var questionModal = $('#question-modal');
    questionModal.modal('show');
    $('#book_modal').modal('hide');
    $(function($) {
        $(document).mouseup(function(e) {
            if (!questionModal.is(e.target) && questionModal.has(e.target).length === 0) {
                questionModal.modal('hide');
                removeVideo();
            }
        });
    });
};

function show_modal(e) {
    var questionModal = $('#book_modal');
    questionModal.modal('show');
    target = $(e).data('target') + '_form';

    var pagename = $('#pageurl');
    var name = $(e).data('name');
    pagename.attr('value', name);

    questionModal.find('div#' + target).show().siblings('div').hide();
}

function form_answer(e) {
    $(e).parent().fadeOut(300).delay(500).siblings('#question_form').delay(500).fadeIn(300);
}

$('#carouselExampleIndicators2').carousel({
    interval: false
});


//success sent
var sentOkMessage = [
    '<div class="container black-text">',
    '<div class="sent-ok-message col-md-10 mx-auto"><h5 class="description white bold">Спасибо, в ближайшее время наш менеджер свяжется с вами!</h5></div>',
    '</div>'
];
var sentOkMessage2 = [
    '<div class="container black-text">',
    '<div class="sent-ok-message col-md-10 mx-auto"><h5 class="description white bold">Благодарим за заявку. Мы оповестим вас о ближайшей кругосветке.</h5></div>',
    '</div>'
];
var sentOkMessage3 = [
    '<div class="container black-text" style="padding:150px 0">',
    '<div class="sent-ok-message col-md-10 mx-auto"><h5 class="description white bold">Спасибо, в ближайшее время наш менеджер свяжется с вами!</h5></div>',
    '</div>'
];
$(document).ready(function() {
    var wpcf7Elm_1 = document.querySelectorAll('.wpcf7:not(#wpcf7-f287-p2-o2)');
    // var wpcf7Elm_2 = document.querySelector('#wpcf7-f287-p2-o2');

    for (var i = 0; i < wpcf7Elm_1.length; i++) {
        wpcf7Elm_1[i].addEventListener('wpcf7mailsent', function(event) {
            var formWrap = this.parentNode;
            formWrap.innerHTML = sentOkMessage[1];
        }, false);
    }


    // wpcf7Elm_2.addEventListener( 'wpcf7mailsent', function( event ) {
    //     var formWrap = this.parentNode;
    //     formWrap.innerHTML = sentOkMessage3[0] + sentOkMessage3[1] + sentOkMessage3[2];
    // }, false );

    setTimeout(modalQuestionOpen, 180000);
    setTimeout(whatsappOpen, 30000);
});
// start youtube hack
function findVideos() {
    let videos = document.querySelectorAll('.video');

    for (let i = 0; i < videos.length; i++) {
        setupVideo(videos[i]);
    }
}

function setupVideo(video) {
    let link = video.querySelector('.video__link');
    let media = video.querySelector('.video__media');
    let button = video.querySelector('.video__button');
    let id = parseMediaURL(media);

    video.addEventListener('click', () => {
        let iframe = createIframe(id);

        link.remove();
        button.remove();
        video.appendChild(iframe);
    });

    link.removeAttribute('href');
    video.classList.add('video--enabled');
}

function parseMediaURL(media) {
    let regexp = /https:\/\/i\.ytimg\.com\/vi\/([a-zA-Z0-9_-]+)\/maxresdefault\.jpg/i;
    let url = media.src;
    let match = url.match(regexp);

    return match[1];
}

function createIframe(id) {
    let iframe = document.createElement('iframe');

    iframe.setAttribute('allowfullscreen', '');
    iframe.setAttribute('allow', 'autoplay');
    iframe.setAttribute('src', generateURL(id));
    iframe.classList.add('video__media');

    return iframe;
}

function generateURL(id) {
    let query = '?rel=0&showinfo=0&autoplay=1';

    return 'https://www.youtube.com/embed/' + id + query;
}

findVideos();
// end youtube hack

var $ = jQuery;

var $a = $('.month_list').find('.month_block');
var $b = $('.month_list').find('.card');

$a.each(function(index) {
    var _this = $(this);
    $b.each(function(_index) {
        if (_this.data('month') == $(this).data('month')) {
            _this.find('._month').append($(this));
        }
    })
})

var d1 = $("#datetimepicker-1 input.datetimepicker");
var d2 = $("#datetimepicker-2 input.datetimepicker");
d1.click(function() {
    console.log(d2);
});

$(function() {
    d1.datetimepicker({
        format: 'DD-MM-YYYY',
        icons: {
            date: "fa fa-calendar",
            previous: 'fa fa-chevron-left',
            next: 'fa fa-chevron-right',
        }
    });
    d2.datetimepicker({
        format: 'DD-MM-YYYY',
        icons: {
            date: "fa fa-calendar",
            previous: 'fa fa-chevron-left',
            next: 'fa fa-chevron-right',
        }
    });
});

$(function() {
    $("a[href^='#']").click(function() {
        var _href = $(this).attr("href");
        $("html, body").animate({
            scrollTop: $(_href).offset().top + "px"
        });
        return false;
    });
});


var rangeSlider = document.getElementById('slider-range');
noUiSlider.create(rangeSlider, {
    start: [10000],
    step: 500,
    range: {
        'min': [1500],
        'max': [29000]
    },
});
var rangeSliderValueElement = document.getElementById('start_value');
var maxValue = document.getElementById('end_value');
rangeSlider.noUiSlider.on('update', function(values, handle) {
    rangeSliderValueElement.value = 'от $ ' + parseInt(values[handle]);
    maxValue.value = 'до $ ' + (parseInt(values[handle]) + 1000);
});

$('.mask-phone').mask('+9 (999) 999-99-99');

function activePhone() {
    $('#mainPhone').addClass('active');
    setTimeout(function() {
        $('#mainPhone').removeClass('active');
    }, 2000);
};
</script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<style type="text/css">
.gallery_wrap_rev {
    padding: 0 !important;
    margin: 0 30px !important;
    max-width: none;
}

.card.card-plain .card-body {
    padding: 0 !important;
    margin: 0 !important;
}

.gallery_wrap_rev .slick-slide {
    max-height: none;
}
</style>
<script>
function hideNav() {
    $('.navbar-toggler').click();
}

$("a.gallery_item").fancybox();

$('.gallery_wrap').slick({
    centerMode: false,
    slidesToShow: 3,
    infinite: false,
    lazyLoad: 'progressive',
    variableWidth: true,
    responsive: [{
            breakpoint: 768,
            settings: {
                centerMode: false,
                slidesToShow: 2,
                lazyLoad: 'progressive',
                infinite: true,
                variableWidth: true,
            }
        },
        {
            breakpoint: 480,
            settings: {
                centerMode: false,
                slidesToShow: 1,
                lazyLoad: 'progressive',
                infinite: true,
                variableWidth: true,
            }
        }
    ]
});

if ($(window).width() < 980) {
    $('.instas_wrap').slick({
        centerMode: false,
        slidesToShow: 2,
        infinite: true,
        lazyLoad: 'progressive',
        dots: true,
        responsive: [{
            breakpoint: 768,
            settings: {
                centerMode: false,
                slidesToShow: 1,
                lazyLoad: 'progressive',
                infinite: true,
                dots: true,
            }
        }]
    });
}

$('.feel_slider').slick({
    infinite: false,
    slidesToShow: 1,
    slidesToScroll: 1,
    adaptiveHeight: true
});

$('.gallery_wrap_rev').slick({
    centerMode: false,
    slidesToShow: 2,
    variableWidth: true,
    infinite: true,
    lazyLoad: 'progressive',
    dots: true,
    responsive: [{
        breakpoint: 768,
        settings: {
            centerMode: false,
            slidesToShow: 1,
            lazyLoad: 'progressive',
            infinite: true,
            dots: true,
        }
    }]

});

let quiz_first_data;
let quiz_second_data;
let quiz_third_data;
let quiz_wrapper = $('#quiz_modal').find('.modal-body');

function quiz_first() {
    quiz_wrapper.fadeOut(300);
    setTimeout(function func() {
        quiz_wrapper.find('h3').text('Страна мечты для путешествия?');
        quiz_wrapper.find('h3').after('<input id="question_one" type="text"/>');
        quiz_wrapper.find('button').replaceWith('<button class="btn" onclick="quiz_second()">Дальше</button>');
    }, 300);
    quiz_wrapper.fadeIn(300);
}

function quiz_second() {
    quiz_first_data = quiz_wrapper.find('#question_one').val();
    console.log(quiz_first_data);
    quiz_wrapper.fadeOut(300);
    setTimeout(function func() {
        quiz_wrapper.find('h3').text('В каком месяце?');
        quiz_wrapper.find('input').replaceWith('<input id="question_two" type="text"/>');
        quiz_wrapper.find('button').replaceWith('<button class="btn" onclick="quiz_third()">Дальше</button>');
    }, 300);
    quiz_wrapper.fadeIn(300);
}

function quiz_third() {
    quiz_second_data = quiz_wrapper.find('#question_two').val();
    console.log(quiz_second_data);
    quiz_wrapper.fadeOut(300);
    setTimeout(function func() {
        quiz_wrapper.find('h3').text('Уложиться в какой бюджет?');
        quiz_wrapper.find('input').replaceWith('<input id="question_three" type="text"/>');
        quiz_wrapper.find('button').replaceWith('<button class="btn" onclick="quiz_last()">Дальше</button>');
    }, 300);
    quiz_wrapper.fadeIn(300);
}

function quiz_last() {
    quiz_third_data = quiz_wrapper.find('#question_three').val();
    console.log(quiz_third_data);
    quiz_wrapper.fadeOut(300);
    setTimeout(function func() {
        quiz_wrapper.find('h3').text('Благодарим за Ваши ответы');
        quiz_wrapper.find('h3').after(
            '<h4 class="mt-0">Укажите вашу почту и получите купон на скидку 5%.</h4>');
        quiz_wrapper.find('input').replaceWith(
            '<input id="quiz_email" placeholder="e-mail@ru.ru" type="email"/>');
        quiz_wrapper.find('button').replaceWith('<button class="btn" onclick="">Получить скидку</button>');
    }, 300);
    quiz_wrapper.fadeIn(300);
}

$(document).ready(function() {
    if (window.location.href.indexOf("quiz") > -1) {
        setTimeout(function func() {
            $('#quiz_modal').modal('show');
        }, 500);
    }
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
    id: 52611595,
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

</body>

</html>