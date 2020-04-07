
	<?php
		foreach ($scripts['foot'] as $file)
		{
			$url = starts_with($file, 'http') ? $file : base_url($file);
			echo "<script src='$url'></script>".PHP_EOL;
		}
	?>

	<?php // Google Analytics ?>
	<?php $this->load->view('_partials/ga') ?>



<!--<script type="text/javascript" src="/JS/TouchNav.js"></script>-->
<!-- GOOGLE SEARCH TAGS -->
<script type="application/ld+json">
{ "@context": "https://schema.org/",
  "@type": "Organization",
  "url": "https://www.buddywisher.com/",
  "logo": "https://www.buddywisher.com/assets/dist/images/logo.png",
  "sameAs" : [ "https://www.facebook.com/buddywishercards",
    "https://twitter.com/Thebuddywisher",
    "https://uk.pinterest.com/thebuddywisher/",
    "https://instagram.com/thebuddywisher/",
    "https://www.youtube.com/user/TheBuddywisher"] 
}
</script>
<!-- END GOOGLE SEARCH TAGS -->


<!-- Remarketing Tag-->

<!-- Google Code for Remarketing Tag -->
<!--------------------------------------------------
Remarketing tags may not be associated with personally identifiable information or placed on pages related to sensitive categories. See more information and instructions on how to setup the tag on: http://google.com/ads/remarketingsetup
--------------------------------------------------->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 1048322468;
var google_custom_params = window.google_tag_params;
var google_remarketing_only = true;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/1048322468/?value=0&amp;guid=ON&amp;script=0"/>
</div>
</noscript> 
<!-- End Remarketing Tag-->

<!-- CS Tag>
<script type="text/javascript">
(function () {
  window._uxa = window._uxa || [];
  try{
    if (typeof dataLayer !== 'undefined'){
        for (var i=0; i<dataLayer.length; i++){
            if (typeof dataLayer[i].pageCategory !== undefined){
                window._uxa.push(['setCustomVariable', 1, 'Page Category', dataLayer[i].pageCategory, 3]);
            }
        }
    }
  }
  catch(error){}
  if (typeof CS_CONF === 'undefined') {
    window._uxa.push(['setPath', window.location.pathname+window.location.hash.replace('#','?__')]);
    var mt = document.createElement("script"); mt.type = "text/javascript"; mt.async = true;
    mt.src = "//t.contentsquare.net/uxa/2cb7e78297509.js";
    document.getElementsByTagName("head")[0].appendChild(mt);
  }
  else {
    window._uxa.push(['trackPageview', window.location.pathname+window.location.hash.replace('#','?__')]);
  }
})();

</script> 
<!-- End CS Tag>

<!-- AF Tag>
<script>
(function(w,e,b,g,a,i,n,s){w['ITCLKOBJ']=a;w[a]=w[a]||function(){(w[a].q=w[a].q||[]).push(arguments)},w[a].l=1*new Date();i=e.createElement(b),n=e.getElementsByTagName(b)[0];i.async=1;i.src=g;n.parentNode.insertBefore(i,n)})(window,document,'script','https://analytics.webgains.io/clk.min.js','ITCLKQ');
ITCLKQ('set', 'internal.cookie', true);
ITCLKQ('set', 'internal.api', true);
ITCLKQ('click');
</script> 
<!-- End AF Tag>

<!-- Freshchat integration >
 
    
<!-- Twitter Tracking>


<!-- Twitter universal website tag code >
<script>
!function(e,t,n,s,u,a){e.twq||(s=e.twq=function(){s.exe?s.exe.apply(s,arguments):s.queue.push(arguments);
},s.version='1.1',s.queue=[],u=t.createElement(n),u.async=!0,u.src='//static.ads-twitter.com/uwt.js',
a=t.getElementsByTagName(n)[0],a.parentNode.insertBefore(u,a))}(window,document,'script');
// Insert Twitter Pixel ID and Standard Event data below
twq('init','o1wc3');
twq('track','PageView');
</script>
<!-- End Twitter universal website tag code --> 

</body>
</html>