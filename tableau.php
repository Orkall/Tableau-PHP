
<?php
$board = array 
    ('Indiana Jones et le Royaume du Crâne de Cristal ' =>  'Harrison Ford , Cate Blanchett , Karen Allen',
    'Indiana Jones et la Dernière Croisade' => ' Harrison Ford , Sean Connery , John Rys-Davies ',
    'Indiana Jones et le Temple maudit  ' => ' Harrison Ford ,  Dan Aykroyd ,  Amrish Purri ',
);


foreach ($board as $key1 => $value1) {
    echo " Dans le film " .$key1. "les acteurs sont" .$value1. "</br>";
     
 } 
