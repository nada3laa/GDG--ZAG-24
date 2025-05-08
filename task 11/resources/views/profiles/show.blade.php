<!DOCTYPE html>
<html>
<head>
    <title>Profile Details</title>
</head>
<body>
    <h1>Profile Details</h1>
    <p><strong>Name:</strong> {{ $profile['name'] }}</p>
    <p><strong>Age:</strong> {{ $profile['age'] }}</p>
    <p><strong>Email:</strong> {{ $profile['email'] }}</p>
    <a href="{{ url('/profiles') }}">← Back to All Profiles</a>
</body>
</html>
