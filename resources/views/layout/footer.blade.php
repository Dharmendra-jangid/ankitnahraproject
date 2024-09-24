

<footer class="footer-area section_gap">
    <div class="container">
        <div class="row">

            <div class="col-lg-3  col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h6 class="footer_title">About {{$about->name}}</h6>
                    <p>@php echo ($about->description) @endphp</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h6 class="footer_title">Quick Links</h6>
                    <div class="row">
                        <div class="col-12">
                            <ul class="list">
                                <li><a href="{{route('admin.index')}}">Home</a></li>
                                <li><a href="{{route('admin.abouts')}}">About Us</a></li>
                                <li><a href="{{route('admin.photo_gallery')}}">Photo Gallery</a></li>
                                <li><a href="{{route('admin.video_gallery')}}">Video Gallery</a></li>
                                <li><a href="{{route('admin.contact')}}">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h6 class="footer_title">Contact Us</h6>
                    <p>@php echo ($about->address) @endphp</p>

                    <p><strong>Contact No.:</strong> {{$about->phone}}</p>
                    <p><strong>Mail Id:</strong>{{$about->email}}</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-footer-widget instafeed">
                    <h6 class="footer_title">Location</h6>
<!-- <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14236.536341498751!2d75.769532!3d26.8674807!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xef2c9d6a3dbd292d!2sHCG%20Hospital%20-%20Jaipur!5e0!3m2!1sen!2sin!4v1626339602841!5m2!1sen!2sin" width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe> -->
               <!--    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14238.019560521981!2d75.8016373!3d26.8556956!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396db51b5bdf0735%3A0x783ac325b09e5d2a!2sRHL%20Renova%20Cancer%20Centre!5e0!3m2!1sen!2sin!4v1686286172425!5m2!1sen!2sin" width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->
               <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14236.536341498751!2d75.769532!3d26.8674807!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396db5ad06a86fdb%3A0xef2c9d6a3dbd292d!2sHCG%20Cancer%20Hospital%20-%20(Mansarovar%2C%20Jaipur)!5e0!3m2!1sen!2sin!4v1715593549219!5m2!1sen!2sin" width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>

        <div class="border_line"></div>
        <div class="row footer-bottom d-flex justify-content-between align-items-center">
            <p class="col-lg-8 col-md-8 footer-text m-0">
&copy; 2019, All rights reserved | <a href="index.php" target="_blank">{{$about->name}}</a></p>

            <div class="col-lg-4 col-md-4 footer-social">
                <a href="https://www.indiadealsdigital.com" target="blank">
<img src="{{asset('')}}assets/img/id5.png" title="logo" alt=""></a>
            </div>
        </div>
    </div>
</footer>



<script src="{{asset('')}}assets/js/jquery-3.2.1.min.js"></script>
<script src="{{asset('')}}assets/js/popper.js"></script>
<script src="{{asset('')}}assets/js/bootstrap.min.js"></script>
<script src="{{asset('')}}assets/js/stellar.js"></script>
<script src="{{asset('')}}assets/vendors/lightbox/simpleLightbox.min.js"></script>
<script src="{{asset('')}}assets/vendors/nice-select/js/jquery.nice-select.min.js"></script>
<script src="{{asset('')}}assets/vendors/isotope/imagesloaded.pkgd.min.js"></script>
<script src="{{asset('')}}assets/vendors/isotope/isotope-min.js"></script>
<script src="{{asset('')}}assets/vendors/owl-carousel/owl.carousel.min.js"></script>
<script src="{{asset('')}}assets/js/jquery.ajaxchimp.min.js"></script>
<script src="{{asset('')}}assets/js/mail-script.js"></script>
<script src="{{asset('')}}assets/js/theme.js"></script>

<script type="text/javascript" src="{{asset('')}}assets/jsnivo/jquery-1.9.0.min.js"></script>
<script type="text/javascript" src="{{asset('')}}assets/jsnivo/jquery.nivo.slider.js"></script>
<script type="text/javascript">
$(window).load(function() {
$('#slider').nivoSlider();
});
</script>
{{--  --}}

</body>
</html>


