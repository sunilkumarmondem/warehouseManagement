<?php include_once('header.php'); ?>
<div class="container">
  <?php echo form_open('commesse_controller/saveCommesse',['class'=>'form-horizontal']); ?>
  <fieldset>
    <legend>Add Product</legend>
    <div class="form-group row">
      <label for="exampleSelect1"  class="col-md-2 col-form-label">select Plant</label>
      <div class="col-md-5">
        <select name="PlantID">
          <option value="">select Plant</option>
          <?php if(count($posts)): ?>
            <?php foreach($posts as $post): ?>
             <option value=<?php echo $post->PlantID;?><?php echo set_select('PlantID',$post->PlantID) ;?>><?php echo $post->PlantName; ?></option>
           <?php endforeach;?>
           <?php else:?>
           <?php endif; ?>
         </select>
         <div class="col-md-5">
          <?php echo form_error('PlantID','<div class="text-danger">','</div>'); ?>
        </div>
      </div>
    </div>
    <div class="form-group row">
      <label for="brandName" class="col-md-2 col-form-label">Year</label>
      <div class="col-md-5">
        <?php echo form_input(['name'=>'year','placeholder'=>'Enter year','class'=>'form-control']);?>
      </div>
      <div class="col-md-5">
        <?php echo form_error('year','<div class="text-danger">','</div>'); ?>
      </div>
    </div>
    <div class="form-group row">
      <label for="brandName" class="col-md-2 col-form-label">code</label>
      <div class="col-md-5">
        <?php echo form_input(['name'=>'code','placeholder'=>'Enter code','class'=>'form-control']);?>
      </div>
      <div class="col-md-5">
        <?php echo form_error('code','<div class="text-danger">','</div>'); ?>
      </div>
    </div>
     <div class="form-group row">
      <label for="brandName" class="col-md-2 col-form-label">Name (En)</label>
      <div class="col-md-5">
        <?php echo form_input(['name'=>'name_en','placeholder'=>'Enter Name (En)','class'=>'form-control']);?>
      </div>
      <div class="col-md-5">
        <?php echo form_error('name_en','<div class="text-danger">','</div>'); ?>
      </div>
    </div>
     <div class="form-group row">
      <label for="brandName" class="col-md-2 col-form-label">Name (It)</label>
      <div class="col-md-5">
        <?php echo form_input(['name'=>'name_it','placeholder'=>'Enter Name (It)','class'=>'form-control']);?>
      </div>
      <div class="col-md-5">
        <?php echo form_error('name_it','<div class="text-danger">','</div>'); ?>
      </div>
    </div>
     <div class="form-group row">
      <label for="brandName" class="col-md-2 col-form-label">Name (Pl)</label>
      <div class="col-md-5">
        <?php echo form_input(['name'=>'name_pl','placeholder'=>'Enter Name (Pl)','class'=>'form-control']);?>
      </div>
      <div class="col-md-5">
        <?php echo form_error('name_pl','<div class="text-danger">','</div>'); ?>
      </div>
    </div>
     <div class="form-group row">
      <label for="brandName" class="col-md-2 col-form-label">Customer Order</label>
      <div class="col-md-5">
        <?php echo form_input(['name'=>'customer_order','placeholder'=>'Enter Customer Order','class'=>'form-control']);?>
      </div>
      <div class="col-md-5">
        <?php echo form_error('customer_order','<div class="text-danger">','</div>'); ?>
      </div>
    </div>
     <div class="form-group row">
      <label for="brandName" class="col-md-2 col-form-label">Order Notes</label>
      <div class="col-md-5">
        <?php echo form_input(['name'=>'order_notes','placeholder'=>'Enter Order Notes','class'=>'form-control']);?>
      </div>
      <div class="col-md-5">
        <?php echo form_error('order_notes','<div class="text-danger">','</div>'); ?>
      </div>
    </div>
     <div class="form-group row">
      <label for="brandName" class="col-md-2 col-form-label">Is Spare Parts</label>
      <div class="col-md-5">
        <?php echo form_input(['name'=>'is_spare_parts','placeholder'=>'Enter Is Spare Parts','class'=>'form-control']);?>
      </div>
      <div class="col-md-5">
        <?php echo form_error('is_spare_parts','<div class="text-danger">','</div>'); ?>
      </div>
    </div>
     <div class="form-group row">
      <label for="brandName" class="col-md-2 col-form-label">Status</label>
      <div class="col-md-5">
        <?php echo form_input(['name'=>'status','placeholder'=>'Enter Status','class'=>'form-control']);?>
      </div>
      <div class="col-md-5">
        <?php echo form_error('status','<div class="text-danger">','</div>'); ?>
      </div>
    </div>
     <div class="form-group row">
      <label for="brandName" class="col-md-2 col-form-label">Documentation</label>
      <div class="col-md-5">
        <?php echo form_textarea(['name'=>'documentation','placeholder'=>'Enter Documentation','class'=>'form-control','rows'=>'3']);?>
      </div>
      <div class="col-md-5">
        <?php echo form_error('documentation','<div class="text-danger">','</div>'); ?>
      </div>
    </div>
     <div class="form-group row">
      <label for="brandName" class="col-md-2 col-form-label">Documentation Percentage</label>
      <div class="col-md-5">
        <?php echo form_input(['name'=>'documentation_percentage','placeholder'=>'Enter Documentation Percentage','class'=>'form-control']);?>
      </div>
      <div class="col-md-5">
        <?php echo form_error('documentation_percentage','<div class="text-danger">','</div>'); ?>
      </div>
    </div>
     <div class="form-group row">
      <label for="brandName" class="col-md-2 col-form-label">Documentation Signed</label>
      <div class="col-md-5">
        <?php echo form_input(['name'=>'documentation_signed','placeholder'=>'Enter Documentation Signed','class'=>'form-control']);?>
      </div>
      <div class="col-md-5">
        <?php echo form_error('documentation_signed','<div class="text-danger">','</div>'); ?>
      </div>
    </div>
     <div class="form-group row">
      <label for="brandName" class="col-md-2 col-form-label">Notes</label>
      <div class="col-md-5">
        <?php echo form_textarea(['name'=>'notes','placeholder'=>'Enter Notes','class'=>'form-control','rows'=>'3']);?>
      </div>
      <div class="col-md-5">
        <?php echo form_error('notes','<div class="text-danger">','</div>'); ?>
      </div>
    </div>
    <br>
    <br>
    <?php echo form_submit(['name'=>'submit','value'=>'Submit','class'=>'btn btn-primary']); ?>
    <?php echo anchor('commesse_controller/index','Back',['class'=>'btn btn-primary']); ?>
  </fieldset>
  <?php echo form_close();?>
  <br>
  <Br>
</div>