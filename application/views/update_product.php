<?php include_once('header.php'); ?>
<div class="container">
  <?php echo form_open("product_controller/changeProduct/{$post->ProductID}",['class'=>'form-horizontal']); ?>
  <fieldset>
    <legend>Edit Product</legend>
    <div class="form-group row">
      <label for="exampleSelect1"  class="col-md-2 col-form-label">select Brand</label>
      <div class="col-md-5">
        <select name="BrandID" class="col-md-5">
          <option value=<?php echo $post->BrandID;?>><?php echo $post->BrandName;?></option>
          <?php if(count($brands)): ?>
            <?php foreach($brands as $brand): ?>
             <option value=<?php echo $brand->BrandID;?>><?php echo $brand->BrandName; ?></option>
           <?php endforeach;?>
           <?php else:?>
           <?php endif; ?>
         </select>
         <div class="col-md-5">
          <?php echo form_error('BrandID','<div class="text-danger">','</div>'); ?>
        </div>
      </div>
    </div>
    <div class="form-group row">
      <label for="ProductName" class="col-md-2 col-form-label">ProductName</label>
      <div class="col-md-5">
        <?php echo form_input(['name'=>'ProductName','placeholder'=>'Enter Product Name','class'=>'form-control','value'=>set_value('ProductName',$post->ProductName)]);?>
      </div>
      <div class="col-md-5">
        <?php echo form_error('ProductName','<div class="text-danger">','</div>'); ?>
      </div>
    </div>
    <div class="form-group row">
      <label for="Barcode" class="col-md-2 col-form-label">Barcode</label>
      <div class="col-md-5">
        <?php echo form_input(['name'=>'Barcode','placeholder'=>'Enter Barcode','class'=>'form-control','value'=>set_value('Barcode',$post->Barcode)]);?>
      </div>
      <div class="col-md-5">
        <?php echo form_error('Barcode','<div class="text-danger">','</div>'); ?>
      </div>
    </div>
    <div class="form-group row">
      <label for="CassioliCode" class="col-md-2 col-form-label">CassioliCode</label>
      <div class="col-md-5">
        <?php echo form_input(['name'=>'CassioliCode','placeholder'=>'Enter CassioliCode','class'=>'form-control','value'=>set_value('CassioliCode',$post->CassioliCode)]);?>
      </div>
      <div class="col-md-5">
        <?php echo form_error('CassioliCode','<div class="text-danger">','</div>'); ?>
      </div>
    </div>
     <div class="form-group row">
      <label for="exampleSelect1"  class="col-md-2 col-form-label">select Position</label>
      <div class="col-md-5">
        <select name="PositionID" class="col-md-5">
          <option value=<?php echo $post->PositionID;?>><?php echo $post->PositionName;?></option>
          <?php if(count($positions)): ?>
            <?php foreach($positions as $position): ?>
             <option value=<?php echo $position->PositionID;?>><?php echo $position->PositionName; ?></option>
           <?php endforeach;?>
           <?php else:?>
           <?php endif; ?>
         </select>
         <div class="col-md-5">
          <?php echo form_error('BrandID','<div class="text-danger">','</div>'); ?>
        </div>
      </div>
    </div>
   
    
    <div class="form-group row">
      <label for="Description" class="col-md-2 col-form-label">Description</label>
      <div class="col-md-5">
        <?php echo form_textarea(['name'=>'Description','placeholder'=>'Enter Description','class'=>'form-control','rows'=>'2','value'=>set_value('Description',$post->Description)]);?>
      </div>
      <div class="col-md-5">
        <?php echo form_error('Description','<div class="text-danger">','</div>'); ?>
      </div>
    </div>
    <br>
    <br>
    <?php echo form_submit(['name'=>'submit','value'=>'Update','class'=>'btn btn-primary']); ?>
    <?php echo anchor('product_controller/index','Back',['class'=>'btn btn-primary']); ?>
  </fieldset>
  <?php echo form_close();?>
</div>