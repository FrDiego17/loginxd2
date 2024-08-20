<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pago Exitoso xd</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
<script>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: 'Pago realizado con éxito',
                html: `
                    <p>Tu carrito ha sido vacío.</p>
                    <p>Tu Factura sera enviada al correo en unos momentos.</p>
                `,
                showConfirmButton: false,
                timer: 1500
            }).then(() => {
                window.location.href = '{{ route("menu") }}'; 
            });
        });
    </script>
</body>

</html>
