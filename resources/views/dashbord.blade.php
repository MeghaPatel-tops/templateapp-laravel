
<!DOCTYPE html>
<html lang="en">

@include('templates.head')

<body>

    <!-- Header -->
     @include('templates.header')
    <!-- Sidebar -->
     @include('templates.aside')

    <!-- Main Content -->
    <main class="main-content">

        @yield('content')

    </main>

   @include('templates.footer')
