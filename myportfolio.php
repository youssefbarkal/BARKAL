<?php
    if(isset($_POST['submit'])){
        if(empty($_POST['nom']) || empty($_POST['prenom']) || empty($_POST['email']) || empty($_POST['message'])){
            echo "<script>alert('saisi vos donnéez')</script>";
        }
        else{
            $nom = $_POST["nom"];
            $prenom = $_POST['prenom'];
            $email = $_POST["email"];
            $message = $_POST["message"];
            $monemail = "youssefwinners710@gmail.com";
            $subject = "nouveau message de formulaire";
            $body = "Nom: $nom\nEmail: $email\n\nMessage:\n$message";
            $headers = "From: $email";
            mail($monemail, $subject, $body, $headers);
            echo "<script>alert(Message envoyé avec succès !)</script>";
        }
    }
 ?>