<?php
$include = "";
$css = "explicaciones";
if (isset($_GET["p"])) {
    if (is_readable($_GET["p"])) {
        $include = $_GET["p"];
        $parts = explode('/', rtrim($_GET["p"], '/'));
        $css = "";
        if ($parts[0] == "ejemplos") {
            $css = "ejemplos";
        } else {
            $css = "explicaciones";
        }
    } else {
        $include = "404.html";
    }
} else {
    $include = "init.html";
}

?>
<!DOCTYPE html>
<html lang="es">
<!-- https://www.gkcoderblog.com/2019/03/how-to-highlight-text-in-rich-text.html -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/10.2.1/styles/vs2015.min.css" integrity="sha512-w8aclkBlN3Ha08SMwFKXFJqhSUx2qlvTBFLLelF8sm4xQnlg64qmGB/A6pBIKy0W8Bo51yDMDtQiPLNRq1WMcQ==" crossorigin="anonymous" />
    <!-- https://cdnjs.com/libraries/highlight.js -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/10.2.1/styles/a11y-dark.min.css" integrity="sha512-1rzCaYWsg3l6uKvGbUT6rAZFOcVn0zeXAFlZudsnj8k2xcrU5asL8jfJUEijV9GPYMh0GnPToeCTJj6RXQnA8g==" crossorigin="anonymous" />
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Deca&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Modak&display=swap" rel="stylesheet">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="../assets/img/icons/icon.png">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />

    <!-- and it's easy to individually load additional languages -->
    <link rel="stylesheet" href="../assets/css/<?php echo $css ?>/styles.css">

    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>

    <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/10.1.2/highlight.min.js"></script>

    <script src="//cdnjs.cloudflare.com/ajax/libs/highlightjs-line-numbers.js/2.8.0/highlightjs-line-numbers.min.js"></script>

    <script src="assets/js/scripts.js"></script>

</head>

<body>
    <div class="main container">
        <?php
        include $include;
        ?>
    </div>
</body>

</html>