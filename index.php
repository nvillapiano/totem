<?php

date_default_timezone_set( 'America/New_York' );
define( 'IS_DEV', true );

require 'vendor/autoload.php';

$app = new \Slim\Slim(
  array(
    'templates.path' => 'views',
    'view' => new \Slim\Views\Twig(),
  )
);

$app->get( '/', function() use ( $app )
{
  $title = "T 0 T E M";
  $body_class = "home fade";
  $app->render( 'home.twig', array(
    'title' => $title,
    'body_class' => $body_class,
    'is_dev' => IS_DEV,
  ));
});

$app->run();
