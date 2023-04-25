<?php
    $main_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://{$_SERVER['HTTP_HOST']}/";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About KMD Repo</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet"/>
    <link href="css/styles.css" rel="stylesheet"/>
</head>
<body>
    <div class="container d-flex justify-content-center align-items-center flex-column" id="section-1">
        <div class="text-center">
            <h1>KMD Repo</h1>
        </div>
        <div id="description" class="w-50 my-5">
            <h3> About repository </h3>
            <ul>
                <li>A collection of Docker containers that includes Apache, PHP, MySQL, and phpMyAdmin.</li>
                <li>You can easily clone the repository and start the containers by running the <code>docker-compose up -d</code> command.</li>
                <li>Once the containers are up and running, you can connect to the MySQL database using phpMyAdmin.</li>
                <li>The repository also includes a <code>tempDB.sql</code> file that contains dummy data to create a database and insert dummy data.</li>
                <li>If you don't want to manually import the .sql file, you can navigate to <code>&lt;url&gt;/test_db_connection/create_info.php</code>, which automatically reads the .sql file and makes changes to the database.</li>
                <li>Additionally, you can test the database connection by checking the PHP info page located at <code>app/public/test_db_connection/phpinfo.php</code>.</li>
                <li>This repository is a convenient way for developers to quickly set up a development environment with Apache, PHP, MySQL, and phpMyAdmin using Docker containers.</li>
            </ul>
        </div>
        <div class="row">
            <div class="col text-nowrap">
                <h3> Clone this repo on</h3>
            </div>
            <div class="col">
                <h3>
                    <a
                        class="nav-link text-center text-decoration-underline p-0"
                        href="https://github.com/mtk246/kmd_l5dc_php"
                        target="_blank"
                    >
                        GitHub
                    </a>
                </h3>
            </div>
        </div>
        <div>
            <a
                class="nav-link text-center text-decoration-none text-dark"
                href="https://github.com/mtk246/kmd_l5dc_php"
                target="_blank"
            >
                <i class="fa-4x fa-brands fa-github"></i>
            </a>
        </div>
        <div>
            <a
                href="<?php echo $main_url; ?>"
                class="btn btn-primary"
            >
                Back to Home
            </a>
        </div>
    </div>
</body>
<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>