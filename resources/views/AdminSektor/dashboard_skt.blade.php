<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title') Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" href="{{ asset('style/assets/css/normalize.css')}}">
    <link rel="stylesheet" href="{{ asset('style/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('style/assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{ asset('style/assets/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{ asset('style/assets/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{ asset('style/assets/css/cs-skin-elastic.css')}}">
    <link rel="stylesheet" href="{{ asset('style/assets/css/lib/datatable/dataTables.bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.1/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="{{ asset('style/assets/scss/style.css')}}">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
    <link rel="icon" href="https://i.ibb.co/rpZyCm3/logo.png" sizes="32x32" type="image/png">
    <meta name="theme-color" content="#563d7c">

</head>
<body>
        <!-- Left Panel -->

        <aside id="left-panel" class="left-panel">
            <nav class="navbar navbar-expand-sm navbar-default">

                <div class="navbar-header">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="#"><img class="user-avatar rounded-circle" src="https://i.ibb.co/rpZyCm3/logo.png" width="32" height="32">
                        E-APD</a>
                   <a class="navbar-brand hidden" href="#"><img class="user-avatar rounded-circle" src="https://i.ibb.co/rpZyCm3/logo.png" width="32" height="32"></a>
                </div>

                <div id="main-menu" class="main-menu collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="{{ url('/dashboard')}}"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                            <a href="{{ url('/profile')}}"> <i class="menu-icon fa fa-user "></i>Profile </a>
                            <a href="{{ url('/verifikasi')}}"> <i class="menu-icon fa fa-check "></i>Verifikasi </a>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </nav>
        </aside><!-- /#left-panel -->
    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left">
                    </div>
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="{{ asset('foto/foto.jpg')}}" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                                <a class="nav-link" href="{{ url('/profile')}}"><i class="fa fa- user"></i>My Profile</a>
                                <a class="nav-link" href="#"><i class="fa fa-power -off"></i>Logout</a>
                        </div>
                    </div>

        </header>

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Data Table</strong>
                        </div>
                        <div class="card-body">
                  <table id="bootstrap-data-table" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Id_Ms</th>
                        <th>Kode_Sektor</th>
                        <th>Kecamatan</th>
                        <th>Wilayah_id</th>
                        <th>Detail</th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php $no=1; ?>
                        {{-- @foreach ($sektor as $data)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $data->id_ms }}</td>
                            <td>{{ $data->kode_sektor }}</td>
                            <td>{{ $data->kecamatan }}</td>
                            <td>{{ $data->wilayah_id }}</td>
                            <td>
                                <a href="{{ url('/detailsektor')}}" class="btn btn-sm btn-primary">View</a>
                            </td>
                          </tr>
                        @endforeach --}}
                    </tbody>
                  </table>
                        </div>
                    </div>
                </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->

    <!-- Right Panel -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.1/js/dataTables.bootstrap4.min.js"></script>
    <script src="{{ asset('style/assets/js/vendor/jquery-2.1.4.min.js')}}"></script>
    <script src="{{ asset('style/assets/js/popper.min.js')}}"></script>
    <script src="{{ asset('style/assets/js/plugins.js')}}"></script>
    <script src="{{ asset('style/assets/js/main.js')}}"></script>
    <script src="{{ asset('style/assets/js/lib/data-table/datatables.min.js')}}"></script>
    <script src="{{ asset('style/assets/js/lib/data-table/dataTables.bootstrap.min.js')}}"></script>
    <script src="{{ asset('style/assets/js/lib/data-table/dataTables.buttons.min.js')}}"></script>
    <script src="{{ asset('style/assets/js/lib/data-table/buttons.bootstrap.min.js')}}"></script>
    <script src="{{ asset('style/assets/js/lib/data-table/jszip.min.js')}}"></script>
    <script src="{{ asset('style/assets/js/lib/data-table/pdfmake.min.js')}}"></script>
    <script src="{{ asset('style/assets/js/lib/data-table/vfs_fonts.js')}}"></script>
    <script src="{{ asset('style/assets/js/lib/data-table/buttons.html5.min.js')}}"></script>
    <script src="{{ asset('style/assets/js/lib/data-table/buttons.print.min.js')}}"></script>
    <script src="{{ asset('style/assets/js/lib/data-table/buttons.colVis.min.js')}}"></script>
    <script src="{{ asset('style/assets/js/lib/data-table/datatables-init.js')}}"></script>

    <script type="text/javascript">
        $(document).ready(function() {
          $('#bootstrap-data-table-export').DataTable();
        } );
    </script>

</body>
</html>
