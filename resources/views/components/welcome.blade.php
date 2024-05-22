@section('title', 'Dashboard')
<div class="bg-purple-900 min-h-screen flex items-center justify-center">
    <div class="w-full max-w-lg bg-purple-600 text-white shadow-md rounded px-10 pt-8 pb-8">
        <h1 class="text-3xl mb-4">Bienveido a EduNexus</h1>
        <h2 class="text-2xl mb-4">¡Hola, {{ Auth::user()->name }}!</h2> 
        @if (auth()->user()->isAdmin())
            <p class="text-white text-base">Eres un administrador, puedes crear, editar y eliminar cursos.</p>
        @elseif(auth()->user()->isTeacher())
            <p class="text-white text-base">Eres un profesor, puedes crear, editar y eliminar lecciones.</p>
        @elseif(auth()->user()->isStudent())
            <p class="text-white text-base">Eres un estudiante, puedes inscribirte en los cursos que desees.</p>
        @endif
        <br>          
        <h3 class="text-white text-base">EduNexus es una plataforma de educación en línea que te permite aprender de manera gratuita y a tu propio ritmo</h3>
        <br>
        <p class="text-white text-base">Para comenzar, selecciona un curso de la lista de la izquierda.</p>
    </div>
</div>
