<div class="fix-center">
<label id="layer">Step 1</label> <br>
<div class="text-trans">
    <h3> Upload the open data filesss</h3> <h6>(* CSV and Microsoft Excel file only)</h6><br>
</div>
<div class="crimson">
<?php echo $error;?>
</div>
<?php echo form_open_multipart('upload/do_upload');?>
<input class="inputype" id="myfile" type="file" name="userfile" />
<br /><br />
<input type="submit" class="btn btn-primary" name="submit" value="upload" />
<?php echo form_close() ?>
</form>
</div>	     
