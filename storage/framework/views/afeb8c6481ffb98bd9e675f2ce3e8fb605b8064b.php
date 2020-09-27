 

   
      <!--*************** Footer  Starts Here *************** -->
    <footer id="contact" class="container-fluid">
        <div class="container">
            
            <div class="row content-ro">
                <div class="col-lg-4 col-md-12 footer-contact">
                    <h2>Contact Informatins</h2>
                    <div class="address-row">
                        <div class="icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="detail">
                            <p>46-29 Indra Street, Southernbank, Tigaione, Toranto, 3006 Canada</p>
                        </div>
                    </div>
                    <div class="address-row">
                        <div class="icon">
                            <i class="far fa-envelope"></i>
                        </div>
                        <div class="detail">
                            <p>sales@smarteyeapps.com <br> support@smarteyeapps.com</p>
                        </div>
                    </div>
                    <div class="address-row">
                        <div class="icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div class="detail">
                            <p>+91 9751791203 <br> +91 9159669599</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 footer-links">
                   <div class="row no-margin mt-2">
                    <h2>Quick Links</h2>
                    <ul>
                        <li>Home</li>
                        <li>About Us</li>
                        <li>Contacts</li>
                        <li>Pricing</li>
                        <li>Gallery</li>
                        <li>eatures</li>

                    </ul>
                    </div>
                   <div class="row no-margin mt-1">
                       <h2 class="m-t-2">More Products</h2>
                     <ul>
                        <li>Forum PHP Script</li>
                        <li>Edu Smart</li>
                        <li>Smart Event</li>
                        <li>Smart School</li>


                    </ul>
                   </div>

                </div>
                <div class="col-lg-4 col-md-12 footer-form">
                    <div class="form-card">
                        <div class="form-title">
                            <h4>Quick Message</h4>
                        </div>
                        <div class="form-body">
                            <input type="text" placeholder="Enter Name" class="form-control">
                            <input type="text" placeholder="Enter Mobile no" class="form-control">
                            <input type="text" placeholder="Enter Email Address" class="form-control">
                            <input type="text" placeholder="Your Message" class="form-control">
                            <button class="btn btn-sm btn-primary w-100">Send Request</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-copy">
                <div class="row">
                    <div class="col-lg-8 col-md-6">
                        <p>Copyright © <a href="https://www.smarteyeapps.com">Smarteyeapps.com</a> | All right reserved.</p>
                    </div>
                    <div class="col-lg-4 col-md-6 socila-link">
                        <ul>
                            <li><a><i class="fab fa-github"></i></a></li>
                            <li><a><i class="fab fa-google-plus-g"></i></a></li>
                            <li><a><i class="fab fa-pinterest-p"></i></a></li>
                            <li><a><i class="fab fa-twitter"></i></a></li>
                            <li><a><i class="fab fa-facebook-f"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    
    
</body>

    <script src="<?php echo e(asset('frontend/assets/js/jquery-3.2.1.min.js')); ?>"></script>
    <script src="<?php echo e(asset('frontend/assets/js/popper.min.js')); ?>"></script>
    <script src="<?php echo e(asset('frontend/assets/js/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('frontend/assets/plugins/grid-gallery/js/grid-gallery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('frontend/assets/plugins/scroll-fixed/jquery-scrolltofixed-min.js')); ?>"></script>
    <script src="<?php echo e(asset('frontend/assets/js/script.js')); ?>"></script>
    <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    
    <?php echo Toastr::message(); ?>


<script>
    
  // Get district list
$(document).ready(function () {

    $("#select_division").change(function () {
        var url = $('#url').val();
       
        var formData = {
            id: $(this).val()
        };
        // console.log(formData);
        // get section for student
        $.ajax({
            type: "GET",
            data: formData,
            dataType: 'json',
            url: url + '/' + 'ajaxDistricList',
            success: function (data) {

              console.log(data);
                var a = '';
               $.each(data, function (i, item) {
                    if (item.length) {
                        $('#select_distric').find('option').not(':first').remove();
                        $('#select_distric_div ul').find('li').not(':first').remove();

                        $.each(item, function (i, distric) {
                            $('#select_distric').append($('<option>', {
                                value: distric.id,
                                text: distric.name
                            }));

                            $("#select_distric_div ul").append("<li data-value='" + distric.id + "' class='option'>" + distric.name + "</li>");
                        });
                    } else {
                        $('#select_distric_div .current').html('SELECT DISTRIC *');
                        $('#select_distric').find('option').not(':first').remove();
                        $('#select_distric_div ul').find('li').not(':first').remove();
                    }
                });
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });
    });

});

//Get Upazila List
$(document).ready(function () {

    $(".select_distric_for_upazila").change(function () {
        var url = $('#url').val();
       
        var formData = {
            id: $(this).val()
        };
    //    console.log(formData);
        // get section for student
        $.ajax({
            type: "GET",
            data: formData,
            dataType: 'json',
            url: url + '/' + 'ajaxUpazilaList',
            success: function (data) {

                // console.log(data);
                var a = '';
               $.each(data, function (i, item) {
                    if (item.length) {
                        $('#select_upazila').find('option').not(':first').remove();
                        $('#select_upazila_div ul').find('li').not(':first').remove();

                        $.each(item, function (i, distric) {
                            $('#select_upazila').append($('<option>', {
                                value: distric.id,
                                text: distric.name
                            }));

                            $("#select_upazila_div ul").append("<li data-value='" + distric.id + "' class='option'>" + distric.name + "</li>");
                        });
                    } else {
                        $('#select_upazila_div .current').html('SELECT DISTRIC *');
                        $('#select_upazila').find('option').not(':first').remove();
                        $('#select_upazila_div ul').find('li').not(':first').remove();
                    }
                });
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });
    });

});
//Get Union List
$(document).ready(function () {

    $(".select_upazila_union").change(function () {
        var url = $('#url').val();
       
        var formData = {
            id: $(this).val()
        };
    //    console.log(formData);
        // get section for student
        $.ajax({
            type: "GET",
            data: formData,
            dataType: 'json',
            url: url + '/' + 'ajaxUnionList',
            success: function (data) {

                // console.log(data);
                var a = '';
               $.each(data, function (i, item) {
                    if (item.length) {
                        $('#select_union').find('option').not(':first').remove();
                        $('#select_union_div ul').find('li').not(':first').remove();

                        $.each(item, function (i, union) {
                            $('#select_union').append($('<option>', {
                                value: union.id,
                                text: union.name
                            }));

                            $("#select_union_div ul").append("<li data-value='" + union.id + "' class='option'>" + union.name + "</li>");
                        });
                    } else {
                        $('#select_union_div .current').html('SELECT DISTRIC *');
                        $('#select_union').find('option').not(':first').remove();
                        $('#select_union_div ul').find('li').not(':first').remove();
                    }
                });
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });
    });

});

    </script>
</html>
<?php /**PATH C:\laragon\www\blood_donation\resources\views/include/footer.blade.php ENDPATH**/ ?>