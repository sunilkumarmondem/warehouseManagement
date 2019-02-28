<?php include_once('header.php'); ?>
<div class="container">
	
  <?php echo form_open("country_controller/changeCountry/{$post->CountryID}",['class'=>'form-horizontal']); ?>
  <fieldset>
    <legend>Edit Country</legend>
    <div class="form-group row">
      <label for="brandName" class="col-md-2 col-form-label">CountryName(En)</label>
      <div class="col-md-5">
        <?php echo form_input(['name'=>'name_en','placeholder'=>'Enter CountryName (en)','class'=>'form-control','value'=>set_value('name_en',$post->name_en)]);?>
      </div>
      <div class="col-md-5">
      	<?php echo form_error('name_en','<div class="text-danger">','</div>'); ?>
      </div>
    </div>
    <div class="form-group row">
      <label for="brandName" class="col-md-2 col-form-label">CountryName(It)</label>
      <div class="col-md-5">
        <?php echo form_input(['name'=>'name_it','placeholder'=>'Enter CountryName (it)','class'=>'form-control','value'=>set_value('name_it',$post->name_it)]);?>
      </div>
      <div class="col-md-5">
        <?php echo form_error('name_it','<div class="text-danger">','</div>'); ?>
      </div>
    </div>
    <div class="form-group row">
      <label for="brandName" class="col-md-2 col-form-label">CountryName(Pl)</label>
      <div class="col-md-5">
        <?php echo form_input(['name'=>'name_pl','placeholder'=>'Enter CountryName (pl)','class'=>'form-control','value'=>set_value('name_pl',$post->name_pl)]);?>
      </div>
      <div class="col-md-5">
        <?php echo form_error('name_pl','<div class="text-danger">','</div>'); ?>
      </div>
    </div>
    <div class="form-group row">
      <label for="brandName" class="col-md-2 col-form-label">CountryCode</label>
      <div class="col-md-5">
        <?php echo form_input(['name'=>'code','placeholder'=>'Enter code','class'=>'form-control','value'=>set_value('code',$post->code)]);?>
      </div>
      <div class="col-md-5">
        <?php echo form_error('code','<div class="text-danger">','</div>'); ?>
      </div>
    </div>
    <br>
    <br>
    
    <?php echo form_submit(['name'=>'submit','value'=>'Update','class'=>'btn btn-primary']); ?>
    <?php echo anchor('country_controller/index','Back',['class'=>'btn btn-primary']); ?>
  </fieldset>
  <?php echo form_close();?>
</div>
