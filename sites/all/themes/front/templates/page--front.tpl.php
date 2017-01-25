<?php drupal_set_title('');?>
<?php global $base_url;?> 
<?php include_once 'header.php';
$data = elsayed_get_home_widgets();?>
<div data-vide-bg="<?php echo $base_url.'/'.path_to_theme();?>/video/sea">
<div class="container">
	<div class="row">
		<div class="jumbotron">
			<h1 class="small">مجموعة شركات <span class="bold">السقا للبلاسيتك</span></h1>
			<p class="big">تعتبر شركة السقا بلاستيك السقا فوم الشركة الرائدة بمصر والمصنعة لأفلام البولى إيثيلين المستخدمة فى تطبيقات وخدمات مختلفة مثل الزراعة ، والمزارع السمكية ، والتغليف المرن ، والتغليف الصناعى ، والأغشية المستخدمة فى أغراض العزل والتبطين.</p>
		</div>
	</div>
</div>
</div>
<?php if(isset($data['about']) && !empty($data['about'])){
	$item = $data['about'];
	$title = '';$body = '';
	if(isset($item->title)){
		$title = $item->title;
	}	
	if(isset($item->body[LANGUAGE_NONE][0]['value'])){
		$body = $item->body[LANGUAGE_NONE][0]['value'];
	}?>
	<div id="about" class="cta-1">
		<div class="container">
			<div class="row text-center white">
				<h1 class="cta-title"><?php echo $title;?></h1>
				<p class="cta-sub-title"><?php echo $body;?></p>
			</div>
		</div>
	</div>
<?php }?>
<div id="portfolio" class="section-padding">
	<div class="container">
		<?php if(isset($data['products']) && !empty($data['products'])){
			$item = $data['products'];
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
<div id="service" class="section-padding">
	<div class="container">
    <div class="row text-center white">
				<h1>مكتبة الفيديو</h1>
                <hr class="pg-titl-bdr-btm">
			</div>
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
<div id="contact" class="section-padding">
	<div class="container">
		<div class="row">
			<?php if(isset($data['contact']) && !empty($data['contact'])){
			$item = $data['contact'];
			$title = '';$body = '';
			if(isset($item->title)){
				$title = $item->title;
			}	
			if(isset($item->body[LANGUAGE_NONE][0]['value'])){
				$body = $item->body[LANGUAGE_NONE][0]['value'];
			}?>
				<div class="page-title text-center">
					<h1><?php echo $title;?></h1>
					<p><?php echo $body;?></p>
					<hr class="pg-titl-bdr-btm"></hr>
				</div>
			<?php }?>
            <div id="sendmessage">Your message has been sent. Thank you!</div>
            <div id="errormessage"></div>
            
			<div class="form-sec">
            	<form action="" method="post" role="form" class="contactForm">
                	<div class="col-md-4 form-group">
                        <input type="text" name="name" class="form-control text-field-box" id="name" placeholder="الاسم" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                        <div class="validation"></div>
                    </div>
                    <div class="col-md-4 form-group">
                        <input type="email" class="form-control text-field-box" name="email" id="email" placeholder="البريد الالكتروني" data-rule="email" data-msg="Please enter a valid email" />
                        <div class="validation"></div>
                    </div>
                    <div class="col-md-4 form-group">
                        <input type="text" class="form-control text-field-box" name="subject" id="subject" placeholder="موضوع" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                        <div class="validation"></div>
                    </div>
                    <div class="col-md-12 form-group">
                        <textarea class="form-control text-field-box" name="message" rows="5" data-rule="required" data-msg="الرسالة" placeholder="الرسالة"></textarea>
                        <div class="validation"></div>
        
                        <button class="button-medium" id="contact-submit" type="submit" name="contact">ارسال</button>
                    </div>
                </form>
            </div>
		</div>
	</div>
</div>
<?php include_once 'footer.php';?>
