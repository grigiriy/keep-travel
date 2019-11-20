<?php get_header(); 
$back_img = !empty(carbon_get_post_meta($post->ID, 'image', 'complex')) ? carbon_get_post_meta($post->ID, 'image', 'complex') : null ;
$about = !empty(carbon_get_post_meta($post->ID, 'about', 'complex')) ? carbon_get_post_meta($post->ID, 'about', 'complex') : null ;
$faq = !empty(carbon_get_post_meta($post->ID, 'faq', 'complex')) ? carbon_get_post_meta($post->ID, 'faq', 'complex') : null ;
$insta = !empty(carbon_get_post_meta($post->ID, 'insta', 'complex')) ? carbon_get_post_meta($post->ID, 'insta', 'complex') : null ;
$counters = !empty(carbon_get_post_meta($post->ID, 'counters', 'complex')) ? carbon_get_post_meta($post->ID, 'counters', 'complex') : null ;
$videos = !empty(carbon_get_post_meta($post->ID, 'videos', 'complex')) ? carbon_get_post_meta($post->ID, 'videos', 'complex') : null ;
$reviews = !empty(carbon_get_post_meta($post->ID, 'reviews', 'complex')) ? carbon_get_post_meta($post->ID, 'reviews', 'complex') : null ;
$gallery = !empty(carbon_get_post_meta($post->ID, 'gallery', 'complex')) ? carbon_get_post_meta($post->ID, 'gallery', 'complex') : null ;

while (have_posts()) : the_post();
?>
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick-theme.css"/>
 <div class="section-space"></div>
 <div class="header-2" id="top">
<div id="carouselExampleIndicators" class="page-header carousel slide" data-ride="carousel" >
  <div class="carousel-inner">
  <?php for ($i = 0; $i < count($back_img); $i++ ) { ?>
      <div class="carousel-item <?php if($i == 0){ echo 'active'; }; ?>" style="background-image:url(<?= wp_get_attachment_image_url( $back_img[$i]['back_image'], 'full' ) ?>);height:100vh;background-size:cover">
      </div>
<?php } ?>
  </div>
<style type="text/css">
  #mainPhone.active input{
    font-size: 1.5em;
    height: 70px;
  }
  #mainPhone.active input.wpcf7-tel{
    font-size: 1.7em;
  }
</style>

  <!-- start first screen container -->
    <div class="page-header" style="background: transparent; position:absolute;top:0">
      <div class="filter"></div>
      <div class="content-center"  id="phone">
        <div class="container" >
          <div class="row my-5">
            <div class="col-md-9 mx-auto text-center mb-5">
              <h1 class="title">Открой себя</h1>
              <h2>Новый формат групповых путешествий</h2>
              <h5>Познай себя и мир активно путешествуя и заряжаясь<br>новыми эмоциями в группе единомышленников!<br>Всю организацию мы берем на себя.</h5>
              <div class="row d-none">
                <div class="col-md-6">
                    <a href="#group" class="main-links">
                        <h3 class="description text-left">Групповые</h3>
                    </a>
                </div>
                <div class="col-md-6">
                    <a href="#order"  class="main-links">
                        <h3 class="description text-left">Индивидуальные</h3>
                    </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <ol class="carousel-indicators" style="z-index:9999999;position:absolute">
      <?php for ($i = 0; $i < count($back_img); $i++ ) { ?>
        <li data-target="#carouselExampleIndicators" data-slide-to="<?= $i; ?>" class="<?php if($i == 0){ echo 'active'; }; ?>"></li>
      <?php } ?>
    </ol>
  </div>
</div>
<!-- end first screen container -->

  <div class="section section-testimonials d-none">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-8 ml-auto mr-auto text-center">
          <h2 class="title">Составляющие наших туров</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md-1">
          <div class="testimonials-people">
            <div class="left-first-person" style="background-image:url(/wp-content/uploads/2019/11/circs_1.jpg)">
            </div>
            <div class="left-third-person" style="background-image:url(/wp-content/uploads/2019/11/circs_2.jpg)">
            </div>
            <div class="left-fourth-person" style="background-image:url(/wp-content/uploads/2019/11/circs_3.jpg)">
            </div>
            <div class="left-fifth-person" style="background-image:url(/wp-content/uploads/2019/11/circs_4.jpg)">
            </div>
          </div>
        </div>
        <div class="col-md-10">
          <div class="our_tours_nav row" role="listbox">

          <h3 class="card-title title" data-nav="programm">
            Программа
          </h3>
          <h3 class="card-title title" data-nav="people">
            Люди
          </h3>
          <h3 class="card-title title" data-nav="comfort">
            Комфорт
          </h3>
          <h3 class="card-title title" data-nav="memories">
            Воспоминания
          </h3>

          </div>
          <div class="row">
            <div class="card d-flex" id="t_programm">
              <img src="/wp-content/uploads/2019/11/circs_4.jpg">
              <p>Каждый наш маршрут уникален и составлен опытными Тревел Дизайнерами, живущими в данной стране Путешествия. Во всех наших маршрутах мы предлагаем разную вариацию каждого дня на любой вкус, чтобы Ваше время Путешествия стало для Вас незабываемым!</p>
            </div>
            <div class="card d-flex" id="t_people">
              <img src="/wp-content/uploads/2019/11/circs_4.jpg">
              <p>Наши участники - это энергичные и интересные люди со всех уголков Земли,  которых объединяет следующие цели: Путешествовать, узнавать Мир и развиваться.</p>
            </div>
            <div class="card d-flex" id="t_comfort">
              <img src="/wp-content/uploads/2019/11/circs_4.jpg">
              <p>Для нас комфорт и безопасность наших участников всегда на первом месте! Экономия на проживании и транспорте - это не про Нас!</p>
            </div>
            <div class="card d-flex" id="t_memories">
              <img src="/wp-content/uploads/2019/11/circs_4.jpg">
              <p>Мы стараемся сделать каждое наше Путешествие незабываемым, чтобы воспоминания о нем жили вечно!</p>
            </div>
          </div>

        </div>
        <div class="col-md-1">
          <div class="testimonials-people">
            <div class="right-sixth-person" style="background-image:url(/wp-content/uploads/2019/11/circs_5.jpg)">
            </div>
            <div class="right-second-person" style="background-image:url(/wp-content/uploads/2019/11/circs_6.jpg)">
            </div>
            <div class="right-third-person" style="background-image:url(/wp-content/uploads/2019/11/circs_7.jpg)">
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
    <div id="group" class="features-2 py-5" style="background-image: linear-gradient( 135deg, #FFF886 10%, #F072B6 100%);">
      <div class="container-fluid px-0">
        <div class="minh-100vh px-3">
        <div class="row">
          <div class="col-md-8 ml-auto mr-auto text-center">
            <p class="h1 title my-5">Наши ближайшие направления</p>
          </div>
        </div>
        <div class="row">
            <?php
            $_i = 0;
            $args = [ 
                'posts_per_page' => -1,
                'post_status' => 'publish',
                'post_type' => 'post',
            ];
            $posts = get_posts($args);
            foreach ($posts as $key => $post ):
             $back_img = !empty(carbon_get_post_meta( $post->ID, 'backgrounds_post', 'complex') ) ? carbon_get_post_meta( $post->ID, 'backgrounds_post', 'complex' ) : null ;
             $image = wp_get_attachment_image_url( $back_img[0]['image1'], 'full' );
             $icon = wp_get_attachment_image_url( $back_img[0]['image2'], 'full' );
             $mini_texts = !empty(carbon_get_post_meta($post->ID, 'mini_texts', 'complex')) ? carbon_get_post_meta($post->ID, 'mini_texts', 'complex') : null ;
             $table = !empty(carbon_get_post_meta($post->ID, 'table', 'complex')) ? carbon_get_post_meta($post->ID, 'table', 'complex') : null ;
             $_i++;
              ?>

        <?php
          if ($_i == 6) {
        ?>
          </div> <!-- row -->
        </div> <!-- minh-100vh -->
      </div> <!-- container -->
      <div class="container">
        <div class="minh-100vh">
          <div class="row">
            <div class="col-md-8 mx-auto text-center">
              <p class="h1 title mb-5">Путешествия в 2020 году</p>
            </div>
          </div>
          <div class="row mb-5">
        <?php
          }
          if ($_i < 6) {
            $col_class = 'col-flex-20';
          } else if ($_i >= 6) {
            $col_class = 'col-md-4';
          }
        ?>
          <div class="<?= $col_class ?> col-sm-12 d-flex">
            <div class="card _dark" data-background="image" style="background-image: url(<?= $image; ?>)">
            <a href="<?= the_permalink($post->ID); ?>" class="btn btn-link btn-neutral px-0 card-link-wrap">
              <div class="card-body d-flex" style="flex-direction: column;">
                <h6 class="card-category "><?= get_the_title($post->ID); ?></h6>
                <div class="card-icon" style="
                <?php
                  if ($post->post_name == 'australia' || $post->post_name == 'australia_road') {
                    echo 'width: 140px;padding-top: 25px;margin-bottom: -15px;';
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
                <div class="card-description strong white">
                    <p class="mb-3"><?= $table[0]['dates'] ?></p>
                    <p class="mb-3"><?= $mini_texts[0]['days'] ?> дней / <?= $mini_texts[0]['pricerange'] ?></p>
                    <p><?= $mini_texts[0]['minitext'] ?></p>
                </div>
                <div class="card-footer" style="margin-top: auto;">
                    <i class="fa fa-book" aria-hidden="true"></i> Подробнее
                </div>
              </div>
              </a>
            </div>
          </div>
         <?php endforeach; ?>
         </div>
        </div>
      </div>
    </div>
    <!-- end групповые screen -->



  <!-- start instagram screen -->
  <div id="insta" class="py-5">
    <div class="col-md-6 ml-auto mr-auto text-center">
      <h2 class="title">C нами уже путешествовали</h2>
    </div>
    <div class="container">
      <div class="instas_wrap">
      <?php for ($i = 0; $i < count($insta); $i++){
        $header = !empty($insta[$i]['header']) ? $insta[$i]['header'] : null ;
        $instik = !empty($insta[$i]['instik']) ? $insta[$i]['instik'] : null ;
      ?>
        <!-- <div class="col-lg-4 col-md-12 px-3 mb-5"> -->
        <div>
          <h5><?= $header ?></h5>
          <?= $instik ?>
        </div>
        <?php } ?>
      </div>
    </div>
  </div>
  <script async src="//www.instagram.com/embed.js"></script>
    <!-- end instagram screen -->

 <!-- start счетчики screen -->
 <div  id="counters" style="background-position-x: center; background-size: cover; background-image:url(/wp-content/uploads/2019/07/mount.jpg)">
  <div class="container py-5">
    <div class="row">
      <div class="col-md-4 info">
        <div class="description">
          <h1 style="color:#51cbce"><?= $counters[0]['people'] ?></h1>
          <h4 class="info-title white">Человек зарядили эмоциями</h4>
          <p class="white">Из них с нами было <?= $counters[0]['male'] ?> мужчин и <?= $counters[0]['female'] ?> женщины</p>
        </div>
      </div>
      <div class="col-md-4 info">
        <div class="description">
          <h1 style="color:#51cbce"><?= $counters[0]['years'] ?></h1>
          <h4 class="info-title white">Средний возраст</h4>
          <p class="white">С нами путешествовали в возрасте от 18 до 47 лет</p>
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
  <div class="container">
    <div class="row">
      <div class="col-md-8 ml-auto mr-auto">
        <h2 class="title">Наши преимущества</h2>
        <br />
        <?php
        for ($i = 0; $i < count($about); $i++ ) {
            $about_title = !empty($about[$i]['about_title']) ? $about[$i]['about_title'] : null ;
            $about_text = !empty($about[$i]['about_text']) ? $about[$i]['about_text'] : null ;
            $about_photo = !empty($about[$i]['about_photo']) ? $about[$i]['about_photo'] : null ;
            $image = wp_get_attachment_image_url( $about_photo, 'full' );
            $text_part = '<div class="col-md-8 order-1 order-md-1">
             <div class="card-body">
                  <h3 class="card-title">' .
                     $about_title .
                 ' </h3>
                <p class="card-description strong black">' .
                     $about_text .
                '</p>
              </div>
            </div>';
            $photo_part =  '<div class="col-md-4 order-2 order-md-1">
              <div class="">
                  <img class="img" src="' . $image . '" />
              </div>
            </div>';
            echo ' <div class="card card-plain card-blog">
                          <div class="row">';
            if ($i%2 == 0) {
              echo $photo_part . $text_part;
            } else {
              echo $text_part . $photo_part;
            };
            echo ' </div>
             </div>';
         } ?>
        <div class="card card-plain card-blog">
          <div class="row">
            <div class="col-md-12">
                <div class="card-description strong black mb-5">
                    <?= the_content(); ?>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end ценности screen -->

<!-- start гиды screen -->
  <div id="guides" class="py-5" style="background-image: linear-gradient(to bottom right, #81fbb8 10%, #ceeceb);">
    <div class="container mb-5">
      <div class="col-md-8 mx-auto text-center">
        <div class="space-top"></div>
        <h2 class="title">Основатели проекта</h2>
      </div>
      <div class="row">
        <div class="col-md-6 text-center guid">
          <h4 class="mt-0 mb-2" style="height: 55px;">Буравцов Иван,<br>основатель “KeepTravel”</h4>
          <img src="https://keep-travel.ru/wp-content/uploads/2019/07/iv.jpg" class="img-circle img-no-padding img-responsive rounded" alt="Rounded Image">
          <p style="padding-top: 20px; font-size: 18px;">С раннего детства работал в туристической компании своего отца и помогал в проведение масштабных путешествий. В 18 лет провел первое самостоятельное путешествие для 13 человек. </p>
          <ul style="font-size: 18px;  text-align: left">
            <li>Посетил 38 стран</li>
            <li>Сертифицированный выпускник - Redcross "Оказание первой медицинской помощи"</li>
            <li>Опытный автомобилист (стаж 9 лет)</li>
            <li>Поднимался на Эльбрус</li>
            <li>Учился выживанию в Тайге</li>
            <li>Ночевал на вулкане</li>
          </ul>
          <p style="font-size: 18px;"><strong>"Основным приоритетом для меня является безопасность и комфорт каждого участника"</strong></p>
          <p style="font-size: 18px;">Сопровождающий и ответственный за маршруты:</p>
          <ul style="font-size: 18px; text-align: left">
            <li>Евротур</li>
            <li>Калифорния</li>
            <li>Route 66</li>
            <li>Норвегия</li>
            <li>Марокко</li>
            <li>Исландия</li>
            <li>Большое путешествие по Африке</li>
            <li>Перу</li>
          </ul>
        </div>
        <div class="col-md-6 text-center guid">
          <h4 class="mt-0 mb-2" style="height: 55px;">Цымбалюк Владислав,<br>основатель “KeepTravel”</h4>
            <img src="https://keep-travel.ru/wp-content/uploads/2019/07/vl.jpg" class="img-circle img-no-padding img-responsive rounded" alt="Rounded Image">
          <p style="padding-top: 20px; font-size: 18px;">Тревел-дизайнер. Более 4ех лет создаёт для вас маршруты Мечты. Знает толк в настоящем Роуд Трипе и экстремальных Путешествиях. Считает Австралию идеальной страной для Путешествия и Жизни. Главная цель в Жизни - объехать весь Мир и показать его людям.
Посетил 44 страны, 26 из которых объехал на машине.</p>
          <p style="font-size: 18px;">Сопровождающий и ответственный за маршруты:</p>
          <ul style="font-size: 18px; text-align: left">
            <li>Австралия</li>
            <li>Скандинавия</li>
            <li>Россия</li>
            <li>Евротур</li>
            <li>Африка</li>
            <li>Бразилия</li>
            <li>Перу, Боливия</li>
            <li>Азия</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
<!-- end гиды screen -->

  <!-- start видосы screen -->
  <div id="gallery" class="projects-3 section-image" style="background-image: linear-gradient( 135deg, #92FFC0 10%, #002661 100%);">
    <div class="container">
      <div class="row">
        <div class="col-md-8 mx-auto text-center">
          <div class="space-top"></div>
          <h2 class="title">Воспоминания</h2>
        </div>
      </div>
      <div class="mb-5  mx-auto">
      <?php
          for ($i = 0; $i < count($gallery); $i++ ) {
              $gallery_title = !empty($gallery[$i]['place']) ? $gallery[$i]['place'] : null ;
              if ( $gallery_title ) { ?>
                <div class="gallery_wrap">
                  <h3 style="color:white; text-align: center"><?= $gallery_title ?></h3>
                </div>
                <div class="gallery_wrap">
                <?php
                for ($j = 0; $j < count($gallery[$i]['gallery']); $j++ ) {
                    $gallery_image =  !empty($gallery[$i]['gallery'][$j]['image']) ? $gallery[$i]['gallery'][$j]['image'] : null ;
                    $image = wp_get_attachment_image_url( $gallery_image, 'full' );
                    $preview = str_replace('.jpg', '_preview.jpg',( $image ) );
                $att = ($j < 4) ? 'src' : 'data-lazy';
                ?>
                <div>
                  <a href="<?= $image ?>" rel="<?= $gallery_title ?>" data-fancybox="<?= 'group_' . $i ?>" data-caption="<?= $gallery_title ?>" class="gallery_item">
                    <img class="img-fluid" <?= $att ?>="<?= $preview ?>" alt="...">
                  </a>
                </div>
                <?php } ?>
              </div>
              <?php
              }
            } ?>
      </div>

      <div class="row">
      <?php
          for ($i = 0; $i < count($videos); $i++ ) {
              $video_title = !empty($videos[$i]['video_title']) ? $videos[$i]['video_title'] : null ;
              $video_code = !empty($videos[$i]['video_code']) ? $videos[$i]['video_code'] : null ;
      ?>

        <div class="col-md-6 mx-auto">
          <div class="card card-profile card-plain">
            <div class="card-img-top">
                <iframe width="100%" height="305px" src="https://www.youtube.com/embed/<?= $video_code ?>/" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="card-body">
              <h4 class="card-title"><?= $video_title; ?></h4>
            </div>
          </div>
        </div>
        <?php } ?>
      </div>
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
  @media(max-width:768px){
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
    border-radius: 0!important;
  }
  .gallery_wrap_rev .card {
    margin-bottom: 0!important;
  }
  @media(max-width: 568px){
    .gallery_wrap_rev .slick-prev,
    .gallery_wrap_rev .slick-next {
      top: calc(50% + 10px)!important;
    }
  }
</style>

 <h2 class="title text-center mb-1">Они уже сделали это</h2>
<!-- <div class="gallery_wrap_rev" style="max-width: 768px;"> -->
  <div class="gallery_wrap_rev">
  <?php for ($i = 0; $i < count($reviews); $i++ ) { 
  $review_video = !empty($reviews[$i]['review_video']) ? $reviews[$i]['review_video'] : null ;
?>
  <div class="card card-plain">
    <div class="card-body text-center mx-auto col-md-8">
      <div class="clearfix"></div>
        <?php if($review_video){ ?>
              <div class="video">

                <a class="video__link" href="https://youtu.be/<?= $review_video ?>">
                  <picture>
                    <source srcset="https://i.ytimg.com/vi_webp/<?= $review_video ?>/maxresdefault.webp" type="image/webp">
                    <img class="video__media" src="https://i.ytimg.com/vi/<?= $review_video ?>/maxresdefault.jpg">
                  </picture>
                </a>
                <button class="video__button" type="button" aria-label="Запустить видео">
                  <svg width="68" height="48" viewBox="0 0 68 48"><path class="video__button-shape" d="M66.52,7.74c-0.78-2.93-2.49-5.41-5.42-6.19C55.79,.13,34,0,34,0S12.21,.13,6.9,1.55 C3.97,2.33,2.27,4.81,1.48,7.74C0.06,13.05,0,24,0,24s0.06,10.95,1.48,16.26c0.78,2.93,2.49,5.41,5.42,6.19 C12.21,47.87,34,48,34,48s21.79-0.13,27.1-1.55c2.93-0.78,4.64-3.26,5.42-6.19C67.94,34.95,68,24,68,24S67.94,13.05,66.52,7.74z"></path><path class="video__button-icon" d="M 45,24 27,14 27,34"></path></svg>
                </button>


            </div>
        <?php } ?>
    </div>
 </div>
  <?php } ?>
</div>
</div>
    <!-- end отзывы screen -->

<!-- start вопрос-ответ  screen -->
<div id="faq" class="my-5">
  <div class="container">
    <div class="row">
      <div class="col-md-6 ml-auto mr-auto text-center">
        <h2 class="title">Частые вопросы</h2>
      </div>
    </div>

<div class="accordion" id="FAQ_accardion">
<?php
for ($i = 0; $i < count($faq); $i++){
    $faq_title = !empty($faq[$i]['faq_title']) ? $faq[$i]['faq_title'] : null ;
    $faq_text = !empty($faq[$i]['faq_text']) ? $faq[$i]['faq_text'] : null ;
?>
  <div class="card card-plain faq_card">
    <div class="card-header" id="<?= 'heading_' . $i ?>" data-background="color" data-color="brown">
      <h5 class="my-0">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="<?= '#collapce_' . $i ?>" aria-expanded="true" aria-controls="<?= 'collapce_' . $i ?>">
              <?= $faq_title; ?>
            </button>
      </h5>
    </div>
    <div id="<?= 'collapce_' . $i ?>" class="collapse" aria-labelledby="<?= 'heading_' . $i ?>" data-parent="#FAQ_accardion">
      <div class="card-body">
        <?= $faq_text; ?>
      </div>
    </div>
  </div>
<?php } ?>
</div>

        </div>
      </div>
    <!-- end вопрос-ответ screen -->

    <!-- start footer screen -->
    <div id="footer" style="background: url(/wp-content/uploads/2019/10/bot_back.jpg) no-repeat;background-size:cover; padding: 100px 0 300px;">
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
                </li>
                <li class="nav-item">
                    <a href="https://www.facebook.com/keeptravelaroundtheworld/" target="_blank" class="btn btn-round btn-just-icon">
                        <i class="fa fa-facebook" aria-hidden="true"></i>
                    </a>
                    <a href="https://www.instagram.com/keeptravel_agency/" target="_blank" class="btn btn-round btn-just-icon">
                        <i class="fa fa-instagram" aria-hidden="true"></i>
                    </a>
                </li>
                <li class="nav-item ml-md-auto pt-3">
                    <a href="/">Главная</a>
                </li>
                <li class="nav-item pt-3">
                    <a href="#group">Путешествия</a>
                </li>
                <li class="nav-item mx-auto pt-3 ">
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
      </div>
    </footer>
<!-- end footer screen -->

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

<style type="text/css">
  @media(max-width:768px) {
    #wa_form {
      display:none;
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
</style>
<!-- end whatsapp form -->

<div class="modal modal-lg fade mx-auto" id="video-modal" tabindex="-1" role="dialog" aria-labelledby="video-modal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
          <div class="video-area">
          </div>
      </div>
    </div>
  </div>
</div>
<div class="modal modal-lg fade mx-auto" id="round-modal" tabindex="-1" role="dialog" aria-labelledby="video-modal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <?= do_shortcode('[contact-form-7 id="308" title="Форма кругосветки"]'); ?>
      </div>
    </div>
  </div>
</div>
<div class="modal modal-lg fade mx-auto" id="question-modal" tabindex="-1" role="dialog" aria-labelledby="video-modal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <div id="question_wrapper" class="pb-3">
          <h3>Вы нашли, что искали?</h3>
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
<div id="phone_btn_wrap">
<a href="https://api.whatsapp.com/send?phone=79169277027">
<svg xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:cc="http://creativecommons.org/ns#" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd" xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" viewBox="0 -256 1792 1792" id="svg3013" version="1.1" inkscape:version="0.48.3.1 r9886" width="100%" height="100%" sodipodi:docname="phone_font_awesome.svg">
  <metadata id="metadata3023">
    <rdf:RDF>
      <cc:Work rdf:about="">
        <dc:format>image/svg+xml</dc:format>
        <dc:type rdf:resource="http://purl.org/dc/dcmitype/StillImage"/>
      </cc:Work>
    </rdf:RDF>
  </metadata>
  <defs id="defs3021"/>
  <sodipodi:namedview pagecolor="#ffffff" bordercolor="#666666" borderopacity="1" objecttolerance="10" gridtolerance="10" guidetolerance="10" inkscape:pageopacity="0" inkscape:pageshadow="2" inkscape:window-width="640" inkscape:window-height="480" id="namedview3019" showgrid="false" inkscape:zoom="0.13169643" inkscape:cx="896" inkscape:cy="896" inkscape:window-x="0" inkscape:window-y="25" inkscape:window-maximized="0" inkscape:current-layer="svg3013"/>
  <g transform="matrix(1,0,0,-1,159.45763,1293.0169)" id="g3015">
    <path d="m 1408,296 q 0,-27 -10,-70.5 Q 1388,182 1377,157 1356,107 1255,51 1161,0 1069,0 1042,0 1016.5,3.5 991,7 959,16 927,25 911.5,30.5 896,36 856,51 816,66 807,69 709,104 632,152 504,231 367.5,367.5 231,504 152,632 104,709 69,807 66,816 51,856 36,896 30.5,911.5 25,927 16,959 7,991 3.5,1016.5 0,1042 0,1069 q 0,92 51,186 56,101 106,122 25,11 68.5,21 43.5,10 70.5,10 14,0 21,-3 18,-6 53,-76 11,-19 30,-54 19,-35 35,-63.5 16,-28.5 31,-53.5 3,-4 17.5,-25 14.5,-21 21.5,-35.5 7,-14.5 7,-28.5 0,-20 -28.5,-50 -28.5,-30 -62,-55 -33.5,-25 -62,-53 -28.5,-28 -28.5,-46 0,-9 5,-22.5 5,-13.5 8.5,-20.5 3.5,-7 14,-24 10.5,-17 11.5,-19 76,-137 174,-235 98,-98 235,-174 2,-1 19,-11.5 17,-10.5 24,-14 7,-3.5 20.5,-8.5 13.5,-5 22.5,-5 18,0 46,28.5 28,28.5 53,62 25,33.5 55,62 30,28.5 50,28.5 14,0 28.5,-7 14.5,-7 35.5,-21.5 21,-14.5 25,-17.5 25,-15 53.5,-31 28.5,-16 63.5,-35 35,-19 54,-30 70,-35 76,-53 3,-7 3,-21 z" id="path3017" inkscape:connector-curvature="0" style="fill:currentColor"/>
  </g>
</svg>
</a>
</div>
<?php
endwhile;
wp_footer();
?>
<script>
function modalRoundOpen(){
  var roundModal = $('#round-modal');
  roundModal.modal('show');
    $(function($){
      $(document).mouseup(function (e){
        if (!roundModal.is(e.target) && roundModal.has(e.target).length === 0) {
          roundModal.modal('hide');
          removeVideo();
        }
      });
  });
};
function whatsappOpen(){
  $('#wa_form').addClass('opened');
}
function modalQuestionOpen(){
  var questionModal = $('#question-modal');
  questionModal.modal('show');
    $(function($){
      $(document).mouseup(function (e){
        if (!questionModal.is(e.target) && questionModal.has(e.target).length === 0) {
          questionModal.modal('hide');
          removeVideo();
        }
      });
  });
};
function form_answer(e){
  $(e).parent().fadeOut(300).delay(500).siblings('#question_form').delay(500).fadeIn(300);
}

$('#carouselExampleIndicators2').carousel({
    interval: false
}); 


//success sent
var sentOkMessage = [
    '<div class="container black-text">',
    '<div class="sent-ok-message col-md-10 mx-auto"><h5 class="description">Спасибо, в ближайшее время наш менеджер свяжется с вами!</h5></div>',
    '</div>'
];
var sentOkMessage2 = [
    '<div class="container black-text">',
    '<div class="sent-ok-message col-md-10 mx-auto"><h5 class="description">Благодарим за заявку. Мы оповестим вас о ближайшей кругосветке.</h5></div>',
    '</div>'
];
var sentOkMessage3 = [
    '<div class="container black-text" style="padding:150px 0">',
    '<div class="sent-ok-message col-md-10 mx-auto"><h5 class="description">Спасибо, в ближайшее время наш менеджер свяжется с вами!</h5></div>',
    '</div>'
];
$( document ).ready(function() {
var wpcf7Elm_1 = document.querySelectorAll( '.wpcf7:not(#wpcf7-f287-p2-o2)' );
// var wpcf7Elm_2 = document.querySelector('#wpcf7-f287-p2-o2');

for (var i = 0; i < wpcf7Elm_1.length; i++){
  wpcf7Elm_1[i].addEventListener( 'wpcf7mailsent', function( event ) {
    var formWrap = this.parentNode;
    formWrap.innerHTML = sentOkMessage[1];
  }, false );
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
var d1 = $("#datetimepicker-1 input.datetimepicker");
var d2 = $("#datetimepicker-2 input.datetimepicker");
d1.click(function(){
  console.log(d2);
})
$(function(){
    // if (d1.length !== 0) {
        d1.datetimepicker({
            format: 'DD-MM-YYYY',
            icons: {
                date: "fa fa-calendar",
                previous: 'fa fa-chevron-left',
                next: 'fa fa-chevron-right',
            }
        });
    // };
    // if (d2.length !== 0) {
        d2.datetimepicker({
            format: 'DD-MM-YYYY',
            icons: {
                date: "fa fa-calendar",
                previous: 'fa fa-chevron-left',
                next: 'fa fa-chevron-right',
            }
        });
    // }
});
$(function(){
    $("a[href^='#']").click(function(){
        var _href = $(this).attr("href");
        $("html, body").animate({scrollTop: $(_href).offset().top+"px"});
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
      var maxValue  = document.getElementById('end_value');
      rangeSlider.noUiSlider.on('update', function (values, handle) {
      rangeSliderValueElement.value = 'от $ ' + parseInt(values[handle]);
      maxValue.value = 'до $ ' + (parseInt(values[handle]) + 1000);
  });

  $('.mask-phone').mask('+9 (999) 999-99-99');

  function activePhone(){
      $('#mainPhone').addClass('active');
      setTimeout(function() {
        $('#mainPhone').removeClass('active');
      }, 2000);
  };
</script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<style type="text/css">
  .gallery_wrap_rev {
    padding: 0!important;
    margin: 0 30px!important;
    max-width: none;
  }
  .card.card-plain .card-body {
    padding: 0!important;
    margin: 0!important;
  }
  .gallery_wrap_rev .slick-slide {
    max-height: none;
  }
</style>
<script>
$("a.gallery_item").fancybox();

$('.gallery_wrap').slick( {
  centerMode: false,
  slidesToShow: 3,
  infinite: true,
  lazyLoad: 'ondemand',
  variableWidth: true,
  responsive: [
    {
      breakpoint: 768,
      settings: {
        centerMode: false,
        slidesToShow: 2,
        lazyLoad: 'ondemand',
        infinite: true,
      }
    },
    {
      breakpoint: 480,
      settings: {
        centerMode: false,
        slidesToShow: 1,
        lazyLoad: 'ondemand',
        infinite: true,
        variableWidth: false,
      }
    }
  ]
});

$('.instas_wrap').slick( {
  centerMode: false,
  slidesToShow: 3,
  infinite: true,
  lazyLoad: 'ondemand',
  dots: true,
  responsive: [
    {
      breakpoint: 768,
      settings: {
        centerMode: false,
        slidesToShow: 1,
        lazyLoad: 'ondemand',
        infinite: true,
        dots: true,
      }
    }
  ]
});


$('.gallery_wrap_rev').slick( {
  centerMode: false,
  slidesToShow: 2,
  variableWidth: true,
  infinite: true,
  lazyLoad: 'ondemand',
  dots: true,
  responsive: [
    {
      breakpoint: 768,
      settings: {
        centerMode: false,
        slidesToShow: 1,
        lazyLoad: 'ondemand',
        infinite: true,
        dots: true,
      }
    }
  ]

});

</script>
<script type="text/javascript">
// $('.our_tours').slick({
//   slidesToShow: 1,
//   infinite: true,
//   slidesToScroll: 1,
//   arrows: false,
//   fade: true,
//   swipe: false,
//   asNavFor: '.our_tours_nav'
// });
// $('.our_tours_nav').slick({
//   slidesToShow: 4,
//   slidesToScroll: 1,
//   asNavFor: '.our_tours',
//   dots: false,
//   // fade: true,
//   centerMode: true,
//   focusOnSelect: true
// });
</script>
<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(52611595, "init", {
        id:52611595,
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/52611595" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-135472998-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-135472998-1');
</script>

</body>
</html>
