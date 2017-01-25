<div id="portfolio" class="section-padding">
	<div class="container">
		<?php if(isset($home_widgets['products']) && !empty($home_widgets['products'])){
			$item = $home_widgets['products'];
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
		<div class="port-sec">
			<div class="col-md-12 fil-btn text-center">
				<div class="filter wrk-title active" data-filter="all">الكل</div>
				<div class="filter wrk-title" data-filter=".category-1">منتج</div>
				<div class="filter wrk-title" data-filter=".category-2">منتج</div>
				<div class="filter wrk-title lst-cld" data-filter=".category-3">منتج</div>
			</div>
			<div id="Container">
				<div class="view_1 view_1-eighth filimg mix category-1 category-3 col-md-4 col-sm-4 col-xs-12" data-myorder="2">
					<a href="#"><img src="<?php echo $base_url.'/'.path_to_theme();?>/img/fea1.jpg" class="img-responsive"></a> 
                    <div class="mask">
				<a href="#"><h4>اضغط هنا</h4></a>
			</div>
				</div>
				<div class="view_1 view_1-eighth filimg mix category-2 col-md-4 col-sm-4 col-xs-12" data-myorder="4">
					<a href="#"><img src="<?php echo $base_url.'/'.path_to_theme();?>/img/fea2.jpg" class="img-responsive"></a>
                    <div class="mask">
				<a href="#"><h4>اضغط هنا</h4></a>
			</div>
				</div>
				<div class="view_1 view_1-eighth filimg mix category-1 col-md-4 col-sm-4 col-xs-12" data-myorder="1">
					<a href="#"><img src="<?php echo $base_url.'/'.path_to_theme();?>/img/fea3.jpg" class="img-responsive"></a>
                    <div class="mask">
				<a href="#"><h4>اضغط هنا</h4></a>
			</div>								
				</div>
				<div class="view_1 view_1-eighth filimg mix category-2 category-3 col-md-4 col-sm-4 col-xs-12" data-myorder="8">
					<a href="#"><img src="<?php echo $base_url.'/'.path_to_theme();?>/img/fea4.jpg" class="img-responsive"></a>
                    <div class="mask">
				<a href="#"><h4>اضغط هنا</h4></a>
			</div>								
				</div>
				<div class="view_1 view_1-eighth filimg mix category-2 col-md-4 col-sm-4 col-xs-12" data-myorder="8">
					<a href="#"><img src="<?php echo $base_url.'/'.path_to_theme();?>/img/fea5.jpg" class="img-responsive"></a>
                    <div class="mask">
				<a href="#"><h4>اضغط هنا</h4></a>
			</div>
				</div>
				<div class="view_1 view_1-eighth filimg mix category-2 category-3 col-md-4 col-sm-4 col-xs-12" data-myorder="8">
					<a href="#"><img src="<?php echo $base_url.'/'.path_to_theme();?>/img/fea2.jpg" class="img-responsive"></a>
                    <div class="mask">
				<a href="#"><h4>اضغط هنا</h4></a>
			</div>
				</div>
                <div class="col-md-12">
                <a class="inpt" href="#">اعرف المزيد</a>
                </div>
			</div>
		</div>
	</div>
</div>