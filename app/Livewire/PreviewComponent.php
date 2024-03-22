<?php

namespace App\Livewire;

use App\Models\Book;
use App\Models\Favourite;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

use function Laravel\Prompts\alert;

class PreviewComponent extends Component
{
    public $searchBooks;
    public $searchValue;
    public $bookDetail;
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
    public function readMore($id){
        if(!Auth::check()){
            return redirect()->route('login');
        }
        $this->filterValue = 'preview';
        $this->bookDetail = Book::find($id);
    }
    public function search(){
        $this->searchBooks = Book::where(function ($query) {
            $query->where('title', 'like', '%' . $this->searchValue . '%')
                  ->orWhere('description', 'like', '%' . $this->searchValue . '%');
        })->get();
        $this->filterValue = 'search';
    }
}
