<?php

namespace App\Livewire;
use App\Models\Book;
use Livewire\Component;

class PreviewComponent extends Component
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

    public function render()
    {
        $books = Book::all();
        return view('livewire.preview-component', compact('books'));
    }








}