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
     *
     * @Route("/")
     * @Route(
     *     "/{_locale}",
     *     requirements={
     *         "_locale": "en|fr"
     *     },
     *     name="homepage"
     * )
     * @Route(
     *     "/{_locale}/homepage",
     *     requirements={
     *         "_locale": "en|fr"
     *     }
     * )
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('home.html.twig');
    }

    /**
     * @Route(
     *     "/{_locale}/about",
     *     requirements={
     *         "_locale": "en|fr"
     *     },
     *     name="about")
     */
    public function aboutAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('about.html.twig');
    }

    /**
     * @Route(
     *     "/{_locale}/experiences",
     *     requirements={
     *         "_locale": "en|fr"
     *     },
     *     name="experiences")
     */
    public function experiencesAction(Request $request)
    {
        // replace this example code with whatever you need
        $lang = $request->getLocale();
        if($lang == 'en') {
            return $this->render('experiences.en.html.twig');
        }
        return $this->render('experiences.html.twig');
    }

    /**
     * @Route(
     *     "/{_locale}/education",
     *     requirements={
     *         "_locale": "en|fr"
     *     },
     *      name="education")
     */
    public function educationAction(Request $request)
    {
        // replace this example code with whatever you need
        $lang = $request->getLocale();
        if($lang == 'en') {
            return $this->render('education.en.html.twig');
        }
        return $this->render('education.html.twig');
    }

    /**
     * @Route(
     *     "/{_locale}/skills",
     *     requirements={
     *         "_locale": "en|fr"
     *     },
     *     name="skills")
     */
    public function skillsAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('skills.html.twig');
    }

    /**
     * @Route(
     *     "/{_locale}/contact",
     *     requirements={
     *         "_locale": "en|fr"
     *     },
     *     name="contact")
     */
    public function contactAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('contact.html.twig');
    }

}