#Documentation PHP (version Française)



#### http_response
http_response - Modifie l'en-tête de la réponse HTTP afin de lui définir un message et un code spécifique
```php
void http_response( [ string $message = "BAD REQUEST" , int $statut = 400 ] )
```

#### isRequest
isRequest - Détermine si une requête HTTP a été émise par la méthode passée en paramètre
```php
boolean isRequest( string $method ) 
```

#### isPOST
isPOST - Détermine si une requête HTTP a été émise par la méthode POST
```php
boolean isPOST( void ) 
```

#### isGET
isGET - Détermine si une requête HTTP a été émise par la méthode GET
```php
boolean isGET( void ) 
```

#### isDELETE
isDELETE - Détermine si une requête HTTP a été émise par la méthode DELETE
```php
boolean isDELETE( void ) 
```

#### isPUT
isPUT - Détermine si une requête HTTP a été émise par la méthode PUT
```php
boolean isPUT( void ) 
```
