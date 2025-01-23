<?php

namespace App\Model;

use App\Model\Comment;

class News
{
    /** @var Comment[] */
    private $comment;
/** @var Comment[] */
    private $description;
    public function __construct(string $description = '')
    {
        $this->comment = [];
        $this->description = $description;

    }

    public function add_comment(Comment $comment)
    {
        $this->comment[] = $comment;
    }

    /**
     * @return Comment[]
     */
    public function get_comments(): array
    {
        return $this->comment;
    }

        /**
     * @return string
     */
    public function get_description(): array
    {
        return $this->description;
    }
}
