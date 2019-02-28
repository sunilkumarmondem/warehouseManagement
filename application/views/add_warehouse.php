<?php include_once('header.php'); ?>
<div class="container">
  <?php echo form_open('warehouse_controller/saveWarehouse',['class'=>'form-horizontal']); ?>
  <fieldset>
    <legend>Add Item</legend>
    <div class="form-group row">
      <label for="exampleSelect1"  class="col-md-4 col-form-label">Select Product Barcode</label>
      <div class="col-md-5">
        <select name="ProductID" class="col-md-8">
          <option value="NULL">select ProductBarcode</option>
          <?php if(count($products)): ?>
            <?php foreach($products as $product): ?>
             <option value=<?php echo $product->ProductID;?><?php echo set_select('ProductID',$product->ProductID) ;?>><?php echo $product->Barcode; ?></option>
           <?php endforeach;?>
           <?php else:?>
           <?php endif; ?>
         </select>
         <div class="col-md-5">
          <?php echo form_error('ProductID','<div class="text-danger">','</div>'); ?>
        </div>
      </div>
    </div>
     <div class="form-group row">
      <label for="exampleSelect1"  class="col-md-4 col-form-label">Select Commesse Code</label>
      <div class="col-md-5">
        <select name="CommesseID" class="col-md-8">
          <option value='NULL'>select CommesseCode</option>
           
          <?php if(count($commesses)): ?>
            <?php foreach($commesses as $commesse): ?>

             <option value=<?php echo $commesse->CommesseID;?><?php echo set_select('CommesseID',$commesse->CommesseID) ;?>><?php echo $commesse->code; ?></option>
           <?php endforeach;?>
           <?php else:?>
           <?php endif; ?>
         </select>
         <div class="col-md-5">
          <?php echo form_error('CommesseID','<div class="text-danger">','</div>'); ?>
        </div>
      </div>
    </div>
    <div class="form-group row">
      <label for="brandName" class="col-md-4 col-form-label">Quantity</label>
      <div class="col-md-5">
        <?php echo form_input(['name'=>'Qty','placeholder'=>'Enter Quantity','class'=>'form-control']);?>
      </div>
      <div class="col-md-5">
        <?php echo form_error('Qty','<div class="text-danger">','</div>'); ?>
      </div>
    </div>
     <div class="form-group row">
      <label for="brandName" class="col-md-4 col-form-label">Description</label>
      <div class="col-md-5">
        <?php echo form_textarea(['name'=>'Item_desc','placeholder'=>'Enter Description','class'=>'form-control','rows'=>'2']);?>
      </div>
      <div class="col-md-5">
        <?php echo form_error('Item_desc','<div class="text-danger">','</div>'); ?>
      </div>
    </div>
    <br>
    <br>
    <?php echo form_submit(['name'=>'submit','value'=>'Submit','class'=>'btn btn-primary']); ?>
    <?php echo anchor('warehouse_controller/index','Back',['class'=>'btn btn-primary']); ?>
  </fieldset>
  <br>
  <br>
  <?php echo form_close();?>
</div>