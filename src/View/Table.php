<?php
namespace UiBuilder\Datatable\View;

use Illuminate\View\Component;

class Table extends Component
{
    public function render()
    {
        return view('datatable::table');
    }
}