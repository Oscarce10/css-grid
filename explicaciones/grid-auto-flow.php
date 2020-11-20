<?php
if ($_SERVER["PHP_SELF"] != "/index.php") {
    header("Location: /index.php");
    exit();
}
?>
<div class="inicio">
    <h2>Grid Auto Flow - Columns</h2>
    <a href="index.php"><i class="fas fa-home fa-3x"></i></a>
</div>
<hr>

<p class="text">
    Podemos definir en qué orden se agregan nuevos items al grid. Si en forma de <code>column</code> o en
    forma de <code>row</code>
    Por defecto estos son agregados en forma de <code>row</code>
    Así que podemos cambiar esto usando <code>grid-auto-flow</code>
</p>

<div class="ex ex-1">
    <div class="text"><b>Antes</b></div>
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
                </div>
            </div>
        </div>
    </div>
    <style id="css">
        .container-grid {
            display: grid;
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
<p class="text">
    Incluso se les puede asignar un valor por defecto a los items generados por el
    navegador con <code>grid-auto-columns</code>
</p>
<div class="ex ex-2">
    <div class="text"><b>Despues</b></div>
    <div class="row">
        <div class="col-md-4">
            <h3>HTML</h3>
            <div><code class="html code" id="container-html2"></code></div>
        </div>

        <div class="col-md-4">
            <h3>CSS</h3>
            <div><code class="css code" id="container-css2"></code></div>
        </div>

        <div class="col-md-4">
            <h3>Resultado</h3>
            <div>
                <div class="container-grid2">
                    <div class="item2">1</div>
                    <div class="item2">2</div>
                    <div class="item2">3</div>
                    <div class="item2">4</div>
                    <div class="item2">5</div>
                    <div class="item2">6</div>
                </div>
            </div>
        </div>
    </div>
    <style id="css2">    .container-grid2 {
            display: grid;
            grid-template-columns: 50px 75px;
            gap: 20px;
            grid-auto-flow: column;
            grid-auto-columns: 42px;
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

<div class="links">
    <p class="link link1"><a href="index.php?p=explicaciones/dev-tools.php">Anterior ⏪</a></p>
    <p class="link link2"><a href="index.php?p=ejemplos/autoFlow.php">Ir al ejemplo</a></p>
    <p class="link link3"><a href="index.php?p=explicaciones/sizing-tracks.php">Siguiente ⏩</a></p>
</div>




