<div class="fix-center1">
    <div id="upload-success">Your file </div>
    <div id="upload-highlight"><?php echo($upload_data['file_name']) ?> </div>
    <div id="upload-success-cont">is successfully uploaded</div><br/><br/>
    <label id="layer">Step 2</label> <br>
    <div id="content">Please select a dataset below to view in the map</div>
    <div id="success">
    <?php 
    $file = './uploads/'.$upload_data['file_name'];
    $handle = fopen($file, "r");

$row = 1;
if (($data = fgetcsv($handle, 0, ";","'")) !== FALSE) 
{
    
    if($row == 1)
    {
	foreach ($data as $str)
	$check  = explode(",", $str);
	echo '<select>';	
		   
	foreach ($check as $ch)
	{
	
	    
	    echo '<option>'.$ch.'</option>';
	
	
	}
	echo'</select>';
  
    }

}
      
    ?>
	</div><!--  -->
	<?php echo form_open('showmap'); ?>
	<div id="showmap">
	    <input type="submit" class="btn btn-success" value="Show Map"/>
	</div>
	<?php echo form_close();?>
</div><!-- fix center  -->


	     
