<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title>GOF | home</title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
  
    <!-- bootstrap-progressbar -->
    <link href="../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="../vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>GO Familia</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>bem vindo,</span>
                <h2>Álvaro Sargento</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>Geral</h3>
                <ul class="nav side-menu">
                  <li><a href="index.html" ><i class="fa fa-home"></i> Início</a>
                  </li>
                  <li><a><i class="fa fa-edit"></i> Gestores <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a data-toggle="modal" data-target="#criarGestorModal" data-whatever="@mdo">Criar</a></li>
                      <li><a href="visualizarGestor.html">Visualizar</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-table"></i> Orçamento <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a data-toggle="modal" data-target="#criarOrcaModal" data-whatever="@mdo">Criar</a></li>
                      <li><a href="visualizarGestor.html">Visualizar</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-bar-chart-o"></i> Despesas <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="tables.html">Criar</a></li>
                      <li><a href="tables_dynamic.html">Visualizar</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-clone"></i>Relatorio <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="fixed_sidebar.html">Fixed Sidebar</a></li>
                      <li><a href="fixed_footer.html">Fixed Footer</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
              <div class="menu_section">
                <h3>Configurações</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-bug"></i> Conta <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="e_commerce.html">aaa</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-sitemap"></i> Sistema <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li><a href="#level1_1">Level One</a>
                        <li><a>Level One<span class="fa fa-chevron-down"></span></a>
                          <ul class="nav child_menu">
                            <li class="sub_menu"><a href="level2.html">Level Two</a>
                            </li>
                            <li><a href="#level2_1">Level Two</a>
                            </li>
                            <li><a href="#level2_2">Level Two</a>
                            </li>
                          </ul>
                        </li>
                        <li><a href="#level1_2">Level One</a>
                        </li>
                    </ul>
                  </li>                  
                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- page content -->
        <div class="right_col" role="main">
          <!-- top tiles -->
          <div class="container">
            <div class="row justify-content-center ">
                <h4>Gestores</h4>
            </div>
            <div class="row mb-4">
                <div class="container">
                  <div class="row">
                    <div class="col-sm">
                      <input type="search" id="form1" class="form-control" placeholder=" codigo..." />
                    </div>
                    <div class="col-sm">
                      <input type="search" id="form1" class="form-control" placeholder=" nome..." />
                    </div>
                  </div>
                </div>
            </div>      
            <div class="row">
                <div class="col-sm">
                  <?php
            // Include config file
            require_once "conexao.php";
            
            // Attempt select query execution
            $sql = "SELECT * FROM despesa";
            if($result = mysqli_query($mysqli, $sql)){
                if(mysqli_num_rows($result) > 0){
                    echo '<table class="table table-bordered table-striped">';
                        echo "<thead>";
                            echo "<tr>";
                                echo "<th>Codigo</th>";
                                echo "<th>Nome</th>";
                                echo "<th>Descricao</th>";
                                echo "<th>Accao</th>";
                            echo "</tr>";
                        echo "</thead>";
                        echo "<tbody>";
                        while($row = mysqli_fetch_array($result)){
                            echo "<tr>";
                                echo "<td>" . $row['id'] . "</td>";
                                echo "<td>" . $row['nome'] . "</td>";
                                echo "<td>" . $row['descricao'] . "</td>";
                                echo "<td>";
                                    echo '<a href="apagarOrca.php?id='. $row['id'] .'" class="mr-3" data-toggle="tooltip">actualizar</a>';
                                    echo '<a href="apagaDesp.php?id='. $row['id'] .'">apagar</a>';
                                echo "</td>";
                            echo "</tr>";
                        }
                        echo "</tbody>";                            
                    echo "</table>";
                    // Free result set
                    mysqli_free_result($result);
                } else{
                    echo '<div class="alert alert-danger"><em>No records were found.</em></div>';
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
 
            // Close connection
            mysqli_close($mysqli);
          ?>
              </div>
              </div>
            </div>
          <!-- /top tiles -->

        <!-- /page content -->

        <!-- footer content -->
        
        <!-- /footer content -->
        <!-- Modal views -->
        <!-- modal Funcionario -->
        <div class="modal fade" id="criarGestorModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Registar Gestor</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="apelido-name" class="col-form-label">Apelido</label>
                        <input type="text" class="form-control" id="apelido-name">
                        <label for="nome-name" class="col-form-label">Nome</label>
                        <input type="text" class="form-control" id="nome-name">
                        <label for="bi-name" class="col-form-label">Bilhete de Identidade</label>
                        <input type="text" class="form-control" id="bi-name"> 
                        <label for="bi-name" class="col-form-label">Sexo</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                <label class="form-check-label" for="exampleRadios1">Masculino</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                <label class="form-check-label" for="exampleRadios2">Femenino</label>
                            </div>
                        
                        <label for="bi-name" class="col-form-label">Data de Nascimento</label>
                        <input type="date" class="form-control" id="bi-name">
                    </div>

                    <div class="form-group">
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                            categoria
                            </button>
                            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
                                <li><a class="dropdown-item active" href="#">Action</a></li>
                            </ul>
                        </div>
                    </div>
                </form>
              </div>

              <!-- MOdal orcamento -->              
              <div class="modal fade" id="criarGestorModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Registar orca</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="apelido-name" class="col-form-label">Apelido</label>
                            <input type="text" class="form-control" id="apelido-name">
                            <label for="nome-name" class="col-form-label">Nome</label>
                            <input type="text" class="form-control" id="nome-name">
                            <label for="bi-name" class="col-form-label">Bilhete de Identidade</label>
                            <input type="text" class="form-control" id="bi-name"> 
                            <label for="bi-name" class="col-form-label">Sexo</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                    <label class="form-check-label" for="exampleRadios1">Masculino</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                    <label class="form-check-label" for="exampleRadios2">Femenino</label>
                                </div>
                            
                            <label for="bi-name" class="col-form-label">Data de Nascimento</label>
                            <input type="date" class="form-control" id="bi-name">
                        </div>

                        <div class="form-group">
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                                categoria
                                </button>
                                <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
                                    <li><a class="dropdown-item active" href="#">Action</a></li>
                                </ul>
                            </div>
                        </div>
                    </form>
                  </div>


              <!-- Modal views end -->
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                <button type="button" class="btn btn-primary">Guardar</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="../vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="../vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="../vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="../vendors/Flot/jquery.flot.js"></script>
    <script src="../vendors/Flot/jquery.flot.pie.js"></script>
    <script src="../vendors/Flot/jquery.flot.time.js"></script>
    <script src="../vendors/Flot/jquery.flot.stack.js"></script>
    <script src="../vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="../vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="../vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="../vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="../vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="../vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="../vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="../vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="../vendors/moment/min/moment.min.js"></script>
    <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
  
  </body>
</html>
