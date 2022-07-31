@extends('layouts.main')

@section('container')

<main class="form-registration w-100 m-auto">
    <form>
      <img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
      <h1 class="h3 mb-3 fw-normal text-center">Registration Form</h1>
        
      <div class="form-floating">
        <input type="text" name="name" class="form-control" id="name" placeholder="Name">
        <label for="name">Name</label>
      </div>  

      <div class="form-floating">
        <input type="text" name="username" class="form-control" id="username" placeholder="Name">
        <label for="name">Username</label>
      </div>  

      <div class="form-floating">
        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
        <label for="floatingInput">Email address</label>
      </div>
      <div class="form-floating">
        <input type="password" name="password" class="form-control" id="password" placeholder="Password">
        <label for="password">Password</label>
      </div>
  
      <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>
    </form>
    <small>Already Registered? <a href="/login">Login</a></small>
  </main>

@endsection