<?php

namespace App\Livewire;

use App\Models\Book;
use App\Models\Favourite;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class PreviewComponent extends Component
{
    // Public properties
    /** @var mixed */
    public $searchBooks;
    /** @var string */
    public $searchValue;
    /** @var mixed */
    public $bookDetail;
    /** @var mixed */
    public $favBooks;
    /** @var string */
    public string $filterValue = 'all';

    // Filter method to retrieve favorite books
    /**
     * Filters the favorite books of the authenticated user.
     *
     * @return void
     */
    public function filter()
    {
        $books = Favourite::with('book')->where('user_id', Auth::id())->get();
        $this->favBooks = $books;
    }

    // Render method to display the livewire component
    /**
     * Renders the Livewire component.
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {
        $books = Book::all();
        return view('livewire.preview-component', compact('books'));
    }

    // Add to favorites method
    /**
     * Adds the specified book to the favorites of the authenticated user.
     *
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function addFav($id)
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        $favBook = Favourite::firstOrCreate(
            ['book_id' => $id, 'user_id' => Auth::id()],
            ['book_id' => $id, 'user_id' => Auth::id()]
        );

        // Dispatch success or error message based on whether the book is added to favorites or not
        if ($favBook->wasRecentlyCreated) {
            $this->dispatch('successMessage', ['message' => 'Added to Favorites']);
        } else {
            $this->dispatch('errorMessage', ['message' => 'Already Exists']);
        }
    }

    // Remove from favorites method
    /**
     * Removes the specified book from the favorites of the authenticated user.
     *
     * @param int $id
     * @return void
     */
    public function removeFav($id)
    {
        $favBook = Favourite::find($id)->delete();
        $this->filter(); // Re-filter favorite books after removal
        $this->dispatch('successMessage', ['message' => 'Removed from favourites']);
    }

    // Read more method to view detailed information about a book
    /**
     * Displays detailed information about the specified book.
     *
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function readMore($id)
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        $this->filterValue = 'preview'; // Change filter value to preview
        $this->bookDetail = Book::find($id); // Fetch book details
    }

    // Search method to filter books by title or description
    /**
     * Searches for books based on the provided search value.
     *
     * @return void
     */
    public function search()
    {
        $this->searchBooks = Book::where(function ($query) {
            $query->where('title', 'like', '%' . $this->searchValue . '%')
                  ->orWhere('description', 'like', '%' . $this->searchValue . '%');
        })->get();

        $this->filterValue = 'search'; // Change filter value to search
    }
}
