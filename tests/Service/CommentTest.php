<?php 


namespace App\Comment\Tests\Service;

use App\Model\Comment;
use App\Model\User;
use App\Model\News;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

class CommentTest extends TestCase
{

    #[DataProvider('deliverUsersAndComments')]
    public function testCheckArrayComment(News $news): void
    {
        self::assertNotEmpty($news, 'Result is empty');
    }

    // public function testQuantosComentários(News $news): void
    // {
    //     self::assertArrayHasKey(0,$news->get_comments(), 'Chave não existe no array');
    //     // self::assertArrayHasKey(1,$news->get_comments(), 'Chave não existe no array');
    //     // self::assertArrayHasKey(2,$news->get_comments(), 'Chave não existe no array');
    // }

    public static function userOne(){
        $news = new News('user number one ');
        $news->add_comment(new Comment(new User('Alex'), 'Hi, my name is Alex'));
        return [
            $news
        ];
    }

    public static function userTwo(){
        $news = new News('User number two');
        $news->add_comment(new Comment(new User('Lucas'), 'Hey, how are you!'));
        return [
            $news
        ];
    }


    public static function deliverUsersAndComments(): array
    {
        return [
            self::userOne(),
            self::userTwo()
        ];
    }
}