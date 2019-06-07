<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\RegistrationType;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class SecurityController extends AbstractController
{
    /**
     * @Route("", name="home")
     */
    public function home()
    {
        return $this->render('security/home.html.twig', [
            'home' => 'home',
        ]);
    }

    /**
     * @Route("/login", name="login")
     */
    public function login()
    {
        return $this->render('security/login.html.twig', [
            'login' => 'login',
        ]);
    }

    /**
     * @Route("/logout", name="logout")
     */
    public function logout(){}


    /**
     * @Route("/registrer", name="registrer")
     */
    public function registrer(Request $request, ObjectManager $manager,
                              UserPasswordEncoderInterface $encoder)
    {
        $user = new User();

        $form = $this->createForm(RegistrationType::class, $user);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $user->setPassword($encoder->encodePassword($user, $user->getPassword()));
            $manager->persist($user);
            $manager->flush();

            $this->addFlash('success', 'Inscription effectuée !');

            return $this->redirectToRoute('login');
        }

        return $this->render('security/registrer.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/security", name="security")
     */
    public function index()
    {
        return $this->render('security/index.html.twig', [
            'controller_name' => 'SecurityController',
        ]);
    }
}
