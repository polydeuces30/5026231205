<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    {{-- <link rel="stylesheet" href="./css/tugaslinktree.css"> --}}
    {{-- <link rel="stylesheet" href="{{ HTML::style('css/tugaslinktree.css'); }}"> --}}
    {{-- <link rel="stylesheet" type="text/css" href="../css/tugaslinktree.css"> --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('css/tugaslinktree.css') }}">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="true">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <title>BLACKPINK</title>
</head>
<body>
    <div class="container text-center">
        <div class="social-icons">
            <img src="images/blackpink header" alt="BLACKPINK" class="rounded-circle mb-3" width="120">
            <div class="d-flex align-items-center justify-content-center">
                <h1 class="mb-0">BLACKPINK</h1>
                <img src="images/verified-badge.svg" alt="Verified" style="width: 24px; height: 24px; margin-left: 5px; margin-bottom: 0; position: relative; top: -2px">
            </div>
        </div>

        <div class="d-flex justify-content-center flex-wrap gap-3 mt-4">
            <a href="https://www.instagram.com/blackpinkofficial" target="_blank" class="social-link">
                <img src="images/instagram.svg" alt="Instagram">
            </a>
            <a href="https://www.tiktok.com/@bp_tiktok" target="_blank" class="social-link">
                <img src="images/tiktok-outline.svg" alt="TikTok">
            </a>
            <a href="https://www.youtube.com/BLACKPINKOFFICIAL" target="_blank" class="social-link">
                <img src="images/youtube.svg" alt="YouTube">
            </a>
            <a href="https://x.com/BLACKPINK" target="_blank" class="social-link">
                <img src="images/X_logo_2023_original.svg.png" alt="X (Twitter)">
            </a>
            <a href="https://open.spotify.com/intl-id/artist/41MozSoPIsD1dJM0CLPjZF" target="_blank" class="social-link">
                <img src="images/spotify.svg" alt="Spotify">
            </a>
            <a href="https://music.apple.com/us/artist/blackpink/1141774019" target="_blank" class="social-link">
                <img src="images/apple-music.svg" alt="Apple Music">
            </a>
        </div>
    </div>

        <!-- Music Links Section -->
<div class="music-links-container">
    <a href="https://tr.ee/AQAtFUCQno" class="text-decoration-none">
        <div class="music-card d-flex align-items-center">
            <img src="images/stream the girls" alt="The Girls" class="music-logo">
            <div class="music-caption">
                Stream The Girls (BLACKPINK THE GAME OST)
            </div>
            <div class="more-options">⋮</div>
        </div>
    </a>

    <a href="https://tr.ee/PaHJ2LGpLX" class="text-decoration-none">
        <div class="music-card d-flex align-items-center">
            <img src="images/stream born pink" alt="Born Pink" class="music-logo">
            <div class="music-caption">
                Stream BORN PINK
            </div>
            <div class="more-options">⋮</div>
        </div>
    </a>
</div>

        <!-- Digipacks Section -->
<div class="digipacks-section mt-4">
    <h2>Shop Digipacks</h2>
    <div class="digipack-container">
        <div class="digipack-card">
            <a href="https://shop.blackpinkmusic.com/products/born-pink-standard-digipack-lisa" class="text-decoration-none">
                <div class="album-img-container">
                    <img src="images/lisa" class="album-img" alt="BORN PINK Standard Album (Lisa)">
                </div>
                <div class="card-info">
                    <p class="card-text">BORN PINK Standard<br>Digipack - LISA</p>
                    <div class="more-options">⋮</div>
                </div>
            </a>
        </div>
        <div class="digipack-card">
            <a href="https://shop.blackpinkmusic.com/products/born-pink-standard-digipack-rose" class="text-decoration-none">
                <div class="album-img-container">
                    <img src="images/rose" class="album-img" alt="BORN PINK Standard Album (Rosé)">
                </div>
                <div class="card-info">
                    <p class="card-text">BORN PINK Standard<br>Digipack - ROSE</p>
                    <div class="more-options">⋮</div>
                </div>
            </a>
        </div>
        <div class="digipack-card">
            <a href="https://shop.blackpinkmusic.com/products/born-pink-standard-digipack-jennie" class="text-decoration-none">
                <div class="album-img-container">
                    <img src="images/jennie" class="album-img" alt="BORN PINK Standard Album (Jennie)">
                </div>
                <div class="card-info">
                    <p class="card-text">BORN PINK Standard<br>Digipack - JENNIE</p>
                    <div class="more-options">⋮</div>
                </div>
            </a>
        </div>
        <div class="digipack-card">
            <a href="https://shop.blackpinkmusic.com/products/born-pink-standard-digipack-jisoo" class="text-decoration-none">
                <div class="album-img-container">
                    <img src="images/jisoo" class="album-img" alt="BORN PINK Standard Album (Jisoo)">
                </div>
                <div class="card-info">
                    <p class="card-text">BORN PINK Standard<br>Digipack - JISOO</p>
                    <div class="more-options">⋮</div>
                </div>
            </a>
        </div>
    </div>
</div>
        <!-- Videos Section -->
<div class="videos-section mt-4">
    <h2>Videos</h2>
    <div class="video-container">
        <div class="video-box">
            <h3>Watch "JISOO - FLOWER" MV</h3>
            <iframe
                src="https://www.youtube.com/embed/YudHcBIxlYw?si=yMKObln1u19aOW6i&amp;start=3"
                title="JISOO - FLOWER MV"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen>
            </iframe>
            <!-- untuk video ini tidak bisa muncul, hal ini mungkin dikarenakan
            videonya tidak terkena copyright, sehingga thumbnailnya tidak tampil, namun tetap bisa diplay -->
        </div>

        <div class="video-box">
            <iframe
                src="https://www.youtube.com/embed/6apPVWaLdfU?si=ut5OKhqfkxJa3YPB"
                title="BLACKPINK World Tour Finale"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen>
            </iframe>
            <h3>Watch BLACKPINK World Tour Finale</h3>
        </div>
    </div>
</div>

        <!-- Subs Section -->
        <div class="stay-in-touch mt-4">
            <h2>Stay In Touch</h2>
            <div class="subscribe-container">
                <a href="https://www.blackpinkmusic.com/subscribe/" class="subscribe-link">
                    <div class="subscribe-card">
                        <div class="user-icon">
                            <img src="images/user-plus.svg" alt="User Plus" class="icon-img">
                        </div>
                        <div class="subscribe-text">Subscribe for Updates</div>
                        <div class="more-options">⋮</div>
                    </div>
                </a>
            </div>
        </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
