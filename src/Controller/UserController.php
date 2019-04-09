<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;


class UserController extends AbstractController
{
    /**
     * @Route("/user", name="user")
     * @Security("has_role('ROLE_USER')") */
    public function index() {
        $template = 'user/index.html.twig'; $args = [];
        return $this->render($template, $args);
    }
}
