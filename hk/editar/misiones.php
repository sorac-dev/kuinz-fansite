<?php

include "../../Templates/Hk_Head_2.php";



$query = $link->query('SELECT rank FROM usuarios WHERE username = "' .$username. '"');

while($row = mysqli_fetch_array($query))

{

  $rangouser = $row['rank'];

}

if(in_array($rangouser, array(1,2))){
  header("Location: ".$_SERVER['HTTP_REFERER']);
  exit;
}


include "../../Templates/Hk_Nav.php";

?>

	  <div class="container">

      <!-- Main component for a primary marketing message or call to action -->

     <div class="row">

<div class="col-md-8">

          <div class="panel panel-default">

                  <div class="panel-heading blue">

              <h3 class="panel-title">Editar Mision</h3>

            </div>

            <div class="panel-body">



              <?php

$id = $_GET['id'];

$consulta =<<<SQL

SELECT *

FROM

misiones WHERE id = '$id'

LIMIT 1

SQL;

 $filas = $link->query($consulta);

  $columnas = mysqli_fetch_assoc($filas);

?>

<div class="formulariohk">

              <form method="post" action="../actualizar/misiones.php">

			  <input type="hidden" name="id" value="<?php echo $columnas['id']; ?>"/>



              <label>Titulo Mision</label>

                    <input style="margin-bottom: 10px;" type="text" required="" class="form-control" name="titulo" placeholder="Titulo Mision" value="<?php echo $columnas['titulo']; ?>" />  <br>



                    <label>Fecha actual</label>

                    <input style="margin-bottom: 10px; width:200px;" type="date" class="form-control" required="" name="fecha" placeholder="Fecha" value="<?php echo $columnas['fecha']; ?>" />  <br>



                     <label>Mision</label>

                    <textarea name="mision" style="margin:10px;" cols="80" required="" rows="20" id='edit'><?php echo $columnas['texto']; ?></textarea>  <br>



                    <center><input class="btn btn-primary" type="submit" value="Guardar" style="width: 120px;" /></center>

                      </form>

</div></div>

			</div>

          </div>



		</div>

      </div><!-- /container -->

<?php 



include "../../Templates/Hk_Footer_2.php";



?>

