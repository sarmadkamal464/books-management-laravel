
    <div class="max-w-md mx-auto">
        <form wire:submit.prevent="updateProfile" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="name">Name:</label>
                <input class="shadow appearance-none border rounded p-2 w-full text-base text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="name" type="text" wire:model="name">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="email">Email:</label>
                <input class="shadow appearance-none border rounded p-2 w-full text-base text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" type="email" wire:model="email">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="current_password">Current Password:</label>
                <input class="shadow appearance-none border rounded p-2 w-full text-base text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="current_password" type="password" wire:model="current_password">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="new_password">New Password:</label>
                <input class="shadow appearance-none border rounded p-2 w-full text-base text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="new_password" type="password" wire:model="new_password">
            </div>
            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="confirm_password">Confirm Password:</label>
                <input class="shadow appearance-none border rounded p-2 w-full text-base text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="confirm_password" type="password" wire:model="confirm_password">
            </div>
            <div class="flex items-center justify-between">
                <button type="submit" class="py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Update Profile</button>
            </div>
        </form>
    </div>

