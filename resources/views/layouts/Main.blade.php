@include('layouts.Header')
<ul>
    <li>
        <a href="/">Home</a>
        <a href="/register">Register</a> 
        <a href="/about">About</a>
    </li>
</ul>
<div class="container">
    @yield('main-section')    
</div>

@include('layouts.Footer')