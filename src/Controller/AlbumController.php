<?php

declare(strict_types=1);

namespace App\Controller;

use App\Presenter\DataProvider\AlbumDataProvider;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class AlbumController extends AbstractController
{
    #[Route(path: '/album', methods: ['GET'])]
    public function index(
        AlbumDataProvider $albumDataProvider,
        string $term = null
    ): JsonResponse {
        return $this->json($albumDataProvider->withTerm($term));
    }
}
