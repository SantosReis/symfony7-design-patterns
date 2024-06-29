<?php

namespace App\Controller;

use App\Entity\Manual;
use App\Service\VehicleBuilder\Builder\JaguarBuilder;
use App\Service\VehicleBuilder\Builder\LandRoverBuilder;
use App\Service\VehicleBuilder\Contract\VehicleBuilderInterface;
use App\Service\VehicleBuilder\Director\VehicleDirector;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\DependencyInjection\Attribute\Autowire;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class VehicleController extends AbstractController
{
    public function __construct(
        private readonly VehicleBuilderInterface $vehicleBuilder
    ) {
    }

    #[Route(path: '/vehicle', name: 'vehicle')]
    public function index(): Response
    {
        $vehicleDirector = new VehicleDirector();
        $landRover = $vehicleDirector->makeLandRover($this->vehicleBuilder);
        dd($landRover);
    }

}