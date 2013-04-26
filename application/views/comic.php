    <div class="clear"></div>
	<div class="decoration"></div>
    <p class="breadcrumb"><a href="<?= base_url('login'); ?>">Login</a><em class="bdiv"></em> <a href="<?= base_url(); ?>">Home</a> <em class="bdiv"></em>About Comic </p>
    <div class="decoration"></div>
    
	<div class="content-box">
    	<div class="content-box-title">
        	<p class="left-title">                
<?php  if (!empty($comic)){ echo $comic->volume->name . ' #'. $comic->issue_number; } ?></p>
            <div class="clear"></div>
        </div>
        <div class="content-box-container">
        	<h4 class="heading left-text">A full-width paragraph</h4>
            <p class="full-width">
            	Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                Proin at nulla non felis aliquam dapibus et at enim. 
                Nam vel velit id eros lobortis bibendum. Mauris suscipit ante neque, 
                at scelerisque urna. Sed in tellus in purus consequat auctor nec in lacus.
                
		<?php  if (!empty($comic)){
				echo $comic->volume->name;
				echo '#'. $comic->issue_number."\r";
				echo $comic->name."\r";
				echo '<img src="'.$comic->image->thumb_url . '"/>'."\r";
				echo $comic->description; 
				
		}	?>

                
            </p>
        </div>
    </div>   
    
    <div class="content-box">
    	<div class="content-box-title">
        	<p class="left-title">User Interface Elements</p>
            <div class="clear"></div>        
        </div>
    	<div class="content-box-container">
            <a href="#" class="checkbox2">Check Me!</a>
        </div>
    </div>