<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Pusher Test</title>
    <script
  src="https://code.jquery.com/jquery-3.7.0.slim.js"
  integrity="sha256-7GO+jepT9gJe9LB4XFf8snVOjX3iYNb0FHYr5LI1N5c="
  crossorigin="anonymous"></script>
    <script src="https://js.pusher.com/8.2.0/pusher.min.js"></script>
    <script>
        // Enable pusher logging - don't include this in production
        Pusher.logToConsole = true;

        var pusher = new Pusher('9e1d3fecf5c0e816a5f7', {
            cluster: 'ap2'
        });

        var channel = pusher.subscribe('popup-channel');
        channel.bind('user-register', function(data) {
            alert(JSON.stringify(data));
        });
    </script>

</head>

<body class="antialiased">
    <h1>Pusher Test</h1>
    <p>
      Try publishing an event to channel <code>my-channel</code>
      with event name <code>my-event</code>.
    </p>
</body>

</html>
