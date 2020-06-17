<?php


use Symfony\Component\HttpFoundation\Response;

class Customer
{
    private $customers = [
        [
            'id' => 1,
            'name' => 'Olususi Oluyemi',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation',
        ],
        [
            'id' => 2,
            'name' => 'Camila Terry',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation',
        ],
        [
            'id' => 3,
            'name' => 'Joel Williamson',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation',
        ],
        [
            'id' => 4,
            'name' => 'Deann Payne',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation',
        ],
        [
            'id' => 5,
            'name' => 'Donald Perkins',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation',
        ]
    ];


//    public function getProduct() {
//
//        $response = new Response();
//
//        $response->headers->set('Content-Type', 'application/json');
//        $response->headers->set('Access-Control-Allow-Origin', '*');
//
//        $response->setContent(json_encode($this->customers));
//
//        return $response;
//    }
//
//    public function customerCount() {
//        return count($this->customers);
//    }

}