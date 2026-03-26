<x-layouts::app.sidebar :title="$title ?? null">
    <flux:main id="dashboard-main">
        {{ $slot }}
    </flux:main>
</x-layouts::app.sidebar>
