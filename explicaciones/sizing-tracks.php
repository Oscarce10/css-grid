<?php
if ($_SERVER["PHP_SELF"] != "/index.php") {
    header("Location: /index.php");
    exit();
}
?>
<div class="inicio">
    <h2>Sizing Tracks</h2>
    <a href="index.php"><i class="fas fa-home fa-3x"></i></a>
</div>
<hr>

<div class="text">
    <b>Unidad de medida <code>fr</code></b>

    Corresponde a una medida de espacio libre en la cual como su nombre lo indica, asigna a un item el
    tamaño libre que resta del grid.
    En este caso, lo restante corresponde al espacio que resta hasta llegar al borde.
</div>

<div id="ex ex-1">
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
            gap: 5px;
            grid-template-columns: 50px 1fr;
            border: solid #555 10px;
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

<div class="ex ex-2">
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
    <style id="css2">
        .container-grid2 {
            display: grid;
            gap: 5px;
            grid-template-columns: 50px 2fr 1fr;
            border: solid #555 10px;
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

<div class="ex ex-3">
    <div class="row">
        <div class="col-md-4">
            <h3>HTML</h3>
            <div><code class="html code" id="container-html3"></code></div>
        </div>

        <div class="col-md-4">
            <h3>CSS</h3>
            <div><code class="css code" id="container-css3"></code></div>
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
                    <div class="item3">10</div>
                    <div class="item3">11</div>
                    <div class="item3">12</div>
                    <div class="item3">13</div>
                    <div class="item3">14</div>
                    <div class="item3">15</div>
                </div>
            </div>
        </div>
    </div>
    <style id="css3">
        .container-grid3 {
            display: grid;
            gap: 5px;
            grid-template-columns: 1fr 1fr 1fr 1fr;
            grid-template-rows: 1fr 10fr 1fr 1fr;
            border: solid #555 10px;
            height: 400px;
        }

        .item3 {
            /* We center the contents of these items. You can also do this with flexbox too! */
            display: grid;
            justify-content: center;
            align-items: center;
            border-radius: 3px;
            background-color: #123456;
            border: solid black 1px;
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


<hr>

<p class="text"><a href="https://www.rawkblog.com/2018/03/css-grid-understanding-grid-gap-and-fr-vs-auto-units/"> <code>fr</code>
        vs.
        <code>auto</code> units</a></p>
<p class="text"><code>Auto</code> asigna el valor máximo de una columna o fila y lo asigna as las
    restantes de su fila o columna dependiendo el caso <br>
</p>

<div class="ex ex-4">
    <div class="row">
        <div class="col-md-4">
            <h3>HTML</h3>
            <div><code class="html code" id="container-html4"></code></div>
        </div>

        <div class="col-md-4">
            <h3>CSS</h3>
            <div><code class="css code" id="container-css4"></code></div>
        </div>

        <div class="col-md-3">
            <h3>Resultado</h3>
            <div>
                <div class="container-grid4">
                    <div class="item4">f</div>
                    <div class="item4">2</div>
                    <div class="item4">autoTe</div>
                    <div class="item4">4</div>
                    <div class="item4">5</div>
                    <div class="item4">6</div>
                    <div class="item4">7</div>
                    <div class="item4">8</div>
                    <div class="item4">9</div>
                    <div class="item4">10</div>
                    <div class="item4">11</div>
                    <div class="item4">12</div>
                    <div class="item4">13</div>
                    <div class="item4">14</div>
                    <div class="item4">15</div>
                </div>
            </div>
        </div>
    </div>


    <style id="css4">
        .container-grid4 {
            display: grid;
            gap: 5px;
            grid-template-columns: auto 1fr auto 1fr;
            grid-template-rows: 1fr 10fr 1fr 1fr;
            border: solid #555 10px;
            height: 400px;
        }

        .item4 {
            /* We center the contents of these items. You can also do this with flexbox too! */
            display: grid;
            justify-content: center;
            align-items: center;
            border-radius: 3px;
            background-color: #123456;
            border: solid black 1px;
            font-size: 24px;
            font-weight: bold;
            text-align: center;
            color: white;
        }
    </style>

    <script>
        document.getElementById("container-html4").innerText = document.querySelector(".container-grid4").outerHTML;
        document.getElementById("container-css4").innerText = document.getElementById("css4").innerHTML.trim();
    </script>
</div>


<hr>

<div class="links">
    <p class="link link1"><a href="index.php?p=explicaciones/grid-auto-flow.php">Anterior ⏪</a></p>
    <p class="link link2"><a href="index.php?p=ejemplos/sizingTracks.php">Ir al ejemplo</a></p>
    <p class="link link3"><a href="index.php?p=explicaciones/repeat-function.php">Siguiente ⏩</a></p>
</div>
