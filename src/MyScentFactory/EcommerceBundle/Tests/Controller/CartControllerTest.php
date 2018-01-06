<?php

namespace MyScentFactory\EcommerceBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class CartControllerTest extends WebTestCase
{
    public function testShop()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/Shop');
    }

    public function testDiscount()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/Discount');
    }

    public function testName()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/Name');
    }

}
