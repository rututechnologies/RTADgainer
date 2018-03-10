<nav class="navbar navbar-static-top navbar-border white-bg"  role="navigation">
    <div class="navbar-header">
        <button aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
            <i class="fa fa-reorder"></i>
        </button>
        <a href="#" class="navbar-brand"> <img src="{{ asset('images/logo.jpg') }}"></a>
    </div>
    <div class="navbar-collapse collapse" id="navbar">
        <ul class="nav navbar-nav navbar-right">
            <li>
                <a href="{{ url('/login') }}"><span class="nav-label">Login</span></a>
            </li>
            <li>
                <a aria-expanded="false" role="button" href="{{ url('/register') }}">Register</a>               
            </li>
        </ul>
    </div>
</nav>