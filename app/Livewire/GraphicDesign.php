<?php

namespace App\Livewire;

use Livewire\Component;

class GraphicDesign extends Component
{
    public $projects = [];

    public function mount()
    {
        $this->projects = [
            [
                'title' => 'SolarStamp.io',
                'description' => 'A US based solar company',
                'images' => [
                    '/images/sol.jpg',
                    '/images/larson.jpg',
                    '/images/stamp.jpg',
                    '/images/sular.jpg',
                    '/images/io.jpg',
                ],
            ],
            [
                'title' => 'Handcrafted',
                'description' => 'Travel Agency',
                'images' => [
                    '/images/handcraft.jpg',
                    '/images/handcraft1.jpg',
                ],
            ],
            [
                'title' => 'Cameroon Clark Fitness',
                'description' => 'Health & Fitness Coach',
                'images' => [
                    '/images/cam.jpg',
                    '/images/roon.jpg',
                    '/images/fit.jpg',
                    '/images/ness.jpg',
                ],
            ],
            [
                'title' => 'Local Projects',
                'description' => 'Local and personal design projects',
                'images' => [
                    '/images/image.png',
                    '/images/locals.jpg',
                    '/images/fj.png',
                ],
            ],
        ];
    }

    public function render()
    {
        return view('livewire.graphic-design');
    }
}
