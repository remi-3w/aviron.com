

<?php
// $db = new PDO('mysql:host=127.0.0.1:3306;dbname=aviron', 'root', ''); // dev
$db = new PDO('mysql:host=remimoutdtremi.mysql.db;dbname=remimoutdtremi', 'remimoutdtremi', 'Rvkt5hsy0');

$query = $db->prepare(
    "INSERT INTO `contact` ( `name`, `email`, `object`, `content`) VALUES (?,?,?,?)"
);
$query->execute(array(
    $_POST['name'],
    $_POST['email'],
    $_POST['category'],
    $_POST['message'],

));

header("Location: http://remimouton.com/aviron/contact");

//  TODO ajouter un datetime pour savoir quand l'email a été envoyé
