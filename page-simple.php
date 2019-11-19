<?php
/**
 * Template Name: Simple
 */

get_header(); 

while (have_posts()) : the_post();
?>

<div class="container" style="margin-top:150px; margin-bottom:150px">
	<h1 class="mb-5"><?= the_title(); ?></h1>
	<p><?= the_content(); ?></p>
</div>

<?php
endwhile;
wp_footer();
?>

<!-- start footer screen -->
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

</body>
</html>