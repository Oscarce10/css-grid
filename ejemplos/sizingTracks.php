<?php
if ($_SERVER["PHP_SELF"] != "/index.php") {
    header("Location: /index.php");
    exit();
}
?>
<div class="grid-container1">
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
    <div class="item">11</div>
    <div class="item">12</div>
    <div class="item">13</div>
    <div class="item">14</div>
    <div class="item">15</div>
</div>
<br>
<div class="grid-container2">
    <div class="item2">Programming is funny</div>
    <div class="item2">Here's remaining free space</div>
    <div class="item2">Text short</div>
    <div class="item2">4</div>
    <div class="item2">This text is longer than first</div>
    <div class="item2">6</div>

</div>
<style>
    .grid-container1 {
        display: grid;
        grid-gap: 20px;
        /* Using percentages may cause problems when exceding 100%
    Note that we most include grid-gap*/
        grid-template-columns: 25% 25% 25% 25%;
        border: 10px solid var(--yellow);
        grid-template-columns: 200px 200px;

        /* Instead we gonna use the fr unit that organizes
    total free space and places grids as we require
    10 fr takes up 10 times the amount of the free space*/
        grid-template-columns: 1fr 1fr 2fr 1fr;
        grid-template-rows: 1fr 10fr 1fr 1fr;

        /* fr unit adjusts automatically grids according to container's height */
        height: 600px;
    }

    .grid-container2 {
        display: grid;
        grid-gap: 20px;
        /* Auto adjusts automatically grid according its content
    remaining free space is occuped with 1 fr*/
        grid-template-columns: auto 1fr;
        border: 10px solid black;
        height: 400px;
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

<p><a href="index.php?p=explicaciones/sizing-tracks.php">Volver a
        explicación</a></p>