<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;


class SecurityController extends AbstractController
{
    /**
     * @Route("/login")
     */
    public function loginAction(AuthenticationUtils $authenticationUtils)
    {
        $error = $authenticationUtils->getLastAuthenticationError();
        $username = $authenticationUtils->getLastUsername();

        return $this->render('security/login.html.twig', [
            'error' => $error,
            'username' => $username,
        ]);
    }

    /**
     * @Route("/aloha")
     */
    public function successAction()
    {
        $this->addFlash('success', 'Connexion établie. Bienvenue.');

        return $this->redirectToRoute('app_default_index');
    }

    /**
     * @Route("/denied")
     */
    public function deniedAction()
    {
        $this->addFlash('warning', 'Vous devez être connecté pour accéder à ce contenu.');

        return $this->redirectToRoute('app_security_login');

    }
}