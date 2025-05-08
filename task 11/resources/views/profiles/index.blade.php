<!DOCTYPE html>
<html>
<head>
    <title>All Profiles</title>
</head>
<body>
    <h1>All Profiles</h1>
    <ul>
        @foreach($profiles as $id => $profile)
            <li>
                <a href="{{ url('/profiles/' . $id) }}">
                    {{ $profile['name'] }}
                </a>
            </li>
        @endforeach
    </ul>
</body>
</html>
