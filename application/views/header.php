<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Warehouse Management</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.js'); ?>" ></script>
  <script type="text/javascript" src="<?php echo base_url('assets/js/jquery-3.1min.js'); ?>" ></script>
  
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.css'); ?>">
 
</head>
<body>
  <nav class="navbar navbar-inverse navbar-fixed-top navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="#">WarehouseManagement</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav mr-auto" >
        <li class="nav-item ">
          <a class="nav-link" href="<?php echo site_url('welcome/index'); ?>">Brands </a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="<?php echo site_url('position_controller/index'); ?>">Positions </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo site_url('product_controller/index'); ?>">Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo site_url('customer_controller/index'); ?>">Customers</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo site_url('country_controller/index'); ?>">Countries</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo site_url('plant_controller/index'); ?>">Plants</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo site_url('commesse_controller/index'); ?>">Commesse</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo site_url('warehouse_controller/index'); ?>">Warehouse</a>
        </li>
      </ul>
    </div>
  </nav>
  <br/>
  <br/>