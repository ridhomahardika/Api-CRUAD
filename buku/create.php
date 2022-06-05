<?php
    include_once "../connection.php";


    header("Content-Type: application/json; charset=UTF-8");

    $isbn = $_POST['isbn'];
    $judul = $_POST['judul'];
    $pengarang = $_POST['pengarang'];
    $jumlah = $_POST['jumlah'];
    $tanggal = $_POST['tanggal'];
    $abstrak = $_POST['abstrak'];

    $query =  "INSERT INTO `buku`(`ISBN`, `JUDUL`, `PENGARANG`, `JUMLAH`, `TANGGAL`, `ABSTRAK`) VALUES ('$isbn','$judul','$pengarang','$jumlah','$tanggal','$abstrak')";
    $execute = $connection->query($query);
    $response = [];

    if ($execute) {
        $response['status'] = 'succcess';
        $response['message'] = 'Data Buku BERHASIL ditambahkan';
    } else {
        $response['status'] = 'failed';
        $response['message'] = 'Data Buku GAGAL ditambahkan';
    }
    $json = json_encode($response, JSON_PRETTY_PRINT);
    echo $json;

    ?>