<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark scroll-smooth">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>@yield('title', 'Tech Solution | Global High-Performance Digital Agency')</title>
  <meta name="description" content="@yield('meta_description', 'Tech Solution delivers custom website development, mobile apps, SEO optimization, and enterprise Odoo ERP solutions engineered for global scale.')" />
  <link rel="canonical" href="@yield('canonical', url()->current())" />
  <meta property="og:type" content="@yield('og_type', 'website')" />
  <meta property="og:title" content="@yield('title', 'Tech Solution | Global High-Performance Digital Agency')" />
  <meta property="og:description" content="@yield('meta_description', 'Tech Solution delivers custom website development, mobile apps, SEO optimization, and enterprise Odoo ERP solutions engineered for global scale.')" />
  <meta property="og:url" content="@yield('canonical', url()->current())" />
  <meta name="twitter:card" content="summary" />
  <meta name="twitter:title" content="@yield('title', 'Tech Solution | Global High-Performance Digital Agency')" />
  <meta name="twitter:description" content="@yield('meta_description', 'Tech Solution delivers custom website development, mobile apps, SEO optimization, and enterprise Odoo ERP solutions engineered for global scale.')" />

  <!-- Tailwind CSS via CDN with custom config -->
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      darkMode: 'class',
      theme: {
        extend: {
          colors: {
            brand: {
              50: '#f0f9ff',
              100: '#e0f2fe',
              400: '#38bdf8',
              500: '#0ea5e9',
              600: '#0284c7',
              900: '#0c4a6e',
            },
            dark: {
              bg: '#090d16',
              card: '#111827',
              border: '#1f2937'
            }
          },
          fontFamily: {
            sans: ['Inter', 'sans-serif'],
            heading: ['Plus Jakarta Sans', 'sans-serif'],
          }
        }
      }
    }
  </script>

  <!-- Custom CSS Enhancements -->
  <link rel="stylesheet" href="{{ asset('css/styles.css') }}" />
  @stack('head')
  @stack('styles')
</head>
<body class="bg-slate-950 text-slate-100 dark:bg-slate-950 dark:text-slate-100 light:bg-slate-50 light:text-slate-900 transition-colors duration-300 relative selection:bg-sky-500 selection:text-white">

  <!-- Ambient Glow Background Blobs -->
  <div class="ambient-blob w-96 h-96 bg-sky-600/30 top-0 left-1/4"></div>
  <div class="ambient-blob w-96 h-96 bg-indigo-600/20 top-1/3 right-10"></div>
  <div class="ambient-blob w-[500px] h-[500px] bg-purple-600/20 bottom-1/4 left-10"></div>

  <!-- Blade Navbar Component -->
  @include('components.navbar')

  <main class="pt-24">
    @yield('content')
  </main>

  <!-- Blade Footer Component -->
  @include('components.footer')

  <!-- Main JavaScript Logic -->
  <script src="{{ asset('js/script.js') }}"></script>
  @stack('scripts')
</body>
</html>
