@extends('layout.masterlayout')

@section('content')
    <section class="banner_area">
        <div class="banner_inner d-flex align-items-center">

            <div class="container">
                <div class="banner_content text-center">
                    <h2>Contact</h2>
                </div>
            </div>
        </div>
    </section>

    <section class=" p-3 p-md-4 p-xl-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class=" col-lg-12 card border border-light-subtle rounded-4">
                    <div class="row">

                        <div class="col-lg-6 p-5 address">

                            <div class="row">
                                <div class="col-12">
                                    <div class="mb-5">
                                        <h4 class="text-center">Address</h4>
                                    </div>
                                </div>
                            </div>

                            <div class="contact_info">
                                <div class="info_item">
                                    <i class="bi bi-house"></i>
                                    <p>@php echo ($about->address) @endphp</p>
                                </div>
                                <div class="info_item">
                                    <i class="bi bi-telephone-fill"></i>
                                    <h6>
                                        <p>{{ $about->phone }}</p>
                                    </h6>
                                </div>
                                <div class="info_item">
                                    <i class="bi bi-envelope"></i>
                                    <h6>
                                        <p>{{ $about->email }}</p>
                                    </h6>
                                </div>

                                <div class="info_item">
                                    <i class="bi bi-alarm-fill"></i>
                                    <h4>Consultation Timing</h4>
                                    <p>@php echo ($about->consultationtiming) @endphp</p>
                                    <!--
                                            <h6><p><strong>Dr BS Ankit Nehra’s Cancer Clinic</strong><br>
                                                    Mon to Fri : 4:30pm to 6:30pm<br>
                                                    Sat-Sun : By Appointment Only</p></h6> -->
                                </div>

                          </div>

                        </div>

                        <div class="col-lg-6">

                                <div class="card-body p-3 p-md-4 p-xl-5">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="mb-5">
                                                <h4 class="text-center">Contact Doctor</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <form action="{{ route('admin.authcontact') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row gy-3 overflow-hidden">

                                            <div class="col-12">
                                                <div class="form-floating mb-3">
                                                    <label for="name" class="form-label">Name</label>
                                                    <input type="text" class="form-control" name="name" id="name"
                                                        placeholder="name">

                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="form-floating mb-3">
                                                    <label for="name" class="form-label">Email</label>
                                                    <input type="text" class="form-control" name="email" id="email"
                                                        placeholder="Email">

                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="form-floating mb-3">
                                                    <label for="name" class="form-label">Mobil.NO</label>
                                                    <input type="text" class="form-control" name="phone" id="phone"
                                                        placeholder="Mobil/Phone">

                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="form-floating mb-3">
                                                    <label for="name" class="form-label">City</label>
                                                    <input type="text" class="form-control" name="city" id="city"
                                                        placeholder=" Enter city">

                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="form-floating mb-3">
                                                    <label for="name" class="form-label">Message</label>
                                                    <textarea cols="47" rows="4" placeholder="Messege" name="message" id="message" class="form-control "></textarea>

                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="d-grid">
                                                    <button class="btn bsb-btn-xl btn-primary py-3" type="submit"><i class="bi bi-send  pe-3"></i>Send Message</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>

                                </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>





    {{--
    <section class="contact_area p_120">
        <div class="container">

            <div class="row">
                <div class="col-lg-4">

                </div>

                <div class="col-lg-8">
                    <form class="form" action="{{ route('admin.authcontact') }}" id="addform" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text" placeholder="Name" name="name" id="name" class="text ">
                                </div>

                                <div class="form-group">
                                    <input type="email" placeholder="Email Id" name="email" id="email"
                                        class="text ">
                                </div>


                                <div class="form-group">
                                    <input type="text" placeholder="Mobile/phone NO." name="phone" id="Phone"
                                        class="text " onkeypress="return isNumber(event);">
                                </div>

                                <div class="form-group">
                                    <input type="text" placeholder="City" name="city" id="city" class="text ">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <textarea cols="47" rows="4" placeholder="Messege" name="message" id="message" class="text "></textarea>
                                </div>
                                <!-- <div class="form-group">
              <img src="captcha.png"><br>
                 <input class="cap" name="captcha" type="text">
                 </div>
                 </div>
             </div> -->

                                <div class="form-group">
                                    <button type="submit" class="send template-btn" value="Send" id="contact"
                                        name="submit"> Submit</button>
                                </div>
                    </form>


                </div>

                <div class="col-lg-6">

                </div>

                <div class="col-lg-6">
                    <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3558.919235275013!2d75.75687831504412!3d26.874306983144134!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396db5879d926c87%3A0xe7cf09b93a2b005e!2sHope%20Oncocare%20Clinic!5e0!3m2!1sen!2sin!4v1634363588586!5m2!1sen!2sin" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe> -->
                </div>
            </div>
        </div>

    </section> --}}
    <section><iframe
            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14236.536341498751!2d75.769532!3d26.8674807!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396db5ad06a86fdb%3A0xef2c9d6a3dbd292d!2sHCG%20Cancer%20Hospital%20-%20(Mansarovar%2C%20Jaipur)!5e0!3m2!1sen!2sin!4v1715593549219!5m2!1sen!2sin"
            width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe></section>
@endsection
