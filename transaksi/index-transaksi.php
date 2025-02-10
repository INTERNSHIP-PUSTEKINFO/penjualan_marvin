<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="../style.css">
    <title>Data Transaksi</title>
  </head>

  <body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="../index.php">Admin Dashboard</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item"><a class="nav-link" href="../product/index-product.php">Data Product</a></li>
          <li class="nav-item"><a class="nav-link" href="../customer/index-customer.php">Customer</a></li>
          <li class="nav-item"><a class="nav-link" href="../supplier/index-supplier.php">Supplier</a></li>
          <li class="nav-item"><a class="nav-link" href="index-transaksi.php">Transaksi</a></li>
        </ul>
      </div>
    </nav>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              DATA TRANSAKSI
            </div>
            <div class="card-body">
              <a href="tambah_transaksi.php" class="btn btn-md btn-success" style="margin-bottom: 10px">TAMBAH DATA</a>
              <table class="table table-bordered" id="myTable">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">CUSTOMER</th>
                    <th scope="col">PRODUCT</th>
                    <th scope="col">Jumlah</th>
                    <th scope="col">Tanggal Transaksi</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                      include('../koneksi.php');
                      $no = 1;
                      // Modify query to JOIN transaksi, customer, and product tables
                      $input_data = mysqli_query($connection, "
                          SELECT transaksi.*, customer.nama_customer AS nama_customer, product.nama_produk 
                          FROM transaksi
                          JOIN customer ON transaksi.id_customer = customer.id
                          JOIN product ON transaksi.id_product = product.id
                      ");
                      while($row = mysqli_fetch_array($input_data)){
                  ?>

                  <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $row['nama_customer'] ?></td>
                      <td><?php echo $row['nama_produk'] ?></td>
                      <td><?php echo $row['jumlah'] ?></td>
                      <td><?php echo $row['tanggal_transaksi'] ?></td>
                      <td class="text-center">
                        <a href="lihat-transaksi.php?id=<?php echo $row['id'] ?>" class="btn btn-sm btn-info">LIHAT</a>
                        <a href="edit-transaksi.php?id=<?php echo $row['id'] ?>" class="btn btn-sm btn-primary">EDIT</a>
                        <a href="hapus-transaksi.php?id=<?php echo $row['id'] ?>" class="btn btn-sm btn-danger">HAPUS</a>
                      </td>
                  </tr>

                <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script>
      $(document).ready( function () {
          $('#myTable').DataTable();
      } );
    </script>
  </body>
</html>
