<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf_token" content="{{ csrf_token() }}">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('style/style.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@600&family=Montserrat:wght@100;300;400;500;600;700;900&family=Playfair+Display&display=swap" rel="stylesheet"></link>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css">
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script src="{{ asset('js/registration.js') }}" defer></script>
</head>
<body>
    <main class="main">
        <div class="reg_mn">
            <div class="reg_lft">
                <div class="reg_lft_inr">
                    <h2 style="font-family: 'Montserrat', sans-serif; font-size: 35px">Altitude Air</h2>
                    <p>We promise to ensure that your well-being is taken care of while traveling with is.Boasting top inclass fleet inventory and a 5 start approval for our in-filght experience . you know you're getting the best from altitudewith no attitude. </p>
                </div>
            </div>
            <div class="reg_rht">
            <div style="padding: 25px;">
                <div style="text-align: right;">
                    <button class="sign-in-button">SIGN IN</button>
                </div>
                    <h3>Explore & Experience</h3>
                    <p style="text-about">Get onto yout most comfortable journey yet. All the way up</p>
                <form id="registrationForm">

                <div class="input-container">

                    <div>
                        <input type="text" placeholder="First name"  />
                        <p class="text-danger" style="font-size: 15px"></p>

                    </div>

                    <div>
                        <input type="text" placeholder="Last name"  />
                        <p class="text-danger" style="font-size: 15px"></p>
                    </div>

                </div>
                <div>

                <div class="input-containerb" >
                    <input type="text" placeholder="Email" style="width: 100%;" />
                    <p class="text-danger" style="font-size: 15px"></p>
                </div>

                <div class="input-containerb">
                    <input type="text" placeholder="Username" style="width: 100%;" />
                    <p class="text-danger" style="font-size: 15px"></p>

                </div>

                <div class="input-containerb">
                    <input type="password" placeholder="Password" style="width: 100%;" />
                    <p class="text-danger" style="font-size: 15px"></p>

                </div>
                <div class="input-containerb">
                    <input type="password" placeholder="Confirm Password" style="width: 100%;" />
                    <p class="text-danger" style="font-size: 15px"></p>

                </div>

                <div>
                    <button type='submit' class="full-width-button">GET STARTED</button>
                </div>
             </form>

            </div>
            </div>
            <div id="envData"
              data-app-url="{{ env('APP_URL') }}"
            </div>
        </div>
    </main>

</body>
</html>
