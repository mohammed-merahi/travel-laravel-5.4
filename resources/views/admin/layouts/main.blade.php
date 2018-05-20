<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" type="image/png" href="{{ env('APP_URL') }}/frontend/images/favicon.png" />

    <title>@yield('title')</title>

    <!-- Bootstrap core CSS -->

    <link href="{{ env('APP_URL') }}/ui/css/bootstrap.min.css" rel="stylesheet">

    <link href="{{ env('APP_URL') }}/ui/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{ env('APP_URL') }}/ui/css/animate.css" rel="stylesheet">
    <link href="{{ env('APP_URL') }}/ui/css/datatables.min.css" rel="stylesheet">
    <link href="{{ env('APP_URL') }}/ui/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="{{ env('APP_URL') }}/ui/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="{{ env('APP_URL') }}/ui/css/custom.css" rel="stylesheet">
    
    <!--<link href="css/icheck/flat/green.css" rel="stylesheet">-->
    <!--<link href="css/floatexamples.css" rel="stylesheet" />-->

    <script src="{{ env('APP_URL') }}/ui/js/jquery.min.js"></script>
    <script src="{{ env('APP_URL') }}/ui/js/jquery-migrate.min.js"></script>

    <!--[if lt IE 9]>
        <script src="../assets/js/ie8-responsive-file-warning.js"></script>
        <![endif]-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

    <style>
        .form-control{
            border-radius: 6px;
        }
    </style>

</head>


<body class="nav-md">

    <div class="container body">


        <div class="main_container">

            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">

                    <div class="navbar nav_title" style="border: 0;">
                        <a href="{{ env('APP_URL') }}/admin" class="site_title"><i class="fa fa-paw"></i> <span>@yield('title')</span></a>
                    </div>
                    <div class="clearfix"></div>

					<div class="">
                    <!-- menu prile quick info -->
                    <div class="profile ">
                        <div class="profile_pic">
							{!! Form::open(['action' => 'SuperTravelController@search','method'=> 'GET']) !!}
									{!! Form::text('searchString', null,array('class'=> 'form-control', 'placeholder'=>'Search...' )) !!}
                           {!! Form::close() !!}
                        </div>
                        <div class="profile_info">
                            <span>Bienvenue, </span>
                            <b>{{ Auth::user()->name }}</b>
                        </div>
                    </div>
                    <!-- /menu prile quick info -->

                    </div>
					<div class="row"></div>
					<div class="">
                    <!-- sidebar menu -->
                    <div id="sidebar-menu" class=" main_menu_side hidden-print main_menu">

                        <div class="menu_section">
                            <ul class="nav side-menu">
								<li><a href="{{ env('APP_URL') }}/admin"><i class="fa fa-home"></i> Tableau de bord </a></li>

                                <li><a><i class="fa fa-plane" aria-hidden="true"></i> Omra <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" style="display: none">
                                        <li><a href="{{ env('APP_URL') }}/admin/omra/create"><i class="fa fa-plus" aria-hidden="true"></i> Ajouter Séjour</a></li>
                                        <li><a href="{{ env('APP_URL') }}/admin/omra"><i class="fa fa-desktop" aria-hidden="true"></i> Liste Séjours</a></li>
                                    </ul>
                                </li>
                                <li><a><i class="fa fa-plane" aria-hidden="true"></i> Séjour <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" style="display: none">
                                        <li><a href="{{ env('APP_URL') }}/admin/sejour/create"><i class="fa fa-plus" aria-hidden="true"></i> Ajouter Séjour</a></li>
                                        <li><a href="{{ env('APP_URL') }}/admin/sejour"><i class="fa fa-desktop" aria-hidden="true"></i> Liste Séjours</a></li>
                                        <li><a href="{{ env('APP_URL') }}/admin/sejour"><i class="fa fa-desktop" aria-hidden="true"></i> Séjour linguistique</a></li>
                                    </ul>
                                </li>
                                <li><a><i class="fa fa-plane" aria-hidden="true"></i> Billeterie <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" style="display: none">
                                        <li><a href="{{ env('APP_URL') }}/admin/billeterie/create"><i class="fa fa-plus" aria-hidden="true"></i> Ajouter voyage</a></li>
                                        <li><a href="{{ env('APP_URL') }}/admin/billeterie"><i class="fa fa-desktop" aria-hidden="true"></i> Liste voyages</a></li>
                                    </ul>
                                </li>
                                <li><a><i class="fa fa-plane" aria-hidden="true"></i> Hotels <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" style="display: none">
                                        <li><a href="{{ env('APP_URL') }}/admin/hotel/create"><i class="fa fa-plus" aria-hidden="true"></i> Ajouter hotel</a></li>
                                        <li><a href="{{ env('APP_URL') }}/admin/hotel"><i class="fa fa-desktop" aria-hidden="true"></i> Liste hotelss</a></li>
                                    </ul>
                                </li>
                                <li><a><i class="fa fa-list" aria-hidden="true"></i> Destinations <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" style="display: none">
                                        <li><a href="{{ env('APP_URL') }}/admin/country/create"><i class="fa fa-plus" aria-hidden="true"></i> Ajouter destination</a></li>
                                        <li><a href="{{ env('APP_URL') }}/admin/country"><i class="fa fa-desktop" aria-hidden="true"></i> Liste destinations</a></li>
                                    </ul>
                                </li>
                                <li><a><i class="fa fa-list" aria-hidden="true"></i> Compagnies Aériennes <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" style="display: none">
                                        <li><a href="{{ env('APP_URL') }}/admin/country/create"><i class="fa fa-plus" aria-hidden="true"></i> Ajouter compagnie</a></li>
                                        <li><a href="{{ env('APP_URL') }}/admin/country"><i class="fa fa-desktop" aria-hidden="true"></i> Liste compagnies</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{ env('APP_URL') }}/admin/order"><i class="fa fa-shopping-cart"></i> Réservations </a></li>
                                <li><a href="#"><i class="fa fa-cogs" aria-hidden="true"></i> Configuration <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" style="display: none">
                                        <li class="nav-item"><a href="{{env('APP_URL')}}/admin/settings/general" class="nav-link"><i class="fa fa-cogs"></i> Général </a></li>
                                        <li class="nav-item"><a href="{{env('APP_URL')}}/admin/settings/home" class="nav-link"><i class="fa fa-cogs"></i> Page d'accueil </a></li>
                                        <li class="nav-item"><a href="{{env('APP_URL')}}/admin/settings/logo" class="nav-link"><i class="fa fa-cogs"></i> Logo </a></li>
                                        <li class="nav-item"><a href="{{env('APP_URL')}}/admin/settings/slider" class="nav-link"><i class="fa fa-cogs"></i> Slider </a></li>
                                        <li class="nav-item"><a href="{{env('APP_URL')}}/admin/settings/partners_logos" class="nav-link"><i class="fa fa-cogs"></i> Logos partenaires </a></li>
                                        <li class="nav-item"><a href="{{env('APP_URL')}}/admin/settings/social_networks" class="nav-link"><i class="fa fa-cogs"></i> réseaux sociaux </a></li>
                                    </ul>
                                </li>


                            </ul>
                        </div>
                        
                    </div>
                    <!-- /sidebar menu -->
                </div>
                </div>
            </div>

            <!-- top navigation -->
            <div class="top_nav">

                <div class="nav_menu">
                    <nav class="" role="navigation">
                        <div class="nav toggle">
                            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                        </div>

                        <ul class="nav navbar-nav navbar-right">
                            <li class="">
                                <a href="#" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class=" fa fa-angle-down"></span>
                                </a>
                                <ul class="dropdown-menu">
                                                                       
                                    <li><a href="{{ route('logout') }}"
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
                        </ul>
                    </nav>
                </div>

            </div>
            <!-- /top navigation -->
<div class="right_col" role="main"><!--Right Col -->
@yield('content')
</div>  <!--Right Col -->
 <!-- footer content -->
                <footer>
                    <div class="">
                        <p class="pull-right">Test. |
                            <span class="lead"> <i class="fa fa-paw"></i> test</span>
                        </p>
                    </div>
                    <div class="clearfix"></div>
                </footer>
                <!-- /footer content -->

            </div>
            <!-- /page content -->
        </div>


    </div>

    <div id="custom_notifications" class="custom-notifications dsp_none">
        <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
        </ul>
        <div class="clearfix"></div>
        <div id="notif-group" class="tabbed_notifications"></div>
    </div>

    <script src="{{ env('APP_URL') }}/ui/js/bootstrap.min.js"></script>
    <script src="{{ env('APP_URL') }}/ui/js/datatables.min.js"></script>
    <script src="{{ env('APP_URL') }}/ui/js/jquery.dataTables.min.js"></script>
    <script src="{{ env('APP_URL') }}/ui/js/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript" src="{{ env('APP_URL') }}/ui/js/moment.min2.js"></script>
    <script type="text/javascript" src="{{ env('APP_URL') }}/ui/js/datepicker/daterangepicker.js"></script>
    
    <!-- datepicker -->
    <script type="text/javascript">
        $(document).ready(function () {
			$('#example').DataTable();

            var cb = function (start, end, label) {
                console.log(start.toISOString(), end.toISOString(), label);
                $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
                //alert("Callback has fired: [" + start.format('MMMM D, YYYY') + " to " + end.format('MMMM D, YYYY') + ", label = " + label + "]");
            }

            var optionSet1 = {
                startDate: moment().subtract(29, 'days'),
                endDate: moment(),
                minDate: '01/01/2012',
                maxDate: '12/31/2015',
                dateLimit: {
                    days: 60
                },
                showDropdowns: true,
                showWeekNumbers: true,
                timePicker: false,
                timePickerIncrement: 1,
                timePicker12Hour: true,
                ranges: {
                    'Today': [moment(), moment()],
                    'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                    'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                    'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                    'This Month': [moment().startOf('month'), moment().endOf('month')],
                    'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                },
                opens: 'left',
                buttonClasses: ['btn btn-default'],
                applyClass: 'btn-small btn-primary',
                cancelClass: 'btn-small',
                format: 'MM/DD/YYYY',
                separator: ' to ',
                locale: {
                    applyLabel: 'Submit',
                    cancelLabel: 'Clear',
                    fromLabel: 'From',
                    toLabel: 'To',
                    customRangeLabel: 'Custom',
                    daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
                    monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                    firstDay: 1
                }
            };
            $('#reportrange span').html(moment().subtract(29, 'days').format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));
            $('#reportrange').daterangepicker(optionSet1, cb);
            $('#reportrange').on('show.daterangepicker', function () {
                console.log("show event fired");
            });
            $('#reportrange').on('hide.daterangepicker', function () {
                console.log("hide event fired");
            });
            $('#reportrange').on('apply.daterangepicker', function (ev, picker) {
                console.log("apply event fired, start/end dates are " + picker.startDate.format('MMMM D, YYYY') + " to " + picker.endDate.format('MMMM D, YYYY'));
            });
            $('#reportrange').on('cancel.daterangepicker', function (ev, picker) {
                console.log("cancel event fired");
            });
            $('#options1').click(function () {
                $('#reportrange').data('daterangepicker').setOptions(optionSet1, cb);
            });
            $('#options2').click(function () {
                $('#reportrange').data('daterangepicker').setOptions(optionSet2, cb);
            });
            $('#destroy').click(function () {
                $('#reportrange').data('daterangepicker').remove();
            });
        });
    </script>
    <!-- /datepicker -->
	<script src="{{ env('APP_URL') }}/ui/js/custom.js"></script>
</body>

</html>