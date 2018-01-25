<?php get_header(); ?>
<script>
 $(document).ready(function(){
  $(window).scroll(function(){
   document.getElementById("top_nav").style.background="rgba(0,0,0,0.7)";
   document.getElementById("top_nav").style.width="100%";
   document.getElementById("top_nav").style.marginTop="0px";
  });
  $(window).resize(function(){
   document.getElementById("top_nav").style.width="100%";
   document.getElementById("top_nav").style.marginTop="0px";
   if ($(window).width()<="710"){ 
    var elem = $('#top_nav');
     elem.css('top', h_mrg);
   }
  });
 });
</script>
<div class="page-align">
<div class="page-container">
    <div class="page-margin">
     <div class="top-block">
      <div class="top-block__title"><?php bloginfo("name")?></div>
      <div class="top-block__work-time">
       <span>
        <?php if ( have_posts() ) : query_posts('p=50');while (have_posts()) : the_post(); ?>
         <?php the_content(); ?>
        <? endwhile; endif; wp_reset_query(); ?>
       </span>
       <a href="#recall-window">Вам перезвонить?</a> 
      </div>
     </div>
     <div class="menu-block">
      <nav id="top_nav" class="header-block__menu" style="position:relative" onClick="hide_show()">
       <div class="header-block__other-menu">+375 (29) 259-56-52 ( МТС )<img src="<?php bloginfo("template_directory");?>/design/icons/menu.png" alt="Меню" height="16px;"></div>
       <ul id="menu">
        <li><a href="/index.php">На главную</a></li>
       </ul>
      </nav>
     </div>
     <div class="contacts-block">
       <span>Произошла ошибка 404</span><br>
       <div class="error-txt">
        Добро пожаловать на наш сайт.<br>
        Вы попали на страницу ошибки 404, возможной причиной данной ошибки может быть следующее:<br>
        Страница которую вы пытаетесь найти несуществует;<br>
        Страница которую вы пытаетесь найти была перенесена навсегда, а возможно временно;<br>
        Возможно адресс в браузерной строке который вы задали был введен некорректно,проверьте его правильность;<br>
        Некоторые браузеры чувствительны к вводимому регистру символов в браузерной строке, проверьте правильность регистров;<br>
        Попробуйте перейти по заданой адресной строке позднее.<br>
        Если данная проблема для вас является актуальной и постоянной, просьба связаться с нашим оператором для устранения её последующего возникновения, заранее благодарим Вас.<br>
        С уважением служба поддержки интернет-ресурса: snos.by
       </div> 
        <div class="clr"></div>
       </div>
       <div class="contacts-block__map">
        <?php echo do_shortcode("[huge_it_maps id='1']"); ?>
       </div>
     </div>

<?php
get_footer();
