<?php

namespace MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SaisieController extends Controller
{
    public function indexAction()
    {
        return $this->render('MainBundle:Saisie:index.html.twig', array());
    }
}
