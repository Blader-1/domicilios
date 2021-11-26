
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Gestion de pedidos</title>
        <!-- Favicon-->
        <link rel="icon" type="<?php echo base_url('admin/');?>image/x-icon" href="<?php echo base_url('admin/');?>assets/favicon.ico" />
        <!-- Bootstrap Icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <!-- SimpleLightbox plugin CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="<?php echo base_url('admin/');?>css/styles.css" rel="stylesheet" />
        <link href="<?php echo base_url('admin/');?>css/bootstrap.css" rel="stylesheet" />
        <link href="<?php echo base_url('admin/');?>css/bootstrap.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="<?php echo base_url('');?>Pagina">Pagina de Inicio</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto my-2 my-lg-0">
                        <li class="nav-item"><a class="nav-link" href="<?php echo base_url('');?>Pagina">Pagina</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?php echo base_url('');?>Leer">Comidas</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?php echo base_url('');?>Mexico">Mexico</a></li>
                        
                    </ul>
                </div>
            </div>
        </nav>
        <header class="masthead">
        <div class="container">
                    <div class="shadow-lg p-3 mb-5 mt-6 bg-light rounded">
                          <table id="example" class="table table-hover">
                            <thead>
                                    <tr class="table table-dark">
                                        <th>Nombre</th>
                                        <th>Telefono</th>
                                        <th>Pedido</th>
                                        <th>Direccion</th>
                                        <th>Estado pedido</th>
                                        <th>Opcion</th>
                                    </tr>
                                </thead>
                                    <?php if(!empty($pedidos)): ?>
                                    <?php foreach ($pedidos as $pedido ):?>
                                <tbody class="table table-striped">
                                    <td> <?php echo $pedido->nombre; ?> </td>
                                    <td> <?php echo $pedido->telefono; ?> </td>
                                    <td> <?php echo $pedido->pedido; ?> </td>
                                    <td> <?php echo $pedido->direccion; ?> </td>
                                    <td> <?php echo $pedido->Estadopedido; ?> </td>
                                    <td>
                                    <STYLE>A {text-decoration: none;} </STYLE>
                                    <a href="<?php echo base_url(). 'pdf/index.php'?>" class="fa fa-download" style="color: blue;"></a>     
                                    </td>
                                </tbody>
                            
                                    <?php endforeach; ?>
                                    <?php endif; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
    </header>
      <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
 
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script> 
    </body>
</html>