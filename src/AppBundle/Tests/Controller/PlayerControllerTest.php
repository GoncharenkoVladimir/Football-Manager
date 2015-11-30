<?php
namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class PlayerControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/player/1');

        $this->assertGreaterThan(
            0,
            $crawler->filter('baner > h3:contains("Vasiliy Pupkin")')->count()
        );
    }
}