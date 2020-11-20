<?php
if ($_SERVER["PHP_SELF"] != "/index.php") {
    header("Location: /index.php");
    exit();
}
?>
<div class="grid-container">
    <!-- .item.item{$}*30-->
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

<style>
    .grid-container {
        display: grid;
        grid-template-columns: repeat(5, 1fr);
        grid-gap: 20px;
    }
    
    .item9 {
        grid-column: span 2;
        grid-row: span 3;
    }
    
    .item17 {
        grid-row: span 2;
    }
    
    .item28 {
        grid-column: span 2;
    }
</style>

<hr style="border: solid 1px black">

<p><a href="index.php?p=explicaciones/span.php">Volver a
        explicación</a></p>