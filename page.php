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
<style>
  @charset 'UTF-8';
/* Slider */
.slick-loading .slick-list
{
    background: #fff url('./ajax-loader.gif') center center no-repeat;
}

/* Icons */
@font-face
{
    font-family: 'slick';
    font-weight: normal;
    font-style: normal;

    src: url('./fonts/slick.eot');
    src: url('./fonts/slick.eot?#iefix') format('embedded-opentype'), url('./fonts/slick.woff') format('woff'), url('./fonts/slick.ttf') format('truetype'), url('./fonts/slick.svg#slick') format('svg');
}
/* Arrows */
.slick-prev,
.slick-next
{
    font-size: 0;
    line-height: 0;

    position: absolute;
    top: 50%;

    display: block;

    width: 20px;
    height: 20px;
    padding: 0;
    -webkit-transform: translate(0, -50%);
    -ms-transform: translate(0, -50%);
    transform: translate(0, -50%);

    cursor: pointer;

    color: transparent;
    border: none;
    outline: none;
    background: transparent;
}
.slick-prev:hover,
.slick-prev:focus,
.slick-next:hover,
.slick-next:focus
{
    color: transparent;
    outline: none;
    background: transparent;
}
.slick-prev:hover:before,
.slick-prev:focus:before,
.slick-next:hover:before,
.slick-next:focus:before
{
    opacity: 1;
}
.slick-prev.slick-disabled:before,
.slick-next.slick-disabled:before
{
    opacity: .25;
}

.slick-prev:before,
.slick-next:before
{
    font-family: 'slick';
    font-size: 20px;
    line-height: 1;

    opacity: .75;
    color: white;

    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}

.slick-prev
{
    left: -25px;
}
[dir='rtl'] .slick-prev
{
    right: -25px;
    left: auto;
}
.slick-prev:before
{
    content: '←';
}
[dir='rtl'] .slick-prev:before
{
    content: '→';
}

.slick-next
{
    right: -25px;
}
[dir='rtl'] .slick-next
{
    right: auto;
    left: -25px;
}
.slick-next:before
{
    content: '→';
}
[dir='rtl'] .slick-next:before
{
    content: '←';
}

/* Dots */
.slick-dotted.slick-slider
{
    margin-bottom: 30px;
}

.slick-dots
{
    position: absolute;
    bottom: -25px;

    display: block;

    width: 100%;
    padding: 0;
    margin: 0;

    list-style: none;

    text-align: center;
}
.slick-dots li
{
    position: relative;

    display: inline-block;

    width: 20px;
    height: 20px;
    margin: 0 5px;
    padding: 0;

    cursor: pointer;
}
.slick-dots li button
{
    font-size: 0;
    line-height: 0;

    display: block;

    width: 20px;
    height: 20px;
    padding: 5px;

    cursor: pointer;

    color: transparent;
    border: 0;
    outline: none;
    background: transparent;
}
.slick-dots li button:hover,
.slick-dots li button:focus
{
    outline: none;
}
.slick-dots li button:hover:before,
.slick-dots li button:focus:before
{
    opacity: 1;
}
.slick-dots li button:before
{
    font-family: 'slick';
    font-size: 6px;
    line-height: 20px;

    position: absolute;
    top: 0;
    left: 0;

    width: 20px;
    height: 20px;

    content: '•';
    text-align: center;

    opacity: .25;
    color: black;

    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}
.slick-dots li.slick-active button:before
{
    opacity: .75;
    color: black;
}

</style>

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
            <div class="row  my-5">
              <div class="col-md-8 ml-auto mr-auto text-center mb-5">
                <h1 class="title my-0"><?= the_title() ?></h1>
                <h5>Незабываемые туры по всему миру для тех, кто открыт к приключениям</h5>
              </div>

              <div class="col-md-12 col-lg-10 ml-auto mr-auto">
                  <div class="row">
                    <div class="col-md-4">
                        <a href="#group" class="main-links">
                            <h3 class="description">Групповые</h3>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="#order"  class="main-links">
                            <h3 class="description">Индивидуальные</h3>
                        </a>
                    </div>
                    <div class="col-md-4">
                      <a href="#" onclick="modalRoundOpen()" class="main-links">
                        <span style="opacity:0.4">
                            <h3 class="description">Кругосветные</h3>
                            <h6 class="description" style="opacity:0.6">скоро...</h6>
                        </span>
                      </a>
                    </div>
                  </div>
              </div>
          </div>
          <div class="row  mt-5 mb-0">
              <div class="col-lg-7 col-md-10 mx-auto">
                    <?= do_shortcode( '[contact-form-7 id="38" title="Оставьте номер"]' ) ?>
                <h5 class="description">Введите свой номер телефона, и мы с вами свяжемся</h5>
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

    <!-- start second screen -->
    <div class="features-2" id="select">
      <div class="container">
        <div class="row">
          <div class="col-md-8 ml-auto mr-auto text-center">
            <h2 class="title">Выберите формат вашего путешествия</h2>
            <br/>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 d-flex">
            <div class="card" data-background="image" style="width:100%;background-image: url('/wp-content/uploads/2019/07/indi.jpg')">
              <a href="#order" class="btn btn-link btn-neutral">
              <div class="card-body">
                <h6 class="card-category">Индивидуальное</h6>
                <div class="card-icon">
                  <i class="fa fa-user"></i>
                </div>
                <div class="card-footer">
                    <i class="fa fa-book" aria-hidden="true"></i> Подробнее
                </div>
              </div>
            </a>
            </div>
          </div>
          <div class="col-md-4 d-flex">
            <div class="card" data-background="image" style="width:100%;background-image: url('/wp-content/uploads/2019/07/group.jpg')">
            <a href="#group" class="btn btn-link btn-neutral">
              <div class="card-body">
                <h6 class="card-category">Групповое</h6>
                <div class="card-icon">
                  <i class="fa fa-group"></i>
                </div>
                <div class="card-footer">
                    <i class="fa fa-book" aria-hidden="true"></i> Подробнее
                </div>
              </div>
            </a>
            </div>
          </div>
          <div class="col-md-4 d-flex">
            <div class="card card-plain" data-background="image" style="width:100%; border-radius: 12px; background-image: url('/wp-content/uploads/2019/02/4.jpg')">
              <a href="#phone" class="btn btn-link btn-neutral">
              <div class="card-body" style="opacity:0.4">
                <h6 class="card-category">Кругосветное</h6>
                <h6 class="description">скоро</h6>
                <div class="card-icon" style="margin-top: -24px;">
                  <i class="nc-icon nc-world-2"></i>
                </div>
                <div class="card-footer">
                    <i class="fa fa-book" aria-hidden="true"></i> Подробнее
                </div>
              </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end second screen -->

    <!-- start индивидуальные screen -->
    <div id="order" class="contactus-1 section-image" style="background-image: url('/wp-content/uploads/2019/02/5.jpg')">
      <div class="col-md-8 ml-auto mr-auto  pb-3">
        <div class="card card-contact no-transition mb-3">
            <?= do_shortcode( '[contact-form-7 id="287" title="Форма индивидуального путешествия"]' )  ?>
        </div>
      </div>
    </div>
    <!-- end индивидуальные screen -->

    <!-- start групповые screen -->
    <div id="group" class="features-2 pb-0">
      <div class="container">
        <div class="row">
          <div class="col-md-8 ml-auto mr-auto text-center">
            <h2 class="title">Групповые маршруты</h2>
            <h4 class="mb-3">Ближайшие путешествия</h3>
          </div>
        </div>
        <div class="row">
            <?php
            $args = [
                'posts_per_page' => -1,
                'post_status' => 'publish',
                'post_type' => 'post',
            ];
            $posts = get_posts($args);
            $_i = 0;
            foreach ($posts as $key => $post ):
                 $back_img = !empty(carbon_get_post_meta( $post->ID, 'backgrounds_post', 'complex') ) ? carbon_get_post_meta( $post->ID, 'backgrounds_post', 'complex' ) : null ;
                 $image = wp_get_attachment_image_url( $back_img[0]['image1'], 'full' );
                 $icon = wp_get_attachment_image_url( $back_img[0]['image2'], 'full' );
                 $mini_texts = !empty(carbon_get_post_meta($post->ID, 'mini_texts', 'complex')) ? carbon_get_post_meta($post->ID, 'mini_texts', 'complex') : null ;
                 $table = !empty(carbon_get_post_meta($post->ID, 'table', 'complex')) ? carbon_get_post_meta($post->ID, 'table', 'complex') : null ;
                 // $n = ($key  < 3 ) ? 4 : 3;
                 $n = 3;
                 $_i++;
                 if ($_i == 5){
                  ?>
                  <div class="col-md-12 mt-5 mb-3">
                    <h4 style="text-align:center">Другие путешествия</h4>
                  </div>
                  <?php
                 }
                 ?>
          <div class="col-md-6 col-lg-<?= $n; ?> d-flex">
            <div class="card _dark" data-background="image" style="background-image: url(<?= $image; ?>)">
            <a href="<?= the_permalink($post->ID); ?>" class="btn btn-link btn-neutral px-0 card-link-wrap">
              <div class="card-body d-flex" style="flex-direction: column;">
                <h6 class="card-category "><?= get_the_title($post->ID); ?></h6>
                <div class="card-icon" style="
                <?php
                if ($post->post_name == 'australia') {
                  echo 'width: 100px;padding-bottom: 0;padding-top: 35px;margin-bottom: -15px;';
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
                    <p class="mb-3"><?= $mini_texts[0]['days'] ?> дней / от <?= $mini_texts[0]['pricerange'] ?></p>
                    <p class="mb-3"><?= $mini_texts[0]['from_to'] ?></p>
                    <p><?= $mini_texts[0]['minitext'] ?></p>
                </div>
                <div class="card-footer" style="margin-top: auto;">
                  <!--<a href="<?= the_permalink($post->ID); ?>" class="btn btn-link btn-neutral">-->
                    <i class="fa fa-book" aria-hidden="true"></i> Подробнее
                  <!--</a>-->
                </div>
              </div>
              </a>
            </div>
          </div>
         <?php endforeach; ?>
        </div>
      </div>
    </div>
    <!-- end групповые screen -->

  <!-- start instagram screen -->
  <div id="insta" class="mt-5">
    <div class="col-md-6 ml-auto mr-auto text-center">
      <h2 class="title">C нами уже путешествовали</h2>
    </div>
    <div class="container">
      <div class="row">
      <?php for ($i = 0; $i < count($insta); $i++){
        $header = !empty($insta[$i]['header']) ? $insta[$i]['header'] : null ;
        $instik = !empty($insta[$i]['instik']) ? $insta[$i]['instik'] : null ;
      ?>
        <div class="col-lg-4 col-md-12 px-3">
          <h6><?= $header ?></h6>
          <?= $instik ?>
        </div>
        <?php } ?>
      </div>
    </div>
  </div>
  <script async src="//www.instagram.com/embed.js"></script>
    <!-- end instagram screen -->

    <!-- start вопрос-ответ  screen -->
    <div id="faq" class="mt-5">
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
  <div class="card card-plain">
    <div class="card-header" id="<?= 'heading_' . $i ?>" data-background="color" data-color="brown">
      <h5 class="mb-0">
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


 <!-- start счетчики screen -->
 <div  id="counters" style="background-position-x: center; background-size: cover; background-image:url(/wp-content/uploads/2019/07/mount.jpg)">
  <div class="container py-5 my-5">
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
          <div class="col-md-10 ml-auto mr-auto">
            <h2 class="title">Наши ценности</h2>
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
                  <div class="card-image">
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

    <div class="container mb-5" id="guides">
      <div class="row">
        <div class="col-md-4 text-center offset-md-2">
          <h4 class="mt-0 mb-3">Буравцов Иван, основатель “KeepTravel”</h4>
          <img src="https://keep-travel.ru/wp-content/uploads/2019/07/iv.jpg" class="img-circle img-no-padding img-responsive rounded" alt="Rounded Image">
        </div>
        <div class="col-md-4 text-center">
          <h4 class="mt-0 mb-2">Цымбалюк Владислав, основатель “KeepTravel”</h4>
            <img src="https://keep-travel.ru/wp-content/uploads/2019/07/vl.jpg" class="img-circle img-no-padding img-responsive rounded" alt="Rounded Image">
        </div>
      </div>
    </div>


    <!-- start видосы screen -->
    <div id="gallery" class="projects-3 section-image" style="background-image: url('/wp-content/uploads/2019/02/17.jpg')">
      <div class="container">
        <div class="row">
          <div class="col-md-8 ml-auto mr-auto text-center">
            <div class="space-top"></div>
            <h2 class="title">Как это было</h2>
          </div>
        </div>
        <div class="mb-5">
        <?php
            for ($i = 0; $i < count($gallery); $i++ ) {
                $gallery_title = !empty($gallery[$i]['place']) ? $gallery[$i]['place'] : null ;
                if ( $gallery_title ) { ?>
                  <div class="gallery_wrap">
                    <h3 style="color:white"><?= $gallery_title ?></h3>
                  </div>
                  <div class="gallery_wrap">
                  <?php
                  for ($j = 0; $j < count($gallery[$i]['gallery']); $j++ ) {
                      $gallery_image =  !empty($gallery[$i]['gallery'][$j]['image']) ? $gallery[$i]['gallery'][$j]['image'] : null ;
                      $image = wp_get_attachment_image_url( $gallery_image, 'full' );
                      $preview = str_replace('.jpg', '_preview.jpg',( $image ) );
                  ?>
                  <div>
                    <a href="<?= $image ?>" rel="<?= $gallery_title ?>" data-fancybox="<?= 'group_' . $i ?>" data-caption="<?= $gallery_title ?>" class="gallery_item">
                      <img class="img-fluid" data-lazy="<?= $preview ?>" alt="...">
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
      <div class="col-md-6 mx-auto page-carousel">
          <h2 class="title text-center mb-1">Они уже сделали это</h2>
          <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators my-3">
                <?php for ($i = 0; $i < count($reviews); $i++ ) { ?>
              <li data-target="#carouselExampleIndicators2" data-slide-to="<?= $i  ?>" class="
                  <?php if ($i == 0){ echo 'active'; }; ?>
              "></li>
              <?php } ?>
            </ol>
            <div class="carousel-inner" role="listbox">
                  <?php
                  for ($i = 0; $i < count($reviews); $i++ ) {
                      $review_title = !empty($reviews[$i]['review_title']) ? $reviews[$i]['review_title'] : null ;
                      $review_text = !empty($reviews[$i]['review_text']) ? $reviews[$i]['review_text'] : null ;
                      $review_name = !empty($reviews[$i]['review_name']) ? $reviews[$i]['review_name'] : null ;
                      $review_photo = !empty($reviews[$i]['review_photo']) ? $reviews[$i]['review_photo'] : null ;
                      $review_video = !empty($reviews[$i]['review_video']) ? $reviews[$i]['review_video'] : null ;
                      $image = wp_get_attachment_image_url( $review_photo, 'full' );
                  ?>
                  
              <div class="carousel-item mb-5 <?php if($i == 0){ echo 'active'; }; ?>" style="min-height:550px;">
                  <div class="card card-plain">
                      <div class="card-body text-center mx-auto col-md-8">
                        <div class="clearfix"></div>
                        <div class="author"  style="display: flex; width:100%;flex-direction: column;">
                            <?php if($image){ ?>
                            <div><img src="<?= $image; ?>"  class="avatar-big img-raised border-gray"></div>
                            <?php } ?>
                            <h5 class="card-description py-3" style="font-style: italic;">
                              <?= $review_text; ?>
                              <?php if($review_video){ ?>
                                  <!-- <div class="video" data-video="<?= $review_video; ?>" data-toggle="modal" data-target="#video-modal"> -->
                                    <div class="video" data-video="<?= $review_video; ?>">
                                      <!-- <img src="https://i.ytimg.com/vi/<?= $review_video; ?>/sddefault.jpg" style="width:100%"> -->
<!--                                       <button type="button" area-label="Запустить видео" class="video-button">
                                          <svg width="68" height="48" viewBox="0 0 68 48"><path class="video-button-shape" d="M66.52,7.74c-0.78-2.93-2.49-5.41-5.42-6.19C55.79,.13,34,0,34,0S12.21,.13,6.9,1.55 C3.97,2.33,2.27,4.81,1.48,7.74C0.06,13.05,0,24,0,24s0.06,10.95,1.48,16.26c0.78,2.93,2.49,5.41,5.42,6.19 C12.21,47.87,34,48,34,48s21.79-0.13,27.1-1.55c2.93-0.78,4.64-3.26,5.42-6.19C67.94,34.95,68,24,68,24S67.94,13.05,66.52,7.74z"></path><path class="video-button-icon" d="M 45,24 27,14 27,34"></path></svg>
                                      </button> -->
                                      <iframe width="100%" height="340px" src="https://www.youtube.com/embed/<?= $review_video ?>/" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                  </div>
                              <?php } ?>
                            </h5>
                            <h3 class="card-title"><?= $review_name; ?></h3>
                        </div>
                      </div>
                   </div>
              </div>
              <?php } ?>
            </div>
            <a class="left carousel-control carousel-control-prev" href="javascript:void(0)"data-target="#carouselExampleIndicators2" role="button" data-slide="prev">
              <span class="fa fa-angle-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control carousel-control-next" href="javascript:void(0)" data-target="#carouselExampleIndicators2" role="button" data-slide="next">
              <span class="fa fa-angle-right"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
    <!-- end отзывы screen -->

    <!-- start footer screen -->
    <div id="footer" class="testimonials-1" style="background-image: url('/wp-content/uploads/2019/02/17.jpg')">
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
                    <a href="tel:8-800-550-47-39">8-800-550-47-39</a>
                </li>
                <li class="nav-item ml-md-auto">
                    <p class="copyright">© 2018, Keep Travel</p>
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

<div class="modal  modal-lg fade mx-auto" id="video-modal" tabindex="-1" role="dialog" aria-labelledby="video-modal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
          <div class="video-area">
          </div>
      </div>
    </div>
  </div>
</div>
<div class="modal  modal-lg fade mx-auto" id="round-modal" tabindex="-1" role="dialog" aria-labelledby="video-modal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <?= do_shortcode('[contact-form-7 id="308" title="Форма кругосветки"]'); ?>
      </div>
    </div>
  </div>
</div>
<style type="text/css">
.slick-slide {
  padding: 20px;
  max-height: 400px;
}
</style>
<?php
endwhile;
wp_footer();
?>
<style media="screen">
  #wpcf7-f287-p2-o2,
  #wpcf7-f287-p2-o2 input{
    font-size: 1em;
  }
  #wpcf7-f287-p2-o2 input.form-control{
    color: #000;
  }
  .screen-reader-response,
  .wpcf7-response-output{
      display: none!important
  }
</style>
<script>
function modalRoundOpen(){
  var roundModal = $('#round-modal')
  roundModal.modal('show');
    $(function($){
      $(document).mouseup(function (e){
        if (!roundModal.is(e.target) && roundModal.has(e.target).length === 0) {
          roundModal.modal('hide');
          removeVideo();
        }
      });
  });
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
var wpcf7Elm_1 = document.querySelector( '.wpcf7' );
var wpcf7Elm_2 = document.querySelector('#wpcf7-f287-p2-o2');
// var wpcf7Elm_3 = document.querySelector('#wpcf7-f286-p1-o3');
// var wpcf7Elm_4 = document.querySelector('#wpcf7-f308-p1-o4');

wpcf7Elm_1.addEventListener( 'wpcf7mailsent', function( event ) {
    var formWrap = this.parentNode;
    formWrap.innerHTML = sentOkMessage[1];
}, false );

wpcf7Elm_2.addEventListener( 'wpcf7mailsent', function( event ) {
    var formWrap = this.parentNode;
    formWrap.innerHTML = sentOkMessage3[0] + sentOkMessage3[1] + sentOkMessage3[2];
}, false );

// wpcf7Elm_3.addEventListener( 'wpcf7mailsent', function( event ) {
//     var formWrap = this.parentNode;
//     formWrap.innerHTML = sentOkMessage[0] + sentOkMessage[1] + sentOkMessage[2];
//     $(window).scrollTop() - 100
// }, false );

// wpcf7Elm_4.addEventListener( 'wpcf7mailsent', function( event ) {
//     var formWrap = this.parentNode;
//     formWrap.innerHTML = sentOkMessage2[0] + sentOkMessage2[1] + sentOkMessage2[2];
//     $(window).scrollTop() - 100
// }, false );
});
// start youtube hack
var videoModal = $('#video-modal');

function findVideos() {
  var videos = $('.video');
  for (var i = 0; i < videos.length; i++) {
      setupVideo(videos[i]);
  }
}

function setupVideo(video) {
    var video = $(video);
    var button = video.find('.video-button');
    var id = video.data('video');
    video.click(function(){
        var iframe = createIframe(id);
        // videoModal.find('.video-area').append(iframe);
        video.replaceWith(iframe);
        // $(function($){
        //   $(document).mouseup(function (e){
        //     if (!videoModal.is(e.target)
        //         && videoModal.has(e.target).length === 0) {
        //       videoModal.modal('hide');
        //             removeVideo();
        //     }
        //   });
        // });
    });
    video.addClass('active');
}
function removeVideo(){
    videoModal.find('.video-area').html('');
}

function createIframe(id) {
  var iframe = document.createElement('iframe');
  iframe.setAttribute('allowfullscreen', '');
  iframe.setAttribute('allow', 'autoplay');
  iframe.setAttribute('src', generateURL(id));
  return iframe;
}

function generateURL(id) {
  var query = '?rel=0&showinfo=0&autoplay=1';
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

  $('.mask-phone').mask('+7 (999) 999-99-99');

  function activePhone(){
      $('#mainPhone').addClass('active');
      setTimeout(function() {
        $('#mainPhone').removeClass('active');
      }, 2000);
  };
</script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script>
$("a.gallery_item").fancybox();

$('.gallery_wrap').slick( {
  centerMode: false,
  slidesToShow: 3,
  infinite: true,
  lazyLoad: 'ondemand',
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
      }
    }
  ]
});
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
