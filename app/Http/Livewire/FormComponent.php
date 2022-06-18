<?php

namespace App\Http\Livewire;

use Livewire\Component;

class FormComponent extends Component
{
    public $number = 1, $title, $category, $price, $content;
    public function render()
    {
        return view('livewire.form-component')->layout('layouts.app');
    }
    public function next()
    {
        $this->number++;
    }
    public function prev()
    {
        $this->number--;
    }
    public function store()
    {
        dd($this->title, $this->price, $this->content, $this->category);
    }
}
