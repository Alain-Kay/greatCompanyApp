<!DOCTYPE html>
<html lang="fr">
@include('layouts.partials.header')
<body>
   @include('layouts.partials.navbar_admin')
   <section class="content">
    <!-- Your Page Content Here -->
    @yield('content')
   </section>
   {{-- @include('layouts.partials.footer') --}}
   @include('layouts.partials.scripts') 
   
</body>
</html>