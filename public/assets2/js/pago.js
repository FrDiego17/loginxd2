document.getElementById('confirmationpayment').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevenir el envío del formulario para mostrar la notificación

    Swal.fire({
        position: 'top-end',
        icon: 'success',
        title: 'Pago realizado con éxito',
        showConfirmButton: false,
        timer: 1500
    }).then(() => {
        // Redirige al usuario al menú después de que la notificación desaparezca
        window.location.href = '/menu';
    });
});
