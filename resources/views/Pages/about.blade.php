
<body>
@if (5 > 10 )
    <p>5 > 10</p>
@elseif (5>5)
    <p>5==5</p>
@else
    <p>Both are false</p>
@endif
@unless(empty($name))
    <p>{{$name}} is empty</p>
@endunless
@empty($name)
    <p>name is empty</p>
@endempty
@isset($name)
    <p>Name is seted</p>
@endisset
</body>
