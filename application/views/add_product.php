<?php include_once('header.php'); ?>
<div class="container">
  <?php echo form_open('product_controller/saveProduct',['class'=>'form-horizontal']); ?>
  <fieldset>
    <legend>Add Product</legend>
    <div class="form-group row">
      <label for="exampleSelect1"  class="col-md-2 col-form-label">select Brand</label>
      <div class="col-md-5">
        <select name="BrandID" class="col-md-5">
          <option value="">select Brand</option>
          <?php if(count($posts)): ?>
            <?php foreach($posts as $post): ?>
             <option value=<?php echo $post->BrandID;?><?php echo set_select('BrandID',$post->BrandID) ;?>><?php echo $post->BrandName; ?></option>
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
      <label for="brandName" class="col-md-2 col-form-label">ProductName</label>
      <div class="col-md-5">
        <?php echo form_input(['name'=>'ProductName','placeholder'=>'Enter Product Name','class'=>'form-control']);?>
      </div>
      <div class="col-md-5">
        <?php echo form_error('ProductName','<div class="text-danger">','</div>'); ?>
      </div>
    </div>
    <div class="form-group row">
      <label for="brandName" class="col-md-2 col-form-label">Barcode</label>
      <div class="col-md-5">
        <?php echo form_input(['name'=>'Barcode','placeholder'=>'Enter Barcode Name','class'=>'form-control']);?>
      </div>
      <div class="col-md-5">
        <?php echo form_error('Barcode','<div class="text-danger">','</div>'); ?>
      </div>
    </div>
   
    <div class="form-group row">
      <label for="CassioliCode" class="col-md-2 col-form-label">Cassioli Code</label>
      <div class="col-md-5">
        <?php echo form_input(['name'=>'CassioliCode','placeholder'=>'Enter CassioliCode','class'=>'form-control']);?>
      </div>
      <div class="col-md-5">
        <?php echo form_error('CassioliCode','<div class="text-danger">','</div>'); ?>
      </div>
    </div>
     <div class="form-group row">
      <label for="exampleSelect1"  class="col-md-2 col-form-label">select Position</label>
      <div class="col-md-5">
        <select name="PositionID" class="col-md-5">
          <option value="">select Position</option>
          <?php if(count($positions)): ?>
            <?php foreach($positions as $post): ?>
             <option value=<?php echo $post->PositionID;?><?php echo set_select('PosiltionID',$post->PositionID) ;?>><?php echo $post->PositionName; ?></option>
           <?php endforeach;?>
           <?php else:?>
           <?php endif; ?>
         </select>
         <div class="col-md-5">
          <?php echo form_error('PositionID','<div class="text-danger">','</div>'); ?>
        </div>
      </div>
    </div>
    <div class="form-group row">
      <label for="exampleTextarea" class="col-md-2 col-form-label">Description</label>
      <div class="col-md-5">
        <?php echo form_textarea(['name'=>'Description','placeholder'=>'Enter Description ','class'=>'form-control','rows'=>'2']);?>
      </div>
    </div>
    <br>
    <br>
    <?php echo form_submit(['name'=>'submit','value'=>'Submit','class'=>'btn btn-primary']); ?>
    <?php echo anchor('product_controller/index','Back',['class'=>'btn btn-primary']); ?>
  </fieldset>
  <?php echo form_close();?>
</div>