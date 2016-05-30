<!DOCTYPE html>
<html lang="en">
@include('user.includes.header')
<body>
	@include('user.includes.topmenu')
	<section id="main-content">
        <section class="wrapper site-min-height">
            @yield('content')
        </section>
        @include('user.includes.footer')
    </section>
</body>

</html>