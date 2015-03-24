<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{

    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {
        return $this->render('default/index.html.twig');
    }

    /**
     * Piotrek Kustra
     */
    /**
     * @Route("/maseratti-5000-gt.html", name="maseratti-5000-gt")
     */
    public function MaserattiAction()
    {
        return $this->render('default/maseratti-5000-gt.html.twig');
    }
    /**
     * end - Piotrek Kustra
     */

    /**
     * Dawid Majdanski
     */

    /**
     * end - Dawid Majdanski
     */

    /**
     * Damian Pyc
     */

    /**
     * end - Damian Pyc
     */

    /**
     * Paweł Czuchaj
     */

    /**
     * end - Paweł Czuchaj
     */



}
