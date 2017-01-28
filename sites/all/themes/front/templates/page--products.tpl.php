<?php /**
 * @author Author "Mohamed Elsayed"  
 * @author Author Email "me@mohamedelsayed.net"
 * @link http://www.mohamedelsayed.net
 * @copyright Copyright (c) 2017 Programming by "http://www.mohamedelsayed.net"
 */?>
<?php global $base_url;?>    
<?php include_once 'common'.DS.'header.php';?>
<div class="facilities">
	<div class="container">
		<h3 class="tittle"><?php echo __('المنتجات');?></h3> 			
		<?php $arg1 = arg(1);
		 if(is_numeric($arg1)){
            $category = $arg1;
        }else{
            $category = 0;
        }      
        $home = 0;
        $limit = 3;
        $page = 1;
        if(isset($_GET['page'])){
            $page = $_GET['page'];
        }
        $return = elsayed_get_products($category, $home, $limit, $page);
        $page_count = $return['page_count'];
        $products = $return['items'];?>
        <?php include_once 'list_products.php';?>
    	<script type="text/javascript">
    	jQuery(function($) {
    		jQuery(".swipebox").swipebox();
		});
		</script>
		<div class="clearfix"></div>
	</div>
</div>
<?php include_once 'common'.DS.'footer.php';?>