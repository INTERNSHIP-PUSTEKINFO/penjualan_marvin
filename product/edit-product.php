<?php
include '../koneksi.php';

// Ambil ID produk dari parameter URL
$id_product = $_GET['id'];

// Ambil data produk berdasarkan ID
$query = "SELECT * FROM product WHERE id = '$id_product'";
$result = mysqli_query($connection, $query);
$product = mysqli_fetch_assoc($result);

// Ambil daftar supplier
$supplier_query = "SELECT * FROM supplier";
$supplier_result = mysqli_query($connection, $supplier_query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Produk</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="../style.css">
</head>
<body>
<div class="container" style="margin-top: 50px;">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">EDIT PRODUK</div>
                <div class="card-body">
                    <form action="update-product.php" method="POST">
                        <input type="hidden" name="id" value="<?php echo $product['id']; ?>">
                        
                        <div class="form-group">
                            <label>Nama Produk</label>
                            <input type="text" name="nama_produk" value="<?php echo $product['nama_produk']; ?>" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Kategori</label>
                            <select name="kategori" class="form-control">
                                <option value="Makanan" <?php echo ($product['kategori'] == 'Makanan') ? 'selected' : ''; ?>>Makanan</option>
                                <option value="Minuman" <?php echo ($product['kategori'] == 'Minuman') ? 'selected' : ''; ?>>Minuman</option>
                                <option value="ATK" <?php echo ($product['kategori'] == 'ATK') ? 'selected' : ''; ?>>ATK</option>
                                <option value="Pakaian" <?php echo ($product['kategori'] == 'Pakaian') ? 'selected' : ''; ?>>Pakaian</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label>Deskripsi</label>
                            <textarea name="deskripsi" class="form-control"><?php echo $product['deskripsi']; ?></textarea>
                        </div>
                        
                        <div class="form-group">
                            <label>Stock</label>
                            <input type="number" name="stock" value="<?php echo $product['stock']; ?>" class="form-control">
                        </div>
                        
                        <div class="form-group">
                            <label>Harga</label>
                            <input type="text" name="harga" value="<?php echo $product['harga']; ?>" class="form-control">
                        </div>
                        
                        <div class="form-group">
                            <label>Berat</label>
                            <input type="text" name="berat" value="<?php echo $product['berat']; ?>" class="form-control">
                        </div>
                        
                        <div class="form-group">
                            <label for="id_supplier">Pilih Supplier:</label>
                            <select name="id_supplier" class="form-control">
                                <option disabled>Pilih Supplier</option>
                                <?php while ($row = mysqli_fetch_assoc($supplier_result)) { ?>
                                    <option value="<?php echo $row['id']; ?>" <?php echo ($row['id'] == $product['id_supplier']) ? 'selected' : ''; ?>>
                                        <?php echo $row['nama_suplier']; ?>
                                    </option>
                                <?php } ?>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-success">SIMPAN</button>
                        <a href="index-product.php" class="btn btn-danger">BATAL</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
