<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- css individuales-->
    
    <link rel="stylesheet" href="<?php echo media(); ?>/App/CSS/<?php echo $data['function_css']; ?>">
    <link rel="stylesheet" href="<?php echo media(); ?>/Css/nav1.css">
    <title> <?php print_r($data['page_name'])  ?> </title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sen:wght@400;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="https://trello.com/1/cards/637311aad13bfd00b4a5f90c/attachments/63747c1af7e44803278219e1/download/Recurso_5-8.png">
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
</head>

<?php require_once ('Views/Templates/nav.php')?>