<?php
include "../../Templates/Hk_Head_2.php";

$query = $link->query('SELECT rank FROM usuarios WHERE username = "' .$username. '"');
while($row = mysqli_fetch_array($query))
{
  $rangouser = $row['rank'];
}
if(in_array($rangouser, array(1,2,3))){
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
              <h3 class="panel-title">Editar Furni</h3>
            </div>
            <div class="panel-body">

              <?php
$id = $_GET['id'];
$consulta =<<<SQL
SELECT *
FROM
furnis WHERE id = '$id'
LIMIT 1
SQL;
 $filas = $link->query($consulta);
  $columnas = mysqli_fetch_assoc($filas);
?>
<div class="formulariohk">
              <form method="post" action="../actualizar/furni.php">
			  <input type="hidden" name="id" value="<?php echo $columnas['id']; ?>"/>

              <label>Nombre</label>
             <input style="margin-bottom: 10px;" type="text" required="" class="form-control" name="nombre" placeholder="El nombre del furni" value="<?php echo $columnas['nombre']; ?>" />  <br>

              <label>Imagen URL</label>
              <input style="margin-bottom: 10px;" type="text" class="form-control" name="imagen" placeholder="La imagen URL" required="" value="<?php echo $columnas['imagen']; ?>" />  <br>
<?php
if("$columnas[icon]"=="http://i.imgur.com/QpP3wav.png"){
  $nombre_icon = "Creditos";
}
if("$columnas[icon]"=="http://i.imgur.com/hntEBNE.png"){
  $nombre_icon = "Sofa polar";
}
if("$columnas[icon]"=="http://i.imgur.com/NBanQ6z.png"){
  $nombre_icon = "Vip";
}
if("$columnas[icon]"=="http://i.imgur.com/6nXSdBS.png"){
  $nombre_icon = "Throne";
}
if("$columnas[icon]"=="http://i.imgur.com/2sjGOmJ.png"){
  $nombre_icon = "Diamante";
}

 ?>
                    <label>Icono de compra</label><br>
                    <select required="" name="icon">
                    <option value="<?php echo $columnas['icon']; ?>"><?php echo $nombre_icon; ?></option>
                    <option value="<?php echo $columnas['icon']; ?>"></option>
                    <option value="https://v2.kekocity.com/uploads/02/8/a/f/2/b8af2c5071a22e891c22e601b5ee408c.png">Fichas</option>
                    </select><br><br>
<?php
    $secciones_query = $link->query("SELECT * FROM secciones_furnis WHERE tipo_n = '".$columnas['seccion']."'");
    while ($seccion = mysqli_fetch_array($secciones_query)) {
      $nombre_real_seccion = $seccion['nombre'];
    }
?>

                    <label>Seccion del Furni</label><br>
                    <select required="" name="seccion">
                    <option value="<?php echo $columnas['seccion']; ?>"><?php echo $nombre_real_seccion; ?></option>
                    <option value="<?php echo $columnas['seccion']; ?>"></option>
                    <?php 
                    $consulta = $link->query("SELECT * FROM secciones_furnis");
                    while ($row = mysqli_fetch_array($consulta)) {?>
                    <option value="<?php echo $row['id']; ?>"><?php echo $row['nombre']; ?></option>
                    <?php } ?>
                    </select><br><br>

                                         <label>Valor del furni</label>
              <input style="margin-bottom: 10px;width: 220px;" type="text" class="form-control" name="creditos" placeholder="El valor del furni" required="" value="<?php echo $columnas['creditos']; ?>" />  <br>
			  
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
