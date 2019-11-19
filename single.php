<?php get_header(); 
$back_image = !empty(carbon_get_post_meta($post->ID, 'index_image')) ? carbon_get_post_meta($post->ID, 'index_image') : null ;
$back_image = wp_get_attachment_image_url( $back_image, 'full' );

$sub_name = !empty(carbon_get_post_meta($post->ID, 'sub_name')) ? carbon_get_post_meta($post->ID, 'sub_name') : null ;
$content_b = !empty(carbon_get_post_meta($post->ID, 'content_b')) ? carbon_get_post_meta($post->ID, 'content_b') : null ;
$content_c = !empty(carbon_get_post_meta($post->ID, 'content_c')) ? carbon_get_post_meta($post->ID, 'content_c') : null ;
$content_c_2 = !empty(carbon_get_post_meta($post->ID, 'content_c_2')) ? carbon_get_post_meta($post->ID, 'content_c_2') : null ;
$content_d = !empty(carbon_get_post_meta($post->ID, 'content_d')) ? carbon_get_post_meta($post->ID, 'content_d') : null ;
$reports = !empty(carbon_get_post_meta($post->ID, 'reports', 'complex')) ? carbon_get_post_meta($post->ID, 'reports', 'complex') : null ;
$mini_texts = !empty(carbon_get_post_meta($post->ID, 'mini_texts', 'complex')) ? carbon_get_post_meta($post->ID, 'mini_texts', 'complex') : null ;
$tickets_left = !empty(carbon_get_post_meta($post->ID, 'backgrounds_post', 'complex')[0]['tickets_left']) ? carbon_get_post_meta($post->ID, 'backgrounds_post', 'complex')[0]['tickets_left'] : '7' ;
$tickets_total = !empty(carbon_get_post_meta($post->ID, 'backgrounds_post', 'complex')[0]['tickets_total']) ? carbon_get_post_meta($post->ID, 'backgrounds_post', 'complex')[0]['tickets_total'] : '8' ;
$videos = !empty(carbon_get_post_meta($post->ID, 'videos', 'complex')) ? carbon_get_post_meta($post->ID, 'videos', 'complex') : null ;


$is_action =  !empty(carbon_get_post_meta($post->ID, 'backgrounds_post', 'complex')[0]['sale']);

$table = !empty(carbon_get_post_meta($post->ID, 'table', 'complex')) ? carbon_get_post_meta($post->ID, 'table', 'complex') : null ;
$guru = !empty(carbon_get_post_meta($post->ID, 'guru', 'complex')) ? carbon_get_post_meta($post->ID, 'guru', 'complex') : null ;
$map = !empty(carbon_get_post_meta($post->ID, 'map')) ? carbon_get_post_meta($post->ID, 'map') : null ;
$map = wp_get_attachment_image_url( $map, 'full' );
while (have_posts()) : the_post();
$page_name = !empty($sub_name) ? $sub_name : get_the_title();

$gallery_pics = !empty(carbon_get_post_meta($post->ID, 'gallery', 'complex')) ? carbon_get_post_meta($post->ID, 'gallery', 'complex') : null ;
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
    <h3><strong><?= $table[0]['dates'] ?></strong></h3>
  </div>
</div>
</div>
<div class="wrapper">
<div class="main">
  <div class="section section-white">
    <div class="container">
      <div class="row">
          <div class="col-md-12">
              <div class="row">
                <div class="col-md-8">
                  <div class="article-content black red-headlines">
                    <?= the_content(); ?>
                    </div>
                  <hr>
                </div>
                <?
                $form_btn = ($is_action == 'yes') ? 'Узнать подробнее' : 'Узнать';
                $form_text = ($is_action == 'yes') ? 'На это путешествие сейчас распространяется скидка' : 'Узнать о проходящих акциях';;
                ?>
                <div class="col-md-4">
                    <div class="card card-light card-plain sticky">
                      <div class="card-body">
                        <div class="card-description black">
                          <div class="text-center my-3">
                            <!--?xml version="1.0" encoding="UTF-8"?-->
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="180px" height="80px" viewBox="0 0 380 134">
                                <!-- Generator: Sketch 52.6 (67491) - http://www.bohemiancoding.com/sketch -->
                                <title>Fill 2</title>
                                <desc>Created with Sketch.</desc>
                                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g id="KeepTravel" transform="translate(-170.000000, -293.000000)" fill="#34b5b8">
                                        <path d="M170.211,301.71 C170.211,297.164 173.896,293.479 178.441,293.479 C182.987,293.479 186.672,297.164 186.672,301.71 L186.672,344.232 L230.774,296.147 C233.846,292.81 239.043,292.594 242.381,295.665 C245.719,298.737 245.934,303.934 242.863,307.272 L184.844,370.53 C183.335,372.395 181.028,373.589 178.441,373.589 C173.896,373.589 170.211,369.904 170.211,365.358 L170.211,301.71 Z M503.938,342.71 C499.393,342.71 495.708,339.025 495.708,334.479 C495.708,329.934 499.393,326.249 503.938,326.249 L526.541,326.249 C535.19,326.249 537.31,309.94 525.774,309.94 L487.477,309.94 L487.477,365.358 C487.477,369.904 483.792,373.589 479.247,373.589 C474.701,373.589 471.016,369.904 471.016,365.358 L471.016,301.71 C471.016,297.164 474.701,293.479 479.247,293.479 L532.352,293.479 C555.629,293.479 555.703,342.71 531.962,342.71 L503.938,342.71 Z M379.011,293.479 L442.073,293.479 C446.619,293.479 450.304,297.164 450.304,301.71 C450.304,306.255 446.619,309.94 442.073,309.94 L387.241,309.94 L387.241,326.249 L428.846,326.249 C433.392,326.249 437.077,329.934 437.077,334.479 C437.077,339.025 433.392,342.71 428.846,342.71 L387.241,342.71 L387.241,358.621 C395.271,359.649 402.575,358.47 409.826,357.298 C420.453,355.581 430.989,353.879 444.195,357.417 C448.581,358.589 451.186,363.095 450.014,367.48 C448.843,371.865 444.337,374.471 439.951,373.299 C430.057,370.648 421.266,372.069 412.398,373.502 C401.73,375.226 390.967,376.963 377.361,373.423 C373.606,372.659 370.78,369.339 370.78,365.358 L370.78,301.71 C370.78,297.164 374.465,293.479 379.011,293.479 Z M277.468,426.382 L277.468,410.727 L271.492,410.727 L271.492,406.743 L287.764,406.743 L287.764,410.727 L281.788,410.727 L281.788,426.382 L277.468,426.382 Z M303.993,426.382 L303.993,406.743 L312.97,406.743 C315.458,406.743 317.366,407.407 318.694,408.735 C319.816,409.857 320.377,411.372 320.377,413.28 C320.377,416.291 318.974,418.321 316.169,419.368 L320.966,426.382 L315.916,426.382 L311.652,420.098 L308.313,420.098 L308.313,426.382 L303.993,426.382 Z M308.313,416.282 L312.69,416.282 C313.737,416.282 314.551,416.025 315.131,415.511 C315.71,414.996 316,414.309 316,413.449 C316,412.532 315.701,411.835 315.103,411.358 C314.504,410.881 313.672,410.643 312.606,410.643 L308.313,410.643 L308.313,416.282 Z M335.512,426.382 L343.928,406.603 L347.912,406.603 L356.329,426.382 L351.812,426.382 L350.016,421.977 L341.712,421.977 L339.916,426.382 L335.512,426.382 Z M343.255,418.162 L348.473,418.162 L345.864,411.793 L343.255,418.162 Z M375.728,426.522 L367.788,406.743 L372.557,406.743 L377.692,420.575 L382.826,406.743 L387.483,406.743 L379.543,426.522 L375.728,426.522 Z M403.431,426.382 L403.431,406.743 L418.244,406.743 L418.244,410.587 L407.724,410.587 L407.724,414.571 L416.982,414.571 L416.982,418.414 L407.724,418.414 L407.724,422.538 L418.385,422.538 L418.385,426.382 L403.431,426.382 Z M435.147,426.382 L435.147,406.743 L439.468,406.743 L439.468,422.454 L449.258,422.454 L449.258,426.382 L435.147,426.382 Z M278.775,293.479 L341.837,293.479 C346.383,293.479 350.068,297.164 350.068,301.71 C350.068,306.255 346.383,309.94 341.837,309.94 L287.005,309.94 L287.005,326.249 L328.61,326.249 C333.156,326.249 336.841,329.934 336.841,334.479 C336.841,339.025 333.156,342.71 328.61,342.71 L287.005,342.71 L287.005,358.621 C295.034,359.649 302.338,358.47 309.59,357.298 C320.217,355.581 330.752,353.879 343.959,357.417 C348.345,358.589 350.95,363.095 349.778,367.48 C348.607,371.865 344.101,374.471 339.715,373.299 C329.821,370.648 321.029,372.069 312.162,373.502 C301.494,375.226 290.731,376.963 277.125,373.423 C273.37,372.659 270.544,369.339 270.544,365.358 L270.544,301.71 C270.544,297.164 274.229,293.479 278.775,293.479 Z M220.371,355.669 C217.157,352.455 217.157,347.244 220.371,344.03 C223.585,340.817 228.796,340.817 232.01,344.03 L247.518,359.539 C250.732,362.752 250.732,367.963 247.518,371.177 C244.304,374.391 239.093,374.391 235.879,371.177 L220.371,355.669 Z" id="Fill-2"></path>
                                    </g>
                                </g>
                            </svg>
                            <p style="color:#e42e0dd4;font-weight:bold;"><?= $form_text ?></p>
                          </div>
  

                        <div class="card-footer">
                            <a href="#footer">
                              <button class="btn btn-block btn-round btn-primary"><?= $form_btn ?></button>
                            </a>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>

<div class="row my-5">
  <div class="col-md-2 pt-3">
    <p><i>осталось</i></p>
    <?php
    $tickets_left * 1;
    $tickets_total * 1;
    $tickets_total = ($tickets_total <= 8) ? $tickets_total : 8;
    $tickets_left = ($tickets_left <= $tickets_total) ? $tickets_left : $tickets_total;
    ?>
    <p><strong><?= $tickets_left ?> мест из <?= $tickets_total ?></strong></p>
  </div>
  <div class="col-md-10">
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
          <div class="col-md-10 mx-auto">
          <h2 class="mb-5 text-center" >Я должен это сделать!</h2>
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
</div>
<div class="container-fluid" style="max-width: 1900px;">
     <div class="row">
         <div class="col-md-7 mx-auto" <?php if ($map){echo 'style="max-width: 840px; margin-right: 0 !important;"';} ?>>
             <h2 class="mb-5" >Как будет проходить поездка</h2>
             <div class="article-content red-headlines" id="linked">
                 <?= $content_b; ?>
             </div>
         </div>
         <?php if ($map){ ?>
         <div class="col-md-5">
             <div class="side-map sticky">
                 <img src="<?= $map; ?>" alt="Путешествие по <?= $sub_name ? $sub_name : the_title()?>">
             </div>
         </div>
       <?php } ?>
     </div>
</div>
<div class="container">
    <div class="row mt-5">
      <div class="col-md-10 align-self-end">
        <h2>Что важно знать<br><span class="strong-mob">об этом путешествии</span></h2>
        <p class="mt-3">Полный список всех необходимых предметов, особых условий путешествия, информации о необходимых документах и оформлении визы после оплаты путешествия.</p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 ">
        <div class="article-content red-headlines">
          <h4>Что включено в поездку</h4>
          <?= $content_c; ?>
        </div>
        </div>
        <div class="col-md-6">
          <div class="article-content red-headlines" style="font-weight:400">
            <h4>Дополнительные опции</h4>
            <?= $content_c_2; ?>
          </div>
        </div>
      </div>

    <?php
    for ($i = 0; $i < count($guru); $i++ ) {
    $about = !empty($guru[$i]['about']) ? $guru[$i]['about'] : null ;
    $name = !empty($guru[$i]['name']) ? $guru[$i]['name'] : null ;
    $img = !empty($guru[$i]['img']) ? $guru[$i]['img'] : null ;
    $img = wp_get_attachment_image_url( $img, 'thumbnail' );
    if ($name): ?>
    <div class="row mt-5">
        <div class="col-md-3 text-center guid">
            <h4 class="mb-3"><?= $name ?></h4>
            <img src="<?= $img ?>" class="img-circle img-no-padding img-responsive" alt="Rounded Image">
          </div>
          <div class="col-md-9">
            <h4 class="mb-3">Ответственный за маршрут</h4>
            <p>Этот человек создал для вас этот маршрут. Знает все секреты и особенности данного путешествия, от начала до конца.  </p>
              <p>
                  <?= $about ?>
              </p>
          </div>
    </div>
<?php endif; ?>
<?php } ?>

      <!-- start fivth screen -->
      <div class="row my-5">
          <h2 class="title text-center mx-auto">Что нужно сделать прямо сейчас:</h2>
          <div class="col-md-6 mx-auto text-center icons-block d-flex">
          <div class="info info-horizontal d-flex py-1">
            <div class="icon icon-info">
              <img src="/wp-content/uploads/2019/10/icons_1.png" alt="">
            </div>
            <div class="description">
              <h4 class="info-title">Забронировать место в группе (кол-во мест ограничено)</h4>
            </div>
          </div>
          <div class="info info-horizontal d-flex py-1">
            <div class="icon icon-success">
              <img src="/wp-content/uploads/2019/10/icons_2.png" alt="">
            </div>
            <div class="description">
              <h4 class="info-title"><a style="font-weight: inherit;" href="https://www.instagram.com/keeptravel_agency/" target="_blank">Подписаться на наш <i class="fa fa-instagram inline" aria-hidden="true" style=""></i></a></h4>
            </div>
          </div>
          <div class="info info-horizontal d-flex py-1">
            <div class="icon icon-danger">
              <img src="/wp-content/uploads/2019/10/icons_3.png" alt="">
            </div>
            <div class="description">
              <h4 class="info-title">Начать подбирать авиа билеты</h4>
            </div>
          </div>
          <div class="info info-horizontal d-flex py-1">
            <div class="icon icon-danger">
              <img src="/wp-content/uploads/2019/10/icons_4.png" alt="">
            </div>
            <div class="description">
              <h4 class="info-title">Начать собирать чемодан!</h4>
            </div>
          </div>
          <div class="info info-horizontal d-flex py-1">
            <div class="icon icon-danger">
              <img src="/wp-content/uploads/2019/10/icons_5.png" alt="">
            </div>
            <div class="description">
              <h4 class="info-title">Рассказать друзьям о путешествии и позвать их с собой</h4>
            </div>
          </div>
        </div>
      </div>
      <!-- end fivth screen -->

    <!--start table screen -->
    <div class="row">
        <div class="col-md-12 mx-auto text-center">
            <h2 class="title">Ближайшие отправления</h2>
        </div>
        <div class="table-responsive">
            <table class="table">
              <thead>
                <tr style="background: #efefef">
                  <th>
                      <h4 class="mt-0">Даты</h4>
                  </th>
                  <!-- <th>Класс тура</th> -->
                  <th class="text-right">
                  <h4 class="mt-0">Цена за 1 человека</h4>
                </th>
                  <th></th>
                </tr>
              </thead>
                  <tbody data-next="<?= $table[0]['dates'] ?>" id="data_next">
              <?php for ($i = 0; $i < count($table); $i++){
                $dates = $table[$i]['dates'];
                // $class = $table[$i]['class'];
                $price = ($table[$i]['price']) ? $table[$i]['price'] : $mini_texts[0]['pricerange'];
              ?>
                    <tr style="color: #000;font-size: 1.3em;">
                      <td><?= $dates; ?></td>
                      <!-- <td><?= $class; ?></td> -->
                      <td class="text-right">от <?= $price; ?></td>
                      <td class="td-actions text-right">
                        <a href="#footer">
                            <button type="button" class="btn btn-primary btn-sm my-auto" data-date="<?= $dates ?>" onclick="setDate(this)">
                              Забронировать
                            </button>
                        </a>
                      </td>
                    </tr>
                  <?php } ?>
                  </tbody>
            </table>
          </div>
    </div>
    <!-- end table screen -->
    </div>
  </div>
</div>
</div>

<?php if ($gallery_pics || $videos) { ?>
<div class="container">
  <div class="row">
    <div class="col-md-8 mx-auto text-center">
      <div class="space-top"></div>
      <h2 class="title">Как это было</h2>
    </div>
  </div>
  <div class="mb-5 mx-auto">
      <div class="gallery_wrap">
      <?php
      for ($i = 0; $i < count($gallery_pics); $i++ ) {
          $image = wp_get_attachment_image_url( $gallery_pics[$i]['image'], 'full' );
          $preview = str_replace('.jpg', '_preview.jpg',( $image ) );
          $att = ($i < 4) ? 'src' : 'data-lazy';
      ?>
      <div>
        <a href="<?= $image ?>" rel="<?= get_the_title() ?>" data-fancybox="<?= 'group_' . $i ?>" data-caption="<?= get_the_title() ?>" class="gallery_item">
          <img class="img-fluid" <?= $att ?>="<?= $preview ?>" alt="...">
        </a>
      </div>
    <?php }  ?>
    </div>
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

<div class="container my-5">
  <div class="row">
      <div class="mx-auto col-md-8 mt-3">
        <h3 class="text-center">Узнайте об ацкиях и спецпредложениях</h3>
        <div class="col-md-6 mx-auto my-3">
            <a href="#footer">
                <button type="button" class="btn btn-danger btn-block btn-round mb-5" style="max-width: 100%;margin: auto;">Свяжитесь с нами</button>
            </a>
        </div>
      </div>
  </div>
</div>

<div class="col-md-12 mt-3" id="dropDownFromHere">
  <div class="dropdown">
    <div class="form-control dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Даты путешествия?
    </div>
    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        <?php for ($i = 0; $i < count($table); $i++){
        $dates = $table[$i]['dates'];
      ?>
      <a class="dropdown-item" data-date="<?= $dates ?>" onclick="setDate(this)"><?= $dates ?></a>
      <?php } ?>
    </div>
  </div>
</div>

<!-- start footer screen -->
<?php
$_ttl = get_the_title();
$bt_bg = ( $_ttl == 'Исландия. В поисках северного сияния' ) ? '/wp-content/uploads/2019/09/isla_bt_bg.jpg' : '/wp-content/uploads/2019/10/bot_back.jpg';
?>
<div id="footer" style="background: url(/wp-content/uploads/2019/10/bot_back.jpg) no-repeat;background-size:cover; padding: 100px 0 300px;">
    <div class="container">
      <div class="row">
          <div class="col-md-8 mx-auto py-3">
              <div class="card mx-auto">
                  <?= do_shortcode('[contact-form-7 id="285"]'); ?>
            </div>
        </div>
      </div>
    </div>
</div>

<!-- end footer screen -->
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

<script type="text/javascript">
var $ = jQuery;
var dropDownFromHere = $('#dropDownFromHere');
$(function(){
  $('#dropDownHere').replaceWith(dropDownFromHere);
})

var sentOkMessage = '<div class="sent-ok-message col-md-10 mx-auto"><h5 class="description">Спасибо, в ближайшее время наш менеджер свяжется с вами!</h5></div>'

var wpcf7Elm = document.querySelectorAll( '.wpcf7' );
  for (var i = 0; i < wpcf7Elm.length; i++){
  wpcf7Elm[i].addEventListener( 'wpcf7mailsent', function( event ) {
      var formWrap = this.parentNode;
      formWrap.innerHTML = sentOkMessage;
  }, false );
}
var input = $('#datetimepicker');
function setDate(e){
    var date = $(e).data('date');
    input.attr('value',date);
    $('#dropdownMenuButton').html(date);
};

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

$(function(){
    var pagename = $('#pageurl');
    var name = $('#pageName').data('name');
    pagename.attr('value',name);
    var date_input = $('#datetimepicker');
    var nextDate = $('#data_next').data('next');
    date_input.attr('plaseholder','');
    date_input.attr('value',nextDate);
    $('#dropdownMenuButton').html(nextDate);
    // date_input.attr('disabled','disabled');
    // date_input.css('background','#fff');
    setTimeout(modalQuestionOpen, 180000);
});

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
</script>

</body>

</html>