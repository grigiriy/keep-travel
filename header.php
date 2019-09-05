<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
     <?= the_title(); ?>
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
  <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
  <!--     Fonts and icons     -->
  <!--<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />-->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <?php wp_head(); ?>
  <style media="screen">
      .hidden_forNow{
           visibility:hidden;
       }
       #logo_white{
           display: none;
       }
       #logo_black,
       #logo_white{
           height: 30px;
       }
       .navbar-transparent #logo_white{
           display: block;
       }
       .navbar-transparent #logo_black{
           display: none;
       }
       @media(min-width:1441px){
        .header-container{
            max-width: 90%;
          }
       }
  </style>
  <meta name="yandex-verification" content="c40e43f61c771c55" />
</head>


<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top nav-down navbar-transparent" color-on-scroll="600">
      <div class="container header-container">
        <div class="navbar-translate">
          <a class="navbar-brand" href="/" rel="tooltip" data-placement="bottom" style="padding-right: 5vw;">
            <img src="/wp-content/themes/advantures/img/KeepTravel_Black.png" alt="" id="logo_black">
            <img src="/wp-content/themes/advantures/img/KeepTravel_White.png" alt="" id="logo_white">
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar bar1"></span>
            <span class="navbar-toggler-bar bar2"></span>
            <span class="navbar-toggler-bar bar3"></span>
          </button>
        </div>
        <div class="collapse navbar-collapse" data-color="orange">
          <ul class="navbar-nav w-100">
              <li class="nav-item ml-md-auto">
                  <a class="nav-link" href="/">Главная</a>
              </li>
              <?php
              $ancor = '#top';
              if(is_front_page()){ ?>
            <li class="nav-item">
              <a href="#select" class="nav-link">Путешествия</a>
            </li>
            <li class="nav-item">
              <a href="#gallery" class="nav-link">Галлерея</a>
            </li>
            <li class="nav-item">
              <a href="#guides" class="nav-link">Гиды</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#about">О нас</a>
            </li>
        <?php } else {
            $ancor = '#footer'; ?>
            <li class="nav-item">
              <a href="/#select" class="nav-link">Путешествия</a>
            </li>
        <?php } ?>
            <li class="nav-item ml-md-auto">
                <p class="nav-link"><a style="font-size: 1.5em;line-height: 1em;" href="tel:88005504739">8(800) 550-47-39</a></p>
            </li>
            <li class="nav-item">
              <a class="btn btn-round btn-danger" href="<?= $ancor ?>" onClick="activePhone()">
                <i class="nc-icon nc-mobile"></i> Заказать звонок
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
