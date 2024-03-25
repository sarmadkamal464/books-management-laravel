<?php

namespace App\Livewire;

use App\Models\Book;
use Exception;
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
        try {
            $books = Book::all();
            return view('livewire.book-component', compact('books'));
        } catch (Exception $e) {
            $this->dispatch('errorMessage', ['message' => "Something went wrong while fetching books."]);
        }
    }

    /**
     * Save a new book.
     *
     * @return void
     */
    public function save(): void
    {
        try {
            $this->validate([
                'title' => 'required|string',
                'price' => 'required|string',
                'image' => 'required|image|max:1024', // Adjust validation rules as needed
                'description' => 'required|string',
            ]);
            $imagePath = Storage::put('public/images', $this->image);
            $book = new Book();
            $book->title = $this->title;
            $book->price = $this->price;
            $book->image = asset(Storage::url($imagePath)); // Get the URL for the stored image
            $book->description = $this->description;
            $book->save();

            // Redirect or change view after saving
            $this->changeView('index');
            $this->dispatch('successMessage', ['message' => 'Book Added Successfully']);
        } catch (Exception $e) {
            $this->dispatch('errorMessage', ['message' => "Something went wrong while saving the book."]);
        }
    }

    /**
     * Edit an existing book.
     *
     * @param int $id
     * @return void
     */
    public function edit(int $id): void
    {
        try {
            $book = Book::findOrFail($id);
            $this->edit_id = $book->id;
            $this->title = $book->title;
            $this->price = $book->price;
            $this->image = $book->image;
            $this->description = $book->description;
            $this->changeView('edit');
        } catch (Exception $e) {
            $this->dispatch('errorMessage', ['message' => "Something went wrong while fetching the book to edit."]);
        }
    }

    /**
     * Update an existing book.
     *
     * @return void
     */
    public function update(): void
    {
        try {
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
            $this->dispatch('successMessage', ['message' => 'Book Updated Successfully']);
        } catch (Exception $e) {
            $this->dispatch('errorMessage', ['message' => "Something went wrong while updating the book."]);
        }
    }

    /**
     * Delete a book.
     *
     * @param int $id
     * @return void
     */
    public function delete(int $id): void
    {
        try {
            Book::find($id)->delete();
            $this->dispatch('successMessage', ['message' => 'Book Deleted Successfully']);
        } catch (Exception $e) {
            $this->dispatch('errorMessage', ['message' => "Something went wrong while deleting the book."]);
        }
    }
}
