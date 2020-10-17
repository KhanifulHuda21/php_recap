<?php  

$data_type_scalar=[
    "Magang TOP",
    168,
    12.6,
    true,
    false,
    ["siswa","mentor"],
    ["alamat"=>"Green Lake City","kota"=>"Tangerang"]
];

foreach ($data_type_scalar as $key)
{
    if(is_scalar($key))
    {
        echo gettype($key)." Scalar Type".PHP_EOL;
    }
}

 echo isset($data_type_scalar)? "Ditemukan" : "Tidak ditemukan"; //ternary

 //if logic
 if(isset($data_type_scalar)){
     echo "Ditrmukan";
 }else{
     echo "Tidak Ditemukan";
 }

 echo PHP_EOL;

 $empty_data=[
     "",
     "0",
     0,
     0.0,
     false,
     NULL
 ];

 foreach($empty_data as $key)
 {
     if(empty($key))
     {
         echo gettype($key) . "is Empty" .PHP_EOL;
     }
 }

 //constant is immutable(kekal)
//nilainya mutlak tidak bisa di ubah
 define("VERSION","v1.0");

 const AUTHOR="venom";

 $nama="Hello";

 $nama="Word";

 echo VERSION;

 echo AUTHOR;

 var_dump(defined("AUTHOR"));