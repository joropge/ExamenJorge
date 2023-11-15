<!-- Github: -->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizzería</title>
</head>
<body>
    <?php 
    require("articulo.php");
    require("bebida.php");
    require("pizza.php");

        // Array con los artículos existentes
$articulos = [
    new Articulo("Lasagna", 3.50, 7.00, 20),
    new Articulo("Pan de ajo y mozzarella", 2.00, 4.50, 15),
    new Pizza("Pizza Margarita", 4.00, 8.00, 30, ["Tomate", "Mozzarella", "Albahaca"]),
    new Pizza("Pizza Pepperoni", 5.00, 10.00, 25, ["Tomate", "Mozzarella", "Pepperoni"]),
    new Pizza("Pizza Vegetal", 4.50, 9.00, 18, ["Tomate", "Mozzarella", "Verduras Variadas"]),
    new Pizza("Pizza 4 quesos", 5.50, 11.00, 20, ["Mozzarella", "Gorgonzola", "Parmesano", "Fontina"]),
    new Bebida("Refresco", 1.00, 2.00, 50, false),
    new Bebida("Cerveza", 1.50, 3.00, 40, true)
];


function otros($articulos) {
//     echo "<h1>Nuestro menú</h1>";
    
    foreach ($articulos as $articulo) {
        if ($articulo instanceof Pizza) {
            $pizzas[] = $articulo;
        } elseif ($articulo instanceof Bebida) {
            $bebidas[] = $articulo;
        } else {
            $otros[] = $articulo;
        }
    }

    echo "<h2>Otros</h2>";
    foreach ($otros as $otro) {
        echo "<p>{$otro->getNombre()}</p>";
    }
}


//3: Imprimir los artículos por tipo
echo "<h1>Nuestro menú</h1>";
echo "<h2>Pizzas</h2>";
foreach ($articulos as $articulo) {
    if ($articulo instanceof Pizza) {
        echo "<p>{$articulo->getNombre()}</p>";
    }
}
echo "<h2>Bebidas</h2>";
foreach ($articulos as $articulo) {
    if ($articulo instanceof Bebida) {
        echo "<p>{$articulo->getNombre()}</p>";
    }
}

otros($articulos);

//2: Los más vendidos (top 3)
echo "<h1>Los más vendidos</h1>";
usort($articulos, function($a, $b) {
    return $b->getContador() - $a->getContador();
});
for ($i = 0; $i < 3; $i++) {
    echo "<p>{$articulos[$i]->getNombre()} - Vendidos: {$articulos[$i]->getContador()}</p>";
}

//3: Los más lucrativos (mayor beneficio total)
echo "<h1>¡Los más lucrativos!</h1>";
usort($articulos, function($a, $b) {
    return $b->calcularBeneficio() - $a->calcularBeneficio();
});
foreach ($articulos as $articulo) {
    echo "<p>{$articulo->getNombre()} - Beneficio: {$articulo->calcularBeneficio()}€</p>";
}
    ?>
</body>
</html>