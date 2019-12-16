@extends('layouts.app')



<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=-2">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
    <title>Detail RAB</title>
</head>
<style>
    .thead {
        background-color: #42d4ee;
        color: white;
        text-align: justify;
    }

    .alert-primary {
        background-color: #42d4ee !important;
        color: white !important;
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

    div .fa-exclamation-triangle {
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

    td {
        text-align: justify;

    }

    td .fa-trash {
        color: black;
        align-items: center;
        text-align: justify;
        font-size: 30px;
    }

    p {
        margin-left: 40px;
    }


    /* .h {
        float: left;
    } */

</style>
<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
@section('content')

<body>
    <div class="row">
        <div class="container-fluid">
            <div class=" justify-content-center">

                <!-- <div class="col-md-9"> -->
                <div class="card">
                    <div class="nav nav-tabs">
                        <div class="card-body">
                            <div class="h">
                                <h4 style="color: #27bcd6;"><i class="fa fa-info-circle" aria-hidden="true"></i>
                                    &nbsp; <b>Detail RAB</b> </h4>
                                <p>Menampilkan Data Rekapan Pengeluaran Per Kegiatan atau Pekerjaan.</p>
                            </div>

                            <hr>


                            <div class="alert  alert-primary" role="alert"> <i class="fa fa-exclamation-triangle"
                                    aria-hidden="true"></i>
                                <div>
                                    <p class="p"> Pembangunan Toilet Sekolah 4 Pintu Dan Tempat Wudhu </p>
                                </div>
                            </div>
                            <h6> <b> Daftar </b></h6>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class="thead">
                                        <tr>

                                            <th>Desk.</th>
                                            <th>Vol/Sat</th>
                                            <th>Harga</th>
                                            <th>Total</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($detail as $p)
                                        <tr>
                                            <td>{{ $p->desk }}</td>
                                            <td>{{ $p->vol }}</td>
                                            <td>{{ $p->harga }}</td>
                                            <td>{{ $p->total }}</td>
                                            <td>
                                                <a href="/detail/hapus/{{ $p->id }}"><i class="fa fa-trash"
                                                        aria-hidden="true"></i></a>

                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>

</html>
@endsection
