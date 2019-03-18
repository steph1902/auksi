<?php /* C:\Users\devih\laravelproject\auksi\resources\views/vendors/index.blade.php */ ?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Project Auksi">
  <meta name="author" content="Step">

  <title>Auksi (Vendor)</title>

  
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(asset('css/simple-sidebar.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(asset('css/content.css')); ?>" rel="stylesheet" type="text/css" />
    
    <script src="<?php echo e(asset('js/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/bootstrap.bundle.min.js')); ?>"></script>


  
</head>

<body>

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading">Auksi</div>
      <div class="list-group list-group-flush">
        <a href="<?php echo e(url('/')); ?>" class="list-group-item list-group-item-action bg-light">Dashboard</a>
        <a href="<?php echo e(url('vendors')); ?>" class="list-group-item list-group-item-action bg-light">Daftar Vendor</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Jadwal Appraisal</a>
        <a href="<?php echo e(url('lots')); ?>" class="list-group-item list-group-item-action bg-light">Daftar Lot</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Setting</a>
        
        


      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">
      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <!-- <button class="btn btn-primary" id="menu-toggle">Toggle Menu</button> -->

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Dropdown
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li>
          </ul>
        </div> 
      
      </nav>



<main>



  <h3>Daftar Vendor</h3>
  <input id="tab1" type="radio" name="tabs" checked>
  <label for="tab1">Vendor terverifikasi (<?php echo e($verifiedCount->verifiedCount); ?>)</label>

  <input id="tab2" type="radio" name="tabs">
  <label for="tab2">Vendor belum terverifikasi (100)</label>

  <br><hr><hr>
  <input type="text" class="form-control" name="search vendor" placeholder="search vendor.." />
  <hr>
  
  <a href="<?php echo e(url('vendors/create')); ?>">
  <input type="button" class="form-control" name="Add Vendor" value="Add Vendor">
  </a>

  <section id="content1">
   
   <!-- table start -->
      <table class="table">
      <thead>
        <tr>
          <th scope="col">Nama</th>
          <th scope="col">Jumlah Lot</th>
          <th scope="col">Total Pembayaran</th>
          <th scope="col">Membership</th>
        </tr>
      </thead>
      <tbody>
    
    <?php $__currentLoopData = $vendors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vendor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>    
    <tr>
      <td><?php echo e($vendor->vendor_name); ?></td>
      <td><?php echo e($vendor->JumlahLot); ?> Kendaraan</td>
      <td><?php echo e($vendor->TotalPembayaran); ?></td>
      <td><?php echo e($vendor->vendor_membership); ?></td>      
    </tr>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



  </tbody>
</table>
<!-- table end -->
    
  </section>




  <section id="content2">
   
   <!-- table start -->
      <table class="table">
      <thead>
        <tr>
          <th scope="col">Nama</th>
          <th scope="col">Jumlah Lot</th>
          <th scope="col">Total Pembayaran</th>
          <th scope="col">Membership</th>
        </tr>
      </thead>
      <tbody>
    
    
    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>      
    </tr>
  



  </tbody>
</table>
<!-- table end -->
    
  </section>



</main>
  <!-- content wrapper -->




  </div>
  <!-- /#wrapper -->

  <!-- content -->




</body>



<!-- 
<footer class="footer">
      <div class="container">
        <p class="text-muted">&copy 2018 Auksi. All rights reserved.</p>
      </div>
    </footer>

<style type="text/css">
.footer {
  position: absolute;
  bottom: 0;
  width: 70%;
  /* Set the fixed height of the footer here */
  height: 60px;
  background-color: white;
  /*margin: 25%;*/
  text-align: center;
  color: black;
}

.container
{ 
  line-height: 60px;
  text-align: center;
}
</style>
 -->






</html>