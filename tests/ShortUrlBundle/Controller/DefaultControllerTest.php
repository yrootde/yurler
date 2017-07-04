<?php

namespace ShortUrlBundle\Tests\Controller;

use ShortUrlBundle\Entity\ShortUrl;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DefaultControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();
        /**
         * @var \Doctrine\Common\Persistence\ObjectManager $em
         */
        $em = static::$kernel->getContainer()
            ->get('doctrine')
            ->getManager();


        $shortUrl = new ShortUrl();
        $shortUrl->setIdent('abcde');
        $shortUrl->setTargetUrl('https://google.de');
        $em->persist($shortUrl);

        $crawler = $client->request('GET', '/abcde');
        $this->assertTrue($client->getResponse()->isRedirect('https://google.de'));
    }
}
