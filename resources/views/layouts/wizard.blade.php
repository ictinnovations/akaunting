<html lang="{{ setting('general.default_locale') }}">
    @include('partials.wizard.head')

    <body class="hold-transition {{ setting('general.admin_theme', 'skin-green-light') }} sidebar-mini fixed">
        @stack('body_start')

        <!-- Site wrapper -->
        <div class="wrapper">
            @include('partials.wizard.content')
        </div>

        @stack('body_end')

        <script type="text/javascript">
            $('#wizard-skip').on('click', function() {
                $('#wizard-loading').html('<span class="wizard-loading-bar"><span class="wizard-loading-spin"><i class="fa fa-spinner fa-spin"></i></span></span>');
            });
        </script>
    </body>
</html>
