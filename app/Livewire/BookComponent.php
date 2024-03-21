<?php

namespace App\Livewire;

use App\Models\Book;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class BookComponent extends Component
{
    use WithFileUploads;

    /** @var string */
    public string $title;

    /** @var string */
    public string $price;

    /** @var string */
    public $image;

    /** @var string */
    public string $description;

    /** @var string */
    public string $edit_id;

    /** @var string */
    public string $blade = 'index';

    /**
     * Change view for the component.
     *
     * @param string $value
     * @return string
     */
    public function changeView($value): string
    {
        return $this->blade = $value;
    }

    /**
     * Render the component.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function render()
    {
        $books = Book::all();
        return view('livewire.book-component', compact('books'));
    }

    /**
     * Save a new book.
     *
     * @return void
     */
    public function save(): void
    {
        $this->validate([
            'title' => 'required|string',
            'price' => 'required|string',
            'image' => 'required|image|max:1024', // Adjust validation rules as needed
            'description' => 'required|string',
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

    /**
     * Edit an existing book.
     *
     * @param int $id
     * @return void
     */
    public function edit(int $id): void
    {
        $book = Book::findOrFail($id);
        $this->edit_id = $book->id;
        $this->title = $book->title;
        $this->price = $book->price;
        $this->image = $book->image;
        $this->description = $book->description;
        $this->changeView('edit');
    }

    /**
     * Update an existing book.
     *
     * @return void
     */
    public function update(): void
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
        $this->dispatch('successMessage', ['message' => 'Updated']);
    }

    /**
     * Delete a book.
     *
     * @param int $id
     * @return void
     */
    public function delete(int $id): void
    {
        $book = Book::find($id)->delete();
        $this->dispatch('successMessage', ['message' => 'Deleted']);
    }
}
