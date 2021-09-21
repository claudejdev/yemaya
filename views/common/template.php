<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo $page_description; ?>">
    <title><?php echo $page_title; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <!-- css spécifique par page, avec test vers une valeur par défaut -->
    <?php if (!empty($page_css)) { ?>
        <link rel="stylesheet" href="<?php echo URL; ?>public/styles/<?php echo $page_css; ?>" rel="stylesheet">
    <?php } ?>
</head>
<body>
<div class="container">
    <!-- header contient le menu -->
    <?php require_once 'views/common/header.php'; ?> 

    <?php if (!empty($_SESSION['alert'])) { ?> <!-- l'alerte est affichée si elle est remplie dans la variable de session -->
        <div class="alert <?php echo $_SESSION['alert']['type']; ?>" role="alert">
            <?php echo $_SESSION['alert']['message']; ?>
        </div>
    <?php unset($_SESSION['alert']); //l'alerte est supprimée lorsqu'elle a été affichée une fois
        }
    ?>

        <?php echo $page_content; ?>
    </div>
    <?php require_once 'views/common/footer.php'; ?> 
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>


<!-- Note : les variables du Controller sont en snake_case. La programmation est en camelCase. -->
