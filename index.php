<html>

<head>

</head>

<body>
    <?php
    try {
        $dbh = new pdo(
            'mysql:host=yourHostName;dbname=yourDataBaseName',
            'yourUserName',
            'yourPassword$',
            array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)
        );
        die(json_encode(array('outcome' => true)));
    } catch (PDOException $ex) {
        die(json_encode(array('outcome' => false, 'message' => 'Unable to connect')));
    }
    ?>
</body>

</html>