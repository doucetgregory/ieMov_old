<?php
/**
 * Created by PhpStorm.
 * User: Grégory Doucet
 * Date: 12/10/2018
 * Time: 15:49
 */

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AccueilController extends AbstractController
{

    public function helloWorld() {
        return $this->render('accueil/helloWorld.html.twig');
    }

    public function index() {
        return $this->render('accueil/index.html.twig');
    }

}