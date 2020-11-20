<?php
if ($_SERVER["PHP_SELF"] != "/index.php") {
    header("Location: /index.php");
    exit();
}
?>
<style>
    .grid-container {
        /* Obligatorio para que cada item se muestre como un grid */
        display: grid;
        /* auto no define tamaño en especifico pero hace que el
       item sea totalmente responsive */
        grid-template-columns: 100px 70px;
        grid-gap: 20px;
        /* No hace nada porque es el default */
        grid-auto-flow: row;
        /* Ahora los grid implicitos se agregan en las columnas */
        grid-auto-flow: column;
        grid-auto-columns: 35px;
    }
</style>


<div class="grid-container">
    <!-- .item{$}*10-->
    <div class="item">1</div>
    <div class="item">2</div>
    <div class="item">3</div>
    <div class="item">4</div>
    <div class="item">5</div>
    <div class="item">6</div>
</div>

<hr style="border: solid 1px black">

<p><a href="index.php?p=explicaciones/grid-auto-flow.php">Volver a
        explicación</a></p>

