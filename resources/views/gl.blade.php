

{{--{{ $menu->name }}--}}





@foreach( $menu as $men )
    <p>{{$men->name}}</p>

{{--   {{ var_dump($men->podmenu)  }}--}}
    @foreach( $men->podmenu as $pod )
        <p>---{{$pod->name}}</p>
    @endforeach
@endforeach
