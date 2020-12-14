<!--
Create una variabile con un paragrafo.
Leggete da un parametro GET della querystring una "badword"
Sostituite all'interno del paragrafo tutte le occorrenze della "badword" con *** (3 asterischi).
Stampate a schermo il paragrafo censurato e la lunghezza del paragrafo originale.
-->
<?php
$randomText = "La mia anima è pervasa da una mirabile serenità, simile a queste belle mattinate di maggio che io godo con tutto il cuore. Sono solo e mi rallegro di vivere in questo luogo che sembra esser creato per anime simili alla mia. Sono così felice, mio caro, così immerso nel sentimento della mia tranquilla esistenza che la mia arte ne soffre. Non potrei disegnare nulla ora, neppure un segno potrei tracciare; eppure mai sono stato così gran pittore come in questo momento. Quando l'amatavalle intorno a me si avvolge nei suoi vapori, e l'alto sole posa sulla mia foresta impenetrabilmente oscura, e solo alcuni raggi si spingono nell'interno sacrario, io mi stendo nell'erba alta presso il ruscello che scorre, e più vicino alla terra osservo mille multiformi erbette; allora sento più vicino al mio cuore brulicare tra gli steli il piccolo mondo degli innumerevoli, infiniti vermiciattoli e moscerini, e sento la presenza dell'Onnipossente che ci ha creati a sua immagine e ci tiene in una eterna gioia. Amico mio, quando dinanzi ai miei occhi si stende il crepuscolo e posa intorno a me il mondo e il cielo tutto nell'anima mia come la sembianza di donna amata, allora spesso";
$randomCensuredText = str_replace($_GET['badWord'], '***', $randomText);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <h2>
            la parola da censurare è:
            <em>
                <?php echo $_GET['badWord'] . '.' ?>
            </em>
        </h2>
        <p>
            <strong>Paragrafo censurato: </strong>
            <?php echo $randomCensuredText ?>
        </p>
        <p>
            Il paragrafo contiene:
            <?php echo count(explode(" ", $randomText)); ?>
            parole e
            <?php echo strlen(str_replace(" ", "", $randomText)); ?>
            caratteri esclusi gli spazi.
        </p>
    </body>
</html>
