<form action="{{ route('Signup')}}" method="POST">
    @csrf
    <div class="container">
        <h1>Register forms</h1>
        <p>Please fill in this form to create an account.</p>
        <hr>

        <label for="email"><b>Email</b></label>
        <input type="text" placeholder="Enter Email" name="email" id="email">

        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="psw" id="psw">

        <label for="psw-repeat"><b>Repeat Password</b></label>
        <input type="password" placeholder="Repeat Password" name="password_confirmation" name="psw-repeat"
            id="psw-repeat">
        <hr>

        <!-- <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p> -->
        <button type="submit" class="registerbtn">Register</button>
    </div>

    <div class="container signin">
        <p>Already have an account? <a href="/login">Sign in</a>.</p>
    </div>
</form>