<?php


namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {

        $em = $this->getDoctrine()->getManager();
       /** $dql = "SELECT * FROM Article";
        $query = $em->createQuery($dql)
            ->setMaxResults(3);**/
        $articles = $em->getRepository('ArticleBundle:Article')->findAll();
        $events = $em->getRepository('EventBundle:Event')->findBy(array(), array('Date' => 'DESC'));

        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', array(
            'articles' => $articles,
            'events' => $events,
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ));

    }


}
