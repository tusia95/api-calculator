<?php

namespace App\Infrastructure\Controller\Rest;

use FOS\RestBundle\Controller\Annotations as Rest;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class CalculationController extends FOSRestController
{

    /**

     * @Rest\Post("/calculation")
     * @param Request $request
     * @return View
     */
    public function postCalculation(Request $request): View
    {
        $calculation = new Calculation();
        $calculation->setAction($request->get('action'));
        $calculation->setParameters($request->get('parameters'));
        $this->calculation->executeCalculation($calculation);

        return View::create($calculation, Response::HTTP_OK);
    }
}