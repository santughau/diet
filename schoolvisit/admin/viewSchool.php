<?php 
ob_start();
session_start();
if(!isset($_SESSION['user_name'])){
        header('Location:login.php');
    }
  $name = $_SESSION['name'];
$talukaId = $_SESSION['talukaId'];
require_once('inc/top.php');
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
			<div class="col-md-12">
                <h1 class="text-center bg-secondary text-white">View all Schools </h1>
                    <div align="right">
                    <a href="addStudent.php" class="btn btn-outline-primary" >Add Student</a><hr>
                    </div>
                    <div id="product_table table-responsive">
                     <table class="table table-bordered display" id="table2excel">
                      <thead  class="thead-dark">
                        <tr>
                          <th scope="col">अ .क्र </th>
                          <th scope="col">Visiter Name </th>
                          <th scope="col">पद </th>                        
                          <th scope="col"> भेटीचा दिनांक</th>
                          <th scope="col">भेटीचा क्रमांक</th>
                          <th scope="col">शाळेचे पूर्ण नाव</th>
                          <th scope="col">UDISE नं. </th>
                          <th scope="col">शाळेचे माध्यम </th>
                          <th scope="col">Taluka</th>
                          <th scope="col">केंद्र</th>
                          <th scope="col">शाळेचा एकूण पट</th>
                          <th scope="col">एकूण उपस्थिती</th>
                          <th scope="col">शाळासिद्धी श्रेणी</th>
                          <th scope="col">शालेय पोषण आहार स्वयंपाकखोली व भांडी स्वच्छता</th>
                          <th scope="col">स्वच्छतागृह</th>
                          <th scope="col">शालेय इमारत व परिसर स्वच्छता</th>
                          <th scope="col">क्रीडासाहित्य</th>
                          <th scope="col">पिण्याच्या पाण्याची सुविधा</th>
                          <th scope="col">हॅंडवॉश स्टेशन</th>
                          <th scope="col">आरोग्य तपासणी</th>
                          <th scope="col">डिजिटल साधनांचा वापर</th>
                          <th scope="col">शाळेतील सोलार लॅम्प</th>
                          <th scope="col">शाळेचे विद्युतीकरण व विद्युत उपकरणे</th>
                          <th scope="col"> बालवाचनालय/ शिक्षक वाचनालय</th>
                          <th scope="col">भाषा व गणित मुलभूत क्षमता विकसन पेटी</th>
                          <th scope="col">भास्कराचार्य गणित पेटी उपलब्धता व वापर</th>
                          <th scope="col">इंग्रजी भाषा विकास पेटी </th>
                          <th scope="col">उर्दू भाषा विकास पेटी</th>
                          <th scope="col">खगोलशास्त्र पेटी</th>
                          <th scope="col">नाविन्यपूर्ण विज्ञान केंद्र </th>
                          <th scope="col">शालेय स्तरावरील विज्ञान साहित्य</th>
                          <th scope="col">मूलभूत वाचन व गणित संबोध प्रशिक्षण हस्तपुस्तिका</th>
                          <th scope="col">अध्ययन निष्पत्ती हस्तपुस्तिका</th>
                          <th scope="col">अध्ययन निष्पत्तींवर आधारित कृतिपुस्तिका</th>
                          <th scope="col">NAS पूर्वतयारी सराव प्रश्नसंच</th>
                          <th scope="col">मूल्यवर्धन हस्तपुस्तिका</th>
                          <th scope="col">TAG RESOURCE YEAR 1 AND 2 BOOK</th>
                          <th scope="col">READ TO ME SOFTWARE INSTALLATION</th>
                          <th scope="col">शाळा विकास निधी लोकवर्गणीतून मिळवला आहे काय? </th>
                          <th scope="col">शालेय ग्रंथालयात कृषिविषयक मासिके उपलब्ध आहेत काय? </th>
                          <th scope="col">व्यवसाय मार्गदर्शन कोपरा आहे काय? </th>
                          <th scope="col">व्यवसाय मार्गदर्शन परिषद घेतली आहे काय?</th>
                          <th scope="col">कलचाचणी व अभिक्षमता चाचणी घेतली आहे काय?</th>
                          <th scope="col">मूलभूत वाचन व गणित साहित्यपेटीतील साहित्य वापरानंतरही संबोध 100% मुलांपर्यंत पोहचवण्यात कोणती अडचण जाणवली ? (कोणतीही एक अडचण नोंदवा.) </th>
                          <th scope="col">अध्ययनस्तर माहितीनुसार विद्यार्थ्यांचे स्तरनिहाय गट केले आहेत काय? </th>
                          <th scope="col">विद्यार्थ्यांनी पुढचा स्तर गाठण्यासाठी आपण भाषा व गणित कृती आराखडा वापरात आणला आहे काय? </th>
                          <th scope="col">उर्वरित विद्यार्थ्यांना उच्चस्तर गाठण्यासाठी कोणत्या अडचणी जाणवतात? (कोणतीही एक अडचण नोंदवा.)</th>
                          <th scope="col">अप्रगत विद्यार्थ्यांना प्रगत करण्यासाठी केंद्र/तालुका/जिल्हास्तरावर कार्यशाळेची आवश्यकता वाटते काय? </th>
                          <th scope="col">100% गुणवत्ता वाढीसाठी आपला वर्ग/विषय याकरिता DIECPD नांदेड व जि.प. शिक्षण विभाग नांदेड यांची कोणती मदत हवी आहे? (नोंदवा.)</th>
                          <th scope="col">इ.1 ते 8 अध्ययन स्तर मराठी उच्च स्तर प्राप्त विद्यार्थी संख्या</th>
                          <th scope="col">इ.1 ते 8 अध्ययन स्तर गणित उच्च स्तर प्राप्त विद्यार्थी संख्या</th>
                          <th scope="col">विषय- मराठी</th>
                          <th scope="col">विषय- इंग्रजी</th>
                          <th scope="col">विषय- गणित</th>
                          <th scope="col">विषय- सामान्य विज्ञान/ परिसर अभ्यास</th>
                          <th scope="col">विषय- सामाजिक शास्त्रे</th>
                          <th scope="col">TAG मधील कृतींचा वापर</th>
                          <th scope="col">ज्ञानरचनावादी वर्ग</th>
                          <th scope="col">अध्ययनस्तर नुसार विद्यार्थ्यांची प्रगती</th>
                          <th scope="col">विद्यार्थ्यांची गटनिहाय बैठक रचना</th>
                          <th scope="col">शिक्षकांची सुलभक म्हणून भुमिका</th>
                          <th scope="col">शिक्षकांची अध्यापनपूर्व तयारी</th>
                          <th scope="col">घेतलेल्या विविध प्रशिक्षणांचा अध्ययन अध्यापनात वापर</th>
                          <th scope="col">C.C.E. नुसार पायाभूत चाचणी व संकलित चाचणी निकाल</th>
                          <th scope="col">शिष्यवृत्ती परिक्षा (इयत्ता 5 वी व 8 वी) तयारी</th>
                          <th scope="col">नवोदय पात्रता परिक्षा तयारी</th>
                          <th scope="col">इतर स्पर्धा परिक्षांची तयारी</th>
                          <th scope="col">दिव्यांग (अध्ययनार्थी) विद्यार्थ्यांचे शिक्षण</th>
                          <th scope="col">BCPT साहित्याच्या वापराची परिणामकारकता</th>
                          <th scope="col">शैक्षणिक साहित्य उपलब्धता व वापर</th>
                          <th scope="col">विद्यार्थ्यांचा पाठातील सहभाग</th>
                          <th scope="col">विद्यार्थी- शिक्षक आंतरक्रिया</th>
                          <th scope="col">विद्यार्थी-विद्यार्थी आंतरक्रिया</th>
                          
                        </tr>
                         </thead>
                      <tbody>
                         <?php
                   $visiter = "SELECT * FROM schooldata ORDER BY id DESC ";
                    $run_visiter = mysqli_query($con, $visiter);
                            $ia=0;
                    while($row_visiter = mysqli_fetch_array($run_visiter)){
                                 $ia=$ia+1;
                        $vid = $row_visiter['id'];
                        $pad = $row_visiter['pad'];
                        $visitNo = $row_visiter['visitNo'];
                        $date = $row_visiter['date'];
                        $block = $row_visiter['block'];
                        $udise = $row_visiter['udise'];
                        $medium = $row_visiter['medium'];
                        $total = $row_visiter['total'];
                        $presenty = $row_visiter['presenty'];
                        $grade = $row_visiter['grade'];
                        $food = $row_visiter['food'];
                        $bathroom = $row_visiter['bathroom'];
                        $building = $row_visiter['building'];
                        $sports = $row_visiter['sports'];
                        $water = $row_visiter['water'];
                        $handwash = $row_visiter['handwash'];
                        $health = $row_visiter['health'];
                        $digital = $row_visiter['digital'];
                        $solar = $row_visiter['solar'];
                        $electricity = $row_visiter['electricity'];
                        $liberary = $row_visiter['liberary'];
                        $language = $row_visiter['language'];
                        $math = $row_visiter['math'];
                        $english = $row_visiter['english'];
                        $urdu = $row_visiter['urdu'];
                        $geopeti = $row_visiter['geopeti'];
                        $scidevice = $row_visiter['scidevice'];
                        $mathHandbook = $row_visiter['mathHandbook'];
                        $aHandbook = $row_visiter['aHandbook'];
                        $kratibook = $row_visiter['kratibook'];
                        $nas = $row_visiter['nas'];
                        $mulyabook = $row_visiter['mulyabook'];
                        $tagResource = $row_visiter['tagResource'];
                        $readToMe = $row_visiter['readToMe'];
                        $readToMe  = $row_visiter['readToMe'];
                        $donate  = $row_visiter['donate'];
                        $agribook  = $row_visiter['agribook'];
                        $profession  = $row_visiter['profession'];
                        $professionParishad  = $row_visiter['professionParishad'];
                        $kalchachni  = $row_visiter['kalchachni'];
                        $sambhod  = $row_visiter['sambhod'];
                        $sgroup  = $row_visiter['sgroup'];
                        $nextStage  = $row_visiter['nextStage'];
                        $adchan  = $row_visiter['adchan'];
                        $help  = $row_visiter['help'];
                        $subjectHelp  = $row_visiter['subjectHelp'];
                        $marthiStage  = $row_visiter['marthiStage'];
                        $mathStage  = $row_visiter['mathStage'];
                        $marathiTest = $row_visiter['marathiTest'];
                        $englishTest = $row_visiter['englishTest'];
                        $englishTest = $row_visiter['englishTest'];
                        $mathTest = $row_visiter['mathTest'];
                        $scienceTest = $row_visiter['scienceTest'];
                        $socialTest = $row_visiter['socialTest'];
                        $tagUse = $row_visiter['tagUse'];
                        $kClass = $row_visiter['kClass'];
                        $progress = $row_visiter['progress'];
                        $seating = $row_visiter['seating'];
                        $role = $row_visiter['role'];
                        $classprepare = $row_visiter['classprepare'];
                        $training = $row_visiter['training'];
                        $cce = $row_visiter['cce'];
                        $scholor = $row_visiter['scholor'];
                        $navodaya = $row_visiter['navodaya'];
                        $compititive = $row_visiter['compititive'];
                        $handicap = $row_visiter['handicap'];
                        $bcpt = $row_visiter['bcpt'];
                        $deviceAvali = $row_visiter['deviceAvali'];
                        $involve = $row_visiter['involve'];
                        $stinteraction = $row_visiter['stinteraction'];
                        $ssinter = $row_visiter['ssinter'];
                        $schoolName = $row_visiter['schoolName'];
                        $sciencecenter = $row_visiter['sciencecenter'];
                        $userId = $row_visiter['userId'];
                                

                                
            $schoolName = "SELECT * FROM schoollist WHERE id = '$schoolName' ";
            $run_schoolName = mysqli_query($con, $schoolName);
            $row_schoolName = mysqli_fetch_array($run_schoolName);
            $sname = $row_schoolName['sname'];
            
                        
            $userName = "SELECT * FROM user WHERE id = '$userId' ";
            $run_userName = mysqli_query($con, $userName);
            $row_userName = mysqli_fetch_array($run_userName);
            $username = $row_userName['name'];
            $talukaId = $row_userName['talukaId'];
                        
            $talukaName = "SELECT * FROM taluka WHERE  id = '$talukaId' ";
            $run_talukaName = mysqli_query($con, $talukaName);
            $row_talukaName = mysqli_fetch_array($run_talukaName);
            $talukanames = $row_talukaName['name'];

                ?> 
                        <tr>
                          <th scope="row"><?php echo $ia;?></th>
                            <td><?php echo $username; ?></td>
                          <td> <?php echo $pad; ?></td>
                          <td> <?php echo $date; ?></td>
                          <td> <?php echo $visitNo; ?></td>
                          <td> <?php echo $sname; ?></td>
                          <td> <?php echo $udise; ?></td>
                          <td> <?php echo $medium; ?></td>
                          <td> <?php echo $talukanames; ?></td>
                          <td> <?php echo $block; ?></td>
                          <td> <?php echo $total; ?></td>
                          <td> <?php echo $presenty; ?></td>
                          <td> <?php echo $grade ; ?></td>
                          <td> <?php echo $food; ?></td>
                          <td> <?php echo $bathroom; ?></td>
                          <td> <?php echo $building; ?></td>
                          <td> <?php echo $sports; ?></td>
                          <td> <?php echo $water; ?></td>
                          <td> <?php echo $handwash; ?></td>
                          <td> <?php echo $health; ?></td>
                          <td> <?php echo $digital; ?></td>
                          <td> <?php echo $solar; ?></td>
                          <td> <?php echo $electricity; ?></td>
                          <td> <?php echo $liberary; ?></td>
                          <td> <?php echo $language; ?></td>
                          <td> <?php echo $math; ?></td>
                          <td> <?php echo $english; ?></td>
                          <td> <?php echo $urdu ; ?></td>
                          <td> <?php echo $geopeti; ?></td>
                          <td> <?php echo $sciencecenter; ?></td>
                          <td> <?php echo $scidevice; ?></td>
                          <td> <?php echo $mathHandbook; ?></td>
                          <td> <?php echo $aHandbook; ?></td>
                          <td> <?php echo $kratibook; ?></td>
                          <td> <?php echo $nas; ?></td>
                          <td> <?php echo $mulyabook; ?></td>
                          <td> <?php echo $tagResource; ?></td>
                          <td> <?php echo $readToMe; ?></td>
                          <td> <?php echo $donate; ?></td>
                          <td> <?php echo $agribook ; ?></td>
                          <td> <?php echo $profession ; ?></td>
                          <td> <?php echo $professionParishad ; ?></td>
                          <td> <?php echo $kalchachni ; ?></td>
                          <td> <?php echo $sambhod; ?></td>
                          <td> <?php echo $sgroup; ?></td>
                          <td> <?php echo $nextStage ; ?></td>
                          <td> <?php echo $adchan; ?></td>
                          <td> <?php echo $help; ?></td>
                          <td> <?php echo $subjectHelp; ?></td>
                          <td> <?php echo $marthiStage ; ?></td>
                          <td> <?php echo $mathStage ; ?></td>
                          <td> <?php echo $marathiTest; ?></td>
                          <td> <?php echo $englishTest; ?></td>
                          <td> <?php echo $mathTest; ?></td>
                          <td> <?php echo $scienceTest; ?></td>
                          <td> <?php echo $socialTest; ?></td>
                          <td> <?php echo $tagUse; ?></td>
                          <td> <?php echo $kClass; ?></td>
                          <td> <?php echo $progress; ?></td>
                          <td> <?php echo $seating; ?></td>
                          <td> <?php echo $role ; ?></td>
                          <td> <?php echo $classprepare; ?></td>
                          <td> <?php echo $training; ?></td>
                          <td> <?php echo $cce ; ?></td>
                          <td> <?php echo $scholor; ?></td>
                          <td> <?php echo $navodaya; ?></td>
                          <td> <?php echo $compititive; ?></td>
                          <td> <?php echo $handicap; ?></td>
                          <td> <?php echo $bcpt; ?></td>
                          <td> <?php echo $deviceAvali; ?></td>
                          <td> <?php echo $involve; ?></td>
                          <td> <?php echo $stinteraction; ?></td>
                          <td> <?php echo $ssinter; ?></td>
                        </tr>
                     <?php } ?>   
                      </tbody>
                    </table>
                        <hr>
                    </div>
                    <button type="button" class="btn btn-warning offset-md-4" id="but">Export to Excel</button><hr>
            </div>
        </div>
    
    
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
$(document).ready(function(){
    $('#table2excel').DataTable();
});
</script>
<script>
$("#but").click(function(){
  $("#table2excel").table2excel({
    // exclude CSS class
    exclude: ".noExl",
    name: "Worksheet Name",
    filename: "<?php echo date("d/m/Y");?>.xls" //do not include extension
  }); 
});
</script>