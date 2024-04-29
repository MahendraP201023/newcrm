<?php

$body='<html>
<head>

</head>
<body>
   <h1> Saudi Arabian Currency Symbol is &#65020; </h1>
   <h1 style="font-family: Courier New;"> Indian Currency Symbol is &#8377;</h1>
   <h1 style="font-family: Courier;"> Indian Currency Symbol is &#8377;</h1>
   <h1 style="font-family: monospace;"> Indian Currency Symbol is &#8377;</h1>
   <h1 style="font-family: Franklin Gothic Medium;"> Indian Currency Symbol is &#8377;</h1>
   <h1 style="font-family: Arial Narrow;"> Indian Currency Symbol is &#8377;</h1>
   <h1 style="font-family: Arial;"> Indian Currency Symbol is &#8377;</h1>
   <h1 style="font-family: sans-serif;"> Indian Currency Symbol is &#8377;</h1>
   <h1 style="font-family: Georgia;"> Indian Currency Symbol is &#8377;</h1>
   <h1 style="font-family: Times New Roman;"> Indian Currency Symbol is &#8377;</h1>
   <h1 style="font-family: Times;"> Indian Currency Symbol is &#8377;</h1>
   <h1 style="font-family: serif;"> Indian Currency Symbol is &#8377;</h1>
   <h1 style="font-family: Courier New;"> Indian Currency Symbol is &#8377;</h1>
   <h1 style="font-family: Courier New;"> Indian Currency Symbol is &#8377;</h1>
   <h1 style="font-family: Courier New;"> Indian Currency Symbol is &#8377;</h1>
   <H1> European euro Symbol is &#128; </h1>
   <h1> United States dollar symbol is &#36; </h1>
   <h1> Chinese Yuan Renminbi symbol is &#165; </h1>
   <h1> Kazakhstani tenge symbols is &#8376; </h1>
   <br>
   <h1> Saudi Currency in multiple fonts </h1>
   

   <p style="font-family: Geeza Pro;"> Saudi Arabian Currency Symbol is &#65020; (font: "Geeza Pro")</p>
   <p style="font-family: Nadeem;"> Saudi Arabian Currency Symbol is &#65020; (font: "Nadeem")</p>
   <p style="font-family: Al Bayan;"> Saudi Arabian Currency Symbol is &#65020; (font: "Al Bayan")</p>
   <p style="font-family: DecoType Naskh;"> Saudi Arabian Currency Symbol is &#65020; (font: "DecoType Naskh")</p>
   <p style="font-family: DejaVu Serif;"> Saudi Arabian Currency Symbol is &#65020; (font: "DejaVu Serif")</p>
   <p style="font-family: STFangsong;"> Saudi Arabian Currency Symbol is &#65020; (font: "STFangsong")</p>
   <p style="font-family: STHeiti;"> Saudi Arabian Currency Symbol is &#65020; (font: "STHeiti")</p>
   <p style="font-family: STKaiti;"> Saudi Arabian Currency Symbol is &#65020; (font: "STKaiti")</p>
   <p style="font-family: STSong;"> Saudi Arabian Currency Symbol is &#65020; (font: "STSong")</p>
   <p style="font-family: AB AlBayan;"> Saudi Arabian Currency Symbol is &#65020; (font: "AB AlBayan")</p>
   <p style="font-family: AB Geeza;"> Saudi Arabian Currency Symbol is &#65020; (font: "AB Geeza")</p>
   <p style="font-family: AB Kufi;"> Saudi Arabian Currency Symbol is &#65020; (font: "AB Kufi")</p>
   <p style="font-family: DecoType Naskh;"> Saudi Arabian Currency Symbol is &#65020; (font: "DecoType Naskh")</p>
   <p style="font-family: Aldhabi;"> Saudi Arabian Currency Symbol is &#65020; (font: "Aldhabi")</p>
   <p style="font-family: Andalus;"> Saudi Arabian Currency Symbol is &#65020; (font: "Andalus")</p>
   <p style="font-family: Sakkal Majalla;"> Saudi Arabian Currency Symbol is &#65020; (font: "Sakkal Majalla")</p>
   <p style="font-family: Simplified Arabic;"> Saudi Arabian Currency Symbol is &#65020; (font: "Simplified Arabic")</p>
   <p style="font-family: Traditional Arabic;"> Saudi Arabian Currency Symbol is &#65020; (font: "Traditional Arabic")</p>
   <p style="font-family: Arabic Typesetting;"> Saudi Arabian Currency Symbol is &#65020; (font: "Arabic Typesetting")</p>
   <p style="font-family: Urdu Typesetting;"> Saudi Arabian Currency Symbol is &#65020; (font: "Urdu Typesetting")</p>
   <p style="font-family: Droid Naskh;"> Saudi Arabian Currency Symbol is &#65020; (font: "Droid Naskh")</p>
   <p style="font-family: Droid Kufi;"> Saudi Arabian Currency Symbol is &#65020; (font: "Droid Kufi")</p>
   <p style="font-family: Roboto;"> Saudi Arabian Currency Symbol is &#65020; (font: "Roboto")</p>
   <p style="font-family: Tahoma;"> Saudi Arabian Currency Symbol is &#65020; (font: "Tahoma")</p>
      <p style="font-family: Arial;"> Saudi Arabian Currency Symbol is &#65020; (font: "Arial")</p>
   <p style="font-family: serif;"> Saudi Arabian Currency Symbol is &#65020; (font: "serif")</p>
  </body>
</html>';

ob_start();
//$body = iconv("UTF-8","UTF-8//IGNORE",$body); 

include("mpdf/mpdf.php");

$mpdf=new mPDF('c','A4','','',15,15,15,15,15,15);  
/*$stylesheet = file_get_contents('mpdfstyletables.css');
$mpdf->WriteHTML($stylesheet,1);*/
//write html to PDF

$mpdf->WriteHTML("<span style='font-family: DejaVu Sans; sans-serif;'>&#8377;</span>", 2);
//output pdf
$mpdf->Output('Offerlatter1.pdf','D');
