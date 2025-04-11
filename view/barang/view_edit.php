<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <title>Edit Barang</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="../jenis/index.php">Jenis</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../barang/index.php">Barang</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <?php 
    include '../../config/koneksi.php';
    $id=$_GET['id'];
    $query = mysqli_query($conn, "SELECT * FROM barang WHERE id_barang='$id'");
    $result = mysqli_fetch_array($query);
    ?>
    <div class="container">
        <h1>Edit Data Barang</h1>
        <form action="proses_edit.php" method="POST">
            <div class="mb-3">
                <label for="id_barang" class="form-label">ID Barang</label>
                <input type="text" class="form-control" value="<?php echo $result['id_barang'];?>" name="id_barang" id="id_barang" required>
            </div>
            <div class="mb-3">
                <label for="nama_barang" class="form-label">Nama barang</label>
                <input type="text" class="form-control" value="<?php echo $result['nama_barang'];?>"name="nama_barang" id="nama_barang" required>
            </div>
            <div class="mb-3">
                <label for="id_jenis" class="form-label">ID jenis</label>
                <input type="text" class="form-control" value="<?php echo $result['id_jenis'];?>"name="id_jenis" id="id_jenis" required>
            </div>
            <div class="mb-3">
                <label for="harga" class="form-label">harga</label>
                <input type="text" class="form-control" value="<?php echo $result['harga'];?>"name="harga" id="harga" required>
            </div>
            <div class="mb-3">
                <label for="stok" class="form-label">stok</label>
                <input type="text" class="form-control" value="<?php echo $result['stok'];?>"name="stok" id="stok" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>