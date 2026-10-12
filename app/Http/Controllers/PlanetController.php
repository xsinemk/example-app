<?php

namespace App\Http\Controllers;

class PlanetController extends Controller
{
    private $planets = [
        [
            'name' => 'Mars',
            'description' => 'Mars is the fourth planet from the Sun and the second-smallest planet in the Solar System, being larger than only Mercury.'
        ],
        [
            'name' => 'Venus',
            'description' => 'Venus is the second planet from the Sun. It is named after the Roman goddess of love and beauty.'
        ],
        [
            'name' => 'Earth',
            'description' => 'Our home planet is the third planet from the Sun, and the only place we know of so far thats inhabited by living things.'
        ],
        [
            'name' => 'Jupiter',
            'description' => 'Jupiter is a gas giant and doesn\'t have a solid surface, but it may have a solid inner core about the size of Earth.'
        ],
    ];

    public function index()
    {
        $planets = $this->planets;

        if (request()->has('planeet')) {
            $planeet = request('planeet');

            $planets = collect($planets)->where('name', ucfirst($planeet));
        }

        return view('planets', ['planeten' => $planets]);
    }

    public function show($planet)
    {
        $planetData = collect($this->planets)
            ->firstWhere('name', ucfirst($planet));

        if (!$planetData) {
            abort(404);
        }

        return view('planet', ['planet' => $planetData]);
    }
}