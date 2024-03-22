<footer>
    <div class="container mx-auto py-10">
        <ul class="flex justify-center flex-wrap text-sm text-slate-600">
            <li class="mx-2"><a href="" class="inline-block hover:text-slate-900 hover:underline py-2 px-3">Home</a></li>
            <li class="mx-2"><a href="" class="inline-block hover:text-slate-900 hover:underline py-2 px-3">About</a></li>
            <li class="mx-2"><a href="" class="inline-block hover:text-slate-900 hover:underline py-2 px-3">Contact</a></li>
        </ul>
        <hr class="my-4">
        <p class="text-center text-sm text-slate-700">&copy; 2022 Footer. All Rights Reserved</p>
    </div>
</footer>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    function toggleSidebar() {
        document.querySelector('.w-64').classList.toggle('hidden');
    }
    window.addEventListener('successMessage', event => {
        console.log(event);
        Swal.fire({
            position: "top-end",
            icon: "success",
            title: event.detail[0].message,
            showConfirmButton: false,
            timer: 1500
        });
    });
    window.addEventListener('errorMessage', event => {
        Swal.fire({
            position: "top-end",
            icon: "error",
            title: event.detail[0].message,
            showConfirmButton: false,
            timer: 1500
        });
    });
</script>
