<?php 
include '../koneksi.php';
$pelanggan_id=$_POST['pelanggan_id'];
$nama_pelanggan=$_POST['nama_pelanggan'];
$nomor_telepon=$_POST['nomor_telepon'];
$alamat=$_POST['alamat'];
$tanggal_penjualan=$_POST['tanggal_penjualan'];
mysqli_query($koneksi,"insert into pelanggan values('$pelanggan_id','$nama_pelanggan','$alamat','$nomor_telepon')");
mysqli_query($koneksi,"insert into penjualan (pelanggan_id,tanggal_penjualan) values('$pelanggan_id','$tanggal_penjualan')");
header("location:pembelian.php?pesan=simpan");