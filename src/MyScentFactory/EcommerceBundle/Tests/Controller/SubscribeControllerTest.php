<?php

namespace MyScentFactory\EcommerceBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class SubscribeControllerTest extends WebTestCase
{
    public function testSubscribe()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'Inscription');
    }

    public function testLogin()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'Connexion');
    }

}
