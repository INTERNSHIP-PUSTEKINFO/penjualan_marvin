<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="style.css">
    <title>Home Page</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="../index.php">Admin Dashboard</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item"><a class="nav-link" href="./product/index-product.php">Data Product</a></li>
          <li class="nav-item"><a class="nav-link" href="./customer/index-customer.php">Customer</a></li>
          <li class="nav-item"><a class="nav-link" href="./supplier/index-supplier.php">Supplier</a></li>
          <li class="nav-item"><a class="nav-link" href="./transaksi/index-transaksi.php">Transaksi</a></li>
        </ul>
      </div>
    </nav>

    <div class="container text-center">
      <h1 class="mb-41">Selamat Datang di Admin Dashboard</h1>
      <p class="mb-5 text-muted">Pilih menu di bawah untuk melanjutkan:</p>
      
      <div class="row justify-content-center">
        <div class="col-md-3">
          <div class="card mb-4 p-3">
            <div class="card-body">
              <h5 class="card-title text-primary">Data Product</h5>
              <p class="card-text text-muted">Lihat dan kelola data penjualan.</p>
              <a href="product/index-product.php" class="btn btn-primary">Masuk</a>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card mb-4 p-3">
            <div class="card-body">
              <h5 class="card-title text-success">Data Customer</h5>
              <p class="card-text text-muted">Lihat dan kelola data customer.</p>
              <a href="customer/index-customer.php" class="btn btn-success">Masuk</a>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card mb-4 p-3">
            <div class="card-body">
              <h5 class="card-title text-danger">Data Supplier</h5>
              <p class="card-text text-muted">Lihat dan kelola data supplier.</p>
              <a href="supplier/index-supplier.php" class="btn btn-danger">Masuk</a>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card mb-4 p-3">
            <div class="card-body">
              <h5 class="card-title text-info">Data Transaksi</h5>
              <p class="card-text text-muted">Lihat dan kelola data transaksi.</p>
              <a href="transaksi/index-transaksi.php" class="btn btn-info">Masuk</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  </body>
</html>
