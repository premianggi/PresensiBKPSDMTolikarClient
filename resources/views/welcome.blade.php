
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SIPP_BKPSSDM|Tolikara</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{asset('/adminlte/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('/adminlte/bower_components/font-awesome/css/font-awesome.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{asset('/adminlte/bower_components/Ionicons/css/ionicons.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('/adminlte/dist/css/AdminLTE.min.css')}}">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{{asset('/adminlte/dist/css/skins/_all-skins.min.css')}}">

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">

  <header class="main-header">
    <nav class="navbar navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <a href="#" class="navbar-brand"><b>SIP_BKPSDM</b>Tolikara</a>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
            <i class="fa fa-bars"></i>
          </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
          <ul class="nav navbar-nav">

          </ul>
        </div>

      </div>
      <!-- /.container-fluid -->
    </nav>
  </header>
  <!-- Full Width Column -->
  <div class="content-wrapper">
    <div class="container">
    
      <!-- Main content -->
      <section class="content">
        <div class="box box-default">
          <div class="box-header with-border">
            <div class="container">
              <div class="row">
                  <div class="col-md-6" style="border:1px dotted;padding:30px;">
                          <div class="title m-b-md">
                            <p class="login-box-msg"><img src="{{asset('/adminlte/dist/img/logoTolikara.png')}}" width="100px"><br>Sistem Informasi Presensi BKPSDM Tolikara</p>
                            <hr>
                              </div>
                              @include('alert')

                              {{ Form::open(['url'=>'kirim-data-absen'])}}
                              <div class="row">
                                  <div class="col-md-5">
                                      <label>Periode Awal</label>
                                      <input type="date" name="mulai" class="form-control" placeholder="Periode Mulai">
                                  </div>
                                  <div class="col-md-5">
                                      <label>Periode Akhir</label>
                                      <input type="date" name="selesai" class="form-control" placeholder="Periode Mulai">
                                  </div>

                                  <div class="col-md-2">
                                          <label> &nbsp;&nbsp; </label>
                                      <button type="submit" class="btn btn-danger">Kirim Data</button>
                                  </div>
                              </div>
                              </form>
                  </div>
                  <div class="col-md-5" style="border: 1px" dotted; padding:30px>
                          <div class="alert alert-success" role="alert">
                                  <b>Status Server</b> : <b>Connected</b>
                          </div>
                          <div class="alert alert-primary" role="alert">
                                 <h4>Informasi : </h4>
                                 <hr>
                                 silahkan input periode kehadiran yang ingin diproses dari mulai hari H sampai H + 1.
                                 <br>
                                 Contoh : 1 Januari 2019 Sampai 2 januari 2019 ( H+1 Digunakan Untuk Mendapatkan Informasi Shift 2S1 )
                                </div>
                  </div>
              </div>
          </div>
          </div>
        </div>
        <!-- /.box -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.container -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="container">
      <div class="pull-right hidden-xs">
        <b>Version</b> 2.4.13
      </div>
      <strong>Copyright &copy; 2020 <a href="#">Sistem Informasi Presensi BKPSDM Tolikara</a>.</strong> All rights
      reserved.
    </div>
    <!-- /.container -->
  </footer>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="{{asset('/adminlte/bower_components/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{asset('/adminlte/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- SlimScroll -->
<script src="{{asset('/adminlte/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
<!-- FastClick -->
<script src="{{asset('/adminlte/bower_components/fastclick/lib/fastclick.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('/adminlte/dist/js/adminlte.min.js')}}"></script>
</body>
</html>
