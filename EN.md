#PHP Documentation (English version)



#### http_response
http_response - Modify the HTTP response header to define a message and a specific code
```php
void http_response( [ string $message = "BAD REQUEST" , int $statut = 400 ] )
```

#### isRequest
isRequest - Determines whether an HTTP request is issued by the method passed as parameter
```php
boolean isRequest( string $method ) 
```

#### isPOST
isPOST - Determines whether an HTTP request is issued by the POST method
```php
boolean isPOST( void ) 
```

#### isGET
isGET - Determines whether an HTTP request is issued by the GET method
```php
boolean isGET( void ) 
```

#### isDELETE
isDELETE - Determines whether an HTTP request is issued by the DELETE method
```php
boolean isDELETE( void ) 
```

#### isPUT
isPUT - Determines whether an HTTP request is issued by the PUT method
```php
boolean isPUT( void ) 
```
