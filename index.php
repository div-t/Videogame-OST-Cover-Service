<?php
require_once('Seeder.php');


$var = Seeder::getData();

if (isset($_GET['format']) && preg_match("/[\w\.-]+$/",  $_GET['format'])) {
    if ($_GET['format'] == 'html') {
        header('Content-Type: text/html');
    } else {
        header('Content-Type: application/' . $_GET['format']);
    }
} else {
    header('Content-Type: text/html');
}

if (isset($_GET['OSTID']) && isset($_GET['ALL'])) {
    echo 'Fatal Error: Both Parameters are set. You might try to use only one GET Parameter';
} else if (isset($_GET['OSTID']) && preg_match("/\d+$/",  $_GET['OSTID'])) {
    echo json_encode($var[$_GET['OSTID']]);
} else if (isset($_GET['ALL']) && preg_match("/\w+$/",  $_GET['ALL'])) {
    if ($_GET['ALL'] == 'true') {
        echo json_encode($var);
    } else {
        echo 'Fatal Error: false is not an option - you can only use this parameter for showing all OSTs';
    }
} else {
    echo 'Fatal Error: None of the needed Parameters is set - please do so!';
}