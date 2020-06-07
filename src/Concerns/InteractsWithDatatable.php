<?php
namespace UiBuilder\Datatable\Concerns;

trait InteractsWithDatatable
{
    /**
     * Get the value of datatableShowable
     */ 
    public function getDatatableShowable(): array
    {
        return $this->datatableShowable ?? [];
    }

    /**
     * Set the value of datatableShowable
     *
     * @return  self
     */ 
    public function setDatatableShowable(array $datatableShowable = []): self
    {
        $this->datatableShowable = $datatableShowable;

        return $this;
    }
}