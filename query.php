<?php

$name = trim($_POST['name']);
$price = $_POST["price"];
$errors = [];
if (empty($name)) {
    $errors['name'] = 'Name is mandatory.<br>';
}

if (empty($price)) {
    $errors['price'] = 'price is mandatory.<br>';
}


if (count($errors) == 0) {
    $dsn = 'mysql:host=localhost;port=3306;dbname=flowers';

    $pdo = new PDO($dsn, 'root', '');
    $query = 'INSERT INTO flowers(`name`,`price`) VALUES( ? , ? ); ';
    $prep = $pdo->prepare($query);
    $prep->bindValue(1, $name);
    $prep->bindValue(2, $price);
    $result = $prep->execute();
    if ($result) {
        echo "Flower added succesfully";
    } else {
        echo "Insert into database failed";
    }
}

foreach ($errors as $error) {
    echo "<p>" . $error . "</p>";
}
