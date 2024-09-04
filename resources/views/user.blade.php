@include('global.header')
<div class="container">
    <h1>hi user {{ $name }}</h1>
    <x-notifications messgae="hi! this is a {{$name}}" />
</div>


@include('global.footer')
