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
     * @Route("/ferrari-enzo.html", name="ferrari-enzo")
     */
    public function FerrariEnzoAction()
    {
        return $this->render('default/ferrari-enzo.html.twig');
    }
    /**
     * end - Piotrek Kustra
     */

    /**
     * Dawid Majdanski
     */
    
    /**
     * @Route("/bugatti16.4_veyron.html", name="bugatti16.4_veyron")
     */
    public function bugatti16_4veyronAction()
    {
        return $this->render('default/bugatti16.4_veyron.html.twig');
    }
    
    /**
     * @Route("/arrinera_hussarya.html", name="arrinera_hussarya")
     */
    public function ArrineraHussaryaAction()
    {
        return $this->render('default/arrinera_hussarya.html.twig');
    }

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
