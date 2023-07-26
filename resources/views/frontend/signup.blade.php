@include('frontend.layouts.header');

  <div class="main container-fluid d-flex align-items-center">
    <div class="container col-lg-8">
      <div class="row justify-content-center ">
        <div id="imgbox" class="img-box col-4 ">
            <img src={{ url("frontend/img/img1.jpg")}} alt="" width="105%" height="100%">
        </div>
        <div class="signup-box col-md-6">
          <h3 class="mb-4 my-4"><span style="padding-bottom:1px;border-bottom-style: solid;border-bottom-width: 3.1px;width: fit-content;">Lo</span>gin</h3>
          <form action="{{ route('login') }}"  method="GET">
            @csrf
            <div class="mb-3">
              <input type="email" class="form-control" name="email" placeholder="Enter Your Email">
            </div>
            <div class="mb-3">
              <input type="password" class="form-control" name="password" placeholder="Enter Your Password">
              <div class="d-flex justify-content-start">Forget Password ?</div>
            </div>
            <div class="d-grid gap-2 mt-4">

              <button class="btn btn-lg sub " id="subb" type="submit" >Submit </button>

            </div>
            <div class="mt-3 mb-4">
              <div class="text-center">Don't have an account?<a href="#" class="link" onclick="moveImgBox('left');toggleDiv(true)"> Signup now</a></div>
            </div>
          </form>
        </div>


        <div id="ss" class="signup-box col-md-6 show-signup">
          <h3 class="mb-4 my-4"><span style="padding-bottom:1px;border-bottom-style: solid;border-bottom-width: 3.1px;width: fit-content;">Si</span>gn up</h3>
          <form action="{{ url('/') }}/signup" method="POST">
            @csrf
            <div class="mb-3">
              <input type="text" class="font-awesome form-control s" name="name" placeholder="Enter Your Name" required>
              <span class="text-danger">
                @error('name')
                    {{$message}}
                @enderror
              </span>
            </div>
            <div class="mb-3">
              <input type="email" class="form-control" name="email" placeholder="Enter Your Email" required>
              <span class="text-danger">
                @error('email')
                    {{$message}}
                @enderror
            </div>
            <div class="mb-3">
              <input type="password" class="form-control" name="password" placeholder="Enter Your Password" required>
              <span class="text-danger">
                @error('password')
                    {{$message}}
                @enderror
            </div>
            <div class="mb-5">
              <input type="password" class="form-control" name="password_confirmation" placeholder="Enter Your Confirm Password" required>
              <span class="text-danger">
                @error('password_confirmation')
                    {{$message}}
                @enderror
            </div>
            <div class="d-grid gap-2">
              {{-- <a class="sub" href="{{ url('/login') }}"> --}}
              <button class="btn sub " type="submit"> Submit</button>
              {{-- </a> --}}

            </div>
            <div class="mt-3 mb-4">
              <div class="text-center">Already have an account?<a href="#" class="link" onclick="moveImgBox('right');toggleDiv(false)"> Login now</a></div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

  <script>
    function moveImgBox(direction) {
  const imgBox = document.getElementById('imgbox');
  imgBox.classList.remove('left');
  imgBox.classList.remove('right');
  if (direction === 'left') {
    imgBox.classList.add('left');
  } else if (direction === 'right') {
    imgBox.classList.add('right');
  }
}

function toggleDiv(show) {
  var div = document.getElementById("ss");
  if (show) {
    div.style.display = "block";
  } else {
    div.style.display = "none";
  }
}
  </script>

@include('frontend.layouts.footer');
