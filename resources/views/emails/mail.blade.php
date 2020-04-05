
@include('emails.header')
<div class="main-content">
    <div class="email-before">
        @yield('before')
    </div>
    <div class="email-before">
        @yield('main')
    </div>
    <div class="email-after">
        @yield('after')
    </div>
</div>
@include('emails.footer')
