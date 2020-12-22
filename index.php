<?php
require_once('Seeder.php');

$var = Seeder::getData();

if (isset($_GET['format'])) {
    if ($_GET['format'] == 'html') {
        header('Content-Type: text/html');
    } else {
        header('Content-Type: application/' . $_GET['format']);
    }
} else {
    header('Content-Type: text/html');
}

if (isset($_GET['OSTID']) && isset($_GET['ALL'])) {
    echo 'Fatal Error: <br> Both GET Paramters are set. You might try to use only one GET Parameter';
} else if (isset($_GET['OSTID'])) {
    echo json_encode($var[$_GET['OSTID']]);
} else if (isset($_GET['ALL'])) {
    if ($_GET['ALL'] == 'true') {
        echo json_encode($var);
    } else {
        echo 'Fatal Error: <br> The GET Parameters might not be correct';
    }
} else {
    echo 'Fatal Error: <br> The GET Parameters might not be correct';
}