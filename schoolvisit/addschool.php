<?php 
ob_start();
session_start();
if(!isset($_SESSION['user_name'])){
        header('Location:login.php');
    }
  $name = $_SESSION['name'];
$talukaId = $_SESSION['talukaId'];
 $id = $_SESSION['id'];
require_once('inc/top.php');
$talukaName = "SELECT * FROM taluka WHERE  id = '$talukaId' ";
$run_talukaName = mysqli_query($con, $talukaName);
$row_talukaName = mysqli_fetch_array($run_talukaName);
$talukaname = $row_talukaName['name'];
?>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <?php include('inc/navbar.php');?>
            </div>
        </div>
		<div class="row" style="margin-top:10px;">
			<div class="col-md-12 jumbotron bg-secondary text-white">
                <p class="text-justify">मनुष्यबळ विकास मंत्रालय, भारत सरकार यांच्यावतीने कार्यक्षमता प्रतवारी दर्शके PERFORMANCE GRADING INDEX (P.G.I.) विकसित केलेली आहेत. या अंतर्गत महाराष्ट्र राज्याची श्रेणी सुधारण्यासाठी सर्व अधिका-यांनी आपापल्या कार्यक्षेत्रातील प्रत्येक शाळेस वर्षभरात तीन नियोजनबद्ध व उपयुक्त अशा शाळाभेटी द्याव्यात. शाळाभेटीच्या प्रथम, द्वितीय व तृतीय टप्प्यांत शाळांना भौतिक व शैक्षणिकदृष्टीने आवश्यक ते मार्गदर्शन करून आपल्या प्रत्येक भेटीची माहिती खालील मुद्द्यांमध्ये भरावी.</p>
                
            </div>
            <form action="" method="post">
            <div class="col-md-12">
            <h2 class="bg-dark text-white text-center">प्राथमिक माहिती</h2>
                <div class="form-row">
                    <div class="form-group col-md-1">
                        <label class="text-danger">पद  निवडा </label>
                        <select class="form-control" style="border: 1px solid black; padding-left:10px;" name=" pad" required oninvalid="this.setCustomValidity('कृपया  आपले पद  निवडावे  त्या शिवाय  आपला  फॉर्म  भरला  जाणार  नाही  व माहिती अपूर्ण  राहील ')" oninput="setCustomValidity('')">
                             <option value="" >कृपया  खालील एक पर्याय  निवडा </option>
                            <option value="प्राचार्य">प्राचार्य </option>
                            <option value="शिक्षणाधिकारी  ( माध्यमिक )"> शिक्षणाधिकारी  ( माध्यमिक )</option>
                            <option value="शिक्षणाधिकारी  ( प्राथमिक  )">शिक्षणाधिकारी  ( प्राथमिक  )</option>
                            <option value="वरिष्ठ अधिव्याख्याता ">वरिष्ठ अधिव्याख्याता </option>
                            <option value="अधिव्याख्याता ">अधिव्याख्याता </option>
                            <option value="उपशिक्षणाधिकारी">उपशिक्षणाधिकारी</option>
                            <option value="गटशिक्षणाधिकारी ">गटशिक्षणाधिकारी </option>
                            <option value="प्रशासन अधिकारी  (मनपा )">प्रशासन अधिकारी  (मनपा )</option>
                            <option value="शिक्षणविस्तार अधिकारी ">शिक्षणविस्तार अधिकारी </option>
                            <option value="केंद्रप्रमुख ">केंद्रप्रमुख </option>
                            <option value="विषय सहायक ">विषय सहायक </option>
                            <option value="सहायक कार्यक्रम  अधिकारी ">सहायक कार्यक्रम  अधिकारी </option>
                            <option value="समावेशित शिक्षण समन्वयक ">समावेशित शिक्षण समन्वयक </option>
                            <option value="जिल्हा समुपदेशक ">जिल्हा समुपदेशक </option>
                            <option value="विषयतज्ञ ">विषयतज्ञ </option>
                            <option value="इतर ">इतर </option>
                        </select>
                    </div>
                    <div class="form-group col-md-1">
                        <label class="text-danger">भेटीचा दिनांक </label>
                        <input type="text" class="form-control datepicker"   data-date-format="dd/mm/yyyy" name="date" style="border: 1px solid black; padding-left:10px;" required  >
                         
                    </div>
                    <div class="form-group col-md-1">
                        <label class="text-danger">भेटीचा क्रमांक </label>
                        <select class="form-control" style="border: 1px solid black; padding-left:10px;" name="visitNo" required oninvalid="this.setCustomValidity('कृपया  भेटीचा  क्रमांक  निवडावा  त्या शिवाय  आपला  फॉर्म  भरला  जाणार  नाही  व माहिती अपूर्ण  राहील ')" oninput="setCustomValidity('')">
                             <option value="" >कृपया  खालील एक पर्याय  निवडा </option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                    </div>
                    <div class="form-group col-md-3">
                        <label class="text-danger" for="schoolName"> खालील पैकी  शाळॆची  निवड  करा </label>
                        <select class="form-control custom-select" style="border: 1px solid black; padding-left:10px;" name="schoolName" id="schoolName" required oninvalid="this.setCustomValidity('कृपया  शाळेची निवड  करावी  त्या शिवाय  आपला  फॉर्म  भरला  जाणार  नाही  व माहिती अपूर्ण  राहील ')" oninput="setCustomValidity('')" >
                        <option value="" >कृपया  खालील पैकी  एक शाळा  निवडा </option>
                            <?php
                        $schoolName = "SELECT * FROM schoollist WHERE vName = '$id' ";
                    $run_schoolName = mysqli_query($con, $schoolName);
                            $ia=0;
                            while($row_schoolName = mysqli_fetch_array($run_schoolName)){
                                $sid = $row_schoolName['id'];
                                $sname = $row_schoolName['sname'];
                            ?>
                            <option value="<?php echo $sid; ?>"><?php echo $sname; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                     <div class="form-group col-md-1">
                        <label class="text-danger">UDISE नं.</label>
                        <select class="form-control" name="udise" id="udise" required style="border: 1px solid black;padding-left:10px;" >
                        </select>
                    </div> 
                     <div class="form-group col-md-1">
                        <label class="text-danger">शाळेचे माध्यम </label>
                        <select class="form-control" style="border: 1px solid black; padding-left:10px;" name="medium"  required oninvalid="this.setCustomValidity('कृपया  शाळेचे  माध्यम निवडावे  त्या शिवाय  आपला  फॉर्म  भरला  जाणार  नाही  व माहिती अपूर्ण  राहील ')" oninput="setCustomValidity('')">
                            <option value="" >कृपया  खालील एक पर्याय  निवडा </option>
                            <option value="मराठी">मराठी</option>
                            <option value="इंग्रजी">इंग्रजी </option>
                            <option value="सेमी">सेमी </option>
                            <option value="उर्दू">उर्दू </option>
                        </select >
                    </div>
                    <div class="form-group col-md-1">
                        <label class="text-danger">तालुका </label>
                        <select class="form-control" style="border: 1px solid black; padding-left:10px;" name="taluka"  id="taluka" >
                            <option value="<?php echo $talukaname;?>"><?php echo $talukaname;?></option>
                        </select>
                    </div>
                     <div class="form-group col-md-1">
                        <label class="text-danger">केंद्र</label>
                        <select class="form-control" style="border: 1px solid black; padding-left:10px;" name="block"  id="block" >
                        </select>
                    </div>
                     <div class="form-group col-md-1">
                        <label class="text-danger">शाळेचा एकूण पट </label>
                        <input type="text" class="form-control"  placeholder="(इंग्रजीत अंक लिहा.)" style="border: 1px solid black; padding-left:10px;" required name="total" oninvalid="this.setCustomValidity('कृपया  शाळेची  एकूण  पट संख्या  लिहा  त्या शिवाय  आपला  फॉर्म  भरला  जाणार  नाही  व माहिती अपूर्ण  राहील ')" oninput="setCustomValidity('')">
                    </div> 
                     <div class="form-group col-md-1">
                        <label class="text-danger">एकूण उपस्थिती </label>
                        <input type="text" class="form-control"  placeholder="(इंग्रजीत अंक लिहा.)" style="border: 1px solid black; padding-left:10px;" required name="presenty" oninvalid="this.setCustomValidity('कृपया  भेटीच्या  दिवशीची  एकूण विध्यार्थीची  उपस्थिती  लिहा  त्या शिवाय  आपला  फॉर्म  भरला  जाणार  नाही  व माहिती अपूर्ण  राहील ')" oninput="setCustomValidity('')">
                    </div>
                     <div class="form-group col-md-1">
                        <label class="text-danger">शाळासिद्धी श्रेणी</label>
                        <select class="form-control" style="border: 1px solid black; padding-left:10px;" name="grade" required oninvalid="this.setCustomValidity('कृपया  शाळा सिद्धी ची श्रेणी निवडावी  त्या शिवाय  आपला  फॉर्म  भरला  जाणार  नाही  व माहिती अपूर्ण  राहील ')" oninput="setCustomValidity('')">
                             <option value="" >कृपया  खालील एक पर्याय  निवडा </option>
                            <option value="अ ">अ </option>
                            <option value="ब ">ब </option>
                            <option value="क ">क </option>
                            <option value="ड ">ड </option>
                        </select>
                    </div>
                    
                     
                </div><hr>
            <h2 class="bg-warning text-white text-center">भौतिक सुविधा- उपलब्धता व वापर</h2>
                <p class="text-center text-dark"><b>शाळेत उपलब्ध असलेल्या खालील भौतिक सोयीसुविधांची देखभाल व वापर कसा होतो? (योग्य पर्याय निवडा.)  </b></p><hr>
                <div class="form-row">
                     <div class="form-group col-md-3">
                        <label class="text-danger">शालेय पोषण आहार स्वयंपाकखोली व भांडी स्वच्छता</label>
                        <select class="form-control" style="border: 1px solid black; padding-left:10px;" name="food" required oninvalid="this.setCustomValidity('कृपया  आपण  येथील  माहिती  भरलेली  नाही, ही  माहिती  भरावे  त्या शिवाय  आपला  फॉर्म  भरला  जाणार  नाही  व माहिती अपूर्ण  राहील ')" oninput="setCustomValidity('')">
                             <option value="" >कृपया  खालील एक पर्याय  निवडा </option>
                            <option value="नेहमी">नेहमी</option>
                            <option value="कधी कधी"> कधी कधी</option>
                            <option value="कधीच नाही">कधीच नाही </option>
                            <option value="उपलब्ध नाही">उपलब्ध नाही </option>
                        </select>
                    </div>
                    
                    <div class="form-group col-md-2">
                        <label class="text-danger">स्वच्छतागृह</label>
                        <select class="form-control" style="border: 1px solid black; padding-left:10px;" name="bathroom" required oninvalid="this.setCustomValidity('कृपया  आपण  येथील  माहिती  भरलेली  नाही, ही  माहिती  भरावे  त्या शिवाय  आपला  फॉर्म  भरला  जाणार  नाही  व माहिती अपूर्ण  राहील ')" oninput="setCustomValidity('')">
                             <option value="" >कृपया  खालील एक पर्याय  निवडा </option>
                            <option value="नेहमी">नेहमी</option>
                            <option value="कधी कधी"> कधी कधी</option>
                            <option value="कधीच नाही">कधीच नाही </option>
                            <option value="उपलब्ध नाही">उपलब्ध नाही </option>
                        </select>
                    </div>
                    
                    <div class="form-group col-md-2">
                        <label class="text-danger">शालेय इमारत व परिसर स्वच्छता</label>
                        <select class="form-control" style="border: 1px solid black; padding-left:10px;" name="building" required oninvalid="this.setCustomValidity('कृपया  आपण  येथील  माहिती  भरलेली  नाही, ही  माहिती  भरावे  त्या शिवाय  आपला  फॉर्म  भरला  जाणार  नाही  व माहिती अपूर्ण  राहील ')" oninput="setCustomValidity('')">
                             <option value="" >कृपया  खालील एक पर्याय  निवडा </option>
                            <option value="नेहमी">नेहमी</option>
                            <option value="कधी कधी"> कधी कधी</option>
                            <option value="कधीच नाही">कधीच नाही </option>
                            <option value="उपलब्ध नाही">उपलब्ध नाही </option>
                        </select>
                    </div>
                    <div class="form-group col-md-2">
                        <label class="text-danger">क्रीडासाहित्य</label>
                        <select class="form-control" style="border: 1px solid black; padding-left:10px;" name="sports" required oninvalid="this.setCustomValidity('कृपया  आपण  येथील  माहिती  भरलेली  नाही, ही  माहिती  भरावे  त्या शिवाय  आपला  फॉर्म  भरला  जाणार  नाही  व माहिती अपूर्ण  राहील ')" oninput="setCustomValidity('')">
                             <option value="" >कृपया  खालील एक पर्याय  निवडा </option>
                            <option value="नेहमी">नेहमी</option>
                            <option value="कधी कधी"> कधी कधी</option>
                            <option value="कधीच नाही">कधीच नाही </option>
                            <option value="उपलब्ध नाही">उपलब्ध नाही </option>
                        </select>
                    </div>
                    
                    <div class="form-group col-md-2">
                        <label class="text-danger">पिण्याच्या पाण्याची सुविधा</label>
                        <select class="form-control" style="border: 1px solid black; padding-left:10px;" name="water" required oninvalid="this.setCustomValidity('कृपया  आपण  येथील  माहिती  भरलेली  नाही, ही  माहिती  भरावे  त्या शिवाय  आपला  फॉर्म  भरला  जाणार  नाही  व माहिती अपूर्ण  राहील ')" oninput="setCustomValidity('')">
                             <option value="" >कृपया  खालील एक पर्याय  निवडा </option>
                            <option value="नेहमी">नेहमी</option>
                            <option value="कधी कधी"> कधी कधी</option>
                            <option value="कधीच नाही">कधीच नाही </option>
                            <option value="उपलब्ध नाही">उपलब्ध नाही </option>
                        </select>
                    </div>
                    <div class="form-group col-md-1">
                        <label class="text-danger">हॅंडवॉश स्टेशन</label>
                        <select class="form-control" style="border: 1px solid black; padding-left:10px;" name="handwash" required oninvalid="this.setCustomValidity('कृपया  आपण  येथील  माहिती  भरलेली  नाही, ही  माहिती  भरावे  त्या शिवाय  आपला  फॉर्म  भरला  जाणार  नाही  व माहिती अपूर्ण  राहील ')" oninput="setCustomValidity('')">
                             <option value="" >कृपया  खालील एक पर्याय  निवडा </option>
                            <option value="नेहमी">नेहमी</option>
                            <option value="कधी कधी"> कधी कधी</option>
                            <option value="कधीच नाही">कधीच नाही </option>
                            <option value="उपलब्ध नाही">उपलब्ध नाही </option>
                        </select>
                    </div>                     
                     <div class="form-group col-md-2">
                        <label class="text-danger">आरोग्य तपासणी</label>
                        <select class="form-control" style="border: 1px solid black; padding-left:10px;" name="health" required oninvalid="this.setCustomValidity('कृपया  आपण  येथील  माहिती  भरलेली  नाही, ही  माहिती  भरावे  त्या शिवाय  आपला  फॉर्म  भरला  जाणार  नाही  व माहिती अपूर्ण  राहील ')" oninput="setCustomValidity('')">
                             <option value="" >कृपया  खालील एक पर्याय  निवडा </option>
                            <option value="नेहमी">नेहमी</option>
                            <option value="कधी कधी"> कधी कधी</option>
                            <option value="कधीच नाही">कधीच नाही </option>
                            <option value="उपलब्ध नाही">उपलब्ध नाही </option>
                        </select>
                    </div>
                    <div class="form-group col-md-2">
                        <label class="text-danger">डिजिटल साधनांचा वापर</label>
                        <select class="form-control" style="border: 1px solid black; padding-left:10px;" name="digital" required oninvalid="this.setCustomValidity('कृपया  आपण  येथील  माहिती  भरलेली  नाही, ही  माहिती  भरावे  त्या शिवाय  आपला  फॉर्म  भरला  जाणार  नाही  व माहिती अपूर्ण  राहील ')" oninput="setCustomValidity('')">
                             <option value="" >कृपया  खालील एक पर्याय  निवडा </option>
                            <option value="नेहमी">नेहमी</option>
                            <option value="कधी कधी"> कधी कधी</option>
                            <option value="कधीच नाही">कधीच नाही </option>
                            <option value="उपलब्ध नाही">उपलब्ध नाही </option>
                        </select>
                    </div>
                     <div class="form-group col-md-2">
                        <label class="text-danger">शाळेतील सोलार लॅम्प</label>
                        <select class="form-control" style="border: 1px solid black; padding-left:10px;" name="solar" required oninvalid="this.setCustomValidity('कृपया  आपण  येथील  माहिती  भरलेली  नाही, ही  माहिती  भरावे  त्या शिवाय  आपला  फॉर्म  भरला  जाणार  नाही  व माहिती अपूर्ण  राहील ')" oninput="setCustomValidity('')">
                             <option value="" >कृपया  खालील एक पर्याय  निवडा </option>
                            <option value="नेहमी">नेहमी</option>
                            <option value="कधी कधी"> कधी कधी</option>
                            <option value="कधीच नाही">कधीच नाही </option>
                            <option value="उपलब्ध नाही">उपलब्ध नाही </option>
                        </select>
                    </div>
                     <div class="form-group col-md-3">
                        <label class="text-danger">शाळेचे विद्युतीकरण व विद्युत उपकरणे</label>
                        <select class="form-control" style="border: 1px solid black; padding-left:10px;" name="electricity" required oninvalid="this.setCustomValidity('कृपया  आपण  येथील  माहिती  भरलेली  नाही, ही  माहिती  भरावे  त्या शिवाय  आपला  फॉर्म  भरला  जाणार  नाही  व माहिती अपूर्ण  राहील ')" oninput="setCustomValidity('')">
                             <option value="" >कृपया  खालील एक पर्याय  निवडा </option>
                            <option value="नेहमी">नेहमी</option>
                            <option value="कधी कधी"> कधी कधी</option>
                            <option value="कधीच नाही">कधीच नाही </option>
                            <option value="उपलब्ध नाही">उपलब्ध नाही </option>
                        </select>
                    </div>
                    <div class="form-group col-md-2">
                        <label class="text-danger">बालवाचनालय/ शिक्षक वाचनालय</label>
                        <select class="form-control" style="border: 1px solid black; padding-left:10px;" name="liberary" required oninvalid="this.setCustomValidity('कृपया  आपण  येथील  माहिती  भरलेली  नाही, ही  माहिती  भरावे  त्या शिवाय  आपला  फॉर्म  भरला  जाणार  नाही  व माहिती अपूर्ण  राहील ')" oninput="setCustomValidity('')">
                             <option value="" >कृपया  खालील एक पर्याय  निवडा </option>
                            <option value="नेहमी">नेहमी</option>
                            <option value="कधी कधी"> कधी कधी</option>
                            <option value="कधीच नाही">कधीच नाही </option>
                            <option value="उपलब्ध नाही">उपलब्ध नाही </option>
                        </select>
                    </div>
                     
                </div><hr>
                <h2 class="bg-info text-white text-center">आवश्यक शैक्षणिक बाबी</h2>
                <p class="text-center text-dark"><b>शाळेत उपलब्ध असलेल्या खालील आवश्यक शैक्षणिक बाबी यांची देखभाल व वापर कसा होतो? (योग्य पर्याय निवडा.)</b></p><hr>
                <div class="form-row">
                     <div class="form-group col-md-3">
                        <label class="text-danger">भाषा व गणित मुलभूत क्षमता विकसन पेटी</label>
                        <select class="form-control" style="border: 1px solid black; padding-left:10px;" name="language" required oninvalid="this.setCustomValidity('कृपया  आपण  येथील  माहिती  भरलेली  नाही, ही  माहिती  भरावे  त्या शिवाय  आपला  फॉर्म  भरला  जाणार  नाही  व माहिती अपूर्ण  राहील ')" oninput="setCustomValidity('')">
                             <option value="" >कृपया  खालील एक पर्याय  निवडा </option>
                            <option value="नेहमी">नेहमी</option>
                            <option value="कधी कधी"> कधी कधी</option>
                            <option value="कधीच नाही">कधीच नाही </option>
                            <option value="उपलब्ध नाही">उपलब्ध नाही </option>
                            <option value="लागू नाही">लागू नाही</option>
                        </select>
                    </div>
                    <div class="form-group col-md-3">
                        <label class="text-danger">भास्कराचार्य गणित पेटी उपलब्धता व वापर</label>
                        <select class="form-control" style="border: 1px solid black; padding-left:10px;" name="math" required oninvalid="this.setCustomValidity('कृपया  आपण  येथील  माहिती  भरलेली  नाही, ही  माहिती  भरावे  त्या शिवाय  आपला  फॉर्म  भरला  जाणार  नाही  व माहिती अपूर्ण  राहील ')" oninput="setCustomValidity('')">
                             <option value="" >कृपया  खालील एक पर्याय  निवडा </option>
                            <option value="नेहमी">नेहमी</option>
                            <option value="कधी कधी"> कधी कधी</option>
                            <option value="कधीच नाही">कधीच नाही </option>
                            <option value="उपलब्ध नाही">उपलब्ध नाही </option>
                            <option value="लागू नाही">लागू नाही</option>
                        </select>
                    </div>
                    <div class="form-group col-md-2">
                        <label class="text-danger">इंग्रजी भाषा विकास पेटी </label>
                        <select class="form-control" style="border: 1px solid black; padding-left:10px;" name="english" required oninvalid="this.setCustomValidity('कृपया  आपण  येथील  माहिती  भरलेली  नाही, ही  माहिती  भरावे  त्या शिवाय  आपला  फॉर्म  भरला  जाणार  नाही  व माहिती अपूर्ण  राहील ')" oninput="setCustomValidity('')">
                             <option value="" >कृपया  खालील एक पर्याय  निवडा </option>
                            <option value="नेहमी">नेहमी</option>
                            <option value="कधी कधी"> कधी कधी</option>
                            <option value="कधीच नाही">कधीच नाही </option>
                            <option value="उपलब्ध नाही">उपलब्ध नाही </option>
                            <option value="लागू नाही">लागू नाही</option>
                        </select>
                    </div>
                    <div class="form-group col-md-2">
                        <label class="text-danger">उर्दू भाषा विकास पेटी</label>
                        <select class="form-control" style="border: 1px solid black; padding-left:10px;" name="urdu" required oninvalid="this.setCustomValidity('कृपया  आपण  येथील  माहिती  भरलेली  नाही, ही  माहिती  भरावे  त्या शिवाय  आपला  फॉर्म  भरला  जाणार  नाही  व माहिती अपूर्ण  राहील ')" oninput="setCustomValidity('')">
                             <option value="" >कृपया  खालील एक पर्याय  निवडा </option>
                            <option value="नेहमी">नेहमी</option>
                            <option value="कधी कधी"> कधी कधी</option>
                            <option value="कधीच नाही">कधीच नाही </option>
                            <option value="उपलब्ध नाही">उपलब्ध नाही </option>
                            <option value="लागू नाही">लागू नाही</option>
                        </select>
                    </div>
                    <div class="form-group col-md-2">
                        <label class="text-danger">खगोलशास्त्र पेटी</label>
                        <select class="form-control" style="border: 1px solid black; padding-left:10px;" name="geopeti" required oninvalid="this.setCustomValidity('कृपया  आपण  येथील  माहिती  भरलेली  नाही, ही  माहिती  भरावे  त्या शिवाय  आपला  फॉर्म  भरला  जाणार  नाही  व माहिती अपूर्ण  राहील ')" oninput="setCustomValidity('')">
                             <option value="" >कृपया  खालील एक पर्याय  निवडा </option>
                            <option value="नेहमी">नेहमी</option>
                            <option value="कधी कधी"> कधी कधी</option>
                            <option value="कधीच नाही">कधीच नाही </option>
                            <option value="उपलब्ध नाही">उपलब्ध नाही </option>
                            <option value="लागू नाही">लागू नाही</option>
                        </select>
                    </div>
                    <div class="form-group col-md-3">
                        <label class="text-danger">नाविन्यपूर्ण विज्ञान केंद्र </label>
                        <select class="form-control" style="border: 1px solid black; padding-left:10px;" name="sciencecenter" required oninvalid="this.setCustomValidity('कृपया  आपण  येथील  माहिती  भरलेली  नाही, ही  माहिती  भरावे  त्या शिवाय  आपला  फॉर्म  भरला  जाणार  नाही  व माहिती अपूर्ण  राहील ')" oninput="setCustomValidity('')">
                             <option value="" >कृपया  खालील एक पर्याय  निवडा </option>
                            <option value="नेहमी">नेहमी</option>
                            <option value="कधी कधी"> कधी कधी</option>
                            <option value="कधीच नाही">कधीच नाही </option>
                            <option value="उपलब्ध नाही">उपलब्ध नाही </option>
                            <option value="लागू नाही">लागू नाही</option>
                        </select>
                    </div>
                    <div class="form-group col-md-3">
                        <label class="text-danger">शालेय स्तरावरील विज्ञान साहित्य</label>
                        <select class="form-control" style="border: 1px solid black; padding-left:10px;" name="scidevice" required oninvalid="this.setCustomValidity('कृपया  आपण  येथील  माहिती  भरलेली  नाही, ही  माहिती  भरावे  त्या शिवाय  आपला  फॉर्म  भरला  जाणार  नाही  व माहिती अपूर्ण  राहील ')" oninput="setCustomValidity('')">
                             <option value="" >कृपया  खालील एक पर्याय  निवडा </option>
                            <option value="नेहमी">नेहमी</option>
                            <option value="कधी कधी"> कधी कधी</option>
                            <option value="कधीच नाही">कधीच नाही </option>
                            <option value="उपलब्ध नाही">उपलब्ध नाही </option>
                            <option value="लागू नाही">लागू नाही</option>
                        </select>
                    </div>
                    <div class="form-group col-md-3">
                        <label class="text-danger">मूलभूत वाचन व गणित संबोध प्रशिक्षण हस्तपुस्तिका</label>
                        <select class="form-control" style="border: 1px solid black; padding-left:10px;" name="mathHandbook" required oninvalid="this.setCustomValidity('कृपया  आपण  येथील  माहिती  भरलेली  नाही, ही  माहिती  भरावे  त्या शिवाय  आपला  फॉर्म  भरला  जाणार  नाही  व माहिती अपूर्ण  राहील ')" oninput="setCustomValidity('')">
                             <option value="" >कृपया  खालील एक पर्याय  निवडा </option>
                            <option value="नेहमी">नेहमी</option>
                            <option value="कधी कधी"> कधी कधी</option>
                            <option value="कधीच नाही">कधीच नाही </option>
                            <option value="उपलब्ध नाही">उपलब्ध नाही </option>
                            <option value="लागू नाही">लागू नाही</option>
                        </select>
                    </div>
                    <div class="form-group col-md-3">
                        <label class="text-danger">अध्ययन निष्पत्ती हस्तपुस्तिका</label>
                        <select class="form-control" style="border: 1px solid black; padding-left:10px;" name="aHandbook" required oninvalid="this.setCustomValidity('कृपया  आपण  येथील  माहिती  भरलेली  नाही, ही  माहिती  भरावे  त्या शिवाय  आपला  फॉर्म  भरला  जाणार  नाही  व माहिती अपूर्ण  राहील ')" oninput="setCustomValidity('')">
                             <option value="" >कृपया  खालील एक पर्याय  निवडा </option>
                            <option value="नेहमी">नेहमी</option>
                            <option value="कधी कधी"> कधी कधी</option>
                            <option value="कधीच नाही">कधीच नाही </option>
                            <option value="उपलब्ध नाही">उपलब्ध नाही </option>
                            <option value="लागू नाही">लागू नाही</option>
                        </select>
                    </div>
                    <div class="form-group col-md-3">
                        <label class="text-danger">अध्ययन निष्पत्तींवर आधारित कृतिपुस्तिका</label>
                        <select class="form-control" style="border: 1px solid black; padding-left:10px;" name="kratibook" required oninvalid="this.setCustomValidity('कृपया  आपण  येथील  माहिती  भरलेली  नाही, ही  माहिती  भरावे  त्या शिवाय  आपला  फॉर्म  भरला  जाणार  नाही  व माहिती अपूर्ण  राहील ')" oninput="setCustomValidity('')">
                             <option value="" >कृपया  खालील एक पर्याय  निवडा </option>
                            <option value="नेहमी">नेहमी</option>
                            <option value="कधी कधी"> कधी कधी</option>
                            <option value="कधीच नाही">कधीच नाही </option>
                            <option value="उपलब्ध नाही">उपलब्ध नाही </option>
                            <option value="लागू नाही">लागू नाही</option>
                        </select>
                    </div>
                    <div class="form-group col-md-3">
                        <label class="text-danger">NAS पूर्वतयारी सराव प्रश्नसंच</label>
                        <select class="form-control" style="border: 1px solid black; padding-left:10px;" name="nas" required oninvalid="this.setCustomValidity('कृपया  आपण  येथील  माहिती  भरलेली  नाही, ही  माहिती  भरावे  त्या शिवाय  आपला  फॉर्म  भरला  जाणार  नाही  व माहिती अपूर्ण  राहील ')" oninput="setCustomValidity('')">
                             <option value="" >कृपया  खालील एक पर्याय  निवडा </option>
                            <option value="नेहमी">नेहमी</option>
                            <option value="कधी कधी"> कधी कधी</option>
                            <option value="कधीच नाही">कधीच नाही </option>
                            <option value="उपलब्ध नाही">उपलब्ध नाही </option>
                            <option value="लागू नाही">लागू नाही</option>
                        </select>
                    </div>
                    <div class="form-group col-md-3">
                        <label class="text-danger">मूल्यवर्धन हस्तपुस्तिका</label>
                        <select class="form-control" style="border: 1px solid black; padding-left:10px;" name="mulyabook" required oninvalid="this.setCustomValidity('कृपया  आपण  येथील  माहिती  भरलेली  नाही, ही  माहिती  भरावे  त्या शिवाय  आपला  फॉर्म  भरला  जाणार  नाही  व माहिती अपूर्ण  राहील ')" oninput="setCustomValidity('')">
                             <option value="" >कृपया  खालील एक पर्याय  निवडा </option>
                            <option value="नेहमी">नेहमी</option>
                            <option value="कधी कधी"> कधी कधी</option>
                            <option value="कधीच नाही">कधीच नाही </option>
                            <option value="उपलब्ध नाही">उपलब्ध नाही </option>
                            <option value="लागू नाही">लागू नाही</option>
                        </select>
                    </div>
                    <div class="form-group col-md-3">
                        <label class="text-danger">TAG RESOURCE YEAR 1 AND 2 BOOK</label>
                        <select class="form-control" style="border: 1px solid black; padding-left:10px;" name="tagResource" required oninvalid="this.setCustomValidity('कृपया  आपण  येथील  माहिती  भरलेली  नाही, ही  माहिती  भरावे  त्या शिवाय  आपला  फॉर्म  भरला  जाणार  नाही  व माहिती अपूर्ण  राहील ')" oninput="setCustomValidity('')">
                             <option value="" >कृपया  खालील एक पर्याय  निवडा </option>
                            <option value="नेहमी">नेहमी</option>
                            <option value="कधी कधी"> कधी कधी</option>
                            <option value="कधीच नाही">कधीच नाही </option>
                            <option value="उपलब्ध नाही">उपलब्ध नाही </option>
                            <option value="लागू नाही">लागू नाही</option>
                        </select>
                    </div>
                    <div class="form-group col-md-3">
                        <label class="text-danger">READ TO ME SOFTWARE INSTALLATION</label>
                        <select class="form-control" style="border: 1px solid black; padding-left:10px;" name="readToMe" required oninvalid="this.setCustomValidity('कृपया  आपण  येथील  माहिती  भरलेली  नाही, ही  माहिती  भरावे  त्या शिवाय  आपला  फॉर्म  भरला  जाणार  नाही  व माहिती अपूर्ण  राहील ')" oninput="setCustomValidity('')">
                             <option value="" >कृपया  खालील एक पर्याय  निवडा </option>
                            <option value="नेहमी">नेहमी</option>
                            <option value="कधी कधी"> कधी कधी</option>
                            <option value="कधीच नाही">कधीच नाही </option>
                            <option value="उपलब्ध नाही">उपलब्ध नाही </option>
                            <option value="लागू नाही">लागू नाही</option>
                        </select>
                    </div>
                </div><hr>
                <h2 class="bg-dark text-white text-center">अनुषंगिक बाबी</h2>
                <p class="text-center text-dark"><b>योग्य पर्याय निवडा.</b></p><hr>
                <div class="form-row">
                     <div class="form-group col-md-3">
                        <label class="text-danger">शाळा विकास निधी लोकवर्गणीतून मिळवला आहे काय? </label>
                        <select class="form-control" style="border: 1px solid black; padding-left:10px;" name="donate" required oninvalid="this.setCustomValidity('कृपया  आपण  येथील  माहिती  भरलेली  नाही, ही  माहिती  भरावे  त्या शिवाय  आपला  फॉर्म  भरला  जाणार  नाही  व माहिती अपूर्ण  राहील ')" oninput="setCustomValidity('')">
                             <option value="" >कृपया  खालील एक पर्याय  निवडा </option>
                            <option value="होय">होय</option>
                            <option value="नाही "> नाही </option>
                        </select>
                    </div>
                     <div class="form-group col-md-3">
                        <label class="text-danger">शालेय ग्रंथालयात कृषिविषयक मासिके उपलब्ध आहेत काय? </label>
                        <select class="form-control" style="border: 1px solid black; padding-left:10px;" name="agribook" required oninvalid="this.setCustomValidity('कृपया  आपण  येथील  माहिती  भरलेली  नाही, ही  माहिती  भरावे  त्या शिवाय  आपला  फॉर्म  भरला  जाणार  नाही  व माहिती अपूर्ण  राहील ')" oninput="setCustomValidity('')">
                             <option value="" >कृपया  खालील एक पर्याय  निवडा </option>
                            <option value="होय">होय</option>
                            <option value="नाही "> नाही </option>
                        </select>
                    </div>
                     <div class="form-group col-md-3">
                        <label class="text-danger">व्यवसाय मार्गदर्शन कोपरा आहे काय?  </label>
                        <select class="form-control" style="border: 1px solid black; padding-left:10px;" name="profession" required oninvalid="this.setCustomValidity('कृपया  आपण  येथील  माहिती  भरलेली  नाही, ही  माहिती  भरावे  त्या शिवाय  आपला  फॉर्म  भरला  जाणार  नाही  व माहिती अपूर्ण  राहील ')" oninput="setCustomValidity('')">
                             <option value="" >कृपया  खालील एक पर्याय  निवडा </option>
                            <option value="होय">होय</option>
                            <option value="नाही "> नाही </option>
                            <option value="लागू नाही"> लागू नाही</option>
                        </select>
                    </div>
                    <div class="form-group col-md-3">
                        <label class="text-danger">व्यवसाय मार्गदर्शन परिषद घेतली आहे काय?   </label>
                        <select class="form-control" style="border: 1px solid black; padding-left:10px;" name="professionParishad" required oninvalid="this.setCustomValidity('कृपया  आपण  येथील  माहिती  भरलेली  नाही, ही  माहिती  भरावे  त्या शिवाय  आपला  फॉर्म  भरला  जाणार  नाही  व माहिती अपूर्ण  राहील ')" oninput="setCustomValidity('')">
                             <option value="" >कृपया  खालील एक पर्याय  निवडा </option>
                            <option value="होय">होय</option>
                           <option value="नाही "> नाही </option>
                            <option value="लागू नाही"> लागू नाही</option>
                        </select>
                    </div>
                    <div class="form-group col-md-3">
                        <label class="text-danger">कलचाचणी व अभिक्षमता चाचणी घेतली आहे काय?  </label>
                        <select class="form-control" style="border: 1px solid black; padding-left:10px;" name="kalchachni" required oninvalid="this.setCustomValidity('कृपया  आपण  येथील  माहिती  भरलेली  नाही, ही  माहिती  भरावे  त्या शिवाय  आपला  फॉर्म  भरला  जाणार  नाही  व माहिती अपूर्ण  राहील ')" oninput="setCustomValidity('')">
                             <option value="" >कृपया  खालील एक पर्याय  निवडा </option>
                            <option value="होय">होय</option>
                            <option value="नाही "> नाही </option>
                            <option value="लागू नाही"> लागू नाही</option>
                        </select>
                    </div>
                    <div class="form-group col-md-9">
                        <label class="text-danger">मूलभूत वाचन व गणित साहित्यपेटीतील साहित्य वापरानंतरही संबोध 100% मुलांपर्यंत पोहचवण्यात कोणती अडचण जाणवली ? (कोणतीही एक अडचण नोंदवा.) </label>
                        <input type="text" class="form-control"  placeholder="येथे  लिहा " style="border: 1px solid black; padding-left:10px;" required name="sambhod" oninvalid="this.setCustomValidity('कृपया  आपण  येथील  माहिती  भरलेली  नाही, ही  माहिती  भरावे  त्या शिवाय  आपला  फॉर्म  भरला  जाणार  नाही  व माहिती अपूर्ण  राहील ')" oninput="setCustomValidity('')">
                    </div>
                    <div class="form-group col-md-6">
                        <label class="text-danger">अध्ययनस्तर माहितीनुसार विद्यार्थ्यांचे स्तरनिहाय गट केले आहेत काय? </label>
                        <select class="form-control" style="border: 1px solid black; padding-left:10px;" name="sgroup" required oninvalid="this.setCustomValidity('कृपया  आपण  येथील  माहिती  भरलेली  नाही, ही  माहिती  भरावे  त्या शिवाय  आपला  फॉर्म  भरला  जाणार  नाही  व माहिती अपूर्ण  राहील ')" oninput="setCustomValidity('')">
                             <option value="" >कृपया  खालील एक पर्याय  निवडा </option>
                            <option value="होय">होय</option>
                            <option value="नाही "> नाही </option>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label class="text-danger">विद्यार्थ्यांनी पुढचा स्तर गाठण्यासाठी आपण भाषा व गणित कृती आराखडा वापरात आणला आहे काय? </label>
                        <select class="form-control" style="border: 1px solid black; padding-left:10px;" name="nextStage" required oninvalid="this.setCustomValidity('कृपया  आपण  येथील  माहिती  भरलेली  नाही, ही  माहिती  भरावे  त्या शिवाय  आपला  फॉर्म  भरला  जाणार  नाही  व माहिती अपूर्ण  राहील ')" oninput="setCustomValidity('')">
                             <option value="" >कृपया  खालील एक पर्याय  निवडा </option>
                            <option value="होय">होय</option>
                            <option value="नाही "> नाही </option>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label class="text-danger">उर्वरित विद्यार्थ्यांना उच्चस्तर गाठण्यासाठी कोणत्या अडचणी जाणवतात? (कोणतीही एक अडचण नोंदवा.)</label>
                        <input type="text" class="form-control"  placeholder="येथे  लिहा " style="border: 1px solid black; padding-left:10px;" required name="adchan" oninvalid="this.setCustomValidity('कृपया  आपण  येथील  माहिती  भरलेली  नाही, ही  माहिती  भरावे  त्या शिवाय  आपला  फॉर्म  भरला  जाणार  नाही  व माहिती अपूर्ण  राहील ')" oninput="setCustomValidity('')">
                        
                    </div>
                    <div class="form-group col-md-6">
                        <label class="text-danger">अप्रगत विद्यार्थ्यांना प्रगत करण्यासाठी केंद्र/तालुका/जिल्हास्तरावर कार्यशाळेची आवश्यकता वाटते काय?  </label>
                        <select class="form-control" style="border: 1px solid black; padding-left:10px;" name="help" required oninvalid="this.setCustomValidity('कृपया  आपण  येथील  माहिती  भरलेली  नाही, ही  माहिती  भरावे  त्या शिवाय  आपला  फॉर्म  भरला  जाणार  नाही  व माहिती अपूर्ण  राहील ')" oninput="setCustomValidity('')">
                             <option value="" >कृपया  खालील एक पर्याय  निवडा </option>
                            <option value="होय">होय</option>
                            <option value="नाही "> नाही </option>
                        </select>
                    </div>
                    <div class="form-group col-md-12">
                        <label class="text-danger">100% गुणवत्ता वाढीसाठी आपला वर्ग/विषय याकरिता DIECPD नांदेड व जि.प. शिक्षण विभाग नांदेड यांची कोणती मदत हवी आहे? (नोंदवा.)</label>
                        <input type="text" class="form-control"  placeholder="येथे  लिहा " style="border: 1px solid black; padding-left:10px;" required name="subjectHelp" oninvalid="this.setCustomValidity('कृपया  आपण  येथील  माहिती  भरलेली  नाही, ही  माहिती  भरावे  त्या शिवाय  आपला  फॉर्म  भरला  जाणार  नाही  व माहिती अपूर्ण  राहील ')" oninput="setCustomValidity('')">
                        
                    </div>
                </div><hr>
                <h2 class="bg-primary  text-white text-center">अध्ययनस्तर निश्चिती</h2>
                <p class="text-center text-dark"><b>मराठी व गणित विषयातील केवळ उच्चस्तर प्राप्त विद्यार्थ्यांची संख्या नोंदवावी. लागू नसलेल्या वर्गांनी माहिती भरू नये.सर्व आकडे इंग्रजीत नोंदवावेत.</b></p><hr>
                <div class="form-row">
                     <div class="form-group col-md-6">
                        <label class="text-danger">इ.1 ते 8 अध्ययन स्तर मराठी उच्च स्तर प्राप्त विद्यार्थी संख्या</label>
                        <input type="text" class="form-control"  placeholder="इ.1 ते 8 अध्ययन स्तर मराठी उच्च स्तर प्राप्त विद्यार्थी संख्य " style="border: 1px solid black; padding-left:10px;" required name="marthiStage" oninvalid="this.setCustomValidity('कृपया  आपण  येथील  माहिती  भरलेली  नाही, ही  माहिती  भरावे  त्या शिवाय  आपला  फॉर्म  भरला  जाणार  नाही  व माहिती अपूर्ण  राहील ')" oninput="setCustomValidity('')">
                    </div>
                    <div class="form-group col-md-6">
                        <label class="text-danger">इ.1 ते 8 अध्ययन स्तर गणित उच्च स्तर प्राप्त विद्यार्थी संख्या</label>
                        <input type="text" class="form-control"  placeholder="इ.1 ते 8 अध्ययन स्तर मराठी उच्च स्तर प्राप्त विद्यार्थी संख्य " style="border: 1px solid black; padding-left:10px;" required name="mathStage" oninvalid="this.setCustomValidity('कृपया  आपण  येथील  माहिती  भरलेली  नाही, ही  माहिती  भरावे  त्या शिवाय  आपला  फॉर्म  भरला  जाणार  नाही  व माहिती अपूर्ण  राहील ')" oninput="setCustomValidity('')">
                    </div>
                </div><hr>
                <h2 class="bg-secondary  text-white text-center">अध्ययन निष्पत्त्तींवर आधारित चाचणीची माहिती</h2>
                <p class="text-center text-dark"><b>याठिकाणी 75% पेक्षा अधिक गुण प्राप्त असलेली विद्यार्थी संख्या विषयनिहाय नोंदवावी.सर्व आकडे इंग्रजीत नोंदवावेत.</b></p><hr>
                <div class="form-row">
                     <div class="form-group col-md-2">
                        <label class="text-danger">विषय- मराठी</label>
                        <input type="text" class="form-control"  placeholder="मराठी " style="border: 1px solid black; padding-left:10px;" required name="marathiTest" oninvalid="this.setCustomValidity('कृपया  आपण  येथील  माहिती  भरलेली  नाही, ही  माहिती  भरावे  त्या शिवाय  आपला  फॉर्म  भरला  जाणार  नाही  व माहिती अपूर्ण  राहील ')" oninput="setCustomValidity('')">
                    </div>
                    <div class="form-group col-md-2">
                        <label class="text-danger">विषय- इंग्रजी</label>
                        <input type="text" class="form-control"  placeholder="इंग्रज" style="border: 1px solid black; padding-left:10px;" required name="englishTest" oninvalid="this.setCustomValidity('कृपया  आपण  येथील  माहिती  भरलेली  नाही, ही  माहिती  भरावे  त्या शिवाय  आपला  फॉर्म  भरला  जाणार  नाही  व माहिती अपूर्ण  राहील ')" oninput="setCustomValidity('')">
                    </div>
                    <div class="form-group col-md-2">
                        <label class="text-danger">विषय- गणित</label>
                        <input type="text" class="form-control"  placeholder="गणित" style="border: 1px solid black; padding-left:10px;" required name="mathTest" oninvalid="this.setCustomValidity('कृपया  आपण  येथील  माहिती  भरलेली  नाही, ही  माहिती  भरावे  त्या शिवाय  आपला  फॉर्म  भरला  जाणार  नाही  व माहिती अपूर्ण  राहील ')" oninput="setCustomValidity('')">
                    </div>
                    <div class="form-group col-md-3">
                        <label class="text-danger">विषय- सामान्य विज्ञान/ परिसर अभ्यास</label>
                        <input type="text" class="form-control"  placeholder="सामान्य विज्ञान/ परिसर अभ्यास " style="border: 1px solid black; padding-left:10px;" required name="scienceTest" oninvalid="this.setCustomValidity('कृपया  आपण  येथील  माहिती  भरलेली  नाही, ही  माहिती  भरावे  त्या शिवाय  आपला  फॉर्म  भरला  जाणार  नाही  व माहिती अपूर्ण  राहील ')" oninput="setCustomValidity('')">
                    </div>
                    <div class="form-group col-md-3">
                        <label class="text-danger">विषय- सामाजिक शास्त्रे</label>
                        <input type="text" class="form-control"  placeholder="सामाजिक शास्त्रे" style="border: 1px solid black; padding-left:10px;" required name="socialTest" oninvalid="this.setCustomValidity('कृपया  आपण  येथील  माहिती  भरलेली  नाही, ही  माहिती  भरावे  त्या शिवाय  आपला  फॉर्म  भरला  जाणार  नाही  व माहिती अपूर्ण  राहील ')" oninput="setCustomValidity('')">
                    </div>
                </div><hr>
                <h2 class="bg-dark text-white text-center">शालेय गुणवत्ता विषयक मुद्दे
</h2>
                <p class="text-center text-dark"><b>याठिकाणी शाळेचे एकूण सर्व गुणवत्ता विषयक मुद्दे विचारात घेवून श्रेणी निश्चित करून नोदवावी.</b></p><hr>
                <div class="form-row">
                     <div class="form-group col-md-3">
                        <label class="text-danger">TAG मधील कृतींचा वापर</label>
                        <select class="form-control" style="border: 1px solid black; padding-left:10px;" name="tagUse" required oninvalid="this.setCustomValidity('कृपया  आपण  येथील  माहिती  भरलेली  नाही, ही  माहिती  भरावे  त्या शिवाय  आपला  फॉर्म  भरला  जाणार  नाही  व माहिती अपूर्ण  राहील ')" oninput="setCustomValidity('')">
                             <option value="" >कृपया  खालील एक पर्याय  निवडा </option>
                            <option value="सुधारण्यास वाव">सुधारण्यास वाव</option>
                            <option value="बरा"> बरा</option>
                            <option value="चांगला">चांगला </option>
                            <option value="उत्कृष्ट">उत्कृष्ट </option>
                            <option value="अतिउत्कृष्ट">अतिउत्कृष्ट</option>
                            <option value="लागू नाही">लागू नाही</option>
                        </select>
                    </div>
                    <div class="form-group col-md-3">
                        <label class="text-danger">ज्ञानरचनावादी वर्ग</label>
                        <select class="form-control" style="border: 1px solid black; padding-left:10px;" name="kClass" required oninvalid="this.setCustomValidity('कृपया  आपण  येथील  माहिती  भरलेली  नाही, ही  माहिती  भरावे  त्या शिवाय  आपला  फॉर्म  भरला  जाणार  नाही  व माहिती अपूर्ण  राहील ')" oninput="setCustomValidity('')">
                             <option value="" >कृपया  खालील एक पर्याय  निवडा </option>
                            <option value="सुधारण्यास वाव">सुधारण्यास वाव</option>
                            <option value="बरा"> बरा</option>
                            <option value="चांगला">चांगला </option>
                            <option value="उत्कृष्ट">उत्कृष्ट </option>
                            <option value="अतिउत्कृष्ट">अतिउत्कृष्ट</option>
                            <option value="लागू नाही">लागू नाही</option>
                        </select>
                    </div>
                    <div class="form-group col-md-3">
                        <label class="text-danger">अध्ययनस्तर नुसार विद्यार्थ्यांची प्रगती</label>
                        <select class="form-control" style="border: 1px solid black; padding-left:10px;" name="progress" required oninvalid="this.setCustomValidity('कृपया  आपण  येथील  माहिती  भरलेली  नाही, ही  माहिती  भरावे  त्या शिवाय  आपला  फॉर्म  भरला  जाणार  नाही  व माहिती अपूर्ण  राहील ')" oninput="setCustomValidity('')">
                             <option value="" >कृपया  खालील एक पर्याय  निवडा </option>
                            <option value="सुधारण्यास वाव">सुधारण्यास वाव</option>
                            <option value="बरा"> बरा</option>
                            <option value="चांगला">चांगला </option>
                            <option value="उत्कृष्ट">उत्कृष्ट </option>
                            <option value="अतिउत्कृष्ट">अतिउत्कृष्ट</option>
                            <option value="लागू नाही">लागू नाही</option>
                        </select>
                    </div>
                    <div class="form-group col-md-3">
                        <label class="text-danger">विद्यार्थ्यांची गटनिहाय बैठक रचना</label>
                        <select class="form-control" style="border: 1px solid black; padding-left:10px;" name="seating" required oninvalid="this.setCustomValidity('कृपया  आपण  येथील  माहिती  भरलेली  नाही, ही  माहिती  भरावे  त्या शिवाय  आपला  फॉर्म  भरला  जाणार  नाही  व माहिती अपूर्ण  राहील ')" oninput="setCustomValidity('')">
                             <option value="" >कृपया  खालील एक पर्याय  निवडा </option>
                            <option value="सुधारण्यास वाव">सुधारण्यास वाव</option>
                            <option value="बरा"> बरा</option>
                            <option value="चांगला">चांगला </option>
                            <option value="उत्कृष्ट">उत्कृष्ट </option>
                            <option value="अतिउत्कृष्ट">अतिउत्कृष्ट</option>
                            <option value="लागू नाही">लागू नाही</option>
                        </select>
                    </div>
                    <div class="form-group col-md-3">
                        <label class="text-danger">शिक्षकांची सुलभक म्हणून भुमिका</label>
                        <select class="form-control" style="border: 1px solid black; padding-left:10px;" name="role" required oninvalid="this.setCustomValidity('कृपया  आपण  येथील  माहिती  भरलेली  नाही, ही  माहिती  भरावे  त्या शिवाय  आपला  फॉर्म  भरला  जाणार  नाही  व माहिती अपूर्ण  राहील ')" oninput="setCustomValidity('')">
                             <option value="" >कृपया  खालील एक पर्याय  निवडा </option>
                            <option value="सुधारण्यास वाव">सुधारण्यास वाव</option>
                            <option value="बरा"> बरा</option>
                            <option value="चांगला">चांगला </option>
                            <option value="उत्कृष्ट">उत्कृष्ट </option>
                            <option value="अतिउत्कृष्ट">अतिउत्कृष्ट</option>
                            <option value="लागू नाही">लागू नाही</option>
                        </select>
                    </div>
                    <div class="form-group col-md-3">
                        <label class="text-danger">शिक्षकांची अध्यापनपूर्व तयारी</label>
                        <select class="form-control" style="border: 1px solid black; padding-left:10px;" name="classprepare" required oninvalid="this.setCustomValidity('कृपया  आपण  येथील  माहिती  भरलेली  नाही, ही  माहिती  भरावे  त्या शिवाय  आपला  फॉर्म  भरला  जाणार  नाही  व माहिती अपूर्ण  राहील ')" oninput="setCustomValidity('')">
                             <option value="" >कृपया  खालील एक पर्याय  निवडा </option>
                            <option value="सुधारण्यास वाव">सुधारण्यास वाव</option>
                            <option value="बरा"> बरा</option>
                            <option value="चांगला">चांगला </option>
                            <option value="उत्कृष्ट">उत्कृष्ट </option>
                            <option value="अतिउत्कृष्ट">अतिउत्कृष्ट</option>
                            <option value="लागू नाही">लागू नाही</option>
                        </select>
                    </div>
                    <div class="form-group col-md-3">
                        <label class="text-danger">घेतलेल्या विविध प्रशिक्षणांचा अध्ययन अध्यापनात वापर</label>
                        <select class="form-control" style="border: 1px solid black; padding-left:10px;" name="training" required oninvalid="this.setCustomValidity('कृपया  आपण  येथील  माहिती  भरलेली  नाही, ही  माहिती  भरावे  त्या शिवाय  आपला  फॉर्म  भरला  जाणार  नाही  व माहिती अपूर्ण  राहील ')" oninput="setCustomValidity('')">
                             <option value="" >कृपया  खालील एक पर्याय  निवडा </option>
                            <option value="सुधारण्यास वाव">सुधारण्यास वाव</option>
                            <option value="बरा"> बरा</option>
                            <option value="चांगला">चांगला </option>
                            <option value="उत्कृष्ट">उत्कृष्ट </option>
                            <option value="अतिउत्कृष्ट">अतिउत्कृष्ट</option>
                            <option value="लागू नाही">लागू नाही</option>
                        </select>
                    </div>
                    <div class="form-group col-md-3">
                        <label class="text-danger">C.C.E. नुसार पायाभूत चाचणी व संकलित चाचणी निकाल</label>
                        <select class="form-control" style="border: 1px solid black; padding-left:10px;" name="cce" required oninvalid="this.setCustomValidity('कृपया  आपण  येथील  माहिती  भरलेली  नाही, ही  माहिती  भरावे  त्या शिवाय  आपला  फॉर्म  भरला  जाणार  नाही  व माहिती अपूर्ण  राहील ')" oninput="setCustomValidity('')">
                             <option value="" >कृपया  खालील एक पर्याय  निवडा </option>
                            <option value="सुधारण्यास वाव">सुधारण्यास वाव</option>
                            <option value="बरा"> बरा</option>
                            <option value="चांगला">चांगला </option>
                            <option value="उत्कृष्ट">उत्कृष्ट </option>
                            <option value="अतिउत्कृष्ट">अतिउत्कृष्ट</option>
                            <option value="लागू नाही">लागू नाही</option>
                        </select>
                    </div>
                    <div class="form-group col-md-3">
                        <label class="text-danger">शिष्यवृत्ती परिक्षा (इयत्ता 5 वी व 8 वी) तयारी</label>
                        <select class="form-control" style="border: 1px solid black; padding-left:10px;" name="scholor" required oninvalid="this.setCustomValidity('कृपया  आपण  येथील  माहिती  भरलेली  नाही, ही  माहिती  भरावे  त्या शिवाय  आपला  फॉर्म  भरला  जाणार  नाही  व माहिती अपूर्ण  राहील ')" oninput="setCustomValidity('')">
                             <option value="" >कृपया  खालील एक पर्याय  निवडा </option>
                            <option value="सुधारण्यास वाव">सुधारण्यास वाव</option>
                            <option value="बरा"> बरा</option>
                            <option value="चांगला">चांगला </option>
                            <option value="उत्कृष्ट">उत्कृष्ट </option>
                            <option value="अतिउत्कृष्ट">अतिउत्कृष्ट</option>
                            <option value="लागू नाही">लागू नाही</option>
                        </select>
                    </div>
                    <div class="form-group col-md-3">
                        <label class="text-danger">नवोदय पात्रता परिक्षा तयारी</label>
                        <select class="form-control" style="border: 1px solid black; padding-left:10px;" name="navodaya" required oninvalid="this.setCustomValidity('कृपया  आपण  येथील  माहिती  भरलेली  नाही, ही  माहिती  भरावे  त्या शिवाय  आपला  फॉर्म  भरला  जाणार  नाही  व माहिती अपूर्ण  राहील ')" oninput="setCustomValidity('')">
                             <option value="" >कृपया  खालील एक पर्याय  निवडा </option>
                            <option value="सुधारण्यास वाव">सुधारण्यास वाव</option>
                            <option value="बरा"> बरा</option>
                            <option value="चांगला">चांगला </option>
                            <option value="उत्कृष्ट">उत्कृष्ट </option>
                            <option value="अतिउत्कृष्ट">अतिउत्कृष्ट</option>
                            <option value="लागू नाही">लागू नाही</option>
                        </select>
                    </div>
                    <div class="form-group col-md-3">
                        <label class="text-danger">इतर स्पर्धा परिक्षांची तयारी</label>
                        <select class="form-control" style="border: 1px solid black; padding-left:10px;" name="compititive" required oninvalid="this.setCustomValidity('कृपया  आपण  येथील  माहिती  भरलेली  नाही, ही  माहिती  भरावे  त्या शिवाय  आपला  फॉर्म  भरला  जाणार  नाही  व माहिती अपूर्ण  राहील ')" oninput="setCustomValidity('')">
                             <option value="" >कृपया  खालील एक पर्याय  निवडा </option>
                            <option value="सुधारण्यास वाव">सुधारण्यास वाव</option>
                            <option value="बरा"> बरा</option>
                            <option value="चांगला">चांगला </option>
                            <option value="उत्कृष्ट">उत्कृष्ट </option>
                            <option value="अतिउत्कृष्ट">अतिउत्कृष्ट</option>
                            <option value="लागू नाही">लागू नाही</option>
                        </select>
                    </div>
                    <div class="form-group col-md-3">
                        <label class="text-danger">दिव्यांग (अध्ययनार्थी) विद्यार्थ्यांचे शिक्षण</label>
                        <select class="form-control" style="border: 1px solid black; padding-left:10px;" name="handicap" required oninvalid="this.setCustomValidity('कृपया  आपण  येथील  माहिती  भरलेली  नाही, ही  माहिती  भरावे  त्या शिवाय  आपला  फॉर्म  भरला  जाणार  नाही  व माहिती अपूर्ण  राहील ')" oninput="setCustomValidity('')">
                             <option value="" >कृपया  खालील एक पर्याय  निवडा </option>
                            <option value="सुधारण्यास वाव">सुधारण्यास वाव</option>
                            <option value="बरा"> बरा</option>
                            <option value="चांगला">चांगला </option>
                            <option value="उत्कृष्ट">उत्कृष्ट </option>
                            <option value="अतिउत्कृष्ट">अतिउत्कृष्ट</option>
                            <option value="लागू नाही">लागू नाही</option>
                        </select>
                    </div>
                    <div class="form-group col-md-3">
                        <label class="text-danger">BCPT साहित्याच्या वापराची परिणामकारकता</label>
                        <select class="form-control" style="border: 1px solid black; padding-left:10px;" name="bcpt" required oninvalid="this.setCustomValidity('कृपया  आपण  येथील  माहिती  भरलेली  नाही, ही  माहिती  भरावे  त्या शिवाय  आपला  फॉर्म  भरला  जाणार  नाही  व माहिती अपूर्ण  राहील ')" oninput="setCustomValidity('')">
                             <option value="" >कृपया  खालील एक पर्याय  निवडा </option>
                            <option value="सुधारण्यास वाव">सुधारण्यास वाव</option>
                            <option value="बरा"> बरा</option>
                            <option value="चांगला">चांगला </option>
                            <option value="उत्कृष्ट">उत्कृष्ट </option>
                            <option value="अतिउत्कृष्ट">अतिउत्कृष्ट</option>
                            <option value="लागू नाही">लागू नाही</option>
                        </select>
                    </div>
                    <div class="form-group col-md-3">
                        <label class="text-danger">शैक्षणिक साहित्य उपलब्धता व वापर</label>
                        <select class="form-control" style="border: 1px solid black; padding-left:10px;" name="deviceAvali" required oninvalid="this.setCustomValidity('कृपया  आपण  येथील  माहिती  भरलेली  नाही, ही  माहिती  भरावे  त्या शिवाय  आपला  फॉर्म  भरला  जाणार  नाही  व माहिती अपूर्ण  राहील ')" oninput="setCustomValidity('')">
                             <option value="" >कृपया  खालील एक पर्याय  निवडा </option>
                            <option value="सुधारण्यास वाव">सुधारण्यास वाव</option>
                            <option value="बरा"> बरा</option>
                            <option value="चांगला">चांगला </option>
                            <option value="उत्कृष्ट">उत्कृष्ट </option>
                            <option value="अतिउत्कृष्ट">अतिउत्कृष्ट</option>
                            <option value="लागू नाही">लागू नाही</option>
                        </select>
                    </div>
                    <div class="form-group col-md-3">
                        <label class="text-danger">विद्यार्थ्यांचा पाठातील सहभाग</label>
                        <select class="form-control" style="border: 1px solid black; padding-left:10px;" name="involve" required oninvalid="this.setCustomValidity('कृपया  आपण  येथील  माहिती  भरलेली  नाही, ही  माहिती  भरावे  त्या शिवाय  आपला  फॉर्म  भरला  जाणार  नाही  व माहिती अपूर्ण  राहील ')" oninput="setCustomValidity('')">
                             <option value="" >कृपया  खालील एक पर्याय  निवडा </option>
                            <option value="सुधारण्यास वाव">सुधारण्यास वाव</option>
                            <option value="बरा"> बरा</option>
                            <option value="चांगला">चांगला </option>
                            <option value="उत्कृष्ट">उत्कृष्ट </option>
                            <option value="अतिउत्कृष्ट">अतिउत्कृष्ट</option>
                            <option value="लागू नाही">लागू नाही</option>
                        </select>
                    </div>
                    <div class="form-group col-md-3">
                        <label class="text-danger">विद्यार्थी- शिक्षक आंतरक्रिया</label>
                        <select class="form-control" style="border: 1px solid black; padding-left:10px;" name="stinteraction" required oninvalid="this.setCustomValidity('कृपया  आपण  येथील  माहिती  भरलेली  नाही, ही  माहिती  भरावे  त्या शिवाय  आपला  फॉर्म  भरला  जाणार  नाही  व माहिती अपूर्ण  राहील ')" oninput="setCustomValidity('')">
                             <option value="" >कृपया  खालील एक पर्याय  निवडा </option>
                            <option value="सुधारण्यास वाव">सुधारण्यास वाव</option>
                            <option value="बरा"> बरा</option>
                            <option value="चांगला">चांगला </option>
                            <option value="उत्कृष्ट">उत्कृष्ट </option>
                            <option value="अतिउत्कृष्ट">अतिउत्कृष्ट</option>
                            <option value="लागू नाही">लागू नाही</option>
                        </select>
                    </div>
                    <div class="form-group col-md-3">
                        <label class="text-danger">विद्यार्थी-विद्यार्थी आंतरक्रिया</label>
                        <select class="form-control" style="border: 1px solid black; padding-left:10px;" name="ssinter" required oninvalid="this.setCustomValidity('कृपया  आपण  येथील  माहिती  भरलेली  नाही, ही  माहिती  भरावे  त्या शिवाय  आपला  फॉर्म  भरला  जाणार  नाही  व माहिती अपूर्ण  राहील ')" oninput="setCustomValidity('')">
                             <option value="" >कृपया  खालील एक पर्याय  निवडा </option>
                            <option value="सुधारण्यास वाव">सुधारण्यास वाव</option>
                            <option value="बरा"> बरा</option>
                            <option value="चांगला">चांगला </option>
                            <option value="उत्कृष्ट">उत्कृष्ट </option>
                            <option value="अतिउत्कृष्ट">अतिउत्कृष्ट</option>
                            <option value="लागू नाही">लागू नाही</option>
                        </select>
                    </div>
                </div><hr>
                
                <div align="center">
                <button class="btn btn-primary btn-large" name="submit" id="submit">Submit</button>
            </div>
            </div>
            </form>
        </div><hr>
    
    
<!--------------------Footer---------------------------------->
    <div class="container-fluid">
        <div class="row bg-dark" style="padding-top:20px;">
            <?php include('inc/footer.php');?>
        </div>
    </div>
<!--------------------Footer---------------------------------->
</div>
 </html>
<script>
        $(function() {
            $('.datepicker').datepicker();
        });
    </script>
<script>
        $(document).ready(function() {
            $('#schoolName').change(function() {
                var id = $(this).val();
                $.ajax({
                    url: "fetchudise.php",
                    method: "POST",
                    data: {
                        id: id
                    },
                    dataType: "text",
                    success: function(data) {
                        $('#udise').html(data);
                    }
                });
                
                 $.ajax({
                    url: "fetchblock.php",
                    method: "POST",
                    data: {
                        id: id
                    },
                    dataType: "text",
                    success: function(data) {
                        $('#block').html(data);
                    }
                });
            });
        });
    </script>


<?php
if(isset($_POST['submit'])){     
      $pad = $_POST['pad'];
      $date = $_POST['date'];
      $visitNo = $_POST['visitNo'];
      $schoolName = $_POST['schoolName'];
     echo  $udise = $_POST['udise'];
      $medium = $_POST['medium'];
      echo $block = $_POST['block'];
      $total = $_POST['total'];
      $presenty = $_POST['presenty'];
      $grade = $_POST['grade'];
      $food = $_POST['food'];
      $bathroom = $_POST['bathroom'];
      $building = $_POST['building'];
      $sports = $_POST['sports'];
      $water = $_POST['water'];
      $handwash = $_POST['handwash'];
      $health = $_POST['health'];
      $digital = $_POST['digital'];
      $solar = $_POST['solar'];
      $electricity = $_POST['electricity'];
      $liberary = $_POST['liberary'];
      $language = $_POST['language'];
      $math = $_POST['math'];
      $english = $_POST['english'];
      $urdu = $_POST['urdu'];
      $geopeti = $_POST['geopeti'];
      $scidevice = $_POST['scidevice'];
      $mathHandbook = $_POST['mathHandbook'];
      $aHandbook = $_POST['aHandbook'];
      $kratibook = $_POST['kratibook'];
      $nas = $_POST['nas'];
      $mulyabook = $_POST['mulyabook'];
      $tagResource = $_POST['tagResource'];
      $readToMe = $_POST['readToMe'];
      $donate = $_POST['donate'];
      $agribook = $_POST['agribook'];
      $profession = $_POST['profession'];
      $professionParishad = $_POST['professionParishad'];
      $kalchachni = $_POST['kalchachni'];
      $sambhod = $_POST['sambhod'];
      $sgroup = $_POST['sgroup'];
      $nextStage = $_POST['nextStage'];
      $adchan = $_POST['adchan'];
      $help = $_POST['help'];
      $subjectHelp = $_POST['subjectHelp'];
      $marthiStage = $_POST['marthiStage'];
      $mathStage = $_POST['mathStage'];
      $marathiTest = $_POST['marathiTest'];
      $englishTest = $_POST['englishTest'];
      $mathTest = $_POST['mathTest'];
      $scienceTest = $_POST['scienceTest'];
      $socialTest = $_POST['socialTest'];
      $tagUse = $_POST['tagUse'];
      $kClass = $_POST['kClass'];
      $progress = $_POST['progress'];
      $seating = $_POST['seating'];
      $role = $_POST['role'];
      $classprepare = $_POST['classprepare'];
      $training = $_POST['training'];
      $cce = $_POST['cce'];
      $scholor = $_POST['scholor'];
      $navodaya = $_POST['navodaya'];
      $compititive = $_POST['compititive'];
      $handicap = $_POST['handicap'];
      $bcpt = $_POST['bcpt'];
      $deviceAvali = $_POST['deviceAvali'];
      $involve = $_POST['involve'];
      $stinteraction = $_POST['stinteraction'];
      $ssinter = $_POST['ssinter'];
      $sciencecenter = $_POST['sciencecenter'];
    
    echo $insert_news = "INSERT INTO schooldata (userId,pad,date,visitNo,schoolName,udise,medium,block,total,presenty,grade,food,bathroom,building,sports,water,handwash,health,digital,solar,electricity,liberary,language,math,english,urdu,geopeti,scidevice,mathHandbook,aHandbook,kratibook,nas,mulyabook,tagResource,readToMe,donate,agribook,profession,professionParishad,kalchachni,sambhod,sgroup,nextStage,adchan,help,subjectHelp,marthiStage,mathStage,marathiTest,englishTest,mathTest,scienceTest,socialTest,tagUse,kClass,progress,seating,role,classprepare,training,cce,scholor,navodaya,compititive,handicap,bcpt,deviceAvali,involve,stinteraction,ssinter,sciencecenter) VALUES ('$id','$pad','$date','$visitNo','$schoolName','$udise','$medium','$block','$total','$presenty','$grade','$food','$bathroom','$building','$sports','$water','$handwash','$health','$digital','$solar','$electricity','$liberary','$language','$math','$english','$urdu','$geopeti','$scidevice','$mathHandbook','$aHandbook','$kratibook','$nas','$mulyabook','$tagResource','$readToMe','$donate','$agribook','$profession','$professionParishad','$kalchachni','$sambhod','$sgroup','$nextStage','$adchan','$help','$subjectHelp','$marthiStage','$mathStage','$marathiTest','$englishTest','$mathTest','$scienceTest','$socialTest','$tagUse','$kClass','$progress','$seating','$role','$classprepare','$training','$cce','$scholor','$navodaya','$compititive','$handicap','$bcpt','$deviceAvali','$involve','$stinteraction','$ssinter','$sciencecenter')";
      
      $insert_pro = mysqli_query($con,$insert_news);
      
      if($insert_pro){
        $to = "santu.ghau@gmail.com";
        $toa = "yashkendre6@gmail.com";
        $header = "$schoolName<$name>";
        $subject = "$name<$schoolName><$udise>";
        $message = "
        भेटीचा दिनांक: $date \n
        भेटीचा क्रमांक : $visitNo \n
        खालील पैकी शाळॆची निवड करा : $sname \n
        UDISE नं: $udise \n
        शाळेचे माध्यम : $medium \n
        तालुका : $talukaname \n
        केंद्र: $block \n
        शाळेचा एकूण पट: $total \n
        एकूण उपस्थिती : $presenty \n
        शाळासिद्धी श्रेणी: $grade \n
        शालेय पोषण आहार स्वयंपाकखोली व भांडी स्वच्छता: $food \n
        स्वच्छतागृह: $bathroom \n
        शालेय इमारत व परिसर स्वच्छता: $building \n
        क्रीडासाहित्य: $sports \n
        पिण्याच्या पाण्याची सुविधा: $water \n
	    हॅंडवॉश स्टेशन: $handwash \n
        आरोग्य तपासणी: $health \n
        डिजिटल साधनांचा वापर: $digital \n
        शाळेतील सोलार लॅम्प: $solar \n
        शाळेचे विद्युतीकरण व विद्युत उपकरणे: $electricity \n
        बालवाचनालय/ शिक्षक वाचनालय: $liberary \n
        भाषा व गणित मुलभूत क्षमता विकसन पेटी: $language \n
	    भास्कराचार्य गणित पेटी उपलब्धता व वापर: $math \n
        इंग्रजी भाषा विकास पेटी : $english \n
        उर्दू भाषा विकास पेटी: $urdu \n
        खगोलशास्त्र पेटी: $geopeti \n
        नाविन्यपूर्ण विज्ञान केंद्र : $sciencecenter \n
        शालेय स्तरावरील विज्ञान साहित्य: $scidevice \n
    	मूलभूत वाचन व गणित संबोध प्रशिक्षण हस्तपुस्तिका: $mathHandbook \n
        अध्ययन निष्पत्ती हस्तपुस्तिका: $aHandbook \n
        अध्ययन निष्पत्तींवर आधारित कृतिपुस्तिका: $kratibook \n
        NAS पूर्वतयारी सराव प्रश्नसंच: $nas \n
        मूल्यवर्धन हस्तपुस्तिका: $mulyabook \n
        TAG RESOURCE YEAR 1 AND 2 BOOK: $tagResource \n
        READ TO ME SOFTWARE INSTALLATION: $readToMe \n
        शाळा विकास निधी लोकवर्गणीतून मिळवला आहे काय?: $donate \n
	    शालेय ग्रंथालयात कृषिविषयक मासिके उपलब्ध आहेत काय?: $agribook \n
        व्यवसाय मार्गदर्शन कोपरा आहे काय? : $profession \n
        व्यवसाय मार्गदर्शन परिषद घेतली आहे काय? : $professionParishad \n
        कलचाचणी व अभिक्षमता चाचणी घेतली आहे काय? : $kalchachni \n
        मूलभूत वाचन व गणित साहित्यपेटीतील साहित्य वापरानंतरही संबोध 100% मुलांपर्यंत पोहचवण्यात कोणती अडचण जाणवली ? (कोणतीही एक अडचण नोंदवा.) : $sambhod \n
    	अध्ययनस्तर माहितीनुसार विद्यार्थ्यांचे स्तरनिहाय गट केले आहेत काय? : $sgroup \n
        विद्यार्थ्यांनी पुढचा स्तर गाठण्यासाठी आपण भाषा व गणित कृती आराखडा वापरात आणला आहे काय? : $nextStage \n
        उर्वरित विद्यार्थ्यांना उच्चस्तर गाठण्यासाठी कोणत्या अडचणी जाणवतात? (कोणतीही एक अडचण नोंदवा.): $adchan \n
        अप्रगत विद्यार्थ्यांना प्रगत करण्यासाठी केंद्र/तालुका/जिल्हास्तरावर कार्यशाळेची आवश्यकता वाटते काय? : $help \n
        100% गुणवत्ता वाढीसाठी आपला वर्ग/विषय याकरिता DIECPD नांदेड व जि.प. शिक्षण विभाग नांदेड यांची कोणती मदत हवी आहे? (नोंदवा.): $subjectHelp \n
	    इ.1 ते 8 अध्ययन स्तर मराठी उच्च स्तर प्राप्त विद्यार्थी संख्या: $marthiStage \n
        इ.1 ते 8 अध्ययन स्तर गणित उच्च स्तर प्राप्त विद्यार्थी संख्या: $mathStage \n
        विषय- मराठी: $marathiTest \n
        विषय- इंग्रजी: $englishTest \n
        विषय- गणित: $mathTest \n
        विषय- सामान्य विज्ञान/ परिसर अभ्यास: $scienceTest \n
    	विषय- सामाजिक शास्त्रे: $socialTest \n
        TAG मधील कृतींचा वापर: $tagUse \n
        ज्ञानरचनावादी वर्ग: $kClass \n 
        अध्ययनस्तर नुसार विद्यार्थ्यांची प्रगती: $progress \n
        विद्यार्थ्यांची गटनिहाय बैठक रचना: $seating \n
    	शिक्षकांची सुलभक म्हणून भुमिका: $role \n
        शिक्षकांची अध्यापनपूर्व तयारी: $classprepare \n
        घेतलेल्या विविध प्रशिक्षणांचा अध्ययन अध्यापनात वापर: $training \n
        C.C.E. नुसार पायाभूत चाचणी व संकलित चाचणी निकाल: $cce \n 
        शिष्यवृत्ती परिक्षा (इयत्ता 5 वी व 8 वी) तयारी: $scholor \n 
        नवोदय पात्रता परिक्षा तयारी: $navodaya \n
        इतर स्पर्धा परिक्षांची तयारी: $compititive \n
        दिव्यांग (अध्ययनार्थी) विद्यार्थ्यांचे शिक्षण: $handicap \n 
        BCPT साहित्याच्या वापराची परिणामकारकता: $bcpt \n
        शैक्षणिक साहित्य उपलब्धता व वापर: $deviceAvali \n
        विद्यार्थ्यांचा पाठातील सहभाग: $involve \n
        विद्यार्थी- शिक्षक आंतरक्रिया: $stinteraction \n
        विद्यार्थी-विद्यार्थी आंतरक्रिया: $sinter \n\n";
          
        mail($to, $subject, $message, $header);  
        mail($toa, $subject, $message, $header);  
          
          
	   echo"<script>alert('धन्यवाद  आपण  शाळेची  माहिती पूर्ण भरली आहे  !')</script>";
	   echo"<script>window.open('viewSchool.php','_self')</script>";
        }
     
}
?>