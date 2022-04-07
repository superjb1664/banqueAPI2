<?php
namespace App\Controller;

use App\Repository\CompteRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ApiController extends AbstractController
{
#[Route('/api/compte', name: 'app_api_post', methods: ["GET"])]
public function index(CompteRepository $compteRepository): Response
{
return $this->json($compteRepository->findAll(), 200,[],["groups" => "compte:lire"]);
}
}
