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
  <h3>View All Products</h3>
  <?php $msg=$this->session->flashdata('msg')?>
  <div class="col-md-12 well">
    <?php if($msg): ?>
      <div class="col-md-4  alert alert-info">
        <?php echo $msg ?>
      </div>
    <?php endif ; ?>
  </div>
  <?php echo anchor('product_controller/createProduct','Add Product',['class'=>'btn btn-primary']); ?>
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
        <th scope="col">Id</th>
        <th scope="col">BrandName</th>
        <th scope="col">ProductName</th>
        <th scope="col">Barcode</th>
        <th scope="col">CassioliCode</th>
         <th scope="col">Position</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody id="myTable">
      <?php if(count($query->result())): ?>
        <?php foreach($query->result() as $product): ?>
          <tr class="table-active">
            <td><?php echo $product->ProductID; ?></td>
            <td><?php echo $product->BrandName; ?></td>
            <td><?php echo $product->ProductName; ?></td>
            <td><?php echo $product->Barcode; ?></td>
            <td><?php echo $product->CassioliCode; ?></td>
            <td><?php echo $product->PositionName; ?></td>
            <td>
              <?php echo anchor("product_controller/viewProduct/{$product->ProductID}",'View',['class'=>'badge badge-pill badge-primary']); ?>
              <?php echo anchor("product_controller/updateProduct/{$product->ProductID}",'Update',['class'=>'badge badge-pill badge-success']); ?>
              <?php echo anchor("product_controller/deleteProduct/{$product->ProductID}",'Delete',['class'=>'badge badge-pill badge-danger']); ?>
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