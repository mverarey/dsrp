<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>{@pag->titulo} :: DeSeRP {@sistema->version} {@sistema->subversion}</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
  <link rel="stylesheet" href="/assets/admin-lte/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="/assets/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="/assets/ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="/assets/admin-lte/dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="/assets/admin-lte/dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="/assets/bootstrap-table/dist/bootstrap-table.min.css">
  <link rel="stylesheet" href="/assets/deserp/DeSeRP.css">
  <link rel="stylesheet" href="/assets/notifyjs/dist/styles/metro/notify-metro.css" />
  <link rel="stylesheet" href="/assets/select2/dist/css/select2.min.css" />
  <link rel="stylesheet" href="/assets/select2-bootstrap-theme/dist/select2-bootstrap.min.css" />
  <link rel="stylesheet" href="/assets/animate.css/animate.min.css" />
  <link rel="stylesheet" href="/assets/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css" />
  <link rel="stylesheet" href="/assets/blueimp-file-upload/css/jquery.fileupload.css">
{@pag->css}
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
{@_encabezado}
</head>
{% if session.activa %}
<body class="hold-transition sidebar-mini fixed {% if session.usuario.tema %} {{session.usuario.tema}} {% else %} skin-blue {% endif %}">
{% else %}
<body class="skin-blue layout-top-nav fixed">
{% endif %}
<!-- Site wrapper -->
<div class="wrapper" id="dsmain">
  <header class="main-header">
    <!-- Logo -->
    <a href="/" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini">DSRP</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg">DeSeRP</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      {% if session.activa %}
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button"><!-- push-menu -->
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
      {% endif %}
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li><a href="#">CDMX, a <strong>{@sistema->ahoraFormat}</strong></a></li>
          {% if session.activa %}
          <!-- Messages: style can be found in dropdown.less-->
          <li><a href="#fullscreen" id="btnToggleFullscreen"><i class="fa fa-expand"></i></a></li>
          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success">4</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">Usted tiene 1 mensaje</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- start message -->
                    <a href="#">
                      <div class="pull-left">
                        <img src="/assets/admin-lte/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Emisor
                        <small><i class="fa fa-clock-o"></i> 5 mins</small>
                      </h4>
                      <p>Título del mensaje. ¿Alguna pregunta?</p>
                    </a>
                  </li>
                  <!-- end message -->
                </ul>
              </li>
              <li class="footer"><a href="#">Ver todos los mensajes</a></li>
            </ul>
          </li>
          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">10</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">Usted tiene 10 notificaciones</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> 5 new members joined today
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">Ver todo</a></li>
            </ul>
          </li>
          <!-- Tasks: style can be found in dropdown.less -->
          <li class="dropdown tasks-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-flag-o"></i>
              <span class="label label-danger">9</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 9 tasks</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Design some buttons
                        <small class="pull-right">20%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">20% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                </ul>
              </li>
              <li class="footer">
                <a href="#">View all tasks</a>
              </li>
            </ul>
          </li>
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="{{ session.usuario.imagen }}" class="user-image" alt="User Image">
              <span class="hidden-xs">{{ session.usuario.nombre }}</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="{{ session.usuario.imagen }}" class="img-circle" alt="User Image">
                <p>
                  {{ session.usuario.nombre }}
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="/app/principal/miperfil" class="btn btn-default btn-flat">Perfíl</a>
                </div>
                <div class="pull-right">
                  <a href="/wsdl/principal/logout" class="btn btn-default btn-flat" id="logout">Salir</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
          {% endif %}
        </ul>
      </div>
    </nav>
  </header>
  <!-- =============================================== -->
  <!-- Left side column. contains the sidebar -->
  {% if session.activa %}
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <div class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ session.usuario.imagen }}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{ session.usuario.nombre }}</p>
          <div id="sesion">&nbsp;</div>
        </div>
      </div>
        {@_menu}
    </div>
    <!-- /.sidebar -->
  </aside>
  {% endif %}
  <!-- =============================================== -->
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        {@pag->titulo}
      </h1>
      <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">{@pag->titulo}</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
       {@_contenido}
    <!-- /.box -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> D:  {@sistema->version} {@sistema->subversion} | T:2.4.0
    </div>
    <strong>DeSeRP: Copyright &copy; 2014-2021 <a href="http://depotserver.com">Depot Server</a>. | Theme: Copyright &copy; 2014-2021 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
    reserved.
  </footer>
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>
              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>
                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-user bg-yellow"></i>
              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>
                <p>New phone +1(800)555-1234</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>
              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>
                <p>nora@example.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-file-code-o bg-green"></i>
              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>
                <p>Execution time 5 seconds</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->
        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="label label-danger pull-right">70%</span>
              </h4>
              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Update Resume
                <span class="label label-success pull-right">95%</span>
              </h4>
              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Laravel Integration
                <span class="label label-warning pull-right">50%</span>
              </h4>
              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Back End Framework
                <span class="label label-primary pull-right">68%</span>
              </h4>
              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>
          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>
            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Allow mail redirect
              <input type="checkbox" class="pull-right" checked>
            </label>
            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Expose author name in posts
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Show me as online
              <input type="checkbox" class="pull-right" checked>
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Turn off notifications
              <input type="checkbox" class="pull-right">
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Delete chat history
              <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
            </label>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 --><script src="/assets/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 --><script src="/assets/admin-lte/bootstrap/js/bootstrap.min.js"></script>
<!-- Moment --><script src="/assets/moment/min/moment.min.js"></script>
<!-- SlimScroll --><script src="/assets/admin-lte/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick --><script src="/assets/admin-lte/plugins/fastclick/fastclick.min.js"></script>
<!-- Pace --><script src="/assets/admin-lte/plugins/pace/pace.js"></script>
<!-- AdminLTE App --><script src="/assets/admin-lte/dist/js/app.min.js"></script>
<!-- Bootstrap Table --><script src="/assets/bootstrap-table/dist/bootstrap-table.min.js"></script>
<!-- Bootstrap Table es-MX --><script src="/assets/bootstrap-table/dist/locale/bootstrap-table-es-MX.min.js"></script>
<!-- Select2 --><script src="/assets/select2/dist/js/select2.full.min.js"></script>
<!-- DeSeRP --><script src="/assets/deserp/DeSeRP.js"></script>
<!-- Bootstrap 3 Datepicker v4 --><script src="/assets/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
<script src="/assets/notifyjs/dist/notify.js"></script>
<script src="/assets/notifyjs/dist/styles/metro/notify-metro.js"></script>
<script src="/assets/select2/dist/js/i18n/es.js"></script>

<script src="/assets/blueimp-file-upload/js/vendor/jquery.ui.widget.js"></script>
<script src="/assets/blueimp-file-upload/js/jquery.iframe-transport.js"></script>
<script src="/assets/blueimp-file-upload/js/jquery.fileupload.js"></script>
{@pag->js}
<script> $(document).ready(function (){ $(this).DeSeRP(); {@pag->script} }); </script>
</body>
</html>
