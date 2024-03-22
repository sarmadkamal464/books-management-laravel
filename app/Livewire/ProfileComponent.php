<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Illuminate\View\View;

/**
 * Represents a component for managing user profiles.
 */
class ProfileComponent extends Component
{
    // Public properties for form fields
    public $name;
    public $email;
    public $current_password;
    public $new_password;
    public $confirm_password;

    /**
     * Initialize the component with user data.
     *
     * @return void
     */
    public function mount()
    {
        // Fetch the currently authenticated user
        $user = auth()->user();

        // Populate the input fields with user data
        $this->name = $user->name;
        $this->email = $user->email;
    }

    /**
     * Update the user profile.
     *
     * @return void
     */
    public function updateProfile()
    {
        // Validate the form data
        $this->validate([
            'name' => 'required',
            'email' => 'required',
            'current_password' => 'required',
            'new_password' => 'nullable|string|min:8|different:current_password',
            'confirm_password' => 'nullable|string|same:new_password',
        ]);

        // Update the user profile
        $user = auth()->user();
        $user->name = $this->name;
        $user->email = $this->email;

        // Update password if provided
        if ($this->new_password) {
            $user->password = bcrypt($this->new_password);
        }

        // Save changes to the user profile
         /** @var \App\Models\User $user **/
        if ($user->save()) {
            $this->dispatch('successMessage', ['message' => 'Profile updated successfully.']);
        } else {
            $this->dispatch('errorMessage', ['message' => 'Failed to update profile. Please try again later.']);
        }
    }

    /**
     * Render the Livewire component.
     *
     * @return \Illuminate\View\View
     */
    public function render(): View
    {
        return view('livewire.profile-component');
    }
}
