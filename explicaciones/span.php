<?php
if ($_SERVER["PHP_SELF"] != "/index.php") {
    header("Location: /index.php");
    exit();
}
?>
<div class="inicio">
    <h2>Sizing tracks with Span</h2>
    <a href="index.php"><i class="fas fa-home fa-3x"></i></a>
</div>
<hr>
<p class="text">
    Podemos usar <code>grid-column: span #</code> para combinar items especificando el número de espacios a usar
</p>
<div class="text"><b>Antes</b></div>

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
                    <div class="item item1">1</div>
                    <div class="item item2">2</div>
                    <div class="item item3">3</div>
                    <div class="item item4">4</div>
                    <div class="item item5">5</div>
                    <div class="item item6">6</div>
                    <div class="item item7">7</div>
                    <div class="item item8">8</div>
                    <div class="item item9">9</div>
                    <div class="item item10">10</div>
                    <div class="item item11">11</div>
                    <div class="item item12">12</div>
                    <div class="item item13">13</div>
                    <div class="item item14">14</div>
                    <div class="item item15">15</div>
                    <div class="item item16">16</div>
                    <div class="item item17">17</div>
                    <div class="item item18">18</div>
                    <div class="item item19">19</div>
                    <div class="item item20">20</div>
                    <div class="item item21">21</div>
                    <div class="item item22">22</div>
                    <div class="item item23">23</div>
                    <div class="item item24">24</div>
                    <div class="item item25">25</div>
                    <div class="item item26">26</div>
                    <div class="item item27">27</div>
                    <div class="item item28">28</div>
                    <div class="item item29">29</div>
                    <div class="item item30">30</div>
                </div>
            </div>
        </div>
    </div>
    <style id="css">
        .container-grid {
            display: grid;
            gap: 5px;
            grid-template-columns: repeat(5, 1fr);
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

<div class="text"><b>Después</b></div>
<p class="text">
    Como se ve, el item 9 ahora ocupa dos espacios pero desplazó todas las casillas una unidad
</p>

<div class="ex ex2">
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
                    <div class="item2 item1">1</div>
                    <div class="item2 item2">2</div>
                    <div class="item2 item3">3</div>
                    <div class="item2 item4">4</div>
                    <div class="item2 item5">5</div>
                    <div class="item2 item6">6</div>
                    <div class="item2 item7">7</div>
                    <div class="item2 item8">8</div>
                    <div class="item2 item9">9</div>
                    <div class="item2 item10">10</div>
                    <div class="item2 item11">11</div>
                    <div class="item2 item12">12</div>
                    <div class="item2 item13">13</div>
                    <div class="item2 item14">14</div>
                    <div class="item2 item15">15</div>
                    <div class="item2 item16">16</div>
                    <div class="item2 item17">17</div>
                    <div class="item2 item18">18</div>
                    <div class="item2 item19">19</div>
                    <div class="item2 item20">20</div>
                    <div class="item2 item21">21</div>
                    <div class="item2 item22">22</div>
                    <div class="item2 item23">23</div>
                    <div class="item2 item24">24</div>
                    <div class="item2 item25">25</div>
                    <div class="item2 item26">26</div>
                    <div class="item2 item27">27</div>
                    <div class="item2 item28">28</div>
                    <div class="item2 item29">29</div>
                    <div class="item2 item30">30</div>
                </div>
            </div>
        </div>
    </div>
    <style id="css2">
        .container-grid2 {
            display: grid;
            gap: 5px;
            grid-template-columns: repeat(5, 1fr);
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

        .item2.item9 {
            background: mistyrose;
            grid-column: span 2;
        }
    </style>

    <script>
        document.getElementById("container-html2").innerText = document.querySelector(".container-grid2").outerHTML;
        document.getElementById("container-css2").innerText = document.getElementById("css2").innerHTML.trim();
    </script>

</div>


<hr>

<div class="text"><b>Otro caso</b></div>
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
                    <div class="item3 item1">1</div>
                    <div class="item3 item2">2</div>
                    <div class="item3 item3">3</div>
                    <div class="item3 item4">4</div>
                    <div class="item3 item5">5</div>
                    <div class="item3 item6">6</div>
                    <div class="item3 item7">7</div>
                    <div class="item3 item8">8</div>
                    <div class="item3 item9">9</div>
                    <div class="item3 item10">10</div>
                    <div class="item3 item11">11</div>
                    <div class="item3 item12">12</div>
                    <div class="item3 item13">13</div>
                    <div class="item3 item14">14</div>
                    <div class="item3 item15">15</div>
                    <div class="item3 item16">16</div>
                    <div class="item3 item17">17</div>
                    <div class="item3 item18">18</div>
                    <div class="item3 item19">19</div>
                    <div class="item3 item20">20</div>
                    <div class="item3 item21">21</div>
                    <div class="item3 item22">22</div>
                    <div class="item3 item23">23</div>
                    <div class="item3 item24">24</div>
                    <div class="item3 item25">25</div>
                    <div class="item3 item26">26</div>
                    <div class="item3 item27">27</div>
                    <div class="item3 item28">28</div>
                    <div class="item3 item29">29</div>
                    <div class="item3 item30">30</div>
                </div>
            </div>
        </div>
    </div>
    <style id="css3">
        .container-grid3 {
            display: grid;
            gap: 5px;
            grid-template-columns: repeat(5, 1fr);
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

        .item3.item9 {
            background: mistyrose;
            grid-column: span 3;
        }
    </style>

    <script>
        document.getElementById("container-html3").innerText = document.querySelector(".container-grid3").outerHTML;
        document.getElementById("container-css3").innerText = document.getElementById("css3").innerHTML.trim();
    </script>

</div>

<hr>
<p class="text"><b>Incluso con filas usando <code>grid-row: span #</code></b></p>
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

        <div class="col-md-4">
            <h3>Resultado</h3>
            <div class="container-grid4">
                <div class="item4 item1">1</div>
                <div class="item4 item2">2</div>
                <div class="item4 item3">3</div>
                <div class="item4 item4">4</div>
                <div class="item4 item5">5</div>
                <div class="item4 item6">6</div>
                <div class="item4 item7">7</div>
                <div class="item4 item8">8</div>
                <div class="item4 item9">9</div>
                <div class="item4 item10">10</div>
                <div class="item4 item11">11</div>
                <div class="item4 item12">12</div>
                <div class="item4 item13">13</div>
                <div class="item4 item14">14</div>
                <div class="item4 item15">15</div>
                <div class="item4 item16">16</div>
                <div class="item4 item17">17</div>
                <div class="item4 item18">18</div>
                <div class="item4 item19">19</div>
                <div class="item4 item20">20</div>
                <div class="item4 item21">21</div>
                <div class="item4 item22">22</div>
                <div class="item4 item23">23</div>
                <div class="item4 item24">24</div>
                <div class="item4 item25">25</div>
                <div class="item4 item26">26</div>
                <div class="item4 item27">27</div>
                <div class="item4 item28">28</div>
                <div class="item4 item29">29</div>
                <div class="item4 item30">30</div>
            </div>
        </div>
    </div>
    <style id="css4">
        .container-grid4 {
            display: grid;
            gap: 5px;
            grid-template-columns: repeat(5, 1fr);
        }

        .item4 {
            /* We center the contents of these items. You can also do this with flexbox too! */
            display: grid;
            justify-content: center;
            align-items: center;
            border: 5px solid rgba(0, 0, 0, 0.03);
            border-radius: 3px;
            font-size: 35px;
            background-color: #123456;
            font-weight: bold;
            text-align: center;
            color: white;
        }

        .item4.item10 {
            background: mistyrose;
            grid-column: span 2;
            grid-row: span 2;
        }
    </style>

    <script>
        document.getElementById("container-html4").innerText = document.querySelector(".container-grid4").outerHTML;
        document.getElementById("container-css4").innerText = document.getElementById("css4").innerHTML.trim();
    </script>

</div>

<div class="text">
    En la siguiente página veremos como establecer el inicio y el fin de un item
</div>

<hr>

<div class="links">
    <p class="link link1"><a href="index.php?p=explicaciones/repeat-function.php">Anterior ⏪</a></p>
    <p class="link link2"><a href="index.php?p=ejemplos/span.php">Ir al ejemplo</a></p>
    <p class="link link3"><a href="index.php?p=explicaciones/sizing-tracks.php">Siguiente ⏩</a></p>
</div>

