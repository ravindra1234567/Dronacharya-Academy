<?php $this->load->view('include/student/header'); ?>
<div class="container">
	<h2>About us</h2>
	<div style="font-family: 'Berkshire Swash', cursive;font-size: 30px;color:red;" class="centre text-center mb-1">
		We have the expert team. Who will help<br> you to reach your destination.
	</div>
	<div class="text-center mb-2" style="font-family: 'Pridi', serif;font-size: 20px;">
		Dronacharya academy is setting new milestones of success in <br>competitive exams by imparting guidance through scientific training <br>and quality preparation, it has become a synonym to success.
	</div>

	The Academy trains candidates not only for administrative service of union and state public service commission, challenging exams like SI, CI but also for lower subordinate level exams like Bank P.O. SSC, and Railway. Dronacharya Academy believes in Your Hard Work, Our guidance & Success for ALL and imparts training in a scientific way for the sure success of the aspirant. Not only Social Science, Public Administration, Sociology, History, Geography but difficult subjects like Economics, Hindi Literature, Criminology, Law, Botany, and Zoology are also taught here which are taught nowhere under the same roof in the state.

	<br><div id="english" class="collapse">
		Correspondence is available for students living in remote areas or distant places. The Library at the Institute is laced with all facilities. Computerized Study Material helps in crossing obstacles and gaining relevant knowledge. This is the reason that the academy has set new milestones in terms of selection. We provide a large number of facilities under the same roof for the aspirants so that they can bring laurels to their country, society, and family. You can also be benefited by Specialists of the Academy by obtaining free of cost guidance and career counseling.
	</div>
	<button type="button" class="btn btn-primary ml-4 shadow-xlg p-1 mb-4 mt-2" data-toggle="collapse" data-target="#english">Read more</button>
	<div>
		प्रतियोगिता परीक्षाओं की वैज्ञानिक एवं स्तरीय तैयारी में छात्रों के मार्गदर्शन हेतु समर्पित द्रोणाचार्य  एकेडमी अपनी सफलताओं के नए कीर्तिमान स्थापित करते हुए सफलता का पर्याय बन चुकी है | एकेडमी में संघ एवं राज्य लोक सेवा आयोग की प्रशासनिक सेवा परीक्षा के साथ साथ S.I., C.J. जैसी चुनौतीपूर्ण परीक्षाओं का प्रशिक्षण दिया जाता है तो वही लोअर सबोर्डिनेट स्तर की परीक्षाओं जैसे PO, SSC, रेलवे हेतु भी स्तरीय एवं सघन कक्षा प्रशिक्षण कार्यक्रमों ने सफलता के नए मानदंड स्थापित किए हैं एकेडमी में अपने आदर्श वाक्य “परिश्रम आपका, मार्गदर्शन हमारा, सफलता सबकी” को ध्यान में रखते हुए छात्रों के सुनिश्चित सफलता हेतु वैज्ञानिक तकनीक से अध्यापन किया जाता है |
	</div>
	<div id="hindi" class="collapse">
		इस दृष्टिकोण से संस्थान में सामान्य अध्ययन, लोक प्रशासन, समाजशास्त्र, मानवशास्त्र, इतिहास, भूगोल जैसे लोकप्रिय विषयों के साथ साथ अपराध शास्त्र, अर्थशास्त्र, हिन्दी साहित्य, सैन्य विज्ञान, विधि, जंतु विज्ञान, वनस्पति विज्ञान जैसे दुर्लभ विषय भी उपलब्ध हैं जो प्रदेश में अन्यत्र कहीं नही हैं | दूरस्थ विद्यार्थियों के लिए पत्राचार कार्यक्रम उपलब्ध है जो उनकी सफलता के पथ प्रदर्शक बने हैं वहीं संस्थान में उपलब्ध लाइब्रेरी सुविधा एवं स्तरीय व कंप्यूटर पर पाठ्य सामग्री चुनौतीभरे एवं कठिन परीक्षाओं को सुरुचिपूर्ण बनाते हैं एवं विषयगत अध्ययन में छात्रों के सहायक सिद्ध होते हैं | प्रतियोगिता परीक्षाओं की वैज्ञानिक एवं स्तरीय तैयारी में छात्रों के मार्गदर्शन हेतु समर्पित द्रोणाचार्य  एकेडमी ने परीक्षार्थिओं को एक छत के नीचे अधिकतम सुविधायें उपलब्ध करवायीं हैं ताकि वे अपना ध्यान केवल अध्ययन में लगाकर सफलता प्राप्त करें एवं अपने जीवन के लक्ष्य को पाकर अपने परिवार, समाज और देश का नाम रौशन कर सकें | आप भी एकेडमी के विषय विशेषज्ञों से मिलकर लाभान्वित हो सकते हैं | निःशुल्क मार्गदर्शन एवं कैरियर काउंसलिंग हेतु एकेडमी के द्वार सभी प्रतियोगियों के लिए हमेशा खुले है|
	</div><button type="button" class="btn btn-primary ml-4 shadow-xlg p-1 mb-4 mt-2" data-toggle="collapse" data-target="#hindi">Read more</button>
</div>
<?php $this->load->view('include/student/footer'); ?>
<script type="text/javascript">
	$(document).ready(function(){
        $("button").click(function(){
            $(this).text($(this).text() == 'Read more' ? 'Read less' : 'Read more');
        });
    });
</script>