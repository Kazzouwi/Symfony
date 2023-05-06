<?php

namespace App\Controller;

use App\Message\Message;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Validator\ValidatorInterface;

class ValidationController extends AbstractController
{
    /**
     * @Route("/validation", name="validation")
     */
    public function validation(ValidatorInterface $validator): Response
    {
        $message = (new Message())
            ->setType('blog')
            ->setContent('Le contenu de mon message')
            ->setTitle('Le')
            ->setUsername('JohnDoe')
            ->setEmail('john@example.com')
        ;

        $errors = $validator->validate($message);

        return $this->render('validation/index.html.twig', [
            'errors' => $errors,
        ]);
    }
}