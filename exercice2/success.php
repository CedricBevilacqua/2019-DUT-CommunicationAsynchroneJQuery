<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Exercice 2</title>
    <link href="../libs/style.css" rel="stylesheet">
</head>
<body>
    <div class="text_success_style">
        <?php 
        
        include("function_group_in_array.php");

        if (verif_group_in_array($_GET['input_groupmusic'])) {    ?>
        <h2><?php echo "Vous avez choisi le groupe ".$_GET["input_groupmusic"].". 🔈🎼"?><h2>
        <h3>C'est un super groupe ! 👍🏻</h3>

        <?php 
        } else { ?>
            <h2>Ce groupe n'existe pas.. ❌<h2>
        <?php
        }
        ?>
    </div>
</body>
</html>