<head class="main-header">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  
  <link rel="stylesheet" href="../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.6.0/css/all.css" crossorigin="anonymous">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
  
  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Buscar...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Menú</li>
        <li>
          <a href="dashboard">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>            
          </a>
        </li>

        <li>
          <a href="tarea">
            <i class="fa fa-clipboard-check"></i> <span>Tarea</span>
          </a>
        </li>

        <li>
          <a href="../modulos/clientePotencial.php">
            <i class="fa fa-user-tie"></i> <span>Cliente Potencial</span>
          </a>
        </li>
        <li>
          <a href="proveedores">
            <i class="fa fa-dolly"></i> <span>Proveedores</span>
          </a>
        </li>

        
        <li class="treeview">
          <a href="inventario">
            <i class="fa fa-boxes-stacked"></i> <span>Inventario</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="index.html"><i class="fa fa-circle-o"></i> Crear Producto</a></li>
            <li><a href="index2.html"><i class="fa fa-circle-o"></i> Listado de Productos</a></li>
          </ul>
        </li>

        <li>
          <a href="ordenesTrabajo">
            <i class="fa fa-clipboard-list"></i> <span>Órdenes de Trabajo</span>
          </a>
        </li>

        <li class="treeview">
          <a href="ventas">
            <i class="fa fa-cart-shopping"></i> <span>Ventas</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="index.html"><i class="fa fa-circle-o"></i> Cotización</a></li>
            <li><a href="index2.html"><i class="fa fa-circle-o"></i> Nueva Venta</a></li>
          </ul>
        </li>

        <li>
          <a href="finanzas">
            <i class="fa fa-chart-line"></i> <span>Finanzas</span>
          </a>
        </li>

        <li>
          <a href="talleres">
            <i class="fa fa-wrench"></i> <span>Talleres</span>
          </a>
        </li>

        <li>
          <a href="clientes">
            <i class="fa fa-user-group"></i> <span>Clientes</span>
          </a>
        </li>

        <li>
          <a href="vehiculos">
            <i class="fa fa-car"></i> <span>Vehículos</span>
          </a>
        </li>

        <hr style="width: 90%;">
        
        <li>
          <a href="informes">
            <i class="fa fa-rectangle-list"></i> <span>Informes</span>
          </a>
        </li>

        <li>
          <a href="usuarios">
          <i class="fas fa-users-cog"></i> <span>Usuarios</span>
          </a>
        </li>
        
        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>