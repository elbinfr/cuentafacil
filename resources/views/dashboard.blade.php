<p>
    Bienvenido {{ auth()->user()->employee->fullName() }}
</p>
<div>
    <form method="POST" action="{{ route('logout') }}">
        {{ csrf_field() }}
        <button type="submit" class="btn btn-danger">Salir</button>
    </form>
</div>