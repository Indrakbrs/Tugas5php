<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cek NIM</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Cek NIM</h1>
        <form action="" method="post">
            <div class="mb-3">
                <label for="namainput" class="form-label">Nama :</label>
                <input type="text" class="form-control" name="nama" id="namainput" placeholder="Masukkan Nama" required>
                <label for="namainput" class="form-label">NIM :</label>
                <input type="text" class="form-control" name="nim" id="namainput" placeholder="Masukkan NIM" required>
            </div>
            <button type="submit" class="btn btn-primary">Cek NIM</button>
        </form>

        <div id="result" class="mt-3">
            <?php
            if (isset($_POST['nim'])){
                include 'Data.php';
            };
            ?>
        </div>
    </div>
</body>
</html>