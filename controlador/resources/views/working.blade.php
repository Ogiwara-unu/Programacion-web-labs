<x-layouts::app :title="__('Working on ' . $page)">
    <div class="min-h-screen flex items-center justify-center p-6">
 
        <style>
            @keyframes float {
                0%, 100% { transform: translateY(0px); }
                50% { transform: translateY(-12px); }
            }
            @keyframes pulse-ring {
                0% { transform: scale(0.8); opacity: 1; }
                100% { transform: scale(2.2); opacity: 0; }
            }
            @keyframes spin-slow {
                from { transform: rotate(0deg); }
                to { transform: rotate(360deg); }
            }
            @keyframes spin-reverse {
                from { transform: rotate(360deg); }
                to { transform: rotate(0deg); }
            }
            @keyframes slide-up {
                from { opacity: 0; transform: translateY(24px); }
                to { opacity: 1; transform: translateY(0); }
            }
            @keyframes dot-bounce {
                0%, 80%, 100% { transform: translateY(0); opacity: 0.4; }
                40% { transform: translateY(-8px); opacity: 1; }
            }
 
            .float-anim { animation: float 3.5s ease-in-out infinite; }
            .spin-slow   { animation: spin-slow 10s linear infinite; }
            .spin-reverse{ animation: spin-reverse 7s linear infinite; }
            .slide-up-1  { animation: slide-up 0.6s ease forwards; }
            .slide-up-2  { animation: slide-up 0.6s ease 0.15s forwards; opacity: 0; }
            .slide-up-3  { animation: slide-up 0.6s ease 0.3s forwards;  opacity: 0; }
            .slide-up-4  { animation: slide-up 0.6s ease 0.45s forwards; opacity: 0; }
 
            .dot-1 { animation: dot-bounce 1.4s ease-in-out infinite; }
            .dot-2 { animation: dot-bounce 1.4s ease-in-out 0.2s infinite; }
            .dot-3 { animation: dot-bounce 1.4s ease-in-out 0.4s infinite; }
 
            .pulse-ring-anim { position: relative; }
            .pulse-ring-anim::before,
            .pulse-ring-anim::after {
                content: '';
                position: absolute;
                inset: -4px;
                border-radius: 50%;
                border: 2px solid #a3a3a3;
            }
            .pulse-ring-anim::before { animation: pulse-ring 2s ease-out infinite; }
            .pulse-ring-anim::after  { animation: pulse-ring 2s ease-out 1s infinite; }
        </style>
 
        <div class="relative z-10 flex flex-col items-center text-center max-w-lg w-full">
 
            {{-- Icon area --}}
            <div class="relative flex items-center justify-center mb-10 slide-up-1">
                <div class="absolute w-36 h-36 rounded-full border border-zinc-700 spin-slow opacity-60"></div>
                <div class="absolute w-24 h-24 rounded-full border border-dashed border-zinc-600 spin-reverse opacity-50"></div>
 
                <div class="relative w-16 h-16 rounded-full bg-zinc-800 border border-zinc-700 flex items-center justify-center shadow-xl">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7 text-zinc-300" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M11.42 15.17 17.25 21A2.652 2.652 0 0 0 21 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 1 1-3.586-3.586l5.653-4.655m5.873-4.025a3.05 3.05 0 0 0-1.66 1.042L8.43 9.384" />
                    </svg>
                </div>
            </div>
 
 
            {{-- Title con parámetro --}}
            <h1 class="slide-up-3 text-3xl font-semibold text-zinc-100 mb-4 tracking-tight">
                Working on {{ $page }}
            </h1>
 
            <p class="slide-up-4 text-zinc-400 text-sm leading-relaxed mb-10 max-w-sm">
                Esta sección está siendo construida. Pronto estará disponible con todas las funcionalidades.
            </p>
            <br>
            {{-- Loading dots --}}
            <div class="slide-up-4 flex items-center gap-2 mb-10 py-4">
                <span class="w-2 h-2 rounded-full bg-zinc-500 dot-1 inline-block"></span>
                <span class="w-2 h-2 rounded-full bg-zinc-500 dot-2 inline-block"></span>
                <span class="w-2 h-2 rounded-full bg-zinc-500 dot-3 inline-block"></span>
            </div>
 
 
        </div>
    </div>
</x-layouts::app>