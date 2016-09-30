<!DOCTYPE html>
<html>
<head>
    <title>my laravel</title>
    <meta id="token" name="token" value="{{ csrf_token() }}">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css">
</head>
<body>

    <div class="container">
        <h2>Notifications Demo</h2>

        <div class="row">
            <div class="col-lg-12">
                <div class="pull-left">
                    {{ link_to_action('NotificationController@sendMail', 'Mail', [], ['class' => 'btn btn-info', 'role' => "button"]) }}
                </div>
            </div>
        </div>
        <br />
        <div class="row">
            <div class="col-lg-12">
                <a href="{{ URL::route('notification.db') }}" class="btn btn-info">Database</a>
            </div>
        </div>
        <br />
        <div class="row">
            <div class="col-lg-12">
                <a href="{{ URL::route('notification.sms') }}" class="btn btn-info">SMS</a>
            </div>
        </div>
        <br />
        <div class="row">
            <div class="col-lg-12">
                <a href="{{ URL::route('notification.slack') }}" class="btn btn-info">Slack</a>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/js/bootstrap.min.js"></script>

    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
        <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.26/vue.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/vue.resource/0.9.3/vue-resource.min.js"></script>

    <script type="text/javascript" src="/js/app.js"></script>

</body>
</html>
