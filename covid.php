<?php
echo "==============================\n";
echo "  =[Covid 19 Tracker]=            \n";
echo "author: Nandar | SGBteam		\n";
echo "==============================\n";
echo "Input kode negara : ";
$no = trim(fgets(STDIN));


$url= "https://covid19-api.yggdrasil.id/countries/$no";
$result= json_decode(file_get_contents($url));
echo "===================\n";
echo "hasil data :\n";
echo "===================\n";
foreach ($result as $obj)
{
    // Here you can access to every object value in the way that you wantcls
    echo "Negara :".$obj->countryRegion."\n";
    echo "Terinfeksi :".$obj->confirmed."\n";
    echo "Dirawat :".$obj->active."\n";
    echo "Meninggal :".$obj->deaths."\n";
    echo "Sembuh :".$obj->recovered."\n";
    echo "Data update :".$obj->lastUpdate."\n";
    echo "=====================\n";
}
?>