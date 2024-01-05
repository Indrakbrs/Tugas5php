<?php

require_once 'DataVariabel.php';

if ($_SERVER['REQUEST_METHOD']=== 'POST'){
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    main($nim,$nama);

};

function main($nim,$nama){
    $newarray = explode(".",$nim);
    $tahun_masuk = "20" .$newarray[0];
    $kode = $newarray[1];
    $kode_prodi = $newarray[2];
    $fakultas = getfakultas($kode);
    $prodi = getprodi($kode,$kode_prodi);
    $length_nim = strlen($nim);
    
    echo "<div id='result-box' class='result-box bg-secondary text-light p-3'>";echo "<h3>Hasil</h3>";
    echo "<p>Nama: " . $nama ."</p>";
    echo "<p>Nim : " . $nim ."</P>";
    echo"<p>Fakultas : ".$fakultas . "</p>";
    echo "<p>Prodi : " . $prodi ."</p>";
    echo "<p>Tahun Masuk : " . $tahun_masuk ."</p>";
    echo"<p>Panjang NIM : " . $length_nim . "</p>";
    echo "</div>";
};

function getfakultas($kode){
    global $kode_fakultas;
    return isset($kode_fakultas[$kode])? $kode_fakultas[$kode] : 'Tidak diketahui';
};

function getprodi($kode_fakultas, $kode_prodi){
    $result = '';

    global $kode_prodi_FTII;
    global $kode_prodi_FHB;
    global $kode_prodi_FEB;
    global $kode_prodi_FV;

    if ($kode_fakultas == "01"){
        $result = isset($kode_prodi_FTII[$kode_prodi])? $kode_prodi_FTII[$kode_prodi] : 'Tidak diketahui';
    } elseif ($kode_fakultas == "02"){
        $result = isset($kode_prodi_FHB[$kode_prodi])? $kode_prodi_FHB[$kode_prodi] : 'Tidak diketahui';
    } elseif ($kode_fakultas == "03"){
        $result = isset($kode_prodi_FEB[$kode_prodi])? $kode_prodi_FEB[$kode_prodi] : 'Tidak diketahui';
    } elseif ($kode_fakultas == "04"){ 
        $result = isset($kode_prodi_FV[$kode_prodi])? $kode_prodi_FV[$kode_prodi]: 'Tidak diketahui';
    } else {
        $result = 'Tidak diketahui';
    }
    return $result;
};
?>