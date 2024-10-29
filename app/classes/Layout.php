<?php

namespace Pwerder\PdoPractice\classes;

class Layout
{
    private string $view;
    
    public function add(string $view): void
    {
        $this->view = $view;
    }

    public function load()
    {
        return "../app/views/{$this->view}.php";
    }

    public function master(string $master): string
    {
        return "../app/views/{$master}.php";
    }
}
