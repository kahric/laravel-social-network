<div class="panel panel-default">
    <div class="panel-body">
        <h3 style="margin: 5px 0 0; text-align: center;">{{ $user->name }}</h3>
        <hr>
        <img src="/uploads/avatars/{{ $user->avatar }}" class="img-responsive" alt="Responsive image">
        @if(Auth::user() == $user)
            <button class="btn btn-secondary btn-block" style="margin-top: 10px" id="profilna_slika_dugme" >Promjeni sliku</button>
            <form enctype="multipart/form-data" action="/profile" id="profilna_slika_forma" method="POST" style="display: none;">
                {{ csrf_field() }}
                <hr>
                <label>Promjena profilne slike</label>
                <input type="file" name="avatar" required>
                <input type="submit" value="Promjeni" class="pull-right btn btn-xs btn-info btn-block" style="margin-top: 10px;">
                <br>
                <hr>
            </form>
            <br>
            <div class="btn-group btn-group-justified btn-group-sm" role="group" aria-label="...">
                <a role="button" class="btn btn-default" href="/inbox">Inbox</a>
                <a role="button" class="btn btn-default" href="/outbox">Outbox</a>
            </div>
        @else
            <br>
            @if($user->followers->contains(Auth::user()))
                <form method="post" action="{{ url('follows/' . $user->username) }}">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <button type="submit" class="btn btn-default btn-block">Unfollow</button>
                </form>
            @else
                <form method="post" action="{{ url('follows/' . $user->username) }}">
                    {{ csrf_field() }}
                    <button type="submit" class="btn btn-primary btn-block">Follow</button>
                </form>
            @endif
        @endif
        <br>
        <div class="btn-group btn-group-justified btn-group-sm" role="group" aria-label="...">
            <a type="button" class="btn btn-default" href="{{ url($user->username) }}">Postova<br>{{ $user->posts->count() }}</a>
            <a type="button" class="btn btn-default" href="{{ url($user->username . '/followees') }}">Prati<br>{{ $user->followees->count() }}</a>
            <a type="button" class="btn btn-default" href="{{ url($user->username . '/followers') }}">Pratitelja<br>{{ $user->followers->count() }}</a>
        </div>
        <p><a href="/{{ $user->username }}">{{ '@' . $user->username }}</a></p>
        <p><i class="fa fa-link" aria-hidden="true"></i> <a href="{{ $user->website }}">Website</a></p>
        <p><i class="fa fa-map-marker" aria-hidden="true"></i> {{ $user->location }}</p>
        <p><i class="fa fa-birthday-cake" aria-hidden="true"></i> {{ \Carbon\Carbon::parse($user->birthday)->format('j F Y') }}</p>
        <p><i class="fa fa-calendar" aria-hidden="true"></i> {{ \Carbon\Carbon::parse($user->created_at)->format('F Y') }}</p>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function(event) {
        $("#profilna_slika_dugme").click(function () {
            $("#profilna_slika_forma").slideToggle();
        });
    });
</script>