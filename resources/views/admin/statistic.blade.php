@extends('admin.layout')

@section('content')
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Statistik</h1>
                    </div>

                </div>

                <div class="card text-black mx-3" style="border-radius: 25px;">
                    <div class="card-body p-md-5">
                        <div class="chart-area">
                            <canvas id="myAreaChart"></canvas>
                        </div>
                    </div>
                </div>

                <!-- /.container-fluid -->
@endsection('content')