<body>
    <hgroup>
        <h1>SERVER</h1>
        <h3>VIEWER</h3>
    </hgroup>

    <form action="{{ route('login') }}" method="POST">
        @csrf
        <div class="group">
            <input type="email" name="email" required value="{{ old('email') }}">
            <span class="highlight"></span>
            <span class="bar"></span>
            <label>Email</label>
           
        </div>

        <div class="group">
            <input type="password" name="password" required>
            <span class="highlight"></span>
            <span class="bar"></span>
            <label>Password</label>
        </div>

         @if ($errors->has('email'))
            <div class="alert">
                Las credenciales proporcionadas no son correctas.
            </div> 
         @endif

        <button type="submit" class="button buttonBlue">Login
            <div class="ripples buttonRipples">
                <span class="ripplesCircle"></span>
            </div>
        </button>
    </form>
    <footer><a href="https://rootheim.com/" target="_blank">
        <img src="{{ asset('img/imagenLogin.png') }}" alt="Logo">
    </a>
        <p>ROOT HEIM COMPANY<a href="https://rootheim.com/" target="_blank"></a></p>
      </footer>
    
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="{{ asset('js/login.js') }}"></script>
</body>
