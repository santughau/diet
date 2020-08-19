<?php 
ob_start();
session_start();
if(!isset($_SESSION['user_name'])){
        header('Location:login.php');
    }
  $name = $_SESSION['name'];
$talukaId = $_SESSION['talukaId'];
require_once('inc/top.php');
if(isset($_GET['id'])){
    $rec_id = $_GET['id']; 
    
$visiter = "SELECT * FROM schooldata WHERE id = '$rec_id' ";
$run_visiter = mysqli_query($con, $visiter);

$row_visiter = mysqli_fetch_array($run_visiter);
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
                                
$talukaName = "SELECT * FROM taluka WHERE  id = '$talukaId' ";
$run_talukaName = mysqli_query($con, $talukaName);
$row_talukaName = mysqli_fetch_array($run_talukaName);
$talukaname = $row_talukaName['name'];
    
$visitorName = "SELECT * FROM user WHERE  id = '$userId' ";
$run_visitorName = mysqli_query($con, $visitorName);
$row_visitorName = mysqli_fetch_array($run_visitorName);
$visitorname = $row_visitorName['name'];
}
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
               <div id="product_table ">
               <table class="table table-bordered table-condensed " id="table2excel">
                            <tbody>
                                
                                <tr class="info">
                                    <th class="bg-danger text-white">प्राथमिक माहिती</th>
                                    <th></th>
                                </tr>
                                <tr class="info">
                                    <th class="bg-dark text-white">Visited By</th>
                                    <th><?php echo $visitorname;?> <small>( <?php echo $pad;?>  )</small></th>
                                </tr>
                                <tr class="info">
                                    <th class="bg-dark text-white">भेटीचा दिनांक</th>
                                    <th><?php echo $date;?></th>
                                </tr>
                                <tr class="info">
                                    <th class="bg-dark text-white">भेटीचा क्रमांक</th>
                                    <th><?php echo $visitNo ;?></th>
                                </tr>
                                <tr class="info">
                                    <th class="bg-dark text-white">शाळेचे नाव </th>
                                    <th><?php echo $sname;?></th>
                                </tr>
                                <tr class="info">
                                    <th class="bg-dark text-white">UDISE नं.</th>
                                    <th><?php echo $udise;?></th>
                                </tr>
                                <tr class="info">
                                    <th class="bg-dark text-white">शाळेचे माध्यम</th>
                                    <th><?php echo $medium;?></th>
                                </tr>
                                <tr class="info">
                                    <th class="bg-dark text-white">केंद्र</th>
                                    <th><?php echo $block;?></th>
                                </tr>
                                <tr class="info">
                                    <th class="bg-dark text-white">शाळेचा एकूण पट</th>
                                    <th><?php echo $total ;?></th>
                                </tr>
                                <tr class="info">
                                    <th class="bg-dark text-white">एकूण उपस्थिती </th>
                                    <th><?php echo $presenty;?></th>
                                </tr>
                                  <tr class="info">
                                    <th class="bg-dark text-white">शाळासिद्धी श्रेणी</th>
                                    <th><?php echo $grade;?></th>
                                </tr>
                                <tr class="info">
                                    <th class=" text-white"></th>
                                    <th></th>
                                </tr>
                                <tr class="info">
                                    <th class="bg-danger text-white">भौतिक सुविधा- उपलब्धता व वापर</th>
                                    <th></th>
                                </tr>
                                <tr class="info">
                                    <th class="bg-dark text-white">शालेय पोषण आहार स्वयंपाकखोली व भांडी स्वच्छता</th>
                                    <th><?php echo $food;?></th>
                                </tr>
                                <tr class="info">
                                    <th class="bg-dark text-white">स्वच्छतागृह</th>
                                    <th><?php echo $bathroom  ;?></th>
                                </tr>
                                <tr class="info">
                                    <th class="bg-dark text-white">शालेय इमारत व परिसर स्वच्छता </th>
                                    <th><?php echo $building ;?></th>
                                </tr>
                                <tr class="info">
                                    <th class="bg-dark text-white">क्रीडासाहित्य </th>
                                    <th><?php echo $sports ;?></th>
                                </tr>
                                <tr class="info">
                                    <th class="bg-dark text-white">पिण्याच्या पाण्याची सुविधा </th>
                                    <th><?php echo $water;?></th>
                                </tr>
                                <tr class="info">
                                    <th class="bg-dark text-white">हॅंडवॉश स्टेशन </th>
                                    <th><?php echo $handwash;?></th>
                                </tr>
                                <tr class="info">
                                    <th class="bg-dark text-white">आरोग्य तपासणी </th>
                                    <th><?php echo $health;?></th>
                                </tr>
                                <tr class="info">
                                    <th class="bg-dark text-white">डिजिटल साधनांचा वापर </th>
                                    <th><?php echo $digital;?></th>
                                </tr>
                                <tr class="info">
                                    <th class="bg-dark text-white"> शाळेतील सोलार लॅम्प </th>
                                    <th><?php echo $solar;?></th>
                                </tr>
                                <tr class="info">
                                    <th class="bg-dark text-white">शाळेचे विद्युतीकरण व विद्युत उपकरणे </th>
                                    <th><?php echo $electricity;?></th>
                                </tr>
                                <tr class="info">
                                    <th class="bg-dark text-white">बालवाचनालय/ शिक्षक वाचनालय </th>
                                    <th><?php echo $liberary;?></th>
                                </tr>
                                <tr class="info">
                                    <th class=" text-white"></th>
                                    <th></th>
                                </tr>
                                <tr class="info">
                                    <th class="bg-danger text-white">आवश्यक शैक्षणिक बाबी</th>
                                    <th></th>
                                </tr>
                                <tr class="info">
                                    <th class="bg-dark text-white">भाषा व गणित मुलभूत क्षमता विकसन पेटी </th>
                                    <th><?php echo $language ;?></th>
                                </tr>
                                <tr class="info">
                                    <th class="bg-dark text-white"> भास्कराचार्य गणित पेटी उपलब्धता व वापर</th>
                                    <th><?php echo $math; ?></th>
                                </tr>
                                <tr class="info">
                                    <th class="bg-dark text-white">इंग्रजी भाषा विकास पेटी  </th>
                                    <th><?php echo $english;?></th>
                                </tr>
                                <tr class="info">
                                    <th class="bg-dark text-white">उर्दू भाषा विकास पेटी </th>
                                    <th><?php echo $urdu;?></th>
                                </tr>
                                <tr class="info">
                                    <th class="bg-dark text-white"> खगोलशास्त्र पेटी </th>
                                    <th><?php echo $geopeti;?></th>
                                </tr>
                                <tr class="info">
                                    <th class="bg-dark text-white">नाविन्यपूर्ण विज्ञान केंद्र  </th>
                                    <th><?php echo $sciencecenter;?></th>
                                </tr>
                                <tr class="info">
                                    <th class="bg-dark text-white">शालेय स्तरावरील विज्ञान साहित्य</th>
                                    <th><?php echo $scidevice;?></th>
                                </tr>
                                <tr class="info">
                                    <th class="bg-dark text-white">मूलभूत वाचन व गणित संबोध प्रशिक्षण हस्तपुस्तिका </th>
                                    <th><?php echo $mathHandbook;?></th>
                                </tr>
                                <tr class="info">
                                    <th class="bg-dark text-white">अध्ययन निष्पत्ती हस्तपुस्तिका </th>
                                    <th><?php echo $aHandbook;?></th>
                                </tr>
                                <tr class="info">
                                    <th class="bg-dark text-white">अध्ययन निष्पत्तींवर आधारित कृतिपुस्तिका </th>
                                    <th><?php echo $kratibook;?></th>
                                </tr>
                                <tr class="info">
                                    <th class="bg-dark text-white"> NAS पूर्वतयारी सराव प्रश्नसंच </th>
                                    <th><?php echo $nas;?></th>
                                </tr>
                                <tr class="info">
                                    <th class="bg-dark text-white">मूल्यवर्धन हस्तपुस्तिका </th>
                                    <th><?php echo $mulyabook;?></th>
                                </tr>
                                <tr class="info">
                                    <th class="bg-dark text-white">TAG RESOURCE YEAR 1 AND 2 BOOK </th>
                                    <th><?php echo $tagResource;?></th>
                                </tr>
                                <tr class="info">
                                    <th class="bg-dark text-white">READ TO ME SOFTWARE INSTALLATION </th>
                                    <th><?php echo $readToMe;?></th>
                                </tr>
                                <tr class="info">
                                    <th class=" text-white"></th>
                                    <th></th>
                                </tr>
                                <tr class="info">
                                    <th class="bg-danger text-white">अनुषंगिक बाबी</th>
                                    <th></th>
                                </tr>
                                <tr class="info">
                                    <th class="bg-dark text-white">शाळा विकास निधी लोकवर्गणीतून मिळवला आहे काय?  </th>
                                    <th><?php echo$donate;?></th>
                                </tr>
                                <tr class="info">
                                    <th class="bg-dark text-white">शालेय ग्रंथालयात कृषिविषयक मासिके उपलब्ध आहेत काय?  </th>
                                    <th><?php echo $agribook;?></th>
                                </tr>
                                <tr class="info">
                                    <th class="bg-dark text-white">व्यवसाय मार्गदर्शन कोपरा आहे काय?  </th>
                                    <th><?php echo $profession;?></th>
                                </tr>
                                <tr class="info">
                                    <th class="bg-dark text-white"> व्यवसाय मार्गदर्शन परिषद घेतली आहे काय?  </th>
                                    <th><?php echo $professionParishad;?></th>
                                </tr>
                                <tr class="info">
                                    <th class="bg-dark text-white">कलचाचणी व अभिक्षमता चाचणी घेतली आहे काय? </th>
                                    <th><?php echo $kalchachni ;?></th>
                                </tr>
                                <tr class="info">
                                    <th class="bg-dark text-white">मूलभूत वाचन व गणित साहित्यपेटीतील साहित्य वापरानंतरही संबोध 100% मुलांपर्यंत पोहचवण्यात कोणती अडचण जाणवली ? (कोणतीही एक अडचण नोंदवा.)  </th>
                                    <th><?php echo $sambhod;?></th>
                                </tr>
                                <tr class="info">
                                    <th class="bg-dark text-white">अध्ययनस्तर माहितीनुसार विद्यार्थ्यांचे स्तरनिहाय गट केले आहेत काय?  </th>
                                    <th><?php echo $sgroup;?></th>
                                </tr>
                                <tr class="info">
                                    <th class="bg-dark text-white">विद्यार्थ्यांनी पुढचा स्तर गाठण्यासाठी आपण भाषा व गणित कृती आराखडा वापरात आणला आहे काय?  </th>
                                    <th><?php echo $nextStage;?></th>
                                </tr>
                                <tr class="info">
                                    <th class="bg-dark text-white">उर्वरित विद्यार्थ्यांना उच्चस्तर गाठण्यासाठी कोणत्या अडचणी जाणवतात? (कोणतीही एक अडचण नोंदवा.) </th>
                                    <th><?php echo $adchan ;?></th>
                                </tr>
                                <tr class="info">
                                    <th class="bg-dark text-white">अप्रगत विद्यार्थ्यांना प्रगत करण्यासाठी केंद्र/तालुका/जिल्हास्तरावर कार्यशाळेची आवश्यकता वाटते काय?  </th>
                                    <th><?php echo $help ;?></th>
                                </tr>
                                <tr class="info">
                                    <th class="bg-dark text-white">100% गुणवत्ता वाढीसाठी आपला वर्ग/विषय याकरिता DIECPD नांदेड व जि.प. शिक्षण विभाग नांदेड यांची कोणती मदत हवी आहे? (नोंदवा.) </th>
                                    <th><?php echo $subjectHelp ;?></th>
                                </tr>
                                <tr class="info">
                                    <th class=" text-white"></th>
                                    <th></th>
                                </tr>
                                <tr class="info">
                                    <th class="bg-danger text-white">अध्ययनस्तर निश्चिती</th>
                                    <th></th>
                                </tr>
                                <tr class="info">
                                    <th class="bg-dark text-white">इ.1 ते 8 अध्ययन स्तर मराठी उच्च स्तर प्राप्त विद्यार्थी संख्या</th>
                                    <th><?php echo $marthiStage;?></th>
                                </tr>
                                
                                <tr class="info">
                                    <th class="bg-dark text-white">इ.1 ते 8 अध्ययन स्तर गणित उच्च स्तर प्राप्त विद्यार्थी संख्या</th>
                                    <th><?php echo $mathStage;?></th>
                                </tr>
                                <tr class="info">
                                    <th class=" text-white"></th>
                                    <th></th>
                                </tr>
                                <tr class="info">
                                    <th class="bg-danger text-white">अध्ययन निष्पत्त्तींवर आधारित चाचणीची माहिती</th>
                                    <th></th>
                                </tr>
                                <tr class="info">
                                    <th class="bg-dark text-white">विषय- मराठी</th>
                                    <th><?php echo $marathiTest;?></th>
                                </tr>
                                <tr class="info">
                                    <th class="bg-dark text-white">विषय- इंग्रजी</th>
                                    <th><?php echo $englishTest;?></th>
                                </tr>
                                <tr class="info">
                                    <th class="bg-dark text-white">विषय- गणित</th>
                                    <th><?php echo $mathTest;?></th>
                                </tr>
                                <tr class="info">
                                    <th class="bg-dark text-white">विषय- सामान्य विज्ञान/ परिसर अभ्यास</th>
                                    <th><?php echo $scienceTest ;?></th>
                                </tr>
                                <tr class="info">
                                    <th class="bg-dark text-white">विषय- सामाजिक शास्त्रे</th>
                                    <th><?php echo  $socialTest;?></th>
                                </tr>
                                <tr class="info">
                                    <th class=" text-white"></th>
                                    <th></th>
                                </tr>
                                <tr class="info">
                                    <th class="bg-danger text-white">शालेय गुणवत्ता विषयक मुद्दे </th>
                                    <th></th>
                                </tr>
                                <tr class="info">
                                    <th class="bg-dark text-white">TAG मधील कृतींचा वापर</th>
                                    <th><?php echo  $tagUse;?></th>
                                </tr>
                                <tr class="info">
                                    <th class="bg-dark text-white">ज्ञानरचनावादी वर्ग</th>
                                    <th><?php echo $kClass ;?></th>
                                </tr>
                                <tr class="info">
                                    <th class="bg-dark text-white">अध्ययनस्तर नुसार विद्यार्थ्यांची प्रगती</th>
                                    <th><?php echo  $progress;?></th>
                                </tr>
                                <tr class="info">
                                    <th class="bg-dark text-white">विद्यार्थ्यांची गटनिहाय बैठक रचना</th>
                                    <th><?php echo  $seating;?></th>
                                </tr>
                                <tr class="info">
                                    <th class="bg-dark text-white">शिक्षकांची सुलभक म्हणून भुमिका</th>
                                    <th><?php echo  $role;?></th>
                                </tr>
                                <tr class="info">
                                    <th class="bg-dark text-white">शिक्षकांची अध्यापनपूर्व तयारी</th>
                                    <th><?php echo  $classprepare;?></th>
                                </tr>
                                <tr class="info">
                                    <th class="bg-dark text-white"> घेतलेल्या विविध प्रशिक्षणांचा अध्ययन अध्यापनात वापर</th>
                                    <th><?php echo  $training;?></th>
                                </tr>
                                <tr class="info">
                                    <th class="bg-dark text-white">C.C.E. नुसार पायाभूत चाचणी व संकलित चाचणी निकाल</th>
                                    <th><?php echo  $cce ;?></th>
                                </tr>
                                <tr class="info">
                                    <th class="bg-dark text-white">शिष्यवृत्ती परिक्षा (इयत्ता 5 वी व 8 वी) तयारी</th>
                                    <th><?php echo  $scholor;?></th>
                                </tr>
                                <tr class="info">
                                    <th class="bg-dark text-white">नवोदय पात्रता परिक्षा तयारी</th>
                                    <th><?php echo  $navodaya;?></th>
                                </tr>
                                <tr class="info">
                                    <th class="bg-dark text-white">इतर स्पर्धा परिक्षांची तयारी</th>
                                    <th><?php echo  $compititive;?></th>
                                </tr>
                                <tr class="info">
                                    <th class="bg-dark text-white">दिव्यांग (अध्ययनार्थी) विद्यार्थ्यांचे शिक्षण</th>
                                    <th><?php echo  $handicap;?></th>
                                </tr>
                                <tr class="info">
                                    <th class="bg-dark text-white">BCPT साहित्याच्या वापराची परिणामकारकता</th>
                                    <th><?php echo  $bcpt;?></th>
                                </tr>
                                <tr class="info">
                                    <th class="bg-dark text-white">शैक्षणिक साहित्य उपलब्धता व वापर</th>
                                    <th><?php echo  $deviceAvali;?></th>
                                </tr>
                                <tr class="info">
                                    <th class="bg-dark text-white">विद्यार्थ्यांचा पाठातील सहभाग</th>
                                    <th><?php echo  $involve;?></th>
                                </tr>
                                <tr class="info">
                                    <th class="bg-dark text-white">विद्यार्थी- शिक्षक आंतरक्रिया</th>
                                    <th><?php echo  $stinteraction;?></th>
                                </tr>
                                <tr class="info">
                                    <th class="bg-dark text-white">विद्यार्थी-विद्यार्थी आंतरक्रिया</th>
                                    <th><?php echo  $ssinter;?></th>
                                </tr>
                                
                            </tbody>
                 </table>
                </div>
                <div align="center">
               <hr> <button class="btn btn-primary btn-large" id="but" >Print</button><hr> 
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
    filename: "<?php echo $sname;?>.xls" //do not include extension
  }); 
});
</script>