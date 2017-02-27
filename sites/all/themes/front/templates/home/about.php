<?php if(isset($home_widgets['about']) && !empty($home_widgets['about'])){
	$item = $home_widgets['about'];
	$title = '';$body = '';
	if(isset($item->title)){
		$title = $item->title;
	}	
	if(isset($item->body[LANGUAGE_NONE][0]['value'])){
		$body = elsayed_cut_string_words($item->body[LANGUAGE_NONE][0]['value'], 50);
	}
	$item_url = elsayed_get_node_url_by_id($item->nid);?>
	<div id="about" class="cta-1">
		<div class="container">
			<div class="row text-center white">
				<h1 class="cta-title"><?php echo $title;?></h1>
				<div class="cta-sub-title"><?php echo $body;?></div>
				<div class="col-md-12">
	            	<a class="inpt" href="<?php echo $item_url;?>"><?php echo __('المزيد');?></a>
	            </div>
			</div>
		</div>
	</div>
<?php }?>