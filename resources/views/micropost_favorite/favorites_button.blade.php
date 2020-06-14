    @if (Auth::user()->is_favorite($micropost->id))
        {{-- アンフェイヴァリットボタンのフォーム --}}
        {!! Form::open(['route' => ['favorites.unfavorite', $micropost->id], 'method' => 'delete']) !!}
            {!! Form::submit('Unfavorite', ['class' => "btn btn-success btn-sm"]) !!}
        {!! Form::close() !!}
    @else
        {{-- フェイヴァリットボタンのフォーム --}}
        {!! Form::open(['route' => ['favorites.favorite', $micropost->id]]) !!}
            {!! Form::submit('Favorite', ['class' => "btn btn-secondary btn-sm"]) !!}
        {!! Form::close() !!}
    @endif
    
