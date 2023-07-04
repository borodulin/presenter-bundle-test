<?php

declare(strict_types=1);

namespace App\Controller\Internal;

use App\Entity\Invoice;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class InvoiceController extends AbstractController
{
    #[Route(path: '/internal/invoice/{invoice<\d+>}', methods: ['GET'])]
    public function index(
        Invoice $invoice,
    ): JsonResponse {
        return $this->json($invoice);
    }
}
