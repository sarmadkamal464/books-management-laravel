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
