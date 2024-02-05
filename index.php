<?php

    $nome = 'Alessio';
    $cognome = 'Vietri';
    $eta = 32.6;
    $sposato = true;
    $linguaggi = ['php', 'js', 'java', 'python'];
    $cartaIdentita = [
        // chiave => valore
        'numero' => 'AB12345CD',
        'scadenza' => '27/10/2030',
        'valida' => true,
        'nome' => $nome,
        'cognome' => $cognome,
    ];

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP Intro</title>
    </head>
    <body>

        <div>
            <a href="./about.php">
                Vai alla pagina About
            </a>
        </div>

        <div>
            <form action="./about.php" method="GET">

                <div>
                    <input type="text" name="name" value="Alessio">
                </div>

                <div>
                    <input type="number" name="age" value="32">
                </div>

                <button>
                    Invia
                </button>

            </form>
        </div>

        <h1>
            <?php
                // $nome = 'Alessio';
                // $cognome = 'Vietri';

                /* 
                    Il cognome non lo uso
                    perché non mi serve
                */
                
                echo $nome;
                echo '<br>';
                echo '<div class="ciccio" style="height: 100px;"></div>';
                echo 'Ciao raghi';
            ?>
        </h1>

        <div>
            <label for="">
                Nome:
            </label>
            <div>
                <?php echo $nome; ?>
            </div>
        </div>

        <div>
            <label for="">
                Cognome:
            </label>
            <div>
                <?php echo $cognome; ?>
            </div>
        </div>

        <div>
            <label for="">
                Età:
            </label>
            <div>
                <?php echo $eta; ?>
            </div>
        </div>

        <div>
            <label for="">
                Sposato:
            </label>
            <div>
                <?php echo $sposato; ?>
                <?php var_dump($sposato); ?>
            </div>
        </div>

        <div>
            <label for="">
                Linguaggi conosciuti:
            </label>
            <div>
                <?php echo $linguaggi; ?>
                <?php var_dump($linguaggi); ?>
            </div>
        </div>

        <div>
            <label for="">
                Carta d'Identità:
            </label>
            <div>
                <?php echo $cartaIdentita; ?>
            </div>
        </div>

    </body>
</html>