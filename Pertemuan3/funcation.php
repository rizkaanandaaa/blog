<?php
// contoh function tidak menggunakan parameter
function nama (){
    $nama = "Rizka Ananda";
    echo "Nama Saya Adalah $nama";
};
// contoh function menggunakan parameter 
function umur_kelas($age){
    $umur = $age - 2022;
    $kelas = "SI10";
    echo "<br/>Umur Saya Sekarang Adalah $umur <br/> Saya Kelas $kelas";
};
nama();
umur_kelas(2002);
?>