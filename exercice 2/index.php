<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include ("comptebanquaire.php")?>
    <?php include ("titulaire.php")?>
    <title>Exo 2</title>
</head>
<body>
    <?php
$cBanque1 = new CompteBanquaire('Compte Courant');
$cBanque2 = new CompteBanquaire('Le solde est de : ');
$cBanque3 = new CompteBanquaire('La devise est en euro');
$cBanque4 = new CompteBanquaire('Le titulaire du compte est ');

$tab = [$cBanque1, $cBanque2, $cBanque3, $cBanque4];

foreach ($tab as $donnee): ?>
    <tr>
        
        <td><?php echo htmlspecialchars($cBanque1->getLibellé(), ENT_QUOTES, 'UTF-8'); ?></td>
        <td><?php echo htmlspecialchars($cBanque2->getSolde(), ENT_QUOTES, 'UTF-8'); ?></td>
        <td><?php echo htmlspecialchars($cBanque3->getDevise(), ENT_QUOTES, 'UTF-8'); ?></td>
        <td><?php echo htmlspecialchars($cBanque4->getTitulaire(), ENT_QUOTES, 'UTF-8'); ?></td><br>
    </tr>
    <?php endforeach; 
    
    

?>
</body>
</html>