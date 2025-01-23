<?php

namespace App\Model;

class User
{
    /** @var string */
    private $name;
    /** @var string */
    private $cpf;

    public function __construct(string $name)
    {
        $this->name = $name;
        // $this->cpf = $cpf;
    }

    public function getName(): string
    {
        return $this->name;
    }
    public function getCpf(): string
    {
        return $this->cpf;
    }
}
