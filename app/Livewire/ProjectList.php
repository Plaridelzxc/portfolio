<?php

namespace App\Livewire;

use Livewire\Component;

class ProjectList extends Component
{
    public $projects = [];

    public function mount()
    {
        // Example projects (you can fetch from DB instead)
        $this->projects = [
            [
                'title' => 'RentNav',
                'description' => 'A mobile solution for rental navigation, built with react native and firebase.',
                'image' => 'images/projects/rentnv.jpg',
                'link' => 'https://github.com/Plaridelzxc/RentNav',
            ],
            [
                'title' => 'E-Commerce Platform',
                'description' => 'A Laravel Livewire-based store with advanced cart, stock, and admin features.',
                'image' => 'images/projects/store.jpg',
                'link' => 'https://github.com/Plaridelzxc/e-store',
            ],
            [
                'title' => 'Pygame Game',
                'description' => 'space rocket game built with pygame, featuring a simple gameplay.',
                'image' => 'images/projects/space.jpg',
                'link' => 'https://github.com/Plaridelzxc/pygame-space',
            ],
            [
                'title' => 'HRIS',
                'description' => 'A Human Resource Information System built with Laravel Livewire, featuring employee management',
                'image' => 'images/projects/hris.jpg',
                'link' => 'https://github.com/SophiaAguilar15/dtone-proto',
            ],
        ];
    }

    public function render()
    {
        return view('livewire.project-list');
    }
}
