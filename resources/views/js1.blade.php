<html>
    <head>
        <title>Kalkulator</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
<script> function hello()
{
    alert("selamat Anda mendapatkan hadiah 1 Milyar!");
}
function Tambah() 
{
    var bil1 = document.getElementById("bil1").value;
    var bil2 = document.getElementById("bil2").value;
    // membuat variabelnya

    var Hasil = Number.parseInt(bil1) + Number.parseInt(bil2);

    document.getElementById("hasil").innerHTML = Hasil;
}
</script>
    </head>
    <body>
        <div class="container">
        <button class="btn btn-primary" onclick="hello();">Klik disini</button> 
        <!-- karena tidak memiliki return value jdi void -->
    <p> Bilangan 1 :
        <input type="text" id="bil1" value="0" class="form-control">
        <br>
        Bilangan 2 :
        <input type="text" id="bil2" value="0" class="form-control">
        <!-- memberi id sama seperti memberi variabel -->
        <br>
        Hasil Penjualan : <di id="hasil"></di> 
        <br>
        <button class="btn btn-success" onclick="Tambah();">Tambah</button>
        </div>
    </p>
    </body>
</html>