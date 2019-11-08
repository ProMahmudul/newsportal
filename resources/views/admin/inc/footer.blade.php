<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            @php
                $setting = \App\Setting::orderBy('id', 'DESC')->first();
            @endphp
            <span>Copyright &copy; @if($setting) {{ $setting->site_title }} @endif {{ date('Y') }}</span>
        </div>
    </div>
</footer>