<!-- Footer Start -->
<div class="container-fluid footer text-white mt-5 pt-5 px-0 position-relative overlay-top">
        <div class="row mx-0 pt-5 px-sm-3 px-lg-5 mt-4">
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-white text-uppercase mb-4" style="letter-spacing: 3px;">Get In Touch</h4>
                <p><i class="fa fa-map-marker-alt mr-2"></i>123 Street, Dhaka, Bangladesh</p>
                <p><i class="fa fa-phone-alt mr-2"></i>+880 171 530856</p>
                <p class="m-0"><i class="fa fa-envelope mr-2"></i>fudge@gmail.com</p>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-white text-uppercase mb-4" style="letter-spacing: 3px;">Follow Us</h4>
                <p>Amet elitr vero magna sed ipsum sit kasd sea elitr lorem rebum</p>
                <div class="d-flex justify-content-start">
                    <a class="btn btn-lg btn-outline-light btn-lg-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-lg btn-outline-light btn-lg-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-lg btn-outline-light btn-lg-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-lg btn-outline-light btn-lg-square" href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-white text-uppercase mb-4" style="letter-spacing: 3px;">Open Hours</h4>
                <div>
                    <h6 class="text-white text-uppercase">Monday - Friday</h6>
                    <p>8.00 AM - 8.00 PM</p>
                    <h6 class="text-white text-uppercase">Saturday - Sunday</h6>
                    <p>2.00 PM - 8.00 PM</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-white text-uppercase mb-4" style="letter-spacing: 3px;">Newsletter</h4>
                <p>Amet elitr vero magna sed ipsum sit kasd sea elitr lorem rebum</p>
                <div class="w-100">
                    <div class="input-group">
                        <input type="text" class="form-control border-light" style="padding: 25px;" placeholder="Your Email">
                        <div class="input-group-append">
                            <button class="btn btn-primary font-weight-bold px-3">Sign Up</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid text-center text-white border-top mt-4 py-4 px-sm-3 px-md-5" style="border-color: rgba(256, 256, 256, .1) !important;">
            <p class="mb-2 text-white">Copyright &copy; <a class="font-weight-bold" href="#">Domain</a>. All Rights Reserved.</a></p>
            <p class="m-0 text-white">Designed by Rifah Tasnia Oeyshi</p>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset ('lib/easing/easing.min.js')}}"></script>
    <script src="{{ asset ('lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{ asset ('lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{ asset ('lib/tempusdominus/js/moment.min.js')}}"></script>
    <script src="{{ asset ('lib/tempusdominus/js/moment-timezone.min.js')}}"></script>
    <script src="{{ asset ('lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js')}}"></script>

    <!-- Contact Javascript File -->
    <script src="{{ asset ('mail/jqBootstrapValidation.min.js')}}"></script>
    <script src="{{ asset ('mail/contact.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset ('js/main.js')}}"></script>
    @yield('js')
    <script>
        function plus_qty(id){
          $.ajaxSetup({
              headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
          });
          var cart_id = id;
          var qty = $(".qty").val();
          if(qty < 0){
            
          } else {
              $.ajax({
                  url: "/plus_cart_item",
                  method: "POST",
                  dataType: "json",
                  data: {
                      cart_id: cart_id,
                      qty: qty,
                  },
                  success: function (response) {
                      if (response) {
                          $(".qty").css("display", "none");
                          $(".new_qty").html(response.qty);
                      }
                  },
              })
          }
        }
        function minus_qty(id){
          $.ajaxSetup({
              headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
          });
          var cart_id = id;
          var qty = $(".qty").val();
          if(qty < 0){
            
          } else {
              $.ajax({
                  url: "/minus_cart_item",
                  method: "POST",
                  dataType: "json",
                  data: {
                      cart_id: cart_id,
                      qty: qty,
                  },
                  success: function (response) {
                      if (response) {
                          $(".qty").css("display", "none");
                          $(".new_qty").html(response.qty);
                      }
                  },
              })
          }
        }
      </script>
</body>

</html>