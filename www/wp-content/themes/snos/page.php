<?php get_header();?>
<?php 
 session_start(); 
 $_SESSION['e-mail'] = category_description(6); 
?>
<div class="page-align">
 <div class="page-container">
  <?php if (get_the_ID()=='2'): ?>
   <header class="header-block">
    <div class="header-block__align">
     <h2 class="header-block__site-name"><?php bloginfo("name")?></h2>
     <nav id="top_nav" class="header-block__menu" onClick="hide_show()">
      <div class="header-block__other-menu"><p>+375 (29) 259-56-52 ( МТС )</p><div>≡</div></div>
      <?php wp_nav_menu(array('theme_location' => 'primary','container' => 'false','menu_id' => 'menu', 'menu_class' => ''));?>
     </nav>
     <script>
      var el = document.getElementById("menu").getElementsByTagName('li');
      for (var i = 0; i <= 2; i++) 
       el[i].className = "scroll";
     </script>
     <div class="header-block__work-time">
      <div>
       <?php if ( have_posts() ) : query_posts('p=50');while (have_posts()) : the_post(); ?>
        <?php the_content(); ?>
       <? endwhile; endif; wp_reset_query(); ?>
      </div>
      <a href="#recall-window">Вам перезвонить?</a> 
     </div>
    </div>
    <div class="clr"></div>
    <h1 class="header-block__title">Демонтируем всё!</h1>
    <div class="clr"></div>
    <HR WIDTH="30%" SIZE="3" color="#FFC600">
    <div class="header-block__icons-set">
     <img src="<?php bloginfo("template_directory");?>/design/icons/icon_set_1.png" alt="Иконки">
     <table>
      <th>Металлоконструкции</th>
      <th>Квартиры</th>
      <th>Дома</th>
      <th>Гос. Объекты</th>
     </table>
    </div>
    <div class="header-block__button">
     <a href="#application">Рассчитать стоимость демонтажа</a>
    </div>
   </header>
   <div class="clr"></div>
   <main>
   <?php 
    $easy= strip_tags(trim(category_description(9)));
    if($easy == "Включен")
     echo'
      <div class="timer-block">
      <h3>'.get_cat_name(10).'</h3>
      <script src="http://megatimer.ru/s/674729c8064bb12bb4bfe5ff34197232.js"></script>'.category_description(10).'
      <a href="#stock" >Заказать по акции</a>
      </div>';
   ?>
   <div class="clr"></div>
   <div class="about-us-block">
    <div class="about-us-block__table">
     <table>
      <?php if ( have_posts() ) : query_posts('p=53');while (have_posts()) : the_post(); ?>
       <th><span><?php the_title();?></span><?php the_content(); ?></th>
      <? endwhile; endif; wp_reset_query(); ?>
      <?php if ( have_posts() ) : query_posts('p=55');while (have_posts()) : the_post(); ?>
       <th><span style="color:#FFFF00;"><?php the_title();?></span><?php the_content(); ?></th>
      <? endwhile; endif; wp_reset_query(); ?>
      <?php if ( have_posts() ) : query_posts('p=57');while (have_posts()) : the_post(); ?>
       <th><span><?php the_title();?></span><?php the_content(); ?></th>
      <? endwhile; endif; wp_reset_query(); ?>
     </table>
    </div>
   </div>
    <div id="benefits" class="advantages-block">
     <h2><?php echo get_cat_name(3)?></h2>
     <div class="advantages-block__align">
      <article class="advantages-block__advantage">
       <div>%</div>
       <?php if ( have_posts() ) : query_posts('p=59');while (have_posts()) : the_post(); ?>
        <?php the_content(); ?>
       <? endwhile; endif; wp_reset_query(); ?>
      </article>
      <article class="advantages-block__advantage">
       <div>(</div>
       <?php if ( have_posts() ) : query_posts('p=61');while (have_posts()) : the_post(); ?>
        <?php the_content(); ?>
       <? endwhile; endif; wp_reset_query(); ?>
      </article>
      <article class="advantages-block__advantage">
       <div>}</div>
       <?php if ( have_posts() ) : query_posts('p=64');while (have_posts()) : the_post(); ?>
        <?php the_content(); ?>
       <? endwhile; endif; wp_reset_query(); ?>
      </article>
      <article class="advantages-block__advantage">
       <div>!</div>
       <?php if ( have_posts() ) : query_posts('p=66');while (have_posts()) : the_post(); ?>
        <?php the_content(); ?>
       <? endwhile; endif; wp_reset_query(); ?>
      </article>
     </div>
    </div>
    <div class="clr"></div>
    <div id="services" class="services-block">
     <h2>Наши Услуги</h2>
     <p>работаем по Минску и всей Беларуси</p>
     <div class="line-2"></div>
      <script>
       $(document).ready(function() {
        $(".services-block__services-list img").wrap("<div class=\"img-back\"></div>");
        jQuery(function($) {
         newsImg = $(".services-block__services-list img");
         newsImg.after(function(){
          imgTitle = $(this).attr("title");
          if (imgTitle) $(this).parent().append('<div class="img-txt">'+imgTitle+'</div>');
         });
        });
       });
      </script>
      <div id="spisok" class="services-block__services-list">
       <?php if ( have_posts() ) : query_posts('p=126');while (have_posts()) : the_post(); ?>
        <?php the_content(); ?>
       <? endwhile; endif; wp_reset_query(); ?>
      </div>
      <a href="#consultation">Получить бесплатную консультацию</a>
    </div>
   </div>
   <div class="clr"></div>
   <div class="order-block">
    <h2><?php echo get_cat_name(4)?></h2>
    <div class="line-3"></div>
    <div class="order-block__align">
     <article class="order-block__order-make">
      <h4>1</h4>
      <?php if ( have_posts() ) : query_posts('p=68');while (have_posts()) : the_post(); ?>
       <?php the_content(); ?>
      <? endwhile; endif; wp_reset_query(); ?>
     </article>
     <article class="order-block__order-make">
      <h4>2</h4>
      <?php if ( have_posts() ) : query_posts('p=70');while (have_posts()) : the_post(); ?>
       <?php the_content(); ?>
      <? endwhile; endif; wp_reset_query(); ?>
     </article>
     <article class="order-block__order-make">
      <h4>3</h4>
      <?php if ( have_posts() ) : query_posts('p=72');while (have_posts()) : the_post(); ?>
       <?php the_content(); ?>
      <? endwhile; endif; wp_reset_query(); ?>
     </article>
     <article class="order-block__order-make">
      <h4>4</h4>
      <?php if ( have_posts() ) : query_posts('p=74');while (have_posts()) : the_post(); ?>
       <?php the_content(); ?>
      <? endwhile; endif; wp_reset_query(); ?>
     </article>
     <article class="order-block__order-make">
      <h4>5</h4>
      <?php if ( have_posts() ) : query_posts('p=76');while (have_posts()) : the_post(); ?>
       <?php the_content(); ?>
      <? endwhile; endif; wp_reset_query(); ?>
     </article>
    </div>
   </div>
   <div class="clr"></div>
   <div id="sale" class="discount-block">
    <div class="discount-block__align">
     <div class="discount-block__sale">
      <h3><?php echo get_cat_name(5)?></h3>
      <?php echo category_description(5)?>
     </div>
     <div class="discount-block__form">
      <form enctype="multipart/form-data" id="form_5" method="post">
       <input type="text" name="name" placeholder="Ваше имя" pattern="\D{3,}" required>
       <input type="text" name="phone" placeholder="Ваш телефон" oninput="validatephone(this)" minlength="5" maxlength="25" required> 
       <input type="text" name="email" placeholder="Ваш E-mail" pattern="^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required>
       <textarea name="comments" placeholder="Комментарии об объекте" required></textarea>
       <div class="file-upload">
        <button type="button">Прикрепить фото</button>
        <input type="file" accept="image/*">
       </div>
       <a id="upload_hide" class="submit button" >Загрузить файлы</a>
       <div class="ajax-respond"></div>
        <button id="unlock" disabled>Рассчитать стоимость</button>
      </form>
      <script>
       $(function(){
        var wrapper = $( ".file-upload" ),
        inp = wrapper.find( "input" ),
        btn = wrapper.find( "button" ),
        lbl = wrapper.find( "div" );
        btn.focus(function(){
         wrapper.addClass( "focus" );
        }).blur(function(){
         wrapper.removeClass( "focus" );
        });
        btn.add( lbl ).click(function(){
         inp.click();
        });
        var file_api = ( window.File && window.FileReader && window.FileList && window.Blob ) ? true : false;
        inp.change(function(){
         var file_name;
         if( file_api && inp[ 0 ].files[ 0 ] )
          file_name = inp[ 0 ].files[ 0 ].name;
         else
          file_name = inp.val().replace( "C:\\fakepath\\", '' );
         if( ! file_name.length )
          return;
         if( lbl.is( ":visible" ) ){
          lbl.text( file_name );
          btn.text( "Выбрать" );
         } 
         else
          document.getElementById("upload_hide").click();
        }).change();
       });
       $( window ).resize(function(){
        $( ".file-upload input" ).triggerHandler( "change" );
       });
      </script>
      <script type="text/javascript">
       var files;
       $('input[type=file]').change(function(){
        files = this.files;
       });
       $('#upload_hide').click(function( event ){
        event.stopPropagation();
        event.preventDefault(); 
        var data = new FormData();
        $.each( files, function( key, value ){
         data.append( key, value );
        }); 
        $('#unlock').click(function( event ){
         $('.ajax-respond').html( '');
        }); 
        $.ajax({
         url: './wp-content/themes/snos/modules/submit.php?uploadfiles',
         type: 'POST',
         data: data,
         cache: false,
         dataType: 'json',
         processData: false, 
         contentType: false, 
         success: function( respond, textStatus, jqXHR ){
          if( typeof respond.error === 'undefined' ){
           var files_path = respond.files;
           var html = '';
           $.each( files_path, function( key, val ){ html +="Файл готов к отправке<br>"; } )
           $('.ajax-respond').html( html );
            document.getElementById('unlock').disabled=false;
           }
          else
           console.log('ОШИБКИ ОТВЕТА сервера: ' + respond.error );
         },
         error: function( jqXHR, textStatus, errorThrown ){
          console.log('ОШИБКИ AJAX запроса: ' + textStatus );
         }
        });
       });
      </script>
     </div>
    </div>
   </div>
  <?php else: ?>
   <script>
    $(document).ready(function(){
     if ($(window).width()<="710"){ 
        var elem = $('#top_nav');
        elem.css('top', h_mrg);
     }
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
   <?php if (get_the_ID()=='367'): ?>
    <div class="page-margin">
     <div class="top-block">
      <h3 class="top-block__title"><?php bloginfo("name")?></h3>
      <div class="top-block__work-time">
       <div>
        <?php if ( have_posts() ) : query_posts('p=50');while (have_posts()) : the_post(); ?>
         <?php the_content(); ?>
        <? endwhile; endif; wp_reset_query(); ?>
       </div>
       <a href="#recall-window">Вам перезвонить?</a> 
      </div>
     </div>
     <div class="menu-block">
      <nav id="top_nav" class="header-block__menu" style="position:relative" onClick="hide_show()">
       <div class="header-block__other-menu"><p>+375 (29) 259-56-52 ( МТС )</p><div>≡</div></div>
       <ul id="menu">
        <li><a href="/index.php">На главную</a></li>
        <li><a href="/index.php/value_information">Полезная информация</a></li>
        <li><a href="/index.php/gallery">Галерея</a></li>
       </ul>
      </nav>
     </div>
     <div class="contacts-block">
      <?php if ( have_posts() ) : query_posts('p=82');while (have_posts()) : the_post(); ?>
       <span><?php the_title();?></span>
       <div class="contacts-block__text">
        <?php the_content(); ?>
      <? endwhile; endif; wp_reset_query(); ?>
       </div> 
       <div class="contacts-block__form">
        <form id="form_4" method="post">
         <input type="text" name="name" placeholder="Ваше имя" pattern="\D{3,}" required>
         <input type="text" name="phone" placeholder="Ваш телефон" oninput="validatephone(this)" minlength="5" maxlength="25" required> 
         <input type="text" name="email" placeholder="Ваш E-mail" pattern="^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required>
         <textarea name="comments" placeholder="Комментарии об объекте" minlength="25" required></textarea>
         <button name="send_mail">Отправить</button>
        </form>
        <?php if ( have_posts() ) : query_posts('p=46');while (have_posts()) : the_post(); ?>
         <?php the_content(); ?>
        <? endwhile; endif; wp_reset_query(); ?>
        <div class="clr"></div>
       </div>
       <div class="contacts-block__map">
        <?php echo do_shortcode("[huge_it_maps id='1']"); ?>
       </div>
     </div>
   <?php else: ?>
    <?php if (get_the_ID()=='369'): ?>
     <div class="page-margin">
      <div class="top-block">
       <h3 class="top-block__title"><?php bloginfo("name")?></h3>
       <div class="top-block__work-time">
        <div>
         <?php if ( have_posts() ) : query_posts('p=50');while (have_posts()) : the_post(); ?>
          <?php the_content(); ?>
         <? endwhile; endif; wp_reset_query(); ?>
        </div>
        <a href="#recall-window">Вам перезвонить?</a> 
       </div>
      </div>
      <div class="menu-block">
       <div id="top_nav" class="header-block__menu" onClick="hide_show()" style="position:relative">
        <div class="header-block__other-menu"><p>+375 (29) 259-56-52 ( МТС )</p><div>≡</div></div>
        <ul id="menu" onClick="hide_show()">
         <li><a href="/index.php">На главную</a></li>
         <li><a href="/index.php/contacts">Контакты</a></li>
         <li><a href="/index.php/gallery">Галерея</a></li>
        </ul>
       </div>
      </div>
      <div class="information-block">
       <?php if ( have_posts() ) : query_posts('p=86');while (have_posts()) : the_post(); ?>
        <span><?php the_title();?></span>
        <p><?php the_content(); ?></p>
        <a href="#consultation">Получить бесплатную консультацию</a><br><br>
       <? endwhile; endif; wp_reset_query(); ?>
       <?php if ( have_posts() ) : query_posts('p=88');while (have_posts()) : the_post(); ?>
        <span><?php the_title();?></span>
        <p><?php the_content(); ?></p>
       <? endwhile; endif; wp_reset_query(); ?>
       <?php if ( have_posts() ) : query_posts('p=90');while (have_posts()) : the_post(); ?>
        <span><?php the_title();?></span>
        <p><?php the_content(); ?></p>
        <a href="#recall-window">Вам перезвонить?</a><br><br>
       <? endwhile; endif; wp_reset_query(); ?>
      </div>
     </div>
     <?php else: ?>
     <?php if (get_the_ID()=='371'): ?>
      <div class="page-margin">
       <div class="top-block">
        <h3 class="top-block__title"><?php bloginfo("name")?></h3>
        <div class="top-block__work-time">
         <div>
          <?php if ( have_posts() ) : query_posts('p=50');while (have_posts()) : the_post(); ?>
           <?php the_content(); ?>
          <? endwhile; endif; wp_reset_query(); ?>
         </div>
         <a href="#recall-window">Вам перезвонить?</a> 
        </div>
       </div>
       <div class="menu-block">
        <div id="top_nav" class="header-block__menu" onClick="hide_show()" style="position:relative;">
         <div class="header-block__other-menu"><p>+375 (29) 259-56-52 ( МТС )</p><div>≡</div></div>
         <ul id="menu" onClick="hide_show()">
          <li><a href="/index.php">На главную</a></li>
          <li><a href="/index.php/value_information">Полезная информация</a></li>
          <li><a href="/index.php/contacts">Контакты</a></li>
         </ul>
        </div>
       </div>
       <div class="photos-block"> 
        <span>Фото наших работ</span>
        <div class="photos-block-align">
         <?php if ( have_posts() ) : query_posts('p=30');while (have_posts()) : the_post(); ?>
          <?php the_content(); ?>
         <? endwhile; endif; wp_reset_query(); ?>
        </div>
       </div>
      </div>
     <?php endif ?>
    <?php endif ?>
   <?php endif ?>
  <?php endif ?>
 <?php get_footer();?>