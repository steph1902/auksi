<?php /* C:\Users\devih\laravelproject\auksi\resources\views/lots/create.blade.php */ ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Auksi Create Lot</title>
  <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet" type="text/css" />
</head>
<body>
  <div class="container">
    <style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Add Lot
  </div>
  <div class="card-body">
    <?php if($errors->any()): ?>
      <div class="alert alert-danger">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
      </div><br />
    <?php endif; ?>
      
        <form method="post" action="<?php echo e(route('lots.store')); ?>">
          <div class="form-group">
              <?php echo csrf_field(); ?>
              <label for="name">Lots Name:</label>
              <input type="text" class="form-control" name="lot_name"/>
          </div>
          <div class="form-group">
              <label for="price">Lots Appraisal :</label>
              <input type="number" class="form-control" name="lot_appraisal"/>
          </div>
          <div class="form-group">
              <label for="price">Lots Price :</label>
              <input type="number" class="form-control" name="lot_price"/>
          </div>
          <div class="form-group">
              <label for="price">Vendor ID :</label>
              <input type="number" class="form-control" name="vendor_id"/>
          </div>

<!--           <div class="form-group">
              <label for="quantity">Share Quantity:</label>
              <input type="text" class="form-control" name="share_qty"/>
          </div> -->
          <button type="submit" class="btn btn-primary">Add</button>
      </form>
  </div>
</div>
  </div>
  <script src="<?php echo e(asset('js/app.js')); ?>" type="text/js"></script>
</body>
</html>