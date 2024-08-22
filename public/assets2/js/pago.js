document.getElementById('confirmationpayment').addEventListener('submit', function(event) {
    event.preventDefault(); 

    Swal.fire({
        position: 'top-end',
        icon: 'success',
        title: 'Pago realizado con éxito',
        showConfirmButton: false,
        timer: 1500
    }).then(() => {
        window.location.href = '/menu';
    });
});
