<div id="contact" class="section-padding">
	<div class="container">
		<div class="row">
			<?php if(isset($home_widgets['contact']) && !empty($home_widgets['contact'])){
			$item = $home_widgets['contact'];
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