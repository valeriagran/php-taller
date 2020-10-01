<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagar</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="factura.css">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light menu">
            <img src="img/arina.svg" width="40" height="40" class="d-inline-block align-top" alt="logo" loading="lazy">
          <h3 class="nombre">BETCAKE</h3> 
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">INICIO</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="factura.php">FACTURA</a>
                        </li>
                     </ul>
                </div>
    </header>
    <main>
    <div class= "container">
            <div class= "row justify-content-center mt-5">
                <div class= "col-4">

                  <form action= "factura.php" method= "POST">
                    <h3 class= "text-center mb-4">Factura de compra</h3>
                      <div class="row mb-3">
                        <div class="col">
                          <input type="text" class="form-control" placeholder="Producto 1" name="producto1">
                        </div>
                        <div class="col">
                          <input type="number" class="form-control" placeholder="Precio($)" name="precio1">
                        </div>
                      </div>
                          <div class="row mb-3">
                            <div class="col"> 
                              <input type="text" class="form-control" placeholder="Producto 2" name="producto2">
                            </div>
                          <div class="col">
                            <input type="number" class="form-control" placeholder="Precio($)" name="precio2">
                          </div>
                        </div>
                      <div class="row mb-3">
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Producto 3" name= "producto3">
                        </div>
                        <div class="col">
                            <input type="number" class="form-control" placeholder="Precio($)"name= "precio3">
                        </div>
                      </div>
                      <div class="row mb-3">
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Producto 4"name= "producto4">
                        </div>
                        <div class="col">
                            <input type="number" class="form-control" placeholder="Precio($)"name= "precio4">
                        </div>
                      </div>
                      <div class="row mb-3">
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Producto 5"name= "producto5">
                        </div>
                        <div class="col">
                            <input type="number" class="form-control" placeholder="Precio($)"name= "precio5">
                        </div>
                      </div>
                      <button type="submit" class="btn btn-primary btn-block" name="botonCalcular">Pagar</button>
                    </form>
                </div>
            </div>  

            <?php if(isset($_POST["botonCalcular"])): ?>
              <h6 class= "text-center mt-4">
                  <?php
                     $precio1=$_POST["precio1"];
                     $producto1=$_POST["producto1"];

                     $precio2=$_POST["precio2"];
                     $producto2=$_POST["producto2"];

                     $precio3=$_POST["precio3"];
                     $producto3=$_POST["producto3"];

                     $precio4=$_POST["precio4"];
                     $producto4=$_POST["producto4"];

                     $precio5=$_POST["precio5"];
                     $producto5=$_POST["producto5"];

                     $total= $precio1 + $precio2 + $precio3 + $precio4 + $precio5;

                     echo("el producto 1 es: ".$producto1."------".$precio1);
                     echo("<br>");
                     echo("el producto 2 es: ".$producto2."------".$precio2);
                     echo("<br>");
                     echo("el producto 3 es: ".$producto3."------".$precio3);
                     echo("<br>");
                     echo("el producto 4 es: ".$producto4."------".$precio4);
                     echo("<br>");
                     echo("el producto 5 es: ".$producto5."------".$precio5);
                     echo("<br>");
                     echo("<br>");
                     echo("********************************");
                     echo("<br>");
                     echo("<br>");
                     echo("El total de la compra es: ".$total);
                  ?>
              </h6>           
            <?php endif; ?>


        </div>
    </main>
    <footer>
      <hr>
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6">
                    <p>VALERIA BETANCUR GRANDA</p>
                    <p>valebeta-8217@outlook.es</p>
            </div>
                <div class="col-12 col-md-6">
                    <P>Tel: 3027832792</P>
                    <P>Medellin</P>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-12">
                    <p>BETCAKE | Deliciosos postres.</P> 
                </div>
            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>
</html>