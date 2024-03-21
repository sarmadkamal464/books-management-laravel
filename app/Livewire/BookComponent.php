<?php

namespace App\Livewire;

use App\Models\Book;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class BookComponent extends Component
{
    use WithFileUploads;
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
    public string $price;

    /**
     * Create a new component instance.
     *
     * @type string
     */
    public $image;

    /**
     * Create a new component instance.
     *
     * @type string
     */
    public string $description;

    /**
     * Create a new component instance.
     *
     * @type string
     */
    public string $edit_id;

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
        $books = Book::all();
        return view('livewire.book-component', compact('books'));
    }

    public function save()
    {
        $this->validate([
            'title' => 'required',
            'price' => 'required',
            'image' => 'required|image|max:1024', // Adjust validation rules as needed
            'description' => 'required',
        ]);

        // Store the image in the storage disk
        $imagePath = Storage::put('public/images', $this->image);

        // Create a new Book instance and assign attributes
        $book = new Book();
        $book->title = $this->title;
        $book->price = $this->price;
        $book->image = asset(Storage::url($imagePath)); // Get the URL for the stored image
        $book->description = $this->description;

        // Save the book to the database
        $book->save();

        // Redirect or change view after saving
        $this->changeView('index');
        $this->dispatch('successMessage', ['message' => 'Book Added Successfully']);
    }

    public function edit($id)
    {
        $book = Book::findOrFail($id);
        $this->edit_id = $book->id;
        $this->title = $book->title;
        $this->price = $book->price;
        $this->image = $book->image;
        $this->description = $book->description;
        $this->changeView('edit');
    }
    public function update()
    {
        $book = Book::findOrFail($this->edit_id);
        $book->title = $this->title;
        $book->price = $this->price;

        if ($book->image != $this->image) {
            $imagePath = Storage::put('public/images', $this->image);
            $book->image = asset(Storage::url($imagePath));
        }
        $book->description = $this->description;
        $book->save();
        $this->changeView('index');
    }
    public function delete($id)
    {
        $book = Book::find($id)->delete();
        $this->dispatch('successMessage', ['message', 'Deleted']);
    }
}
