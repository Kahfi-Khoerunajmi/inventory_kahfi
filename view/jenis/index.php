<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Data parkir</title>
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
                        <a class="nav-link" aria-current="page" href="../barang/index.php">Barang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="../barang/index.php">Jenis</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <h1>Data Jenis Barang Kahfi</h1>
        <a href="view_tambah.php" class="btn btn-primary">Tambah data jenis Baru</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">ID Jenis</th>
                    <th scope="col">Nama jenis</th>
                    <th scope="col">Aksi</th>

                </tr>
            </thead>
            <tbody>
            <?php
                include '../../config/koneksi.php';

                $query = "SELECT * FROM jenis";
                $result = mysqli_query($conn, $query);

                if (mysqli_num_rows($result) > 0) {
                    $no = 1;
                    while ($data = mysqli_fetch_assoc($result)) {
                        ?>
                        <tr>
                            <td><?php echo $no; ?></td>
                            <td><?php echo $data['id_jenis'] ?></td>
                            <td><?php echo $data['nama_jenis'] ?></td>
                            <td>
                            <a href="edit.php?id=<?php echo $data['id_jenis']; ?>" 
                            class="btn btn-warning">Edit</a>
                            <a href="hapus.php?id=<?php echo $data['id_jenis']; ?>"
                            class="btn btn-danger" onclick="return confirm
                            ('Apakah Anda yakin ingin menghapus data ini?')">Hapus</a>
                            </td>
                        </tr>
                        <?php
                        $no++ ;
                        }
                    }else {
                    echo "belum ada data";
                }
                ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>