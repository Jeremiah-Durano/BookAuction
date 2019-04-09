<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;


class AdminController extends AbstractController
{
    /**
     * @Route("/admin", name="admin")
     * @Security("has_role('ROLE_ADMIN')") */
    public function index() {
        $template = 'admin/index.html.twig'; $args = [];
        return $this->render($template, $args);
    }
}
