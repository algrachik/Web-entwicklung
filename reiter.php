<?php include ("header.php");

$reiter = array (
    array (
        'id'=>1,
        'name'=> 'Todos',
        'beschreibung'=>'Was ist zu machen?'
    ),
    array(
        'id'=>2,
        'name'=>'Erledigt',
        'beschreibung'=>"Yay geschafft!!!"
    ),
    array(
        'id'=>3,
        'name'=>'Tiddies',
        'beschreibung'=>"Nix gut! :("
    )
);
//var_dump($mitglieder);
?>
<table class="table table-striped">
    <thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Beschreibung</th>
    </tr>
    </thead>
    <tbody>


    <?php
    foreach ($reiter as $r){
        echo ('<tr>' .
            '<th scope="row">'.$r['id'].'</th>'.
            '<td>'.$r['name'].'</td>' .
            '<td>'.$r['beschreibung'].'</td>' .
            '</tr>');
    }


    ?>

    </tbody>
</table>

<?php include ("footer.php");?>
