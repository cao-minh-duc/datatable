<?php
namespace UiBuilder\Datatable\View;

use Livewire\Component;
use Livewire\WithPagination;

class Datatable extends Component
{
    use WithPagination;

    protected $model;

    public $modelClassname;

    protected $listeners = [
        'modelsCollectionRefresh' => 'resetPage'
    ];

    public function paginationView()
    {
        return 'livewire::pagination-links';
    }
    
    public function mount($model)
    {
        $this->model = new $model;
        $this->modelClassname = get_class($this->model);
    }

    public function getColsProperty()
    {
        $showable = $this->getModel()->getDatatableShowable();

        $cols = array_map(function($col){
            return [
                'code' => $col,
                'name' => $this->model->getAttributeNames()[$col]
            ];
        },$showable);

        return $cols;
    }

    public function getRowsProperty()
    {
        return $this->getModel()->orderBy('created_at','desc')->paginate(10);
    }

    public function render()
    {
        return view('datatable::basic');
    }

    public function getModel()
    {
        if( is_null($this->model) )
        {
            $this->model = new $this->modelClassname;
        }

        return $this->model;
    }
}