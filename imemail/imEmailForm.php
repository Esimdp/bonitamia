<?php
if(substr(basename($_SERVER['PHP_SELF']), 0, 11) == "imEmailForm") {
	include '../res/x5engine.php';
	$form = new ImForm();
	$form->setField('NOMBRE', @$_POST['imObjectForm_19_1'], '', false);
	$form->setField('E-MAIL', @$_POST['imObjectForm_19_2'], '', false);
	$form->setField('CONSULTA', @$_POST['imObjectForm_19_3'], '', false);

	if(@$_POST['action'] != 'check_answer') {
		if(!isset($_POST['imJsCheck']) || $_POST['imJsCheck'] != 'D433170D9874F88DA7637F84C8D20BA8' || (isset($_POST['imSpProt']) && $_POST['imSpProt'] != ""))
			die(imPrintJsError());
		$form->mailToOwner($_POST['imObjectForm_19_2'] != "" ? $_POST['imObjectForm_19_2'] : 'bonitamiamoda@gmail.com', 'bonitamiamoda@gmail.com', 'consulta web', 'Gracias por enviarnos tu consulta, a la brevedad nos estaremos comunicando contigo.', false);
		@header('Location: ../index.html');
		exit();
	} else {
		echo $form->checkAnswer(@$_POST['id'], @$_POST['answer']) ? 1 : 0;
	}
}

// End of file