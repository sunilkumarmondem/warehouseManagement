<?php include_once('header.php'); ?>
<script>
 $(document).ready(function(){
  $("#search_code").on("keyup",function(){
    var value =$(this).val().toLowerCase();
    if(value!=''){
      $("#myTable tr").filter(function(){
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
    })
    }
  })
 })
  </script>
<div class="container" style=" max-width: 1500px;">
  <h3>View All Plants</h3>
 <?php $msg=$this->session->flashdata('msg')?>
  <div class="col-md-12 well">
    <?php if($msg): ?>
      <div class="col-md-4  alert alert-info">
        <?php echo $msg ?>
      </div>
    <?php endif ; ?>
  </div>
  <?php echo anchor('plant_controller/addPlant','Add Plant',['class'=>'btn btn-primary']); ?>
  <br>
  <br>
  <div class="form-group">
      <div class="row">
        <div class="col-md-3">
           <input type="text" name="search_code" id="search_code" placeholder="search" class="form-control" />
        </div>
    </div>
  </div>
  <table class="table table-hover table-striped">
    <thead>
      <tr>
        <th scope="col">CustomerName</th>
        <th scope="col">CountryName</th>
        <th scope="col">PlantName</th>
        <th scope="col">LegalName</th>
        <th scope="col">Address</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody id="myTable">
      <?php if(count($query->result())): ?>
        <?php foreach($query->result() as $post): ?>
          <tr class="table-active">
            <td><?php echo $post->CustomerName; ?></td>
            <td><?php echo $post->name_en; ?></td>
            <td><?php echo $post->PlantName; ?></td>
             <td><?php echo $post->legal_name; ?></td>
              <td><?php echo $post->address; ?></td>
            <td>
              <?php echo anchor("plant_controller/viewPlant/{$post->PlantID}",'View',['class'=>'badge badge-pill badge-primary']); ?>
              <?php echo anchor("plant_controller/updatePlant/{$post->PlantID}",'Update',['class'=>'badge badge-pill badge-success']); ?>
              <?php echo anchor("plant_controller/deletePlant/{$post->PlantID}",'Delete',['class'=>'badge badge-pill badge-danger']); ?>
            </td>
          </tr>
        <?php endforeach; ?>
        <?php else: ?>
          <tr>
            <td>No Records Found!!</td>
          </tr>
        <?php endif; ?>
      </tbody>
    </table>
   <!-- <div> 
      <?php echo $this->pagination->create_links(); ?>
    </div> -->
    <br>
    <br>
  </div>