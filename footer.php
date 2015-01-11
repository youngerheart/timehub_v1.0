<!-- Footer -->
</div>
    <div class="home_footer"> 
    <span>CopyRight 2014-2015 <?php bloginfo('name'); ?>
        &nbsp;|&nbsp; Code By <a href="/younger的栖息地/">Younger</a>
    </span> 
</div>
<a id="back_top"><span>top</span><img src="<?php bloginfo('template_directory'); ?>/images/top.png"></a>
<!--end wrapper-->
<?php wp_footer(); ?>
<script type="text/javascript">
	function val(obj){
		return document.getElementById(obj);
	}
	val('back_top').onclick = pageScroll;

	function pageScroll() { 
		window.scrollBy(0,-100); 
		scrolldelay = setTimeout('pageScroll()',10); 
		if(document.body.scrollTop <= 0)clearTimeout(scrolldelay);
	} 
	
	function showbacktop(){
		if(document.body.scrollTop>800)val('back_top').style.display="block";
		else val('back_top').style.display="none";
	};
	window.onscroll = showbacktop;
	
</script>
<!-- google analytics -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-54689054-1', 'auto');
  ga('send', 'pageview');

</script>
</body>
</html>