<?php
require 'pegawai.php';

$manager = new pegawai('01111', 'lutfy', 'Manager', 'Islam', 'Menikah');
$asisten = new pegawai('01112', 'ipung', 'Asisten Manager', 'Islam', 'Belum Menikah');
$keBag = new pegawai('01113', 'sandi', 'Kepala Bagian', 'Kong Hu Chu', 'Menikah');
$staff = new pegawai('01114', 'rendy', 'Staff', 'Islam', 'Menikah');
$staff2 = new pegawai('01115', 'rizky', 'Staff', 'Kristen', 'Menikah');

$ar_pegawai = [$manager, $asisten, $keBag, $staff, $staff2];

foreach ($ar_pegawai as $pegawai){
    $pegawai-> cetak();
}


?>