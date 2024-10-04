<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10/dist/sweetalert2.min.css">

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Employee') }}
        </h2>
    </x-slot>
    <div class="py-6">
    <div class="max-w-xl mx-auto sm:px-4 lg:px-5">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-lg sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-white">
                <div class="container">
                    
                <form method="POST" action="{{route('empleado.store')}}">
                    @csrf

                        <div class="space-y-4">
                            <!--identificacion-->
                            <div class="flex flex-col">
                                <label for="identificacion" class="font-semibold text-sm text-gray-700 dark:text-gray-300">
                                   Identificación
                                </label>
                                <input id="identificacion" type="text" name="identificacion" class="mt-1 p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white"
                                value="{{$empleado->identificacion }}">
                            </div>
                            <!-- Nombre del empleado -->
                            <div class="flex flex-col">
                                <label for="employee-name" class="font-semibold text-sm text-gray-700 dark:text-gray-300">
                                    Nombre empleado
                                </label>
                                <input id="nombres" type="text" name="nombres" class="mt-1 p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white"
                                value="{{$empleado->nombres }}">
                            </div>
                            
                            <!-- Apellido del empleado -->
                            <div class="flex flex-col">
                                <label for="employee-lastname" class="font-semibold text-sm text-gray-700 dark:text-gray-300">
                                    Apellido empleado
                                </label>
                                <input id="apellidos" type="text" name="apellidos" class="mt-1 p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white"
                                value="{{$empleado->apellidos }}">
                            </div>

                            <!-- Correo electrónico -->
                            <div class="flex flex-col">
                                <label for="employee-email" class="font-semibold text-sm text-gray-700 dark:text-gray-300">
                                    Correo electrónico
                                </label>
                                <input id="correo" type="email" name="correo" class="mt-1 p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white"
                                value="{{$empleado->correo }}">
                            </div>

                            <!-- Teléfono -->
                            <div class="flex flex-col">
                                <label for="employee-phone" class="font-semibold text-sm text-gray-700 dark:text-gray-300">
                                    Teléfono
                                </label>
                                <input id="telefono" type="tel" name="telefono" class="mt-1 p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white"
                                value="{{$empleado->telefono }}">
                            </div>

                            <!-- Dirección -->
                            <div class="flex flex-col">
                                <label for="employee-address" class="font-semibold text-sm text-gray-700 dark:text-gray-300">
                                    Dirección
                                </label>
                                <input id="direccion" type="text" name="direccion" class="mt-1 p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white"
                                value="{{$empleado->direccion }}">
                            </div>

                            <!-- Tipo de contrato -->
                            <div class="flex flex-col">
                                <label for="contract-type" class="font-semibold text-sm text-gray-700 dark:text-gray-300">
                                    Tipo de contrato
                                </label>
                                <select id="tipocontrato" name="tipocontrato" class="mt-1 p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white"
                                value="{{$empleado->tipocontrato }}">
                                    <option value="full_time">Tiempo completo</option>
                                    <option value="part_time">Medio tiempo</option>
                                    <option value="temporary">Temporal</option>
                                </select>
                            </div>

                            <!-- Fecha y hora -->
                            <div class="flex flex-col">
                                <label for="datesemana" class="font-semibold text-sm text-gray-700 dark:text-gray-300">
                                    Fecha y hora
                                </label>
                                <input id="datesemana" type="datetime-local" name="datesemana" class="mt-1 p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                            </div>

                            <!-- Botón de enviar -->
                            <div class="flex flex-col mt-4">
                                <button type="submit" class="p-2 bg-blue-600 text-black rounded-lg shadow-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                                    Enviar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @if (session('success'))
                    <script>
                        Swal.fire({
                            title: 'Éxito',
                            text: '{{ session('success') }}',
                            icon: 'success',
                            confirmButtonText: 'OK'
                        });
                    </script>
                @endif

</div>
</x-app-layout>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>