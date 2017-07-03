<?php

namespace ShortUrlBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use ShortUrlBundle\Repository\ShortUrlRepository;

class DefaultController extends Controller
{
    /**
     * @Route("/{shortUrlIdent}")
     */
    public function indexAction(Request $request, $shortUrlIdent)
    {

        $shortUrlRepo = $this->getDoctrine()->getRepository('ShortUrlBundle:ShortUrl');

        /**
         * @var \ShortUrlBundle\Entity\ShortUrl $shortUrl
         */
        $shortUrl = $shortUrlRepo->findOneBy([
            'ident' => $shortUrlIdent
        ]);

        if($shortUrl === null) {
            throw $this->createNotFoundException();
        }
        
        return $this->redirect($shortUrl->getTargetUrl());


    }
}
