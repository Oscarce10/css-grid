<?php
if ($_SERVER["PHP_SELF"] != "/index.php") {
    header("Location: /index.php");
    exit();
}
?>
<div class="container-grid">
    <div class="item">1</div>
    <div class="item">2</div>
    <div class="item">3</div>
    <div class="item">4</div>
    <div class="item">5</div>
    <div class="item">6</div>
    <div class="item">7</div>
    <div class="item">8</div>
</div>

<br>
<br>
<br>

<div class="container-grid2">
    <div class="item2">1</div>
    <div class="item2">2</div>
    <div class="item2">3</div>
    <div class="item2">4</div>
    <div class="item2">5</div>
    <div class="item2">6</div>
    <div class="item2">7</div>
    <div class="item2">8</div>
    <div class="item2">9</div>
    <div class="item2">10</div>
    <div class="item2">11</div>
    <div class="item2">12</div>
    <div class="item2">13</div>
    <div class="item2">14</div>
    <div class="item2">15</div>
    <div class="item2">16</div>
</div>

<style>
    .container-grid {
        display: grid;
        gap: 20px;
        /* This: */
        grid-template-columns: 100px 100px 100px 100px;
        /* Can be repaced with this: */
        grid-template-columns: repeat(5, 100px);
    }

    .container-grid2 {
        display: grid;
        grid-gap: 20px;
        /* Se repiten 2 veces las medidas 50px auto 200px y por ultimo auto */
        grid-template-rows: 100px auto repeat(2, 50px auto 200px) auto;
        grid-auto-flow: column;
    }

    .item2 {
        /* We center the contents of these items. You can also do this with flexbox too! */
        display: grid;
        justify-content: center;
        align-items: center;
        text-align: center;
        border: 5px solid rgba(0, 0, 0, 0.03);
        border-radius: 3px;
        font-size: 35px;
        background-color: tomato;
    }
</style>

<hr style="border: solid 1px black">

<p><a href="index.php?p=explicaciones/repeat-function.php">Volver a
        explicación</a></p>