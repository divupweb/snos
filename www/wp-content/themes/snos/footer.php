<div class="clr"></div>
<div class="footer"> 
 <div class="footer__align">
  <div class="footer__item">
    <table>
     <th><span>*</span></th>
     <th style="padding-top:25px;">
      Минск
     </th>
    </table>
  </div>
  <div class="footer__item">
   <table>
    <th><span>O</span></th>
    <th style="padding-top:25px;">
     <?php if ( have_posts() ) : query_posts('p=78');while (have_posts()) : the_post(); ?>
      <?php echo get_the_content(); ?>
     <? endwhile; endif; wp_reset_query(); ?>
    </th>
   </table>
  </div>
  <div class="footer__item">
   <table>
    <th><span>m</span></th>
    <th style="padding-top:25px;">
     <?php echo strip_tags(category_description(6))?>
    </th>
   </table>
  </div>
  <div class="clr"></div>
  <a href="#confidentiality"><span class="copyrights">Политика конфиденциальности сайта<br>© 2016 snos.by</span></a>
 </div>
 <div class="clr"></div>
 <div class="footer__bottom">
  <p style="font-family:Jura;color:white;text-align:center;">
   ИП  Жоров И.Л.<br>
   УНП 192249033<br>
  </p>
  <a href="http:\\nayan.by"> nayan.by</a>
 </div>
</div>
</main>
</div>
</div>
 <script>
  function validatephone(input) 
  {
   var validator = /^375-[0-9]{2}-[0-9]{3}-[0-9]{2}-[0-9]{2}$/;
   if (validator.test(input.value) === true) 
    input.setCustomValidity(""); 
   else 
    input.setCustomValidity("Формат ввода мобильного номера:375-XX-XXX-XX-XX");   
  }
 </script>
<?php wp_footer();?>
<!-- Begin Me-Talk -->
<script type='text/javascript'>
	(function(d, w, m) {
		window.supportAPIMethod = m;
		var s = d.createElement('script');
		s.type ='text/javascript'; s.id = 'supportScript'; s.charset = 'utf-8';
		s.async = true;
		var id = '0af7d818a46dac445d7efbb899e0e647';
		s.src = '//me-talk.ru/support/support.js?h='+id;
		var sc = d.getElementsByTagName('script')[0];
		w[m] = w[m] || function() { (w[m].q = w[m].q || []).push(arguments); };
		if (sc) sc.parentNode.insertBefore(s, sc); 
		else d.documentElement.firstChild.appendChild(s);
	})(document, window, 'MeTalk');
</script>
<!-- End Me-Talk -->
</body>
</html>