@section('footer')

</div><!-- </.content> -->

</div><!-- </.content_wrap> -->            </div><!-- </.page_content_wrap> -->


<footer class="site_footer_wrap scheme_default">
    <div class="footer_wrap widget_area">
        <div class="footer_wrap_inner widget_area_inner">
            <div class="content_wrap">
                <div class="columns_wrap">
                    <aside id="trx_addons_widget_contacts-2" class="column-1_3 widget widget_contacts"><h3
                                class="widget_title">Sarathi Cab</h3>
                        <div class="contacts_logo"><img
                                    src="https://www.sarathi.cab/swp/wp-content/uploads/2017/07/light-logo.png" alt="">
                        </div>
                        <div class="contacts_description"><p>We created our taxi to help you find the most dependable
                                and highest quality taxi services, anytime and anywhere without any problems.</p>
                        </div>
                        <div class="contacts_info">
                            <div class="contacts_right"><span class="contacts_email"><a
                                            href="mailto:http://info@sarathi.cab">info@sarathi.cab</a></span><span
                                        class="contacts_phone">+977-1-4217171</span></div>
                            <div class="contacts_left"><span class="contacts_address">Sarathi Private Limited, Times Square Shopping Mall, Darbarmarg, Kathmandu, Nepal</span>
                            </div>
                        </div>
                    </aside>
                </div><!-- /.columns_wrap --></div><!-- /.content_wrap -->                        </div>
        <!-- /.footer_wrap_inner -->
    </div><!-- /.footer_wrap -->

    <div class="copyright_wrap scheme_ ">
        <div class="copyright_wrap_inner">
            <div class="content_wrap">
                <div class="copyright_text"><a href="https://www.sarathi.cab">Sarathi Pvt. Ltd.</a> © 2019. All Rights
                    Reserved
                </div>


            </div>
        </div>
    </div>

</footer><!-- /.site_footer_wrap -->

</div><!-- /.page_wrap -->

</div><!-- /.body_wrap -->

<!-- Post/page views count increment -->
<script type="text/javascript">
    jQuery(document).ready(function () {
        setTimeout(function () {
            jQuery.post(TRX_ADDONS_STORAGE['ajax_url'], {
                action: 'post_counter',
                nonce: TRX_ADDONS_STORAGE['ajax_nonce'],
                post_id: 52,
                views: 1
            }).done(function (response) {
                var rez = {};
                try {
                    rez = JSON.parse(response);
                } catch (e) {
                    rez = {error: TRX_ADDONS_STORAGE['ajax_error']};
                    console.log(response);
                }
                if (rez.error === '') {
                    jQuery('.post_counters_single .post_counters_views .post_counters_number').html(rez.counter);
                }
            });
        }, 10);
    });
</script>
<script type="text/javascript">
    jQuery(document).ready(function ($) {
        $('.home .sc_services_item a').attr('href', '#');
    });
</script>
<script type="text/javascript">
    var c = document.body.className;
    c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
    document.body.className = c;
</script>
<script type="text/javascript">
    function revslider_showDoubleJqueryError(sliderID) {
        var errorMessage = "Revolution Slider Error: You have some jquery.js library include that comes after the revolution files js include.";
        errorMessage += "<br> This includes make eliminates the revolution slider libraries, and make it not work.";
        errorMessage += "<br><br> To fix it you can:<br>&nbsp;&nbsp;&nbsp; 1. In the Slider Settings -> Troubleshooting set option:  <strong><b>Put JS Includes To Body</b></strong> option to true.";
        errorMessage += "<br>&nbsp;&nbsp;&nbsp; 2. Find the double jquery.js include and remove it.";
        errorMessage = "<span style='font-size:16px;color:#BC0C06;'>" + errorMessage + "</span>";
        jQuery(sliderID).show().html(errorMessage);
    }
</script>
<link rel='stylesheet' id='font-awesome-css'
      href='https://www.sarathi.cab/demo/wp-content/plugins/js_composer/assets/lib/bower/font-awesome/css/font-awesome.min.css?ver=5.1.1'
      type='text/css' media='all'/>
<script type='text/javascript'>
    /* <![CDATA[ */
    var wpcf7 = {
        "apiSettings": {
            "root": "https:\/\/www.sarathi.cab\/wp-json\/contact-form-7\/v1",
            "namespace": "contact-form-7\/v1"
        }, "recaptcha": {"messages": {"empty": "Please verify that you are not a robot."}}, "jqueryUi": "1"
    };
    /* ]]> */
</script>
<script type='text/javascript'
        src='https://www.sarathi.cab/demo/wp-content/plugins/contact-form-7/includes/js/scripts.js?ver=5.0.2'></script>
<script type='text/javascript'
        src='https://www.sarathi.cab/demo/wp-includes/js/jquery/ui/core.min.js?ver=1.11.4'></script>
<script type='text/javascript'
        src='https://www.sarathi.cab/demo/wp-includes/js/jquery/ui/datepicker.min.js?ver=1.11.4'></script>
<script type='text/javascript'>
    jQuery(document).ready(function (jQuery) {
        jQuery.datepicker.setDefaults({
            "closeText": "Close",
            "currentText": "Today",
            "monthNames": ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
            "monthNamesShort": ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
            "nextText": "Next",
            "prevText": "Previous",
            "dayNames": ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
            "dayNamesShort": ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
            "dayNamesMin": ["S", "M", "T", "W", "T", "F", "S"],
            "dateFormat": "MM d, yy",
            "firstDay": 0,
            "isRTL": false
        });
    });
</script>
<script type='text/javascript'
        src='https://www.sarathi.cab/demo/wp-content/plugins/contact-form-7-datepicker/js/jquery-ui-timepicker/jquery-ui-timepicker-addon.min.js?ver=4.9.10'></script>
<script type='text/javascript'
        src='https://www.sarathi.cab/demo/wp-includes/js/jquery/ui/widget.min.js?ver=1.11.4'></script>
<script type='text/javascript'
        src='https://www.sarathi.cab/demo/wp-includes/js/jquery/ui/mouse.min.js?ver=1.11.4'></script>
<script type='text/javascript'
        src='https://www.sarathi.cab/demo/wp-includes/js/jquery/ui/slider.min.js?ver=1.11.4'></script>
<script type='text/javascript'
        src='https://www.sarathi.cab/demo/wp-includes/js/jquery/ui/button.min.js?ver=1.11.4'></script>
<script type='text/javascript'
        src='https://www.sarathi.cab/demo/wp-content/plugins/contact-form-7-datepicker/js/jquery-ui-sliderAccess.js?ver=4.9.10'></script>
<script type='text/javascript'
        src='https://www.sarathi.cab/demo/wp-content/plugins/trx_addons/js/trx_addons.login.js'></script>
<script type='text/javascript'
        src='https://www.sarathi.cab/demo/wp-content/plugins/trx_addons/shortcodes/shortcodes.js'></script>
<script type='text/javascript'
        src='https://www.sarathi.cab/demo/wp-content/plugins/trx_addons/js/swiper/swiper.jquery.min.js'></script>
<script type='text/javascript'
        src='https://www.sarathi.cab/demo/wp-content/plugins/trx_addons/js/magnific/jquery.magnific-popup.min.js?ver=4.9.10'></script>
<script type='text/javascript'>
    /* <![CDATA[ */
    var TRX_ADDONS_STORAGE = {
        "ajax_url": "https:\/\/www.sarathi.cab\/demo\/wp-admin\/admin-ajax.php",
        "ajax_nonce": "1068258619",
        "site_url": "https:\/\/www.sarathi.cab\/demo",
        "vc_edit_mode": "0",
        "popup_engine": "magnific",
        "menu_cache": ["#menu_main", "#menu_mobile"],
        "user_logged_in": "0",
        "email_mask": "^([a-zA-Z0-9_\\-]+\\.)*[a-zA-Z0-9_\\-]+@[a-z0-9_\\-]+(\\.[a-z0-9_\\-]+)*\\.[a-z]{2,6}$",
        "msg_ajax_error": "Invalid server answer!",
        "msg_magnific_loading": "Loading image",
        "msg_magnific_error": "Error loading image",
        "msg_error_like": "Error saving your like! Please, try again later.",
        "msg_field_name_empty": "The name can't be empty",
        "msg_field_email_empty": "Too short (or empty) email address",
        "msg_field_email_not_valid": "Invalid email address",
        "msg_field_text_empty": "The message text can't be empty",
        "msg_send_complete": "Send message complete!",
        "msg_send_error": "Transmit failed!",
        "login_via_ajax": "1",
        "msg_login_empty": "The Login field can't be empty",
        "msg_login_long": "The Login field is too long",
        "msg_password_empty": "The password can't be empty and shorter then 4 characters",
        "msg_password_long": "The password is too long",
        "msg_login_success": "Login success! The page should be reloaded in 3 sec.",
        "msg_login_error": "Login failed!",
        "msg_not_agree": "Please, read and check 'Terms and Conditions'",
        "msg_email_long": "E-mail address is too long",
        "msg_email_not_valid": "E-mail address is invalid",
        "msg_password_not_equal": "The passwords in both fields are not equal",
        "msg_registration_success": "Registration success! Please log in!",
        "msg_registration_error": "Registration failed!",
        "scroll_to_anchor": "1",
        "update_location_from_anchor": "0",
        "msg_sc_googlemap_not_avail": "Googlemap service is not available",
        "msg_sc_googlemap_geocoder_error": "Error while geocode address"
    };
    /* ]]> */
</script>
<script type='text/javascript'
        src='https://www.sarathi.cab/demo/wp-content/plugins/trx_addons/js/trx_addons.front.js'></script>
<script type='text/javascript'
        src='https://www.sarathi.cab/demo/wp-content/plugins/trx_addons/js/trx_addons.utils.js'></script>
<script type='text/javascript'
        src='https://www.sarathi.cab/demo/wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min.js?ver=2.70'></script>
<script type='text/javascript'
        src='https://www.sarathi.cab/demo/wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min.js?ver=2.1.4'></script>
<script type='text/javascript'>
    /* <![CDATA[ */
    var woocommerce_params = {"ajax_url": "\/demo\/wp-admin\/admin-ajax.php", "wc_ajax_url": "\/?wc-ajax=%%endpoint%%"};
    /* ]]> */
</script>
<script type='text/javascript'
        src='https://www.sarathi.cab/demo/wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min.js?ver=3.4.3'></script>
<script type='text/javascript'>
    /* <![CDATA[ */
    var wc_cart_fragments_params = {
        "ajax_url": "\/demo\/wp-admin\/admin-ajax.php",
        "wc_ajax_url": "\/?wc-ajax=%%endpoint%%",
        "cart_hash_key": "wc_cart_hash_bd69715930b214f01fcff78a8604fbc8",
        "fragment_name": "wc_fragments_bd69715930b214f01fcff78a8604fbc8"
    };
    /* ]]> */
</script>
<script type='text/javascript'
        src='https://www.sarathi.cab/demo/wp-content/plugins/woocommerce/assets/js/frontend/cart-fragments.min.js?ver=3.4.3'></script>
<script type='text/javascript'
        src='https://www.sarathi.cab/demo/wp-content/plugins/trx_addons/widgets/slider/slider.js'></script>
<script type='text/javascript'
        src='https://www.sarathi.cab/demo/wp-content/plugins/trx_addons/shortcodes/form/form.js'></script>
<script type='text/javascript'
        src='https://www.sarathi.cab/demo/wp-includes/js/jquery/ui/spinner.min.js?ver=1.11.4'></script>
<script type='text/javascript'
        src='https://www.sarathi.cab/demo/wp-content/themes/getcab/js/skip-link-focus-fix.js?rnd=235141332'></script>
<script type='text/javascript'
        src='https://www.sarathi.cab/demo/wp-content/themes/getcab/js/superfish.js?rnd=547546235'></script>
<script type='text/javascript'
        src='https://www.sarathi.cab/demo/wp-content/themes/getcab/js/_utils.js?rnd=1337588852'></script>
<script type='text/javascript'>
    /* <![CDATA[ */
    var GETCAB_STORAGE = {
        "ajax_url": "https:\/\/www.sarathi.cab\/demo\/wp-admin\/admin-ajax.php",
        "ajax_nonce": "1068258619",
        "site_url": "https:\/\/www.sarathi.cab\/demo",
        "user_logged_in": "",
        "mobile_layout_width": "959",
        "menu_stretch": "1",
        "menu_animation_in": "fadeInUpSmall",
        "menu_animation_out": "fadeOutDownSmall",
        "background_video": "",
        "use_mediaelements": "1",
        "message_maxlength": "1000",
        "site_scheme": "scheme_default",
        "admin_mode": "",
        "email_mask": "^([a-zA-Z0-9_\\-]+\\.)*[a-zA-Z0-9_\\-]+@[a-z0-9_\\-]+(\\.[a-z0-9_\\-]+)*\\.[a-z]{2,6}$",
        "strings": {
            "ajax_error": "Invalid server answer!",
            "error_global": "Error data validation!",
            "name_empty": "The name can&#039;t be empty",
            "name_long": "Too long name",
            "email_empty": "Too short (or empty) email address",
            "email_long": "Too long email address",
            "email_not_valid": "Invalid email address",
            "text_empty": "The message text can&#039;t be empty",
            "text_long": "Too long message text",
            "search_error": "Search error! Try again later.",
            "send_complete": "Send message complete!",
            "send_error": "Transmit failed!"
        },
        "menu_hover": "fade",
        "menu_hover_color": "#ff9800",
        "button_hover": "slide_left",
        "alter_link_color": "#e9a900"
    };
    /* ]]> */
</script>
<script type='text/javascript'
        src='https://www.sarathi.cab/demo/wp-content/themes/getcab/js/_init.js?rnd=1156558154'></script>
<script type='text/javascript'
        src='https://www.sarathi.cab/demo/wp-includes/js/mediaelement/wp-mediaelement.min.js?ver=4.9.10'></script>
<script type='text/javascript'
        src='https://www.sarathi.cab/demo/wp-content/themes/getcab/includes/theme.hovers/theme.hovers.js?rnd=342022062'></script>
<script type='text/javascript'
        src='https://www.sarathi.cab/demo/wp-content/themes/getcab/plugins/trx_addons/trx_addons.js?rnd=165413674'></script>
<script type='text/javascript'
        src='https://www.sarathi.cab/demo/wp-content/themes/getcab/plugins/js_composer/js_composer.js?rnd=1175659439'></script>
<script type='text/javascript' src='https://www.sarathi.cab/demo/wp-includes/js/wp-embed.min.js?ver=4.9.10'></script>
<script type='text/javascript'
        src='https://www.sarathi.cab/demo/wp-content/plugins/js_composer/assets/js/dist/js_composer_front.min.js?ver=5.1.1'></script>

<script type="text/javascript">
    jQuery(function ($) {
        $('input[name="date"]').datetimepicker({
            "dateFormat": "mm/dd/yy",
            "timeFormat": "HH:mm",
            "addSliderAccess": true,
            "sliderAccessArgs": {"touchonly": true},
            "minDate": "today",
            "maxDate": "today"
        }).datetimepicker('option', 'minDate', "today").datetimepicker('option', 'maxDate', "today").datetimepicker('refresh');
    });
</script>

<!-- jQuery -->
{{--<script src="{{url('backend/vendors/jquery/dist/jquery.min.js')}}"></script>--}}
<!-- Bootstrap -->
<script src="{{url('backend/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- FastClick -->
<script src="{{url('backend/vendors/fastclick/lib/fastclick.js')}}"></script>
<!-- NProgress -->
{{--<script src="{{url('backend/vendors/nprogress/nprogress.js')}}"></script>--}}
<!-- bootstrap-wysiwyg -->
<script src="{{url('backend/vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js')}}"></script>
<script src="{{url('backend/vendors/jquery.hotkeys/jquery.hotkeys.js')}}"></script>
<script src="{{url('backend/vendors/google-code-prettify/src/prettify.js')}}"></script>


<!-- Custom Theme Scripts -->


<script src="{{url('backend/ckeditor/ckeditor.js')}}"></script>
<script src="{{url('backend/build/js/custom.min.js')}}"></script>
<script src="{{url('backend/custom/custom.js')}}"></script>

{{--<script src="{{url('frontend/js/custom/custom.js')}}"></script>--}}
{{--<script src="{{url('frontend/js/sweet.js')}}"></script>--}}


{{--<!-- Custom Theme Scripts -->--}}
{{--<script src="{{url('frontend/bulma/js/jquery.js')}}"></script>--}}
{{--<script src="{{url('frontend/bulma/js/sweet.js')}}"></script>--}}
{{--<script src="{{url('frontend/bulma/js/custom.js')}}"></script>--}}

<a href="#" class="trx_addons_scroll_to_top trx_addons_icon-up" title="Scroll to top"></a>
</body>
</html>

@endsection