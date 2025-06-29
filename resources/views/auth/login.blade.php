<!-- resources/views/auth/login.blade.php -->
@extends('layout.auth')

@section('title', 'Login')
@section('body-class', 'login-page')

@section('content')
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="{{ url('/') }}" class="h1"><b>Poli</b>klinik</a>
    </div>
    <div class="card-body">
      @if(session('success'))
      <div class="alert alert-success alert-dismissible fade show" id="success-alert">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <i class="icon fas fa-check"></i> {{ session('success') }}
        <div id="countdown-container" style="display: none;">
          <hr>
          <p class="mb-0">Anda akan dialihkan dalam <span id="countdown">3</span> detik.</p>
        </div>
      </div>
      @endif

      @if(session('error'))
      <div class="alert alert-danger alert-dismissible fade show">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <i class="icon fas fa-ban"></i> {{ session('error') }}
      </div>
      @endif

      <p class="login-box-msg">Masuk untuk memulai sesi Anda</p>

      <form action="{{ route('login') }}" method="post" id="loginForm">
        @csrf
        <div class="input-group mb-3">
          <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" value="{{ old('email') }}" required autocomplete="email" autofocus id="email-input">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
          @error('email')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
          @enderror
        </div>
        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" required autocomplete="current-password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
          @error('password')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
          @enderror
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
              <label for="remember">
                Ingat Saya
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Masuk</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <p class="mb-1">
        <a href="{{ route('password.request') }}">Lupa password</a>
      </p>
      <p class="mb-0">
        <a href="{{ route('register') }}" class="text-center">Daftar akun baru</a>
      </p>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->
@endsection

@section('scripts')
<script>
$(function() {
  // Auto-fokus ke email jika ada pesan sukses (biasanya setelah registrasi)
  if ($('#success-alert').length > 0) {
    // Tampilkan countdown container
    $('#countdown-container').show();
    
    // Set fokus ke input email setelah 1 detik
    setTimeout(function() {
      $('#email-input').focus();
    }, 1000);
    
    // Countdown timer
    let countdown = 3;
    const countdownInterval = setInterval(function() {
      countdown--;
      $('#countdown').text(countdown);
      
      if (countdown <= 0) {
        clearInterval(countdownInterval);
        // Fokus ke email dan scroll ke form
        $('#email-input').focus();
        $('html, body').animate({
          scrollTop: $("#loginForm").offset().top - 100
        }, 500);
      }
    }, 1000);
    
    // Auto-close alert setelah 6 detik
    setTimeout(function() {
      $('#success-alert').fadeOut('slow');
    }, 6000);
  }
});
</script>
@endsection