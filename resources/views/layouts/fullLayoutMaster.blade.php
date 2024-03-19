@isset($pageConfigs)
{!! Helper::updatePageConfig($pageConfigs) !!}
@endisset

<!DOCTYPE html>
{{-- {!! Helper::applClasses() !!} --}}
@php
$configData = Helper::applClasses();
@endphp
<html lang="@if(session()->has('locale')){{session()->get('locale')}}@else{{$configData['defaultLanguage']}}@endif" data-textdirection="{{ env('MIX_CONTENT_DIRECTION') === 'rtl' ? 'rtl' : 'ltr' }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') - Quicklogix</title>
    <link rel="shortcut icon" type="image/x-icon" href="images/logo/favicon.ico">

    {{-- Include core + vendor Styles --}}
    @include('panels/styles')

</head>



<body class="vertical-layout vertical-menu-modern 1-column {{ $configData['blankPageClass'] }} {{ $configData['bodyClass'] }} {{($configData['theme'] === 'light') ? '' : $configData['theme'] }}" data-menu="vertical-menu-modern" data-col="1-column" data-layout="{{ $configData['theme'] }}">

    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-body">

                {{-- Include Startkit Content --}}
                @yield('content')

            </div>
        </div>
    </div>
    <!-- End: Content-->

    {{-- include default scripts --}}
    @include('panels/scripts')
    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function() {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/65f9d6061ec1082f04d911d5/1hpbuo3gk';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>
    <!--End of Tawk.to Script-->
</body>

</html>