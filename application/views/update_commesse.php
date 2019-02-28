<?php include_once('header.php'); ?>
<div class="container">
  <?php echo form_open("commesse_controller/changeCommesse/{$post->CommesseID}",['class'=>'form-horizontal']); ?>
  <fieldset>
    <legend>Edit Product</legend>
    <div class="form-group row">
      <label for="exampleSelect1"  class="col-md-3 col-form-label">select Plant</label>
      <div class="col-md-5">
        <select name="PlantID">
          <option value=<?php echo $post->PlantID;?>><?php echo $post->PlantName;?></option>
          <?php if(count($plants)): ?>
            <?php foreach($plants as $plant): ?>
             <option value=<?php echo $plant->PlantID;?>><?php echo $plant->PlantName; ?></option>
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
      <label for="ProductName" class="col-md-3 col-form-label">Year</label>
      <div class="col-md-5">
        <?php echo form_input(['name'=>'year','placeholder'=>'Enter Year','class'=>'form-control','value'=>set_value('year',$post->year)]);?>
      </div>
      <div class="col-md-5">
        <?php echo form_error('year','<div class="text-danger">','</div>'); ?>
      </div>
    </div>
     <div class="form-group row">
      <label for="ProductName" class="col-md-3 col-form-label">code</label>
      <div class="col-md-5">
        <?php echo form_input(['name'=>'code','placeholder'=>'Enter code','class'=>'form-control','value'=>set_value('code',$post->code)]);?>
      </div>
      <div class="col-md-5">
        <?php echo form_error('code','<div class="text-danger">','</div>'); ?>
      </div>
    </div>
    <div class="form-group row">
      <label for="Barcode" class="col-md-3 col-form-label">Name_en</label>
      <div class="col-md-5">
        <?php echo form_input(['name'=>'name_en','placeholder'=>'Enter name_en','class'=>'form-control','value'=>set_value('name_en',$post->name_en)]);?>
      </div>
      <div class="col-md-5">
        <?php echo form_error('name_en','<div class="text-danger">','</div>'); ?>
      </div>
    </div>
     <div class="form-group row">
      <label for="Barcode" class="col-md-3 col-form-label">Name_it</label>
      <div class="col-md-5">
        <?php echo form_input(['name'=>'name_it','placeholder'=>'Enter name_it','class'=>'form-control','value'=>set_value('name_it',$post->name_it)]);?>
      </div>
      <div class="col-md-5">
        <?php echo form_error('name_it','<div class="text-danger">','</div>'); ?>
      </div>
    </div>
     <div class="form-group row">
      <label for="Barcode" class="col-md-3 col-form-label">Name_pl</label>
      <div class="col-md-5">
        <?php echo form_input(['name'=>'name_pl','placeholder'=>'Enter name_pl','class'=>'form-control','value'=>set_value('name_pl',$post->name_pl)]);?>
      </div>
      <div class="col-md-5">
        <?php echo form_error('name_pl','<div class="text-danger">','</div>'); ?>
      </div>
    </div>
     <div class="form-group row">
      <label for="Barcode" class="col-md-3 col-form-label">customer_order</label>
      <div class="col-md-5">
        <?php echo form_input(['name'=>'customer_order','placeholder'=>'Enter customer_order','class'=>'form-control','value'=>set_value('customer_order',$post->customer_order)]);?>
      </div>
      <div class="col-md-5">
        <?php echo form_error('customer_order','<div class="text-danger">','</div>'); ?>
      </div>
    </div>
     <div class="form-group row">
      <label for="Barcode" class="col-md-3 col-form-label">order_notes</label>
      <div class="col-md-5">
        <?php echo form_input(['name'=>'order_notes','placeholder'=>'Enter order_notes','class'=>'form-control','value'=>set_value('order_notes',$post->order_notes)]);?>
      </div>
      <div class="col-md-5">
        <?php echo form_error('order_notes','<div class="text-danger">','</div>'); ?>
      </div>
    </div>
     <div class="form-group row">
      <label for="Barcode" class="col-md-3 col-form-label">is_spare_parts</label>
      <div class="col-md-5">
        <?php echo form_input(['name'=>'is_spare_parts','placeholder'=>'Enter is_spare_parts','class'=>'form-control','value'=>set_value('is_spare_parts',$post->is_spare_parts)]);?>
      </div>
      <div class="col-md-5">
        <?php echo form_error('is_spare_parts','<div class="text-danger">','</div>'); ?>
      </div>
    </div>
     <div class="form-group row">
      <label for="Barcode" class="col-md-3 col-form-label">status</label>
      <div class="col-md-5">
        <?php echo form_input(['name'=>'status','placeholder'=>'Enter status','class'=>'form-control','value'=>set_value('status',$post->status)]);?>
      </div>
      <div class="col-md-5">
        <?php echo form_error('status','<div class="text-danger">','</div>'); ?>
      </div>
    </div>
     <div class="form-group row">
      <label for="Barcode" class="col-md-3 col-form-label">documentation</label>
      <div class="col-md-5">
        <?php echo form_textarea(['name'=>'documentation','placeholder'=>'Enter documentation','class'=>'form-control','rows'=>'3','value'=>set_value('documentation',$post->documentation)]);?>
      </div>
      <div class="col-md-5">
        <?php echo form_error('documentation','<div class="text-danger">','</div>'); ?>
      </div>
    </div>
     <div class="form-group row">
      <label for="Barcode" class="col-md-3 col-form-label">documentation_percentage </label>
      <div class="col-md-5">
        <?php echo form_input(['name'=>'documentation_percentage','placeholder'=>'Enter documentation_percentage','class'=>'form-control','value'=>set_value('documentation_percentage',$post->documentation_percentage)]);?>
      </div>
      <div class="col-md-5">
        <?php echo form_error('documentation_percentage','<div class="text-danger">','</div>'); ?>
      </div>
    </div>
     <div class="form-group row">
      <label for="Barcode" class="col-md-3 col-form-label">documentation_signed</label>
      <div class="col-md-5">
        <?php echo form_input(['name'=>'documentation_signed','placeholder'=>'Enter documentation_signed','class'=>'form-control','value'=>set_value('documentation_signed',$post->documentation_signed)]);?>
      </div>
      <div class="col-md-5">
        <?php echo form_error('documentation_signed','<div class="text-danger">','</div>'); ?>
      </div>
    </div>
     <div class="form-group row">
      <label for="Barcode" class="col-md-3 col-form-label">Notes</label>
      <div class="col-md-5">
        <?php echo form_textarea(['name'=>'notes','placeholder'=>'Enter notes','class'=>'form-control','rows'=>'3','value'=>set_value('notes',$post->notes)]);?>
      </div>
      <div class="col-md-5">
        <?php echo form_error('code','<div class="text-danger">','</div>'); ?>
      </div>
    </div>
    

    
    <br>
    <br>
    <?php echo form_submit(['name'=>'submit','value'=>'Update','class'=>'btn btn-primary']); ?>
    <?php echo anchor('commesse_controller/index','Back',['class'=>'btn btn-primary']); ?>
  </fieldset>
  <?php echo form_close();?>
  <br>
  <br>
</div>