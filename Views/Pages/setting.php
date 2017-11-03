 <!DOCTYPE html>
  <html>

    <head>

      <title>Materialize</title>

      <!-- Compiled and minified CSS -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">

      <!-- Compiled and minified JavaScript -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>

      <!-- Import icons-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        
    </head>
    
    <body>
      
      <ul id="dropdown1" class="dropdown-content">
        <li><a href="#!">User</a></li>
        <li><a href="Views/Pages/setting.html">Setting</a></li>
        <li class="divider"></li>
        <li><a href="#!">Logout</a></li>
      </ul>

      <ul id="dropdown2" class="dropdown-content">
        <li><a href="#!">User</a></li>
        <li><a href="Views/Pages/setting.html">Setting</a></li>
        <li class="divider"></li>
        <li><a href="#!">Logout</a></li>
      </ul>

      <!--navbar-->
      <nav>
        <div class="class navwrapper container">
          <a href="#" class="brand-logo center">A</a>
          <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
          <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="Views/Pages/dashboard.html">DASHBOARD</a></li>
            <li><a href="connections.html">CCONNECTIONS</a></li>
            <li><a class="dropdown-button" href="#!" data-activates="dropdown1">USER<i class="material-icons right">arrow_drop_down</i></a></li>
          </ul>
          <ul class="side-nav" id="mobile-demo">
            <br>
            <li><a href="dashboard.html">Dashboard</a></li>
            <li><a href="connections.html">Connections</a></li>
            <li><a class="dropdown-button" href="#!" data-activates="dropdown2">User<i class="material-icons right">arrow_drop_down</i></a></li>
          </ul>
        </div>
      </nav>
         
         <div class="container">
          <!-- settinlg page cards-->
            <div class="row">
                <div class="col s12 m8 offset-m2">
                    <div class="card white">
                        <div class="card-content black-text">
                            <span class="card-title red-text text-accent-2">BASIC INFO</span>
                            <!--the beginign of form -->
                            <div class="row">
                                <form class="col s12">
                                  <div class="row">
                                    <div class="input-field col s6">
                                      <input placeholder="FIRST NAME" id="first_name" type="text" class="validate">
                                      <label for="first_name">FIRST NAME</label>
                                    </div>
                                    <div class="input-field col s6">
                                      <input placeholder="LAST NAME" id="last_name" type="text" class="validate">
                                      <label for="last_name">Last Name</label>
                                    </div>
                                  </div>
                                    
                                  <div class="row">
                                    <div class="input-field col s12">
                                      <input id="company" type="text" class="validate">
                                      <label for="COMPANY">COMPANY</label>
                                    </div>
                                  </div>
                                  <div class="row">
                                    <div class="input-field col s12">
                                      <input id="Address" type="text" class="validate">
                                      <label for="Address">ADDRESS</label>
                                    </div>
                                  </div>
                                  <div class="row">
                                    <div class="input-field col s12">
                                      <input id="email" type="email" class="validate">
                                      <label for="email" data-error="wrong" data-success="right">EMAIL</label>
                                    </div>
                                  </div>
                                 
                                  <div class="row">
                                    <div class="input-field col s12">
                                      <input disabled value="STARTER: $50/MONTH" id="disabled" type="text" class="validate">
                                      <label for="disabled">SUBSCRIPTION PLAN</label>
                                    </div>
                                  </div> 
                                </form>
                              </div><!-- The end of form-->
                        </div>
                    <div class="card-action">
                       <button class="btn waves-effect waves-light   red accent-2" type="submit" name="action">UPDATE MY ACCOUNT INFO
                        </button>
                    </div>
                  </div>
                </div>
              </div> <!-- the end of first card-->
              <div class="row"><!-- the beginning of second card-->
                <div class="col s12 m8 offset-m2">
                    <div class="card white">
                        <div class="card-content black-text">
                      <span class="card-title red-text text-accent-2">CHANGE PASSWORD</span>
                            <div class="row">
                                <div class="input-field col s12">
                                  <input id="password" type="password" class="validate">
                                  <label for="password">CURRENT PASSWORD</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                  <input id="password" type="password" class="validate">
                                  <label for="password">NEW PASSWORD</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                  <input id="password" type="password" class="validate">
                                  <label for="password">NEW PASSWORD (CONFIRM)</label>
                                </div>
                            </div> 
                    </div>
                    <div class="card-action">
                    <button class="btn waves-effect waves-light   red accent-2" type="submit" name="action">CONFIRM
                    </button>
                    </div>
                  </div>
                </div>
              </div><!-- end of the second card-->
              <!-- subscription plans-->
              <div class="row ">
                <div class="col s12 m3">
                  <div class="card  white">
                        <div class="card-content black-text center-align">
                      <span class="card-title red-text text-accent-2 ">Premium</span>
                      <p>This is a premium plan</p>
                      <p>This is a premium plan</p>
                      <p>This is a premium plan</p>
                    </div>
                    <div class="card-action">
                     <button class="btn waves-effect waves-light   red accent-2" type="submit" name="action">Go Premium
                    </button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row ">
                <div class="col s12 m3">
                  <div class="card white">
                        <div class="card-content black-text center-align">
                      <span class="card-title red-text text-accent-2">Basic</span>
                     <p>This is a  plan</p>
                      <p>This is a  plan</p>
                      <p>This is a  plan</p>
                    </div>
                    <div class="card-action">
                     <button class="btn waves-effect waves-light grey lighten-3  red-text text-accent-2 " type="submit" name="action">Go Basic
                    </button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col s12 m3">
                  <div class="card  white">
                        <div class="card-content center-align black-text">
                      <span class="card-title red-text text-accent-2">Starter</span>
                     <p>This is a  plan</p>
                      <p>This is a  plan</p>
                      <p>This is a  plan</p>
                    </div>
                    <div class="card-action">
                     <button class="btn waves-effect waves-light grey lighten-3  red-text text-accent-2 " type="submit" name="action">Go STARTER
                    </button>
                    </div>
                  </div>
                </div>
              </div>
        
              
        </div><!-- the end of container-->
        
        
              
        
        
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script src="js/init.js"></script>

    </body>

  </html>