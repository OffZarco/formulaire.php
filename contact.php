<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="style.scss">
</head>

<body>

    <?php
    // la function isset verifie si la variable est défini
    if (isset($_GET['btnSub'])) {
        $nom = $_GET['nom'];
        $prenom = $_GET['prenom'];
        $email = $_GET['mail'];
        $tel = $_GET['mobile'];
        $adresse = $_GET['adresse'];

        echo '<h3>Informations</h3>';
        if (empty($nom) || empty($prenom) || empty($email) || empty($tel) || empty($adresse)) {
            echo 'Champs manquants';
        } else {
            echo "<table>
            <tr>
                <td>Nom</td>
                <td>$nom</td>
            </tr>
            <tr>
                <td>Prénom</td>
                <td>$prenom</td>
            </tr>
            <tr>
                <td>E-mail</td>
                <td>$email</td>
            </tr>
            <tr>
                <td>Téléphone</td>
                <td>$tel</td>
            </tr>
            <tr>
                <td>Adresse</td>
                <td>$adresse</td>
            </tr>
        </table>";
        }
    };
        
    ?>

</body>

</html>