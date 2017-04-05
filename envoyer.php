<?php
if(isset($_POST['pseudo']) AND isset($_POST['mail']) AND isset($_POST['message']))//Si les variables existent
{ 
	if($_POST['pseudo']!= NULL AND $_POST['mail']!= NULL AND $_POST['message']!=NULL)// Si on a quelque chose à enregistrer
	{
		$pseudo = stripslashes($_POST['pseudo']);
		$mail = stripslashes($_POST['mail']);
		$message = stripslashes($_POST['message']);

		$adresse = 'lou@yopmail.com';
		$titre = "new message from: $pseudo";
		$contenu = "$pseudo envoie le message suivant : \n\n$message \n\n Adresse mail du destinataire : $mail";
		$headers = 'From : "Lou"<'.$mail.'>'."\n";
		//Envoi de l'email :
		

		if(!mail($adresse,$titre,$contenu,$headers)){
			echo "ERROR !";
		}

		//Affichage "mail envoyé" : 
		echo "Votre message a bien été envoyé";
	}
	else{
		echo "Votre message n'a pas été envoyé ! Cause : tous les champs doivent être remplis";
	}
	//$string = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut venenatis metus id posuere porttitor. Etiam ut tristique mauris. Donec gravida at magna vitae scelerisque. Cras eget luctus leo, eget mattis nunc. Nam vitae purus eu elit tempor elementum. Maecenas id odio fermentum, porttitor massa eget, efficitur enim. Etiam est quam, porta id eleifend in, volutpat sed risus.

	//Pellentesque in bibendum nisi, eget ullamcorper nibh. Donec consectetur nec neque at vehicula. Integer eu luctus nibh. Vivamus semper sed.";
	//if (strlen($string) > 500) {
		//$trimstring = substr($string, 0, 500). 'Vous avez plus de 500 caractères';
	//} else {
		//$trimstring = $string;
}
	//echo $trimstring;
?>

<br />
<br />
<a href="index.php">Revenir à la page contact</a>


