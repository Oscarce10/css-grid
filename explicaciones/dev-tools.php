<?php
if ($_SERVER["PHP_SELF"] != "/index.php") {
    header("Location: /index.php");
    exit();
}
?>
<div class="inicio">
    <h2>Dev Tools</h2>
    <a href="index.php"><i class="fas fa-home fa-3x"></i></a>
</div>
<hr>

<div>
    <p class="text">
        Si abrimos la consola de <i>developer tools</i> usando el navegador de <a href="https://www.mozilla.org/es-ES/firefox/developer/" target="_blank">
            Firefox Browser Developer Edition</a>,
        podemos encontrar unos números denominados <b>tracks</b> que marcan el comienzo y el fin de cada <b>fila</b> y
        <b>columna</b>
    </p>
    <div class="image">
        <img src="assets/img/tracks.PNG" alt="tracks css grid">
    </div>
    <p class="text">
        Adicionalmente, se crean varias líneas unas <b>continuas</b> y otras <b>punteadas</b>
    </p>
    <div class="text">
        <ul>
            <li>
                La línea <b>cortada vertical</b> la entendemos como un <a href="https://www.smashingmagazine.com/2020/01/understanding-css-grid-lines/" target="_blank">explicit
                    grid</a> que son definidas con las propiedades de
                <code>grid&#8209;template&#8209;columns</code> y
                <code>grid&#8209;template&#8209;rows</code>
            </li>
            <li>
                Las líneas en <b>diagonal</b> se entienden como el <b>gap</b>
            </li>
            <li>
                La línea punteada horizontal se entiende como <b>implicit grid</b> ya que no las declaramos propiamente
                y son generadas por el browser
            </li>
            <li>
                La línea <b>vertical sólida</b> se entiende como el comienzo y el final del grid.
            </li>
        </ul>
    </div>
    <div class="image">
        <img src="assets/img/track-lines.PNG" alt="track lines" height="386">
    </div>

    <p class="text">
        Podemos definir el tamaño de las columnas o filas que se agregan de manera implícita por medio de <code>grid&#8209;auto&#8209;rows</code>
        ó <code>grid&#8209;auto&#8209;columns</code>
    </p>
</div>


<div class="ex">

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
            <div id>
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
            </div>
        </div>
    </div>
    <style id="css">
        .container-grid {
            display: grid;
            grid-template-columns: 150px auto;
            gap: 20px;
            grid-template-rows: 100px 175px;
            grid-auto-rows: 50px 100px;
        }

        .item {
            /* We center the contents of these items. You can also do this with flexbox too! */
            display: grid;
            justify-content: center;
            align-items: center;
            text-align: center;
            background-color: #ebe26a;
            border: solid black 1px;
            font-size: 24px;
            font-weight: bold;
            color: white;
        }
    </style>

    <script>
        document.getElementById("container-html").innerText = document.querySelector(".container-grid").outerHTML;
        document.getElementById("container-css").innerText = document.getElementById("css").innerHTML.trim();
    </script>

</div>

<hr>

<div class="links">
    <p class="link link1"><a href="index.php?p=explicaciones/grid-fundamentals.php">Anterior ⏪</a></p>
    <p class="link link2"><a href="index.php?p=ejemplos/devTools.php">Ir al ejemplo</a></p>
    <p class="link link3"><a href="index.php?p=explicaciones/grid-auto-flow.php">Siguiente ⏩</a></p>
</div>