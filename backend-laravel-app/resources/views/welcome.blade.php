<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700" rel="stylesheet" />

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-gradient-to-br from-slate-950 via-slate-900 to-indigo-900 text-white">
        <div class="min-h-screen">
            <header class="relative z-10 px-4 sm:px-6 lg:px-16 pt-6">
                <div class="mx-auto flex max-w-7xl items-center justify-between rounded-full border border-white/10 bg-white/10 px-5 py-3 shadow-lg shadow-black/20 backdrop-blur">
                    <div class="flex items-center gap-4">
                        <div class="flex h-11 w-11 items-center justify-center rounded-2xl bg-gradient-to-r from-emerald-400 to-teal-300 font-bold text-slate-900">
                            TL
                        </div>
                        <div>
                            <p class="text-lg font-semibold">TaskFlow</p>
                            <p class="text-sm text-white/60">Personal productivity</p>
                        </div>
                    </div>
                    <div class="hidden items-center gap-4 md:flex">
                        <a class="text-sm text-white/70 transition hover:text-white" href="#features">Features</a>
                        <a class="text-sm text-white/70 transition hover:text-white" href="#workflow">Workflow</a>
                        <a class="rounded-full border border-white/15 px-5 py-2 text-sm text-white/80 transition hover:bg-white/20" href="#get-started">Get Started</a>
                    </div>
                </div>
            </header>

            <main class="px-4 sm:px-6 lg:px-16">
                <section class="mx-auto grid max-w-7xl gap-10 py-16 sm:py-12 lg:grid-cols-2 lg:items-center lg:py-20">
                    <div class="text-center lg:text-left">
                        <p class="mb-3 inline-flex items-center rounded-full border border-white/15 bg-white/10 px-5 py-2 text-sm text-white/70">
                            Fast, calm, and always in sync
                        </p>
                        <h1 class="mb-6 text-5xl font-bold tracking-tight md:text-6xl lg:text-7xl">
                            Manage your day with a <span class="bg-gradient-to-r from-amber-400 to-orange-400 bg-clip-text text-transparent">smooth</span> to-do experience.
                        </h1>
                        <p class="mb-8 text-lg text-white/70">
                            Stay focused with a lightweight task planner built for personal use. Prioritize, schedule, and complete tasks without lag or clutter.
                        </p>
                        <div class="flex flex-col gap-4 sm:flex-row sm:justify-center lg:justify-start">
                            <a class="rounded-full bg-white/70 px-6 py-3 text-center text-sm font-semibold text-slate-900 shadow-lg shadow-black/30 transition hover:bg-white/80" href="#get-started">
                                Launch your board
                            </a>
                            <a class="rounded-full border border-white/15 px-6 py-3 text-center text-sm font-semibold text-white/80 transition hover:bg-white/20" href="#workflow">
                                See how it works
                            </a>
                        </div>
                        <div class="mt-8 flex flex-col gap-4 text-sm text-white/60 sm:flex-row sm:justify-center lg:justify-start">
                            <div class="rounded-2xl border border-white/10 bg-white/10 px-4 py-3">
                                <p class="text-xl font-semibold text-white">2x faster</p>
                                <p>Optimized interactions</p>
                            </div>
                            <div class="rounded-2xl border border-white/10 bg-white/10 px-4 py-3">
                                <p class="text-xl font-semibold text-white">99% focus</p>
                                <p>Minimal interface noise</p>
                            </div>
                        </div>
                    </div>

                    <div class="rounded-3xl border border-white/10 bg-slate-900/90 p-6 shadow-2xl shadow-black/30 md:p-12">
                        <div class="mb-6 flex items-center justify-between">
                            <div>
                                <p class="text-sm text-white/60">Today</p>
                                <p class="text-2xl font-semibold">Your priority list</p>
                            </div>
                            <span class="rounded-full bg-white/10 px-4 py-2 text-sm text-white/70">5 tasks</span>
                        </div>
                        <div class="space-y-4">
                            <div class="rounded-2xl border border-white/10 bg-black/40 p-4">
                                <div class="flex items-start justify-between">
                                    <div>
                                        <p class="font-semibold">Design morning routine</p>
                                        <p class="text-sm text-white/60">7:30 AM · Daily habits</p>
                                    </div>
                                    <span class="rounded-full bg-emerald-400/20 px-3 py-1 text-xs text-emerald-200">In progress</span>
                                </div>
                            </div>
                            <div class="rounded-2xl border border-white/10 bg-black/40 p-4">
                                <div class="flex items-start justify-between">
                                    <div>
                                        <p class="font-semibold">Finish sprint recap</p>
                                        <p class="text-sm text-white/60">10:00 AM · Work</p>
                                    </div>
                                    <span class="rounded-full bg-amber-400/20 px-3 py-1 text-xs text-amber-200">Review</span>
                                </div>
                            </div>
                            <div class="rounded-2xl border border-white/10 bg-black/40 p-4">
                                <div class="flex items-start justify-between">
                                    <div>
                                        <p class="font-semibold">Plan weekend errands</p>
                                        <p class="text-sm text-white/60">2:00 PM · Personal</p>
                                    </div>
                                    <span class="rounded-full bg-white/10 px-3 py-1 text-xs text-white/70">Upcoming</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section id="features" class="mx-auto max-w-6xl py-10 sm:py-12 md:py-16">
                    <div class="mb-8 text-center">
                        <p class="text-sm text-white/60">Built for speed and clarity</p>
                        <h2 class="mt-2 text-4xl font-semibold tracking-tight">Performance-first experience</h2>
                    </div>
                    <div class="grid gap-6 sm:grid-cols-2 md:grid-cols-3">
                        <div class="rounded-2xl border border-white/10 bg-white/10 p-6">
                            <h3 class="mb-2 text-xl font-semibold">Instant interactions</h3>
                            <p class="text-sm text-white/70">Lightweight UI pieces keep each click responsive and lag-free.</p>
                        </div>
                        <div class="rounded-2xl border border-white/10 bg-white/10 p-6">
                            <h3 class="mb-2 text-xl font-semibold">Smart focus modes</h3>
                            <p class="text-sm text-white/70">Surface only what matters now to stay on top of priorities.</p>
                        </div>
                        <div class="rounded-2xl border border-white/10 bg-white/10 p-6">
                            <h3 class="mb-2 text-xl font-semibold">Adaptive layout</h3>
                            <p class="text-sm text-white/70">Responsive cards and navigation stay comfortable on any screen.</p>
                        </div>
                    </div>
                </section>

                <section id="workflow" class="mx-auto max-w-5xl py-10 sm:py-12 lg:py-20">
                    <div class="grid gap-8 lg:grid-cols-2 lg:items-center">
                        <div class="rounded-3xl border border-white/10 bg-gradient-to-r from-indigo-900 to-slate-900 p-8 md:p-12">
                            <p class="text-sm text-white/60">Your workflow</p>
                            <h3 class="mt-2 text-3xl font-semibold">Everything flows in one view</h3>
                            <p class="mt-4 text-white/70">
                                Drag, reorder, and complete tasks with subtle transitions that keep the interface feeling smooth.
                            </p>
                        </div>
                        <div class="grid gap-6">
                            <div class="rounded-2xl border border-white/10 bg-white/10 p-6">
                                <p class="text-sm text-white/60">Step 1</p>
                                <p class="text-xl font-semibold">Capture</p>
                                <p class="text-sm text-white/70">Add tasks in seconds with a clean, distraction-free form.</p>
                            </div>
                            <div class="rounded-2xl border border-white/10 bg-white/10 p-6">
                                <p class="text-sm text-white/60">Step 2</p>
                                <p class="text-xl font-semibold">Organize</p>
                                <p class="text-sm text-white/70">Group by priority, time, or personal goals with ease.</p>
                            </div>
                            <div class="rounded-2xl border border-white/10 bg-white/10 p-6">
                                <p class="text-sm text-white/60">Step 3</p>
                                <p class="text-xl font-semibold">Complete</p>
                                <p class="text-sm text-white/70">Mark wins and stay motivated with gentle confirmations.</p>
                            </div>
                        </div>
                    </div>
                </section>

                <section id="get-started" class="mx-auto max-w-5xl py-12">
                    <div class="rounded-3xl border border-white/10 bg-gradient-to-r from-slate-900 to-indigo-900 p-8 text-center md:p-12">
                        <h2 class="text-4xl font-semibold">Ready to move faster?</h2>
                        <p class="mt-4 text-white/70">Log in to keep every personal task on track with a smooth, responsive UI.</p>
                        <div class="mt-6 flex flex-col justify-center gap-4 sm:flex-row">
                            @if (Route::has('login'))
                                <a class="rounded-full bg-white px-6 py-3 text-sm font-semibold text-slate-900 transition hover:bg-white/80" href="{{ route('login') }}">
                                    Log in
                                </a>
                                @if (Route::has('register'))
                                    <a class="rounded-full border border-white/15 px-6 py-3 text-sm font-semibold text-white/80 transition hover:bg-white/20" href="{{ route('register') }}">
                                        Create account
                                    </a>
                                @endif
                            @else
                                <a class="rounded-full bg-white px-6 py-3 text-sm font-semibold text-slate-900 transition hover:bg-white/80" href="#">
                                    Start now
                                </a>
                            @endif
                        </div>
                    </div>
                </section>
            </main>
        </div>
    </body>
</html>
