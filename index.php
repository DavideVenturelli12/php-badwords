<?php
   //creo una variabile con un testo
   $testo = "Oggi si iniza il backend con PHP";

   //passo la parola da censurare tramite il parametro GET
   $test = $_GET["parolaDaCensurare"];

   $nascondiTesto = str_replace( $test, "***", $testo);
?>
   
   <!--Stampo il teto---->
   <h2>Il testo è: <?php echo($testo)?> </h2>

   <!--Stampo la lunghezza del testo-->
   <p>Lunghezza del testo è: <?php echo strlen ($testo) ?> lettere</p>

   <!--Stampo il testo con la parola censurata-->
   <h2>Il testo senza parola censurata è: <?php echo($nascondiTesto) ?></h2>

   <!--Stampo la lunghezza del testo con la parola censurata-->
   <p>Lunghezza del testo è: <?php echo strlen ($nascondiTesto) ?> lettere</p>