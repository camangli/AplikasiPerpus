<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style>
body{
background:#666666;}
.main-buku{
margin:10px;
padding:0;
}
.buku img{
height:250px;
width:180px;
position:absolute;
z-index:-1;
}
.main-buku:hover .b-buku{
transition:background 1s;
background:rgba(100,100,200,0.5);
}
.main-buku:hover .j-buku{
transition:border color 1s;
border-bottom:1.5px dashed #FFF;
color:#FFF;
font-weight:bold;
}
.main-buku:hover .p-buku{
transition:border color 1s;
color:#FFF;
font-weight:bold;
}
.b-buku{
top:160px;
transition:background 1s;
position:absolute;
background:none;
height:100px;;
width:180px;
}
.j-buku{
padding:10px 3px 3px 3px;
color:rgba(0,0,0,0);
text-align:left;
font-size:120%;
font-family:Arial, Helvetica, sans-serif;
}
.p-buku{
text-align:left;
color:rgba(0,0,0,0);
font-size:80%;
font-family:Arial, Helvetica, sans-serif;
}
</style>
</head>

<body>
<div class="main-buku">
	<div class="buku">
    <img src="../../Gbuku/1391320577.jfif" height="250px" width="180px">
		<div class="b-buku">
        	<div class="j-buku">
            Tekniligi Informasi dan Komunikasi
            </div>
            <div class="p-buku">
            Pengarang:<br> GUNAWAN
            </div>
        </div>
	</div>
</div>
</body>
</html>
