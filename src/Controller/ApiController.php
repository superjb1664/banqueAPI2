<?php
namespace App\Controller;

use App\Repository\CompteRepository;
use App\Repository\MouvementRepository;
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

    #[Route('/api/virement/{ref}', name: 'app_api_virement', methods: ["GET"])]
    public function checkMouvement(MouvementRepository $mouvementRepository, string $ref): Response
    {
        $mouvement = $mouvementRepository->findOneBy(array('libelle' => $ref));
        return $this->json($mouvement, 200,[],["groups" => "compte:lire"]);
    }
}
