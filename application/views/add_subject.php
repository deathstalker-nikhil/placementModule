<!DOCTYPE html>
<?=$head?>
<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading"></h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <form id="mainSearchForm" onsubmit="return false;" action="/login">

                    <div class="row">
                        <div class="col-md-4 col-md-offset-8">
                            <h4 class="section-heading" style="color: #000; text-align: center;">USER LOGIN</h4>
                            <div class="col-md-12">
                            <div class="form-group">

                                <input class="form-control" placeholder="username">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input class="form-control" placeholder="password">
                            </div>
                        </div>
                         <div class="col-md-12">
                            <div class="form-group">

                                <button style="background-color: #2c3e50; color: #fff; float:right;" type="submit" class="btn">LOGIN</button>
                            </div>
                        </div>
                        </div>


                                      </div>
                </form>
            </div>
        </div>
    </div>
</section>
<div class="container">
    <div class="row" style="padding: 20px;">

            <!-- Sidebar Column -->
            <div class="col-md-3">
                <?php echo $left; ?>
            </div>
            <!-- Content Column -->
            <div class="col-md-9">
                <h3>ADD SUBJECT</h3>
                <form method="post" action="/home/addCoupon">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Subject Code</label>
                        <input class="form-control" name="subject_code" placeholder="Subject Code">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Batch</label>
                        <select class="form-control" name="batch">
                            <option value="2012-2016">2012-2016</option>
                            <option value="2013-2017">2013-2017</option>
                            <option value="2014-2018">2014-2018</option>
                            <option value="2015-2019">2015-2019</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Subject Name</label>
                        <input class="form-control" name="subject_name" placeholder="Subject Name">
                    </div>
                </div>
              
                 <div class="col-md-12">
                   <div class="form-group">
                       <label>Department</label>
                       <select class="form-control" name="department">
                           <option value="2012-2016">Department of Computer Science</option>
                           <option value="2013-2017">Department of Information and Technology</option>
                           <option value="2014-2018">Deparment of Civil Engineering</option>
                           <option value="2015-2019">Department of Instrumentation and Control</option>
                       </select>
                   </div>
                </div>


                <div class="col-md-12">
                    <div class="form-group">

                         <input type="hidden" name="<?php echo $csrf_token_name ?>" value="<?php echo $csrf_token ?>">
                        <button type="submit" class="btn" style="background: #C80237; color: #fff; float: right;">Add Subject</button>
                    </div>
                </div>

                </form>


            </div>


    </div>
</div>


<?=$foot?>

<script src="/assets/js/jquery.js"></script>
<script src="/assets/js/bootstrap.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script src="/assets/js/classie.js"></script>
<script src="/assets/js/cbpAnimatedHeader.js"></script>
<script src="/assets/js/jqBootstrapValidation.js"></script>
<script src="/assets/js/contact_me.js"></script>
<script src="/assets/js/agency.js"></script>
<script>
    $(document).ready(function(){
        setSubRegionsDropDown();
        setSubcategoriesDropDown();
        if($('#message').val()!=''){
            $('#msgModal').find('.modal-body').html($('#message').val());
            $('#msgModal').modal('toggle');
        }
    });
    function setSubRegionsDropDown () {
        var subRegions = $.parseJSON($('#regions option:selected').attr('data-areas'));
        var subRegionsHtml = '';
        $.each(subRegions, function(index,value){
            subRegionsHtml += '<option>'+value+'</option>';
        });
        subRegionsHtml +='<option value="any">Any</option>';
        $('#subRegions').html(subRegionsHtml);
    }
    function setSubcategoriesDropDown () {
        var subcategories = $.parseJSON($('#categories option:selected').attr('data-subcategories'));
        var subcategoriesHtml = '';
        $.each(subcategories, function(index,value){
            subcategoriesHtml += '<option>'+value+'</option>';
        });
        subcategoriesHtml += '<option value="any">Any</option>'
        $('#subcategories').html(subcategoriesHtml);
    }
</script>
<script src="/assets/js/custom.js"></script>
</body>
</html>
