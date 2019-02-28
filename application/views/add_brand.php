<?php include_once('header.php'); ?>
<div class="container">
	<?php echo form_open('welcome/saveBrand',['class'=>'form-horizontal']); ?>
	<fieldset>
		<legend>Add Brand</legend>
		<div class="form-group row">
			<label for="brandName" class="col-md-2 col-form-label">BrandName</label>
			<div class="col-md-5">
				<?php echo form_input(['name'=>'BrandName','placeholder'=>'Enter Brand Name','class'=>'form-control']);?>
			</div>
			<div class="col-md-5">
				<?php echo form_error('BrandName','<div class="text-danger">','</div>'); ?>
			</div>
		</div>
		<br>
		<br>
		<?php echo form_submit(['name'=>'submit','value'=>'Submit','class'=>'btn btn-primary']); ?>
		<?php echo anchor('welcome','Back',['class'=>'btn btn-primary']); ?>
	</fieldset>
	<?php echo form_close();?>
</div>