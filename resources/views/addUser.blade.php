<main style="height: auto;">

</main>
<div>

@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
  <!-- Live as if you were to die tomorrow. Learn as if you were to live forever. - Mahatma Gandhi -->
<div style ="display: flex; flex-direction:column; width: 500px; border:solid 1px; padding:1rem; margin:4rem; background:grey" > 
   <h1 style="margin:3rem;">Agregar Nuevos Usuarios</h1>

    <form method="POST" action="{{ route('guardar.registro') }}">
        @csrf
        <!-- Agrega los campos del formulario -->
        <label style="margin:3rem;">Nombre:  </label>
        <input style="margin:1rem;" type="text" name="nombre" placeholder="Nombre">
        <br>
        <label style="margin:3rem;">Apellido:  </label>
        <input style="margin:1rem;" type="text" name="apellido" placeholder="Apellido">
        <br>
        <label style="margin:3rem;">Correo Electrónico:  </label>
        <input style="margin:1rem;" type="email" name="correo" placeholder="Correo electrónico">
        <br>
        <label style="margin:3rem;">Contraseña:  </label>
        <input style="margin:1rem;" type="password" name="password" placeholder="Contraseña">
        <br>
        <button style="margin:3rem; background:#31D1EA; width:100px " type="submit">Guardar Usuario</button>
    </form>

</div>

</div>
