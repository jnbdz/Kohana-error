Kohana-error
===========

Kohana module for handling errors and exceptions.

How to use
----------

First, add this line:

    'error'         => MODPATH.'error',

inside:

    Kohana::modules();

So that the module is loaded.

Second, in the bootstrap.php file you need to make sure that the "Kohana::$environment" is equal to "Kohana::PRODUCTION".

You could add it to the "init.php" file found in the module "Kohana-error" folder.

You can also add this line:

    error_reporting(E_ALL ^ E_NOTICE ^ E_STRICT);

Now that you have the module install you can modify the controller and/or the views. It is recomended not to touch anything else.

You can also very easily call an error this way:

    throw new HTTP_Exception_503('The website is down');

-------

Copyright (C) 2012

Permission is hereby granted, free of charge, to any person obtaining a copy of
this software and associated documentation files (the "Software"), to deal in
the Software without restriction, including without limitation the rights to
use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies
of the Software, and to permit persons to whom the Software is furnished to do
so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
