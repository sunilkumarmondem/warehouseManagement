<?php include_once('header.php'); ?>
<div class="container">
  <?php echo form_open('plant_controller/savePlant',['class'=>'form-horizontal']); ?>
  <fieldset>
    <legend>Add Plant</legend>
    <div class="form-group row">
      <label for="exampleSelect1"  class="col-md-2 col-form-label">select Customer</label>
      <div class="col-md-5">
        <select name="CustomerID" class="col-md-5">
          <option value="">select Customer</option>
          <?php if(count($customers)): ?>
            <?php foreach($customers as $customer): ?>
             <option value=<?php echo $customer->CustomerID;?><?php echo set_select('CustomerID',$customer->CustomerID) ;?>><?php echo $customer->CustomerName; ?></option>
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
          <option value="">select Country</option>
          <?php if(count($countries)): ?>
            <?php foreach($countries as $country): ?>
             <option value=<?php echo $country->CountryID;?><?php echo set_select('CountryID',$country->CountryID) ;?>><?php echo $country->name_en; ?></option>
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
      <label for="brandName" class="col-md-2 col-form-label">PlantName</label>
      <div class="col-md-5">
        <?php echo form_input(['name'=>'PlantName','placeholder'=>'Enter Plant Name','class'=>'form-control']);?>
      </div>
      <div class="col-md-5">
        <?php echo form_error('PlantName','<div class="text-danger">','</div>'); ?>
      </div>
    </div>
    <div class="form-group row">
      <label for="brandName" class="col-md-2 col-form-label">LegalName</label>
      <div class="col-md-5">
        <?php echo form_input(['name'=>'legal_name','placeholder'=>'Enter LegalName','class'=>'form-control']);?>
      </div>
      <div class="col-md-5">
        <?php echo form_error('legal_name','<div class="text-danger">','</div>'); ?>
      </div>
    </div>
    <div class="form-group row">
      <label for="brandName" class="col-md-2 col-form-label">Address</label>
      <div class="col-md-5">
        <?php echo form_textarea(['name'=>'address','placeholder'=>'Enter Address','class'=>'form-control','rows'=>'3']);?>
      </div>
      <div class="col-md-5">
        <?php echo form_error('address','<div class="text-danger">','</div>'); ?>
      </div>
    </div>
    <div class="form-group row">
      <label for="brandName" class="col-md-2 col-form-label">Legal Address</label>
      <div class="col-md-5">
        <?php echo form_textarea(['name'=>'legal_address','placeholder'=>'Enter Legal Address','class'=>'form-control','rows'=>'3']);?>
      </div>
      <div class="col-md-5">
        <?php echo form_error('legal_address','<div class="text-danger">','</div>'); ?>
      </div>
    </div>
    <div class="form-group row">
      <label for="brandName" class="col-md-2 col-form-label">Nas_Path</label>
      <div class="col-md-5">
        <?php echo form_input(['name'=>'nas_path','placeholder'=>'Enter Nas_Path','class'=>'form-control']);?>
      </div>
      <div class="col-md-5">
        <?php echo form_error('nas_path','<div class="text-danger">','</div>'); ?>
      </div>
    </div>

    
    <br>
    <br>
    <?php echo form_submit(['name'=>'submit','value'=>'Submit','class'=>'btn btn-primary']); ?>
    <?php echo anchor('plant_controller/index','Back',['class'=>'btn btn-primary']); ?>
  </fieldset>
  <br>
  <br>
  <?php echo form_close();?>
</div>