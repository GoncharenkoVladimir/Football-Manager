<?php
namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class CommandControllerTest extends WebTestCase
{
    /**
     * @param $url
     * @param $code
     * @dataProvider testIndexProvider
     */
    public function testIndex($url, $code)
    {
        $client = static::createClient();
        $crawler = $client->request('GET', $url);
        $this->assertEquals($code, $client->getResponse()->getStatusCode());
        $this->assertContains('Welcome', $crawler->filter('#title')->text());
    }

    public function testIndexProvider()
    {
        return [
            ['/command', 404],
            ['/player', 404],
        ];
    }
}