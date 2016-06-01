<!DOCTYPE html>

<html lang="en">
    <head>

        <!-- Basic Page Needs
        ================================================== -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta charset="utf-8" />
        <title>
            @section('title')
             {{{ Setting::getSettings()->site_name }}}
            @show
        </title>

        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="{{ asset('assets/css/bootstrap/bootstrap.css') }}" rel="stylesheet" />
        <link href="{{ asset('assets/css/bootstrap/css-login.css') }}" rel="stylesheet" />

        <script src="{{ asset('assets/js/login.js') }}"></script>

    </head>
    <body>
<!-- main container -->
    <div class="content">

        @if ((Sentry::check()) && (Sentry::getUser()->hasAccess('admin')))
        @if (Request::is('/'))

        <!-- upper main stats -->
        <div id="main-stats">
            <div class="row stats-row">
                <div class="col-md-3 col-sm-3 stat">
                    <div class="data">
                            <a href="{{ URL::to('hardware') }}">
                                <span class="number">{{ number_format(Asset::assetcount()) }}</span>
                                   <span style="color:black">@lang('general.total_assets')</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 stat">
                        <div class="data">
                            <a href="{{ URL::to('hardware?status=RTD') }}">
                                <span class="number">{{ number_format(Asset::availassetcount()) }}</span>
                                <span style="color:black">@lang('general.assets_available')</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 stat">
                        <div class="data">
                            <a href="{{ URL::to('admin/licenses') }}">
                                <span class="number">{{ number_format(License::assetcount()) }}</span>
                                <span style="color:black">@lang('general.total_licenses')</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 stat last">
                        <div class="data">
                            <a href="{{ URL::to('admin/licenses') }}">
                                <span class="number">{{ number_format(License::availassetcount()) }}</span>
                                <span style="color:black">@lang('general.licenses_available')</span>
                            </a>
                        </div>
                    </div>
                </div>


        <!-- end upper main stats -->
        @endif
        @endif


                <div id="pad-wrapper">

                        <!-- Notifications -->
                        @include('frontend/notifications')

                        <!-- Content -->
                        @yield('content')

                </div>
            </div>
        </div>
    </div>

    <footer>

        <div id="footer" class="text-center">
                        <div class="muted credit hidden-xs">
                                <a target="_blank" href="https://www.stmt-trisakti.ac.id">STMT Trisakti</a> Asset Manajemen
                                <a target="_blank" href="https://twitter.com/STMTTrisakti">@STMTTrisakti</a>.
                                <a target="_blank" href="https://www.facebook.com/KeluargaBesarSTMTTrisakti/">Facebook STMT Trisakti</a>
                        </div>
        </div>
    </footer>

    <!-- end main container -->

    <div class="modal fade" id="dataConfirmModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel"></h4>
                </div>
                <div class="modal-body"></div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button><a class="btn btn-danger btn-sm" id="dataConfirmOK">@lang('general.yes')</a>
                </div>
            </div>
        </div>
    </div>

     @section('moar_scripts')
    @show

    </body>
</html>
