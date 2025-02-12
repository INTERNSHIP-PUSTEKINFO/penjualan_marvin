<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="../style.css">
    <title>Tambah Customer</title>
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              TAMBAH CUSTOMER
            </div>
            <div class="card-body">
              <form action="simpan-customer.php" method="POST">

                <div class="form-group">
                  <label>Nama Customer</label>
                  <input class="form-control" name="nama_customer" placeholder="Masukkan Nama Customer" ></input>
                </div>

                <div class="form-group">
                  <label>Alamat</label>
                  <textarea class="form-control" name="alamat" placeholder="Masukkan Alamat" rows="4"></textarea>
                </div>

                <div class="form-group">
                  <label>Nomor Telepon</label>
                  <input class="form-control" name="telepon" placeholder="Masukkan Nomor Telepon" ></input>
                </div>

                <div class="form-group">
                <label for="jenis_kelamin" >Pilih Jenis Kelamin:</label>
                    <select id="jenis_kelamin" name="jenis_kelamin">
                            <option value="Laki-laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-success">SIMPAN</button>
                <button type="reset" class="btn btn-warning">RESET</button>
                <a href="index-customer.php" class="btn btn-secondary">BACK</a>

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