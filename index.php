<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Práctica Simplon PHP</title>
    <link rel="stylesheet" href="./styles/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    

<?php

// EJERCICIO 1

/* Escribe una lista en un documento HTML usando un Array en PHP */

$cities = ["Gijón", "Oviedo", "Avilés"];

echo "<h2>Ejercicio 1 - Listado de ciudades</h2>";

echo "<ul>";

foreach ($cities as $city) {
    echo "<li>" . $city . "</li>";
}

echo "</ul>";


// EJERCICIO 2

/* Haz un formulario con un input de texto, un input de tipo “radio” y otro de tipo selector. Usa el Método POST y escribe en un documento HTML los datos enviados. */

echo "<h2>Ejercicio 2 - Input de texto - Input radio - Input selector</h2>";

?>
    <form action="index.php" method="post" class="m-5">
        <div class="mb-3">
                
            <label for="name" class="form-label">Nombre:</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Introduzca nombre" required>
                
        </div>

        <div class="container-fluid">
        <div class="row">
            <div class="fixed-200">
                <div> <label for="state" class="form-label">Estado civil:</label> </div>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="state" value="soltero" checked>
                    <label for="soltero" class="form-check-label">Soltero</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="state" value="Casado">
                    <label for="Casado" class="form-check-label">Casado</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="state" value="Viudo">
                    <label for="Viudo" class="form-check-label">Viudo</label>
                </div>
            </div>

            <div class="fixed-200">
                    
                <div> <label for="hobbies" class="form-label">Hobbies:</label> </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="Ciclismo" name="hobbie[]">
                    <label class="form-check-label" for="hobbie[]">Ciclismo</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="Cine" name="hobbie[]">
                    <label class="form-check-label" for="hobbie[]">Cine</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="Música" name="hobbie[]">
                    <label class="form-check-label" for="hobbie[]">Música</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="Pesca" name="hobbie[]">
                    <label class="form-check-label" for="hobbie[]">Pesca</label>
                </div>
            </div>
            
        </div>
        </div>

            <button type="submit" class="btn btn-primary m-3" name="submit">Submit</button>
    </form>

<?php

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $state = $_POST['state'];

    echo <<< HTML
    
    <table class="resultsEjTwo">
        <tr>
            <td>Nombre:</td>
            <td>$name</td>
        </tr>
        <tr>
            <td>Estado civil:</td>
            <td>$state</td>
        </tr>    

    HTML;

    if(!empty($_POST['hobbie'])){
        echo
        "<tr>
            <td>Hobbies:</td>
            <td>";
                foreach($_POST['hobbie'] as $selected){
                    echo $selected."</br>";}
        echo
        "   </td>
        </tr>";
    }
    echo
    "</table>";
    
}

// EJERCICIO 3

/* Usa un array clave-valor para definir los datos de un usuario y escríbelos en una tabla en un documento HTML. */

$person = [
    "name" => "Pepe",
    "surname" => "Perez",
    "age" => 32
];

?>

<h2>Ejercicio 3 - Array clave/valor en tabla</h2>

<table>
    <tr>
        <td>Nombre</td>
        <td>Apellido</td>
        <td>Edad</td>
    </tr>
    <tr>
        <td> <?php echo $person['name'] ?> </td>
        <td> <?php echo $person['surname'] ?> </td>
        <td> <?php echo $person['age'] ?> </td>
    </tr>
</table>

<?php

// EJERCICIO 4

/* Usa una clase para definir una película. Crea varios objetos Película y dibujarlos en “cards” en un documento HTML. */

echo "<h2>Ejercicio 4 - Clase Película - Películas mostradas en 'Cards'</h2>";

class Film {

    //Propierties

    private $filmName;
    private $description;
    private $filmPicture;
    

    //Constructor

    public function __constructor($filname, $desc, $picture)
    {
        
    }

    //Methods



}

$desc1 = "Película de suspense psicológico estadounidense de 2019 dirigida y producida por Todd Phillips, quien coescribió el guion con Scott Silver.";



$film1 = new Film ("Joker", $desc1,  )


?>

<img src="./assets/img/joker.jpg" alt="">


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>