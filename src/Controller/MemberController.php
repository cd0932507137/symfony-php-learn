<?php
// src/Controller/MemberController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MemberController extends AbstractController
{
    private $userNotifications = [];
    private $client;

    public function __construct(HttpClientInterface $client)
    {
        $this->client = $client;
    }
    /**
      * @Route("/member/data")
      */
    public function data(): Response
    {
        $response = $this->client->request(
            'GET',
            'https://jsonplaceholder.typicode.com/users'
        );

        $statusCode = $response->getStatusCode();
        // $statusCode = 200
        $contentType = $response->getHeaders()['content-type'][0];
        // $contentType = 'application/json'
        $content = $response->getContent();

        $content = $response->toArray();

        // the template path is the relative file path from `templates/`
        return $this->render('member/member.html.twig', [
            'content' => $content,
        ]);
    }
}
