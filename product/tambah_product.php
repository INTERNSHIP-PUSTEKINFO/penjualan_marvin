<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="../style.css">
    <title>Tambah Product</title>
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              TAMBAH PRODUCT
            </div>
            <div class="card-body">
              <form action="simpan-product.php" method="POST">

              <div class="form-group">
                  <label>Nama Barang</label>
                  <input type="text" name="nama_produk" placeholder="Masukkan Nama Barang" class="form-control">
                </div>

                <div class="form-group">
                  <label>Kategori</label>
                  <label for="kategori">Pilih Kategori Barang:</label>
                    <select id="kategori" name="kategori">
                            <option value="Makanan">Makanan</option>
                            <option value="Minuman">Minuman</option>
                            <option value="ATK">ATK</option>
                            <option value="Pakaian">Pakaian</option>
                    </select>
                </div>

                <div class="form-group">
                  <label>Deskripsi</label>
                  <textarea class="form-control" name="deskripsi" placeholder="Masukkan Deskripsi Barang" rows="4"></textarea>
                </div>

                <div class="form-group">
                    <label for="stock">Masukkan Jumlah Stock Barang:</label>
                    <input type="number" id="stock" name="stock" min="1" step="1" class="form-control">
                  </div>


                <div class="form-group">
                  <label>Harga Barang</label>
                  <input type="text" name="harga" placeholder="Masukkan Harga Barang" class="form-control">
                </div>

                <div class="form-group">
                <label for="berat" >Pilih Berat Barang:</label>
                    <select id="berat" name="berat">
                            <option value="500">500 gram</option>
                            <option value="1000">1 kg</option>
                            <option value="1500">1.5 kg</option>
                            <option value="2000">2 kg</option>
                    </select>
                </div>

                <div class="form-group">
                <label for="id_supplier" >Pilih Supplier:</label>
                <select name="supplier" class="form-control">
                                <option disable selected>Pilih Supplier</option>
                                <?php
                                include '../koneksi.php';
                                $result = mysqli_query($connection, "SELECT * FROM supplier");
                                // var_dump($result);
                                // die();
                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo "<option value='{$row['id']}'>{$row['nama_suplier']}</option>";
                                }
                                ?>
                            </select>
                </div>

                <button type="submit" class="btn btn-success">SIMPAN</button>
                <button type="reset" class="btn btn-warning">RESET</button>
                <a href="index-product.php" class="btn btn-secondary">BACK</a>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  </body>
</html>