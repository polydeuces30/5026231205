<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>My Task List</title>
</head>
<body style="margin: 0; padding: 0; font-family: 'Segoe UI', sans-serif; background: linear-gradient(to bottom right, #e3f2fd, #ffffff); color: #333;">

    <div style="max-width: 500px; margin: 40px auto; padding: 20px; text-align: center; background: #fff; border-radius: 12px; box-shadow: 0 10px 25px rgba(0,0,0,0.1);">

        {{-- FOTO PROFIL --}}
        <img src="images/profile.jpg" alt="Foto Profil" style="width: 120px; height: 120px; border-radius: 50%; border: 4px solid #2196f3; object-fit: cover; margin-bottom: 16px;">

        {{-- NAMA DAN DESKRIPSI --}}
        <h1 style="margin: 0; font-size: 24px;">Metta Anjali Putri</h1>
        <p style="margin: 8px 0 24px; font-size: 15px; color: #666;">Mahasiswi Sistem Informasi | Institut Teknologi Sepuluh Nopember 🍬</p>

        {{-- DAFTAR LINK --}}
        <div style="display: flex; flex-direction: column; gap: 12px;">
            <a href="{{ url('bootstrap1') }}" style="padding: 12px 20px; background-color: #2196f3; color: white; text-decoration: none; border-radius: 8px;">Bootstrap 1</a>
            <a href="{{ url('cobapertama') }}" style="padding: 12px 20px; background-color: #4caf50; color: white; text-decoration: none; border-radius: 8px;">Coba Pertama</a>
            <a href="{{ url('js1') }}" style="padding: 12px 20px; background-color: #f44336; color: white; text-decoration: none; border-radius: 8px;">JavaScript 1</a>
            <a href="{{ url('js2') }}" style="padding: 12px 20px; background-color: #9c27b0; color: white; text-decoration: none; border-radius: 8px;">JavaScript 2</a>
            <a href="{{ url('pertama') }}" style="padding: 12px 20px; background-color: #ff9800; color: white; text-decoration: none; border-radius: 8px;">Pertama</a>
            <a href="{{ url('pertemuan4') }}" style="padding: 12px 20px; background-color: #3f51b5; color: white; text-decoration: none; border-radius: 8px;">Pertemuan 4</a>
            <a href="{{ url('template1') }}" style="padding: 12px 20px; background-color: #00bcd4; color: white; text-decoration: none; border-radius: 8px;">Template 1</a>
            <a href="{{ url('tugaslinktree') }}" style="padding: 12px 20px; background-color: #607d8b; color: white; text-decoration: none; border-radius: 8px;">Tugas Linktree</a>
            <a href="{{ url('index') }}" style="padding: 12px 20px; background-color: #795548; color: white; text-decoration: none; border-radius: 8px;">UTS</a>
        </div>

        {{-- CTA / PESAN DI BAWAH --}}
        <div style="margin-top: 32px; font-size: 14px; color: #555;">
            <p>Thank You For Visiting! 🌟</p>
            <p>Contact me at 082184565552</a></p>
        </div>
    </div>

</body>
</html>
