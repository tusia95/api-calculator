<?php

namespace App\Infrastructure\Controller\Rest;

use App\Entity\Calculator;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Controller\AbstractFOSRestController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class CalculationController extends AbstractFOSRestController
{

    /**
     * @Rest\Post("/calculation")
     * @param Request $request
     * @return View
     */
    public function postCalculation(Request $request): View
    {
        $calculator = new Calculator();
        $calculator->setAction($request->get('action'));
        $calculator->setFirstParam($request->get(key('firstParam')));
        $calculator->setSecondParam($request->get(key('secondParam')));

        return View::create( $calculator->runCalculation(), Response::HTTP_OK);
    }
}