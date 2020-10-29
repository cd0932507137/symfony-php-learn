<?php
// src/Controller/UserController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController
{
    private $userNotifications = [];
    /**
      * @Route("/user/notifications")
      */
    public function notifications(): Response
    {
        // get the user information and notifications somehow
        $userFirstName = 'jack';
        $userNotifications = [
            [
                'first_name' => 'Wouter',
                'last_name' => 'test01',
            ],
            [
                'first_name' => 'Ryan',
                'last_name' => 'test02',
            ]
        ];

        // the template path is the relative file path from `templates/`
        return $this->render('user/notifications.html.twig', [
            // this array defines the variables passed to the template,
            // where the key is the variable name and the value is the variable value
            // (Twig recommends using snake_case variable names: 'foo_bar' instead of 'fooBar')
            'user_first_name' => $userFirstName,
            'notifications' => $userNotifications,
        ]);
    }
}
