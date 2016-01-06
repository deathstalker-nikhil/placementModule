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
                <div class="list-group">
                    <h4 style="text-align: center;">Notices</h4>
                    <a href="/merchant_coupons_issued" class="list-group-item side">Browse All</a>
                    <a href="/users_with_coupons" class="list-group-item side">Browse Relevant</a>
                    <a href="/users_with_coupons" class="list-group-item side">Search</a>
                    <a href="/users_with_coupons" class="list-group-item side">Upload Notice</a>
                    <a href="/users_with_coupons" class="list-group-item side">My Notice(s)</a>
                   <h4 style="text-align: center;">My Account</h4>
                    <a href="/merchant_coupons_issued" class="list-group-item side">My Profile</a>
                    <a href="/users_with_coupons" class="list-group-item side">Change Password</a>
                     <h4 style="text-align: center;">Placement Cell</h4>
                    <a href="/merchant_coupons_issued" class="list-group-item side">Campus Drive(s)</a>
                    <a href="/users_with_coupons" class="list-group-item side">Drive Results</a>
                    <a href="/users_with_coupons" class="list-group-item side">Add New Drive</a>
                     <a href="/users_with_coupons" class="list-group-item side">Add New Company</a>
                </div>
            </div>
            <!-- Content Column -->
            <div class="col-md-9">
                <h3>ADD COMPANY</h3>
                <form method="post" action="/home/addCoupon">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Company Name</label>
                        <input class="form-control" name="company_name" placeholder="Company Name">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Year of Establishment</label>
                        <input class="form-control" name="company_year_of_establishment" placeholder="Year of Establishment">
                    </div>
                </div>
                 <div class="col-md-8">
                    <div class="form-group">
                        <label>Founder</label>
                        <input class="form-control" name="company_founder" placeholder="Company Founder">
                    </div>
                </div>
                

             
                
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Company Details</label>
                        <textarea name="company_details" style="height: 250px;" class="form-control" placeholder="Company Details"></textarea>
                    </div>
                </div>
                
               

                <div class="col-md-12">
                    <div class="form-group">
                       
                         <input type="hidden" name="<?php echo $csrf_token_name ?>" value="<?php echo $csrf_token ?>">
                        <button type="submit" class="btn" style="background: #C80237; color: #fff; float: right;">Add Company</button>
                    </div>
                </div>

                </form>
                <h3>ADD CAMPUS DRIVE</h3>
                <form method="post" action="/home/addCoupon">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Company Name</label>
                        <select class="form-control" name="company_name" placeholder="Company Name">
                            <option>Tata Consultancy Services Ltd</option>
                            <option>Wipro</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Date of Drive-From</label>
                        <input type="date" class="form-control" name="company_year_of_establishment" placeholder="Year of Establishment">

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Date of Drive-To</label>
                        <input type="date" class="form-control" name="company_year_of_establishment" placeholder="Year of Establishment">

                    </div>
                </div>
             
                

             
                
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Drive Details</label>
                        <textarea name="company_details" style="height: 250px;" class="form-control" placeholder="Drive Details"></textarea>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label>Involved Department(s)</label>
                        <ul>
                            <li style="list-style:none; padding:auto;"><input type="checkbox" name="departments"> Department of Computer Science</li>
                            <li style="list-style:none;"><input type="checkbox" name="departments"> Department of Information Technology</li>
                             <li style="list-style:none;"><input type="checkbox" name="departments"> Department of Mechanical Engineering</li>
                              <li style="list-style:none;"><input type="checkbox" name="departments"> Department of Civil Engineering</li>
                               <li style="list-style:none;"><input type="checkbox" name="departments"> Department of Instrumental and Control</li>
                        </ul>
                    </div>
                </div>                
               

                <div class="col-md-12">
                    <div class="form-group">
                       
                         <input type="hidden" name="<?php echo $csrf_token_name ?>" value="<?php echo $csrf_token ?>">
                        <button type="submit" class="btn" style="background: #C80237; color: #fff; float: right;">Add Company</button>
                    </div>
                </div>

                </form>

            </div>
       
       
    </div>
</div>

               
<?=$foot?>
<input type="hidden" id="message" value="<?=$message?>">
<div class="modal fade" id="msgModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Message</h4>
            </div>
            <div class="modal-body">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>    
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