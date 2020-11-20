<?php
if ($_SERVER["PHP_SELF"] != "/index.php") {
    header("Location: /index.php");
    exit();
}
?>
<div class="inicio">
    <h2>Repeat function</h2>
    <a href="index.php"><i class="fas fa-home fa-3x"></i></a>
</div>
<hr>

<p class="text">Un <code>repeat()</code> sirve para indicar que elementos vamos a colocar y el tamaño que tendrán
    al ocupar una columna o una fila dependiendo del caso. Ó lo que sería, reemplazar algo como esto <code>grid&#8209;template&#8209;columns:&nbsp;100px&nbsp;100px&nbsp;100px&nbsp;100px</code>.
    Por esto <code>grid&#8209;template&#8209;columns:&nbsp;repeat(5,&nbsp;100px);</code>
</p>
<div class="ex ex-1">
    <div class="row">
        <div class="col-md-4">
            <h3>HTML</h3>
            <div><code class="html code" id="container-html"></code></div>
        </div>

        <div class="col-md-4">
            <h3>CSS</h3>
            <div><code class="css code" id="container-css"></code></div>
        </div>

        <div class="col-md-4">
            <h3>Resultado</h3>
            <div>
                <div class="container-grid">
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
            </div>
        </div>
    </div>
    <style id="css">
        .container-grid {
            display: grid;
            gap: 5px;
            grid-template-columns: 80px repeat(2, 50px 35px) 100px;
        }

        .item {
            background-color: #123456;
            border: solid black 1px;
            align-items: center;
            font-size: 12px;
            font-weight: bold;
            text-align: center;
            color: white;
        }
    </style>

    <script>
        document.getElementById("container-html").innerText = document.querySelector(".container-grid").outerHTML;
        document.getElementById("container-css").innerText = document.getElementById("css").innerHTML.trim();
    </script>
</div>

<hr>

<p class="text">En este caso, vemos que todos los elementos de la columna 1 ocupan un espacio de 100px
    en la segunda columna se reparten 2 elementos. Un elemento ocupa <code>1fr</code> mientras que el otro ocupa un
    tamaño
    automático y esto se repite una vez mas. En la tercera columna, los elementos ocupan 200px y en la ultima
    columna
    un elemento ocupa <code>5fr</code> y esto se repite dos veces.
</p>


<div class="ex ex-2">
    <div class="row">
        <div class="col-md-5">
            <h3>CSS</h3>
            <div><code class="css code" id="container-css2"></code></div>
        </div>
        <div class="col-md-7">
            <h3>Resultado</h3>
            <div>
                <div class="container-grid2">
                    <div class="item">1</div>
                    <div class="item">2</div>
                    <div class="item">3</div>
                    <div class="item">4</div>
                    <div class="item">5</div>
                    <div class="item">6</div>
                    <div class="item">7</div>
                    <div class="item">8</div>
                    <div class="item">9</div>
                    <div class="item">100</div>
                    <div class="item">11</div>
                    <div class="item">12</div>
                    <div class="item">13</div>
                    <div class="item">14</div>
                    <div class="item">15</div>
                </div>
            </div>
        </div>
    </div>
    <style id="css2">
        .container-grid2 {
            display: grid;
            grid-template-columns: 100px repeat(2, 1fr) 200px repeat(3, 5fr);
        }

        .item {
            background-color: #123456;
            border: solid black 1px;
            align-items: center;
            font-size: 24px;
            font-weight: bold;
            text-align: center;
            color: white;
        }
    </style>

    <script>
        document.getElementById("container-css2").innerText = document.getElementById("css2").innerHTML.trim();
    </script>
</div>

<hr>

<div class="links">
    <p class="link link1"><a href="index.php?p=explicaciones/sizing-tracks.php">Anterior ⏪</a></p>
    <p class="link link2"><a href="index.php?p=ejemplos/repeatFunction.php">Ir al ejemplo</a></p>
    <p class="link link3"><a href="index.php?p=explicaciones/span.php">Siguiente ⏩</a></p>
</div>
