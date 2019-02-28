<?php include_once('header.php'); ?>
<div class="container">
  
  <?php echo form_open("position_controller/changePosition/{$post->PositionID}",['class'=>'form-horizontal']); ?>
  <fieldset>
    <legend>Edit Brand</legend>
    <div class="form-group row">
      <label for="PositionName" class="col-md-2 col-form-label">PositionName</label>
      <div class="col-md-5">
        <?php echo form_input(['name'=>'PositionName','placeholder'=>'Enter PositionName','class'=>'form-control','value'=>set_value('PositionName',$post->PositionName)]);?>
      </div>
      <div class="col-md-5">
        <?php echo form_error('PositionName','<div class="text-danger">','</div>'); ?>
      </div>
    </div>
    <br>
    <br>
    
    <?php echo form_submit(['name'=>'submit','value'=>'Update','class'=>'btn btn-primary']); ?>
    <?php echo anchor('position_controller/index','Back',['class'=>'btn btn-primary']); ?>
  </fieldset>
  <?php echo form_close();?>
</div>
