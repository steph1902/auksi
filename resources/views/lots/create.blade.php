<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Auksi Create Lot</title>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />
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
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      
        <form method="post" action="{{ route('lots.store') }}">
          <div class="form-group">
              @csrf
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
  <script src="{{ asset('js/app.js') }}" type="text/js"></script>
</body>
</html>