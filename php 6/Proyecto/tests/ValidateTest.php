<?php

use PHPUnit\Framework\TestCase;
use App\Validate;

class ValidateTest extends TestCase
{
    public function test_email()
    {
        $email = Validate::email('fernando@gmail.com');
        $this->assertTrue($email);
    }

    public function test_url()
    {
        $url = Validate::url('http://platzi.com');
        $this->assertTrue($url);   
    }
}