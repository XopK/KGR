<?php

namespace App\View\Components;

use App\Models\CategoryCourse;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Layout extends Component
{
    public $categories;

    public function __construct()
    {
        $this->categories = CategoryCourse::orderBy('created_at', 'desc')->limit(5)->get();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.layout', ['categories_courses_header' => $this->categories]);
    }
}
