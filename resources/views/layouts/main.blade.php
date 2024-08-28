<!doctype html>
<html lang="en">
   @include('includes.head')
    <body>
         @include('includes.preload')
        <main>
         @include('includes.nav')
                 
         @yield('content')
         @yield('header')
        
        </main>
       @include('includes.footer')
       @yield('teamember')
      @include('includes.footerjs')
    </body> 
</html>