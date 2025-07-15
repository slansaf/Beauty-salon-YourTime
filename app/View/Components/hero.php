<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class hero extends Component
{	
	public $title;
	public $urlimg;
    /**
     * Create a new component instance.
     */
    public function __construct($title, $urlimg)
    {
      $this-> title = $title;
		$this-> urlimg = $urlimg;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.hero');
    }
}
