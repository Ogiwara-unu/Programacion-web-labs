<?php
$estudiantes = [
    ['nombre' => 'Randall Alvarez', 'edad' => 21, 'carrera' => 'Ingeniería'],
    ['nombre' => 'Marco Roman', 'edad' => 21, 'carrera' => 'Ingeniería'],
    ['nombre' => 'María López', 'edad' => 19, 'carrera' => 'Ingeniería'],
];
?>

<x-layouts::app :title="__('Correo 1 - Versión 1')">
    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">
        <div class="relative h-full flex-1 overflow-hidden p-6 bg-white dark:bg-neutral-900 border border-neutral-200 dark:border-neutral-700 rounded-xl">
            <div class="mb-4">
                <h2 class="text-2xl font-bold text-neutral-900 dark:text-neutral-100 italic">Correo 1</h2>
                <p class="text-sm text-neutral-500 dark:text-neutral-400">
                    Información de Estudiantes de Programación Web 2026 — <span class="font-bold text-neutral-900 dark:text-neutral-100">versión 1</span>
                </p>
            </div>

            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse table-fixed">
                    <thead class="bg-neutral-50 dark:bg-neutral-800">
                        <tr>
                            <th class="w-1/2 px-4 py-3 text-xs font-semibold tracking-wider text-neutral-500 dark:text-neutral-400 uppercase">Nombre</th>
                            <th class="w-20 px-4 py-3 text-xs font-semibold tracking-wider text-neutral-500 dark:text-neutral-400 uppercase text-center">Edad</th>
                            <th class="px-4 py-3 text-xs font-semibold tracking-wider text-neutral-500 dark:text-neutral-400 uppercase">Carrera</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-neutral-200 dark:divide-neutral-700">
                        @foreach ($estudiantes as $e)
                        <tr class="hover:bg-neutral-50 dark:hover:bg-neutral-800 transition-colors">
                            <td class="px-4 py-4 text-neutral-900 dark:text-neutral-100 font-medium truncate">{{ $e['nombre'] }}</td>
                            <td class="px-4 py-4 text-neutral-600 dark:text-neutral-400 text-center">{{ $e['edad'] }}</td>
                            <td class="px-4 py-4 text-neutral-600 dark:text-neutral-400">{{ $e['carrera'] }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="mt-8 flex justify-center">
                <x-flux::button :href="route('dashboard')" variant="subtle" icon="arrow-left">
                    Volver al Dashboard
                </x-flux::button>
            </div>
        </div>
    </div>
</x-layouts::app>