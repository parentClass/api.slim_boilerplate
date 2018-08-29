<?php

/**
* Written by: dimalantadaniel@gmail.com
* Written at: 08/29/2018
* Sample template http requests
**/

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

/*
 Route table
 ----------------
 VERB   |   ROUTE
 ----------------
 GET    |  /template/all
 GET    |  /template?id={id}
 POST   |  /template
 PUT    |  /template?id={id}
 DELETE |  /template?id={id}
*/


 $app->get('/template/all', function(Request $request, Response $response) use ($pdo)
{
  // Data holder
  $data = array();

  // Returns data
  return json_encode($data);
});

 $app->get('/template', function(Request $request, Response $response) use ($pdo)
{
  // Data holder
  $data = array();

  // Get parameter supplied
  $id = $request->getParam('id');

  // Returns data
  return json_encode($data);
});

$app->post('/template', function(Request $request, Response $response) use ($pdo)
{
  // Data holder
  $data = array();

  // Returns data
  return json_encode($data);
}); 

$app->put('/template', function(Request $request, Response $response) use ($pdo)
{
  // Data holder
  $data = array();

  // Get parameter supplied
  $id = $request->getParam('id');

  // Returns data
  return json_encode($data);
});

$app->delete('/terminal', function(Request $request, Response $response) use ($pdo)
{
  // Data holder
  $data = array();
  
  // Get parameter supplied
  $id = $request->getParam('id');

  // Returns data
  return json_encode($data);
});