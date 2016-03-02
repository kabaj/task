<?php

namespace CodersLabBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class TaskControllerTest extends WebTestCase
{
    public function testCreatetask()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/createtask');
    }

    public function testAlltask()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/alltask');
    }

    public function testMytask()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/mytask');
    }

    public function testOldtask()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/oldtask');
    }

}
