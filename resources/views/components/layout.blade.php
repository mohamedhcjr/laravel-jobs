<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JOB APP
        {{ $title ?? 'Job Application' }}
    </title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body>
    <div class="min-h-full">
        <nav class="bg-gray-800">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="flex h-16 items-center justify-between">
                    <div class="flex items-center">
                        <div class="shrink-0">
                            <img src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=500"
                                alt="Your Company" class="size-8" />
                        </div>

                        <div class="hidden md:block">
                            <div class="ml-10 flex items-baseline space-x-4">
                                <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-white/5 hover:text-white" -->
                                <x-nav href="/" :active="request()->is('/')">Home</x-nav>
                                <x-nav href="/about" :active="request()->is('about')">About</x-nav>
                                <x-nav href="/contact" :active="request()->is('contact')">Contact</x-nav>

                            </div>
                        </div>
                    </div>
                </div>
        </nav>
    </div>
    <main style="margin-top: 20px; ">
        <h1 style="text-align:center">{{ $title }}</h1>
        <hr>
        <div style="width: 80%; margin: auto; background-colo: aqua;">
            {{ $slot }}
        </div>


    </main>



</body>

</html>