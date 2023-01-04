
<!DOCTYPE html>
<html>
<head>
<title>SPORCU SEÇİMİ</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>



<style>
body{
	margin:0px;
	padding:0px;
	position:absolute;
	
	
}
.üst{
	background:#883046;
	width:1515px;
	height:80px;
	

	
	
}
.sidebar{
    background:#3c576c;
    width: 250px;
    height: 1000px;
    float: left;
	z-index: 2;
	position:absolute;
	
	
	
}
.anasayf{
	border-radius: 25px;
	padding-top:10px;
	margin-left:5px;
	



}
.mahalleler{
	padding-top:20px;
	margin-left:5px;
	
}
.harita{
	padding-top:20px;
	margin-left:5px;
}
.bune{
	padding-top:20px;
}
.bas{
	background:#000;
	width:1500px;
	height:40px;
    float:left;
    position:absolute;
}
.bas #genc{
	margin-left:1300px;
	position:absolute;

}
.bas span{
	color:white;
    padding-top:10px;
	padding-left:600px;
	font-family:georgia;
	font-size:20px;
}
.content{
	width:1515px;
	height:1000px;


}
.content .bune{
	margin-left:500px;
	padding-top:100px;
}
.mah{
	margin-left:900px;
	padding-top:80px;	

}
.mah label{
	border-style:inset;
	border-color:grey;
}
.parksay{
	margin-left:900px;
	padding-top:200px;
	position:absolute;
	height:0px;

}
.parksay label{
		border-style:inset;
		border-color:purple;
}
#result{
	margin-top:500px;
	margin-left:150px;
	background:#fff;
	width:400px;
	height:250px;
    text-align: center;
    border-style:ridge;
	position:absolute;


}
.eksik {
	margin-left:150px;
	display:flex;
	margin-top:800px;
	position:absolute;
}
#d4a{
	margin-left:600px;
	margin-top:750px;
	position:absolute;
}
.yıl{
	margin-top:500px;
	margin-left:900px;
	background:#912cee;
	color:white;
	width:400px;
	height:250px;
    text-align: center;
	border-style: ridge;
	position:absolute;
}
.deneme{
	margin-left:900px;
	margin-top:80px;
}
#buton{
	margin-top:300px;
	margin-left:50px;
	solid:black;
	background:white;
}

.deneme span{
	margin-top:300px;
	border-style:inset;
	border-color:white;
	
}
#get{
	solid:#4CAF50;
	background:white;

}


</style>
<script type="text/javascript">
function pencereAcc(adres)
{
    window.location.href = "anasayfa.php";
}
function ana()
{
    pencereAcc("anasayfa.php");
}
</script>
<script type="text/javascript">
function pencereAcs(adres)
{
    window.location.href = "yönetici.php";
}
function cık()
{
    pencereAcs("yönetici.php");
}
</script>
<script type="text/javascript">

function pencereAcd(adres)
{
   window.location.href = "yeni.php";
}
function ekle()
{
    pencereAcd("yeni.php");
}
</script>

<script type="text/javascript">
function pencereAce(adres)
{
    window.location.href = "ürün.php";
}
function pencereAcTest()
{
    pencereAce("ürün.php");
}
</script>
<script type="text/javascript">
function pencereActe(adres)
{
    window.location.href = "siparisekle.php";
}
function sp()
{
    pencereActe("siparisekle.php");
}

</script>

<script type="text/javascript">
function pencereAcpe(adres)
{
    window.location.href = "stok.php";
}
function st()
{
    pencereAcpe("stok.php");
}

</script>

<script type="text/javascript">
function pencereAcrtt(adres)
{
    window.location.href = "siparis.php";
}
function siparis()
{
    pencereAcrtt("siparis.php");
}

</script>
<script type="text/javascript">
function pen(adres)
{
    window.location.href = "tarih.php";
}
function tarih()
{
    pencereAcu("tarih.php");
}

</script>

<script>
$("#d4a").click(function(){
   $("#db4b").animate({
      height:'toggle'
   });
 });
</script>
</head>
<body>
    <div id="piechart" style="position:absolute; width:700px; height:400px; margin-left:800px; margin-top:200px; chartArea.backgroundColor:red;"> </div>
<div class="üst"> <br><center> <font size=6 color=white face='Cursive'> SPORCU SEÇİMİ  </font></center>
</div>
<div class="sidebar"> 

        <div class="anasayf">
	    <button id="an" onClick="ana()" style="width:240px; height:50px; color:black; border-style:none; background-color:#FFFFFF; "> <img src='home'  width='25' height='25' align='center' > <b><center>  ANASAYFA </center></b></button>
	    </div>
		
		<div class="anasayf">
	    <button id="an" onClick="st()" style="width:240px; height:50px; color:black; border-style:none; background-color:#FFFFFF; "> <img src='takım'  width='25' height='25' align='center' > <b>  <center> DENVER NUGGETS </center> </b> </button>
	    </div>

       
		
		<div class="anasayf">
	    <button id="an" onClick="pencereAcTest()" style="width:240px; height:50px; color:black; border-style:none; background-color:#FFFFFF; "> <img src='analiz'  width='25' height='25' align='center' > <b><center> ANALİZ  </center></b></button>
	    </div>
		
		<div class="anasayf">
	    <button id="an" onClick="siparis()" style="width:240px; height:50px; color:black; border-style:none; background-color:#FFFFFF; "> <img src='keşfet'  width='25' height='25' align='center' ><b><center> KEŞFET </center></b></button>
	    </div>
		
		
		
		<div class="anasayf">
	    <button id="an" onClick="sp()" style="width:240px; height:50px; color:black; border-style:none; background-color:#FFFFFF; "> <img src='karşı'  width='25' height='25' align='center' > <b> <center>PERFORMANS KARŞILAŞTIRMASI </center> </b></button>
	    </div>
		
		<div class="anasayf">
	    <button id="an" onClick="ekle()" style="width:240px; height:50px; color:black; border-style:none; background-color:#FFFFFF; "> <img src='ek'  width='30' height='30' align='center' ><b> <center>SPORCU EKLEME </center></b> </button>
	    </div>
		
		
		<div class="anasayf">
	    <button id="an" onClick="cık()" style="width:240px; height:50px; color:white; border-style:none; background-color:#B71C1C; "> <img src='çıkış'  width='25' height='25' align='center' ><b> <center> ÇIKIŞ </center></b> </button>
	    </div>
			
</div>

<div class="content">
<div class="getir">	

<table border="0" width='1250px' height='50px' align="right"> 

<br>
<tr>
<?php 
$baglanti=mysqli_connect("localhost","root","","basketbolcu_secimi_veritabani");
$baglanti->set_charset("utf8");
$sql="SELECT COUNT(oyuncu.sporcu_id) as sayi
FROM oyuncu";
$sorgu=mysqli_query($baglanti,$sql);
while( $sonuc=mysqli_fetch_array($sorgu,MYSQLI_ASSOC) ){
	
	echo "<td bgcolor=#386e94>"."<img src='basket'  width='55' height='55' align='center' >"."<font color='black' size = '5' face='tahoma' align='right'>Güncel Oyuncu Sayısı ".$sonuc["sayi"]."</td>";

 }

?>

<?php 
$baglanti=mysqli_connect("localhost","root","","basketbolcu_secimi_veritabani");
$baglanti->set_charset("utf8");
$sql="SELECT COUNT(oyuncu.sporcu_id) as sayi
FROM oyuncu
WHERE oyuncu.transfer='satılık'";
$sorgu=mysqli_query($baglanti,$sql);
while( $sonuc=mysqli_fetch_array($sorgu,MYSQLI_ASSOC) ){
	
	echo "<td bgcolor=#bababa>"."<a href='transfer.php'>"."<img src='transfer'  width='55' height='55' align='center' >"."</a>"."<font color='black' size = '5' face='tahoma' align='right'>Satılık Oyuncu Sayısı ".$sonuc["sayi"]."</td>";

 }

?>



<?php 
$baglanti=mysqli_connect("localhost","root","","basketbolcu_secimi_veritabani");
$baglanti->set_charset("utf8");
$sql="SELECT admin.isim
FROM admin";
$sorgu=mysqli_query($baglanti,$sql);
while( $sonuc=mysqli_fetch_array($sorgu,MYSQLI_ASSOC) ){
	
	echo "<td bgcolor=#883046>"."<img src='coach'  width='55' height='55' align='center' >"."<font color='black' size = '5' face='tahoma' align='right'>Hoşgeldin ".$sonuc["isim"]."</td>";

 }

?></font></td> 
 

</tr>



<table border="0" width='1250px' height='50px' align="right"> 
<tr>
<td> 
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Nikola Jokic',     15],
          ['Deandre Jordan',      8.7],
          ['Ish Smith',  11.1],
          ['Aaron Gordon', 11.4],
          ['Jack White',    9.7],
		  ['Zeke Nnaji',    8.8],
		  ['Bones Hyland',     8.5],
          ['Peyton Watson',      8.7],
          ['Jeff Green',  9.4],
          ['Bruce Brown', 8.4]
        ]);

        var options = {
          title: 'Takımımdaki Oyuncuların Sayı Katkısı',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script>
    <div id="piechart_3d" style="width: 625px; height: 300px;"></div>
</td>
<td>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(b);

      function b() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Nikola Jokic',     33.6],
          ['Deandre Jordan',      16],
          ['Ish Smith',  18.9],
          ['Aaron Gordon', 23.1],
          ['Jack White',    18.6],
		  ['Zeke Nnaji',    15.6],
		  ['Bones Hyland',     16.9],
          ['Peyton Watson',      19.3],
          ['Jeff Green',  18.1],
          ['Bruce Brown', 16.1]
        ]);

        var ac = {
          title: 'Oyuncuların Oynadığı Süre Yüzdesi'
        };

        var ab = new google.visualization.PieChart(document.getElementById('piechartt'));

        ab.draw(data, ac);
      }
    </script>
  </head>
  <body>
    <div id="piechartt" style="width: 625px; height: 300px;"></div>

</td>
</tr>
<tr>
<td colspan="2" align="center"> <br> <br>
 <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawVisualization);

      function drawVisualization() {
        // Some raw data (not necessarily accurate)
        var data = google.visualization.arrayToDataTable([
          ['Oyuncular', 'Ribaund', 'Blok', 'Asist', 'Top Çalma', 'Üç Sayılık'],
          ['Nikola',  10.8,      0.6,         9.4,             0.6,           0.8],
          ['Deandre',  3,      0.4,        3,             0.4,          1.3],
          ['Ish',  4.3,      0.3,        4.2,             0.3,           1.4],
          ['Aaron',  5.6,      0.4,        2.6,             0.6,           1.6],
		  ['Jack',  3.1,      0.6,         7.1,             0.3,           1.6],
          ['Zeke',  3.2,      0.8,        5.1,             0.4,          1.4],
          ['Bones',  4.1,      0.6,        2.6,             0.8,           1.8],
          ['Peyton',  2.5,      0.6,        4.6,             0.6,           1.9],
		  ['Jeff',  1.9,      0.9,        4.3,             1.2,           0.6],
          ['Bruce',  2.3,      1.1,         3.2,             0.3,          1.4]
        ]);

        var options = {
          title : 'Oyuncu İstatistik Verileri',
          vAxis: {title: ''},
          hAxis: {title: 'Oyuncular'},
          seriesType: 'bars',
          series: {5: {type: 'line'}}
        };

        var chart = new google.visualization.ComboChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="chart_div" style="width: 1250px; height: 500px;"></div>
  </body>
</td>
</tr>
</table>


	   
	   </div>
</body>
</table>
</html>


