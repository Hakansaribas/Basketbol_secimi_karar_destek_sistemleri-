
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


	    <div class="bune">
		<form action="ürüngetir.php" method="POST">
		<b>
		<table align="center" border="0" width="400" height="200">
		<tr>
		<td></td>
		<td> <center>
		<font face="Cursive" size="4" color=red> <i> OYUNCU EKLE </i></font>
		</center>
		</td>
		</tr>
		<tr>
        <td> <font face="Cursive" size="4">SPORCU İD: </font> </td>
        <td align="right"><input type="text" name ="sporcu_id" style="width:200px; height:30px; border-style:none; background:#C5CAE9;"/></td>
		</tr>
		<tr>
        <td> <font face="Cursive" size="4">SPORCU ADI:</font></td>
        <td align="right"><input type="text" name ="ad" style="width:200px; height:30px; border-style:none;background:#C5CAE9;"/></td>
		</tr>
		<tr>
        <td><font face="Cursive" size="4">SPORCU SOYADI:</font><br></td>
        <td align="right"><input  type="text" name ="soyad" style="width:200px; height:30px; border-style:none;background:#C5CAE9; "/></td>
		</tr>
		<tr>
        <td> <font face="Cursive" size="4">YAŞI: </font> </td>
        <td align="right"><input type="text" name ="yas" style="width:200px; height:30px; border-style:none; background:#C5CAE9;"/></td>
		</tr>
		<tr>
        <td> <font face="Cursive" size="4">TAKIM İD:</font></td>
        <td align="right"><input type="text" name ="takim_id" style="width:200px; height:30px; border-style:none;background:#C5CAE9;"/></td>
		</tr>
		<tr>
        <td><font face="Cursive" size="4">MEVKİ İD:</font><br></td>
        <td align="right"><input  type="text" name ="mevki_id" style="width:200px; height:30px; border-style:none;background:#C5CAE9; "/></td>
		</tr>
		<tr>
        <td> <font face="Cursive" size="4"> BOY: </font> </td>
        <td align="right"><input type="text" name ="boy" style="width:200px; height:30px; border-style:none; background:#C5CAE9;"/></td>
		</tr>
		<tr>
        <td> <font face="Cursive" size="4">KİLO</font></td>
        <td align="right"><input type="text" name ="kilo" style="width:200px; height:30px; border-style:none;background:#C5CAE9;"/></td>
		</tr>
		<tr>
        <td> <font face="Cursive" size="4">TRANSFERDURUMU:</font></td>
        <td align="right"><input type="text" name ="transfer" style="width:200px; height:30px; border-style:none;background:#C5CAE9;"/></td>
		</tr>
		<tr>
		<td></td>
		<td align="right"> <input type="submit" value="Kaydet" style="width:204px; height:30px; border-style:none; background:#151635; color:white; "/> 
		</td>
		
		</table>	
		</b>
		</form>
		</div>
		
		 
		
		
	
		
		
		
		
		
		
	
	
	   </div>


</body>
</table>



</html>


