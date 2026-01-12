<?php

namespace App\Livewire;

use Livewire\Component;

class WorkExperience extends Component
{
    public $experiences = [];
    public $currentImageIndex = [];

    public function mount()
    {
        $this->experiences = [
            [
                'id' => 1,
                'title' => 'Customer Service Representative',
                'short' => 'Handled customer support for TracFone Wireless.',
                'long' => 'Provided excellent technical and billing support to clients via phone and chat. Developed strong communication and problem-solving skills.',
                'images' => [
                    asset('images/trac.png'),
                    asset('images/bpo.jpeg'),
                ],
            ],
            [
                'id' => 2,
                'title' => 'Real Estate Listing Agent',
                'short' => 'Helped owners list their properties for sale.',
                'long' => 'Contacted FSBO property owners on Zillow to offer listing support, set appointments, and assist with marketing their properties.',
                'images' => [
                    asset('images/zil.jpg'),
                    asset('images/jodi.jpg'),
                    asset('images/jodi1.jpg'),
                ],
            ],
            [
                'id' => 3,
                'title' => 'Social Media Manager',
                'short' => 'Managed content for SolarStamp.io.',
                'long' => 'Created and scheduled content, monitored analytics, boosted engagement and maintained a consistent brand image across platforms.',
                'images' => [
                    asset('images/stamp.jpg'),
                    asset('images/solar.jpg'),
                ],
            ],
        ];

        // Initialize all image indexes to 0
        $this->currentImageIndex = array_fill(0, count($this->experiences), 0);
    }

    public function nextImage($experienceIndex)
    {
        $imagesCount = count($this->experiences[$experienceIndex]['images']);
        $this->currentImageIndex[$experienceIndex] =
            ($this->currentImageIndex[$experienceIndex] + 1) % $imagesCount;
    }

    public function render()
    {
        return view('livewire.work-experience');
    }
}
