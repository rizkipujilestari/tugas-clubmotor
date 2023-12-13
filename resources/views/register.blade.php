@extends('layout.main')

@section('container-main')
<div class="p-3">
    <h2 class="mb-4">Sign Up</h2>
    
    <form>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputEmail4">Email</label>
            <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
          </div>
          <div class="form-group col-md-6">
            <label for="inputPassword4">Password</label>
            <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
          </div>
        </div>
        <div class="form-group">
            <label for="inputAddress">Telepon</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="0813xxxx">
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Alamat</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <div class="text-right">
            <button type="submit" class="btn btn-primary">Sign Up</button>
        </div>
    </form>
</div>
@endsection

