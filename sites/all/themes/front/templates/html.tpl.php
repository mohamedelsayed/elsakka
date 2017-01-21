<?php
/**
 * @author Author "Mohamed Elsayed"  
 * @author Author Email "me@mohamedelsayed.net"
 * @link http://www.mohamedelsayed.net
 * @copyright Copyright (c) 2017 Programming by "http://www.mohamedelsayed.net"
 */
$social_image = '';
$GLOBALS['meta_description'] = '';
$GLOBALS['meta_keywords'] = '';
$sitelang = elsayed_get_language_from_url();
$base_url_with_lang = elsayed_get_base_url_with_lang();?>
<!DOCTYPE html>
<html lang="en" class=" js no-touch">
<head>
        <!-- Basic Page Needs ================================================== -->
        <meta charset="utf-8">
        <title><?php echo $head_title;?></title>
        <meta property="og:image" content="<?php echo $social_image; ?>">
        <meta name="twitter:image" content="<?php echo $social_image; ?>">
        <meta name="description" content="<?php echo $GLOBALS['meta_description']; ?>">
        <meta name="keywords" content="<?php echo $GLOBALS['meta_keywords']; ?>">
        <meta name="author" content="Mohamed Elsayed">
        <script type="text/javascript">
            var base_url_with_lang = '<?php echo $base_url_with_lang;?>';
            var base_url = '<?php echo $GLOBALS['base_url'];?>';
        </script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php print $styles;?>
        <?php print $scripts;?>
        <script type="text/javascript">
		//<![CDATA[
		jQuery(document).ready(function(){		
			jQuery("#jquery_jplayer_1").jPlayer({
				ready: function () {
					jQuery(this).jPlayer("setMedia", {
						title: "Big Buck Bunny",
						m4v: "http://www.jplayer.org/video/m4v/Big_Buck_Bunny_Trailer.m4v",
						poster: "img/vid.png"
					});
				},
				swfPath: "../../dist/jplayer",
				supplied: "m4v",
				size: {
					width: "379px",
					height: "250px",
					cssClass: "jp-video-360p"
				},
				useStateClassSkin: true,
				autoBlur: false,
				smoothPlayBar: true,
				keyEnabled: true,
				remainingDuration: true,
				toggleDuration: true
			});
		});
		//]]>
		</script> 
    </head>    
    <body class="<?php print $classes;?>" <?php print $attributes; ?>>       
        <?php print $page_top; ?>
        <?php print $page; ?>
        <?php print $page_bottom;?>          
        <?php if(variable_get('google_analytics_propertyid') != ''){?>
            <script type = "text/javascript">
                (function(i, s, o, g, r, a, m) {
                    i['GoogleAnalyticsObject'] = r;
                    i[r] = i[r] || function() {
                        (i[r].q = i[r].q || []).push(arguments)
                    }, i[r].l = 1 * new Date();
                    a = s.createElement(o),
                            m = s.getElementsByTagName(o)[0];
                    a.async = 1;
                    a.src = g;
                    m.parentNode.insertBefore(a, m)
                })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
                ga('create', '<?php echo variable_get('google_analytics_propertyid'); ?>', 'auto');
                ga('send', 'pageview');
            </script>	
        <?php }?>        
    </body>
</html>