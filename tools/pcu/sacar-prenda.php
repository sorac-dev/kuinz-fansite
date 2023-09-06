<?php 
if (!isset($_SESSION['logeado']) == "Si")
{
    echo "1";
    return 0;
}
$User = $_SESSION['usuario'];
$p = $_GET['p'];
$stmt = $con->prepare("SELECT * FROM `usuarios` WHERE `Username` = :usuario");
$stmt->bindParam(':usuario', $User, PDO::PARAM_STR);
$stmt->execute();
$num_rows = $stmt->rowCount();
if ($num_rows > 0)
{
    while ($datos = $stmt->fetch())
    {
        if ($datos['Online'] == 1)
        {
            echo "2";
            return 0;
        }
        $st = $con->prepare("SELECT * FROM `prendas` WHERE Propietario = :usuario AND `Web`='0'");
        $st->bindParam(':usuario', $User, PDO::PARAM_STR);
        $st->execute();
        $nums = $st->rowCount();
        if ($nums == 4)
        {
            echo "3";
            return 0;
        }
    }
}
$stm = $con->prepare("SELECT * FROM `prendas` WHERE ID=:prenda AND Propietario =:user AND `Web`= '1'");
$stm->bindParam(':user', $User, PDO::PARAM_STR);
$stm->bindParam(':prenda', $p, PDO::PARAM_INT);
$stm->execute();
$rows = $stm->rowCount();
if ($rows > 0)
{
    $slot_libre = 0;
    $slot_1 = $con->prepare("SELECT * FROM `prendas` WHERE Slot=1 AND Propietario=:user");
    $slot_1->bindParam(':user', $User, PDO::PARAM_STR);
    $slot_1->execute();
    $sl_1 = $slot_1->rowCount();
    if ($sl_1 == 0)
    {
        if ($slot_libre == 0)
        {
            $slot_libre = 1;
        }
    }
    $slot_2 = $con->prepare("SELECT * FROM `prendas` WHERE Slot=2 AND Propietario=:user");
    $slot_2->bindParam(':user', $User, PDO::PARAM_STR);
    $slot_2->execute();
    $sl_2 = $slot_2->rowCount();
    if ($sl_2 == 0)
    {
        if ($slot_libre == 0)
        {
            $slot_libre = 2;
        }
    }
    $slot_3 = $con->prepare("SELECT * FROM `prendas` WHERE Slot=3 AND Propietario=:user");
    $slot_3->bindParam(':user', $User, PDO::PARAM_STR);
    $slot_3->execute();
    $sl_3 = $slot_3->rowCount();
    if ($sl_3 == 0)
    {
        if ($slot_libre == 0)
        {
            $slot_libre = 3;
        }
    }
    $slot_4 = $con->prepare("SELECT * FROM `prendas` WHERE Slot=4 AND Propietario=:user");
    $slot_4->bindParam(':user', $User, PDO::PARAM_STR);
    $slot_4->execute();
    $sl_4 = $slot_4->rowCount();
    if ($sl_4 == 0)
    {
        if ($slot_libre == 0)
        {
            $slot_libre = 4;
        }
    }
    $stm = $con->prepare("UPDATE prendas SET Web=0,Slot=:slots WHERE ID = :prenda");
    $stm->bindParam(':slots', $slot_libre, PDO::PARAM_INT);
    $stm->bindParam(':prenda', $p, PDO::PARAM_INT);
    $stm->execute();
    echo "5";
    return 0;
}
else
{
    echo "3";
    return 0;
} ?>
