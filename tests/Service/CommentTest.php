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

        self::assertNotEmpty($news, 'deu certo');
    }

    public function testQuantosComentários(){
        $news = new News('Temas: Novo teste');
        $user_one = new User('Rany');
        $news->add_comment(new Comment($user_one, 'Quero compra esse item!'));
        $news->add_comment(new Comment($user_one, 'Estou pensando em comprar.'));
        $news->add_comment(new Comment($user_one, 'Estou pensando em comprar mais um.'));
        self::assertCount(3,$news->get_comments(), 'A quantidade não é maior ou inferior ao esperado!');
        self::assertArrayHasKey(0,$news->get_comments(), 'Chave não existe no array');
        self::assertArrayHasKey(1,$news->get_comments(), 'Chave não existe no array');
        self::assertArrayHasKey(2,$news->get_comments(), 'Chave não existe no array');
    }
}