@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <style>
        .alert-primary {
            background-color: #42d4ee;
            color: white;
            margin-bottom: 10px;
            height: 63px;
        }

        .form-control {
            margin-bottom: -6px;
            border-color: #42d4ee;

        }

        .fa-info-circle {
            color: #42d4ee !important;

        }

        .fa-exclamation-triangle {
            color: red !important;
            font-size: 40px;
            float: left;
            align-items: center;
            /* height: ; */

            margin-top: 3px;
            margin-right: 10px;
        }

        .p {
            text-align: justify;
        }
        p{
            margin-left:35px
        }

        /* 
                .u {
                    text-align: left;
            
                } */

        /* .h {
                    float: left;
                } */

    </style>
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <div class="row">
        <div class="container-fluid">


            <div class=" justify-content-center">

                <!-- <div class="col-md-9"> -->
                <div class="card">
                    <div class="nav nav-tabs">
                        <div class="card-body">

                            <div class="h">
                                <h4 style="color: #27bcd6;"><i class="fa fa-info-circle" aria-hidden="true"></i>
                                    &nbsp; <b> Form Input Pengeluaran</b> </h4>
                                <p>Anda Dapat Mendata Pengeluaran Kegiatan Pekerjaan Setiap Harinya.</p>
                            </div>

                            <hr style="color: blue;">


                            <div class="alert  alert-primary" role="alert"> <i class="fa fa-exclamation-triangle"
                                    aria-hidden="true"></i>
                                <p class="p"> Pembangunan Toilet Sekolah 4 Pintu Dan Tempat Wudhu </p>
                            </div>
                            <form>
                                <div class="form-group">
                                    <label for="exampleInputEmail1"> <b> Deskripsi Pekerjaan </b></label>
                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">

                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1"> <b> Vol. </b></label>
                                    <input type="number" class="form-control" id="exampleInputPassword1">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1"> <b> Satuan </b></label>
                                    <div class="dropdown-menu">

                                    </div>
                                    <input type="text" class="form-control" id="exampleInputPassword1">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1"> <b>Harga Satuan (Rp.) </b> </label>
                                    <input type="text" class="form-control" id="exampleInputPassword1">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1"> <b> Jumlah Harga  </b></label>
                                    <input type="text" class="form-control" id="exampleInputPassword1" value="Rp.150.000" disabled>
                                </div>
                                <center>
                                    <button type="submit" class="btn btn-secondary">Selanjutnya</button>
                                </center>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- <div class="card-body"> -->
</body>

</html>

@endsection
