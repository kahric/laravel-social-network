<div class="panel panel-default">
    <div class="panel-heading">Popularni tagovi</div>

    <div class="panel-body">
        @if (isset($tags))
            @foreach($tags as $tag)
                <p><a href="{{ Request::is('tags/*') ? '../' : '' }}tags/{{ $tag->id }}">#{{ $tag->name }}</a></p>
            @endforeach
        @else
            <p class="text-muted m-0">Nema tagova!</p>
        @endif
    </div>
</div>