@extends('layout')
  
@section('content')
<main class="login-form">
  <div class="cotainer">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card">
                  <div class="card-header">Register</div>
                  <div class="card-body">
  
                      <form action="{{ route('register.post') }}" method="POST">
                          @csrf
                          <div class="form-group row">
                              <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>
                              <div class="col-md-6">
                                  <input type="text" id="name" class="form-control" name="name" required autofocus>
                                  @if ($errors->has('name'))
                                      <span class="text-danger">{{ $errors->first('name') }}</span>
                                  @endif
                              </div>
                          </div>
  
                          <div class="form-group row">
                              <label for="email_address" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>
                              <div class="col-md-6">
                                  <input type="text" id="email_address" class="form-control" name="email" required autofocus>
                                  @if ($errors->has('email'))
                                      <span class="text-danger">{{ $errors->first('email') }}</span>
                                  @endif
                              </div>
                          </div>

                          <div class="form-group row">
                              <label for="phone_number" class="col-md-4 col-form-label text-md-right">Phone Number</label>
                              <div class="col-md-6">
                                  <input type="text" id="phone_number" class="form-control" name="phone" required autofocus>
                                  @if ($errors->has('phone'))
                                      <span class="text-danger">{{ $errors->first('phone') }}</span>
                                  @endif
                              </div>
                          </div>

                          <div class="form-group row">
                              <label for="age" class="col-md-4 col-form-label text-md-right">Age</label>
                              <div class="col-md-6">
                                  <input type="text" id="age" class="form-control" name="age" required autofocus>
                                  @if ($errors->has('age'))
                                      <span class="text-danger">{{ $errors->first('age') }}</span>
                                  @endif
                              </div>
                          </div>

                          <div class="form-group row">
                              <label for="image1" class="col-md-4 col-form-label text-md-right">Images1</label>
                              <div class="col-md-6">
                                  <input type="file" id="image1" class="form-control" name="image1" required autofocus>
                                  @if ($errors->has('image1'))
                                      <span class="text-danger">{{ $errors->first('image1') }}</span>
                                  @endif
                              </div>
                          </div>

                          <div class="form-group row">
                              <label for="image2" class="col-md-4 col-form-label text-md-right">Images2</label>
                              <div class="col-md-6">
                                  <input type="file" id="image2" class="form-control" name="image2" required autofocus>
                                  @if ($errors->has('image2'))
                                      <span class="text-danger">{{ $errors->first('image2') }}</span>
                                  @endif
                              </div>
                          </div>

                          <div class="form-group row">
                              <label for="image3" class="col-md-4 col-form-label text-md-right">Images3</label>
                              <div class="col-md-6">
                                  <input type="file" id="image3" class="form-control" name="image3" required autofocus>
                                  @if ($errors->has('image3'))
                                      <span class="text-danger">{{ $errors->first('image3') }}</span>
                                  @endif
                              </div>
                          </div>

                          <div class="form-group row">
                              <label for="image4" class="col-md-4 col-form-label text-md-right">Images4</label>
                              <div class="col-md-6">
                                  <input type="file" id="image4" class="form-control" name="image4" required autofocus>
                                  @if ($errors->has('image4'))
                                      <span class="text-danger">{{ $errors->first('image4') }}</span>
                                  @endif
                              </div>
                          </div>

                          <div class="form-group row">
                              <label for="image5" class="col-md-4 col-form-label text-md-right">Images5</label>
                              <div class="col-md-6">
                                  <input type="file" id="image5" class="form-control" name="image5" required autofocus>
                                  @if ($errors->has('image5'))
                                      <span class="text-danger">{{ $errors->first('image5') }}</span>
                                  @endif
                              </div>
                          </div>

                          <div class="form-group row">
                              <label for="image6" class="col-md-4 col-form-label text-md-right">Images6</label>
                              <div class="col-md-6">
                                  <input type="file" id="image6" class="form-control" name="image6" required autofocus>
                                  @if ($errors->has('image6'))
                                      <span class="text-danger">{{ $errors->first('image6') }}</span>
                                  @endif
                              </div>
                          </div>
  
                          <div class="form-group row">
                              <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
                              <div class="col-md-6">
                                  <input type="password" id="password" class="form-control" name="password" required>
                                  @if ($errors->has('password'))
                                      <span class="text-danger">{{ $errors->first('password') }}</span>
                                  @endif
                              </div>
                          </div>
  
                          <div class="form-group row">
                              <div class="col-md-6 offset-md-4">
                                  <div class="checkbox">
                                      <label>
                                          <input type="checkbox" name="remember"> Remember Me
                                      </label>
                                  </div>
                              </div>
                          </div>
  
                          <div class="col-md-6 offset-md-4">
                              <button type="submit" class="btn btn-primary">
                                  Register
                              </button>
                          </div>
                      </form>
                        
                  </div>
              </div>
          </div>
      </div>
  </div>
</main>
@endsection