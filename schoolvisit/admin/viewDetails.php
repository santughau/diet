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
            <h2 class="bg-dark text-white text-center">प्राथमिक माहिती</h2>
                <div class="form-row">                    
                    <div class="form-group col-md-3">
                        <label class="text-danger">शाळेचे पूर्ण  नाव </label>
                        <h5>Pradnya Niketan Girls Highschool , Holi </h5><hr>
                    </div>
                     <div class="form-group col-md-2">
                        <label class="text-danger">UDISE नं.</label>
                        <h5>5874125478541245</h5><hr>
                    </div> 
                     <div class="form-group col-md-1">
                        <label class="text-danger">शाळेचे माध्यम </label>
                        <h5>मराठी </h5><hr>
                    </div>
                     <div class="form-group col-md-1">
                        <label class="text-danger">केंद्र</label>
                        <h5>चौफाळा </h5><hr>
                    </div>
                     <div class="form-group col-md-1">
                        <label class="text-danger">शाळेचा एकूण पट </label>
                        <h5>150</h5><hr>
                    </div> 
                     <div class="form-group col-md-1">
                        <label class="text-danger">एकूण उपस्थिती </label>
                        <h5>140</h5><hr>
                    </div>
                     <div class="form-group col-md-1">
                        <label class="text-danger">शाळासिद्धी श्रेणी</label>
                        <h5>A</h5><hr>
                    </div>
                    <div class="form-group col-md-1">
                        <label class="text-danger">भेटीचा क्रमांक </label>
                        <h5>1</h5><hr>
                    </div>
                     <div class="form-group col-md-1">
                        <label class="text-danger">भेटीचा दिनांक </label>
                        <h5>23/08/1980</h5>  <hr>                  </div>
                </div><hr>
            <h2 class="bg-warning text-white text-center">भौतिक सुविधा- उपलब्धता व वापर</h2>
                <p class="text-center text-dark"><b>शाळेत उपलब्ध असणा-या खालील भौतिक सोयीसुविधांची देखभाल तसेच वापर होतो आहे का? </b></p><hr>
                <div class="form-row">
                     <div class="form-group col-md-2">
                        <label class="text-danger">शालेय इमारत व परिसर</label>
                        <h5>नेहमी </h5><hr>
                    </div>
                    
                    <div class="form-group col-md-2">
                        <label class="text-danger">वर्गखोल्या व इतर खोल्या</label>
                        <h5>नेहमी </h5><hr>
                    </div>
                    
                    <div class="form-group col-md-2">
                        <label class="text-danger">स्वच्छतागृह</label>
                        <h5>नेहमी </h5><hr>
                    </div>
                    <div class="form-group col-md-2">
                        <label class="text-danger">पिण्याच्या पाण्याची सुविधा</label>
                        <h5>नेहमी </h5><hr>
                    </div>
                    <div class="form-group col-md-2">
                        <label class="text-danger">पिण्याच्या पाण्याची सुविधा</label>
                        <h5>नेहमी </h5><hr>
                    </div>
                    <div class="form-group col-md-2">
                        <label class="text-danger">हॅंडवॉश स्टेशन</label>
                        <h5>नेहमी </h5><hr>
                    </div>
                    <div class="form-group col-md-2">
                        <label class="text-danger">क्रीडासाहित्य</label>
                        <h5>नेहमी </h5><hr>
                    </div>
                    <div class="form-group col-md-2">
                        <label class="text-danger">वीज व विद्युत उपकरणे</label>
                        <h5>नेहमी </h5><hr>
                    </div>
                     
                     <div class="form-group col-md-2">
                        <label class="text-danger">डिजिटल साहित्य</label>
                        <h5>नेहमी </h5><hr>
                    </div>
                     <div class="form-group col-md-2">
                        <label class="text-danger">शालेय बाल व शिक्षक वाचनालय</label>
                        <h5>नेहमी </h5><hr>
                    </div>
                     <div class="form-group col-md-2">
                        <label class="text-danger">प्रयोगशाळेशी संबंधित साहित्य</label>
                        <h5>नेहमी </h5><hr>
                    </div>
                    <div class="form-group col-md-2">
                        <label class="text-danger">मध्यानभोजन स्वयंपाकखोली व भांडी</label>
                        <h5>नेहमी </h5><hr>
                    </div>
                     
                </div><hr>
                <h2 class="bg-info text-white text-center">आवश्यक शैक्षणिक बाबी</h2>
                <p class="text-center text-dark"><b>विविध अध्ययनसंचांचा विद्यार्थ्यांच्या अध्ययनात उपयोग होतो का?</b></p><hr>
                <div class="form-row">
                     <div class="form-group col-md-3">
                        <label class="text-danger">भाषा व गणित मुलभूत क्षमता विकसन पेटी</label>
                        <h5>नेहमी </h5><hr>
                    </div>
                    <div class="form-group col-md-3">
                        <label class="text-danger">भास्कराचार्य गणित पेटी उपलब्धता व वापर</label>
                        <h5>नेहमी </h5><hr>
                    </div>
                    <div class="form-group col-md-2">
                        <label class="text-danger">इंग्रजी भाषा विकास पेटी </label>
                        <h5>नेहमी </h5><hr>
                    </div>
                    <div class="form-group col-md-2">
                        <label class="text-danger">उर्दू भाषा विकास पेटी</label>
                        <h5>नेहमी </h5><hr>
                    </div>
                    <div class="form-group col-md-2">
                        <label class="text-danger">मूल्यवर्धन पुस्तिका उपलब्धता व वापर</label>
                        <h5>नेहमी </h5><hr>
                    </div>
                    <div class="form-group col-md-3">
                        <label class="text-danger">शालेय ग्रंथालयातील कृषिविषयक मासिके</label>
                        <h5>नेहमी </h5><hr>
                    </div>
                    <div class="form-group col-md-3">
                        <label class="text-danger">TAG RESOURCE YEAR 1 AND 2 BOOK</label>
                       <h5>नेहमी </h5><hr>
                    </div>
                    <div class="form-group col-md-2">
                        <label class="text-danger">नाविन्यपूर्ण विज्ञान केंद्र भेटी व वापर</label>
                        <h5>नेहमी </h5><hr>
                    </div>
                    <div class="form-group col-md-3">
                        <label class="text-danger">READ TO ME SOFTWARE INSTALLATION</label>
                        <h5>नेहमी </h5><hr>
                    </div>
                </div><hr>
                <h2 class="bg-primary  text-white text-center">अध्ययनस्तर निश्चिती</h2>
                <p class="text-center text-dark"><b>मराठी व गणित विषयातील केवळ उच्चस्तर प्राप्त विद्यार्थ्यांची संख्या नोंदवावी. लागू नसलेल्या वर्गांनी माहिती भरू नये.सर्व आकडे इंग्रजीत नोंदवावेत.</b></p><hr>
                <div class="form-row">
                     <div class="form-group col-md-6">
                        <label class="text-danger">इ.1 ते 8 अध्ययन स्तर मराठी उच्च स्तर प्राप्त विद्यार्थी संख्या</label>
                        <h5>नेहमी </h5><hr>
                    </div>
                    <div class="form-group col-md-6">
                        <label class="text-danger">इ.1 ते 8 अध्ययन स्तर गणित उच्च स्तर प्राप्त विद्यार्थी संख्या</label>
                        <h5>नेहमी </h5><hr>
                    </div>
                </div><hr>
                <h2 class="bg-secondary  text-white text-center">अध्ययन निष्पत्त्तींवर आधारित चाचणीची माहिती</h2>
                <p class="text-center text-dark"><b>याठिकाणी 75% पेक्षा अधिक गुण प्राप्त असलेली विद्यार्थी संख्या विषयनिहाय नोंदवावी.सर्व आकडे इंग्रजीत नोंदवावेत.</b></p><hr>
                <div class="form-row">
                     <div class="form-group col-md-2">
                        <label class="text-danger">विषय- मराठी</label>
                        <h5>नेहमी </h5><hr>
                    </div>
                    <div class="form-group col-md-2">
                        <label class="text-danger">विषय- इंग्रजी</label>
                        <h5>नेहमी </h5><hr>
                    </div>
                    <div class="form-group col-md-2">
                        <label class="text-danger">विषय- गणित</label>
                        <h5>नेहमी </h5><hr>
                    </div>
                    <div class="form-group col-md-3">
                        <label class="text-danger">विषय- सामान्य विज्ञान/ परिसर अभ्यास</label>
                        <h5>नेहमी </h5><hr>
                    </div>
                    <div class="form-group col-md-3">
                        <label class="text-danger">विषय- सामाजिक शास्त्रे</label>
                        <h5>नेहमी </h5><hr>
                    </div>
                </div><hr>
                <h2 class="bg-dark text-white text-center">शालेय गुणवत्ता विषयक मुद्दे
</h2>
                <p class="text-center text-dark"><b>याठिकाणी शाळेचे एकूण सर्व गुणवत्ता विषयक मुद्दे विचारात घेवून श्रेणी निश्चित करून नोदवावी.</b></p><hr>
                <div class="form-row">
                     <div class="form-group col-md-3">
                        <label class="text-danger">TAG मधील कृतींचा वापर</label>
                        <h5>नेहमी </h5><hr>
                    </div>
                    <div class="form-group col-md-3">
                        <label class="text-danger">TAG मधील कृतींचा वापर</label>
                        <h5>नेहमी </h5><hr>
                    </div>
                    <div class="form-group col-md-3">
                        <label class="text-danger">अध्ययन निष्पत्तींवर आधारित कृतिपुस्तिकांचा वापर</label>
                        <h5>नेहमी </h5><hr>
                    </div>
                    <div class="form-group col-md-3">
                        <label class="text-danger">ज्ञानरचनावादी वर्ग</label>
                        <h5>नेहमी </h5><hr>
                    </div>
                    <div class="form-group col-md-3">
                        <label class="text-danger">अध्ययनस्तर नुसार विद्यार्थ्यांची प्रगती</label>
                        <h5>नेहमी </h5><hr>
                    </div>
                    <div class="form-group col-md-3">
                        <label class="text-danger">विद्यार्थ्यांची गटनिहाय बैठक रचना</label>
                        <h5>नेहमी </h5><hr>
                    </div>
                    <div class="form-group col-md-3">
                        <label class="text-danger">शिक्षकांची सुलभक म्हणून भुमिका</label>
                        <h5>नेहमी </h5><hr>
                    </div>
                    <div class="form-group col-md-3">
                        <label class="text-danger">शिक्षकांची अध्यापनपूर्व तयारी</label>
                       <h5>नेहमी </h5><hr>
                    </div>
                    <div class="form-group col-md-3">
                        <label class="text-danger">घेतलेल्या विविध प्रशिक्षणांचा अध्ययन अध्यापनात वापर</label>
                        <h5>नेहमी </h5><hr>
                    </div>
                    <div class="form-group col-md-3">
                        <label class="text-danger">C.C.E. नुसार पायाभूत चाचणी व संकलित चाचणी निकाल</label>
                       <h5>नेहमी </h5><hr>
                    </div>
                    <div class="form-group col-md-3">
                        <label class="text-danger">शिष्यवृत्ती परिक्षा (इयत्ता 5 वी व 8 वी) तयारी</label>
                        <h5>नेहमी </h5><hr>
                    </div>
                    <div class="form-group col-md-3">
                        <label class="text-danger">नवोदय पात्रता परिक्षा तयारी</label>
                        <h5>नेहमी </h5><hr>
                    </div>
                    <div class="form-group col-md-3">
                        <label class="text-danger">इतर स्पर्धा परिक्षांची तयारी</label>
                       <h5>नेहमी </h5><hr>
                    </div>
                    <div class="form-group col-md-3">
                        <label class="text-danger">दिव्यांग (अध्ययनार्थी) विद्यार्थ्यांचे शिक्षण</label>
                        <h5>नेहमी </h5><hr>
                    </div>
                    <div class="form-group col-md-3">
                        <label class="text-danger">BCPT साहित्याच्या वापराची परिणामकारकता</label>
                        <h5>नेहमी </h5><hr>
                    </div>
                    <div class="form-group col-md-3">
                        <label class="text-danger">शैक्षणिक साहित्य उपलब्धता व वापर</label>
                       <h5>नेहमी </h5><hr>
                    </div>
                    <div class="form-group col-md-3">
                        <label class="text-danger">विद्यार्थ्यांचा पाठातील सहभाग</label>
                        <h5>नेहमी </h5><hr>
                    </div>
                    <div class="form-group col-md-3">
                        <label class="text-danger">विद्यार्थी- शिक्षक आंतरक्रिया</label>
                        <h5>नेहमी </h5><hr>
                    </div>
                </div><hr>
                
                <div align="center">
                <button class="btn btn-primary btn-large" >Submit</button>
            </div>
            </div>
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