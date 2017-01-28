<div id="service" class="section-padding">
	<div class="container">
		<?php if(isset($home_widgets['videos']) && !empty($home_widgets['videos'])){
			$item = $home_widgets['videos'];
			$title = '';$body = '';
			if(isset($item->title)){
				$title = $item->title;
			}	
			if(isset($item->body[LANGUAGE_NONE][0]['value'])){
				$body = $item->body[LANGUAGE_NONE][0]['value'];
			}?>
			<div class="row">
				<div class="page-title text-center">
					<h1><?php echo $title;?></h1>
					<p><?php echo $body;?></p>
					<hr class="pg-titl-bdr-btm"></hr>
				</div>
			</div>
		<?php }?>
		<div class="content-bottom">
			<script type="text/javascript">
				jQuery(document).ready(function () {
					jQuery('#horizontalTab').easyResponsiveTabs({
						type: 'default', //Types: default, vertical, accordion           
						width: 'auto', //auto or any width like 600px
						fit: true   // 100% fit in a container
					});
				});
			   	</script>
				<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
			  	<ul class="resp-tabs-list">
				  <li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span><img src="<?php echo $base_url.'/'.path_to_theme();?>/img/v1.jpg" class="img-responsive" alt=""/></span>
				  <p>injustice game play</p></li>
				  <li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span><img src="<?php echo $base_url.'/'.path_to_theme();?>/img/v2.jpg" class="img-responsive" alt=""/></span>
				  <p>injustice game play</p></li>
				  <li class="resp-tab-item" aria-controls="tab_item-3" role="tab"><span><img src="<?php echo $base_url.'/'.path_to_theme();?>/img/v1.jpg" class="img-responsive" alt=""/></span>
				  <p>injustice game play</p></li>
				  <div class="clear"></div>
			  </ul>		
			  <!---->		  	 
			 <div class="resp-tabs-container">
				  <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
					 <div class="facts">
							<iframe src="https://www.youtube.com/embed/dSiBDEUyl9Y" frameborder="0" allowfullscreen></iframe>
					 </div>
				 </div>		
				 <div class="tab-2 resp-tab-content" aria-labelledby="tab_item-1">
					  <div class="facts">
							<iframe src="https://www.youtube.com/embed/WSTWAcwaakk" frameborder="0" allowfullscreen></iframe>
					 </div> 
				  </div> 
				 <div class="tab-3 resp-tab-content" aria-labelledby="tab_item-1">
					  <div class="facts">
							<iframe src="https://www.youtube.com/embed/l27-3NJqpiA" frameborder="0" allowfullscreen></iframe>
					 </div> 
				  </div>
			  </div>
			 <div class="clearfix"></div>
	  </div>	

	 </div>
	</div>
</div>