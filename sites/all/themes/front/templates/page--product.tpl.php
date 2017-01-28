<?php /**
 * @author Author "Mohamed Elsayed"  
 * @author Author Email "me@mohamedelsayed.net"
 * @link http://www.mohamedelsayed.net
 * @copyright Copyright (c) 2017 Programming by "http://www.mohamedelsayed.net"
 */?>
<?php include_once 'common'.DS.'header.php';?>
<?php $nid = arg(1);
$product = node_load($nid);
if(!empty($product)){
    $product_title = $product->title;
    //$product_url = elsayed_get_node_url_by_id($product->nid);
    $product_description = '';
    if(isset($product->body[LANGUAGE_NONE][0]['value'])){
        $product_description = $product->body[LANGUAGE_NONE][0]['value'];
    }
    $image = $GLOBALS['default_image'];
    $default_image = $GLOBALS['default_image'];
    if(isset($product->field_image[LANGUAGE_NONE][0]['uri'])){
        $image = image_style_url('large', $product->field_image[LANGUAGE_NONE][0]['uri']);
        $default_image = image_style_url('default_size', $product->field_image[LANGUAGE_NONE][0]['uri']);
    }
    $field_category = '';
	$category_url = '';
    if(isset($product->field_category[LANGUAGE_NONE][0]['target_id'])){
        $category = node_load($product->field_category[LANGUAGE_NONE][0]['target_id']);
        if(!empty($category)){
        	$field_category = $category->title;
			$category_nid = $category->nid;
			$category_url = ' href="'.$base_url.'/'.'products/'.$category_nid.'" ';
		}
    }?>
    <div id="product-post">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div id="product-heading" style="padding: 0px;margin-bottom: 30px;">
                        <h2><?php echo $product_title;?></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12" style="margin-bottom: 30px;">
                    <div class="col-md-12 product_item">
                        <img style="width: 100%;" src="<?php echo $image;?>" alt="<?php echo $product_title;?>" />                       
                    </div>
                    <div>                        
                        <div class="col-md-12">
                            <h4><?php echo __('التصنيف:').' <a '.$category_url.' >'.$field_category.'</a>';?></h4>                        
                        </div>
                        <div class="col-md-12">
                            <h4><?php echo __('الوصف:');?></h4>
                            <?php echo $product_description;?>
                        </div>     
                    </div>
                </div>            
            </div>
        </div>
    </div>
<?php }?>
<?php include_once 'common'.DS.'footer.php';?>