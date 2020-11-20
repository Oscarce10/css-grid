<?php
if ($_SERVER["PHP_SELF"] != "/index.php") {
    header("Location: /index.php");
    exit();
}
?>
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
    <div class="item">10</div>
</div>

<style>
    .grid-container {
        /* Obligatorio para que cada item se muestre como un grid */
        display: grid;
        /* auto no define tamaño en especifico pero hace que el
            item sea totalmente responsive */
        grid-template-columns: 100px auto 200px;
        grid-template-rows: 50px auto;
        grid-gap: 20px;
    }
</style>

<hr style="border: solid 1px black">

<p><a href="index.php?p=explicaciones/grid-fundamentals.php">Volver a
        explicación</a></p>