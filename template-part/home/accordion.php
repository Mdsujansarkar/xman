<div class="logo-designer pt-100">
        <div class="container">
            <?php global $redux_demo; ?>
            <div class="row">
                <div class="col-xl-12 pt-40 pb-40">
                    <div class="logo-carosul">
                        <img src="images/logo/client-1@1X.png" alt="">
                        <img src="images/logo/client-2@1X.png" alt="">
                        <img src="images/logo/client-3@1X.png" alt="">
                        <img src="images/logo/client-4@1X.png" alt="">
                        <img src="images/logo/client-5@1X.png" alt="">
                        <img src="images/logo/client-6@1X.png" alt="">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6">
                    <div class="main-image">
                        <img src="<?php echo $redux_demo['accordion-section-image']['url']; ?>" alt="">
                    </div>
                </div>
                <div class="col-xl-6">
                   <div class="accordion" id="accordionExample">
                      <div class="card">
                        <div class="card-header" id="headingOne">
                          <h2 class="mb-0">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <?php echo $redux_demo['accordion-heading-one']; ?>
                            </button>
                          </h2>
                        </div>

                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                          <div class="card-body">
                          <?php echo $redux_demo['accordion-textarea-one']; ?>
                          </div>
                        </div>
                      </div>
                      <div class="card">
                        <div class="card-header" id="headingTwo">
                          <h2 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            <?php echo $redux_demo['accordion-heading-two']; ?>
                            </button>
                          </h2>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                          <div class="card-body">
                          <?php echo $redux_demo['accordion-textarea-two']; ?>
                          </div>
                        </div>
                      </div>
                      <div class="card">
                        <div class="card-header" id="headingThree">
                          <h2 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            <?php echo $redux_demo['accordion-heading-three']; ?>
                            </button>
                          </h2>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                          <div class="card-body">
                          <?php echo $redux_demo['accordion-textarea-three']; ?>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>