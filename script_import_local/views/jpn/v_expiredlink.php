<html>
<head>
<title>Link not found</title>

<style type="text/css">

body {
 background-color: #fff;
 margin: 40px;
 font-family: Lucida Grande, Verdana, Sans-serif;
 font-size: 14px;
 color: #4F5155;
}

a {
 color: #003399;
 background-color: transparent;
 font-weight: normal;
}

h1 {
 color: #444;
 background-color: transparent;
 border-bottom: 1px solid #D0D0D0;
 font-size: 16px;
 font-weight: bold;
 margin: 24px 0 2px 0;
 padding: 5px 0 6px 0;
}

code {
 font-family: Monaco, Verdana, Sans-serif;
 font-size: 12px;
 background-color: #f9f9f9;
 border: 1px solid #D0D0D0;
 color: #002166;
 display: block;
 margin: 14px 0 14px 0;
 padding: 12px 10px 12px 10px;
}

</style>
</head>
<?
$html = "
<h1><img src=".base_url(IMAGES.'info.png')." height=30 style=vertical-align:middle>&nbsp;&nbsp;SDM Information System</h1>
<br><br>
<blockquote>
<p>Link yang anda cari tidak ditemukan atau kemungkinan sudah expired</p>
<p>Link yang diterima via email secara otomatis akan dihapus oleh sistem ketika link tersebut dibuka</p>
<p><a href=/>Silahkan klik disini untuk kembali ke halaman utama</a></p>
</blockquote>;
";
?>
<body>
<?
if(isset($param)){
 echo $param;
}else{
 echo $html;
}
?>
</body>
</html>