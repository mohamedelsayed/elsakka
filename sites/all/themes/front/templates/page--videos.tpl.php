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
                       <h3 class="tittle">مكتبة الفديو </h3>
                       <div id="myBtn" class="view_1 view_1-eighth filimg col-md-4 col-sm-4 col-xs-12" data-myorder="2">
						<a  href="#'">
				    		<img src="<?php echo $base_url.'/'.path_to_theme();?>/img/16.jpg" class="img-responsive" alt=" " />
			    		</a>
			    		<div class="mask">
			    			<a title="" href="#">
			    				<h4>منتج</h4>
			    			</a>
		    			</div>
                        <!-- The Modal -->
                    <div id="myModal" class="modal">
                    
                      <!-- Modal content -->
                      <div class="modal-content">
                        <span class="close">&times;</span>
                        <p>Some text in the Modal..</p>
                      </div>
                    
                    </div>
	    			</div>
				
                   
				
				
				
				<div class="clearfix"> </div>
			</div>
			<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
		</div>
	</div>
</div>
<?php include_once 'common'.DS.'footer.php';?>