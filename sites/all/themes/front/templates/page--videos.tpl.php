<?php /**
 * @author Author "Mohamed Elsayed"  
 * @author Author Email "me@mohamedelsayed.net"
 * @link http://www.mohamedelsayed.net
 * @copyright Copyright (c) 2017 Programming by "http://www.mohamedelsayed.net"
 */?>
<?php global $base_url;?>    
<?php include_once 'common'.DS.'header.php';?>
<div class="facilities">
	<div class="gallery">
		<div class="container">
			<div class="agileinfo_gallery_grids">
                       <h3 class="tittle">مكتبة الفديو </h3>
                       <div id="myBtn" class="view_1 view_1-eighth filimg col-md-4 col-sm-4 col-xs-12" data-myorder="2">
						<a  href="#'">
				    		<img src="<?php echo $base_url.'/'.path_to_theme();?>/img/16.jpg" class="img-responsive" alt=" " />
			    		</a>
			    		<div class="mask">
			    			<a title="" href="#" onclick="open_popup();">
			    				<h4>منتج</h4>
			    			</a>
		    			</div>                     
                    <div id="mesagepopboxpopoup" class="mesage-pop" >
					    <div id="mesagecontent">      <h4><div id="closepopoup" class="closepopoup">X</div></h4><div class="loading"></div>
					                      <iframe src="https://www.youtube.com/embed/rjjgaYIhi8Y" allowfullscreen="" width="100%" height="100%" frameborder="0"></iframe>
					</div>
					    <div class="mesage-pop-bg"></div>
					</div>  
	    			</div>
				
                   
				
				
				
				<div class="clearfix"> </div>
			</div>
			<script>
			function open_popup(){
    //jQuery("#mesagepopboxpopoup #mesagecontent").html(content); 
    jQuery("#mesagepopboxpopoup").addClass("alert"); 
    jQuery("#mesagepopboxpopoup").show();
    jQuery('body').addClass("mobile-menu-opend");       
}
function close_popup(){
    jQuery("#mesagepopboxpopoup").hide(); 
    //jQuery("#mesagepopboxpopoup #mesagecontent").html('');
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