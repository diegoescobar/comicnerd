    <div class="clear"></div>
	<div class="decoration"></div>
    <p class="breadcrumb"><a href="<?= base_url('login'); ?>">Login</a><em class="bdiv"></em> <a href="<?= base_url(); ?>">Home</a> <em class="bdiv"></em>Media Page </p>
    <div class="decoration"></div>
     
    
    <div class="content-box">
    
    <form method="get" action="#">
		<input type="text" name="query" value="<?php /*echo $_REQUEST['query'];*/ ?>">
			<select name="resource">
				<?php $resources_arr = array ('character','concept','origin','object','location','issue','story_arc','volume','publisher','person','team', 'video');
				foreach ($resources_arr AS $resources){
					echo '<option value="'.$resources.'"' /*. selected($_REQUEST['resource'], $resources )*/ .'>'.$resources.'</option>';
				}
				?>
			</select>
		<input type="submit" value="search">
	</form>

    
    	<div class="content-box-title">
        	<p class="left-title">Files hosted on the server</p>
            <div class="clear"></div>
        </div>


<? /*    	<div class="files-box">
        	<img class="replace-2x file-image" width="32" src="<?= base_url('images/files/jpg.png') ?>" alt="img">
            <p class="file-title">SomeImage.jpg</p>
            <a href="#" class="file-href file-open">Open/Close</a>
            <a href="#" class="file-href">Delete</a>       
            <div class="clear"></div>
        
        	<div class="file-show">
            	<img src="files/img.jpg" alt="img">
            </div>
        
        </div>
        <div class="files-decoration"></div>
*/
      
       
      	switch ($_REQUEST['resource']) :
    	case 'volume':
			foreach ( $comics->volume AS $volume  ){  ?>	
					
	    	<div class="files-box">
        	<img <? /*class="replace-2x file-image" width="32"*/?> src="<?= $volume->image->thumb_url //base_url('images/files/jpg.png') ?>" alt="img">
            <p class="file-title"><?= $volume->name . ' (' . $volume->start_year . ')' ?> </p>
			<p>
			Issue #<a href="<?= $volume->first_issue->id ?>"><?= $volume->first_issue->issue_number ?></a> - 
			#<a href="<?= $volume->last_issue->id ?>"><?= $volume->last_issue->issue_number ?></a></p>
            <a href="#" class="file-href">Delete</a>       
            <div class="clear"></div>
        </div>
        <div class="files-decoration"></div>
				<?	
			}
		break;
	
	    case 'object':
			foreach ($comics->object AS $object ){
				var_dump( $object ); //echo $object->description;
			}
		break;

	    case 'character':
			foreach ($comics->character AS $object ){
				var_dump( $object ); //echo $object->description;
			}
		break;

		case 'concept':
			foreach ($comics->concept AS $object ){
				var_dump( $object ); //echo $object->description;
			}
		break;
		case 'origin':
			foreach ($comics->origin AS $object ){
				var_dump( $object ); //echo $object->description;
			}
		break;
		case 'location':
			foreach ($comics->location AS $object ){
				var_dump( $object ); //echo $object->description;
			}
		break;
		case 'issue':
			foreach ($comics->issue AS $object ){

				var_dump(	$object->person_credits );
				
				?>	
					
	    	<div class="files-box">
        	<img <? /*class="replace-2x file-image" width="32"*/?> src="<?= $object->image->thumb_url //base_url('images/files/jpg.png') ?>" alt="img">
            <p class="file-title"><a hreg="comic/issue/<?= $object->id ?>"><?=  $comics->volume->name . ' ' . $object->name . ' (' . $object->cover_date . ')' ?> </p>
			<p>
			Issue #<?=  $comics->volume->issue_number; ?></p>
            <a href="#" class="file-href">Delete</a>       
            <div class="clear"></div>
        </div>
        <div class="files-decoration"></div>
				<?	
				
				
			}
		break;
		case 'story_arc':
			foreach ($comics->story_arc AS $object ){
				var_dump( $object ); //echo $object->description;
			}
		break;
		case 'publisher':
			foreach ($comics->publisher AS $object ){
				unset(  $object->aliases );
				unset(  $object->api_detail_url );
				unset(  $object->deck );
				var_dump( $object ); //echo $object->description;
			}
		break;
		case 'person':
			foreach ($comics->person AS $object ){
				var_dump( $object ); //echo $object->description;
			}
		break;
		case 'team':
			foreach ($comics->team AS $object ){
				var_dump( $object ); //echo $object->description;
			}
		break;
		case 'video':
			foreach ($comics->video AS $object ){
				var_dump( $object ); //echo $object->description;
			}
		break;
		default:
			echo 'empty';
	endswitch;

       
       ?>      

    </div>