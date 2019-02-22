<?php
declare(strict_types=1);

namespace App\Controller;


use App\Factory\Quote;
use App\Factory\Search;
use App\Service\QuoteService;
use App\Service\VisitService;
use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\View\View;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use FOS\RestBundle\Controller\Annotations as Rest;
use Symfony\Component\HttpFoundation\Response;

class SearchController extends FOSRestController
{
    private $visitService;

    private $quoteService;

    public function __construct(VisitService $visitService, QuoteService $quoteService)
    {
        $this->visitService = $visitService;
        $this->quoteService = $quoteService;
    }

    /**
     * @Rest\Post("/search")
     * @param Request $request
     * @return View
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function searchAction(Request $request): JsonResponse
    {
        $visitData = json_decode('{
           "config":4,
           "currency":null,
           "landingPage":"https://www.easyterra.nl.staging.easyterra.com/",
           "affiliate":null,
           "gclid":null,
           "referer":null,
           "ipAddress":null,
           "discounts":null
        }',
        true);

        $data = json_decode($request->getContent(), true);

        $visitId = $this->visitService->create($visitData)->getVisitId();
        $search = Search::create($data['pickup'], $data['dropoff'], $data['currency'], $visitId);

        try {
            $response = $this->quoteService->create(Quote::createFromEntity($search), $visitId);
        } catch (\Exception $exception) {
            return new JsonResponse(['message' => $exception->getMessage()], Response::HTTP_INTERNAL_SERVER_ERROR);
        }

        $r = $response->getResponse()->getBody()->getContents();
        return new JsonResponse(json_decode($r, true));
    }
}