<?php

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

