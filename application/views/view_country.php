<?php include_once('header.php'); ?>
<div class="container">
<legend>View Country</legend>
    <div class="form-group row">
      <label for="brandName" class="col-md-12 col-form-label">CountryName(EN) : <?php echo $post->name_en; ?></label>
    </div>
    <div class="form-group row">
      <label for="brandName" class="col-md-12 col-form-label">CountryName(IT) : <?php echo $post->name_it; ?></label>
    </div>
    <div class="form-group row">
      <label for="brandName" class="col-md-12 col-form-label">CountryName(PL) : <?php echo $post->name_pl; ?></label>
    </div>
    <div class="form-group row">
      <label for="brandName" class="col-md-12 col-form-label">CountryCode : <?php echo $post->code; ?></label>
    </div>
        <br>
    <br>
     <?php echo anchor('country_controller/index','Back',['class'=>'btn btn-primary']); ?>
  </fieldset>








	









