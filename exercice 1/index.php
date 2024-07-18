<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include ('Auteur.php')?>
    <?php include ("Livre.php")?>
    <title>Index</title>
</head>
<body>
<?php 

$livre1 = new Livre('Ca', 1986, 1138, 20);
$livre2 = new Livre('Simeterre', 1983, 374, 15);
$livre3 = new Livre('Le Fléau', 1978, 823, 14);
$livre4 = new Livre('Shining', 1977, 447, 16);

$tabLivres = [$livre1,$livre2,$livre3, $livre4];



foreach ($tabLivres as $livre): ?>
        <tr>
            
            <td><?php echo htmlspecialchars($livre->getTitre(), ENT_QUOTES, 'UTF-8'); ?></td>
            <td><?php echo htmlspecialchars($livre->getNombrePages(), ENT_QUOTES, 'UTF-8'); ?></td>
            <td><?php echo htmlspecialchars($livre->getAnneeParution(), ENT_QUOTES, 'UTF-8'); ?></td>
            <td><?php echo htmlspecialchars($livre->getPrix(), ENT_QUOTES, 'UTF-8'); ?></td><br>
        </tr>
        <?php endforeach; 
        
        
        
        
        ?>



  

</body>
</html>