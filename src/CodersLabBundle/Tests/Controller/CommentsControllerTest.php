<?php

namespace CodersLabBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class CommentsControllerTest extends WebTestCase
{
    public function testAddcomments()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/addcomments');
    }

    public function testAllcomments()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/allcomments');
    }

    public function testMycomments()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/mycomments');
    }

    public function testRemovecomments()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/removecomments');
    }

}
