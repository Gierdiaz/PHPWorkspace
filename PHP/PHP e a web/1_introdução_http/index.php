<?
/* 
Introduction HTTP

- The web runs on top of the HTTP protocol (hypeText Transfer Protocol);
- When a browser requests a web page, an HTTP request is made;
- This request receives a response, both can have a body;
- The response contains a header, which is made up of the method (GET, POST),
requested file/path (index.php) and HTTP protocol version (HTTP/1.x);
- Basically a request is sent and a response is received;
*/

/* 
 Http method

- The requests we send also contain methods, some of them are
- GET    => Requests the presentation of a resource (ex: visualization of a page);
- POST   => Sending data to the server (eg user registration);
- PUT    => Data update;
- DELETE => Removal of data;
- PATHC  => Specific data update; 
 */

/*  
PHP global variables

- To handle these requests PHP gives us some global variables;
- $_ENV => environment variables;
- $_GET => Parameters that were sent by GET request;
- $_POST => Parameters that were sent by POST;
- $_COOKIE => Cookie values;
- $_SERVER => Information about the server;
- $_FILES => Information about the files that were uploaded;
 */


?>