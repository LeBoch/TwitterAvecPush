<?php

namespace App\Controller;

use App\Entity\Comment;
use App\Repository\CommentRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class CommentController extends AbstractController
{
    #[Route('/comment{id}', name: 'app_comment')]

    public function __invoke(Comment $comment): Response
    {
        return $this->render('comment/index.html.twig', [
            'comment' => $comment,
        ]);
    }
}
