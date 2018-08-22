					<div class="clear"></div>
					<div class="communication clear">
						<a href="#popup-order" class="bid popup-btn"></a>
						<a href="#popup-question" class="question popup-btn"></a>
					</div>
					<!-- nav -->
				</div><!-- /content -->
				<div class="clear"></div>
				<!-- wrapper -->
				<div class="wrapper">

					<nav class="nav clear" role="navigation">
						<?php html5blank_nav(); ?>
					</nav>
					<!-- /nav -->
				</div>
				<!-- /wrapper -->
				<!-- footer -->
				<footer class="footer" role="contentinfo">

					<!-- copyright -->
					<div class="copyright">
						<?php the_field('footer', 'options'); ?>
					</div>
					<!-- /copyright -->
					<!-- contacts -->
					<div class="contacts">
						<?php if ($phone = get_field('phone', 'options')) { ?>
							<div class="phone">Тел: <?php echo $phone; ?></div>
						<?php } ?>
						<?php if ($email = get_field('email', 'options')) { ?>
							<div class="email">E-mail: 7928223@technadzor77.com<?php /*echo $email;*/ ?></div>
						<?php } ?>
					</div>
					<!-- /contacts -->
				</footer>
				<!-- /footer -->

			</div>
			<!-- /wrapper -->
		</div>
		<!-- /full-width -->
		<div id="popup-callback" class="popup">
			<div class="description">
				<img src="<?php echo get_template_directory_uri(); ?>/img/call-man.png" alt="Call us">
				<h2>УКАЖИТЕ ВАШЕ ИМЯ И НОМЕР ТЕЛЕФОНА</h2>
				<p>и мы перезвоним Вам в ближайшее время</p>
			</div>
			<div class="fields">
				<?php echo do_shortcode('[contact-form-7 id="46" title="Online заявка"]'); ?>
			</div>
			<div class="clear"></div>
		</div>

		<div id="popup-order" class="popup">
			<h2>Заявка на заказ услуг</h2>
			<p>Заполните поля и укажите вопрос и мы Вам перезвоним</p> 
			<div class="fields">
				<?php echo do_shortcode('[contact-form-7 id="47" title="Online заявка"]'); ?>
			</div>
		</div>
		<div id="popup-question" class="popup">
			<h2>Что Вас интересует?</h2>
			<p>Заполните поля и укажите вопрос и мы Вам перезвоним</p>
			<div class="fields">
				<?php echo do_shortcode('[contact-form-7 id="48" title="Задать вопрос"]'); ?>
			</div>
		</div>

		<?php wp_footer(); ?>

		<!-- analytics -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-76126814-1', 'auto');
  ga('send', 'pageview');

</script>

<!-- Yandex.Metrika informer -->
<a href="https://metrika.yandex.ru/stat/?id=18957097&amp;from=informer"
target="_blank" rel="nofollow"><img src="//bs.yandex.ru/informer/18957097/2_1_FFFFFFFF_EFEFEFFF_0_pageviews"
style="width:80px; height:31px; border:0;" alt="Яндекс.Метрика" title="Яндекс.Метрика: данные за сегодня (просмотры)" onclick="try{Ya.Metrika.informer({i:this,id:18957097,lang:'ru'});return false}catch(e){}"/></a>
<!-- /Yandex.Metrika informer -->

<!-- Yandex.Metrika counter -->

<script type="text/javascript">
var yaParams = {/*Здесь параметры визита*/};
</script>

<script type="text/javascript">
(function (d, w, c) {
    (w[c] = w[c] || []).push(function() {
        try {
            w.yaCounter18957097 = new Ya.Metrika({id:18957097,
                    webvisor:true,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    trackHash:true,params:window.yaParams||{ }});
        } catch(e) { }
    });

    var n = d.getElementsByTagName("script")[0],
        s = d.createElement("script"),
        f = function () { n.parentNode.insertBefore(s, n); };
    s.type = "text/javascript";
    s.async = true;
    s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";

    if (w.opera == "[object Opera]") {
        d.addEventListener("DOMContentLoaded", f, false);
    } else { f(); }
})(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="//mc.yandex.ru/watch/18957097" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

	</body>
</html>
