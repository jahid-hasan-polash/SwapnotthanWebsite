<!DOCTYPE html>
<html lang="en">
@include('includes.header')
<body>
	@include('includes.topmenu')
	<section id="main-content">
        <section class="wrapper site-min-height">
            @yield('content')
        </section>
        @include('includes.footer')
    </section>
</body>

</html>