<?php include_once('header.php'); ?>
<div class="container">
  <?php echo form_open('country_controller/addCountry',['class'=>'form-horizontal']); ?>
  <fieldset>
    <legend>Add Brand</legend>
    <div class="form-group row">
      <label for="brandName" class="col-md-2 col-form-label">CountryName (EN)</label>
      <div class="col-md-5">
        <?php echo form_input(['name'=>'name_en','placeholder'=>'Enter Country Name (en)','class'=>'form-control']);?>
      </div>
      <div class="col-md-5">
        <?php echo form_error('name_en','<div class="text-danger">','</div>'); ?>
      </div>
    </div>
    <div class="form-group row">
      <label for="brandName" class="col-md-2 col-form-label">CountryName (IT)</label>
      <div class="col-md-5">
        <?php echo form_input(['name'=>'name_it','placeholder'=>'Enter Country Name (it)','class'=>'form-control']);?>
      </div>
      <div class="col-md-5">
        <?php echo form_error('name_it','<div class="text-danger">','</div>'); ?>
      </div>
    </div>
    <div class="form-group row">
      <label for="brandName" class="col-md-2 col-form-label">CountryName (PL)</label>
      <div class="col-md-5">
        <?php echo form_input(['name'=>'name_pl','placeholder'=>'Enter Country Name (pl)','class'=>'form-control']);?>
      </div>
      <div class="col-md-5">
        <?php echo form_error('name_pl','<div class="text-danger">','</div>'); ?>
      </div>
    </div>
    <div class="form-group row">
      <label for="brandName" class="col-md-2 col-form-label">Code</label>
      <div class="col-md-5">
        <?php echo form_input(['name'=>'code','placeholder'=>'Enter Country Code','class'=>'form-control']);?>
      </div>
      <div class="col-md-5">
        <?php echo form_error('code','<div class="text-danger">','</div>'); ?>
      </div>
    </div>
    <br>
    <br>
    <?php echo form_submit(['name'=>'submit','value'=>'Submit','class'=>'btn btn-primary']); ?>
    <?php echo anchor('country_controller/index','Back',['class'=>'btn btn-primary']); ?>
  </fieldset>
  <?php echo form_close();?>
</div>