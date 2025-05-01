<?php
require __DIR__ . '/Validator.php';

$validator = new Validator();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['with_regex'])) {
        $validator->validate($_POST);
        $errors  = $validator->getErrors();
        $results = $validator->getResults();
        $template = 'validated';
    } else {
        // Sin validación
        $errors  = [];
        $results = array_map(function($v){ return htmlspecialchars(trim($v), ENT_QUOTES); }, $_POST);
        $template = 'raw';
    }
}

include __DIR__ . '/form.php';

if (!empty($template)) {
    include __DIR__ . "/{$template}.php";
}