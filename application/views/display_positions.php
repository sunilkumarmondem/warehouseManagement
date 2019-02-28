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
<div class="container">
  <h3>View All Positions</h3>
   <?php $msg=$this->session->flashdata('msg')?>
  <div class="col-md-12 well">
    <?php if($msg): ?>
      <div class="col-md-4  alert alert-info">
        <?php echo $msg ?>
      </div>
    <?php endif ; ?>
  </div>
  <?php echo anchor('position_controller/savePosition','Add Position',['class'=>'btn btn-primary']); ?>
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
        <th scope="col">PositionId</th>
        <th scope="col">PositionName</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody id="myTable">
      <?php if(count($query->result())): ?>
        <?php foreach($query->result() as $post): ?>
          <tr class="table-active">
            <td><?php echo $post->PositionID; ?></td>
            <td><?php echo $post->PositionName; ?></td>
            <td>
              <?php echo anchor("position_controller/viewPosition/{$post->PositionID}",'View',['class'=>'badge badge-pill badge-primary']); ?>
              <?php echo anchor("position_controller/updatePosition/{$post->PositionID}",'Update',['class'=>'badge badge-pill badge-success']); ?>
              <?php echo anchor("position_controller/deletePosition/{$post->PositionID}",'Delete',['class'=>'badge badge-pill badge-danger']); ?>
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