<?php

//  ------------------       RESPONSE MANAGER
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

//  ------------------       REQUEST MANAGER
/**
*	FUNCTION isRequest
*	FR : Cette fonction vérifie la méthode de la requête HTTP
*	EN : This function checks the method of the HTTP request
*
*	RETURN BOOLEAN
*/
function isRequest($method) {
	return $_SERVER['REQUEST_METHOD'] == strtoupper($method) ; 
}

/**
*	FUNCTION isPOST
*	FR : Cette fonction vérifie que la méthode HTTP est bien POST
*	EN : This function checks the HTTP method is POST
*
*	RETURN BOOLEAN
*/
function  isPOST() {
	return isRequest("POST");
}

/**
*	FUNCTION isGET
*	FR : Cette fonction vérifie que la méthode HTTP est bien GET
*	EN : This function checks the HTTP method is GET
*
*	RETURN BOOLEAN
*/
function  isGET() {
	return isRequest("GET");
}

/**
*	FUNCTION isDELETE
*	FR : Cette fonction vérifie que la méthode HTTP est bien DELETE
*	EN : This function checks the HTTP method is DELETE
*
*	RETURN BOOLEAN
*/
function  isDELETE() {
	return isRequest("DELETE");
}

/**
*	FUNCTION isPUT
*	FR : Cette fonction vérifie que la méthode HTTP est bien PUT
*	EN : This function checks the HTTP method is PUT
*
*	RETURN BOOLEAN
*/
function  isPUT() {
	return isRequest("PUT");
}

