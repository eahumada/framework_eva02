<?php
print "<!-- Top -->";
include 'plantilla.top.php';
?>
<body>
  <h1>Login</h1>
  <form class="form-signin" method="GET" action="{{ route('record') }}">
        <!-- logo -->
        <div class="container">
            <div class="row justify-content-center">
                <div class="card text-white bg-primary mb-4 text-center" style="max-width: 15rem;">
                    <div class="card-body">
                        <h2 class="card-title">BC</h2>
                    </div>
                </div>
            </div>
        </div>

        <h1 class="h4 mb-3 font-weight-normal">BODEGAS CORONA</h1>
        <label for="inputEmail" class="sr-only">Email</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Email" required autofocus>
        <label for="inputPassword" class="sr-only">contraseña</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Contraseña" required>
        <div class="checkbox mb-3">
            <label>
                <input type="checkbox" value="remember-me"> Recuerdame
            </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Ingresar</button>
        <p class="mt-5 mb-3 text-muted">&copy; Eduardo Ahumada - CIISA</p>
    </form>
</body>
<?php
print "<!-- Bottom -->";
include 'plantilla.bottom.php';
?>
