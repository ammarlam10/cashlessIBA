<!doctype html>
<html lang="en">

<head>
<!-- <style>
	body {background-color: blue;}
</style> -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
    crossorigin="anonymous"></script>
   --><!-- Latest compiled and minified CSS -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
   </script>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
    crossorigin="anonymous">

  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp"
    crossorigin="anonymous">

  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
    crossorigin="anonymous"></script>

  <style>
    
body {
  padding-top: 30px;
  padding-bottom: 20px;
  background: #133b47 no-repeat center center fixed;
  background-size: cover;
  color: white;
  overflow-x: hidden;
}

.active {
  background: black;
}

.red {
  color: red;
}

.margin-right {
  margin-right: 25px;
}

.active .glyphicon {
  color: steelblue;
}

.navbar-primary {
  bottom: 0px;
  left: 0px;
  position: fixed;
  top: 0px;
  width: 200px;
  z-index: 8;
  overflow: hidden;
  -webkit-transition: all 0.1s ease-in-out;
  -moz-transition: all 0.1s ease-in-out;
  transition: all 0.1s ease-in-out;
}

.navbar-primary.collapsed {
  width: 50px;
}
/*.col-md-8 {
  background: black;
}
.col-md-offset-2{background: black;}
*/
.navbar-primary.collapsed .glyphicon {
  font-size: 15px;
}

.navbar-primary.collapsed .nav-label {
  display: none;
}


.margin-top {
  margin-top: 10px;
}

.margin-top2 {
  margin-top: 30px;
}

.text-center {
  text-align:center;
}


.btn-expand-collapse {
    position: absolute;
    display: block;
    left: 0px;
    bottom:0;
    width: 100%;
    padding: 8px 0;
    border-top:solid 1px #666;
    color: grey;
    font-size: 20px;
    text-align: center;
}

.btn-expand-collapse:hover,
.btn-expand-collapse:focus {
    background-color: black;
    color: steelblue;
}

.btn-expand-collapse:active {
    background-color: #111;
}

.navbar-primary-menu,
.navbar-primary-menu li {
  margin:0; padding:0;
  list-style: none;
}

.table-bordered th, .table-bordered td { 
  border: 1px solid #ddd!important;
  text-align: center;
}

.margin-left {
  margin-top: 10px;
  margin-left: 20px;
}

.navbar-primary-menu li a {
  display: block;
  padding: 10px 18px;
  text-align: left;
  border-bottom:solid 1px #444;
  color: #ccc;
}

.navbar-primary-menu li a:hover {
  background-color: #000;
  text-decoration: none;
  color: white;
}

.navbar-primary-menu li a .glyphicon {
  margin-right: 6px;
}

.navbar-primary-menu li a:hover .glyphicon {
  color: steelblue;
}

.main-content {
  margin-left: 166px;
  padding: 20px;
}

.collapsed + .main-content {
  margin-left: 82px;
}

a, a:hover, a:visited, a:link, a:active
{
    cursor: pointer;
    text-decoration: none;
    color: steelblue;
}

textarea {
  width: 100%;
}

select {
  width: 100%;
  color: black;
}

.btn-gradient {
  border-color: black;
  background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)); 
  color: white;
}

.gradient {
  background: linear-gradient(to top, rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.6));
  background: -webkit-linear-gradient(to top, rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.4));
  background: -moz-linear-gradient(to top, rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.4));
}

hr {
  border-color: #000000;
  margin-top: 30px;
  margin-bottom: 30px; }

.signup-form {
  border-radius: 5px; 
  padding-top:10px;
  padding-bottom: 10px;}

  .signup-form .btn {
    margin-top: 30px;
    margin-bottom: 30px; }

textarea {
  color: black;
  border-radius: 5px; }

  @media (max-width: 768px) {
    .signup-row {
      padding: 10px;
      padding-bottom: 40px; 
    }
}

.inline-block {
  display: inline-block;
  text-align: center;
}

.info-icon {
  position: relative;
 left: 5px;
}

@media(max-width: 480px) {
  h4 {
    font-size: 12pt;
  }
}

.gradient-red {
  padding: 10px;
  margin-bottom: 20px;
  background: linear-gradient(to top, rgba(255, 0, 0, 0.3), rgba(255, 0, 0, 0.3));
  background: -webkit-linear-gradient(to top, rgba(255, 0, 0, 0.3), rgba(255, 0, 0, 0.3));
  background: -moz-linear-gradient(to top, rgba(255, 0, 0, 0.3), rgba(255, 0, 0, 0.3));
}

.gradient-green {
  padding: 10px;
  margin-bottom: 20px;
  background: linear-gradient(to top, rgba(0, 255, 0, 0.3), rgba(0, 255, 0, 0.3));
  background: -webkit-linear-gradient(to top, rgba(0, 255, 0, 0.3), rgba(0, 255, 0, 0.3));
  background: -moz-linear-gradient(to top, rgba(0, 255, 0, 0.3), rgba(0, 255, 0, 0.3));
}

h1,h2,h3,h4,h5,h6 {
  word-wrap: break-word;
  -webkit-hyphens: auto;
  -moz-hyphens: auto;
  -ms-hyphens: auto;
  -o-hyphens: auto;
  hyphens: auto;
}

.table-responsive
{
    overflow-x: scroll;
}

.btn-responsive {
  white-space: normal !important;
  word-wrap: break-word;
}

.food {
  padding: 20px;
  text-align: center;
  color: white;
}

.checkbox-food {
  position: relative;
  top: -3px;
}

.centered-text {
  text-align: center;
}

.form-result {
  text-align: center;
  margin-top: 30px;
  margin-bottom: 10px;
  padding: 10px;
}

form > .row {
  margin-top:10px;
  margin-bottom:10px;
}

  </style>
  <script >

  $(document).ready(function(){
    $(".null").click(function(){
    $(".null").removeClass("active");
    $(this).addClass("active");
    
        });


  });
    
</script>
  </script>
  <!-- <link rel="stylesheet" href="../src/App.css">
  <link rel="shortcut icon" href="%PUBLIC_URL%/favicon.ico">
   --><!--
      Notice the use of %PUBLIC_URL% in the tag above.
      It will be replaced with the URL of the `public` folder during the build.
      Only files inside the `public` folder can be referenced from the HTML.

      Unlike "/favicon.ico" or "favicon.ico", "%PUBLIC_URL%/favicon.ico" will
      work correctly both with client-side routing and a non-root public URL.
      Learn how to configure a non-root public URL by running `npm run build`.
    -->

    <!-- <script>
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip()
        });
      </script> -->
  <title>Fintech App</title>
</head>

<body>
  <!-- yaha pe get karo -->
  <div id="root"></div>
  <div>
          <!-- <nav class ="navbar-primary gradient">
            <a class="btn-expand-collapse" >
              <span class="glyphicon glyphicon-menu-left"></span>
            </a>
            <ul class="navbar-primary-menu">
              <li class="null">
                <a href="{{ url('/transaction') }}">
                  <span class="glyphicon glyphicon-book"></span>
                  <span class="nav-label"> Transaction Log</span>
                </a>
              </li>

              <li class="null">
                <a href="{{ url('/transaction/create') }}">
                  <span class=" glyphicon glyphicon-transfer"></span>
                  <span class="nav-label"> Wallet Transfer</span>
                </a>
              </li>

              <li class="null">
                <a href="{{ url('/deposit') }}">
                  <span class="glyphicon glyphicon-level-up"></span>
                  <span class="nav-label"> Deposit</span>
                </a>
              </li>

              <li class="null">
                <a href="{{ url('/withdraw') }}">
                  <span class=" glyphicon glyphicon-usd"></span>
                  <span class="nav-label"> Add to Wallet</span>
                </a>
              </li>


              <li class="null">
                <a >
                  <span class="glyphicon glyphicon-shopping-cart"></span>
                  <span class="nav-label"> Shop</span>
                </a>
              </li>

              <li class="null">
                <a >
                  <span class="glyphicon glyphicon-cog"></span>
                  <span class="nav-label"> Settings</span>
                </a>
              </li>

              <li class="null">
                <a href="{{ route('logout') }}"
                onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
                  <span class="glyphicon glyphicon-log-out"></span>
                  <span class="nav-label"> Logout</span>
                </a>
              

              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
              </form>


              </li>
            </ul>
          </nav> -->
          <div class="main-content">
            @yield('content')
          <!-- 
              <div class="container">
                  <div class="row"> 
                      <div class="col-md-10 col-md-offset-1 gradient">

                    <ul>
                        <h3 class="col-md-offset-4">Transaction History</h4>
                        <li><h4>Cash in Wallet: Rs. </h4></li>
                        <li><h4>Institute Due: Rs.  </h4> </li>
                        <h4>Recent transactions:</h4>

                    </ul>

                    <div class="margin-top row">
                        <div class="table-responsive col-md-push-2 col-md-8">
                            <table class="table table-bordered" >
                                <thead>
                                    <tr>
                                        <th>Amount:</th>
                                        <th>Date:</th>
                                        <th>Method</th>
                                        <th>Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   <td>January</td>
                                    <td>$100</td>
                                    <td>January</td>
                                    <td>$100</td>
                                </tbody>

                            </table>
                        </div>
                    </div>
                    </div>
                    </div>
            </div> -->
            





          </div>
        </div>
</body>

</html>