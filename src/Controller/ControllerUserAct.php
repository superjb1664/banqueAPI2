<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ControllerUserAct extends AbstractController
{
    /**
     * @Route(
     *     name="getUserAct",
     *     path="/getUserAct",
     *     methods={"GET"})
     * @return Response
     */
    public function getUserAct() : Response
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        $user = $this->getUser();
        $user->eraseCredentials();
        return $this->json($user, 200,[],["groups" => "user:lire"]);

    }
}