<?php
if(substr(basename($_SERVER['PHP_SELF']), 0, 11) == "imEmailForm") {
	include '../res/x5engine.php';
	$form = new ImForm();
	$form->setField('Nombre', @$_POST['imObjectForm_1_1'], '', false);
	$form->setField('E-Mail', @$_POST['imObjectForm_1_2'], '', false);
	$form->setField('Consulta', @$_POST['imObjectForm_1_3'], '', false);

	if(@$_POST['action'] != 'check_answer') {
		if(!isset($_POST['imJsCheck']) || $_POST['imJsCheck'] != '90875EB2991766440CEAE4519052F5DD' || (isset($_POST['imSpProt']) && $_POST['imSpProt'] != ""))
			die(imPrintJsError());
		$form->mailToOwner($_POST['imObjectForm_1_2'] != "" ? $_POST['imObjectForm_1_2'] : 'esimdp@gmail.com', 'esimdp@gmail.com', 'prueba', '', false);
		@header('Location: ../index.html');
		exit();
	} else {
		echo $form->checkAnswer(@$_POST['id'], @$_POST['answer']) ? 1 : 0;
	}
}

// End of file