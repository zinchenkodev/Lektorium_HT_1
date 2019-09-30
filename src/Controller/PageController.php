<?php

namespace App\Controller;

use Faker\Factory;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Faker\Provider\ko_KR\PhoneNumber;


class PageController extends AbstractController
{
    /**
     * @Route("/info")
     */
    public function info()
    {
        $faker = Factory::create();

        for ($i = 0; $i < 10; $i++) {
            echo $faker->name, "<br>";
            echo $faker->city, "<br>";
            echo $faker->address , "<br><br>";
        }

        return $this->render('/info.php', [
            'info' => $faker,
        ]);
    }
}