<?php

use App\Comment\Tests\Service\CommentTest;

require 'vendor/autoload.php';

$test = new CommentTest('Teste 01');
print_r($news->get_comments());