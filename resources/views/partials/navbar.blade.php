<div class="sticky">
		<ul class="horizontal">
		<ul>
			<li><a href="/">Inicio</a></li>
			<li><a href="/profile">Perfil</a></li>
			<li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Cerrar Sesión</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form></li>
		</ul>
		</ul>
</div>