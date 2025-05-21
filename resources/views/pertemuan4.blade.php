<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Ajuan Pesanan</title>
     <link rel="stylesheet" type="text/css" href="{{ asset('css/pertemuan4.css') }}">
</head>
<body>

    <div class="sidebar">
        <div class="back-button">
            <span class="icon"></span>
        </div>
        <div class="admin-profile">
            <div class="admin-avatar"></div>
            <div class="admin-title">Admin</div>
            <div class="admin-email">admin@mail.com</div>
        </div>
        <div class="sidebar-menu">
            <div class="menu-item active">
                <div class="menu-item-icon">
                    <span class="icon"></span>
                </div>
                <div>Helperlog</div>
            </div>
            <div class="menu-item">
                <div class="menu-item-icon">
                    <span class="icon"></span>
                </div>
                <div>Helperfind</div>
            </div>
        </div>
        <div class="logout">
            <div class="menu-item-icon">
                <span class="icon"></span>
            </div>
            <div>Log Out</div>
        </div>
    </div>


    <div class="main-content">
        <div class="header">
            <div class="back-arrow">
                <span class="icon"></span>
            </div>
            <div class="page-title">Detail Ajuan Pesanan</div>
        </div>

        <div class="card">
            <div class="process-title">Proses Pengajuan Pesanan</div>


            <div class="progress-stepper">
                <div class="progress-line"></div>
                <div class="progress-active-line"></div>

                <div class="step">
                    <div class="step-icon completed">
                        <span class="icon"></span>
                    </div>
                    <div class="step-label">Ajuan</div>
                    <div class="step-sublabel">Dibuat</div>
                </div>

                <div class="step">
                    <div class="step-icon active">
                        <span class="icon"></span>
                    </div>
                    <div class="step-label">Proses</div>
                    <div class="step-sublabel">Review</div>
                </div>

                <div class="step">
                    <div class="step-icon pending">
                        <span class="icon"></span>
                    </div>
                    <div class="step-label">Disetujui</div>
                </div>
            </div>


            <div class="form-details">
                <div class="form-row">
                    <div class="form-label">ID kontrak</div>
                    <div class="colon">:</div>
                    <div class="form-value">127623874682234</div>
                </div>

                <div class="form-row">
                    <div class="form-label">Tanggal Pengajuan</div>
                    <div class="colon">:</div>
                    <div class="form-value">5 Juli 2024  12:57 WIB</div>
                </div>

                <div class="form-row">
                    <div class="form-label">Nama Pengaju</div>
                    <div class="colon">:</div>
                    <div class="form-value">Bayu Liano</div>
                </div>

                <div class="form-row">
                    <div class="form-label">Nama PRT</div>
                    <div class="colon">:</div>
                    <div class="form-value">Intan Permata</div>
                </div>

                <div class="form-row">
                    <div class="form-label">Pekerjaan</div>
                    <div class="colon">:</div>
                    <div class="form-value">Baby Sitter</div>
                </div>

                <div class="form-row">
                    <div class="form-label">Lama Kontrak</div>
                    <div class="colon">:</div>
                    <div class="form-value">12 bulan</div>
                </div>

                <div class="form-row">
                    <div class="form-label">Nominal</div>
                    <div class="colon">:</div>
                    <div class="form-value">Rp 2.500.000,-</div>
                </div>
            </div>


            <div class="action-buttons">
                <button class="btn btn-approve">Setuju</button>
                <button class="btn btn-reject">Tolak</button>
            </div>
        </div>
    </div>
</body>
</html>
