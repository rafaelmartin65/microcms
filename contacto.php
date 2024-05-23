<?php require ('init.php'); ?> <!-- Incluye el archivo de inicialización -->
<?php require ('templates/header.php'); ?> <!-- Incluye el encabezado de la página -->

<div class="my-5">
<h1>Formulario de contacto</h1>
    <form id="contactForm" action="" method="POST">
        <div class="form-floating mb-3">
            <input class="form-control" id="name" name="name" type="text" placeholder="Escribe tu nombre..." required />
            <label for="name">Nombre</label>
            <div class="invalid-feedback">Nombre es requerido.</div>
        </div>
        <div class="form-floating mb-3">
            <input class="form-control" id="email" name="email" type="email" placeholder="Escribe tu email..."
                required />
            <label for="email">Email</label>
            <div class="invalid-feedback">Email es requerido.</div>
            <div class="invalid-feedback">Email no es válido.</div>
        </div>
        <div class="form-floating mb-3">
            <input class="form-control" id="phone" name="phone" type="tel"
                placeholder="Escribe tu teléfono de contacto..." required />
            <label for="phone">Teléfono contacto</label>
            <div class="invalid-feedback">Teléfono es requerido.</div>
        </div>
        <div class="form-floating mb-3">
            <textarea class="form-control" id="message" name="message" placeholder="Escribe tu mensaje aquí..."
                style="height: 12rem" required></textarea>
            <label for="message">Mensaje</label>
            <div class="invalid-feedback">Mensaje es requerido.</div>
        </div>
        <br />
        <div class="d-none" id="submitSuccessMessage">
            <div class="text-center mb-3">
                <div class="fw-bolder">Formulario enviado!</div>
            </div>
        </div>
        <div class="d-none" id="submitErrorMessage">
            <div class="text-center text-danger mb-3">Error enviando mensaje!</div>
        </div>
        <button class="btn btn-primary btn-sm fs-6 text-uppercase" id="submitButton" type="submit">Enviar</button>
    </form>
</div>
<?php require ('templates/footer.php'); ?> <!-- Incluye el pie de página -->
