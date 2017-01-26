<?php if(!empty($products)){?>  
    <?php foreach ($products as $key => $product) {
        $product_title = $product->title;
        $product_url = elsayed_get_node_url_by_id($product->nid);
        $product_description = '';
        if(isset($product->body[LANGUAGE_NONE][0]['safe_value'])){
            $product_description = elsayed_cut_string($product->body[LANGUAGE_NONE][0]['safe_value'], 250);
        }
        $image = $GLOBALS['default_image'];
        if(isset($product->field_image[LANGUAGE_NONE][0]['uri'])){
            $image = image_style_url('thumbnail', $product->field_image[LANGUAGE_NONE][0]['uri']);
        }?>        
        <div class="view view-seventh">
            <a class="b-link-stripe b-animate-go swipebox"  title="<?php echo $product_title;?>">
            	<img src="<?php echo $image;?>" alt="<?php echo $product_title;?>" class="img-responsive">
				<div class="mask">
					<a href="<?php echo $product_url;?>" title="<?php echo $product_title;?>">
						<h4><?php echo $product_title;?></h4>
						<p><?php echo $product_description;?></p>
					</a>
				</div>
            </a>
        </div>
    <?php }?>         
    <?php $paging = elsayed_draw_paging($page_count, $page);
    echo $paging;?>  
<?php }else{ ?>
    <div style="width:100%;text-align:center;float:left"><?php echo __('No results found');?></div>
<?php }?>