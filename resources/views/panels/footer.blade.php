<!-- BEGIN: Footer-->
@if($configData["mainLayoutType"] == 'horizontal' && isset($configData["mainLayoutType"]))
<footer
    class="footer {{ $configData['footerType'] }} {{($configData['footerType']=== 'footer-hidden') ? 'd-none':''}} footer-light navbar-shadow">
    @else
    <footer
        class="footer {{ $configData['footerType'] }} {{($configData['footerType']=== 'footer-hidden') ? 'd-none':''}} footer-light">
        @endif
        <p class="clearfix blue-grey lighten-2 mb-0"><span
                class="float-md-left d-block d-md-inline-block mt-25">COPYRIGHT &copy; 2024<a
                    class="text-bold-800 grey darken-2" href="https://dreamertec.net/"
                    target="_blank">Dreamertec,</a>All rights Reserved</span><span
                class="float-md-right d-none d-md-block"></span>
            <button class="btn btn-primary btn-icon scroll-top" type="button"><i
                    class="feather icon-arrow-up"></i></button>
        </p>
    </footer>
    <!-- END: Footer-->