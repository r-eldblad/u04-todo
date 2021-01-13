<?php

class Customer
{
    private $id;
    private $firstname;
    private $surname;
    private $email;

    public function __cpnstruct(
        int $id,
        string $firstname,
        string $surname,
        string $email
    ) {
        $this->id = $id;
        $this->firstname = $firstname;
        $this->surname = $surname;
        $this->email = $email;
    }
}





?>