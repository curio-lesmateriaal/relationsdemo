<html>
<head>
    @vite(['resources/css/app.scss', 'resources/js/app.js'])
    @livewireStyles
</head>
<body>
    @foreach($playlists as $list)
        <div style="margin: 30px; border: 1px solid gray; padding: 15px; width: 400px; display: flex; justify-content: space-between;">
            <div>
                <h3 style="margin-bottom: 0px;">{{ $list->name }}</h3>
                <p>Eigenaar: <em>{{ $list->user->name }}</em></p>
            </div>
            @livewire('playlist-status', ['list' => $list])
        </div>
    @endforeach
    @livewireScripts
</body>
</html>
