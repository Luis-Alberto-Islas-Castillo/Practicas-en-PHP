<?php
declare(strict_types=1);

abstract class User{
    abstract function greet(string $name);
    public $age;
    protected $gendar;
}

$female_user = (
    new class extends User
    {
        public $age = 30;
        protected $gendar = 'Female';

        public function greet( string $name )
        {
            return 'Hello, Ms.' . $name;
        }
    }
);

echo '<pre>';

var_dump($female_user);