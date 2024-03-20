<?php

namespace App\Livewire;

use Livewire\Component;

class BookComponent extends Component
{
     /**
     * Create a new component instance.
     *
     * @type string
     */
    public string $title;

    /**
     * Create a new component instance.
     *
     * @type string
     */
    public string $price = '';

    /**
     * Create a new component instance.
     *
     * @type string
     */
    public string $image = '';

    /**
     * Create a new component instance.
     *
     * @type string
     */
    public string $description = '';
     /**
     * Create a new component instance.
     *
     * @type string
     */
    public string $blade = 'index';

     /**
     * Create a new component instance.
     *
     * @param $value
     */
    public function changeView($value): string
    {
          return $this->blade = $value;
    }
    public function render()
    {
        return view('livewire.book-component');
    }

    public function save(){
       
    }
}
