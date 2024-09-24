<div class="d-flex align-items-stretch">
    <!-- Sidebar Navigation-->
    <nav id="sidebar">
      <!-- Sidebar Header-->
      <div class="sidebar-header d-flex align-items-center">
        <div class="avatar"><img src="{{asset('Admin/'.Auth::user()->image)}}" alt="..." class="img-fluid rounded-circle"></div>
        <div class="title">

          <h1 class="h5">{{Auth::user()->name}}</h1>

        </div>
      </div>

      <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
      <ul class="list-unstyled">

        <li class=""><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-home"></i>Home </a>
            <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
              <li><a href="{{route('admins.banner')}}"><i class="bi bi-arrow-bar-right"></i>Banner Update</a></li>
              <li><a href="{{url('admins/editabouts/1')}}"><i class="bi bi-arrow-bar-right"></i>About Update</a></li>
              <li><a href="{{route('admins.service')}}"><i class="bi bi-arrow-bar-right"></i>Service Add</a></li>
            </ul>
          </li>
              <li > <a href="{{route('admins.contactshow')}}"> <i class="bi bi-eye"></i>Contact Show </a></li>
              <li > <a href="{{route('admins.serviceEdit')}}"> <i class="bi bi-eye"></i></i>Service Show/Update  </a></li>


              <li class=""><a href="#exampledropdownDropdown1" aria-expanded="false" data-toggle="collapse"> <i class="bi bi-back"></i>Gallery </a>
                <ul id="exampledropdownDropdown1" class="collapse list-unstyled ">
                  <li><a href="{{route('admins.photo')}}"><i class="bi bi-file-earmark-image-fill"></i> Photo Gallery </a></li>
                  <li><a href="{{route('admins.video')}}"><i class="bi bi-camera-video"></i> Video Gallery </a></li>

                </ul>
              </li>



    </nav>

