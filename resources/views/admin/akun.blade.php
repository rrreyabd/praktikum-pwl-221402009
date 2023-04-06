@extends('admin.layout')

@section('content')
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Pengguna</h1>
                    </div>

                </div>

                <div class="card text-black mx-3" style="border-radius: 25px;">
                    <div class="card-body p-md-5">
                        <div class="row justify-content-center">
                            <table id="basic-datatables" class="display table table-bordered table-hover">
                                    <tr>
                                        <th style="width: 7%;">No</th>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Username</th>
                                        <th>Role</th>
                                    </tr>
                                    <tr>
                                        <th style="width: 7%;">1</th>
                                        <th>Muhammad Raihan Abdillah Lubis</th>
                                        <th>rrreyabd@gmail.com</th>
                                        <th>rrreyabd</th>
                                        <th>User</th>
                                    </tr>
                                    <tr>
                                        <th style="width: 7%;">2</th>
                                        <th>Woo Ji Ho</th>
                                        <th>zico@gmail.com</th>
                                        <th>woozico</th>
                                        <th>User</th>
                                    </tr>
                                    <tr>
                                        <th style="width: 7%;">3</th>
                                        <th>Kendrick Lamar Duckworth</th>
                                        <th>kndrlmr@gmail.com</th>
                                        <th>kendricklamar</th>
                                        <th>User</th>
                                    </tr>
                                    <tr>
                                        <th style="width: 7%;">3</th>
                                        <th>Kang Bak So</th>
                                        <th>pbakso@gmail.com</th>
                                        <th>baksoyo</th>
                                        <th>User</th>
                                    </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->
@endsection('content')