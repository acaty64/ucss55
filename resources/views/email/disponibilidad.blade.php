@component('mail::message')
# Requerimiento de Disponibilidad Horaria y de Cursos

Estimad@ docente:
{{ $data['wdocente'] }}

Esperamos el ingreso de su información en el módulo de horarios hasta el día: {{ $data['flimite'] }}

Su usuario es: {{ $data['email_to'] }}

Su contraseña es: el número de su DNI.

Seleccione la facultad: {{ $data['wfacultad'] }}

y la sede: {{ $data['wsede'] }}


@component('mail::button', ['url' => 'http://www.ucssfcec.xyz'])
Acceso al módulo
@endcomponent

Gracias,<br>
Departamento Académico de la Facultad de Ciencias Económicas y Comerciales
@endcomponent
