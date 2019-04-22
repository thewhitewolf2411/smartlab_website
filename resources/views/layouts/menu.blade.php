
<style>

    .nav-item{
      display: inline-block;
        margin-right: 15px;
        cursor: pointer;
    }

</style>

@section('menu')

    <li class="nav-item">@lang('menu.first_item')</li>
    <li class="nav-item">@lang('menu.second_item')</li>
    <li class="nav-item">@lang('menu.third_item')</li>
    <li class="nav-item">
        <a href="https://blog.smartlab.ba" target="_blank">@lang('menu.fourth_item')</a>
    </li>
    <li class="nav-item">@lang('menu.fifth_item')</li>
    @auth

        @if(\Illuminate\Support\Facades\Auth::user()->roles_id == 1)
        <li class="nav-item">
            <a href="{{route('admins.index')}}">@lang('menu.sixth_item')</a>
        </li>
        @endif

        <li class="nav-item">
            <a href="{{route('blogs.index')}}">@lang('menu.seventh_item')</a>
        </li>
        <li class="nav-item"><a href="{{route('logout')}}">@lang('menu.eight_item')</a></li>
    @endauth

@endsection