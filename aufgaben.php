<?php include ("header.php");

$aufgaben = array (
    array (
        'id'=>1,
        'name'=> 'HTML Datei erstellen',
        'beschreibung'=>'HTML Datei erstellen',
        'reiter'=> 'ToDo',
        'datum'=>'07.12.2022'
    ),
    array (
        'id'=>2,
        'name'=> 'CSS Datei erstellen',
        'beschreibung'=>'Schöne Sachen erstellen',
        'reiter'=> 'ToDo',
        'datum'=>'10.12.2022'
    ),array (
        'id'=>3,
        'name'=> 'PC eingeschaltet',
        'beschreibung'=>'PC hochfahren und Programme starten',
        'reiter'=> 'Erledigt',
        'datum'=>'01.12.2022'
    ),array (
        'id'=>4,
        'name'=> 'Kaffee trinken',
        'beschreibung'=>'Kaffee muss sein',
        'reiter'=> 'Erledigt',
        'datum'=>'stündlich'
    ),array (
        'id'=>5,
        'name'=> 'Für die Uni lernen',
        'beschreibung'=>'Was muss, das muss',
        'reiter'=> 'Verschoben',
        'datum'=>'niemals'
    ),
);
//var_dump($mitglieder);
?>
<table class="table table-striped">
    <thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Beschreibung</th>
        <th scope="col">Reiter</th>
        <th scope="col">Fälligkeitsdatum</th>
    </tr>
    </thead>
    <tbody>


    <?php
    foreach ($aufgaben as $aufgabe){
        echo ('<tr>' .
            '<th scope="row">'.$aufgabe['id'].'</th>'.
            '<td>'.$aufgabe['name'].'</td>' .
            '<td>'.$aufgabe['beschreibung'].'</td>' .
            '<td>'.$aufgabe['reiter'].'</td>' .
            '<td>'.$aufgabe['datum'].'</td>' .
            '</tr>');
    }


    ?>

    </tbody>
</table>

<?php include ("footer.php");?>
