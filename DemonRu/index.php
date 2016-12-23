<?php
/*
Template Name: ru
*/
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <title>Чистик Дмитрий</title>
    <!--[if lt IE 9]>
    <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <![endif]--> 
    <?php wp_head(); ?>
  </head>
  <body>
    <header class="header">
      <span class="nav__krest" id="x"></span>
      <nav class="main-nav">
       <div class="main-logo-svg">
        <a href="<?php echo home_url(); ?>" class="nav__logo_a" title="Dmitry Chistik"></a> 
        <img src="<?php echo bloginfo('template_url'); ?>/img/logo.svg" class="logo-svg" alt="logo">
      </div>
      <ul class="nav__ul">
        <li class="nav__li active">
         <a href="#home" class="nav__a" title="Home">ГЛАВНАЯ</a>
       </li>
       <li class="nav__li">
         <a href="#about" class="nav__a" title="About">ОБО МНЕ</a>
       </li>
       <li class="nav__li">
         <a href="#works" class="nav__a" title="Work">РАБОТЫ</a>
       </li>
       <li class="nav__li">
         <a href="#contact" class="nav__a nav_a-cont" title="Contact">КОНТАКТЫ</a>
       </li>
     </ul>
   </nav>
 </header>
 <div class="wrapper" id="home">
  <div class="wrapper-left"></div>
  <div class="wrapper-right"></div>
  <div class="wrapper-bottom"></div>
  <div class="wrapper-section">
    <div class="wrapper-middle-side"></div>
  </div>
  <section class="wrapper-inside">
    <div class="main-info__section">
      <div class="main_information wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s">
        <div class="custom_select">
          <div class="current_option">
            <span>РУС</span>
          </div>
          <ul class="custom_options">
            <a href="<?php bloginfo('template_directory'); ?>http://dmitrychistik.com/themes/demon/index.php" class="custom_li">ENG</a>
          </ul>
        </div>
        <h1 class="main-info_h1">Привет! <br> Меня зовут<br> <span class="info_border">Дмитрий Чистик</span> <br> Я front-end разработчик <br> из Минска</h1>
      </div>
      <div class="main_button_works wow fadeInUp" data-wow-duration="0.6s" data-wow-delay="1.1s"><a href="#works" class="inside__button-works">ПОСМОТРЕТЬ РАБОТЫ</a>
      </div>
      <div class="inside__angle-down wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.1s">
        <i class="fa fa-angle-double-down" aria-hidden="true"></i>
      </div>
    </div>
  </section>
</div>

<section class="about-me" id="about">
  <div class="about-section">
    <h3 class="about_h3 wow fadeInLeft" data-wow-duration="1s" data-wow-offset="200">ОБО МНЕ</h3>
    <p class="about_main-par wow fadeInUp" data-wow-duration="0.7s" data-wow-delay="0.5s" data-wow-offset="200">Мне 25 лет, вёрсткой начал интересоваться несколько лет назад. За это время прошёл некоторые онлайн курсы:
      <a class="about_link" href="https://htmlacademy.ru/" title="htmlacademy" target="_blank">htmlacademy</a>, 
      <a class="about_link" href="https://www.codecademy.com/" title="codeacademy" target="_blank">codeacademy</a> и практические курсы
      <a class="about_link" href="http://www.it-academy.by/" title="it-academy" target="_blank">ПАРКА ВЫСОКИХ ТЕХНОЛОГИЙ</a> по программе &laquo;РАЗРАБОТКА ВЕБ-САЙТОВ С ИСПОЛЬЗОВАНИЕМ HTML, CSS И JAVASCRIPT&raquo;. Я совершенствую свое мастерство день ото дня и получаю истинное удовольствие от результатов своей работы.</p>

      <h5 class="about__skills wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.9s" data-wow-offset="200">НАВЫКИ</h5>
      <div class="about__skill-wrapper">
        <ul class="about__skills_ul">
          <li class="about__skills_li wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay="1.1s" data-wow-offset="100"><span class="about__skills_span">HTML(5) &amp; CSS(3)</span> &ndash; блочная и табличная вёрстка с соблюдением семантической разметки страниц и стандартов W3C</li>
          <li class="about__skills_li wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay="1.3s" data-wow-offset="100"><span class="about__skills_span">JavaScript &amp; jQuery</span> &ndash; написание несложных пользовательских скриптов, использование библиотек jQuery</li>
          <li class="about__skills_li wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay="1.5s" data-wow-offset="100"><span class="about__skills_span">Bootstrap</span> &ndash; базовые знания, возможна реализация проекта с использование сетки и инструментов bootstrap</li>
          <li class="about__skills_li wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay="1.7s" data-wow-offset="100"><span class="about__skills_span">Wordpress</span> &ndash; интеграция вёрстки в wordpress</li>
          <li class="about__skills_li wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay="1.9s" data-wow-offset="100"><span class="about__skills_span">Responsive design</span> &ndash; адаптивная и кроссбраузерная вёрстка</li>
          <li class="about__skills_li wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay="2.1s" data-wow-offset="-100"><span class="about__skills_span">БЭМ</span> &ndash; верстка по Яндекс методологии БЭМ</li>
          <li class="about__skills_li wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay="2.3s" data-wow-offset="-100"><span class="about__skills_span">Анимация</span> &ndash; реализация анимации посредством CSS(3) и различных фрейморков</li>
          <li class="about__skills_li wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay="2.5s" data-wow-offset="-100"><span class="about__skills_span">HTML email</span> &ndash; вёрстка email рассылок</li>
          <li class="about__skills_li wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay="2.7s" data-wow-offset="-100"><span class="about__skills_span">Git &amp; GitHub</span> &ndash; знаком с системой контроля версий - git и загрузкой на удалённый репозиторий GitHub</li>
          <li class="about__skills_li wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay="2.9s" data-wow-offset="-200"><span class="about__skills_span">Adobe Photoshop</span> &ndash; нарезка PSD макета перед вёрсткой</li>
          <li class="about__skills_li wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay="3.1s" data-wow-offset="-200"><span class="about__skills_span">SASS</span> &ndash; знание основ CSS препроцессора</li>
          <li class="about__skills_li wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay="3.3s" data-wow-offset="-200"><span class="about__skills_span">PSD в HTML</span> &ndash; вёрстка PSD макета</li>
        </ul>
      </div>  

      <div class="about__english wow fadeInUp" data-wow-duration="1s" data-wow-delay="3.5s" data-wow-offset="-400">Уровень английского языка &mdash; Beginner, Elementary</div>

      <h5 class="about__intentions_h5 wow fadeInUp" data-wow-duration="1s" data-wow-delay="3.5s" data-wow-offset="-400">НАМЕРЕНИЯ</h5>
      <p class="about__intentions wow fadeInUp" data-wow-duration="1s" data-wow-delay="3.7s" data-wow-offset="-400">
        Я намерен упорно работать, хорошо разрабатывать, разрабатывать доступные и основанные на стандартах веб-сайтов с использованием современных методов. Узнавать что-то новое каждый день, и относиться к другим людям с большим уважением.</p>  
      </div> 
    </section>

    <section class="works wow slideInUp" id="works" data-wow-duration="1s" data-wow-delay="0.7s" data-wow-offset="100">
      <div class="works__wrapper">
       <div class="works__wrapp-center">
         <div class="works__h2 wow fadeInDown" data-wow-duration="1s" data-wow-delay="1.5s" data-wow-offset="0">РАБОТЫ</div>
         <div class="work-project work-one">
          <a href="#" class="work_hover whov-first" title="Admitad Goods">
            <h4 class="project_h4">Landing Page Admitad Goods</h4>
            <span class="project-button">ОБЗОР ПРОЕКТА</span>  
          </a>
        </div>
        <div class="work-project work-four">
          <a href="<?php bloginfo('template_directory'); ?>http://dmitrychistik.com/themes/demon/project_one/index.php" class="work_hover whov-fourth" title="Mail Seven Continent">
            <h4 class="project_h4">Mail Seven Continent</h4>
            <span class="project-button">ОБЗОР ПРОЕКТА</span>  
          </a>
        </div>
        <div class="work-project work-five">
          <a href="#" class="work_hover whov-fifth" title="Mail MAGIA DI GAMMA">
            <h4 class="project_h4">Mail MAGIA DI GAMMA</h4>
            <span class="project-button">ОБЗОР ПРОЕКТА</span>  
          </a>
        </div>
        <div class="work-project work-two">
          <a href="#" class="work_hover whov-second" title="CAR SERVIСE">
            <h4 class="project_h4">Мой первый проект</h4>
            <span class="project-button">ОБЗОР ПРОЕКТА</span>   
          </a>
        </div>
        <div class="work-project work-three">
          <a href="#" class="work_hover whov-third" title="Manima">
            <h4 class="project_h4">Manima</h4>
            <span class="project-button">ОБЗОР ПРОЕКТА</span>   
          </a>
        </div>        
      </div>
    </div>
  </section>              
  <footer class="footer wow slideInUp" id="contact" data-wow-duration="1s" data-wow-delay=".5s" data-wow-offset="100">
    <div class="footer_section">
      <h2 class="footer_h2">Хотите работать со мной?</h2>
      <div class="footer__contact">
        <div class="footer__mail_sect">
          <a class="footer__mail" href="mailto:Dmitry.Chistik@gmail.com" title="Dmitry.Chistik@gmail.com"><i class="fa fa-envelope" aria-hidden="true"></i> Dmitry.Chistik@gmail.com</a>
        </div>
        <div class="footer__tel"><i class="fa fa-mobile" aria-hidden="true"></i> +375 29 6065549</div>
      </div>
      <div class="footer__social">
       <a class="footer__social_link" href="https://www.linkedin.com/in/dmitry-chistik" target="_blank">
         <i class="fa fa-linkedin" aria-hidden="true"></i></a>
         <a class="footer__social_link" href="https://telegram.me/DChistik" target="_blank">
           <i class="fa fa-paper-plane" aria-hidden="true"></i></a>
           <a class="footer__social_link" href="https://www.facebook.com/dmitry.chistsik" target="_blank">
             <i class="fa fa-facebook" aria-hidden="true"></i></a>
             <a class="footer__social_link" href="https://vk.com/dmitry.chistik" target="_blank">
               <i class="fa fa-vk" aria-hidden="true"></i></a>
               <a class="footer__social_link" href="https://github.com/demon00" target="_blank">
                 <i class="fa fa-github" aria-hidden="true"></i>
                 <a class="footer__social_link" href="https://twitter.com/DmitryChistik" target="_blank">
                   <i class="fa fa-twitter" aria-hidden="true"></i>
                 </div>
                 <a href="mailto:Dmitry.Chistik@gmail.com" title="Dmitry.Chistik@gmail.com" class="inside__button-works footer__button">СВЯЗАТЬСЯ</a>
                 <div class="footer__Rights">© 2016, Все права не защищены.</div>
               </div>
             </footer>
           </body>
           </html>