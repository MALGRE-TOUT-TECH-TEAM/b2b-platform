<div class="row">
    <div class="col-md-3 login-col "><a class="{{ request()->is('login') ? 'active' : '' }}"
            href="{{ route('login') }}">{{ __('LOG IND') }}</a></div>
    <div class="col-md-9 opret-col">
        <a class="{{ request()->is('registerprofile') ? 'active' : '' }}"
            href="{{ route('registerprofile') }}">{{ __('OPRET KONTO') }}</a>
    </div>
</div>
