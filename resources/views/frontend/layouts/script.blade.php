
    @jquery
    @toastr_js
    @toastr_render
        <!-- Jquery Min JS -->
        <script src="{{ asset('frontend/assets/js/jquery.min.js') }}"></script>
        <!-- Bootstrap Bundle Min JS -->
        <script src="{{ asset('frontend/assets/js/bootstrap.bundle.min.js') }}"></script>
        <!-- Magnific Popup JS -->
        <script src="{{ asset('frontend/assets/js/jquery.magnific-popup.min.js') }}"></script>
        <!-- Odometer JS -->
        <script src="{{ asset('frontend/assets/js/odometer.min.js') }}"></script>
        <!-- Appear Min JS -->
        <script src="{{ asset('frontend/assets/js/jquery.appear.min.js') }}"></script>
        <!-- Meanmenu JS -->
        <script src="{{ asset('frontend/assets/js/meanmenu.min.js') }}"></script>
        <!-- Metismenu JS -->
        <script src="{{ asset('frontend/assets/js/metismenu.min.js') }}"></script>
        <!-- Simplebar JS -->
        <script src="{{ asset('frontend/assets/js/simplebar.min.js') }}"></script>
        <!-- Dropzone JS -->
        <script src="{{ asset('frontend/assets/js/dropzone.min.js') }}"></script>
        <!-- Sticky Sidebar JS -->
        <script src="{{ asset('frontend/assets/js/sticky-sidebar.min.js') }}"></script>
        <!-- TweenMax JS -->
        <script src="{{ asset('frontend/assets/js/tweenMax.min.js') }}"></script>
        <!-- Owl Carousel JS -->
        <script src="{{ asset('frontend/assets/js/owl.carousel.min.js') }}"></script>
        <!-- animate Min JS -->
        {{-- <script src="{{ asset('frontend/assets/js/animate.min.js') }}"></script> --}}
        <!-- Ajaxchimp Min JS -->
        <script src="{{ asset('frontend/assets/js/jquery.ajaxchimp.min.js') }}"></script>
        <!-- Form Validator Min JS -->
        <script src="{{ asset('frontend/assets/js/form-validator.min.js') }}"></script>
        <!-- Contact Form JS -->
        <script src="{{ asset('frontend/assets/js/contact-form-script.js') }}"></script>
        <!-- Custom Form JS -->
        <script src="{{ asset('frontend/assets/js/custom.js') }}"></script>

<script>
        var url = 'https://wati-integration-service.clare.ai/ShopifyWidget/shopifyWidget.js?5505';
        var s = document.createElement('script');
        s.type = 'text/javascript';
        s.async = true;
        s.src = url;
        var options = {
      "enabled":true,
      "chatButtonSetting":{
          "backgroundColor":"#4dc247",
          "ctaText":"",
          "borderRadius":"100",
          "marginLeft":"20",
          "marginBottom":"50",
          "marginRight":"20",
          "position":"left",
          @if (app()->getLocale() == 'ar')
          "position":"rigth"
          @endif
      },
      "brandSetting":{
          "brandName":"{{ $setting->name }}",
          "brandSubTitle":"{{ $setting->brandtitle }}",
          "brandImg":"{{  asset('dashboard/' . $setting->image) }}",
          "welcomeText":"{{ $setting->welcometext }}",
          "messageText":"{{ $setting->msgtext }}",
          "backgroundColor":"#0a5f54",
          "ctaText":"{{ __('site.start') }}",
          "borderRadius":"30",
          "autoShow":false,
          "phoneNumber":"{{$setting->whatsapp}}"
      }
     };
        s.onload = function() {
            CreateWhatsappChatWidget(options);
        };
        var x = document.getElementsByTagName('script')[0];
        x.parentNode.insertBefore(s, x);
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script type="text/javascript">

    $(document).ready(function() {

        $(".btn-submit").click(function(e){

            $.ajaxSetup({
                headers: { 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content') }
            });
            e.preventDefault();


            var _token = $("input[name='_token']").val();
            var name = $("#name").val();
            var email = $("#email").val();
            var phone = $("#phone").val();
            var message = $("#message").val();
            var subject = $("#subject").val();
            var recaptcha = $("#g-recaptcha-response").val();
            // alert(title + " " + des);

            $.ajax({
                url: "{{ route('contact.save') }}",
                type:'POST',
                data: {_token:_token, name:name, email:email,'g-recaptcha-response':recaptcha, phone:phone, message:message, subject:subject},
                success: function(data) {
                    // alert("done")
                    console.log(data.error)
                    if($.isEmptyObject(data.error)){
                        toastr.success(data.success);
                        document.getElementById("contactInfo").reset();
                    }else{
                        printErrorMsg(data.error);
                    }
                }
            });
        });

        function printErrorMsg (msg) {
            $.each( msg, function( key, value ) {
                console.log(key);
                $('.'+key+'_err').text(value);
            });
        }
    });
</script>
<script type="text/javascript">

    $(document).ready(function() {

        $(".btn-submitt").click(function(e){

            $.ajaxSetup({
                headers: { 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content') }
            });
            e.preventDefault();


            var _token = $("input[name='_token']").val();
            var name = $("#name").val();
            var alt_name = $("#alt_name").val();
            var alt_phone = $("#alt_phone").val();
            var date = $("#date").val();
            var age = $("#age").val();
            var passport_id = $("#passport_id").val();
            var national_id = $("#national_id").val();
            var place_of_residence = $("#place_of_residence").val();
            var phone = $("#phone").val();
            var recaptcha = $("#g-recaptcha-response").val();

            // alert(title + " " + des);

            $.ajax({
                url: "{{ route('email.order') }}",
                type:'POST',
                data: {_token:_token, name:name,'g-recaptcha-response':recaptcha, alt_name:alt_name, alt_phone:alt_phone, date:date, phone:phone, age:age , passport_id:passport_id , national_id:national_id , place_of_residence:place_of_residence },
                success: function(data) {
                    // alert("done")
                    console.log(data.error)
                    if($.isEmptyObject(data.error)){
                        toastr.success(data.success);
                        document.getElementById("employmentInfo").reset();
                    }else{
                        printErrorMsg(data.error);
                    }
                }
            });
        });

        function printErrorMsg (msg) {
            $.each( msg, function( key, value ) {
                console.log(key);
                $('.'+key+'_err').text(value);
            });
        }
    });
</script>


