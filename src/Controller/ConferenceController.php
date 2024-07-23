<?php

namespace App\Controller;

use App\Entity\Conference;
use App\Repository\CommentRepository;
use App\Repository\ConferenceRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ConferenceController extends AbstractController
{

    public function __construct(private ConferenceRepository $conferenceRepository)
    {

    }
    #[Route('/', name: 'app_conference')]
    public function __invoke(): Response
    {
        $conference = $this->conferenceRepository->findAll();
        return $this->render('conference/index.html.twig', [
            'conferences' => $conference,
        ]);
    }


}
