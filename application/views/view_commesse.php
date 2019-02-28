<?php include_once('header.php'); ?>
<div class="container">
  <legend>View Commesse</legend>
    <div class="form-group row">
      <label for="brandName" class="col-md-12 col-form-label">YEAR : <?php echo $post->year; ?></label>
    </div>
    <div class="form-group row">
      <label for="brandName" class="col-md-12 col-form-label">CODE : <?php echo $post->code; ?></label>
    </div>
    <div class="form-group row">
      <label for="brandName" class="col-md-12 col-form-label">NAME (En) : <?php echo $post->name_en; ?></label>
    </div>
    <div class="form-group row">
      <label for="brandName" class="col-md-12 col-form-label">NAME (It) : <?php echo $post->name_it; ?></label>
    </div>
    <div class="form-group row">
      <label for="brandName" class="col-md-12 col-form-label">NAME (It) : <?php echo $post->name_it; ?></label>
    </div>
    <div class="form-group row">
      <label for="brandName" class="col-md-12 col-form-label">NAME (Pl) : <?php echo $post->name_pl; ?></label>
    </div>
    <div class="form-group row">
      <label for="brandName" class="col-md-12 col-form-label">PLANT NAME : <?php echo $post->PlantName; ?></label>
    </div>
    <div class="form-group row">
      <label for="brandName" class="col-md-12 col-form-label">CUSTOMER ORDER : <?php echo $post->customer_order; ?></label>
    </div>
    <div class="form-group row">
      <label for="brandName" class="col-md-12 col-form-label">ORDER NOTES : <?php echo $post->order_notes; ?></label>
    </div>
    <div class="form-group row">
      <label for="brandName" class="col-md-12 col-form-label">CREATION DATE : <?php echo $post->creation_date; ?></label>
    </div>
    <div class="form-group row">
      <label for="brandName" class="col-md-12 col-form-label">IS SPARE PARTS : <?php echo $post->is_spare_parts; ?></label>
    </div>
    <div class="form-group row">
      <label for="brandName" class="col-md-12 col-form-label">STATUS : <?php echo $post->status; ?></label>
    </div>
    <div class="form-group row">
      <label for="brandName" class="col-md-12 col-form-label">DOCUMENTATION : <?php echo $post->documentation; ?></label>
    </div>
    <div class="form-group row">
      <label for="brandName" class="col-md-12 col-form-label">DOCUMENTATION PERCENTAGE : <?php echo $post->documentation_percentage; ?></label>
    </div>
    <div class="form-group row">
      <label for="brandName" class="col-md-12 col-form-label">DOCUMENTATION SIGNED : <?php echo $post->documentation_signed; ?></label>
    </div>
    <div class="form-group row">
      <label for="brandName" class="col-md-12 col-form-label">NOTES : <?php echo $post->notes; ?></label>
    </div>

    <br>
    <br>
     <?php echo anchor('commesse_controller/index','Back',['class'=>'btn btn-primary']); ?>
  </fieldset>
  <br>
  <br>
  
</div>






