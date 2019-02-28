<?php include_once('header.php'); ?>
<div class="container">
  <?php echo form_open('customer_controller/saveCustomer',['class'=>'form-horizontal']); ?>
  <fieldset>
    <legend>Add Brand</legend>
    <div class="form-group row">
      <label for="CustomerName" class="col-md-2 col-form-label">CustomerName</label>
      <div class="col-md-5">
        <?php echo form_input(['name'=>'CustomerName','placeholder'=>'Enter CustomerName','class'=>'form-control']);?>
      </div>
      <div class="col-md-5">
        <?php echo form_error('CustomerName','<div class="text-danger">','</div>'); ?>
      </div>
    </div>
    <div class="form-group row">
      <label for="Website" class="col-md-2 col-form-label">Website</label>
      <div class="col-md-5">
        <?php echo form_input(['name'=>'website','placeholder'=>'Enter Website','class'=>'form-control']);?>
      </div>
      <div class="col-md-5">
        <?php echo form_error('website','<div class="text-danger">','</div>'); ?>
      </div>
    </div>
    <div class="form-group row">
      <label for="Description" class="col-md-2 col-form-label">Description</label>
      <div class="col-md-5">
        <?php echo form_textarea(['name'=>'description','placeholder'=>'Enter Description','class'=>'form-control','rows'=>'4']);?>
      </div>
      <div class="col-md-5">
        <?php echo form_error('description','<div class="text-danger">','</div>'); ?>
      </div>
    </div>
    <br>
    <br>
    <?php echo form_submit(['name'=>'submit','value'=>'Submit','class'=>'btn btn-primary']); ?>
    <?php echo anchor('customer_controller/index','Back',['class'=>'btn btn-primary']); ?>
  </fieldset>
  <?php echo form_close();?>
</div>