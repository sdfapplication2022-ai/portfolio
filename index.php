<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mezni Hamza</title>
</head>
<body>
<h1>mon premier programme</h1>  
 <img src="images/kids-playing-soccer-cartoon.jpg" alt="" width="500" height="500">
 <form method="post" action="index.php">
   <label for="nom">Nom:</label>
    <input type="text" id="nom" name="nom" required>
    <label for="prenom">Prénom:</label>
    <input type="text" id="prenom" name="prenom" required>
    <label for="age">Age:</label>
    <input type="number" id="age" name="age" required>
    <input type="submit" value="ok">
</form>
 <?php
 $age = isset($_POST['age']) ? $_POST['age'] : '';
 $nom = isset($_POST['nom']) ? $_POST['nom'] : '';
 $prenom = isset($_POST['prenom']) ? $_POST['prenom'] : '';
 ?>
 <table border="1"  >
    <tr>
        <th>Nom</th>
        <th>Prénom</th>
        <th>Age</th>
    </tr>
    <tr>
        <td><?php echo $nom; ?></td>
        <td><?php echo $prenom; ?></td>
        <td><?php echo $age; ?></td>
    </tr>  
 </table>
</body>
</html>