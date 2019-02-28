<?php include_once('header.php'); ?>
<div class="container">
  <fieldset>
    <legend>View Position</legend>
    <div class="form-group row">
      <label for="PositionName" class="col-md-12 col-form-label">PositionName : <?php echo $post->PositionName; ?></label>
    </div>
    <br>
    <br>
     <?php echo anchor('position_controller/index','Back',['class'=>'btn btn-primary']); ?>
  </fieldset>
  </div>
 