<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link href="{{asset('backend/assets/plugins/custom/datatables/datatables.bundle.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('backend/assets/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('backend/assets/css/style.bundle.css')}}" rel="stylesheet" type="text/css" />
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
        <script src="{{asset('backend/assets/plugins/global/plugins.bundle.js')}}"></script>
        <script src="{{asset('backend/assets/js/scripts.bundle.js')}}"></script>
        <!--end::Global Javascript Bundle-->
        <!--begin::Page Vendors Javascript(used by this page)-->
        <script src="{{asset('backend/assets/plugins/custom/datatables/datatables.bundle.js')}}"></script>
        <!--end::Page Vendors Javascript-->
        <!--begin::Page Custom Javascript(used by this page)-->
        <script src="{{asset('backend/assets/js/custom/apps/customers/list/export.js')}}"></script>
        <script src="{{asset('backend/assets/js/custom/apps/customers/list/list.js')}}"></script>
        <script src="{{asset('backend/assets/js/custom/apps/customers/add.js')}}"></script>
        <script src="{{asset('backend/assets/js/custom/widgets.js')}}"></script>
        <script src="{{asset('backend/assets/js/custom/apps/chat/chat.js')}}"></script>
        <script src="{{asset('backend/assets/js/custom/modals/create-app.js')}}"></script>
        <script src="{{asset('backend/assets/js/custom/modals/upgrade-plan.js')}}"></script>
    </body>
</html>
