<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\Prices;

class PricesBlock extends Component
{
    /**
     * Create a new component instance.
     */
    public $prices;

    public function __construct()
    {
        $this->prices = Prices::all();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.prices-block');
    }
}
