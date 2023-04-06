@extends('admin.layout')

@section('content')
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Current Time</h1>
                    </div>

                </div>

                <div class="d-flex justify-content-center">
                    <h1 id="wib-time"></h1>
                </div>


                <script>
                    function showTime() {
                        const now = new Date();
                        const utcOffset = 0;
                        const medanTime = new Date(now.getTime() + (utcOffset * 60 * 60 * 1000));
                        document.getElementById("wib-time").innerHTML = medanTime.toLocaleTimeString();
                    }
            
                    // Update the Medan time every second
                    setInterval(showTime, 1000);
                </script>
                <!-- /.container-fluid -->
@endsection('content')