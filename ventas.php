<html lang="en">

    <head>

        <!-- Required meta tags -->

        <meta charset="utf-8">

        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">



        <!-- Bootstrap CSS -->

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">



        <title >VENTAS</title>

    </head>

    <body style="background: #265912">


        <br />

        <div  class="p-3 mb-2  text-white" align="center">

            <h1>VENTAS MEMA</h1>

        </div>



        <div align="right">

            <a href="index.html">Salir</a>

        </div>



        <br />
    <?php
      if(isset($_GET['producto']))
      {
       include('Conexion.php');
       $con= new Conexion();
       $producto=$_GET['producto'];
       $precio=$_GET['precio'];

       $query="INSERT INTO `carrito`( `producto`, `precio`) VALUES ('$producto','$precio');";
       //echo " -------- Datos de producto ".$_GET['producto']." --- Precio".$_GET['precio'];
       $consulta=$con->query($query);
       $con->close();
       ?>
      <div align="center" >
       <table align=center border="8" bgcolor="silver">
        <tr bgcolor="silver">
           <td>
            <p>Producto</p>
           </td>
           <td>
            <p>Precio</p>
           </td>
        </tr>
        <?php 
        
         $con= new Conexion();
         $query="SELECT * FROM `carrito` WHERE 1";
         $pro=$con->query($query);
         $con->close();

         while($row=mysqli_fetch_assoc($pro))
        {
         echo "
            <tr>
           <td>
            <p>".$row['producto']."</p>
           </td>
           <td>
            <p>".$row['precio']."</p>
           </td>
        </tr>
            ";
        }
        ?>
       </table>
     </div>
       <br/>
     <?php
 }
    ?>

    <div align="center" >
        <table border="1
		
		"  bgcolor="gray">
		<tr  bgcolor="silver">
		<td>NOMBRE</td>
		<td>DESCRIPCION</td>
		<td>PRODUCTO</td>
		<td>AGREGAR CARRITO</td>
		</tr>
            <tr bgcolor="silver">
                <td> FUNKO! POP de Hulk </td>
                <td>
                    -Presentada en una caja con ventana Medida: 10 cm
                    <br />
                    -Con un precio de Q130.00
                    <br />
                    -Viene embalado en una caja ilustrada y con ventanas
                </td>
                <td>   <img src="imagenes/1.jpg" height="150px" width="150px" alt="" /> </td>
				<td><a href="?producto=Hulk&precio=130">Comprar</a><td>
            </tr>
            <tr bgcolor="silver">
                <td> FUNKO! POP de Capitana Marvel </td>
                <td>
                    -Presentada en una caja con ventana Medida: 9 cm
                    <br />
                    -Con un precio de Q100.00
                    <br />
                    -Viene embalado en una caja ilustrada y con ventanas
                </td>
                <td>   <img src="imagenes/2.jpg" height="150px" width="150px" alt="" /> </td> 
				<td> <a href="?producto=CapitanaMarvel&precio=100">Comprar</a></td>
            </tr>
            <tr bgcolor="silver">
                <td> FUNKO! POP de Groot </td>
                <td>
                    -Presentada en una caja con ventana Medida: 11 cm
                    <br />
                    -Con un precio de Q149.00
                    <br />
                    -Viene embalado en una caja ilustrada y con ventanas
                </td>
                <td>   <img src="imagenes/3.jpg" height="150px" width="150px" alt="" /> </td>
				  <td><a href="?producto=Groot&precio=149">Comprar</a></td>
            </tr>
            <tr bgcolor="silver">
                <td>FUNKO! POP de Pantera negra </td>
                <td>
                    -Presentada en una caja con ventana Medida: 10 cm
                    <br />
                    -Con un precio de Q116.00
                    <br />
                    -Viene embalado en una caja ilustrada y con ventanas
                </td>
                <td>   <img src="imagenes/4.jpg" height="150px" width="150px" alt="" /> </td> 
				<td> <a href="?producto=PanteraNegra&precio=116">Comprar</a></td>
            </tr>
            <tr bgcolor="silver">
                <td> FUNKO! POP de Viuda negra </td>
                <td>
                    -Presentada en una caja con ventana Medida: 9 cm
                    <br />
                    -Con un precio de Q120.00
                    <br />
                    -Viene embalado en una caja ilustrada y con ventanas
                </td>
                <td>   <img src="imagenes/5.jpg" height="150px" width="150px" alt="" /></td>
				<td> <a href="?producto=ViudaNegra&precio=120" Comprar</a></td>
            </tr>

        </table>

    </div>
</body>
</html>