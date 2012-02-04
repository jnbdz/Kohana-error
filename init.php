<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Turn errors into exceptions. 
 */
Kohana::$errors = true;

/**
 * Custom exception handler.
 */
restore_exception_handler();
set_exception_handler(array('Exception_Handler', 'handler'));

/**
 * Error route.
 */
Route::set('error', 'error/<action>(/<message>)', array('action' => '[0-9]++', 'message' => '.+'))
->defaults(array(
    'controller' => 'exception_handler'
));