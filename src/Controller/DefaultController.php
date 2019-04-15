<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index()
    {
        $template = 'base.html.twig';
        $args = [];
        return $this->render($template, $args);
    }
    /**
     * @Route("/about", name="default_about")
     */
    public function about()
    {
        $template = 'default/about.html.twig';
        $args = [];
        return $this->render($template, $args);
    }


}
