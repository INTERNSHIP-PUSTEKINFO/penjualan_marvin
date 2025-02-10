<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="../style.css">
    <title>Data Product</title>
  </head>

  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="../index.php">Admin Dashboard</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item"><a class="nav-link" href="index-product.php">Data Product</a></li>
          <li class="nav-item"><a class="nav-link" href="../customer/index-customer.php">Customer</a></li>
          <li class="nav-item"><a class="nav-link" href="../supplier/index-supplier.php">Supplier</a></li>
          <li class="nav-item"><a class="nav-link" href="../transaksi/index-transaksi.php">Transaksi</a></li>
        </ul>
      </div>
    </nav>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">DATA PRODUCT</div>
            <div class="card-body">
              <a href="tambah_product.php" class="btn btn-md btn-success mb-2">TAMBAH DATA</a>
              <table class="table table-bordered" id="myTable">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Kategori</th>
                    <th>Nama Produk</th>
                    <th>Deskripsi</th>
                    <th>Stock</th>
                    <th>Harga</th>
                    <th>Berat</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                      include('../koneksi.php');
                      $no = 1;
                      $input_data = mysqli_query($connection,"SELECT * FROM product");
                      while($row = mysqli_fetch_array($input_data)){
                  ?>
                  <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $row['kategori'] ?></td>
                      <td><?php echo $row['nama_produk'] ?></td>
                      <td><?php echo $row['deskripsi'] ?></td>
                      <td><?php echo $row['stock'] ?></td>
                      <td><?php echo $row['harga'] ?></td>
                      <td><?php echo $row['berat'] ?></td>
                      <td class="text-center">
                        <a href="lihat-product.php?id=<?php echo $row['id'] ?>" class="btn btn-sm btn-info">LIHAT</a>
                        <a href="edit-product.php?id=<?php echo $row['id'] ?>" class="btn btn-sm btn-primary">EDIT</a>
                        <a href="hapus-product.php?id=<?php echo $row['id'] ?>" class="btn btn-sm btn-danger">HAPUS</a>
                      </td>
                  </tr>
                <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script>
      $(document).ready( function () {
          $('#myTable').DataTable();
      } );
    </script>
  </body>
</html>
