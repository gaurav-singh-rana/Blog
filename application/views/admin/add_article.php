<?php include_once('admin_header.php'); ?>
<div class="container">

	<?php echo form_open_multipart('admin/store_article',['class'=>'form-horizontal'])   ?>
	<?php echo form_hidden('user_id', $this->session->userdata('user_id')) ?>
  <?= form_hidden('created_at' , date('Y-m-d H:i:s'))  ?>
  <fieldset>
    <legend>Add Article</legend>
     <div class="row">
    	<div class="col-lg-6">
    		<div class="form-group">
      <label for="inputEmail" class="col-lg-4 control-label">Article Title</label>
      <div class="col-lg-8">
      	<?php echo form_input(['name'=>'title','class'=>'form-control','placeholder'=>'Article Title','value'=>set_value('title')]); ?>
        <!-- <input type="text" class="form-control" id="inputEmail" placeholder="User Name"> -->
      </div>
    </div>
    	</div>
    	<div class="col-lg-6">
    		<?php echo form_error('title');  ?>
    	</div>
    </div>
    <div class="row">
    	<div class="col-lg-6">
    		<div class="form-group">
      <label for="inputPassword" class="col-lg-4 control-label">Article Body</label>
      <div class="col-lg-8">
      	<?php echo form_textarea(['name'=>'body','class'=>'form-control','placeholder'=>'Article Body','value'=>set_value('body')] ); ?>
        <!-- <input type="password" class="form-control" id="inputPassword" placeholder="Password"> -->
      </div>
    </div>
    	</div>
      <!-- File Upload  -->
      
    	<div class="col-lg-6"> 
    		<?php echo form_error('body'); ?>


    	</div>
    </div>
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <!-- <button type="reset" class="btn btn-default">Cancel</button> -->
        <?php echo form_reset(['name'=>'reset','value'=>'Reset', 'class'=>'btn btn-default']),
        form_submit(['name'=>'submit','value'=>'Submit','class'=>'btn btn-primary']) ?>
        <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
      </div>
    </div>
  </fieldset>
</form>	
</div>
<?php include_once('admin_footer.php'); ?>