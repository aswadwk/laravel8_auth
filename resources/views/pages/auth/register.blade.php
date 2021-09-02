
@extends('layouts.auth.auth')

@section('content')
<div class="text-center mb-4">
  <a href="."><img src="./static/logo.svg" height="36" alt=""></a>
</div>
<form class="card card-md" action="/register" method="POST">
    @csrf
  <div class="card-body">
    <h2 class="card-title text-center mb-4">Create new account</h2>
    <div class="mb-3">
      <label class="form-label">Username</label>
      <input type="text" name="nik_karyawan" class="form-control @error('nik_karyawan') is-invalid @enderror" placeholder="Enter name">   
      @error('nik_karyawan')
       <div class="invalid-feedback">{{$message}}</div>          
      @enderror     
    </div>
    <div class="mb-3">
      <label class="form-label">Email address</label>
      <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Enter email">
      @error('email')
      <div class="invalid-feedback">{{$message}}</div>          
      @enderror
    </div>
    <div class="mb-3">
      <label class="form-label">Password</label>
      <div class="input-group input-group-flat">
        <input type="password" name="password" class="form-control"  placeholder="Password"  autocomplete="off">
        <span class="input-group-text">
          <a href="#" class="link-secondary" title="Show password" data-bs-toggle="tooltip"><!-- Download SVG icon from http://tabler-icons.io/i/eye -->
            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><circle cx="12" cy="12" r="2" /><path d="M22 12c-2.667 4.667 -6 7 -10 7s-7.333 -2.333 -10 -7c2.667 -4.667 6 -7 10 -7s7.333 2.333 10 7" /></svg>
          </a>
        </span>
      </div>
    </div>
    <div class="mb-3">
      <label class="form-check">
        <input type="checkbox" class="form-check-input"/>
        <span class="form-check-label">Agree the <a href="./terms-of-service.html" tabindex="-1">terms and policy</a>.</span>
      </label>
    </div>
    <div class="form-footer">
      <button type="submit" class="btn btn-primary w-100">Create new account</button>
    </div>
  </div>
</form>
<div class="text-center text-muted mt-3">
  Already have account? <a href="/" tabindex="-1">Sign in</a>
</div>


</div>
</div>
@endsection
        