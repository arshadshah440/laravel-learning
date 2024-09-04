@include('global.header')
<div class="container">

    @if (count($users) > 0)

        @foreach ($users as $user)
            <h5>{{ $user }}</h5>
        @endforeach
    @endif
</div>


@include('global.footer')
