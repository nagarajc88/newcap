<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'My App') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style2.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
<!--                         {{ config('app.name', 'My App') }} -->
                        My App
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        <div id="navbar" class="navbar-collapse collapse">
                          <ul class="nav navbar-nav">
                            <li class="<?php echo ($_SERVER['REQUEST_URI'] == '/' ? 'active' : '');?>"><a href="/">Home</a></li>
                            <li class="<?php echo ($_SERVER['REQUEST_URI'] == '/mail' ? 'active' : '');?>"><a href="/mail">Inbox</a></li>
                            <li class="<?php echo ($_SERVER['REQUEST_URI'] == '/calendar' ? 'active' : '');?>"><a href="/calendar">Calendar</a></li>
                            <li class="<?php echo ($_SERVER['REQUEST_URI'] == '/contacts' ? 'active' : '');?>"><a href="/contacts">Contacts</a></li>
                          </ul>
                          <?php if(isset($username)) { ?>
                          <ul class="nav navbar-nav navbar-right">
                            <li><p class="navbar-text">Hello <?php echo $username ?>!</p></li>
                          </ul>
                          <?php } ?>
                        </div><!--/.nav-collapse -->
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
    <!--     <script src="{{ asset('js/app.js') }}"></script> -->
    <script src="{{ asset('js/style.js') }}"></script>
    <script src="{{ asset('js/MultiNestedList.js') }}"></script>
    <script type="text/javascript">
    $(document).ready(function() {
        $('#example').DataTable();
    } );
    </script>
    <script type="text/javascript">
<!--

//-->
$(document).on("click",".level", function(){
	$("#dynamic_table").html('<table id="example" class="table table-striped table-bordered" style="width:100%"> <thead> <tr> <th>Firstname</th> <th>Lastname</th> <th>Email</th> </tr> </thead> <tbody id="rows"> <tr> <td>Default</td> <td>Defaultson</td> <td>def@somemail.com</td> </tr> <tr class="success"> <td>Success</td> <td>Doe</td> <td>john@example.com</td> </tr> <tr class="danger"> <td>Danger</td> <td>Moe</td> <td>mary@example.com</td> </tr> <tr class="info"> <td>Info</td> <td>Dooley</td> <td>july@example.com</td> </tr> <tr class="warning"> <td>Warning</td> <td>Refs</td> <td>bo@example.com</td> </tr> <tr class="active"> <td>Active</td> <td>Activeson</td> <td>act@example.com</td> </tr> <tr class="active"> <td>Active</td> <td>Activeson</td> <td>act@example.com</td> </tr> <tr class="active"> <td>Active</td> <td>Activeson</td> <td>act@example.com</td> </tr> <tr class="active"> <td>Active</td> <td>Activeson</td> <td>act@example.com</td> </tr> <tr class="active"> <td>Active</td> <td>Activeson</td> <td>act@example.com</td> </tr> <tr class="active"> <td>Active</td> <td>Activeson</td> <td>act@example.com</td> </tr> <tr class="active"> <td>Active</td> <td>Activeson</td> <td>act@example.com</td> </tr> <tr class="active"> <td>Active</td> <td>Activeson</td> <td>act@example.com</td> </tr> <tr class="active"> <td>Active</td> <td>Activeson</td> <td>act@example.com</td> </tr> <tr class="active"> <td>Active</td> <td>Activeson</td> <td>act@example.com</td> </tr> <tr class="active"> <td>Active</td> <td>Activeson</td> <td>act@example.com</td> </tr> <tr class="active"> <td>Active</td> <td>Activeson</td> <td>act@example.com</td> </tr> <tr class="active"> <td>Active</td> <td>Activeson</td> <td>act@example.com</td> </tr> <tr class="active"> <td>Active</td> <td>Activeson</td> <td>act@example.com</td> </tr> <tr class="active"> <td>Active</td> <td>Activeson</td> <td>act@example.com</td> </tr> </tbody> </table>');
	$('#example').DataTable({ 
        "destroy": true, //use for reinitialize datatable
    });
});
</script>
</body>
</html>
