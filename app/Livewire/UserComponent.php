<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\View\View;
use Livewire\Component;

class UserComponent extends Component
{
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

    /**
     * Create a new component instance.
     *
     * @return View
     */
    public function render(): view
    {
        $users = User::all();
        return view('livewire.user-component', compact('users'));
    }
}
