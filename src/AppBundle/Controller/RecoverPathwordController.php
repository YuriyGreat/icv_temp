<?php
/**
 * Created by PhpStorm.
 * User: yuriy
 * Date: 26.10.17
 * Time: 14.36
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use AppBundle\Entity\User;


class RecoverPathwordController extends Controller
{
    /**
     * @Route("/recoverPassword", name="recoverPassword")
     * @Method("GET")
     */
    public function resetPasswordAction()
    {
        if ($this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY')) {
            return $this->redirectToRoute('news');
        }
        return $this->render('form/recoverPassword.html.twig');
    }

    /**
     * @Route("/recover", name="recover")
     * @Method("POST")
     */
    public function resetAction(Request $request, RecoverManager $manager, \Swift_Mailer $mailer)
    {
        $email = $request->request->get('Email');
        if ($email !== null) {
            $user = $manager->resetPassword($email);
            if (($user !== null) && ($this->sendEmail($mailer, $user))) {
                return $this->redirectToRoute('homepage');
            }
        }
        return $this->render('default/error.html.twig');
    }

    /**
     * @Route("/password", name="password")
     * @Method("GET")
     */
    public function passwordAction()
    {

    }
    /**
     * @Route("/setPassword", name="setPassword")
     * @Method("POST")
     */
    public function setPasswordAction()
    {

    }

    private function sendEmail()
    {

    }
}