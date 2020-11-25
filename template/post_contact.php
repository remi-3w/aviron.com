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


// if (isset($_POST['email'])) {

//     $email_to = "remi_94@msn.com";
//     $email_subject = "Le sujet de votre email";

//     function died($error)
//     {
//         // your error code can go here
//         echo
//             "Nous sommes désolés, mais des erreurs ont été détectées dans le" .
//                 " formulaire que vous avez envoyé. ";
//         echo "Ces erreurs apparaissent ci-dessous.<br /><br />";
//         echo $error . "<br /><br />";
//         echo "Merci de corriger ces erreurs.<br /><br />";
//         die();
//     }


//     // si la validation des données attendues existe
//     if (
//         !isset($_POST['name']) ||
//         !isset($_POST['category']) ||
//         !isset($_POST['email']) ||
//         !isset($_POST['message'])
//     ) {
//         died(
//             'Nous sommes désolés, mais le formulaire que vous avez soumis semble poser' .
//                 ' problème.'
//         );
//     }


//     $nom = $_POST['name']; // required
//     $category = $_POST['category']; // required
//     $email = $_POST['email']; // required
//     $message = $_POST['message']; // not required


//     $error_message = "";
//     $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

//     if (!preg_match($email_exp, $email)) {
//         $error_message .=
//             'L\'adresse e-mail que vous avez entrée ne semble pas être valide.<br />';
//     }

//     // Prend les caractères alphanumériques + le point et le tiret 6
//     $string_exp = "/^[A-Za-z0-9 .'-]+$/";

//     if (!preg_match($string_exp, $nom)) {
//         $error_message .=
//             'Le nom que vous avez entré ne semble pas être valide.<br />';
//     }

//     if (!preg_match($string_exp, $category)) {
//         $error_message .=
//             'La catégory que vous avez entré ne semble pas être valide.<br />';
//     }

//     if (strlen($message) < 2) {
//         $error_message .= 'Le message que vous avez entré ne semble pas être valide.<br />';
//     }
//     if (strlen($error_message) > 0) {
//         died($error_message);
//     }

//     $email_message = "Détail.\n\n";
//     $email_message .= "Nom: " . $nom . "\n";
//     $email_message .= "catégory: " . $category . "\n";
//     $email_message .= "Email: " . $email . "\n";
//     $email_message .= "message: " . $message . "\n";


//     // create email headers
//     $headers = 'From: ' . $email . "\r\n" .
//         'Reply-To: ' . $email . "\r\n" .
//         'X-Mailer: PHP/' . phpversion();
//     mail($email_to, $email_subject, $email_message, $headers);


// S'il y des données de postées
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // (1) Code PHP pour traiter l'envoi de l'email

    // Récupération des variables et sécurisation des données
    $nom = htmlentities($_POST['name']); // htmlentities() convertit des caractères "spéciaux" en équivalent HTML
    $objet = htmlentities($_POST['category']);
    $email = htmlentities($_POST['email']);
    $message = htmlentities($_POST['message']);

    // Variables concernant l'email

    $destinataire = 'remi_94@msn.com'; // Adresse email du webmaster (à personnaliser)
    $contenu = '<html><head><title> ' . $objet . ' </title></head><body>';
    $contenu .= '<p>Tu as un nouveau message remi !</p>';
    $contenu .= '<p><strong>Nom</strong>: ' . $nom . '</p>';
    $contenu .= '<p><strong>Email</strong>: ' . $email . '</p>';
    $contenu .= '<p><strong>Message</strong>: ' . $message . '</p>';
    $contenu .= '</body></html>'; // Contenu du message de l'email (en XHTML)

    // Pour envoyer un email HTML, l'en-tête Content-type doit être défini
    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    // Envoyer l'email
    mail($destinataire, $objet, $contenu, $headers); // Fonction principale qui envoi l'email
    header("location:index.html"); // Afficher un message pour indiquer que le message a été envoyé
    // (2) Fin du code pour traiter l'envoi de l'email
};

header("Location: http://remimouton.com/aviron.com/contact");
