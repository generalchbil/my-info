<?php
/**
 * Created by PhpStorm.
 * User: generalchbil
 * Date: 29/06/2017
 * Time: 11:47
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class NavController extends Controller
{

    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('home.html.twig');
    }

    /**
     * @Route("/about", name="about")
     */
    public function aboutAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('about.html.twig');
    }

    /**
     * @Route("/experiences", name="experiences")
     */
    public function experiencesAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('experiences.html.twig');
    }

    /**
     * @Route("/education", name="education")
     */
    public function educationAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('education.html.twig');
    }

    /**
     * @Route("/skills", name="skills")
     */
    public function skillsAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('skills.html.twig');
    }

    /**
     * @Route("/contact", name="contact")
     */
    public function contactAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('contact.html.twig');
    }

}