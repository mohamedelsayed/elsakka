<?php elsayed_redirect_user_to_admin();
global $base_url;?>   
<div class="center-container">
	<nav class="navbar navbar-default">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a title="<?php echo variable_get('site_name');?>"  class="navbar-brand" href="<?php echo $base_url;?>">
					<img alt="<?php echo variable_get('site_name');?>" src="<?php echo $base_url.'/'.path_to_theme();?>/img/logo.png" class="logo">
				</a>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav navbar-right">
					<li class="active"><a href="#banner"><?php echo __('الرئيسية');?></a></li>
					<li><a href="#about"><?php echo __('عن الشركة');?></a></li>
					<li><a href="#portfolio"><?php echo __('المنتجات');?></a></li>
					<li><a href="#service"><?php echo __('مكتبة الفيديو');?></a></li>
					<li><a href="#contact"><?php echo __('اتصل بنا');?></a></li>
				</ul>
				<a title="<?php echo variable_get('site_name');?>"  class="navbar-brand" href="<?php echo $base_url;?>">
					<img  alt="<?php echo variable_get('site_name');?>"  src="<?php echo $base_url.'/'.path_to_theme();?>/img/logo2.png" class="logo2">
				</a>
			</div>
		</div>
	</nav>
</div>