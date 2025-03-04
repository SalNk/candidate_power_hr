<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- META -->
      <meta charset="utf-8">
      <meta charset="utf-8">
      <title>One Page | Tailwick - Admin & Dashboard Template</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
      <meta content="Minimal Admin & Dashboard Template" name="description">
      <meta content="Themesdesign" name="author">

      <!-- FAVICONS ICON -->
      <link rel="icon" href="{{ URL::asset('build/images/favicon.ico') }}" type="image/x-icon" />
      <link rel="shortcut icon" type="image/x-icon" href="{{ URL::asset('candidates/images/favicon.png') }}" />
 

      @include('layouts.candidates.head-css')
   </head>
   <body>
      <!-- LOADING AREA START ===== -->
      <div class="loading-area">
         <div class="loading-box"></div>
         <div class="loading-pic">
            <div class="wrapper">
               <div class="cssload-loader"></div>
            </div>
         </div>
      </div>
      <!-- LOADING AREA  END ====== -->
      <div class="page-wraper">
         <!-- HEADER START -->
         <header  class="site-header header-style-3 mobile-sider-drawer-menu">
            <div class="sticky-header main-bar-wraper  navbar-expand-lg">
               <div class="main-bar">
                  <div class="container-fluid clearfix">
                     <div class="logo-header">
                        <div class="logo-header-inner logo-header-one">
                           <a href="index.html">
                           <img src="{{ URL::asset('build/images/logo-dark.png') }}" alt=""/>
                           </a>
                        </div>
                     </div>
                     <!-- NAV Toggle Button -->
                     <button id="mobile-side-drawer" data-target=".header-nav" data-toggle="collapse" type="button" class="navbar-toggler collapsed">
                     <span class="sr-only">Toggle navigation</span>
                     <span class="icon-bar icon-bar-first"></span>
                     <span class="icon-bar icon-bar-two"></span>
                     <span class="icon-bar icon-bar-three"></span>
                     </button> 
                     <!-- MAIN Vav -->
                     <div class="nav-animation header-nav navbar-collapse collapse d-flex justify-content-center">
                        <ul class=" nav navbar-nav">
                           <li class="has-mega-menu">
                              <a href="javascript:;">Home</a>
                              <ul class="mega-menu">
                                 <li>
                                    <ul>
                                       <li><a href="index.html">Home-1</a></li>
                                       <li><a href="index-2.html">Home-2</a></li>
                                       <li><a href="index-3.html">Home-3</a></li>
                                       <li><a href="index-4.html">Home-4</a></li>
                                       <li><a href="index-5.html">Home-5</a></li>
                                    </ul>
                                 </li>
                                 <li>
                                    <ul>
                                       <li><a href="index-6.html">Home-6</a></li>
                                       <li><a href="index-7.html">Home-7</a></li>
                                       <li><a href="index-8.html">Home-8</a></li>
                                       <li><a href="index-9.html">Home-9</a></li>
                                       <li><a href="index-10.html">Home-10</a></li>
                                    </ul>
                                 </li>
                                 <li>
                                    <ul>
                                       <li><a href="index-11.html">Home-11</a></li>
                                       <li><a href="index-12.html">Home-12</a></li>
                                       <li><a href="index-13.html">Home-13</a></li>
                                       <li><a href="index-14.html">Home-14</a></li>
                                       <li><a href="index-15.html">Home-15</a></li>
                                    </ul>
                                 </li>
                                 <li>
                                    <ul>
                                       <li><a href="index-16.html">Home-16</a></li>
                                       <li><a href="index-17.html">Home-17</a></li>
                                       <li><a href="index-18.html">Home-18</a></li>
                                    </ul>
                                 </li>
                              </ul>
                           </li>
                           <li class="has-child">
                              <a href="javascript:;">Jobs</a>
                              <ul class="sub-menu">
                                 <li><a href="job-grid.html">Jobs Grid</a></li>
                                 <li><a href="job-grid-with-map.html">Jobs Grid with Map</a></li>
                                 <li><a href="job-list.html">Jobs List</a></li>
                                 <li class="has-child">
                                    <a href="javascript:;">Job Detail</a>
                                    <ul class="sub-menu">
                                       <li><a href="job-detail.html">Detail 1</a>
                                       <li><a href="job-detail-v2.html">Detail 2 </a>
                                    </ul>
                                 </li>
                                 <li><a href="apply-job.html">Apply Jobs</a></li>
                              </ul>
                           </li>
                           <li class="has-child">
                              <a href="javascript:;">Employers</a>
                              <ul class="sub-menu">
                                 <li><a href="employer-grid.html">Employers Grid</a></li>
                                 <li><a href="employer-list.html">Employers List</a></li>
                                 <li class="has-child">
                                    <a href="javascript:;">Employers Detail</a>
                                    <ul class="sub-menu">
                                       <li><a href="employer-detail.html">Detail 1</a>
                                       <li><a href="employer-detail-v2.html">Detail 2</a>
                                    </ul>
                                 </li>
                                 <li><a href="employer-profile.html">Profile</a></li>
                                 <li><a href="employer-resume.html">Resume</a></li>
                                 <li><a href="employer-manage-jobs.html">Manage Jobs</a></li>
                                 <li><a href="employer-post-job.html">Post A Jobs</a></li>
                                 <li><a href="employer-transaction.html">Transaction</a></li>
                                 <li><a href="candidate-grid.html">Browse Candidates</a></li>
                                 <li><a href="employer-change-password.html">Change Password</a></li>
                                 <li><a href="employer-account-fresher.html">Register Fresher</a></li>
                                 <li><a href="employer-account-professional.html">Register Professionals</a></li>
                              </ul>
                           </li>
                           <li class="has-child">
                              <a href="javascript:;">Pages</a>
                              <ul class="sub-menu">
                                 <li><a href="about-1.html">About Us</a></li>
                                 <li><a href="pricing.html">Pricing</a></li>
                                 <li><a href="error-404.html">Error-404</a></li>
                                 <li><a href="faq.html">FAQ's</a></li>
                                 <li><a href="contact.html">Contact Us</a></li>
                                 <li><a href="under-maintenance.html">Under Maintenance</a></li>
                                 <li><a href="coming-soon.html">Coming soon</a></li>
                                 <li><a href="login.html">Login</a></li>
                                 <li><a href="after-login.html">After Login</a></li>
                                 <li><a href="icons.html">Icons</a></li>
                              </ul>
                           </li>
                           <li class="has-child">
                              <a href="javascript:;">Candidates</a>
                              <ul class="sub-menu">
                                 <li><a href="candidate-grid.html">Candidates Grid</a></li>
                                 <li><a href="candidate-list.html">Candidates List</a></li>
                                 <li class="has-child">
                                    <a href="javascript:;">Candidate Detail</a>
                                    <ul class="sub-menu">
                                       <li><a href="candidate-detail.html">Detail 1</a>
                                       <li><a href="candidate-detail-v2.html">Detail 2</a>
                                    </ul>
                                 </li>
                                 <li><a href="candidate-dashboard.html">Dashboard</a></li>
                                 <li><a href="candidate-profile.html">My Pfofile</a></li>
                                 <li><a href="candidate-jobs-applied.html">Applied Jobs</a></li>
                                 <li><a href="candidate-my-resume.html">My Resume</a></li>
                                 <li><a href="candidate-saved-jobs.html">Saved Jobs</a></li>
                                 <li><a href="candidate-cv-manager.html">CV Manager</a></li>
                                 <li><a href="candidate-job-alert.html">Job Alerts</a></li>
                                 <li><a href="candidate-change-password.html">Change Passeord</a></li>
                                 <li><a href="candidate-chat.html">Chat</a></li>
                              </ul>
                           </li>
                           <li class="has-child">
                              <a href="javascript:;">Blog</a>
                              <ul class="sub-menu">
                                 <li><a href="blog.html">Blog</a></li>
                                 <li><a href="blog-grid.html">Blog Grid</a></li>
                                 <li><a href="blog-grid-2.html">Blog Grid-2</a></li>
                                 <li><a href="blog-list.html">Blog List</a></li>
                                 <li><a href="blog-single.html">Blog Detail</a></li>
                              </ul>
                           </li>
                        </ul>
                     </div>
                     <!-- Header Right Section-->
                     <div class="extra-nav header-2-nav">
                        <div class="extra-cell">
                           <div class="header-search">
                              <a href="#search" class="header-search-icon"><i class="feather-search"></i></a>
                           </div>
                        </div>
                        <div class="extra-cell">
                           <div class="header-nav-btn-section">
                              <div class="twm-nav-btn-left">
                                 <a class="twm-nav-sign-up" data-bs-toggle="modal" href="#sign_up_popup" role="button">
                                 <i class="feather-log-in"></i> Sign Up
                                 </a>
                              </div>
                              <div class="twm-nav-btn-right">
                                 <a href="dash-post-job.html" class="twm-nav-post-a-job">
                                 <i class="feather-briefcase"></i> Post a job
                                 </a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- SITE Search -->
               <div id="search">
                  <span class="close"></span>
                  <form role="search" id="searchform" action="/search" method="get" class="radius-xl">
                     <input class="form-control" value="" name="q" type="search" placeholder="Type to search"/>
                     <span class="input-group-append">
                     <button type="button" class="search-btn">
                     <i class="fa fa-paper-plane"></i>
                     </button>
                     </span>
                  </form>
               </div>
            </div>
         </header>
         <!-- HEADER END -->
         <!-- CONTENT START -->
         <div class="page-content">
            <!--Banner Start-->
            <div class="twm-home1-banner-section site-bg-gray bg-cover" style="background-image:url(images/main-slider/slider1/bg1.jpg)">
               <div class="row">
                  <!--Left Section-->
                  <div class="col-xl-6 col-lg-6 col-md-12">
                     <div class="twm-bnr-left-section">
                        <div class="twm-bnr-title-small">We Have <span class="site-text-primary">208,000+</span> Live Jobs</div>
                        <div class="twm-bnr-title-large">Trouvez <span class="site-text-primary">l'emploi</span> qui correspond à votre vie</div>
                        <div class="twm-bnr-discription">Type your keyword, then click search to find your perfect job.</div>
                        <div class="twm-bnr-search-bar">
                           <form>
                              <div class="row">
                                 <!--Title-->
                                 <div class="form-group col-xl-3 col-lg-6 col-md-6">
                                    <label>What</label>
                                    <select class="wt-search-bar-select selectpicker"  data-live-search="true" title="" id="j-Job_Title" data-bv-field="size">
                                       <option disabled selected value="">Select Category</option>
                                       <option selected>Job Title</option>
                                       <option>Web Designer</option>
                                       <option>Developer</option>
                                       <option>Acountant</option>
                                    </select>
                                 </div>
                                 <!--All Category-->
                                 <div class="form-group col-xl-3 col-lg-6 col-md-6">
                                    <label>Type</label>
                                    <select class="wt-search-bar-select selectpicker"  data-live-search="true" title="" id="j-All_Category" data-bv-field="size">
                                       <option disabled selected value="">Select Category</option>
                                       <option selected>All Category</option>
                                       <option>Web Designer</option>
                                       <option>Developer</option>
                                       <option>Acountant</option>
                                    </select>
                                 </div>
                                 <!--Location-->
                                 <div class="form-group col-xl-3 col-lg-6 col-md-6">
                                    <label>Location</label>
                                    <div class="twm-inputicon-box">
                                       <input name="username" type="text" required class="form-control" placeholder="Search...">
                                       <i class="twm-input-icon fas fa-map-marker-alt"></i>
                                    </div>
                                 </div>
                                 <!--Find job btn-->
                                 <div class="form-group col-xl-3 col-lg-6 col-md-6">
                                    <button type="button" class="site-button">Find Job</button>
                                 </div>
                              </div>
                           </form>
                        </div>
                        <div class="twm-bnr-popular-search">
                           <span class="twm-title">Popular Searches:</span>
                           <a href="job-list.html">Developer</a> ,
                           <a href="job-list.html">Designer</a> ,
                           <a href="job-list.html">Architect</a> ,
                           <a href="job-list.html">Engineer</a> ...
                        </div>
                     </div>
                  </div>
                  <!--right Section-->
                  <div class="col-xl-6 col-lg-6 col-md-12 twm-bnr-right-section">
                     <div class="twm-bnr-right-content">
                        <div class="twm-img-bg-circle-area">
                           <div class="twm-img-bg-circle1 rotate-center"><span></span></div>
                           <div class="twm-img-bg-circle2 rotate-center-reverse"><span></span></div>
                           <div class="twm-img-bg-circle3"><span></span></div>
                        </div>
                        <div class="twm-bnr-right-carousel">
                           <div class="owl-carousel twm-h1-bnr-carousal">
                              <div class="item">
                                 <div class="slide-img">
                                    <img src="{{ URL::asset('candidates/images/main-slider/slider1/r-img1.png') }}" alt="#" />
                                 </div>
                              </div>
                              <div class="item">
                                 <div class="slide-img">
                                    <div class="slide-img">
                                       <img src="{{ URL::asset('candidates/images/main-slider/slider1/r-img2.png') }}" alt="#" />
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="twm-bnr-blocks-position-wrap">
                              <!--icon-block-1-->
                              <div class="twm-bnr-blocks twm-bnr-blocks-position-1">
                                 <div class="twm-icon">
                                    <img src="{{ URL::asset('candidates/images/main-slider/slider1/icon-1.png') }}" alt="" />
                                 </div>
                                 <div class="twm-content">
                                    <div class="tw-count-number text-clr-sky">
                                       <span class="counter">12</span>K+
                                    </div>
                                    <p class="icon-content-info">Companies Jobs</p>
                                 </div>
                              </div>
                              <!--icon-block-2-->
                              <div class="twm-bnr-blocks twm-bnr-blocks-position-2">
                                 <div class="twm-icon">
                                    <img src="{{ URL::asset('candidates/images/main-slider/slider1/icon-2.png') }}" alt="" />
                                 </div>
                                 <div class="twm-content">
                                    <div class="tw-count-number text-clr-pink">
                                       <span class="counter">98</span> +
                                    </div>
                                    <p class="icon-content-info">Job For Countries </p>
                                 </div>
                              </div>
                              <!--icon-block-3-->
                              <div class="twm-bnr-blocks-3 twm-bnr-blocks-position-3">
                                 <div class="twm-pics">
                                    <span><img src="{{ URL::asset('candidates/images/main-slider/slider1/user/u-1.jpg') }}" alt="" /></span>
                                    <span><img src="{{ URL::asset('candidates/images/main-slider/slider1/user/u-2.jpg') }}" alt="" /></span>
                                    <span><img src="{{ URL::asset('candidates/images/main-slider/slider1/user/u-3.jpg') }}" alt="" /></span>
                                    <span><img src="{{ URL::asset('candidates/images/main-slider/slider1/user/u-4.jpg') }}" alt="" /></span>
                                    <span><img src="{{ URL::asset('candidates/images/main-slider/slider1/user/u-5.jpg') }}" alt="" /></span>
                                    <span><img src="{{ URL::asset('candidates/images/main-slider/slider1/user/u-6.jpg') }}" alt="" /></span>
                                 </div>
                                 <div class="twm-content">
                                    <div class="tw-count-number text-clr-green">
                                       <span class="counter">3</span>K+
                                    </div>
                                    <p class="icon-content-info">Jobs Done</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!--Samll Ring Left-->
                        <div class="twm-small-ring-l slide-top-animation"></div>
                        <div class="twm-small-ring-2 slide-top-animation"></div>
                     </div>
                  </div>
               </div>
               <div class="twm-gradient-text">
                  Jobs
               </div>
            </div>
            <!--Banner End-->
            <!-- HOW IT WORK SECTION START -->
            <div class="section-full p-t120 p-b90 site-bg-white twm-how-it-work-area">
               <div class="container">
                  <!-- TITLE START-->
                  <div class="section-head center wt-small-separator-outer">
                     <div class="wt-small-separator site-text-primary">
                        <div>Working Process</div>
                     </div>
                     <h2 class="wt-title">How It Works</h2>
                  </div>
                  <!-- TITLE END-->
                  <div class="twm-how-it-work-section">
                     <div class="row">
                        <div class="col-xl-4 col-lg-6 col-md-6">
                           <div class="twm-w-process-steps">
                              <span class="twm-large-number">01</span>
                              <div class="twm-w-pro-top bg-clr-sky">
                                 <div class="twm-media">
                                    <span><img src="{{ URL::asset('candidates/images/work-process/icon1.png') }}" alt="icon1" /></span>
                                 </div>
                                 <h4 class="twm-title">Register<br>Your Account</h4>
                              </div>
                              <p>You need to create an account to find the best and preferred job.</p>
                           </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6">
                           <div class="twm-w-process-steps">
                              <span class="twm-large-number">02</span>
                              <div class="twm-w-pro-top bg-clr-pink">
                                 <div class="twm-media">
                                    <span><img src="{{ URL::asset('candidates/images/work-process/icon2.png') }}" alt="icon1" /></span>
                                 </div>
                                 <h4 class="twm-title">Apply <br>
                                    For Dream Job
                                 </h4>
                              </div>
                              <p>You need to create an account to find the best and preferred job.</p>
                           </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6">
                           <div class="twm-w-process-steps">
                              <span class="twm-large-number">03</span>
                              <div class="twm-w-pro-top bg-clr-green">
                                 <div class="twm-media">
                                    <span><img src="{{ URL::asset('candidates/images/work-process/icon3.png') }}" alt="icon1" /></span>
                                 </div>
                                 <h4 class="twm-title">Upload <br>Your Resume</h4>
                              </div>
                              <p>You need to create an account to find the best and preferred job.</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- HOW IT WORK SECTION END -->
            <!-- JOBS CATEGORIES SECTION START -->
            <div class="section-full p-t120 p-b90 site-bg-gray twm-job-categories-area">
               <div class="container">
                  <div class="wt-separator-two-part">
                     <div class="row wt-separator-two-part-row">
                        <div class="col-xl-5 col-lg-5 col-md-12 wt-separator-two-part-left">
                           <!-- TITLE START-->
                           <div class="section-head left wt-small-separator-outer">
                              <div class="wt-small-separator site-text-primary">
                                 <div>Jobs by Categories</div>
                              </div>
                              <h2 class="wt-title">Choose Your Desire Category</h2>
                           </div>
                           <!-- TITLE END-->
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-12 wt-separator-two-part-right">
                           <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry the standard dummy text ever since the  when an printer took.</p>
                        </div>
                     </div>
                  </div>
                  <div class="twm-job-categories-section">
                     <div class="job-categories-style1 m-b30">
                        <div class="owl-carousel job-categories-carousel owl-btn-left-bottom ">
                           <!-- COLUMNS 1 --> 
                           <div class="item ">
                              <div class="job-categories-block">
                                 <div class="twm-media">
                                    <div class="flaticon-dashboard"></div>
                                 </div>
                                 <div class="twm-content">
                                    <div class="twm-jobs-available">9,185 Jobs</div>
                                    <a href="job-detail.html">Business Development</a>
                                 </div>
                              </div>
                           </div>
                           <!-- COLUMNS 2 --> 
                           <div class="item ">
                              <div class="job-categories-block">
                                 <div class="twm-media">
                                    <div class="flaticon-project-management"></div>
                                 </div>
                                 <div class="twm-content">
                                    <div class="twm-jobs-available">3,205 Jobs</div>
                                    <a href="job-detail.html">Project Management</a>
                                 </div>
                              </div>
                           </div>
                           <!-- COLUMNS 3 --> 
                           <div class="item ">
                              <div class="job-categories-block">
                                 <div class="twm-media">
                                    <div class="flaticon-note"></div>
                                 </div>
                                 <div class="twm-content">
                                    <div class="twm-jobs-available">2,100 Jobs</div>
                                    <a href="job-detail.html">Content Writer</a>
                                 </div>
                              </div>
                           </div>
                           <!-- COLUMNS 4 --> 
                           <div class="item ">
                              <div class="job-categories-block">
                                 <div class="twm-media">
                                    <div class="flaticon-customer-support"></div>
                                 </div>
                                 <div class="twm-content">
                                    <div class="twm-jobs-available">1,500 Jobs</div>
                                    <a href="job-detail.html">Costomer Services</a>
                                 </div>
                              </div>
                           </div>
                           <!-- COLUMNS 5 --> 
                           <div class="item ">
                              <div class="job-categories-block">
                                 <div class="twm-media">
                                    <div class="flaticon-bars"></div>
                                 </div>
                                 <div class="twm-content">
                                    <div class="twm-jobs-available">9,185 Jobs</div>
                                    <a href="job-detail.html">Accounting / Finance</a>
                                 </div>
                              </div>
                           </div>
                           <!-- COLUMNS 6 --> 
                           <div class="item ">
                              <div class="job-categories-block">
                                 <div class="twm-media">
                                    <div class="flaticon-user"></div>
                                 </div>
                                 <div class="twm-content">
                                    <div class="twm-jobs-available">3,205 Jobs</div>
                                    <a href="job-detail.html">Marketing</a>
                                 </div>
                              </div>
                           </div>
                           <!-- COLUMNS 7 --> 
                           <div class="item ">
                              <div class="job-categories-block">
                                 <div class="twm-media">
                                    <div class="flaticon-computer"></div>
                                 </div>
                                 <div class="twm-content">
                                    <div class="twm-jobs-available">2,100 Jobs</div>
                                    <a href="job-detail.html">Design & Art</a>
                                 </div>
                              </div>
                           </div>
                           <!-- COLUMNS 8 --> 
                           <div class="item ">
                              <div class="job-categories-block">
                                 <div class="twm-media">
                                    <div class="flaticon-coding"></div>
                                 </div>
                                 <div class="twm-content">
                                    <div class="twm-jobs-available">1,500 Jobs</div>
                                    <a href="job-detail.html">Web Development</a>
                                 </div>
                              </div>
                           </div>
                           <!-- COLUMNS 9 --> 
                           <div class="item ">
                              <div class="job-categories-block">
                                 <div class="twm-media">
                                    <div class="flaticon-hr"></div>
                                 </div>
                                 <div class="twm-content">
                                    <div class="twm-jobs-available">9,185 Jobs</div>
                                    <a href="job-detail.html">Human Resource</a>
                                 </div>
                              </div>
                           </div>
                           <!-- COLUMNS 10 --> 
                           <div class="item ">
                              <div class="job-categories-block">
                                 <div class="twm-media">
                                    <div class="flaticon-healthcare"></div>
                                 </div>
                                 <div class="twm-content">
                                    <div class="twm-jobs-available">3,205 Jobs</div>
                                    <a href="job-detail.html">Health and Care </a>
                                 </div>
                              </div>
                           </div>
                           <!-- COLUMNS 11 --> 
                           <div class="item ">
                              <div class="job-categories-block">
                                 <div class="twm-media">
                                    <div class="flaticon-repair"></div>
                                 </div>
                                 <div class="twm-content">
                                    <div class="twm-jobs-available">2,100 Jobs</div>
                                    <a href="job-detail.html">Automotive Jobs</a>
                                 </div>
                              </div>
                           </div>
                           <!-- COLUMNS 12 --> 
                           <div class="item ">
                              <div class="job-categories-block">
                                 <div class="twm-media">
                                    <div class="flaticon-teacher"></div>
                                 </div>
                                 <div class="twm-content">
                                    <div class="twm-jobs-available">1,500 Jobs</div>
                                    <a href="job-detail.html">Teaching / Education</a>
                                 </div>
                              </div>
                           </div>
                           <!-- COLUMNS 13 --> 
                           <div class="item ">
                              <div class="job-categories-block">
                                 <div class="twm-media">
                                    <div class="flaticon-bank"></div>
                                 </div>
                                 <div class="twm-content">
                                    <div class="twm-jobs-available">9,185 Jobs</div>
                                    <a href="job-detail.html">Banking</a>
                                 </div>
                              </div>
                           </div>
                           <!-- COLUMNS 14 --> 
                           <div class="item ">
                              <div class="job-categories-block">
                                 <div class="twm-media">
                                    <div class="flaticon-deal"></div>
                                 </div>
                                 <div class="twm-content">
                                    <div class="twm-jobs-available">3,205 Jobs</div>
                                    <a href="job-detail.html">Sales Marketing</a>
                                 </div>
                              </div>
                           </div>
                           <!-- COLUMNS 15 --> 
                           <div class="item ">
                              <div class="job-categories-block">
                                 <div class="twm-media">
                                    <div class="flaticon-tray"></div>
                                 </div>
                                 <div class="twm-content">
                                    <div class="twm-jobs-available">2,100 Jobs</div>
                                    <a href="job-detail.html">Restaurant / Food</a>
                                 </div>
                              </div>
                           </div>
                           <!-- COLUMNS 16 --> 
                           <div class="item ">
                              <div class="job-categories-block">
                                 <div class="twm-media">
                                    <div class="flaticon-tower"></div>
                                 </div>
                                 <div class="twm-content">
                                    <div class="twm-jobs-available">1,500 Jobs</div>
                                    <a href="job-detail.html">Telecommunications</a>
                                 </div>
                              </div>
                           </div>
                           <!-- COLUMNS 17 --> 
                           <div class="item ">
                              <div class="job-categories-block">
                                 <div class="twm-media">
                                    <div class="flaticon-lotus"></div>
                                 </div>
                                 <div class="twm-content">
                                    <div class="twm-jobs-available">9,185 Jobs</div>
                                    <a href="job-detail.html">Fitness Trainer</a>
                                 </div>
                              </div>
                           </div>
                           <!-- COLUMNS 18 --> 
                           <div class="item ">
                              <div class="job-categories-block">
                                 <div class="twm-media">
                                    <div class="flaticon-camera-tripod"></div>
                                 </div>
                                 <div class="twm-content">
                                    <div class="twm-jobs-available">3,205 Jobs</div>
                                    <a href="job-detail.html">Photography</a>
                                 </div>
                              </div>
                           </div>
                           <!-- COLUMNS 19 --> 
                           <div class="item ">
                              <div class="job-categories-block">
                                 <div class="twm-media">
                                    <div class="flaticon-multimedia"></div>
                                 </div>
                                 <div class="twm-content">
                                    <div class="twm-jobs-available">2,100 Jobs</div>
                                    <a href="job-detail.html">Audio + Music</a>
                                 </div>
                              </div>
                           </div>
                           <!-- COLUMNS 20 --> 
                           <div class="item ">
                              <div class="job-categories-block">
                                 <div class="twm-media">
                                    <div class="flaticon-contract"></div>
                                 </div>
                                 <div class="twm-content">
                                    <div class="twm-jobs-available">1,500 Jobs</div>
                                    <a href="job-detail.html">Real estate</a>
                                 </div>
                              </div>
                           </div>
                           <!-- COLUMNS 21 --> 
                           <div class="item ">
                              <div class="job-categories-block">
                                 <div class="twm-media">
                                    <div class="flaticon-engineer"></div>
                                 </div>
                                 <div class="twm-content">
                                    <div class="twm-jobs-available">9,185 Jobs</div>
                                    <a href="job-detail.html">Construction</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="text-right job-categories-btn">
                        <a href="job-grid.html" class=" site-button">All Categories</a>
                     </div>
                  </div>
               </div>
            </div>
            <!-- JOBS CATEGORIES SECTION END -->
            <!-- EXPLORE NEW LIFE START -->
            <div class="section-full p-t120 p-b120 twm-explore-area bg-cover " style="background-image: {{ URL::asset('candidates/images/images/background/bg-1.jpg') }};">
               <div class="container">
                  <div class="section-content">
                     <div class="row">
                        <div class="col-lg-4 col-md-12">
                           <div class="twm-explore-media-wrap">
                              <div class="twm-media">
                                 <img src="{{ URL::asset('candidates/images/gir-large.png') }}" alt="" />
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-8 col-md-12">
                           <div class="twm-explore-content-outer">
                              <div class="twm-explore-content">
                                 <div class="twm-l-line-1"></div>
                                 <div class="twm-l-line-2"></div>
                                 <div class="twm-r-circle-1"></div>
                                 <div class="twm-r-circle-2"></div>
                                 <div class="twm-title-small">Explore New Life</div>
                                 <div class="twm-title-large">
                                    <h2>Don’t just find. be found 
                                       put your CV in front of 
                                       great employers 
                                    </h2>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry the standard dummy text ever since the  when an printer took.</p>
                                 </div>
                                 <div class="twm-upload-file">
                                    <button type="button" class="site-button">Upload Your Resume <i class="feather-upload"></i></button>
                                 </div>
                              </div>
                              <div class="twm-bold-circle-right"></div>
                              <div class="twm-bold-circle-left"></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- EXPLORE NEW LIFE END -->
            <!-- TOP COMPANIES START -->
            <div class="section-full p-t120  site-bg-white twm-companies-wrap">
               <!-- TITLE START-->
               <div class="section-head center wt-small-separator-outer">
                  <div class="wt-small-separator site-text-primary">
                     <div>Top Companies</div>
                  </div>
                  <h2 class="wt-title">Get hired in top companies</h2>
               </div>
               <!-- TITLE END-->
               <div class="container">
                  <div class="section-content">
                     <div class="owl-carousel home-client-carousel2 owl-btn-vertical-center">
                        <div class="item">
                           <div class="ow-client-logo">
                              <div class="client-logo client-logo-media">
                                 <a href="employer-list.html"><img src="{{ URL::asset('candidates/images/client-logo/w1.png') }}" alt="" /></a>
                              </div>
                           </div>
                        </div>
                        <div class="item">
                           <div class="ow-client-logo">
                              <div class="client-logo client-logo-media">
                                 <a href="employer-list.html"><img src="{{ URL::asset('candidates/images/client-logo/w2.png') }}" alt="" /></a>
                              </div>
                           </div>
                        </div>
                        <div class="item">
                           <div class="ow-client-logo">
                              <div class="client-logo client-logo-media">
                                 <a href="employer-list.html"><img src="{{ URL::asset('candidates/images/client-logo/w3.png') }}" alt="" /></a>
                              </div>
                           </div>
                        </div>
                        <div class="item">
                           <div class="ow-client-logo">
                              <div class="client-logo client-logo-media">
                                 <a href="employer-list.html"><img src="{{ URL::asset('candidates/images/client-logo/w4.png') }}" alt="" /></a>
                              </div>
                           </div>
                        </div>
                        <div class="item">
                           <div class="ow-client-logo">
                              <div class="client-logo client-logo-media">
                                 <a href="employer-list.html"><img src="{{ URL::asset('candidates/images/client-logo/w5.png') }}" alt="" /></a>
                              </div>
                           </div>
                        </div>
                        <div class="item">
                           <div class="ow-client-logo">
                              <div class="client-logo client-logo-media">
                                 <a href="employer-list.html"><img src="{{ URL::asset('candidates/images/client-logo/w6.png') }}" alt="" /></a>
                              </div>
                           </div>
                        </div>
                        <div class="item">
                           <div class="ow-client-logo">
                              <div class="client-logo client-logo-media">
                                 <a href="employer-list.html"><img src="{{ URL::asset('candidates/images/client-logo/w1.png') }}" alt="" /></a>
                              </div>
                           </div>
                        </div>
                        <div class="item">
                           <div class="ow-client-logo">
                              <div class="client-logo client-logo-media">
                                 <a href="employer-list.html"><img src="{{ URL::asset('candidates/images/client-logo/w2.png') }}" alt="" /></a>
                              </div>
                           </div>
                        </div>
                        <div class="item">
                           <div class="ow-client-logo">
                              <div class="client-logo client-logo-media">
                                 <a href="employer-list.html"><img src="{{ URL::asset('candidates/images/client-logo/w3.png') }}" alt="" /></a>
                              </div>
                           </div>
                        </div>
                        <div class="item">
                           <div class="ow-client-logo">
                              <div class="client-logo client-logo-media">
                                 <a href="employer-list.html"><img src="{{ URL::asset('candidates/images/client-logo/w5.png') }}" alt="" /></a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="twm-company-approch-outer">
                  <div class="twm-company-approch">
                     <div class="row">
                        <!--block 1-->
                        <div class="col-lg-4 col-md-12">
                           <div class="counter-outer-two">
                              <div class="icon-content">
                                 <div class="tw-count-number text-clr-sky">
                                    <span class="counter">5</span>M+
                                 </div>
                                 <p class="icon-content-info">Million daily active users</p>
                              </div>
                           </div>
                        </div>
                        <!--block 2-->
                        <div class="col-lg-4 col-md-12">
                           <div class="counter-outer-two">
                              <div class="icon-content">
                                 <div class="tw-count-number text-clr-pink">
                                    <span class="counter">9</span>K+
                                 </div>
                                 <p class="icon-content-info">Open job positions</p>
                              </div>
                           </div>
                        </div>
                        <!--block 3-->
                        <div class="col-lg-4 col-md-12">
                           <div class="counter-outer-two">
                              <div class="icon-content">
                                 <div class="tw-count-number text-clr-green">
                                    <span class="counter">2</span>M+
                                 </div>
                                 <p class="icon-content-info">Million stories shared</p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- TOP COMPANIES END -->
            <!-- JOB POST START -->
            <div class="section-full p-t120 p-b90 site-bg-light-purple twm-bg-ring-wrap">
               <div class="twm-bg-ring-right"></div>
               <div class="twm-bg-ring-left"></div>
               <div class="container">
                  <!-- TITLE START-->
                  <div class="section-head center wt-small-separator-outer">
                     <div class="wt-small-separator site-text-primary">
                        <div>All Jobs Post</div>
                     </div>
                     <h2 class="wt-title">Find Your Career You Deserve it</h2>
                  </div>
                  <!-- TITLE END-->
                  <div class="section-content">
                     <div class="twm-jobs-list-wrap">
                        <ul>
                           <li>
                              <div class="twm-jobs-list-style1 mb-5">
                                 <div class="twm-media">
                                    <img src="{{ URL::asset('candidates/images/jobs-company/pic1.jpg') }}" alt="#" />
                                 </div>
                                 <div class="twm-mid-content">
                                    <a href="job-detail.html" class="twm-job-title">
                                       <h4>Senior Web Designer , Developer  <span class="twm-job-post-duration">/ 1 days ago</span></h4>
                                    </a>
                                    <p class="twm-job-address">1363-1385 Sunset Blvd Los Angeles, CA 90026, USA</p>
                                    <a href="https://themeforest.net/user/thewebmax/portfolio" class="twm-job-websites site-text-primary">https://thewebmax.com</a>
                                 </div>
                                 <div class="twm-right-content">
                                    <div class="twm-jobs-category green"><span class="twm-bg-green">New</span></div>
                                    <div class="twm-jobs-amount">$2500 <span>/ Month</span></div>
                                    <a href="job-detail.html" class="twm-jobs-browse site-text-primary">Browse Job</a>
                                 </div>
                              </div>
                           </li>
                           <li>
                              <div class="twm-jobs-list-style1 mb-5">
                                 <div class="twm-media">
                                    <img src="{{ URL::asset('candidates/images/jobs-company/pic2.jpg') }}" alt="#" />
                                 </div>
                                 <div class="twm-mid-content">
                                    <a href="job-detail.html" class="twm-job-title">
                                       <h4>Need Senior Rolling Stock Technician<span class="twm-job-post-duration">/ 15 days ago</span></h4>
                                    </a>
                                    <p class="twm-job-address">1363-1385 Sunset Blvd Los Angeles, CA 90026, USA</p>
                                    <a href="https://themeforest.net/user/thewebmax/portfolio" class="twm-job-websites site-text-primary">https://thewebmax.com</a>
                                 </div>
                                 <div class="twm-right-content">
                                    <div class="twm-jobs-category green"><span class="twm-bg-brown">Intership</span></div>
                                    <div class="twm-jobs-amount">$2000<span>/ Month</span></div>
                                    <a href="job-detail.html" class="twm-jobs-browse site-text-primary">Browse Job</a>
                                 </div>
                              </div>
                           </li>
                           <li>
                              <div class="twm-jobs-list-style1 mb-5">
                                 <div class="twm-media">
                                    <img src="{{ URL::asset('candidates/images/jobs-company/pic3.jpg') }}" alt="#" />
                                 </div>
                                 <div class="twm-mid-content">
                                    <a href="job-detail.html" class="twm-job-title">
                                       <h4 class="twm-job-title">IT Department Manager & Blogger-Entrepenour  <span class="twm-job-post-duration">/ 6 Month ago</span></h4>
                                    </a>
                                    <p class="twm-job-address">1363-1385 Sunset Blvd Los Angeles, CA 90026, USA</p>
                                    <a href="https://themeforest.net/user/thewebmax/portfolio" class="twm-job-websites site-text-primary">https://thewebmax.com</a>
                                 </div>
                                 <div class="twm-right-content">
                                    <div class="twm-jobs-category green"><span class="twm-bg-purple">Fulltime</span></div>
                                    <div class="twm-jobs-amount">$1500 <span>/ Month</span></div>
                                    <a href="job-detail.html" class="twm-jobs-browse site-text-primary">Browse Job</a>
                                 </div>
                              </div>
                           </li>
                           <li>
                              <div class="twm-jobs-list-style1 mb-5">
                                 <div class="twm-media">
                                    <img src="{{ URL::asset('candidates/images/jobs-company/pic4.jpg') }}" alt="#" />
                                 </div>
                                 <div class="twm-mid-content">
                                    <a href="job-detail.html" class="twm-job-title">
                                       <h4 class="twm-job-title">Art Production Specialist   <span class="twm-job-post-duration">/ 2 days ago</span></h4>
                                    </a>
                                    <p class="twm-job-address">1363-1385 Sunset Blvd Los Angeles, CA 90026, USA</p>
                                    <a href="https://themeforest.net/user/thewebmax/portfolio" class="twm-job-websites site-text-primary">https://thewebmax.com</a>
                                 </div>
                                 <div class="twm-right-content">
                                    <div class="twm-jobs-category green"><span class="twm-bg-sky">Freelancer</span></div>
                                    <div class="twm-jobs-amount">$1200<span>/ Month</span></div>
                                    <a href="job-detail.html" class="twm-jobs-browse site-text-primary">Browse Job</a>
                                 </div>
                              </div>
                           </li>
                           <li>
                              <div class="twm-jobs-list-style1 mb-5">
                                 <div class="twm-media">
                                    <img src="{{ URL::asset('candidates/images/jobs-company/pic5.jpg') }}" alt="#" />
                                 </div>
                                 <div class="twm-mid-content">
                                    <a href="job-detail.html" class="twm-job-title">
                                       <h4 class="twm-job-title">Recreation & Fitness Worker   <span class="twm-job-post-duration">/ 1 days ago</span></h4>
                                    </a>
                                    <p class="twm-job-address">1363-1385 Sunset Blvd Los Angeles, CA 90026, USA</p>
                                    <a href="https://themeforest.net/user/thewebmax/portfolio" class="twm-job-websites site-text-primary">https://thewebmax.com</a>
                                 </div>
                                 <div class="twm-right-content">
                                    <div class="twm-jobs-category green"><span class="twm-bg-golden">Temporary</span></div>
                                    <div class="twm-jobs-amount">$1700 <span>/ Month</span></div>
                                    <a href="job-detail.html" class="twm-jobs-browse site-text-primary">Browse Job</a>
                                 </div>
                              </div>
                           </li>
                        </ul>
                        <div class="text-center m-b30">
                           <a href="job-list.html" class=" site-button">Browse All Jobs</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- JOB POST END -->
            <!-- TESTIMONIAL SECTION START -->
            <div class="section-full p-t120 p-b90 site-bg-white twm-testimonial-1-area">
               <div class="container">
                  <div class="wt-separator-two-part">
                     <div class="row wt-separator-two-part-row">
                        <div class="col-xl-5 col-lg-6 col-md-12 wt-separator-two-part-left">
                           <!-- TITLE START-->
                           <div class="section-head left wt-small-separator-outer">
                              <div class="wt-small-separator site-text-primary">
                                 <div>Clients Testimonials</div>
                              </div>
                              <h2 class="wt-title">What Our Customers Say About Us</h2>
                           </div>
                           <!-- TITLE END-->
                        </div>
                     </div>
                  </div>
                  <div class="section-content">
                     <div class="owl-carousel twm-testimonial-1-carousel owl-btn-bottom-center ">
                        <!-- COLUMNS 1 --> 
                        <div class="item ">
                           <div class="twm-testimonial-1">
                              <div class="twm-testimonial-1-content">
                                 <div class="twm-testi-media">
                                    <img src="{{ URL::asset('candidates/images/testimonials/pic-1.png') }}" alt="#" />
                                 </div>
                                 <div class="twm-testi-content">
                                    <div class="twm-quote">
                                       <img src="{{ URL::asset('candidates/images/quote-dark.png') }}" alt="" />
                                    </div>
                                    <div class="twm-testi-info">I just got a job that I applied for via careerfy! I used the site all the time during my job hunt.</div>
                                    <div class="twm-testi-detail">
                                       <div class="twm-testi-name">Nikola Tesla</div>
                                       <div class="twm-testi-position">Accountant</div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- COLUMNS 2 --> 
                        <div class="item ">
                           <div class="twm-testimonial-1">
                              <div class="twm-testimonial-1-content">
                                 <div class="twm-testi-media">
                                    <img src="{{ URL::asset('candidates/images/testimonials/pic-2.png') }}" alt="#" />
                                 </div>
                                 <div class="twm-testi-content">
                                    <div class="twm-quote">
                                       <img src="{{ URL::asset('candidates/images/quote-dark.png') }}" alt="" />
                                    </div>
                                    <div class="twm-testi-info">I just got a job that I applied for via careerfy! I used the site all the time during my job hunt.</div>
                                    <div class="twm-testi-detail">
                                       <div class="twm-testi-name">Nikola Tesla</div>
                                       <div class="twm-testi-position">Accountant</div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- COLUMNS 3 --> 
                        <div class="item ">
                           <div class="twm-testimonial-1">
                              <div class="twm-testimonial-1-content">
                                 <div class="twm-testi-media">
                                    <img src="{{ URL::asset('candidates/images/testimonials/pic-3.png') }}" alt="#" />
                                 </div>
                                 <div class="twm-testi-content">
                                    <div class="twm-quote">
                                       <img src="{{ URL::asset('candidates/images/quote-dark.png') }}" alt="" />
                                    </div>
                                    <div class="twm-testi-info">I just got a job that I applied for via careerfy! I used the site all the time during my job hunt.</div>
                                    <div class="twm-testi-detail">
                                       <div class="twm-testi-name">Nikola Tesla</div>
                                       <div class="twm-testi-position">Accountant</div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- COLUMNS 4 --> 
                        <div class="item ">
                           <div class="twm-testimonial-1">
                              <div class="twm-testimonial-1-content">
                                 <div class="twm-testi-media">
                                    <img src="{{ URL::asset('candidates/images/testimonials/pic-2.png') }}" alt="#" />
                                 </div>
                                 <div class="twm-testi-content">
                                    <div class="twm-quote">
                                       <img src="{{ URL::asset('candidates/images/quote-dark.png') }}" alt="" />
                                    </div>
                                    <div class="twm-testi-info">I just got a job that I applied for via careerfy! I used the site all the time during my job hunt.</div>
                                    <div class="twm-testi-detail">
                                       <div class="twm-testi-name">Nikola Tesla</div>
                                       <div class="twm-testi-position">Accountant</div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- COLUMNS 5 --> 
                        <div class="item ">
                           <div class="twm-testimonial-1">
                              <div class="twm-testimonial-1-content">
                                 <div class="twm-testi-media">
                                    <img src="{{ URL::asset('candidates/images/testimonials/pic-1.png') }}" alt="#" />
                                 </div>
                                 <div class="twm-testi-content">
                                    <div class="twm-quote">
                                       <img src="{{ URL::asset('candidates/images/quote-dark.png') }}" alt="" />
                                    </div>
                                    <div class="twm-testi-info">I just got a job that I applied for via careerfy! I used the site all the time during my job hunt.</div>
                                    <div class="twm-testi-detail">
                                       <div class="twm-testi-name">Nikola Tesla</div>
                                       <div class="twm-testi-position">Accountant</div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- TESTIMONIAL SECTION END -->
            <!-- OUR BLOG START -->
            <div class="section-full p-t120 p-b90 site-bg-gray">
               <div class="container">
                  <!-- TITLE START-->
                  <div class="section-head center wt-small-separator-outer">
                     <div class="wt-small-separator site-text-primary">
                        <div>Our Blogs</div>
                     </div>
                     <h2 class="wt-title">Latest Article</h2>
                  </div>
                  <!-- TITLE END-->
                  <div class="section-content">
                     <div class="twm-blog-post-1-outer-wrap">
                        <div class="owl-carousel twm-la-home-blog owl-btn-bottom-center">
                           <div class="item">
                              <!--Block one-->
                              <div class="blog-post twm-blog-post-1-outer">
                                 <div class="wt-post-media">
                                    <a href="blog-single.html"><img src="{{ URL::asset('candidates/images/blog/latest/bg1.jpg') }}" alt="" /></a>
                                 </div>
                                 <div class="wt-post-info">
                                    <div class="wt-post-meta ">
                                       <ul>
                                          <li class="post-date">March 05, 2023</li>
                                          <li class="post-author">By <a href="candidate-detail.html">Mark Petter</a></li>
                                       </ul>
                                    </div>
                                    <div class="wt-post-title ">
                                       <h4 class="post-title">
                                          <a href="blog-single.html">How to convince recruiters and get your dream job</a>
                                       </h4>
                                    </div>
                                    <div class="wt-post-text ">
                                       <p>
                                          New chip traps clusters of migrating tumor cells asperiortenetur, blanditiis odit.
                                       </p>
                                    </div>
                                    <div class="wt-post-readmore ">
                                       <a href="blog-single.html" class="site-button-link site-text-primary">Read More</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="item">
                              <!--Block two-->
                              <div class="blog-post twm-blog-post-1-outer">
                                 <div class="wt-post-media">
                                    <a href="blog-single.html"><img src="{{ URL::asset('candidates/images/blog/latest/bg2.jpg') }}" alt="" /></a>
                                 </div>
                                 <div class="wt-post-info">
                                    <div class="wt-post-meta ">
                                       <ul>
                                          <li class="post-date">March 05, 2023</li>
                                          <li class="post-author">By <a href="candidate-detail.html">David Wish</a></li>
                                       </ul>
                                    </div>
                                    <div class="wt-post-title ">
                                       <h4 class="post-title">
                                          <a href="blog-single.html">5 things to know about the March
                                          2023 jobs report</a>
                                       </h4>
                                    </div>
                                    <div class="wt-post-text ">
                                       <p>
                                          New chip traps clusters of migrating tumor cells asperiortenetur, blanditiis odit.
                                       </p>
                                    </div>
                                    <div class="wt-post-readmore ">
                                       <a href="blog-single.html" class="site-button-link site-text-primary">Read More</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="item">
                              <!--Block three-->
                              <div class="blog-post twm-blog-post-1-outer">
                                 <div class="wt-post-media">
                                    <a href="blog-single.html"><img src="{{ URL::asset('candidates/images/blog/latest/bg3.jpg') }}" alt="" /></a>
                                 </div>
                                 <div class="wt-post-info">
                                    <div class="wt-post-meta ">
                                       <ul>
                                          <li class="post-date">March 05, 2023</li>
                                          <li class="post-author">By <a href="candidate-detail.html">Mike Doe</a></li>
                                       </ul>
                                    </div>
                                    <div class="wt-post-title ">
                                       <h4 class="post-title">
                                          <a href="blog-single.html">Job Board is the most important 
                                          sector in the world</a>
                                       </h4>
                                    </div>
                                    <div class="wt-post-text ">
                                       <p>
                                          New chip traps clusters of migrating tumor cells asperiortenetur, blanditiis odit.
                                       </p>
                                    </div>
                                    <div class="wt-post-readmore ">
                                       <a href="blog-single.html" class="site-button-link site-text-primary">Read More</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="item">
                              <!--Block Four-->
                              <div class="blog-post twm-blog-post-1-outer">
                                 <div class="wt-post-media">
                                    <a href="blog-single.html"><img src="{{ URL::asset('candidates/images/blog/latest/bg1.jpg') }}" alt="" /></a>
                                 </div>
                                 <div class="wt-post-info">
                                    <div class="wt-post-meta ">
                                       <ul>
                                          <li class="post-date">March 05, 2023</li>
                                          <li class="post-author">By <a href="candidate-detail.html">Mark Petter</a></li>
                                       </ul>
                                    </div>
                                    <div class="wt-post-title ">
                                       <h4 class="post-title">
                                          <a href="blog-single.html">How to convince recruiters and get your dream job</a>
                                       </h4>
                                    </div>
                                    <div class="wt-post-text ">
                                       <p>
                                          New chip traps clusters of migrating tumor cells asperiortenetur, blanditiis odit.
                                       </p>
                                    </div>
                                    <div class="wt-post-readmore ">
                                       <a href="blog-single.html" class="site-button-link site-text-primary">Read More</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="item">
                              <!--Block Five-->
                              <div class="blog-post twm-blog-post-1-outer">
                                 <div class="wt-post-media">
                                    <a href="blog-single.html"><img src="{{ URL::asset('candidates/images/blog/latest/bg2.jpg') }}" alt="" /></a>
                                 </div>
                                 <div class="wt-post-info">
                                    <div class="wt-post-meta ">
                                       <ul>
                                          <li class="post-date">March 05, 2023</li>
                                          <li class="post-author">By <a href="candidate-detail.html">David Wish</a></li>
                                       </ul>
                                    </div>
                                    <div class="wt-post-title ">
                                       <h4 class="post-title">
                                          <a href="blog-single.html">5 things to know about the March
                                          2023 jobs report</a>
                                       </h4>
                                    </div>
                                    <div class="wt-post-text ">
                                       <p>
                                          New chip traps clusters of migrating tumor cells asperiortenetur, blanditiis odit.
                                       </p>
                                    </div>
                                    <div class="wt-post-readmore ">
                                       <a href="blog-single.html" class="site-button-link site-text-primary">Read More</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="item">
                              <!--Block Six-->
                              <div class="blog-post twm-blog-post-1-outer">
                                 <div class="wt-post-media">
                                    <a href="blog-single.html"><img src="{{ URL::asset('candidates/images/blog/latest/bg3.jpg') }}" alt="" /></a>
                                 </div>
                                 <div class="wt-post-info">
                                    <div class="wt-post-meta ">
                                       <ul>
                                          <li class="post-date">March 05, 2023</li>
                                          <li class="post-author">By <a href="candidate-detail.html">Mike Doe</a></li>
                                       </ul>
                                    </div>
                                    <div class="wt-post-title ">
                                       <h4 class="post-title">
                                          <a href="blog-single.html">Job Board is the most important 
                                          sector in the world</a>
                                       </h4>
                                    </div>
                                    <div class="wt-post-text ">
                                       <p>
                                          New chip traps clusters of migrating tumor cells asperiortenetur, blanditiis odit.
                                       </p>
                                    </div>
                                    <div class="wt-post-readmore ">
                                       <a href="blog-single.html" class="site-button-link site-text-primary">Read More</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- OUR BLOG END -->
         </div>
         <!-- CONTENT END -->
         <!-- FOOTER START -->
         <footer class="footer-dark" style="background-image: url(images/f-bg.jpg);">
            <div class="container">
               <!-- NEWS LETTER SECTION START -->
               <div class="ftr-nw-content">
                  <div class="row">
                     <div class="col-md-5">
                        <div class="ftr-nw-title">
                           Join our email subscription now to get updates 
                           on new jobs and notifications.
                        </div>
                     </div>
                     <div class="col-md-7">
                        <form>
                           <div class="ftr-nw-form">
                              <input name="news-letter" class="form-control" placeholder="Enter Your Email" type="text">
                              <button class="ftr-nw-subcribe-btn">Subscribe Now</button>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
               <!-- NEWS LETTER SECTION END -->
               <!-- FOOTER BLOCKES START -->  
               <div class="footer-top">
                  <div class="row">
                     <div class="col-lg-3 col-md-12">
                        <div class="widget widget_about">
                           <div class="logo-footer clearfix">
                              <a href="index.html"><img src="{{ URL::asset('candidates/images/logo-light.png') }}" alt="" /></a>
                           </div>
                           <p>Many desktop publishing packages and web page editors now.</p>
                           <ul class="ftr-list">
                              <li>
                                 <p><span>Address :</span>65 Sunset CA 90026, USA </p>
                              </li>
                              <li>
                                 <p><span>Email :</span>example@max.com</p>
                              </li>
                              <li>
                                 <p><span>Call :</span>555-555-1234</p>
                              </li>
                           </ul>
                        </div>
                     </div>
                     <div class="col-lg-9 col-md-12">
                        <div class="row">
                           <div class="col-lg-3 col-md-6 col-sm-6">
                              <div class="widget widget_services ftr-list-center">
                                 <h3 class="widget-title">For Candidate</h3>
                                 <ul>
                                    <li><a href="dashboard.html">User Dashboard</a></li>
                                    <li><a href="dash-resume-alert.html">Alert resume</a></li>
                                    <li><a href="candidate-grid.html">Candidates</a></li>
                                    <li><a href="blog-list.html">Blog List</a></li>
                                    <li><a href="blog-single.html">Blog single</a></li>
                                 </ul>
                              </div>
                           </div>
                           <div class="col-lg-3 col-md-6 col-sm-6">
                              <div class="widget widget_services ftr-list-center">
                                 <h3 class="widget-title">For Employers</h3>
                                 <ul>
                                    <li><a href="dash-post-job.html">Post Jobs</a></li>
                                    <li><a href="blog-grid.html">Blog Grid</a></li>
                                    <li><a href="contact.html">Contact</a></li>
                                    <li><a href="job-list.html">Jobs Listing</a></li>
                                    <li><a href="job-detail.html">Jobs details</a></li>
                                 </ul>
                              </div>
                           </div>
                           <div class="col-lg-3 col-md-6 col-sm-6">
                              <div class="widget widget_services ftr-list-center">
                                 <h3 class="widget-title">Helpful Resources</h3>
                                 <ul>
                                    <li><a href="faq.html">FAQs</a></li>
                                    <li><a href="employer-detail.html">Employer detail</a></li>
                                    <li><a href="dash-my-profile.html">Profile</a></li>
                                    <li><a href="error-404.html">404 Page</a></li>
                                    <li><a href="pricing.html">Pricing</a></li>
                                 </ul>
                              </div>
                           </div>
                           <div class="col-lg-3 col-md-6 col-sm-6">
                              <div class="widget widget_services ftr-list-center">
                                 <h3 class="widget-title">Quick Links</h3>
                                 <ul>
                                    <li><a href="index.html">Home</a></li>
                                    <li><a href="about-1.html">About us</a></li>
                                    <li><a href="dash-bookmark.html">Bookmark</a></li>
                                    <li><a href="job-grid.html">Jobs</a></li>
                                    <li><a href="employer-list.html">Employer</a></li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- FOOTER COPYRIGHT -->
               <div class="footer-bottom">
                  <div class="footer-bottom-info">
                     <div class="footer-copy-right">
                        <span class="copyrights-text">Copyright © 2023 by thewebmax All Rights Reserved.</span>
                     </div>
                     <ul class="social-icons">
                        <li><a href="javascript:void(0);" class="fab fa-facebook-f"></a></li>
                        <li><a href="javascript:void(0);" class="fab fa-twitter"></a></li>
                        <li><a href="javascript:void(0);" class="fab fa-instagram"></a></li>
                        <li><a href="javascript:void(0);" class="fab fa-youtube"></a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </footer>
         <!-- FOOTER END -->
         <!-- BUTTON TOP START -->
         <button class="scroltop"><span class="fa fa-angle-up  relative" id="btn-vibrate"></span></button>
         <!--Model Popup Section Start-->
         <!--Signup popup -->
         <div class="modal fade twm-sign-up" id="sign_up_popup" aria-hidden="true" aria-labelledby="sign_up_popupLabel" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
               <div class="modal-content">
                  <form>
                     <div class="modal-header">
                        <h2 class="modal-title" id="sign_up_popupLabel">Sign Up</h2>
                        <p>Sign Up and get access to all the features of Jobzilla</p>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                     </div>
                     <div class="modal-body">
                        <div class="twm-tabs-style-2">
                           <ul class="nav nav-tabs" id="myTab" role="tablist">
                              <!--Signup Candidate-->  
                              <li class="nav-item" role="presentation">
                                 <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#sign-candidate" type="button"><i class="fas fa-user-tie"></i>Candidate</button>
                              </li>
                              <!--Signup Employer-->
                              <li class="nav-item" role="presentation">
                                 <button class="nav-link" data-bs-toggle="tab" data-bs-target="#sign-Employer" type="button"><i class="fas fa-building"></i>Employer</button>
                              </li>
                           </ul>
                           <div class="tab-content" id="myTabContent">
                              <!--Signup Candidate Content-->  
                              <div class="tab-pane fade show active" id="sign-candidate">
                                 <div class="row">
                                    <div class="col-lg-12">
                                       <div class="form-group mb-3">
                                          <input name="username" type="text" required="" class="form-control" placeholder="Usearname*">
                                       </div>
                                    </div>
                                    <div class="col-lg-12">
                                       <div class="form-group mb-3">
                                          <input name="email" type="text" class="form-control" required="" placeholder="Password*">
                                       </div>
                                    </div>
                                    <div class="col-lg-12">
                                       <div class="form-group mb-3">
                                          <input name="phone" type="text" class="form-control" required="" placeholder="Email*">
                                       </div>
                                    </div>
                                    <div class="col-lg-12">
                                       <div class="form-group mb-3">
                                          <input name="phone" type="text" class="form-control" required="" placeholder="Phone*">
                                       </div>
                                    </div>
                                    <div class="col-lg-12">
                                       <div class="form-group mb-3">
                                          <div class=" form-check">
                                             <input type="checkbox" class="form-check-input" id="agree1">
                                             <label class="form-check-label" for="agree1">I agree to the <a href="javascript:;">Terms and conditions</a></label>
                                             <p>Already registered?
                                                <button class="twm-backto-login" data-bs-target="#sign_up_popup2" data-bs-toggle="modal" data-bs-dismiss="modal">Log in here</button>
                                             </p>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-12">
                                       <button type="submit" class="site-button">Sign Up</button>
                                    </div>
                                 </div>
                              </div>
                              <!--Signup Employer Content--> 
                              <div class="tab-pane fade" id="sign-Employer">
                                 <div class="row">
                                    <div class="col-lg-12">
                                       <div class="form-group mb-3">
                                          <input name="username" type="text" required="" class="form-control" placeholder="Usearname*">
                                       </div>
                                    </div>
                                    <div class="col-lg-12">
                                       <div class="form-group mb-3">
                                          <input name="email" type="text" class="form-control" required="" placeholder="Password*">
                                       </div>
                                    </div>
                                    <div class="col-lg-12">
                                       <div class="form-group mb-3">
                                          <input name="phone" type="text" class="form-control" required="" placeholder="Email*">
                                       </div>
                                    </div>
                                    <div class="col-lg-12">
                                       <div class="form-group mb-3">
                                          <input name="phone" type="text" class="form-control" required="" placeholder="Phone*">
                                       </div>
                                    </div>
                                    <div class="col-lg-12">
                                       <div class="form-group mb-3">
                                          <div class=" form-check">
                                             <input type="checkbox" class="form-check-input" id="agree2">
                                             <label class="form-check-label" for="agree2">I agree to the <a href="javascript:;">Terms and conditions</a></label>
                                             <p>Already registered?
                                                <button class="twm-backto-login" data-bs-target="#sign_up_popup2" data-bs-toggle="modal" data-bs-dismiss="modal">Log in here</button>
                                             </p>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-12">
                                       <button type="submit" class="site-button">Sign Up</button>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="modal-footer">
                        <span class="modal-f-title">Login or Sign up with</span>
                        <ul class="twm-modal-social">
                           <li><a href="javascript" class="facebook-clr"><i class="fab fa-facebook-f"></i></a></li>
                           <li><a href="javascript" class="twitter-clr"><i class="fab fa-twitter"></i></a></li>
                           <li><a href="javascript" class="linkedin-clr"><i class="fab fa-linkedin-in"></i></a></li>
                           <li><a href="javascript" class="google-clr"><i class="fab fa-google"></i></a></li>
                        </ul>
                     </div>
                  </form>
               </div>
            </div>
         </div>
         <!--Login popup -->
         <div class="modal fade twm-sign-up" id="sign_up_popup2" aria-hidden="true" aria-labelledby="sign_up_popupLabel2" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
               <div class="modal-content">
                  <form>
                     <div class="modal-header">
                        <h2 class="modal-title" id="sign_up_popupLabel2">Login</h2>
                        <p>Login and get access to all the features of Jobzilla</p>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                     </div>
                     <div class="modal-body">
                        <div class="twm-tabs-style-2">
                           <ul class="nav nav-tabs" id="myTab2" role="tablist">
                              <!--Login Candidate-->  
                              <li class="nav-item">
                                 <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#login-candidate" type="button"><i class="fas fa-user-tie"></i>Candidate</button>
                              </li>
                              <!--Login Employer-->
                              <li class="nav-item">
                                 <button class="nav-link" data-bs-toggle="tab" data-bs-target="#login-Employer" type="button"><i class="fas fa-building"></i>Employer</button>
                              </li>
                           </ul>
                           <div class="tab-content" id="myTab2Content">
                              <!--Login Candidate Content-->  
                              <div class="tab-pane fade show active" id="login-candidate">
                                 <div class="row">
                                    <div class="col-lg-12">
                                       <div class="form-group mb-3">
                                          <input name="username" type="text" required="" class="form-control" placeholder="Usearname*">
                                       </div>
                                    </div>
                                    <div class="col-lg-12">
                                       <div class="form-group mb-3">
                                          <input name="email" type="text" class="form-control" required="" placeholder="Password*">
                                       </div>
                                    </div>
                                    <div class="col-lg-12">
                                       <div class="form-group mb-3">
                                          <div class=" form-check">
                                             <input type="checkbox" class="form-check-input" id="Password3">
                                             <label class="form-check-label rem-forgot" for="Password3">Remember me <a href="javascript:;">Forgot Password</a></label>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-12">
                                       <button type="submit" class="site-button">Log in</button>
                                       <div class="mt-3 mb-3">Don't have an account ? 
                                          <button class="twm-backto-login" data-bs-target="#sign_up_popup" data-bs-toggle="modal" data-bs-dismiss="modal">Sign Up</button>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <!--Login Employer Content--> 
                              <div class="tab-pane fade" id="login-Employer">
                                 <div class="row">
                                    <div class="col-lg-12">
                                       <div class="form-group mb-3">
                                          <input name="username" type="text" required="" class="form-control" placeholder="Usearname*">
                                       </div>
                                    </div>
                                    <div class="col-lg-12">
                                       <div class="form-group mb-3">
                                          <input name="email" type="text" class="form-control" required="" placeholder="Password*">
                                       </div>
                                    </div>
                                    <div class="col-lg-12">
                                       <div class="form-group mb-3">
                                          <div class=" form-check">
                                             <input type="checkbox" class="form-check-input" id="Password4">
                                             <label class="form-check-label rem-forgot" for="Password4">Remember me <a href="javascript:;">Forgot Password</a></label>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-12">
                                       <button type="submit" class="site-button">Log in</button>
                                       <div class="mt-3 mb-3">Don't have an account ? 
                                          <button class="twm-backto-login" data-bs-target="#sign_up_popup" data-bs-toggle="modal" data-bs-dismiss="modal">Sign Up</button>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="modal-footer">
                        <span class="modal-f-title">Login or Sign up with</span>
                        <ul class="twm-modal-social">
                           <li><a href="javascript" class="facebook-clr"><i class="fab fa-facebook-f"></i></a></li>
                           <li><a href="javascript" class="twitter-clr"><i class="fab fa-twitter"></i></a></li>
                           <li><a href="javascript" class="linkedin-clr"><i class="fab fa-linkedin-in"></i></a></li>
                           <li><a href="javascript" class="google-clr"><i class="fab fa-google"></i></a></li>
                        </ul>
                     </div>
                  </form>
               </div>
            </div>
         </div>
         <!--Model Popup Section End-->
      </div>
      @include('layouts.candidates.vendor-scripts')
   </body>
</html>