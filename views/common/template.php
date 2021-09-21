<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo $page_description; ?>">
    <title><?php echo $page_title; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <!-- CSS commun -->
    <link href="<?php echo URL; ?>public/styles/main.css" rel="stylesheet" />
    <!-- css spécifique par page, avec test. Possibilité de plusieurs CSS, depuis un tableau, cf. home -->
    <?php if (!empty($page_css)) { ?>
        <?php foreach ($page_css as $css_files) { ?>
            <link rel="stylesheet" href="<?php echo URL; ?>public/styles/<?php echo $css_files; ?>" rel="stylesheet">
        <?php } ?>
    <?php } ?>
    <!-- alt à endforeach, endif -->
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

    <!-- JS spécifique par page, avec test. Possibilité de plusieurs JS, depuis un tableau, cf. action2 -->
    <?php if (!empty($page_js)) { ?>
        <?php foreach ($page_js as $js_files) { ?>
            <script src="<?php echo URL; ?>public/scripts/<?php echo $js_files; ?>"></script>
        <?php } ?>
    <?php } ?>

</body>
</html>