<?php /**
 * @author Author "Mohamed Elsayed"  
 * @author Author Email "me@mohamedelsayed.net"
 * @link http://www.mohamedelsayed.net
 * @copyright Copyright (c) 2017 Programming by "http://www.mohamedelsayed.net"
 */?>
<?php global $base_url;?>    
<?php include_once 'common'.DS.'header.php';?>
<?php $page_title = __('مكتبة الفيديو');
drupal_set_title($page_title);?>
<div id="mesagepopboxpopoup" class="mesage-pop" >
	<div id="mesagecontent">
		<h4><div class="vidoe_popup_title"></div><div id="closepopoup" class="closepopoup">X</div></h4>
		<div id="mesagecontent_in">
		</div>
	</div>
	<div class="mesage-pop-bg"></div>
</div>
<div class="facilities">
	<div class="gallery">
		<div class="container">
			<div class="agileinfo_gallery_grids">
				<h3 class="tittle"><?php echo $page_title;?></h3>
				<?php $home = 0;$limit = 3;$page = 1;$category = 0;
		        if(isset($_GET['page'])){
		            $page = $_GET['page'];
		        }
		        $return = elsayed_get_videos($category, $home, $limit, $page);
		        $page_count = $return['page_count'];
		        $videos = $return['items'];?>
		        <?php include_once 'list_videos.php';?>				
				<div class="clearfix"> </div>
			</div>
			<script type="text/javascript">
			function open_popup(content_class, vidoe_popup_title){
				var content = jQuery('.'+content_class).html();
				jQuery("#mesagepopboxpopoup #mesagecontent_in").html(content); 
				jQuery('.vidoe_popup_title').html(vidoe_popup_title);
				jQuery("#mesagepopboxpopoup").addClass("alert"); 
				jQuery("#mesagepopboxpopoup").show();
				jQuery('body').addClass("mobile-menu-opend");       
			}
			function close_popup(){
				jQuery("#mesagepopboxpopoup #mesagecontent_in").html('');
				jQuery('.vidoe_popup_title').html('');
				jQuery("#mesagepopboxpopoup").hide(); 				
				jQuery("#mesagepopboxpopoup").removeClass("alert");
				jQuery('body').removeClass("mobile-menu-opend");          
			}
			jQuery(document).ready(function() {
				jQuery("#mesagepopboxpopoup").on("click",".closepopoup", function(){
					close_popup();            
				});
				jQuery('.mesage-pop-bg').click(function(){
					close_popup();
				});
			});
			</script>
		</div>
	</div>
</div>
<?php include_once 'common'.DS.'footer.php';?>