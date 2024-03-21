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
    window.addEventListener('confirmation', event => {
        Swal.fire({
            title: "Do you want to save the changes?",
            showDenyButton: true,
            showCancelButton: true,
            confirmButtonText: "Save",
            denyButtonText: `Don't save`
        }).then((result) => {
            console.log(event.detail[0].id);
            /* Read more about isConfirmed, isDenied below */
            if (result.isConfirmed) {
                Livewire.emit('confirmDelete');
                // confirmDelete(event.detail[0].id);
                Swal.fire("Saved!", "", "success");
            } else if (result.isDenied) {
                Swal.fire("Changes are not saved", "", "info");
            }
        });
    });
</script>
