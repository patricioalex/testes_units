<?php

namespace App\Model;

use App\Model\User;

class Comment
{
    /** @var User */
    private $user;
    /** @var string */
    private $comment;

    public function __construct(?User $user, string $comment)
    {
        $this->user = $user;
        $this->comment = $comment;
    }

    public function getUser(): User
    {
        return $this->user;
    }

    public function getComent(): string
    {
        return $this->comment;
    }
}
