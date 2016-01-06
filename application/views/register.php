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
            <div class="col-md-12">

                <h3>USER REGISTERATION</h3>
                <form method="post" action="/home/addCoupon">
                  <div class="col-md-4">
                      <div class="form-group">
                          <label>University Roll Number</label>
                          <input class="form-control" name="university_roll_number" placeholder="University Roll Number">
                      </div>
                  </div>
                <div class="col-md-8">
                    <div class="form-group">
                        <label>Full Name</label>
                        <input class="form-control" name="full_name" placeholder="Full Name">
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="form-group">
                        <label>Father's Name</label>
                        <input class="form-control" name="fathers_name" placeholder="Father's Name">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>E-Mail Address</label>
                        <input class="form-control" name="email" placeholder="E-Mail Address">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Date of Birth</label>
                        <input type="date" class="form-control" name="date_of_birth" placeholder="Date of Birth">
                    </div>
                </div>
                 <div class="col-md-4">
                    <div class="form-group">
                        <label>Mobile Number</label>
                        <input class="form-control" name="mobile_number" placeholder="Mobile Number">
                    </div>
                </div>
                <div class="col-md-4">
                   <div class="form-group">
                       <label>Sex</label>
                       <select class="form-control" name="sex">
                          <option value="Male">Male</option>
                          <option value="Female">Female</option>
                       </select>
                   </div>
               </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label>Correspondence Address</label>
                        <textarea name="correspondence_address" class="form-control" placeholder="Correspondence Address"></textarea>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Permanent Address</label>
                        <textarea name="permanent_address" class="form-control" placeholder="Permanent Address"></textarea>
                    </div>
                </div>
                <div class="col-md-3">
                   <div class="form-group">
                       <label>Batch</label>
                       <select class="form-control" name="batch">
                          <option value="2012-2016">2012-2016</option>
                          <option value="2013-2017">2013-2017</option>
                       </select>
                   </div>
               </div>
               <div class="col-md-6">
                  <div class="form-group">
                      <label>Department</label>
                      <select class="form-control" name="department">
                         <option value="Computer Science and Engineering">Computer Science and Engineering</option>
                         <option value="Master of Computer Application">Master of Computer Application</option>
                      </select>
                  </div>
              </div>
              <div class="col-md-3">
                 <div class="form-group">
                     <label>10+2 Course</label>
                     <select class="form-control" name="course_after_10">
                        <option value="Intermediate">Intermediate</option>
                        <option value="Diploma">Diploma</option>
                     </select>
                 </div>
             </div>
             <div>
              <label>Class X Details</label>
              <br>
              <div class="col-md-2">
                 <div class="form-group">
                     <label>Year of Passing</label>
                     <select class="form-control" name="year_10">
                       <option value="2006">2006</option>
                       <option value="2007">2007</option>
                        <option value="2008">2008</option>
                        <option value="2009">2009</option>
                     </select>
                 </div>
             </div>
             <div class="col-md-3">
                <div class="form-group">
                    <label>Percentage Obtained</label>
                    <input class="form-control" name="percentage_10" placeholder="Percentage">
                </div>
            </div>
            <div class="col-md-7">
               <div class="form-group">
                   <label>Board</label>
                   <input class="form-control" name="borad_10" placeholder="Board">
               </div>
           </div>
         </div>
         <div>
          <label>Class XII/Intermediate Details</label>
          <br>
          <div class="col-md-2">
             <div class="form-group">
                 <label>Year of Passing</label>
                 <select class="form-control" name="year_10">
                   <option value="2006">2006</option>
                   <option value="2007">2007</option>
                    <option value="2008">2008</option>
                    <option value="2009">2009</option>
                 </select>
             </div>
         </div>
         <div class="col-md-3">
            <div class="form-group">
                <label>Percentage Obtained</label>
                <input class="form-control" name="percentage_10" placeholder="Percentage">
            </div>
        </div>
        <div class="col-md-7">
           <div class="form-group">
               <label>Board</label>
               <input class="form-control" name="borad_10" placeholder="Board">
           </div>
       </div>
     </div>
     <div>
      <label>Diploma Details</label>
      <br>
      <div class="col-md-2">
         <div class="form-group">
             <label>Year of Passing</label>
             <select class="form-control" name="year_10">
               <option value="2006">2006</option>
               <option value="2007">2007</option>
                <option value="2008">2008</option>
                <option value="2009">2009</option>
             </select>
         </div>
     </div>
     <div class="col-md-3">
        <div class="form-group">
            <label>Percentage Obtained</label>
            <input class="form-control" name="percentage_10" placeholder="Percentage">
        </div>
    </div>
    <div class="col-md-7">
       <div class="form-group">
           <label>Board</label>
           <input class="form-control" name="borad_10" placeholder="Board">
       </div>
   </div>
 </div>
 <div>
  <label>Graduation Details</label>
  <br>
  <div class="col-md-2">
     <div class="form-group">
         <label>Year of Passing</label>
         <select class="form-control" name="year_10">
           <option value="2006">2006</option>
           <option value="2007">2007</option>
            <option value="2008">2008</option>
            <option value="2009">2009</option>
         </select>
     </div>
 </div>
 <div class="col-md-3">
    <div class="form-group">
        <label>Percentage Obtained</label>
        <input class="form-control" name="percentage_10" placeholder="Percentage">
    </div>
</div>
<div class="col-md-7">
   <div class="form-group">
       <label>Course</label>
       <input class="form-control" name="borad_10" placeholder="Board">
   </div>
</div>
</div>
<div class="col-md-12">
  <label>Current Course Percentage (semester-wise)</label><br>
<div class="col-md-2">
   <div class="form-group">
       <label>Semester-1</label>
       <input class="form-control" name="sem1">
   </div>
</div>
<div class="col-md-2">
   <div class="form-group">
       <label>Semester-2</label>
       <input class="form-control" name="sem1">
   </div>
</div>
<div class="col-md-2">
   <div class="form-group">
       <label>Semester-3</label>
       <input class="form-control" name="sem1">
   </div>
</div>
<div class="col-md-2">
   <div class="form-group">
       <label>Semester-4</label>
       <input class="form-control" name="sem1">
   </div>
</div>
<div class="col-md-2">
   <div class="form-group">
       <label>Semester-5</label>
       <input class="form-control" name="sem1">
   </div>
</div>
<div class="col-md-2">
   <div class="form-group">
       <label>Semester-6</label>
       <input class="form-control" name="sem1">
   </div>
</div>
<div class="col-md-2">
   <div class="form-group">
       <label>Semester-7</label>
       <input class="form-control" name="sem1">
   </div>
</div>
<div class="col-md-2">
   <div class="form-group">
       <label>Semester-8</label>
       <input class="form-control" name="sem1">
   </div>
</div>

</div>
<br>
<div class="col-md-3">
   <div class="form-group">
       <label>Current Number of Backlogs</label>
       <input type="number" class="form-control" name="backlogs" placeholder="Current Number of Backlogs">
   </div>
</div>
<div class="col-md-3">
   <div class="form-group">
       <label>Gap in Education (Years)</label>
       <input type="number" class="form-control" name="education_gap" placeholder="Gap in Education (Years)">
   </div>
</div>


                <div class="col-md-12">
                    <div class="form-group">

                         <input type="hidden" name="<?php echo $csrf_token_name ?>" value="<?php echo $csrf_token ?>">
                        <button type="submit" class="btn" style="background: #C80237; color: #fff; float: right;">Register</button>
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
