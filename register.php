
<html>
<head>
  <title></title>
  <?php require 'head.php';?>
</head>
<body>
  <?php require 'menu.php';?>
 <style>
body {
  background-image: url('pics3.jpg');
  background-repeat: no-repeat;

  background-size: cover;
}
</style>
  <?php
if(isset($_POST["btnregister"])){
  extract($_POST);


$to_email=$_POST['txtemail'];
$subject="Welcome to Perfect Match";
$body="Congratulation!! Registration successfull";
$headers="From: Messege to yourself";
if(mail($to_email,$subject,$body,$headers)){
  echo "Registration successful";
}
  else
  {
    echo "Registration failed";
  }





  $target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
   if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }


  mysqli_query($con,"insert into regtable(uname,profile_for,gender,dob,religion,mother_tongue,caste,country,address,mob_no,email_id,password,img1,marital_status,city,state,age,height,weight,skin_tone,handicap,food,smooking,drinking,family_status,family_type,family_values,degree,college,
    organisation_name,job_rol,company_name,annual_income)values('$txtname','$cmbprofile','$txtgen','$txtdob',
    '$txtreli','$txtmother','$txtcaste','$txtcoun','$txtaddr','$txtphone','$txtemail','$cmbpass','$target_file',
    '$rbstatus','$rbcity','$cmbstate','$rbage','$rbheight','$rbweight',
    '$cmbskin','$rghandicap','$rbfood','$cmbsmoke','$txtdrink','$txfam','$txfamtyp','$famvalue','$rbdegree',
    '$txcollege','$txorg','$rbjob','$rbcompany','$txannual')");





}
?>
<div class="row">
  <div class="col-md-3">
  </div>
  <div class="col-md-6">
    <form method="post" enctype="multipart/form-data"  style="color: black;">
    <div class="card text-center"  style="background-color:rgba(255,255,255,.7)" >
  <div class="card-header">Sign Up</div>
  <div class="card-body">

    <p class="card-text"><form method="post">
  <table class="table">
    <tr> 
      <td>
       <h5>  User Name</h5>
      </td>
      <td>
        <input type="text" class="form-control" name="txtname"  pattern="^[A-Za-z]+$" name="txtname" required placeholder="Enter only letters" required>
      </td>
    </tr>
    <tr>
      <td>
        <h5>  Profile For</h5>
      </td>
      <td>
        <select class="form-control" name="cmbprofile" id="Profile for">
        <option value="" selected="selected" disabled="disabled"> profile for </option>
                <option value="Myself">Myself</option>
                <option value="Daughter">Daughter</option>
                <option value="Son">Son</option>
                <option value="Brother">Brother</option>
                <option value="Sister">Sister</option>
                <option value="Relative">Relative</option>
                <option value="Friend">Friend</option>
                <option value="Brother">Brother</option>
                </select>
      </td>
    </tr>

    <tr>
      <td>
       <h5>  Gender</h5>     
        </td>
      <td>
        <div class="form-check">
        <input  type="radio" name="txtgen" value="male" checked="checked"> Male <input type="radio" name="txtgen" value="female"> Female
      </div>
      </td>
    </tr>
    <tr>
      <td>
       <h5>  DOB</h5>
      </td>
      <td>
        
               <input class="form-control" placeholder="dd-mm-yy" type="date" id="birthday" name="txtdob">
  
      </td>
    </tr>
    <tr>
      <td>
       <h5>  Religion</h5>
      </td>
      <td>
        <select class="form-control dropdown" id="religion" name="txtreli">
    <option value="" selected="selected" disabled="disabled">-- select one --</option>
    <option value="African Traditional &amp; Diasporic">African Traditional &amp; Diasporic</option>
    <option value="Agnostic">Agnostic</option>
    <option value="Atheist">Atheist</option>
    <option value="Baha'i">Baha'i</option>
    <option value="Buddhism">Buddhism</option>
    <option value="Cao Dai">Cao Dai</option>
    <option value="Chinese traditional religion">Chinese traditional religion</option>
    <option value="Christianity">Christianity</option>
    <option value="Hinduism">Hinduism</option>
    <option value="Islam">Islam</option>
    <option value="Jainism">Jainism</option>
    <option value="Juche">Juche</option>
    <option value="Judaism">Judaism</option>
    <option value="Neo-Paganism">Neo-Paganism</option>
    <option value="Nonreligious">Nonreligious</option>
    <option value="Rastafarianism">Rastafarianism</option>
    <option value="Secular">Secular</option>
    <option value="Shinto">Shinto</option>
    <option value="Sikhism">Sikhism</option>
    <option value="Spiritism">Spiritism</option>
    <option value="Tenrikyo">Tenrikyo</option>
    <option value="Unitarian-Universalism">Unitarian-Universalism</option>
    <option value="Zoroastrianism">Zoroastrianism</option>
    <option value="primal-indigenous">primal-indigenous</option>
    <option value="Other">Other</option>
  </select>
      </td>
    </tr>
    <tr>
      <td>
       <h5>  Mother tongue</h5>
      </td>
      <td>
        <select class="form-control" id="languages" name="txtmother">
    <option>Select Language</option>
    <option value="hi">Hindi</option>      
    <option value="te">Sanskrit</option>
    <option value="en">English</option>
    <option value="te">Nepali</option>
    <option value="bn">Bengali</option>
    <option value="en-IN">English</option>   
    <option value="gu">Gujarati</option>    
    <option value="kn">Kannada</option>   
    <option value="mr">Marathi</option>
    <option value="sd">Dogri</option>
    <option value="pa">Punjabi</option>
    <option value="sd">Kashmiri</option>
    <option value="sd">Sindhi</option>
    <option value="si">Sinhala</option>
    <option value="sd">Maithili</option>
    <option value="so">Somali</option>
    <option value="te">Assamese</option>
    <option value="ta">Tamil</option>
    <option value="te">Odia </option>
    <option value="te">Telugu</option>
    <option value="te">Malayalam</option>
    <option value="ur">Urdu/option>
    <option value="sd">Kokani</option>
    <option value="sd">Bodo</option>
    <option value="hi">Meitei</option>  
    <option value="hi">Santali</option>  
    <option value="hi">Tulu</option>  
</select>
      </td>
    </tr>

    <tr>
      <td>
      <h5>    Caste</h5>
      </td>
      <td>
        <select class="form-control" id="caste" name="txtcaste">
          <option>Select Caste</option>
  <option value="Agrawal">Agrawal</option>
    <option value="Arora">Arora</option>
    <option value="Baniya">Baniya</option>
    <option value="Bhatt">Bhatt</option>  
    <option value="Bramhan">Bramhan</option>  
    <option value="Maratha">Maratha</option>  
    <option value="Mali">Mali</option>
    <option value="Khoja">Khoja</option>
    <option value="Pathan">Pathan</option>
    <option value="Rajput">Rajput</option>  
    <option value="Rathod">Rathod</option>  
    <option value="Gurjar">Gurjar</option> 
    <option value="Agri">Agri</option>
    <option value="Koli">Koli</option>
    <option value="Nhavi">Nhavi</option>  
    <option value="Chambhar">Chambhar</option>  
    <option value="Sutar">Sutar</option>  
    </select>

      </td>
    </tr>
    <tr>
      <td>
        <h5>  Country</h5>
      </td>
      <td>
        <select  class="form-control" id="country" name="txtcoun">
  <option value="" selected="selected" disabled="disabled">-- select one --</option>        
   <option value="Afganistan">Afghanistan</option>
   <option value="Albania">Albania</option>
   <option value="Algeria">Algeria</option>
   <option value="American Samoa">American Samoa</option>
   <option value="Andorra">Andorra</option>
   <option value="Angola">Angola</option>
   <option value="Anguilla">Anguilla</option>
   <option value="Antigua & Barbuda">Antigua & Barbuda</option>
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
   <option value="Bonaire">Bonaire</option>
   <option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
   <option value="Botswana">Botswana</option>
   <option value="Brazil">Brazil</option>
   <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
   <option value="Brunei">Brunei</option>
   <option value="Bulgaria">Bulgaria</option>
   <option value="Burkina Faso">Burkina Faso</option>
   <option value="Burundi">Burundi</option>
   <option value="Cambodia">Cambodia</option>
   <option value="Cameroon">Cameroon</option>
   <option value="Canada">Canada</option>
   <option value="Canary Islands">Canary Islands</option>
   <option value="Cape Verde">Cape Verde</option>
   <option value="Cayman Islands">Cayman Islands</option>
   <option value="Central African Republic">Central African Republic</option>
   <option value="Chad">Chad</option>
   <option value="Channel Islands">Channel Islands</option>
   <option value="Chile">Chile</option>
   <option value="China">China</option>
   <option value="Christmas Island">Christmas Island</option>
   <option value="Cocos Island">Cocos Island</option>
   <option value="Colombia">Colombia</option>
   <option value="Comoros">Comoros</option>
   <option value="Congo">Congo</option>
   <option value="Cook Islands">Cook Islands</option>
   <option value="Costa Rica">Costa Rica</option>
   <option value="Cote DIvoire">Cote DIvoire</option>
   <option value="Croatia">Croatia</option>
   <option value="Cuba">Cuba</option>
   <option value="Curaco">Curacao</option>
   <option value="Cyprus">Cyprus</option>
   <option value="Czech Republic">Czech Republic</option>
   <option value="Denmark">Denmark</option>
   <option value="Djibouti">Djibouti</option>
   <option value="Dominica">Dominica</option>
   <option value="Dominican Republic">Dominican Republic</option>
   <option value="East Timor">East Timor</option>
   <option value="Ecuador">Ecuador</option>
   <option value="Egypt">Egypt</option>
   <option value="El Salvador">El Salvador</option>
   <option value="Equatorial Guinea">Equatorial Guinea</option>
   <option value="Eritrea">Eritrea</option>
   <option value="Estonia">Estonia</option>
   <option value="Ethiopia">Ethiopia</option>
   <option value="Falkland Islands">Falkland Islands</option>
   <option value="Faroe Islands">Faroe Islands</option>
   <option value="Fiji">Fiji</option>
   <option value="Finland">Finland</option>
   <option value="France">France</option>
   <option value="French Guiana">French Guiana</option>
   <option value="French Polynesia">French Polynesia</option>
   <option value="French Southern Ter">French Southern Ter</option>
   <option value="Gabon">Gabon</option>
   <option value="Gambia">Gambia</option>
   <option value="Georgia">Georgia</option>
   <option value="Germany">Germany</option>
   <option value="Ghana">Ghana</option>
   <option value="Gibraltar">Gibraltar</option>
   <option value="Great Britain">Great Britain</option>
   <option value="Greece">Greece</option>
   <option value="Greenland">Greenland</option>
   <option value="Grenada">Grenada</option>
   <option value="Guadeloupe">Guadeloupe</option>
   <option value="Guam">Guam</option>
   <option value="Guatemala">Guatemala</option>
   <option value="Guinea">Guinea</option>
   <option value="Guyana">Guyana</option>
   <option value="Haiti">Haiti</option>
   <option value="Hawaii">Hawaii</option>
   <option value="Honduras">Honduras</option>
   <option value="Hong Kong">Hong Kong</option>
   <option value="Hungary">Hungary</option>
   <option value="Iceland">Iceland</option>
   <option value="Indonesia">Indonesia</option>
   <option value="India">India</option>
   <option value="Iran">Iran</option>
   <option value="Iraq">Iraq</option>
   <option value="Ireland">Ireland</option>
   <option value="Isle of Man">Isle of Man</option>
   <option value="Israel">Israel</option>
   <option value="Italy">Italy</option>
   <option value="Jamaica">Jamaica</option>
   <option value="Japan">Japan</option>
   <option value="Korea North">Korea North</option>
   <option value="Korea Sout">Korea South</option>
   <option value="Kuwait">Kuwait</option>
   <option value="Oman">Oman</option>
   <option value="Pakistan">Pakistan</option>
   <option value="Peru">Peru</option>
   <option value="Phillipines">Philippines</option>
   <option value="Pitcairn Island">Pitcairn Island</option>
   <option value="Poland">Poland</option>
   <option value="Portugal">Portugal</option>
   <option value="Puerto Rico">Puerto Rico</option>
   <option value="Qatar">Qatar</option>
   <option value="Republic of Montenegro">Republic of Montenegro</option>
   <option value="Republic of Serbia">Republic of Serbia</option>
   <option value="Reunion">Reunion</option>
   <option value="Romania">Romania</option>
   <option value="Russia">Russia</option>
   <option value="Samoa American">Samoa American</option>
   <option value="San Marino">San Marino</option>
   <option value="Sao Tome & Principe">Sao Tome & Principe</option>
   <option value="Saudi Arabia">Saudi Arabia</option>
   <option value="Senegal">Senegal</option>
   <option value="Seychelles">Seychelles</option>
   <option value="Sierra Leone">Sierra Leone</option>
   <option value="Singapore">Singapore</option>
   <option value="Slovakia">Slovakia</option>
   <option value="Slovenia">Slovenia</option>
   <option value="Solomon Islands">Solomon Islands</option>
   <option value="Somalia">Somalia</option>
   <option value="South Africa">South Africa</option>
   <option value="Spain">Spain</option>
   <option value="Sri Lanka">Sri Lanka</option>
   <option value="Sudan">Sudan</option>
   <option value="Suriname">Suriname</option>
   <option value="Swaziland">Swaziland</option>
   <option value="Sweden">Sweden</option>
   <option value="Switzerland">Switzerland</option>
   <option value="Syria">Syria</option>
   <option value="Tahiti">Tahiti</option>
   <option value="Taiwan">Taiwan</option>
   <option value="Tajikistan">Tajikistan</option>
   <option value="Tanzania">Tanzania</option>
   <option value="Thailand">Thailand</option>
   <option value="Togo">Togo</option>
   <option value="Tokelau">Tokelau</option>
   <option value="Tonga">Tonga</option>
   <option value="Trinidad & Tobago">Trinidad & Tobago</option>
   <option value="Tunisia">Tunisia</option>
   <option value="Vanuatu">Vanuatu</option>
   <option value="Vatican City State">Vatican City State</option>
   <option value="Venezuela">Venezuela</option>
   <option value="Vietnam">Vietnam</option>
   <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
   <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
   <option value="Zaire">Zaire</option>
   <option value="Zambia">Zambia</option>
   <option value="Zimbabwe">Zimbabwe</option>
</select>
      </td>
    </tr>
    <tr>
      <td>
      <h5>  Address</h5>
      </td>
      
      <td>
        <textarea id="address" class="form-control" name="txtaddr" rows="4" cols="50"></textarea>
      </td>
    </tr>
    
    <tr>
      <td>
      <h5>    Email ID</h5>
      </td>
      <td>
        <input type="text" class="form-control" id="email_id" name="txtemail"  pattern="[a-z]+[0-9]*@[a-z]+[0-9]*\.[a-z]{2,3}" name="txtemail" required>
      </td>
    </tr>

    <form action="/action_page.php">
        
    <tr>
      <td>
       <h5>  <label for="mob_no">Mobile No.</label></h5>
      </td>
      <td>
       
        <input type="tel" class="form-control" id="mob_no" name="txtphone" 
        pattern="[0-9]{10}" name="txtphone" required>
    
      </td>
    </tr>

  </form>
   
    <tr>

      <td>
        <h5>   <label for="password">Password</label></h5>
      </td>
      <td>
       
        <input type="password" class="form-control" id="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"name="cmbpass" required>
      
      </td>
    </tr>
    

    <tr>
      <tD>
        <h5>  Image</h5>
      </tD>
      <td>
        <input type="file" id="img1" name="fileToUpload">
      </td>
    </tr>
   
      <tr>
      <td>
       <h5>  Matrimonial status</h5>
      </td>
      <td>
        <div class="form-check">
          <fieldset id="group1"> 
        <input  type="radio" name="rbstatus" value="Married" > Married   <input type="radio" name="rbstatus" value="single"> single   <input  type="radio" name="rbstatus" value="divorced" >divorced   <input type="radio" name="rbstatus" value="single"> widowed 
        </fieldset>
      </div> 
      </td>
    </tr>
    <tr>
      <td>
      <h5> State</h5>
      </td>
      <td>
        <select id="country-state" name="cmbstate" class="form-control">
          <option value="" selected="selected" disabled="disabled">-- select one --</option>
    <option value="AN">Andaman and Nicobar Islands</option>
    <option value="AP">Andhra Pradesh</option>
    <option value="AR">Arunachal Pradesh</option>
    <option value="AS">Assam</option>
    <option value="BR">Bihar</option>
    <option value="CH">Chandigarh</option>
    <option value="CT">Chhattisgarh</option>
    <option value="DN">Dadra and Nagar Haveli</option>
    <option value="DD">Daman and Diu</option>
    <option value="DL">Delhi</option>
    <option value="GA">Goa</option>
    <option value="GJ">Gujarat</option>
    <option value="HR">Haryana</option>
    <option value="HP">Himachal Pradesh</option>
    <option value="JK">Jammu and Kashmir</option>
    <option value="JH">Jharkhand</option>
    <option value="KA">Karnataka</option>
    <option value="KL">Kerala</option>
    <option value="LA">Ladakh</option>
    <option value="LD">Lakshadweep</option>
    <option value="MP">Madhya Pradesh</option>
    <option value="MH">Maharashtra</option>
    <option value="MN">Manipur</option>
    <option value="ML">Meghalaya</option>
    <option value="MZ">Mizoram</option>
    <option value="NL">Nagaland</option>
    <option value="OR">Odisha</option>
    <option value="PY">Puducherry</option>
    <option value="PB">Punjab</option>
    <option value="RJ">Rajasthan</option>
    <option value="SK">Sikkim</option>
    <option value="TN">Tamil Nadu</option>
    <option value="TG">Telangana</option>
    <option value="TR">Tripura</option>
    <option value="UP">Uttar Pradesh</option>
    <option value="UT">Uttarakhand</option>
    <option value="WB">West Bengal</option>
</select>

      </td>
    </tr>

    <tr>
      <td>
      <h5>  City</h5>
      </td>
      <td>
        <select required class="form-select jp-form-input py-lg-2" aria-label="Default select example" name="rbcity" ><option value="" selected="selected" disabled="disabled">-- select one --</option> <option value="Adilabad">Adilabad</option> <option value="Agra">Agra</option> <option value="Ahmedabad">Ahmedabad</option> <option value="Ahmednagar">Ahmednagar</option> <option value="Aizawl">Aizawl</option> <option value="Ajitgarh(Mohali)">Ajitgarh (Mohali)</option> <option value="Ajmer">Ajmer</option> <option value="Akola">Akola</option> <option value="Alappuzha">Alappuzha</option> <option value="Aligarh">Aligarh</option> <option value="Alirajpur">Alirajpur</option> <option value="Allahabad">Allahabad</option> <option value="Almora">Almora</option> <option value="Alwar">Alwar</option> <option value="Ambala">Ambala</option> <option value="AmbedkarNagar">Ambedkar Nagar</option> <option value="Amravati">Amravati</option> <option value="Amrelidistrict">Amreli district</option> <option value="Amritsar">Amritsar</option> <option value="Anand">Anand</option> <option value="Anantapur">Anantapur</option> <option value="Anantnag">Anantnag</option> <option value="Angul">Angul</option> <option value="Anjaw">Anjaw</option> <option value="Anuppur">Anuppur</option> <option value="Araria">Araria</option> <option value="Ariyalur">Ariyalur</option> <option value="Arwal">Arwal</option> <option value="AshokNagar">Ashok Nagar</option> <option value="Auraiya">Auraiya</option> <option value="Aurangabad">Aurangabad</option> <option value="Aurangabad">Aurangabad</option> <option value="Azamgarh">Azamgarh</option> <option value="Badgam">Badgam</option> <option value="Bagalkot">Bagalkot</option> <option value="Bageshwar">Bageshwar</option> <option value="Bagpat">Bagpat</option> <option value="Bahraich">Bahraich</option> <option value="Baksa">Baksa</option> <option value="Balaghat">Balaghat</option> <option value="Balangir">Balangir</option> <option value="Balasore">Balasore</option> <option value="Ballia">Ballia</option> <option value="Balrampur">Balrampur</option> <option value="Banaskantha">Banaskantha</option> <option value="Banda">Banda</option> <option value="Bandipora">Bandipora</option> <option value="BangaloreRural">Bangalore Rural</option> <option value="BangaloreUrban">Bangalore Urban</option> <option value="Banka">Banka</option> <option value="Bankura">Bankura</option> <option value="Banswara">Banswara</option> <option value="Barabanki">Barabanki</option> <option value="Baramulla">Baramulla</option> <option value="Baran">Baran</option> <option value="Bardhaman">Bardhaman</option> <option value="Bareilly">Bareilly</option><option value="Mandi">Mandi</option> <option value="Mandla">Mandla</option> <option value="Mandsaur">Mandsaur</option> <option value="Mandya">Mandya</option> <option value="Mansa">Mansa</option> <option value="Marigaon">Marigaon</option> <option value="Mathura">Mathura</option> <option value="Mau">Mau</option> <option value="Mayurbhanj">Mayurbhanj</option> <option value="Medak">Medak</option> <option value="Meerut">Meerut</option> <option value="Mehsana">Mehsana</option> <option value="Mewat">Mewat</option> <option value="Mirzapur">Mirzapur</option> <option value="Moga">Moga</option> <option value="Mokokchung">Mokokchung</option> <option value="Mon">Mon</option> <option value="Moradabad">Moradabad</option> <option value="Morena">Morena</option> <option value="MumbaiCity">Mumbai City</option> <option value="Mumbaisuburban">Mumbai suburban</option> <option value="Munger">Munger</option> <option value="Murshidabad">Murshidabad</option> <option value="Muzaffarnagar">Muzaffarnagar</option> <option value="Muzaffarpur">Muzaffarpur</option> <option value="Mysore">Mysore</option> <option value="Nabarangpur">Nabarangpur</option> <option value="Nadia">Nadia</option> <option value="Nagaon">Nagaon</option> <option value="Nagapattinam">Nagapattinam</option> <option value="Pune">Pune</option> <option value="PurbaMedinipur">Purba Medinipur</option> <option value="Puri">Puri</option> <option value="Purnia">Purnia</option> <option value="Purulia">Purulia</option> <option value="Raebareli">Raebareli</option> <option value="Raichur">Raichur</option> <option value="Raigad">Raigad</option> <option value="Raigarh">Raigarh</option> <option value="Raipur">Raipur</option> <option value="Raisen">Raisen</option> <option value="Rajauri">Rajauri</option> <option value="Rajgarh">Rajgarh</option> <option value="Rajkot">Rajkot</option> <option value="Rajnandgaon">Rajnandgaon</option> <option value="Rajsamand">Rajsamand</option> <option value="RamabaiNagar(KanpurDehat)"> Ramabai Nagar (Kanpur Dehat) </option> <option value="Ramanagara">Ramanagara</option> <option value="Ramanathapuram">Ramanathapuram</option> <option value="Ramban">Ramban</option> <option value="Ramgarh">Ramgarh</option> <option value="Rampur">Rampur</option> <option value="Ranchi">Ranchi</option> <option value="Ratlam">Ratlam</option> <option value="Ratnagiri">Ratnagiri</option> <option value="Rayagada">Rayagada</option> <option value="Reasi">Reasi</option> <option value="Rewa">Rewa</option> <option value="Rewari">Rewari</option> <option value="RiBhoi">Ri Bhoi</option> <option value="Rohtak">Rohtak</option> <option value="Rohtas">Rohtas</option> <option value="Rudraprayag">Rudraprayag</option> <option value="Rupnagar">Rupnagar</option> <option value="Sabarkantha">Sabarkantha</option> <option value="Sagar">Sagar</option> <option value="Saharanpur">Saharanpur</option> <option value="Saharsa">Saharsa</option> <option value="Sahibganj">Sahibganj</option> <option value="Saiha">Saiha</option> <option value="Salem">Salem</option> <option value="Samastipur">Samastipur</option> <option value="Samba">Samba</option> <option value="Sambalpur">Sambalpur</option> <option value="Sangli">Sangli</option> <option value="Sangrur">Sangrur</option> <option value="SantKabirNagar">Sant Kabir Nagar</option> <option value="SantRavidasNagar">Sant Ravidas Nagar</option> <option value="Saran">Saran</option> <option value="Satara">Satara</option> 
      </div>
      </td>
    </tr>
    <ul>
    <tr>
      <td>
        <div class="col-md-12">
      <h5>   <li>Physical Attributes</li></h5>
      </div>
      </td>
    </tr>
    <tr>
      <td>
       <h5>  Age</h5>
      </td>
      <td>
        <input type="number" class="form-control" name="rbage" required>

      </td>
    </tr>
    <tr>
      <td>
        <h5> Height</h5>
      </td>
      <td>
        
               <input class="form-control" type="text" name="rbheight" id="height">

                
      </td>
    </tr>
    <tr>
      <td>
      <h5>   Weight</h5>
      </td>
      <td>
        <input class="form-control" type="number" id="number" name="rbweight">
  
      </td>
    </tr>
    <tr>
      <td>
       <h5>  Skintone</h5>
      </td>
      <td>
        <fieldset id="group2">   
        <input  type="radio" name="cmbskin" value="very fair"> Very fair  <input type="radio" name="cmbskin" value="fair">Fair  <input  type="radio" name="cmbskin" value="Wheatish Brown" > Wheatish Brown  <input type="radio" name="cmbskin" value="dark"> Dark
        </fieldset>
      </td>
    </tr>

    <tr>
      <td>
       <h5>  Handicap</h5>
      </td>
      <td>
        <fieldset id="group3">   
        <input  type="radio" name="rghandicap" value="Yes">Yes  <input type="radio" name="rghandicap" value="No">No
      </fieldset>

      </td>
    </tr>
      <tr>
      <td>
      <h5> <li>Habits</li></h5>
      </td>
    </tr>
    <tr>
      <td>
      <h5>   Food</h5>
      </td>
      <td>
        <fieldset id="group4">   
        <input  type="radio" name="rbfood" value="Vegetarian">Vegetarian  <input type="radio" name="rbfood" value="Nonvegetarian">Nonvegetarian  <input  type="radio" name="rbfood" value="Eggterian">Eggterian
        </fieldset>
      </td>
    </tr>
    <tr>
      <td>
       <h5>  Smoking</h5>
      </td>
      <td>
         
        <input  type="radio" name="cmbsmoke" value="Yes">Yes  <input type="radio" name="cmbsmoke" value="No">No
        </div>
      </td>
    </tr>
    <tr>
      <td>
       <h5>  Drinking</h5>
      </td>
      <td>
          
        <input  type="radio" name="txtdrink" value="Yes">Yes  <input type="radio" name="txtdrink" value="No">No
        
      </td>
    </tr>
    <tr>
      <td>
        <h5> <li>Family Profile</li></h5>
      </td>
    </tr>
    <tr>
      <td>
       <h5>  Family Status</h5>
      </td>
      <td>
        <fieldset id="group7">   
        <input  type="radio" name="txfam" value="Middle Class">Middle Class  <input type="radio" name="txfam" value="Rich">Rich
        </fieldset>
      </td>
    </tr>
    <tr>
      <td>
        <h5> Family Type</h5>
      </td>
      <td>
        <fieldset id="group8">   
        <input  type="radio" name="txfamtyp" value="Join">Join<input type="radio" name="txfamtyp" value="Nuclear">Nuclear
        </fieldset>
      </td>
    </tr>
    <tr>
      <td>
      <h5>   Family Values</h5>
      </td>
      <td>
        <fieldset id="group9">   
        <input  type="radio" name="famvalue" value="Traditional">Traditional  <input type="radio" name="famvalue" value="Moderate">Moderate
        </fieldset>
      </td>
    </tr>
    <tr>
      <td>
      <h5>   <li>Educational Details</li></h5>
      </td>
    </tr>
    <tr>
      <td>
      <h5>   Degree</h5>
      </td>
      <td>
        <input type="text" class="form-control" id="degree" name="rbdegree" required>

      </td>
    </tr>
    <tr>
      <td>
      <h5>   College/Institute Name</h5>
      </td>
      <td>
        <input type="text" class="form-control" id="college" name="txcollege" required>

      </td>
    </tr>
    <tr>
      <td>
      <h5>   University Name</h5>
      </td>
      <td>
        <input type="text" class="form-control" id="organisation_name"  name="txorg" required>

      </td>
    </tr>
    <tr>
      <td>
     <h5>    <li>Job Description</li></h5>
      </td>
    </tr>
    <tr>
      <td>
      <h5>   Job role</h5>
      </td>
      <td>
        <input type="text" class="form-control" id="job_rol"  name="rbjob" required>
      </td>
    </tr>
    <tr>
      <td>
      <h5>   Company Name</h5>
      </td>
      <td>
        <input type="text" class="form-control" id="company_name" name="rbcompany" required>

      </td>
    </tr>
    <tr>
      <td>
       <h5>  Annual Income</h5>
      </td>
      <td>
        <input type="number" class="form-control" id="annual_income" name="txannual" required>

      </td>
    </tr>
    <tR>
      <Td align="center" colspan=2>
        <input type="submit" class="btn btn-success" name="btnregister" value="Register" >
      </Td>
    </tR>
  </ul>
  </table>
</form></p>
    
  </div>
  
</div>

</div>
  <div class="col-md-3">
  </div>
</div>
<?php require 'footer.php';?>
</body>
</html>