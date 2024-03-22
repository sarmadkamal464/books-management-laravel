<?php

namespace App\Livewire;

use App\Models\Book;
use App\Models\Favourite;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class PreviewComponent extends Component
{
    public $favBooks;
    public string $filterValue = 'all';
    public function filter()
    {
        $books = Favourite::with('book')->where('user_id', Auth::id())->get();
        $this->favBooks = $books;
    }
    public function render()
    {
        $books = Book::all();
        return view('livewire.preview-component', compact('books'));
    }
    public function addFav($id)
    {
        if(!Auth::check()){
            return redirect()->route('login');
        }
        $favBook = Favourite::firstOrCreate(
            ['book_id' => $id, 'user_id' => Auth::id()],
            ['book_id' => $id, 'user_id' => Auth::id()]
        );

        if ($favBook->wasRecentlyCreated) {
            $this->dispatch('successMessage', ['message' => 'Added to Favorites']);
        } else {
            $this->dispatch('errorMessage', ['message' => 'Already Exist']);
        }
    }
    public function removeFav($id)
    {
        $favBook = Favourite::find($id)->delete();
        $this->filter();
        $this->dispatch('successMessage', ['message' => 'Remove']);
    }
}
