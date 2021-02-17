<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Selamat Datang</title>
</head>

<body style="background:rgb(255, 251, 251)">

    <nav class="navbar navbar-light bg-dark">
        <a class="navbar-brand" href="#">Navbar</a>
    </nav>

    <div class="container" style="margin-top: 50px; margin-bottom:50px;">
        <div class="row">
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <img src="{{ asset('img/animasi_matematika.jpg') }}" class="img-fluid" alt=""
                            style="width: 500px;height:325px">
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card" style="width:500px; height:367px;">
                    <div class="card-body" style="font-family: poppins;">
                        <h3 class="card-title" style="color:#ff4000;">Selamat Datang</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>


    @extends('layouts.master')
    @section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Dashboard</h1>
            </div>
            <div class="section-body">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="card card-statistic-1">
                            <div class="card-icon bg-info">
                                <i class="fa fa-superscript text-white" style="font-size: 2rem;"></i>
                            </div>
                            <div class="card-wrap mx-auto">
                                <div class="card-header">
                                    <h4>Bilangan Pangkat & Akar</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="card card-statistic-1">
                            <div class="card-icon bg-danger">
                                <i class="far fa-chart-bar text-white" style="font-size: 2rem;"></i>
                            </div>
                            <div class="card-wrap">
                                <div class="card-header">
                                    <h4>Persamaan & Pertidaksamaan Linier</h4>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="card card-statistic-1">
                            <div class="card-icon bg-warning">
                                <i class="fas fa-square-root-alt text-white" style="font-size: 2rem;"></i>
                            </div>
                            <div class="card-wrap">
                                <div class="card-header">
                                    <h4>Matriks</h4>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="card card-statistic-1">
                            <div class="card-icon bg-success">
                                <i class="fas fa-sort-numeric-up" style="font-size: 2rem;"></i>
                            </div>
                            <div class="card-wrap">
                                <div class="card-header">
                                    <h4>Fungsi</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="card card-statistic-1">
                            <div class="card-icon bg-danger">
                                <i class="fas fa-arrows-alt-h text-white" style="font-size: 2rem;"></i>
                            </div>
                            <div class="card-wrap">
                                <div class="card-header">
                                    <h4>Barisan & Deret</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="card card-statistic-1">
                            <div class="card-icon bg-warning">
                                <i class="fas fa-chart-line text-white" style="font-size: 2rem;"></i></fas>
                            </div>
                            <div class="card-wrap">
                                <div class="card-header">
                                    <h4>Program Linier</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="card card-statistic-1">
                            <div class="card-icon bg-success">
                                <i class="fas fa-ruler-combined text-white" style="font-size: 2rem;"></i>
                            </div>
                            <div class="card-wrap">
                                <div class="card-header">
                                    <h4>Trigonometri</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="card card-statistic-1">
                            <div class="card-icon bg-info">
                                <i class="fas fa-shapes text-white" style="font-size: 2rem;"></i>
                            </div>
                            <div class="card-wrap">
                                <div class="card-header">
                                    <h4>Geometri</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="card card-statistic-1">
                            <div class="card-icon bg-warning">
                                <i class="fab fa-accusoft text-white" style="font-size: 2rem;"></i>
                            </div>
                            <div class="card-wrap">
                                <div class="card-header">
                                    <h4>Transformasi</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="card card-statistic-1">
                            <div class="card-icon bg-success">
                                <i class="fas fa-adjust text-white" style="font-size: 2rem;"></i></fas>
                            </div>
                            <div class="card-wrap">
                                <div class="card-header">
                                    <h4>Lingkaran</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="card card-statistic-1">
                            <div class="card-icon bg-info">
                                <i class="fas fa-dice-five text-white" style="font-size: 2rem;"></i>
                            </div>
                            <div class="card-wrap">
                                <div class="card-header">
                                    <h4>Peluang</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="card card-statistic-1">
                            <div class="card-icon bg-danger">
                                <i class="fas fa-chart-pie text-white" style="font-size: 2rem;"></i>
                            </div>
                            <div class="card-wrap">
                                <div class="card-header">
                                    <h4>Statistika</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="card card-statistic-1">
                            <div class="card-icon bg-success">
                                <i class="fas fa-infinity text-white" style="font-size: 2rem;"></i>
                            </div>
                            <div class="card-wrap">
                                <div class="card-header">
                                    <h4>Limit</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="card card-statistic-1">
                            <div class="card-icon bg-info">
                                <i class="fas fa-calculator text-white" style="font-size: 2rem;"></i>
                            </div>
                            <div class="card-wrap">
                                <div class="card-header">
                                    <h4>Turunan</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="card card-statistic-1">
                            <div class="card-icon bg-danger">
                                <i class="fab fa-figma text-white" style="font-size: 2rem;"></i>
                            </div>
                            <div class="card-wrap">
                                <div class="card-header">
                                    <h4>Integral</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    @endsection

    <footer class="main-footer">
        <div class="footer-left">
            Copyright &copy; 2018 <div class="bullet"></div> Design By <a href="https://nauval.in/">Muhamad Nauval
                Azhar</a>
        </div>
        <div class="footer-right">
            2.3.0
        </div>
    </footer>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
</body>

</html>