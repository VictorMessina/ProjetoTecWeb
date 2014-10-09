<?php

	function confirmacao($nome, $senha){
		if($nome == " " && $senha == " ")
		{
			return true;
		} else {
			return false;
		}
	}
?>
