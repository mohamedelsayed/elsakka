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
				<div class="col-md-4 w3_tabs_grid w3_tabs_grid_sub">
                	<div class="grid">
						<a href="images/1.mp4" class="lsb-preview" data-lsb-group="header">
							<figure class="effect-winston">
								<img src="<?php echo $base_url.'/'.path_to_theme();?>/img/16.jpg" class="img-responsive" alt=" " />
							</figure>
						</a>
					</div>
				</div>
				<div class="col-md-4 w3_tabs_grid w3_tabs_grid_sub">
					<div class="grid">
						<a href="images/13.jpg" class="lsb-preview" data-lsb-group="header">
							<figure class="effect-winston">
								<img src="<?php echo $base_url.'/'.path_to_theme();?>/img/17.jpg" class="img-responsive" alt=" " />			
							</figure>
						</a>
					</div>
				</div>
				<div class="col-md-4 w3_tabs_grid w3_tabs_grid_sub">
					<div class="grid">
						<a href="images/14.jpg" class="lsb-preview" data-lsb-group="header">
							<figure class="effect-winston">
								<img src="<?php echo $base_url.'/'.path_to_theme();?>/img/18.jpg" class="img-responsive" alt=" " />
										
							</figure>
						</a>
					</div>
				</div>
				<div class="col-md-4 w3_tabs_grid w3_tabs_grid_sub">
					<div class="grid">
						<a href="images/15.jpg" class="lsb-preview" data-lsb-group="header">
							<figure class="effect-winston">
								<img src="<?php echo $base_url.'/'.path_to_theme();?>/img/3.jpg" class="img-responsive" alt=" " />			
							</figure>
						</a>
					</div>
				</div>
				<div class="col-md-4 w3_tabs_grid w3_tabs_grid_sub">
					<div class="grid">
						<a href="images/17.jpg" class="lsb-preview" data-lsb-group="header">
							<figure class="effect-winston">
								<img src="<?php echo $base_url.'/'.path_to_theme();?>/img/5.jpg" class="img-responsive" alt=" " />		
							</figure>
						</a>
					</div>
				</div>
				<div class="col-md-4 w3_tabs_grid w3_tabs_grid_sub">
					<div class="grid">
						<a href="images/16.jpg" class="lsb-preview" data-lsb-group="header">
							<figure class="effect-winston">
								<img src="<?php echo $base_url.'/'.path_to_theme();?>/img/6.jpg" class="img-responsive" alt=" " />		
							</figure>
						</a>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<script src="js/lsb.min.js"></script>
			<script>
			$(window).load(function() {
				  $.fn.lightspeedBox();
				});
			</script>
		</div>
	</div>
</div>
<?php include_once 'common'.DS.'footer.php';?>