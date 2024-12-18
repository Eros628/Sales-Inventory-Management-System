@extends('layout')
@section('content')
  <div class="login">
    <div class="vectors-wrapper-parent">
      <img class="vectors-wrapper-icon" alt="" src="{{ asset('/pics/vectors-wrapper2x.png') }} " />

      <div class="frame-parent2">
        <div class="vectors-wrapper-wrapper">
          <div class="vectors-wrapper">
            <img class="logo-icon4" alt="" src="{{ asset('/pics/logo2x.png') }}" />

            <div class="thebikeplace-database">
              <p class="thebikeplace4">TheBikePlace</p>
              <p class="database">DATABASE</p>
            </div>
          </div>
        </div>
        <div class="email-parent">
          <div class="username">
            <div class="email3">USERNAME</div>
            <input class="email-child" type="text" id="username" required/>
          </div>
          <div class="password">
            <div class="email3">PASSWORD</div>
            <input class="email-child" type="password" id="password" required/>
          </div>
          <!-- Change the button type to "button" to prevent form submission -->
          <button class="button-wrapper" type="button" onclick="validateLogin()">
            <div class="button3" id="login">
              <div class="log-in">Log In</div>
            </div>
          </button>
        </div>
      </div>
    </div>
  </div>

  <script>
    function validateLogin() {
      var enteredUsername = document.getElementById("username").value;
      var enteredPassword = document.getElementById("password").value;

      if (enteredUsername === "superadmin" && enteredPassword === "1234") {
        // Redirect to another page after successful login
        window.location.href = "/order";
      } else if (enteredUsername === "admin" && enteredPassword === "1234") {
        // Redirect to another page after successful login
        window.location.href = "/order";
      } else {
        alert("Invalid username or password. Please try again.");
      }
    }
  </script>
@endsection
