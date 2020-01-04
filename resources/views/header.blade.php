@if(url()->current() !== route('main') )
    <ul class="nav justify-content-end">
        <li class="nav-item">
            <a class="nav-link" href="{{ URL::previous() }}"><i class="fa fa-arrow-left" aria-hidden="true"></i> back
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ "/" }}"><i class="fa fa-home" aria-hidden="true"></i></i> home </a>
        </li>
    </ul>
@endif