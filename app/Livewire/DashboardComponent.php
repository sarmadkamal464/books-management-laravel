<?php

namespace App\Livewire;
use App\Models;
use App\Models\Book;
use App\Models\User;
use Livewire\Component;

class DashboardComponent extends Component
{
    public function render()
    {
        $books = Book::all()->count();
        $users = User::all()->count();
        return view('livewire.dashboard-component', compact('books', 'users'));
    }
}
