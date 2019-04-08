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
     * @Route("/leftSidebar", name="left")
     */
    public function leftSidebar()
    {
        $template = 'left-sidebar.html.twig';
        $args = [];
        return $this->render($template, $args);
    }
    /**
     * @Route("/noSidebar", name="nSideBar")
     */
    public function noSidebar()
    {
        $template = 'no-sidebar.html.twig';
        $args = [];
        return $this->render($template, $args);
    }
    /**
 * @Route("/rightSidebar", name="rSidebar")
 */
    public function rightSidebar()
    {
        $template = 'right-sidebar.html.twig';
        $args = [];
        return $this->render($template, $args);
    }
    /**
     * @Route("/login", name="login")
     */
    public function login()
    {
        $template = 'logIn.html.twig';
        $args = [];
        return $this->render($template, $args);
    }


}
