<?php

declare(strict_types=1);

namespace App\Controller;

use App\Presenter\DataProvider\TrackDataProvider;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class TrackController extends AbstractController
{
    #[Route(path: '/track', methods: ['GET'])]
    public function index(
        TrackDataProvider $trackDataProvider
    ): JsonResponse {
        return $this->json($trackDataProvider);
    }
}
