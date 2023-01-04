<?php

$baglanti=mysqli_connect("localhost","root","","kds");
$baglanti->set_charset("utf8");
if($baglanti){
    if ($_POST) {
        if(strip_tags(trim(isset($_POST["calisan_tc"])))){
            $calisan_tc=$_POST["calisan_tc"];
        }
		   if(strip_tags(trim(isset($_POST["calisan_ad"])))){
            $calisan_ad=$_POST["calisan_ad"];
			
        }
        		   if(strip_tags(trim(isset($_POST["calisan_soyad"])))){
            $calisan_soyad=$_POST["calisan_soyad"];
        }
		if(strip_tags(trim(isset($_POST["calisan_tel"])))){
            $calisan_tel=$_POST["calisan_tel"];
        }
		if(strip_tags(trim(isset($_POST["sube_id"])))){
            $sube_id=$_POST["sube_id"];
        }
  
        		   


        $sorgu=mysqli_query($baglanti,"INSERT INTO calisan(calisan_tc,calisan_ad,calisan_soyad,calisan_tel,sube_id) VALUES
            ('".$calisan_tc."','".$calisan_ad."','".$calisan_soyad."','".$calisan_tel."','".$sube_id."')");
        if ($sorgu==true) {
            echo "Kayıt veritabanına eklendi.";
			header( "refresh:2;url=yeni.php" ); 
        } else {
            echo "Hata:".$sorgu.$baglanti->error;
        }
		mysqli_close($baglanti);
    } else {
        echo "Veriler gelmedi";
    }
}



else { 
    die("bağlantı sağlanamadı");
}

?>