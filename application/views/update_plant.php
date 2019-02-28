<?php include_once('header.php'); ?>
<div class="container">
  <?php echo form_open("plant_controller/changePlant/{$post->PlantID}",['class'=>'form-horizontal']); ?>
  <fieldset>
    <legend>Edit Plant</legend>
    <div class="form-group row">
      <label for="exampleSelect1"  class="col-md-2 col-form-label">select Customer</label>
      <div class="col-md-5">
        <select name="CustomerID" class="col-md-5">
          <option value=<?php echo $post->CustomerID;?>><?php echo $post->CustomerName;?></option>
          <?php if(count($customers)): ?>
            <?php foreach($customers as $customer): ?>
             <option value=<?php echo $customer->CustomerID;?>><?php echo $customer->CustomerName; ?></option>
           <?php endforeach;?>
           <?php else:?>
           <?php endif; ?>
         </select>
         <div class="col-md-5">
          <?php echo form_error('CustomerID','<div class="text-danger">','</div>'); ?>
        </div>
      </div>
    </div>
     <div class="form-group row">
      <label for="exampleSelect1"  class="col-md-2 col-form-label">select Country</label>
      <div class="col-md-5">
        <select name="CountryID" class="col-md-5">
          <option value=<?php echo $post->CountryID;?>><?php echo $post->name_en;?></option>
          <?php if(count($countries)): ?>
            <?php foreach($countries as $country): ?>
             <option value=<?php echo $country->CountryID;?>><?php echo $country->name_en; ?></option>
           <?php endforeach;?>
           <?php else:?>
           <?php endif; ?>
         </select>
         <div class="col-md-5">
          <?php echo form_error('CountryID','<div class="text-danger">','</div>'); ?>
        </div>
      </div>
    </div>
    <div class="form-group row">
      <label for="ProductName" class="col-md-2 col-form-label">PlantName</label>
      <div class="col-md-5">
        <?php echo form_input(['name'=>'PlantName','placeholder'=>'Enter Plant Name','class'=>'form-control','value'=>set_value('PlantName',$post->PlantName)]);?>
      </div>
      <div class="col-md-5">
        <?php echo form_error('PlantName','<div class="text-danger">','</div>'); ?>
      </div>
    </div>
    <div class="form-group row">
      <label for="Barcode" class="col-md-2 col-form-label">LegalName</label>
      <div class="col-md-5">
        <?php echo form_input(['name'=>'legal_name','placeholder'=>'Enter LegalName','class'=>'form-control','value'=>set_value('legal_name',$post->legal_name)]);?>
      </div>
      <div class="col-md-5">
        <?php echo form_error('legal_name','<div class="text-danger">','</div>'); ?>
      </div>
    </div>
    <div class="form-group row">
      <label for="Description" class="col-md-2 col-form-label">Address</label>
      <div class="col-md-5">
        <?php echo form_textarea(['name'=>'address','placeholder'=>'Enter address','class'=>'form-control','rows'=>'2','value'=>set_value('address',$post->address)]);?>
      </div>
      <div class="col-md-5">
        <?php echo form_error('address','<div class="text-danger">','</div>'); ?>
      </div>
    </div>
    <div class="form-group row">
      <label for="Description" class="col-md-2 col-form-label">Legal Address</label>
      <div class="col-md-5">
        <?php echo form_textarea(['name'=>'legal_address','placeholder'=>'Enter legal_address','class'=>'form-control','rows'=>'2','value'=>set_value('legal_address',$post->legal_address)]);?>
      </div>
      <div class="col-md-5">
        <?php echo form_error('legal_address','<div class="text-danger">','</div>'); ?>
      </div>
    </div>
    <div class="form-group row">
      <label for="Description" class="col-md-2 col-form-label">Nas_path</label>
      <div class="col-md-5">
        <?php echo form_input(['name'=>'nas_path','placeholder'=>'Enter nas_path','class'=>'form-control','value'=>set_value('nas_path',$post->nas_path)]);?>
      </div>
      <div class="col-md-5">
        <?php echo form_error('nas_path','<div class="text-danger">','</div>'); ?>
      </div>
    </div>
    <br>
    <br>
    <?php echo form_submit(['name'=>'submit','value'=>'Update','class'=>'btn btn-primary']); ?>
    <?php echo anchor('product_controller/index','Back',['class'=>'btn btn-primary']); ?>
  </fieldset>
  <?php echo form_close();?>
</div>