<!DOCTYPE html>
<html>
    <head>
        <title>Laravel Slack Invite</title>
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link href="{{ asset("css/style.css") }}" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">Your Team Name</div>
                @if ($send_flg == true)
                    <h1>Check your email</h1>
                    <form method="get">
                        {!! csrf_field() !!}
                        <input type="submit" value="Back">
                    </form>
                @else
                    <h1>Enter you email in below to join Your Team Name on Slack!</h1>
                    <form method="post">
                        {!! csrf_field() !!}
                        <input type="email" name="email" value="{{ $email }}" placeholder="you@yourdomain.com" autofocus="true" class="{{ $err_msg !== '' ? 'error' : '' }}"">
                        @if ($err_msg !== '')
                            <span class="error-span error">{{ $err_msg }}</span>
                        @endif
                        <input type="submit" value="Invite">
                    </form>
                @endif
            </div>
        </div>
    </body>
</html>
