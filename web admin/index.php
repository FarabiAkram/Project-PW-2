<?php
require_once 'header.php';
require_once 'sidebar.php';
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Dashboard Website</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- Default box -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Projek 1 - Aplikasi Web Sederhana Puskesmas</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                        <h4 class="text-center mt-4"><b>Selamat Datang Di Aplikasi Web Sederhana Alfarabi CHC</b> <br><i>Projek 1 - Pemrograman Web 2</i></h4>
                        <br><br>

                        <fieldset>
                        <legend style="color: black; font-weight: bold;">Pengumuman</legend>
                        <article style="text-align: justify; color: black;"><span style="font-size: 150%;">D</span>iberitahukan kepada seluruh karyawan Alfarabi CHC, bahwa terdapat beberapa informasi penting yang harus diperhatikan. Mohon untuk disimak dengan seksama.
                        <ol>
                        <li>
                            <b>Renovasi Ruangan:</b> Pada tanggal 19 Juli 2024, akan ada renovasi diruangan A321, untuk karyawan yang mempunyai jadwal tersebut diruangan A321, bisa untuk pindah sementara ke ruangan A335.
                        </li>
                        <li>
                            <b>Libur Nasional:</b> Pada tanggal 25 Juli 2024, seluruh aktifitas puskesmas diliburkan.
                        </li>
                        <li>
                            <b>Seminar:</b> Pada tanggal 1 Agustus ada seminar kesehatan di gedung Serbaguna Pluit, Jakarta Selatan. Bagi karyawan yang berkenan menambah wawasan bisa menghadiri acara tersebut.
                        </li>
                        </ol>    
                        Mohon perhatikan pengumuman ini dengan baik, Terimakasih.
                        </article>
                        </fieldset>

                        <!-- KALENDER -->
                        
                        <fieldset class="mb-3 mt-5">
                        <legend style="color: black; font-weight: bold;">Calendar</legend>
                        <div class="row">
                                <div class="col-md-12">
                                    <div class="calendar calendar-first" id="calendar_first" style="max-width: 750px;">
                                    <div class="calendar_header">
                                        <button class="switch-month switch-left"> <i class="fa fa-chevron-left"></i></button>
                                        <h2></h2>
                                        <button class="switch-month switch-right"> <i class="fa fa-chevron-right"></i></button>
                                    </div>
                                    <div class="calendar_weekdays rounded" style="max-width: 750px;"></div>
                                    <div class="calendar_content rounded" style="background-color: #b9af20; max-width: 750px;"></div>
                                    </div>
                                </div>
                            </div>
                        
                        </fieldset>
                        <!-- KALENDER -->
                        
                        <!-- /.card-body -->
                        <div class="card-footer">
                            Projek 1 - Aplikasi Web Sederhana Puskesmas
                        </div>
                        <!-- /.card-footer-->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php
require_once 'footer.php';
?>