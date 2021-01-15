<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <div class="container">
    
        <h1>
        
            <?php

                class Magazzino {

                    public $nome;
                    public $location;
                    public $prodotti = [];

                    public function __construct ($nome, $location){

                        $this -> nome = $nome;
                        $this -> location = $location;

                    }

                }

                $magazzino = new Magazzino ('Eco', 'Milano');
                var_dump($magazzino);

                echo '<br>';

                class Prodotto {

                    public $nome;
                    public $peso;
                    public $prezzo;

                }

                $prodotto = new Prodotto ('Mela', '200gr', '2');
                var_dump($prodotto);

            ?>
        
        
        
        </h1>
    
    </div>


</body>
</html>