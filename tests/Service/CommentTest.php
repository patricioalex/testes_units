<?php 


namespace App\Comment\Tests\Service;

use App\Model\Comment;
use App\Model\User;
use App\Model\News;
use PHPUnit\Framework\TestCase;

class CommentTest extends TestCase
{
    public function testCheckArrayComment(){
        $news = new News('Temas: Vender um item');
        $user_one = new User('Alex');
        $user_two = new User('Lucas');

        $news->add_comment(new Comment($user_one, 'Quero compra esse item!'));
        $news->add_comment(new Comment($user_two, 'Estou pensando em comprar.'));

        self::assertNotEmpty($news);
    }
}