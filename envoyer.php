<?php
$erreurs = array();

// Préparer la regexp
$v = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/";
 // Tester la présence d'erreur sur la variable attendue email
if(!isset($_POST['mail'])){
	$erreurs[]="Le mail n'est pas defini";
}elseif(!preg_match($v, $_POST['mail'])){
	$erreurs[]="Le mail n'est pas valide";
}

// Tester la présence d'erreur sur la variable attendue message
if (!isset($_POST['message'])){
	$erreurs[] = "Le message n'est pas défini";
}elseif(strlen($_POST['message']) > 500) {
	$erreurs[] = "Le message doit être inférieur à 500 caractères";
} 

// Tester la présence d'erreur sur la variable attendue pseudo
if (!isset($_POST['pseudo'])){
	$erreurs[] = "Le pseudo n'est pas défini";
}elseif(strlen($_POST['pseudo']) == 0) {
	$erreurs[] = "Le pseudo doit être reseigné";
}

if(count($erreurs)>0){
	// Erreurs
	echo implode("<br />", $erreurs);
}else{
	// Tout est bon on peut envoyer le mail
	$pseudo = stripslashes($_POST['pseudo']);
	$mail = stripslashes($_POST['mail']);
	$message = stripslashes($_POST['message']);

	$adresse = 'lou@yopmail.com';
	$titre = "new message from: $pseudo";
	$contenu = "$pseudo envoie le message suivant : \n\n$message \n\n Adresse mail du destinataire : $mail";
	$headers = 'From : "Lou"<'.$mail.'>'."\n";
		//Envoi de l'email :


	if(mail($adresse,$titre,$contenu,$headers)){
		echo "Votre message a bien été envoyé";
	}else{
		echo "Une erreur est servenue (heroku ne gère pas l'envoi de mail), votre message n'a pas été envoyé ! Veuillez réessayer ultérieurement";
	}	
}


echo '
<br />
<br />
<a href="index.php">Revenir à la page contact</a>
';
?>