{{-- harus ada kata" blade.php utk folder views --}}
<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Laravel - www.malasngoding.com</title>
</head>
<body>

	<h3>www.malasngoding.com</h3>
	<p>Seri Tutorial Laravel Lengkap Dari Dasar</p>
	<p>Ini adalah view blog. ada di route blog.</p>
    <?php
    $nama = "Linyi";
    echo "Hallo Apa Kabar " . $nama ;
    // concat stringnya menggunakan ., untuk variabel penggunaan mirip dengan di js
    ?>
    <br>
    {{"Hallo Apa Kabar"}}
    <br>
    <?php
date_default_timezone_set('Asia/Jakarta');
echo date('d-m-Y H:i:s'); // Hasil: 20-01-2017 05:32:15
    ?>
</body>
</html>
