<?php

    /* 
        Questa query string: ?name=Alessio&age=32

        Fa si che in pagina sia disponibile l'array associativo $_GET così costruito:
        $_GET = [
            'name' => 'Alessio',
            'age' => '32'
        ];
    
    */

    // In questo modo, prendo il valore del parametro name che si trova nella query string e lo metto nella variabile $nome
    $nome = $_GET['name'];
    $cognome = 'Vietri';
    $eta = $_GET['age'];

    $stringaUno = 'ciao-ragazzi';
    explode('-', $stringaUno);
    /* 
        array così costruito:
        [
            'ciao',
            'ragazzi'
        ]
    */

    echo '<br><br>';

    $stringaDue = '   ciao ragazzi   ';
    $stringaDueModificata = trim($stringaDue);
    echo '"'.$stringaDue.'"';
    echo '"Lunghezza della stringa: '.strlen($stringaDue).'"';
    echo '"'.$stringaDueModificata.'"';
    echo '"Lunghezza della stringa modificata: '.strlen($stringaDueModificata).'"';

    echo '<br><br>';

    $stringaTre = 'Ciao, mi chiamo Alessio';
    echo '"'.$stringaTre.'"';
    echo '"'.str_replace('Alessio', 'Pippo', $stringaTre).'"';

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
            <a href="./index.php">
                Vai alla home
            </a>
        </div>

        <h1>
            <?php echo $nome.' '.$cognome; ?>
        </h1>

        <h2>
            Età: <?php echo $eta; ?>
        </h2>

        <script>
            const stringaUno = 'ciao-ragazzi';
            console.log(stringaUno.split('-'));

            const stringaDue = '   ciao ragazzi   ';
            console.log(stringaDue, stringaDue.length);
            console.log(stringaDue.trim(), stringaDue.trim().length);
        </script>

    </body>
</html>