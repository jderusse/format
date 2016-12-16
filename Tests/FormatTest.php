<?php

class FormatTest extends \PHPUnit_Framework_TestCase
{
    public function test without corresponding key()
    {
        $this->assertSame(
            'Hello {who}',
            format('Hello {who}', array())
        );
    }

    public function test single replacement()
    {
        $this->assertSame(
            'Hello World',
            format('Hello {who}', array('who' => 'World'))
        );
    }

    public function test multi replacement()
    {
        $this->assertSame(
            'Hello John Doe',
            format('Hello {firstName} {lastName}', array('firstName' => 'John', 'lastName' => 'Doe'))
        );
    }

    public function test several use of same key()
    {
        $this->assertSame(
            '<a href="http://github.com/jderusse>http://github.com/jderusse</a>',
            format('<a href="{url}>{url}</a>', array('url' => 'http://github.com/jderusse'))
        );
    }

    public function test key with bracket()
    {
        $this->assertSame(
            'Why not',
            format('Why {k{ey}}', array('k{ey}' => 'not'))
        );
    }

    public function test dont touch unquoted string()
    {
        $this->assertSame(
            'My name is Bond',
            format('My name is {name}', array('name' => 'Bond'))
        );
    }
}
