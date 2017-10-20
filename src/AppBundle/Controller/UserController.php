<?php
/**
 * Created by PhpStorm.
 * User: yuriy
 * Date: 19.10.17
 * Time: 12.47
 */
declare(strict_types=1);

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class UserController extends Controller
{
    /**
     * @Route("/autorization")
     */
    public function autorisationAction():Response
    {
        return new Response('welcome to autori111sation');
    }
    /**
     * @Route("/registration")
     */
    public function registrationAction():Response
    {
        return new Response('welcome to registration');
    }

    /**
     * @Route("/account")
     */
    public function viewAccount():Response
    {
        return new Response('welcome to registration');
    }

}
