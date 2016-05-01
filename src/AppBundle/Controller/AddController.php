<?php
// src/AppBundle/Controller/AddController.php
namespace AppBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Response;

class AddController extends Controller
{  


/**
     * @Route("/form/add")
     * @Template()
     */
    public function newAction(Request $request)
    {
       
    }
}
	