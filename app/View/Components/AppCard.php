<?php

namespace App\View\Components;

use Illuminate\View\Component;

class AppCard extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $name;
    public $category;
    public $price;
    public $img;
    public $description;

    public function __construct($name,$category,$price,$img,$description)
    {
        $this->name = $name;
        $this->category = $category;
        $this->price = $price;
        $this->img = $img;
        $this->description = $description;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.app-card');
    }
}
