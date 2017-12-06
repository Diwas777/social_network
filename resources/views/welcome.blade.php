@extends('layouts.master')

@section('title')
    Welcome
@endsection


@section('content')
        <div class="row">
            <div class="col-md-6">
                <h3>Sign Up </h3>
                <form action="" method="post">
                   <div class-="form-group">
                    <label for="email">Your Email</label>
                    <input type="text" id="email" name="email" class="form-control">
                   </div>

                   <div class-="form-group">
                    <label for="first_name">Your First Name</label>
                    <input type="text" id="first_name" name="first_name" class="form-control">
                   </div>

                   <div class-="form-group">
                    <label for="Password">Your Password</label>
                    <input type="password" id="password" name="password" class="form-control">
                   </div>
                  <button type="submit" class="btn btn-info">Submit</button>
                </form>
            </div>


                <div class="col-md-6">
              <h3>Sign IN</h3>
                <form action="" method="post">
                   <div class-="form-group">
                    <label for="email">Your Email</label>
                    <input type="text" id="email" name="email" class="form-control">
                   </div>

                 

                   <div class-="form-group">
                    <label for="Password">Your Password</label>
                    <input type="password" id="password" name="password" class="form-control">
                   </div>
                  <button type="submit" class="btn btn-info">Submit</button>
                </form>
            </div>
        </div>
@endsection

