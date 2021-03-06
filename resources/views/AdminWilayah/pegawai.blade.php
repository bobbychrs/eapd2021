
<!doctype html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title') Daftar Anggota</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.1/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="{{ asset('style/assets/css/normalize.css')}}">
    <link rel="stylesheet" href="{{ asset('style/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('style/assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{ asset('style/assets/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{ asset('style/assets/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{ asset('style/assets/css/cs-skin-elastic.css')}}">
    <link rel="stylesheet" href="{{ asset('style/assets/css/lib/datatable/dataTables.bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('style/assets/scss/style.css')}}">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
    <link rel="icon" href="https://i.ibb.co/rpZyCm3/logo.png" sizes="32x32" type="image/png">
</head>

<body>
      <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./">E-APD</a>
                <a class="navbar-brand hidden" href="./">E</a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li>
                      <a href="{{ url('/')}}"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                      <a href="{{ url('/pegawai/create')}}"> <i class="menu-icon fa fa-group "></i>Tambah Pegawai </a>
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
                        <div class="dropdown for-notification">
                          <button class="btn btn-secondary dropdown-toggle" type="button" id="notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-bell"></i>
                            <span class="count bg-danger">5</span>
                          </button>
                          <div class="dropdown-menu" aria-labelledby="notification">
                            <p class="red">You have 3 Notification</p>
                            <a class="dropdown-item media bg-flat-color-1" href="#">
                                <i class="fa fa-check"></i>
                                <p>Server #1 overloaded.</p>
                            </a>
                            <a class="dropdown-item media bg-flat-color-4" href="#">
                                <i class="fa fa-info"></i>
                                <p>Server #2 overloaded.</p>
                            </a>
                            <a class="dropdown-item media bg-flat-color-5" href="#">
                                <i class="fa fa-warning"></i>
                                <p>Server #3 overloaded.</p>
                            </a>
                          </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <strong class="user-title">Admin Jakarta Selatan</strong>
                        {{-- <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="{{ asset('style/images/admin.jpg')}}" alt="User Avatar">
                        </a> --}}
                        <div class="user-menu dropdown-menu">
                                <a class="nav-link" href="{{ url('/profile')}}"><i class="fa fa- user"></i>My Profile</a>
                                <a class="nav-link" href="#"><i class="fa fa- user"></i>Notifications <span class="count">5</span></a>
                                <a class="nav-link" href="#"><i class="fa fa-power -off"></i>Logout</a>
                        </div>
                    </div>
        </header>

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Daftar Pegawai</strong>
                        </div>
                        @if (session('pesan'))
                            <div class="alert alert-success alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <h4><i class="icon fa fa-check"></i> Berhasil</h4>
                                {{ session('pesan') }}.
                            </div>
                        @endif
                        <div class="container mt-3">
                            <table id="examplee" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                    <a class="btn btn-primary" href="{{ url('/pegawai/create') }}"> Add Anggota</a>
                                    <br/>
                                    <br/>
                                <tr>
                                    <th>No</th>
                                    <th>NIP</th>
                                    <th>NRK</th>
                                    <th>PHL</th>
                                    <th>Nama</th>
                                    <th>Jabatan</th>
                                    <th>Kode Pos</th>
                                    <th>No Telepon</th>
                                    <th>Group Piket</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <?php $no=1; ?>
                                    @foreach ($dtPegawai as $data)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $data->NIP }}</td>
                                        <td>{{ $data->NRK }}</td>
                                        <td>{{ $data->phl }}</td>
                                        <td>{{ $data->nama }}</td>
                                        <td>{{ $data->jabatan_id }}</td>
                                        <td>{{ $data->kode_pos}}</td>
                                        <td>{{ $data->no_telepon }}</td>
                                        <td>{{ $data->group_piket }}</td>
                                        <td><a class="btn btn-primary" href="/sudinselatan/detail/{{ $data->NRK }}">Detail</td>
                                    </tr>
                                    @endforeach
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
                $('#examplee').DataTable();
            } );
        </script>
</body>
</html>
