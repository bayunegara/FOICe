@include('foice_partials.foice_header')
@section('foice_title','FOICe')
  <!--Main layout-->
  <main>
  <!-- FOICe project start here-->
    <div class="container-fluid pt-5 pb-0">
      <div class="row justify-content-md-center">
        <div class="col-lg-7">
          @include('foice_partials.foice_left_content')
        </div>
        <div class="col-lg-3 px-4 grey lighten-3" style="height: 580px;">
          @include('foice_partials.foice_right_content')
        </div>
      </div>
    </div>
  <!-- /FOICe project start here-->
  </main>
  <!--Main layout-->
@include('foice_partials.foice_footer')