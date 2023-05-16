<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public static $corsi = [
        [
            "name" => "weightlifting",
            "category" => "strenght",
            "trainer" => "Sam Cook",
            "time" => [
                "lunedì" => "18.00 - 22.00",
                "mercoledì" => "10.00 - 14.00",
                "venerdì" => "14.00 - 18.00"
            ],
            "price" => 400
        ],

        [
            "name" => "running",
            "category" => "cardio",
            "trainer" => "Marylin Smith",
            "time" => [
                "martedì" => "12.00 - 14.00",
                "giovedì" => "15.00 - 17.00",
                "venerdì" => "14.00 - 18.00"
            ],
            "price" => 300
        ],

        [
            "name" => "box",
            "category" => "training",
            "trainer" => "Adam Krakovic",
            "time" => [
                "lunedì" => "15.00 - 18.00",
                "martedì" => "12.00 - 15.00",
                "giovedì" => "10.00 - 13.00",
                "venerdì" => "18.00 - 21.00"
            ],
            "price" => 800
        ],
    ];

    public function homepage() {
        return view('homepage');
    }

    public function corsi() {
        return view('corsi');
    }

    public function detail($name) {
        foreach (self::$corsi as $corso) {
            if ($corso["name"] == $name) {
                return view('detail', ['corso' => $corso]);
            }
        }

        abort(404);
    }

    public function contact() {
        return view('contact');
    }
}
