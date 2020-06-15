<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar1.php'; ?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container emp-profile">
            <form method="post">
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS52y5aInsxSm31CvHOFHWujqUx_wWTS9iM6s7BAm21oEN_RiGoog" alt=""/>
                            <div class="file btn btn-lg btn-primary">
                                Change Photo
                                <input type="file" name="file"/>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                                    <h5>
                                        Shreya Varma
                                    </h5>
                                    <h6>
                                        Web Developer and Designer,Banglore
                                    </h6>
                                 
                                 <p class="proile-rating">Contact : <span>shreyav@gmail.com</span></p>
                              
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" 
                                    role="tab" aria-controls="home" aria-selected="true">General Information</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" 
                                    role="tab" aria-controls="profile" aria-selected="false">Education</a>
                                </li>
                               
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <input type="submit" class="profile-edit-btn" name="btnAddMore" value="Edit Profile"/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-work">
                            <p>WORK LINK</p>
                            <a href="">Latest Jobs</a><br/>
                            <a href="">Applied Jobs</a><br/>
                            <a href="">Recruiter's view</a>
                           
                            <a href="">Update Resume</a><br/>
                            <a href="">Search</a><br/>
                            <p>LANGUAGES KNOWN</p>
                            <a href="">Telugu</a><br/>
                            <a href="">English</a><br/>
                            <a href="">Hindi</a>
                           
                          
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home"
                             role="tabpanel" aria-labelledby="home-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Complete Name</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Shreya Varma</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Date of Birth</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>05-16-2000</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Gender</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Female</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Experience</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>2 Years</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Preferred Location</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Hyderabad</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Industry Information</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>IT-Software/Services</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Functional Area</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>IT</p>
                                            </div>
                                        </div>
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" 
                            aria-labelledby="profile-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Degree</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>B.Tech</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Specialization Type</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Computers</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Name of School/University</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Jawaharlal Nehru University</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Year of Passing </label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>2014</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Full Time/Part Time</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Full Time</p>
                                            </div>
                                        </div>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </form>           
        </div>





      
      
       

<?php include 'includes/footer.php'; ?>