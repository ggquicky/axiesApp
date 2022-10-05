<div class="variableHeader">
    <div class="loginHeader">
        <div class="loginMainText">{{ $route   }}</div>
        <div>
            <a class="loginNav" href="/">Home</a>
            <span>&#47;</span>
            <a class="loginNav" href="#">Pages</a>
            <span>&#47;</span>
            <a class="loginNav" href="{{ Route::currentRouteName() }}">{{ $route }}</a>
        </div>
    </div>
</div>
