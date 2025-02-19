<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/api')]
class ApiController
{
    #[Route('/hello')]
    public function hello(): JsonResponse
    {
        return new JsonResponse([ "msg" => "Hello world!"]);
    }
}
