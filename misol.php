<?php

class Avtomobillar {
    // Xususiyatlari
    public $name;
    public $color;
    public $year;
    public $model;

    // Konstruktor
    function __construct($name, $color, $year, $model){
        $this->name = $name;
        $this->color = $color;
        $this->year = $year;
        $this->model = $model;
    }

    // Ma'lumot chiqarish
    function get_details(){
        echo "Yangi avtomobil nomi: " . $this->name . " ";
        echo "rangi: " . $this->color . " ";
        echo "ishlab chiqilgan yili: " . $this->year . " ";
        echo "va modeli: " . $this->model;
    }
}

// Obyekt yaratish
$car1 = new Avtomobillar("Chevrolet", "oq", 2023, "Cobalt");

// Metodni chaqirish
$car1->get_details();

?>



























