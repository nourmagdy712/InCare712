<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Join us</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
  <style>
@import url("https://fonts.googleapis.com/css2?family=Montserrat&display=swap");
body {
  background-color: #ececec;
  color: #fff;
  font-family: "Montserrat", sans-serif;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  height: 100vh;
  margin: 0;
}
.text-danger{
 
  margin-left: 150px;
}

.login-box {
  position: absolute;
  top: 50%;
  left: 50%;
  width: 400px;
  height: 690px;
  padding: 40px;
  margin: 20px auto;
  transform: translate(-50%, -55%);
  background: #194868;
  box-sizing: border-box;
  border-radius: 10px;
}

.login-box h1 {
  margin: 0 0 30px;
  padding: 0;
  color: #fff;
  letter-spacing: 2px;
}

.aaa {
  color: lightblue;
  margin-top: -20px;
  margin-bottom: 20px;
}


.user-box {
  position: relative;
}

.user-box input {
  width: 100%;
  padding: 10px 0;
  font-size: 16px;
  color: #fff;
  margin-bottom: 30px;
  border: none;
  border-bottom: 1px solid #fff;
  outline: none;
  background: transparent;
}

.user-box label {
  position: absolute;
  top: 0;
  left: 0;
  padding: 10px 0;
  font-size: 16px;
  color: #fff;
  pointer-events: none;
  transition: .5s;
}

 .user-box input:focus~label,
 .user-box input:valid~label {
  top: -20px;
  left: 0;
  color: #fff;
  font-size: 12px;
}

 .submit {
  background-color: inherit;
  position: relative;
  display: inline-block;
  padding: 10px 70px;
  font-weight: bold;
  color: #fff;
  font-size: 16px;
  text-decoration: none;
  text-transform: uppercase;
  overflow: hidden;
  transition: .5s;
  letter-spacing: 3px;
  border: 1px solid white;
  cursor: pointer;
}

.submit:hover {
  background: #fff;
  color: rgb(37, 68, 94);
  border-radius: 5px;
}


.dont {
  color: white;
  font-size: 15px;
  font-weight: 500;
  text-align: center;
}

.a2 {
  color: lightblue;
  text-decoration: none;
}

.a2:hover {
  color: white;
  border-radius: 5px;
}
.radiobtn{
  display: flex;
  flex-direction:row;
}
.radiobtn p{
  margin-top: -2px;
}
@media (max-width: 400px){
.login-box{
  position: absolute !important;
  width: 100vw !important;
  height: 750px!important;
  background-color: rgb(37, 68, 94) !important;
  top: 50%;
}
.submit{
  padding: 10px 30px !important;
}
.forget{
  margin-left: 5px!important;
}
}
    </style>
</head>

<body>
  <div class="login-box">

    <h1> <i class="fa-solid fa-house-medical" style="margin-right: 10px;"></i>Register</h1>
    <p class="aaa">Welcome! Please enter your details.</p>
    <form method="POST" action="{{route('hospitalregister')}}">
      @csrf
      <div class="user-box">
        @error('name')
        <div class="text-danger">{{$message}}</div>
        @enderror
        <input required name="name" type="text" value="{{old('name')}}">
        <label>Hospital's Name</label>
      </div>
      <div class="user-box">
        @error('email')
        <div class="text-danger">{{$message}}</div>
        @enderror
        <input required name="email" type="text" value="{{old('email')}}">
        <label>E-mail</label>
      </div>
      <div class="user-box">
        @error('password')
        <div class="text-danger">{{$message}}</div>
        @enderror
        <input required name="password" type="password" value="{{old('password')}}">
        <label>Password</label>

        <div class="user-box">
          @error('password_confirmation')
          <div class="text-danger">{{$message}}</div>
          @enderror
          <input required name="password_confirmation" type="password" value="{{old('password_confirmation')}}">
          <label>Confirm Password</label>
        </div>
        <div class="user-box">
          @error('phone')
          <div class="text-danger">{{$message}}</div>
          @enderror
          <input required name="phone" type="tel" value="{{old('phone')}}">
          <label>Phone Number</label>
        </div>
        <div class="user-box">
          @error('address')
          <div class="text-danger">{{$message}}</div>
          @enderror
          <input required name="address" type="text" value="{{old('address')}}">
          <label>Address</label>
        </div>
      
       <div class="radiobtn">
        @error('type')
        <div class="text-danger">{{$message}}</div>
        @enderror
          <input  type="radio" name="type" value="governmental" />
          <p >governmental</p><br/>
          <input  type="radio" name="type" value="private"/>
          <p>private</p>
      </div>
      
      </div>
      <center>
        <button type="submit" class="submit">Sign up </button>
      </center>
    </form>
    <p class="dont">Already have an account? <a href="{{route('hospital.login')}}" class="a2">Sign in</a></p>
  </div>
</body>




</html>