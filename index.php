<!-- PHP -->
<?php 

    // Creare una variabile con un paragrafo di testo a scelta.
    $text= 'Il design è semplice. Tutto quello che devi fare è fissare lo schermo fino a quando non inizierai a sudare sangue.';

    // Stampare a schermo il paragrafo e la sua lunghezza.

    // Una parola da censurare viene passata dall'utente tramite parametro GET.
    $censorship = $_GET['censorship'];

    // Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare.
    $censored = str_replace($censorship, '***', $text);

?>



<!-- HTML -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Badwords</title>
</head>
<body style="font-family: sans-serif; color: #1F487E;">

    <h1>Testo:</h1>
    <!-- stampa della variabile con un paragrafo di testo -->
    <p><?php echo $text; ?></p>

    <h2>Lunghezza testo:</h2>
    <!-- stampa la lughezza della variabile con un paragrafo di testo -->
    <p><?php echo strlen($text);?></p>

    <h1>Testo censurato:</h1>
    <!-- info utili per capire il funzionamento della censura tramite l'utilizzo del parametro $_GET -->
    <p style="color: #6290C8">INDICAZIONI:</p>
    <p style="color: #6290C8">All'interno della barra di ricerca, a seguito di <b>"http://localhost/php-badwords/"</b>
        <br>digita <b>"?censorship="</b> seguito dalla parola che vuoi andare a censurare, 
        <br> ad esempio: <b>"?censorship=sangue"</b>.
    </p>
    <!-- stampa della variabile con un paragrafo di testo con l'inserimento dei tre *** al posto della parola inserita nella censura -->
    <p>Stampa del testo con la parola inserita censurata:</p>
    <p><?php echo $censored; ?></p>

    <h2>Lunghezza del testo censurato:</h2>
    <!-- stampa la lughezza della variabile con un paragrafo di testo con modifica della parola censurata -->
    <p><?php echo strlen($censored); ?></p>

</body>
</html>