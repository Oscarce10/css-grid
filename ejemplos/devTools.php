<?php
if ($_SERVER["PHP_SELF"] != "/index.php") {
    header("Location: /index.php");
    exit();
}
?>
<p class="text">
    Si se está accediendo desde el navegador de Firefox se puede abrir la consola y buscar <b>Inspector</b> ➡ <b>Layout</b> y seleccionar el Grid a revisar.
</p>
<div class="grid-container">
    <!-- .item{$}*10-->
    <div class="item">1</div>
    <div class="item">2</div>
    <div class="item">3</div>
    <div class="item">4</div>
    <div class="item">5</div>
    <div class="item">6</div>
    <div class="item">7</div>
    <div class="item">8</div>
    <div class="item">9</div>
</div>

<style>
    .grid-container {
        /* Obligatorio para que cada item se muestre como un grid */
        display: grid;
        grid-template-columns: 100px 200px 100px;
        column-gap: 20px;
        row-gap: 30px;
    }
</style>
<hr style="border: solid 1px black">

<p><a href="index.php?p=explicaciones/dev-tools.php">Volver a
        explicación</a></p>