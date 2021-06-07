

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>appointment details more</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
   
    <!-- Our Custom CSS --
    <link rel="stylesheet" href="style.css">-->

    <!--Font Awesome updated version link-->
    <script src="https://kit.fontawesome.com/a1510cf044.js" crossorigin="anonymous"></script>

   <!-- <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" integrity="sha384-wESLQ85D6gbsF459vf1CiZ2+rr+CsxRY0RpiF1tLlQpDnAgg6rwdsUF1+Ics2bni" crossorigin="anonymous">

     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous"></head>-->

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>

    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

</head>

<style>
@import "https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700";


*{
   
    box-sizing: border-box;
    font-family: Verdana, sans-serif;
}

body {
    font-family: 'Poppins', sans-serif;
    background: #fafafa;
}

p {
    font-family: 'Poppins', sans-serif;
    font-size: 1.1em;
    font-weight: 300;
    line-height: 1.7em;
    color: #999;
}

a,
a:hover,
a:focus {
    color: inherit;
    text-decoration: none;
    transition: all 0.3s;
}


/*logo and MHARVR styling on the sidebar*/
.sidebar-header a .logo
{
    position: relative;
    height: 60px;
    min-width: 50px;
    line-height: 60px;
    padding:2px 0px;
    margin-top: -20px;
    margin-left: -8px;
    display:inline;
    vertical-align: middle;
}

.sidebar-header a .titlelogo
{
    position: relative;
    display: inline-block;
    padding: 20px 10px;
    margin-bottom: 30px;
    height: 30px;
    line-height: 0px;
    white-space: nowrap;
    font-size: 15px;
    vertical-align: middle;
    color: #fff;
    font-weight: 500;
    font-size: 2em;
}
/*logo and MHARVR styling on the sidebar finish*/

.navbar {
    /*padding: 5px 10px;*/
    background: #fff;
    width: 103%;
    height: 80px;
    border: none;
    border-radius: 0;
    margin-bottom: 70px;
    margin-top: -20px;
    margin-left: -20px;
    margin-right: 20px;
    box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.1);
}

.navbar-btn {
    box-shadow: none;
    outline: none !important;
    border: none;
    margin-bottom: 10px;
    line-height: 50px;
}


/* -------------------------------------------------------------
    SIDEBAR STYLE which contains dashboard, patient details etc
---------------------------------------------------------------- */

.wrapper 
{
    display: flex;
    width: 100%;
    align-items: stretch;
}

/*Sidebar ki styling*/
#sidebar 
{
    min-width: 340px;  /*250*/
    /*max-width: 250px;*/
    background: #6A1767;
    color: #fff;
    transition: all 0.3s;
    position: relative;
}

#sidebar.active 
{
    margin-left: -340px;
}

#sidebar .sidebar-header 
{
    padding: 20px;
    background: #6A1767; /*Purple*/
}

#sidebar ul 
{
    padding: -10px 10px;
    list-style: none;
    margin-left: -30px;
    font-size: 1em;
}

#sidebar ul p 
{
    color: #fff;
    padding: 10px;
}

#sidebar ul li a 
{
    padding: 20px;
    font-size: 100%;
    display: block;
    vertical-align: middle;
    cursor: pointer;
    margin-left: -10px;
}
    
#sidebar ul li a:hover {
    color: #ffff;
    background: #03a9f4;
    border-radius: 90px;
    /*margin-left: auto;*/
    margin-right: 6px;
}

#sidebar ul li.active>a,
a[aria-expanded="true"] {
    color: #fff;
    background: #03a9f4; /*#6d7fcc;*/
    border-radius: 90px;
    margin-right: 6px;
}

a[data-toggle="collapse"] {
    position: relative;
}

.dropdown-toggle::after {
    display: block;
    position: absolute;
    top: 50%;
    right: 20px;
    transform: translateY(-50%);
}


/*Dropdown styling*/

ul ul a {
    font-size: 1em !important;
    padding-left: 70px !important;
    background: #6A1767;  #03a9f4; /*#6d7fcc;*/

}

#sidebar ul ul li .TD a:hover {
    color: #ffff;
    /*background: #03a9f4;
    /*margin-left: auto;*/
    margin-right: 6px;
}

/*Search bar styling finish*/
.search
{
    position: relative;
    width: 210px;
    margin-left: 1140px;
    margin-top: -50px;
    margin-bottom: 50px;
    grid-template-columns: repeat(4, 1fr);
    display: flex;
}

.search label
{
    position: relative;
    width: 100%;
}

.search label input
{
    width: 100%;
    height: 40px;
    border-radius: 20px;
    padding: 5px 20px;
    padding-left: 35px;
    outline: none;
    border: 1px soid rgba(0,0,0,0.2);
}

.search label .fa
{
    position: absolute;
    left: 20px;
    margin-top: -100%;
}
/*Search bar styling finish*/

.mhlogo img  /*MHARVR logo styling which is on the navbar*/
{
    position: relative;
    width: 60px;
    margin-left: 300px;
    height: 60px;
    line-height: 50px;
    padding: 2px 0px;
    margin-top: -80px;
    overflow: hidden;
    cursor: pointer;
    object-fit: cover;
    float: left;
    align-items: center;
    vertical-align: middle;
}

.mhlogo a 
{
  text-decoration: none;
  color: black;
  display: flex;
  align-items: center;
  margin-right: 380px;
}

.user
{
    position: relative;
    min-width: 20px;
    width: 50px;
    height: 50px;
    border-radius: 50%;
    overflow: hidden;
    cursor: pointer;
    line-height: 50px;
}

#navbar .user .admin        /*Admin ki heading ki styling*/
{
    color: black;
    font-weight: 500;
    font-size: 2em;
    display: flex;
    align-items: center;
    margin-left: -200px;

}

.navbar .user img   /*Admin's image(icon) ki styling*/
{
    position: relative;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    line-height: 50px;
}

.user a h3   /*Admin ki heading ki styling*/
{
  text-decoration: none;
  color: black;
  display: flex;
  align-items: center;
  margin-left: -200px;
}

.navbar-brand 
{
   margin-right: -50px;
   text-align: center;
   padding: 10 !important;
   margin: 0;
   line-height: 50px;

}

#sidebar-header ul li a .icon
{
 position: relative;
 display: block;
 min-width: 60px;
 height: 60px;
 line-height: 60px;
 text-align: center;
 font-size: 15px;
 vertical-align: middle;
 cursor: pointer;
}

/* ---------------------------------------------------
    CONTENT STYLE
----------------------------------------------------- */

#content 
{
    width: 100%;
    padding: 20px;
    min-height: 100vh;
    transition: all 0.3s;
}

/*Patient ki detailed info ky liy jo 2 columns hain uski styling*/
.container-fluid
{
    margin-top: 0px;
}

.demo-content
{
    padding: 10px;
    font-size: 18px;
    background: #dbdfe5;
    margin-bottom: 20px;
    border-radius: 10px;
}

.demo-content.bg-alt
{
    background: #abb1b8;
}

.user1 .name   /*user icon ky sath jo naam hai uski styling*/
{
    margin-left: 100px; 
    font-weight: 800;
    font-size: 39px;

}

/*Patient details ky table ki styling*/
.patientdetails
{
    position: relative;
    width: 100%;
    padding: 10px;
    padding-top: 0; 
    display: grid;
    grid-gap: 20px;
    grid-template-columns: 90fr 1fr;
}

.patientdetails .patienttable
{
    position: relative;
    display: grid;
    min-height: 530px;
    background: #ffff;
    padding: 20px;
    display: wrap;
}

.cardHeader
{
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
}
input[type=text], select, textarea {
  width: 100%; /* Full width */
  padding: 12px;
  border: 2px solid #ccc; 
  box-sizing: border-box; 
  margin-top: 6px; 
  margin-bottom: 16px; 
  resize: vertical ;
  border-radius: 7px
}
input[type=email], select, textarea {
  width: 100%; 
  padding: 12px; 
  border: 2px solid #ccc; /* Gray border */
  border-radius: 7px; /* Rounded borders */
  box-sizing: border-box; /* Make sure that padding and width stays in place */
  margin-top: 6px; /* Add a top margin */
  margin-bottom: 16px; /* Bottom margin */
  resize: vertical 
/* Allow the user to vertically resize the textarea (not horizontally) */
}
input[type=country], select, textarea {
  width: 100%; 
  padding: 12px; 
  border: 2px solid #ccc; /* Gray border */
  border-radius: 4px; /* Rounded borders */
  box-sizing: border-box; /* Make sure that padding and width stays in place */
  margin-top: 6px; /* Add a top margin */
  margin-bottom: 16px; /* Bottom margin */
  resize: vertical ;
  border-radius: 7px;
/* Allow the user to vertically resize the textarea (not horizontally) */
}
input[type=date], select, textarea {
  width: 100%; 
  padding: 12px; 
  border: 2px solid #ccc; /* Gray border */
  border-radius: 4px; /* Rounded borders */
  box-sizing: border-box; /* Make sure that padding and width stays in place */
  margin-top: 6px; /* Add a top margin */
  margin-bottom: 16px; /* Bottom margin */
  resize: vertical ;
  border-radius: 7px;
/* Allow the user to vertically resize the textarea (not horizontally) */
}

input[type=datetime-local], select, textarea {
  width: 100%; 
  padding: 12px; 
  border: 2px solid #ccc; /* Gray border */
  border-radius: 4px; /* Rounded borders */
  box-sizing: border-box; /* Make sure that padding and width stays in place */
  margin-top: 6px; /* Add a top margin */
  margin-bottom: 16px; /* Bottom margin */
  resize: vertical ;
  border-radius: 7px
/* Allow the user to vertically resize the textarea (not horizontally) */
}
input[type=number], select, textarea {
  width: 100%; 
  padding: 12px; 
  border: 2px solid #ccc; 
  border-radius: 4px; 
  box-sizing: border-box; 
  margin-top: 6px;
  resize: vertical;
  border-radius: 7px;

}

/* Style the submit button with a specific background color etc */
input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  border-radius: 7px
}

/* When moving the mouse over the submit button, add a darker green color */
input[type=submit]:hover {
  background-color: #45a049;
}
.coachform{
    font-size: 20px;

}



.cardHeader h2
{
    font-weight: 600;
    margin-left: 10px;
    margin-top: -20px;
    margin-bottom: 30px;
}

.patienttable .user1 img   /*Admin's image(icon) ki styling*/
{
    position: relative;
    top: 0;
    margin-right:  -80px;
    margin-bottom: 20px;
    width: 150px;
    height: 150px;
    /*object-fit: cover;*/
    line-height: 50px;
}


.link
{
    text-decoration: underline;
    float: right;
    color: #6A1767; /*Purple color*/
}


/*
.patientdetails table
{
    width: 100%;
    border-collapse: collapse;
    border-spacing: 0 15px;
    margin-top: -70px;
}

.patientdetails table thead td
{
    font-weight: 600;

}

.patientdetails .patienttable table tr
{
    border-bottom: 1px solid rgba(0,0,0,0.1);
}

.patientdetails .patienttable table tbody tr:last-child
{
    border-bottom: none;
}

/*.details .recentOrders table tbody tr:hover
{
    background:;
    color: #fff;
}

.patientdetails .patienttable table tr td
{
    padding: 12px 5px;
}*/


/* ---------------------------------------------------
    MEDIAQUERIES
----------------------------------------------------- */

@media (max-width: 768px) {
    #sidebar {
        margin-left: -310px;  /*250px*/
    }
    #sidebar.active {
        margin-left: 0;
    }
    #sidebarCollapse span {
        display: none;
    }

    .navbar
    {
        /*width: 100%;*/
        left: 0;
        width: 100%;
    }

    .navbar-brand
    {
        position: fixed;
    }

    .search
    {
        position: fixed;
        width: auto;
        grid-template-columns: repeat(4, 1fr);
        display: flex;
    }


    .toggle .active
    {
        position: fixed;
        z-index: 10000;
        right: 0;
        left: initial;
    }

    .toggle .active::before
    {
        color: #ffff;
    }

    .main, .main .active
    {
        width: 100%;
        /*left: 0;*/
    }
}
/* ---------------------------------------------------
    MEDIAQUERIES FINISH HERE
----------------------------------------------------- */


/*@media (max-width: 768px)
{
    .patientdetails
    {
        grid-template-columns: repeat(1,1fr); 
    }

    .cardHeader h2
    {
        font-weight: 600;
        font-size: 18px;
    }
}*/

/*@media (max-width: 768px)
{
    .cardBox
    {
        grid-template-columns: repeat(1,1fr); 
    }

    .patientdetails .patienttable
    {
        overflow-x: auto;
    }

    .patientdetails .patienttable table
    {
        width: 600px;
    }

    .navigation .active
    {
        width: 100%;
        left: 0;
    }

    .toggle .active
    {
        position: fixed;
        z-index: 10000;
        right: 0;
        left: initial;
    }

    .toggle .active::before
    {
        color: #ffff;
    }

    .main, .main .active
    {
        width: 100%;
        /*left: 0;
    }*/

/*Resposive coding
@media (max-width: 768px)
{
    .navigation
    {
        left: -300px;
    }

    .navigation .active
    {
        left: 0;
    }

    .main
    {
        width: 100%;
        left: 0;
    }

    .main .active
    {
        width:calc(100% - 300px);
        left: 300px;
    }
    .cardBox
    {
        grid-template-columns: repeat(2,1fr);
    }
}*/

@media (max-width: 768px)
{
    .details
    {
        grid-template-columns: repeat(1,1fr); 
    }

    .cardHeader h2
    {
        font-weight: 600;
        font-size: 18px;
    }
}

@media (max-width: 768px)
{
    .cardBox
    {
        grid-template-columns: repeat(1,1fr); 
    }

    .details .recentOrders
    {
        overflow-x: auto;
    }

    .details .recentOrders table
    {
        width: 600px;
    }

    .navigation .active
    {
        width: 100%;
        left: 0;
    }

    .toggle .active
    {
        position: fixed;
        z-index: 10000;
        right: 0;
        left: initial;
    }

    .toggle .active::before
    {
        color: #ffff;
    }

    .main, .main .active
    {
        width: 100%;
        left: 0;
    }
}


.line 
{
    width: 100%;
    height: -10px;
    border-bottom: 3px dashed #6A1767;
    margin: 40px 0;
    margin-top: 10px;
}

.appointinfo
{
    font-weight: 600;
    font-size: 30px;
    margin-top: 10px;
}



</style>

<body>
   <div class="wrapper">
        <!-- Yahan sy Sidebar start hai  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <a href="#"><img src="MHARVR_LOGO.png" class="logo"><h2 class="titlelogo">MHARVR</h2></a>
            </div>

           <ul>
                    <li class="active"> <!--Ye wala code kaam kar raha hai for linking.USE THIS CODE ONLY-->
                    <a href="Mharvrpatientdashboard.php"> <!--data-toggle="collapse" aria-expanded="false">-->
                    <span class="icon"><i class="fas fa-tachometer-alt"></i></i></span>
                    <span class="title">Dashboard</span></a>
                </li>

                 <li> <!--Ye wala code kaam kar raha hai for linking.USE THIS CODE ONLY-->
                    <a href="formfinal.php">
                    <span class="icon"><i class="fas fa-file-alt" aria-hidden="true"></i></i></span>
                    <span class="title">Intake Form</span></a>
                </li>

                   <li> <!--Ye wala code kaam kar raha hai for linking.USE THIS CODE ONLY-->
                    <a href="mentalHealthProfessional.php">
                    <span class="icon"><i class="fa fa-user-md" aria-hidden="true"></i></i></span>
                    <span class="title">Mental Health Professional </span></a>
                </li>

                  <li> <!--Ye wala code kaam kar raha hai for linking.USE THIS CODE ONLY-->
                    <a href="Appointmentpatient.php">
                    <span class="icon"><i class="fa fa-calendar" aria-hidden="true"></i></i></span>
                    <span class="title">Appointment</span></a>
                </li>

                     <li> <!--Ye wala code kaam kar raha hai for linking.USE THIS CODE ONLY-->
                     <a href="activity.php">
                    <span class="icon"><i class="fa fa-list-alt" aria-hidden="true"></i></i></span>
                    <span class="title">Activity-to-do</span></a>
                </li>

                  <li> <!--Ye wala code kaam kar raha hai for linking.USE THIS CODE ONLY-->
                    <a href="#">
                    <span class="icon"><i class="fa fa-cog" aria-hidden="true"></i></i></span>
                    <span class="title">Settings</span></a>
                </li>

                   <li> <!--Ye wala code kaam kar raha hai for linking.USE THIS CODE ONLY-->
                    <a href="#">
                    <span class="icon"><i class="fas fa-sign-out-alt" aria-hidden="true"></i></i></span>
                    <span class="title">Sign Out</span></a>
                </li>
            </ul>
           
            </nav>
            <!--Yahn sidebar ki coding finish hai-->

<!--Navbar coding starts from here-->

<div id="content">
<nav class="navbar navbar-light" style="background-color: #ffff";>
     <button type="button" id="sidebarCollapse" class="btn btn-info"> <i class="fas fa-align-left"></i>
                <span></span>
            </button>
  <a class="navbar-brand" href="#">
    <img src="MHARVR_LOGO.png" width="50" height="50" class="d-inline-block align-top" alt="">Mental Healthcare Application using AR and VR Technology
  </a>

   <div class="user">
    <a href="PatientProfil.php">
    <img src="download.png"></a>
    <span class="admin">Admin</span></a>
</div>

</nav>
<br>

              <div class="cardHeader">
                    <h2>Book an Appointment</h2>
                </div>
      

<!--Patient ka table check karny ky liya dala tha-->
       <div class="patientdetails">
            <div class="patienttable">
                <div class="appointinfo">Appointment Information</div><br><br>
            <div class="line"></div>

               

 <form class="form-container"  onSubmit="return validation()" class="bg-light" style=" margin-top:25px">
                    <form action="action_page.php">

                     <label for="patientname" class="coachform form-row form-group col-md-6"><b>Patient Name</b></label>
                     <input type="text" id="patientname" name="patientname" placeholder="your  name.." class="form-control">

                     <label for="dateofbirth" class="coachform"><b>Date of Birth</b></label>
                     <input type="date" id="dateofbirth" name="dateofbirth" class="form-control">

                      <label for="country" class="coachform"><b>Country</b></label><select type="country" id="country" name="country" class="form-control">
                <option value="Afghanistan">Afghanistan</option>
                <option value="Åland Islands">Åland Islands</option>
                <option value="Albania">Albania</option>
                <option value="Algeria">Algeria</option>
                <option value="American Samoa">American Samoa</option>
                <option value="Andorra">Andorra</option>
                <option value="Angola">Angola</option>
                <option value="Anguilla">Anguilla</option>
                <option value="Antarctica">Antarctica</option>
                <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                <option value="Argentina">Argentina</option>
                <option value="Armenia">Armenia</option>
                <option value="Aruba">Aruba</option>
                <option value="Australia">Australia</option>
                <option value="Austria">Austria</option>
                <option value="Azerbaijan">Azerbaijan</option>
                <option value="Bahamas">Bahamas</option>
                <option value="Bahrain">Bahrain</option>
                <option value="Bangladesh">Bangladesh</option>
                <option value="Barbados">Barbados</option>
                <option value="Belarus">Belarus</option>
                <option value="Belgium">Belgium</option>
                <option value="Belize">Belize</option>
                <option value="Benin">Benin</option>
                <option value="Bermuda">Bermuda</option>
                <option value="Bhutan">Bhutan</option>
                <option value="Bolivia">Bolivia</option>
                <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                <option value="Botswana">Botswana</option>
                <option value="Bouvet Island">Bouvet Island</option>
                <option value="Brazil">Brazil</option>
                <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                <option value="Brunei Darussalam">Brunei Darussalam</option>
                <option value="Bulgaria">Bulgaria</option>
                <option value="Burkina Faso">Burkina Faso</option>
                <option value="Burundi">Burundi</option>
                <option value="Cambodia">Cambodia</option>
                <option value="Cameroon">Cameroon</option>
                <option value="Canada">Canada</option>
                <option value="Cape Verde">Cape Verde</option>
                <option value="Cayman Islands">Cayman Islands</option>
                <option value="Central African Republic">Central African Republic</option>
                <option value="Chad">Chad</option>
                <option value="Chile">Chile</option>
                <option value="China">China</option>
                <option value="Christmas Island">Christmas Island</option>
                <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                <option value="Colombia">Colombia</option>
                <option value="Comoros">Comoros</option>
                <option value="Congo">Congo</option>
                <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
                <option value="Cook Islands">Cook Islands</option>
                <option value="Costa Rica">Costa Rica</option>
                <option value="Cote D'ivoire">Cote D'ivoire</option>
                <option value="Croatia">Croatia</option>
                <option value="Cuba">Cuba</option>
                <option value="Cyprus">Cyprus</option>
                <option value="Czech Republic">Czech Republic</option>
                <option value="Denmark">Denmark</option>
                <option value="Djibouti">Djibouti</option>
                <option value="Dominica">Dominica</option>
                <option value="Dominican Republic">Dominican Republic</option>
                <option value="Ecuador">Ecuador</option>
                <option value="Egypt">Egypt</option>
                <option value="El Salvador">El Salvador</option>
                <option value="Equatorial Guinea">Equatorial Guinea</option>
                <option value="Eritrea">Eritrea</option>
                <option value="Estonia">Estonia</option>
                <option value="Ethiopia">Ethiopia</option>
                <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                <option value="Faroe Islands">Faroe Islands</option>
                <option value="Fiji">Fiji</option>
                <option value="Finland">Finland</option>
                <option value="France">France</option>
                <option value="French Guiana">French Guiana</option>
                <option value="French Polynesia">French Polynesia</option>
                <option value="French Southern Territories">French Southern Territories</option>
                <option value="Gabon">Gabon</option>
                <option value="Gambia">Gambia</option>
                <option value="Georgia">Georgia</option>
                <option value="Germany">Germany</option>
                <option value="Ghana">Ghana</option>
                <option value="Gibraltar">Gibraltar</option>
                <option value="Greece">Greece</option>
                <option value="Greenland">Greenland</option>
                <option value="Grenada">Grenada</option>
                <option value="Guadeloupe">Guadeloupe</option>
                <option value="Guam">Guam</option>
                <option value="Guatemala">Guatemala</option>
                <option value="Guernsey">Guernsey</option>
                <option value="Guinea">Guinea</option>
                <option value="Guinea-bissau">Guinea-bissau</option>
                <option value="Guyana">Guyana</option>
                <option value="Haiti">Haiti</option>
                <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                <option value="Honduras">Honduras</option>
                <option value="Hong Kong">Hong Kong</option>
                <option value="Hungary">Hungary</option>
                <option value="Iceland">Iceland</option>
                <option value="India">India</option>
                <option value="Indonesia">Indonesia</option>
                <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                <option value="Iraq">Iraq</option>
                <option value="Ireland">Ireland</option>
                <option value="Isle of Man">Isle of Man</option>
                <option value="Israel">Israel</option>
                <option value="Italy">Italy</option>
                <option value="Jamaica">Jamaica</option>
                <option value="Japan">Japan</option>
                <option value="Jersey">Jersey</option>
                <option value="Jordan">Jordan</option>
                <option value="Kazakhstan">Kazakhstan</option>
                <option value="Kenya">Kenya</option>
                <option value="Kiribati">Kiribati</option>
                <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                <option value="Korea, Republic of">Korea, Republic of</option>
                <option value="Kuwait">Kuwait</option>
                <option value="Kyrgyzstan">Kyrgyzstan</option>
                <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                <option value="Latvia">Latvia</option>
                <option value="Lebanon">Lebanon</option>
                <option value="Lesotho">Lesotho</option>
                <option value="Liberia">Liberia</option>
                <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                <option value="Liechtenstein">Liechtenstein</option>
                <option value="Lithuania">Lithuania</option>
                <option value="Luxembourg">Luxembourg</option>
                <option value="Macao">Macao</option>
                <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
                <option value="Madagascar">Madagascar</option>
                <option value="Malawi">Malawi</option>
                <option value="Malaysia">Malaysia</option>
                <option value="Maldives">Maldives</option>
                <option value="Mali">Mali</option>
                <option value="Malta">Malta</option>
                <option value="Marshall Islands">Marshall Islands</option>
                <option value="Martinique">Martinique</option>
                <option value="Mauritania">Mauritania</option>
                <option value="Mauritius">Mauritius</option>
                <option value="Mayotte">Mayotte</option>
                <option value="Mexico">Mexico</option>
                <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                <option value="Moldova, Republic of">Moldova, Republic of</option>
                <option value="Monaco">Monaco</option>
                <option value="Mongolia">Mongolia</option>
                <option value="Montenegro">Montenegro</option>
                <option value="Montserrat">Montserrat</option>
                <option value="Morocco">Morocco</option>
                <option value="Mozambique">Mozambique</option>
                <option value="Myanmar">Myanmar</option>
                <option value="Namibia">Namibia</option>
                <option value="Nauru">Nauru</option>
                <option value="Nepal">Nepal</option>
                <option value="Netherlands">Netherlands</option>
                <option value="Netherlands Antilles">Netherlands Antilles</option>
                <option value="New Caledonia">New Caledonia</option>
                <option value="New Zealand">New Zealand</option>
                <option value="Nicaragua">Nicaragua</option>
                <option value="Niger">Niger</option>
                <option value="Nigeria">Nigeria</option>
                <option value="Niue">Niue</option>
                <option value="Norfolk Island">Norfolk Island</option>
                <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                <option value="Norway">Norway</option>
                <option value="Oman">Oman</option>
                <option value="Pakistan">Pakistan</option>
                <option value="Palau">Palau</option>
                <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                <option value="Panama">Panama</option>
                <option value="Papua New Guinea">Papua New Guinea</option>
                <option value="Paraguay">Paraguay</option>
                <option value="Peru">Peru</option>
                <option value="Philippines">Philippines</option>
                <option value="Pitcairn">Pitcairn</option>
                <option value="Poland">Poland</option>
                <option value="Portugal">Portugal</option>
                <option value="Puerto Rico">Puerto Rico</option>
                <option value="Qatar">Qatar</option>
                <option value="Reunion">Reunion</option>
                <option value="Romania">Romania</option>
                <option value="Russian Federation">Russian Federation</option>
                <option value="Rwanda">Rwanda</option>
                <option value="Saint Helena">Saint Helena</option>
                <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                <option value="Saint Lucia">Saint Lucia</option>
                <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
                <option value="Samoa">Samoa</option>
                <option value="San Marino">San Marino</option>
                <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                <option value="Saudi Arabia">Saudi Arabia</option>
                <option value="Senegal">Senegal</option>
                <option value="Serbia">Serbia</option>
                <option value="Seychelles">Seychelles</option>
                <option value="Sierra Leone">Sierra Leone</option>
                <option value="Singapore">Singapore</option>
                <option value="Slovakia">Slovakia</option>
                <option value="Slovenia">Slovenia</option>
                <option value="Solomon Islands">Solomon Islands</option>
                <option value="Somalia">Somalia</option>
                <option value="South Africa">South Africa</option>
                <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
                <option value="Spain">Spain</option>
                <option value="Sri Lanka">Sri Lanka</option>
                <option value="Sudan">Sudan</option>
                <option value="Suriname">Suriname</option>
                <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                <option value="Swaziland">Swaziland</option>
                <option value="Sweden">Sweden</option>
                <option value="Switzerland">Switzerland</option>
                <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                <option value="Taiwan, Province of China">Taiwan, Province of China</option>
                <option value="Tajikistan">Tajikistan</option>
                <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                <option value="Thailand">Thailand</option>
                <option value="Timor-leste">Timor-leste</option>
                <option value="Togo">Togo</option>
                <option value="Tokelau">Tokelau</option>
                <option value="Tonga">Tonga</option>
                <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                <option value="Tunisia">Tunisia</option>
                <option value="Turkey">Turkey</option>
                <option value="Turkmenistan">Turkmenistan</option>
                <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                <option value="Tuvalu">Tuvalu</option>
                <option value="Uganda">Uganda</option>
                <option value="Ukraine">Ukraine</option>
                <option value="United Arab Emirates">United Arab Emirates</option>
                <option value="United Kingdom">United Kingdom</option>
                <option value="United States">United States</option>
                <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                <option value="Uruguay">Uruguay</option>
                <option value="Uzbekistan">Uzbekistan</option>
                <option value="Vanuatu">Vanuatu</option>
                <option value="Venezuela">Venezuela</option>
                <option value="Viet Nam">Viet Nam</option>
                <option value="Virgin Islands, British">Virgin Islands, British</option>
                <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                <option value="Wallis and Futuna">Wallis and Futuna</option>
                <option value="Western Sahara">Western Sahara</option>
                <option value="Yemen">Yemen</option>
                <option value="Zambia">Zambia</option>
                <option value="Zimbabwe">Zimbabwe</option>
            </select>



                    


                    <label for="professionalist" class="coachform"><b>Mental Health Professonalist</b></label>
                     <input type="text" id="professionalist" name="professionalist" placeholder="Mental Health Professonalist" class="form-control">


                     <label for="DisorderType" class="coachform"><b>Disorder Type</b></label>
                     <input type="text" id="DisorderType" name="DisorderType" placeholder="Disorder Type

                     " class="form-control">

                     
                   <a href="Payment.php">
                       
                        <span class="name"><button type="button" class="btn btn-info btn-lg" style="margin-top: 100px; margin-left: 700px;">Confirm</button></sp
                            an></span></a>






                    
                    








                     </form><br><br>
                    </div>

    
    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>


<!--Script used for toggling the sidebar-->
    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
</body>

</html>