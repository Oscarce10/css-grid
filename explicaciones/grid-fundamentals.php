<?php
if ($_SERVER["PHP_SELF"] != "/index.php") {
    header("Location: /index.php");
    exit();
}
?>

<div class="inicio">
    <h2>Grid fundamentals</h2>
    <a href="index.php"><i class="fas fa-home fa-3x"></i></a>
</div>

<hr>

<p class="text">
    La idea es poder generar una especie de cuadrícula con <b>filas</b> y <b>columnas</b>
    indicadas en las reglas de estilos por medio de <code>grid&#8209;template&#8209;columns</code> y <code>grid&#8209;template&#8209;rows</code>.
    <br>Para ello debe iniciarse siempre con <code>display:grid;</code> <br>
    También podemos usar <code>gap</code> para denotar los espacios que existirán entre cada ítem de la cuadrilla.

</p>
<div id="content">
    <div class="ex-1">
        <div class="row">
            <div class="col-md-4">
                <h3>HTML</h3>
                <div class="code"><code class="html" id="container-html"></code></div>
            </div>

            <div class="col-md-4">
                <h3>CSS</h3>
                <div class="code"><code class="css" id="container-css"></code></div>
            </div>
            <div class="col-md-4">
                <h3>Resultado</h3>
                <div>
                    <div class="container-grid">
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
                        <div class="item">*</div>
                        <div class="item">0</div>
                        <div class="item">#</div>
                    </div>
                </div>
            </div>
        </div>
        <style id="css">
            .container-grid {
                display: grid;
                grid-template-columns: 100px 70px 100px;
                gap: 20px;
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
            document.getElementById("container-html").innerText = document.querySelector(".container-grid").outerHTML;
            document.getElementById("container-css").innerText = document.getElementById("css").innerHTML.trim();
        </script>
    </div>


    <hr>

    <div class="ex-2">
        <div class="row">
            <div class="col-md-4">
                <h3>HTML</h3>
                <div class="code"><code class="html" id="container-html2"></code></div>
            </div>

            <div class="col-md-4">
                <h3>CSS</h3>
                <div class="code"><code class="css" id="container-css2"></code></div>
            </div>

            <div class="col-md-4">
                <h3>Resultado</h3>
                <div>
                    <div class="container-grid2">
                        <!-- .item{$}*4-->
                        <div class="item2">1</div>
                        <div class="item2">2</div>
                        <div class="item2">3</div>
                        <div class="item2">4</div>
                    </div>
                </div>
            </div>
        </div>
        <style id="css2">
            .container-grid2 {
                display: grid;
                grid-template-rows: 40px 70px 40px 80px;
                gap: 2px;
            }

            .item2 {
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
            document.getElementById("container-html2").innerText = document.querySelector(".container-grid2").outerHTML;
            document.getElementById("container-css2").innerText = document.getElementById("css2").innerHTML.trim();
        </script>
    </div>

    <hr>

    <div class="ex-3">
        <div class="row">
            <div class="col-md-4">
                <h3>HTML</h3>
                <div class="code"><code class="html" id="container-html3"></code></div>
            </div>

            <div class="col-md-4">
                <h3>CSS</h3>
                <div class="code"><code class="css" id="container-css3"></code></div>
            </div>

            <div class="col-md-4">
                <h3>Resultado</h3>
                <div>
                    <div class="container-grid3">
                        <div class="item3">1</div>
                        <div class="item3">2</div>
                        <div class="item3">3</div>
                        <div class="item3">4</div>
                        <div class="item3">5</div>
                        <div class="item3">6</div>
                        <div class="item3">7</div>
                        <div class="item3">8</div>
                        <div class="item3">9</div>
                        <div class="item3">*</div>
                        <div class="item3">0</div>
                        <div class="item3">#</div>
                    </div>
                </div>
            </div>
        </div>
        <style id="css3">
            .container-grid3 {
                display: grid;
                grid-template-columns: repeat(3, auto);
                grid-template-rows: 60px 120px 60px 45px;
                gap: 2px;
            }

            .item3 {
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
            document.getElementById("container-html3").innerText = document.querySelector(".container-grid3").outerHTML;
            document.getElementById("container-css3").innerText = document.getElementById("css3").innerHTML.trim();
        </script>
    </div>
</div>

<hr>

<div class="links">
    <p class="link link1"><a href="index.php">Inicio</a></p>
    <p class="link link2"><a href="index.php?p=ejemplos/grid-fundamentals.php">Ir al ejemplo</a></p>
    <p class="link link3"><a href="index.php?p=explicaciones/dev-tools.php">Siguiente ⏩</a></p>
</div>