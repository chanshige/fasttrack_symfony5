<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class ConferenceController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     */
    public function index(Request $request)
    {
        $greet = "";
        if ($name = $request->get('hello')) {
            $greet = sprintf('Hello %s!', htmlspecialchars($name));
        }

        return $this->render('conference/index.html.twig', [
            'greet' => $greet,
            'controller_name' => 'ConferenceController',
        ]);
    }
}
