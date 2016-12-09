<?php

namespace TransBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class MainControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/index');
    }

    public function testDemande()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/demande');
    }

    public function testOfferlist()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/offerlist');
    }

    public function testCom()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/com');
    }

    public function testRating()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/rating');
    }

}
