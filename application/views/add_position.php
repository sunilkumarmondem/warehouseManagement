<?php include_once('header.php'); ?>
<div class="container">
	<?php echo form_open('position_controller/addPosition',['class'=>'form-horizontal']); ?>
	<fieldset>
		<legend>Add Brand</legend>
		<div class="form-group row">
			<label for="PositionName" class="col-md-2 col-form-label">PositionName</label>
			<div class="col-md-5">
				<?php echo form_input(['name'=>'PositionName','placeholder'=>'Enter PositionName','class'=>'form-control']);?>
			</div>
			<div class="col-md-5">
				<?php echo form_error('PositionName','<div class="text-danger">','</div>'); ?>
			</div>
		</div>
		<br>
		<br>
		<?php echo form_submit(['name'=>'submit','value'=>'Submit','class'=>'btn btn-primary']); ?>
		<?php echo anchor('welcome','Back',['class'=>'btn btn-primary']); ?>
	</fieldset>
	<?php echo form_close();?>
</div>