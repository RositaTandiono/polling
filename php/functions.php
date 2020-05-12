<?php
function pdo_connect_mysql() {
    // Update the details below with your MySQL details
    $DATABASE_HOST = 'localhost';
    $DATABASE_USER = 'root';
    $DATABASE_PASS = '';
    $DATABASE_NAME = 'phppoll';
    try {
    	return new PDO('mysql:host=' . $DATABASE_HOST . ';dbname=' . $DATABASE_NAME . ';charset=utf8', $DATABASE_USER, $DATABASE_PASS);
    } catch (PDOException $exception) {
    	// If there is an error with the connection, stop the script and display the error.
    	die ('Failed to connect to database!');
    }
}

function template_header($title) {
    echo <<<EOT
    <!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8">
            <title>$title</title>
            <link href="style.css" rel="stylesheet" type="text/css">
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css"> 
        </head>
        <body>
        <nav class="navtop">
            <div>
            <img src="gambar/logo.png" width="60px" height="60px"/>
                <h1>Web Polling</h1>
                <a href="dashboard.php"><i class="fas fa-home"></i>Dashboard</a>
                <a href="polls.php"><i class="fas fa-poll-h"></i>Polls</a>
                <a href="mahasiswa.php"><i class="fas fa-table"></i>Data Mahasiswa</a>
                <a href="index.php"><i class="fas fa-share"></i>Log Out</a>
            </div>
        </nav>
    EOT;
    }

// Template footer
function template_footer() {
    echo <<<EOT
        </body>
    </html>
    EOT;
    }

?>