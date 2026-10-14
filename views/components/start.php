<?php
/**
 * @var App\Kernel\View\ViewInterface $view
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kinopoisk</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-[100vh] bg-gray-700">
<?php $view->component('header') ?>
