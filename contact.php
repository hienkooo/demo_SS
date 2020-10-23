<?php
    include("navbar.php");
?>
<body class="sub_page">
    <!-- contact section -->

    <section class="contact_section layout_padding">
        <div class="design-box">
            <img src="images/design-2.png" alt="">
        </div>
        <div class="container ">
            <div class="">
                <h2 class="">
                    Contact Us
                </h2>
            </div>

        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <form action="">
                        <div>
                            <input type="text" placeholder="Name" />
                        </div>
                        <div>
                            <input type="email" placeholder="Email" />
                        </div>
                        <div>
                            <input type="text" placeholder="Phone" />
                        </div>
                        <div>
                            <input type="text" class="message-box" placeholder="Message" />
                        </div>
                        <div class="d-flex ">
                            <button>
                SEND
              </button>
                        </div>
                    </form>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="map_container">
                        <div class="map-responsive">
                        <iframe class="py-auto" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3818.485084610457!2d96.1201733863652!3d16.851881868112073!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c194e7ee58f64d%3A0x6e974e7cb775f1a9!2sHlaing%20Township%2C%20Yangon!5e0!3m2!1sen!2smm!4v1603422312756!5m2!1sen!2smm"
                            width="500" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end contact section -->
   <?php
        include("footer.php");
   ?>