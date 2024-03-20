<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;
use Livewire\Component;

class UserComponent extends Component
{
    /**
     * Create a new component instance.
     *
     * @type string
     */
    public string $name = '';

    /**
     * Create a new component instance.
     *
     * @type string
     */
    public string $email = '';

    /**
     * Create a new component instance.
     *
     * @type string
     */
    public string $password = '';

    /**
     * Create a new component instance.
     *
     * @type string
     */
    public string $role = '';

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

    public function save()
    {
        $user =new User();
        $user->name = $this->name;
        $user->email = $this->email;
        $user->role = $this->role;
        $user->password = Hash::make($this->password);
        $user->save();
        $this->changeView('index');
    }
}
