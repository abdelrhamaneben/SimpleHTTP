<?php


/**
*	FUNCTION http_response
*	FR : Cette fonction permet de définir la réponse d'une requête HTTP
*	EN : This function sets the response to an HTTP request
*
*	PARAM $message Define the HTTP statusText
*	PARAM $code Define the HTTP statusCode
*	RETURN NULL
*/
function http_response($message = "BAD REQUEST", $statut = 400) {
	header("HTTP/1.0 ".$statut." ".$message);
	echo $message;
	exit(0);
}
