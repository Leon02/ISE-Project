<?php include('../../php/head.php'); ?>
    <!-- Page Content -->
    <div class="container full-page min-width">


        <div class="test">

          <div class="row">
              <div class="col-lg-12 text-center">
                  <h1>Vélib' Passion</h1>
                  <p class="lead">Please enter your information</p>
              </div>
          </div>

        <div class="alert alert-danger center min-width content-center" role="alert">Uh oh! You have entered an invalid email-adress. Please try again.</div>

        <div class="content-center">
          <div class="row col-md-12 margin-fix2 margin-fix">
            <form class="form-inline">
              <div class="form-group">
                <label class="sr-only" for="exampleInputEmail3">First name</label>
                <input type="text" class="form-control" id="Firstname" placeholder="First name">
              </div>
              <div class="form-group">
                <label class="sr-only" for="exampleInputPassword3">Last name</label>
                <input type="text" class="form-control" id="Lastname" placeholder="Last name">
              </div>
            </form>
            </div>

            <div class="row col-md-12 mar-top margin-fix">
              <form class="form-inline">
                <div class="form-group">
                  <label class="sr-only" for="exampleInputPassword3">Last name</label>
                  <input type="text" class="form-control" id="Emailadress" placeholder="Email-adress">
                </div>
              <div class="form-group">
                <label class="sr-only" for="exampleInputEmail3">First name</label>
                <input type="date" class="form-control" placeholder="Date of birth">
              </div>
              </form>
              </div>

              <div class="row col-md-12 mar-top margin-fix">
                <form class="form-inline">
                  <div class="form-group">
                    <label class="sr-only" for="exampleInputEmail3">First name</label>
                    <input type="text" class="form-control" id="Address" placeholder="Address">
                  </div>
                  <div class="form-group">
                    <label class="sr-only" for="exampleInputPassword3">Last name</label>
                    <input type="text" class="form-control" id="Town" placeholder="Town">
                  </div>
                  <div class="form-group mar-top">
                    <label class="sr-only" for="exampleInputEmail3">First name</label>
                    <input type="text" class="form-control" id="Zipcode" placeholder="Zipcode">
                  </div>
                </form>
                </div>

                <div class="row col-md-12 mar-top margin-fix">
                  <form class="form-inline">
                    <div class="form-group">
                      <label class="sr-only" for="exampleInputPassword3">Last name</label>
                      <input type="text" class="form-control" id="Creditcard" placeholder="Creditcard">
                    </div>
                    <div class="form-group">
                      <label class="sr-only" for="exampleInputEmail3">First name</label>
                      <input type="text" class="form-control" id="Phonenumber" placeholder="Phonenumber">
                    </div>
                  </form>
                  </div>

                  <div class="row center">
                    <a href="successregister.php"><button type="button" class="btn btn-primary mar-top mar-bot2 ">Submit</button></a>
                </div>
              </div>
                </div>
              </div>

<?php include('../../php/foot.php') ?>
