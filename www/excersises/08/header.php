<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $title; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="styles/main.css">
    <?php foreach ($css_files as $css_file): ?>
    <script src="styles/<?php echo $js_file; ?>"></script>
    <?php endforeach; ?>
    <script src="scripts/main.js"></script>
    <?php foreach ($js_files as $js_file): ?>
    <script src="scripts/<?php echo $js_file; ?>"></script>
    <?php endforeach; ?>
</head>
<body>
    
<?php require_once 'navigation.php'; ?>