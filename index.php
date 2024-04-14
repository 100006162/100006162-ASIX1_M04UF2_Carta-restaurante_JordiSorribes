<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ROSSINI~ITALIAN</title>
    <link rel="shortcut icon" href="./img/icon1.png" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@300;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="row">
        <div class="column-left">
            <img id="img1" src="img/img1.png" alt="">
        </div> 
        <div class="column-3">
            <img class="titulo" src="img/titulo1.png" alt="">
        </div> 
        <div class="column-right">
            <img id="img2" src="img/img2.png" alt="">
        </div>
    </div>
    <?php
    /* Muestra el archivo XML. */
    if (file_exists('xml/carta.xml')) {
        $menu = simplexml_load_file('xml/carta.xml');
    } else {
        exit('ERROR');
    }
    echo '<div class="column-30">';
    echo '<h1>Pizzas:</h1>';
    foreach($menu->plato as $plato){
        if($plato['tipo']=='pizzas'){
            echo '<div class="enmarcado-gris">';
            echo '<b>'.$plato->nombre.'</b>'.' '.'<b>'.$plato->precio.'</b><br>';
            echo $plato->descripcion.'<br>';
            echo $plato->calorias.' ';
            foreach($plato->ingredientes->item as $item) {
                echo "<img class='alimentos' src=".$item." alt=''>";
            }
            echo '</div>';
            echo '<br>';
        }
    }
    echo '</div>';
    echo '<div class="column-30-margin">';
    echo '<h1 style="margin-top: 55px;">Pasta:</h1>';
    foreach($menu->plato as $plato){
        if($plato['tipo']=='pasta'){
            echo '<div class="enmarcado-beige">';
            echo '<b>'.$plato->nombre.'</b>'.' '.'<b>'.$plato->precio.'</b><br>';
            echo $plato->descripcion.'<br>';
            echo $plato->calorias.' ';
            foreach($plato->ingredientes->item as $item) {
                echo "<img class='alimentos' src=".$item." alt=''>";
            }
            echo '</div>';
            echo '<br>';
        }
    }
    echo '</div>';
    echo '<div class="column-30-margin">';
    echo '<h1>Hamburguesas:</h1>';
    foreach($menu->plato as $plato){
        if($plato['tipo']=='hamburguesa'){
            echo '<div class="enmarcado-gris">';
            echo '<b>'.$plato->nombre.'</b>'.' '.'<b>'.$plato->precio.'</b><br>';
            echo $plato->descripcion.'<br>';
            echo $plato->calorias.' ';
            foreach($plato->ingredientes->item as $item) {
                echo "<img class='alimentos' src=".$item." alt=''>";
            }
            echo '</div>';
            echo '<br>';
        }
    }
    echo '<h1>Postres:</h1>';
    foreach($menu->plato as $plato){
        if($plato['tipo']=='postres'){
            echo '<div class="enmarcado-blanco">';
            echo '<b>'.$plato->nombre.'</b>'.' '.'<b>'.$plato->precio.'</b><br>';
            echo $plato->descripcion.'<br>';
            echo $plato->calorias.' ';
            foreach($plato->ingredientes->item as $item) {
                echo "<img class='alimentos' src=".$item." alt=''>";
            }
            echo '</div>';
            echo '<br>';
        }
    }
    echo '</div>';
?>
</body>
</html>