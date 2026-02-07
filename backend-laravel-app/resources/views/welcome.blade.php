<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @endif
        <style>
            :root {
                font-family: 'Instrument Sans', ui-sans-serif, system-ui, sans-serif;
                color: #0f172a;
                background-color: #f8fafc;
            }

            * {
                box-sizing: border-box;
                margin: 0;
                padding: 0;
            }

            body {
                min-height: 100vh;
                background: #f8fafc;
            }

            .page {
                min-height: 100vh;
                display: flex;
                flex-direction: column;
            }

            .container {
                width: min(100%, 72rem);
                margin: 0 auto;
                padding: 1.5rem;
            }

            .site-header {
                background: #ffffff;
                border-bottom: 1px solid #e2e8f0;
            }

            .header-content {
                display: flex;
                align-items: center;
                justify-content: space-between;
                gap: 1rem;
                flex-wrap: wrap;
            }

            .header-label {
                font-size: 0.8rem;
                text-transform: uppercase;
                letter-spacing: 0.08em;
                color: #64748b;
            }

            .header-title {
                font-size: 1.6rem;
                font-weight: 600;
                color: #0f172a;
            }

            .header-meta {
                display: flex;
                align-items: center;
                gap: 0.75rem;
                font-size: 0.9rem;
                color: #64748b;
            }

            .meta-pill {
                display: inline-flex;
                align-items: center;
                gap: 0.35rem;
                padding: 0.35rem 0.75rem;
                border-radius: 999px;
                background: #dcfce7;
                color: #15803d;
                font-weight: 600;
            }

            .hero {
                display: grid;
                gap: 1.5rem;
                align-items: center;
            }

            .hero-card {
                background: #ffffff;
                border-radius: 1.25rem;
                padding: 2rem;
                box-shadow: 0 12px 32px rgba(15, 23, 42, 0.08);
            }

            .hero-title {
                font-size: clamp(2rem, 2vw + 1.5rem, 3rem);
                line-height: 1.1;
                font-weight: 600;
            }

            .hero-text {
                margin-top: 0.75rem;
                color: #475569;
                font-size: 1.05rem;
            }

            .badges {
                display: flex;
                flex-wrap: wrap;
                gap: 0.75rem;
                margin-top: 1.5rem;
            }

            .badge {
                background: #e2e8f0;
                color: #0f172a;
                padding: 0.5rem 0.85rem;
                border-radius: 999px;
                font-size: 0.9rem;
            }

            .app-shell {
                margin-top: 2rem;
                display: grid;
                gap: 1.5rem;
            }

            .panel {
                background: #ffffff;
                border-radius: 1rem;
                padding: 1.5rem;
                box-shadow: 0 8px 24px rgba(15, 23, 42, 0.08);
            }

            .panel-title {
                font-size: 1.1rem;
                font-weight: 600;
                color: #0f172a;
            }

            .panel-text {
                margin-top: 0.5rem;
                color: #64748b;
                font-size: 0.95rem;
            }

            .panel-list {
                margin-top: 1rem;
                display: grid;
                gap: 0.75rem;
                color: #475569;
                font-size: 0.95rem;
            }

            #app {
                margin-top: 1rem;
                color: #475569;
                font-size: 0.95rem;
            }

            #app ul {
                margin-top: 1rem;
                display: grid;
                gap: 0.75rem;
            }

            #app li {
                list-style: none;
                padding: 0.75rem 1rem;
                border-radius: 0.75rem;
                background: #f1f5f9;
            }

            .stat-grid {
                margin-top: 1.5rem;
                display: grid;
                gap: 1rem;
            }

            .stat-card {
                display: flex;
                align-items: center;
                justify-content: space-between;
                border-radius: 0.75rem;
                background: #f1f5f9;
                padding: 0.75rem 1rem;
                font-size: 0.95rem;
                color: #475569;
            }

            .stat-value {
                font-weight: 600;
                color: #0f172a;
            }

            @media (min-width: 768px) {
                .hero {
                    grid-template-columns: 1.1fr 0.9fr;
                }

                .app-shell {
                    grid-template-columns: repeat(2, minmax(0, 1fr));
                }
            }
        </style>
    </head>
    <body>
        <div class="page">
            <header class="site-header">
                <div class="container header-content">
                    <div>
                        <p class="header-label">Personal Planner</p>
                        <h1 class="header-title">To-do list dashboard</h1>
                    </div>
                    <div class="header-meta">
                        <span class="meta-pill">Live</span>
                        <span>Syncs with your tasks API</span>
                    </div>
                </div>
            </header>

            <main class="container">
                <section class="hero">
                    <div class="hero-card">
                        <h2 class="hero-title">Organize your day in one glance.</h2>
                        <p class="hero-text">
                            Keep track of personal tasks, categories, and status updates. This page adapts to
                            mobile, tablet, and desktop layouts so it always stays readable on external sites.
                        </p>
                        <div class="badges">
                            <span class="badge">Responsive layout</span>
                            <span class="badge">Real-time tasks</span>
                            <span class="badge">Clean typography</span>
                        </div>
                    </div>
                    <div class="panel">
                        <h3 class="panel-title">Quick tips</h3>
                        <ul class="panel-list">
                            <li>Use the API to create tasks with categories and due dates.</li>
                            <li>Mark tasks complete to keep your day organized.</li>
                            <li>Open this page on any device—content reflows automatically.</li>
                        </ul>
                    </div>
                </section>

                <section class="app-shell">
                    <div class="panel">
                        <h3 class="panel-title">Your tasks</h3>
                        <p class="panel-text">Loaded directly from <code>/api/tasks</code>.</p>
                        <div id="app">
                            <p>Loading your task list...</p>
                        </div>
                    </div>
                    <div class="panel">
                        <h3 class="panel-title">Status overview</h3>
                        <p class="panel-text">
                            Check back here for summaries, upcoming deadlines, and more insights.
                        </p>
                        <div class="stat-grid">
                            <div class="stat-card">
                                <span>Completed today</span>
                                <span class="stat-value">0</span>
                            </div>
                            <div class="stat-card">
                                <span>Pending tasks</span>
                                <span class="stat-value">--</span>
                            </div>
                        </div>
                    </div>
                </section>
            </main>
        </div>
    </body>
</html>
