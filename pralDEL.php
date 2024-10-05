<?php

// URL API tujuan (dengan ID data yang ingin dihapus)
$url = 'https://jsonplaceholder.typicode.com/posts/2';

// Inisialisasi cURL
$ch = curl_init($url);

// Set opsi untuk metode DELETE
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Eksekusi cURL
$response = curl_exec($ch);

// Tutup cURL
curl_close($ch);

echo $response ? "Data berhasil dihapus." : "Gagal menghapus data.";

?>
