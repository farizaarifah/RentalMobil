<?php
$data [] = array(
'nim' => 4617010001,
'nama' => 'Adelina Rangkuti',
'alamat' => 'Medan',
'telepon' => '081111111',
'kelas' => 'TI 5A',
'prodi' => 'TI',
'jurusan' => 'TIK'
);


$data [] = array(
'nim' => 4617010025,
'nama' => 'Arifah Fariza',
'alamat' => 'Jakarta Selatan',
'telepon' => '08222222',
'kelas' => 'TI 5A',
'prodi' => 'TI',
'jurusan' => 'TIK'
);

$data [] = array(
'nim' => 4617010020,
'nama' => 'Nely Febrianita',
'alamat' => 'Depok',
'telepon' => '08333333',
'kelas' => 'TI 5A',
'prodi' => 'TI',
'jurusan' => 'TIK'
);

$jsonfile = json_encode($data, JSON_PRETTY_PRINT);

file_put_contents('ardely.json', $jsonfile);

//header('location:read.php');
