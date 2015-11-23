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
        $client->request('GET', $url);
        $this->assertEquals($code, $client->getResponse()->getStatusCode());
    }

    public function testIndexProvider()
    {
        return [
            ['/country', 404],
            ['/player', 404],
        ];
    }
}