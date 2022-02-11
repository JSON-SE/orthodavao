<!DOCTYPE html>
<html>

     <head>
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
               integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
               crossorigin="anonymous">
     </head>
     <style>
          body {
               height: 410mm;
               width: 297mm;
               padding-top: 2em;
          }

          .footer {
               position: absolute;
               bottom: 0;
          }

          #sign {
               position: absolute;
          }

          #footer {
               color: grey;
          }
     </style>

     <body>
          <div class="container">
               <div class="col-xs-12" style="position: relative;" align="center">
                    <div class="title">
                         <h1><strong>JEREMIAH R. MORALES, MD, FPOA</strong></h1>
                         <div class="sub-header">
                              <h3 style="margin: 0;">Orthopedics & Spine Surgery</h3>
                              <h3 style="margin: 0;"><i>Diplomate, Philippine Board of Orthopedics</i></h3>
                              <h3 style="margin: 0;"><i>Fellow, Philippine Orthopedics Association</i></h3>
                              <h3 style="margin: 0;"><i>Fellow, Philippine Spine Society</i></h3>
                         </div>
                    </div><br>
               </div>
               <div class="col-md-12">
                    <div class="col-md-6" align="right" style="padding-right: 20mm;">
                         <h3>Date: {{ $medicalCertificateRequest['date'] }}</h3>
                    </div><br>
                    <div class="col-md-12" align="center">
                         <h1 style="font-size: 40px;">M E D I C A L &nbsp;&nbsp;C E R T I F I C A T E</h1>
                    </div><br>
                    <div class="col-md-12" style="padding-left: 20mm; padding-right: 20mm;">
                         <h3>TO WHOM IT MAY CONCERN:</h3>
                    </div><br>
               </div>
               <div class="col-xs-12" style="padding-left: 24mm; padding-right: 20mm;">
                    <h3>This is to certify that {{$consultation->patient->firstname}}
                         {{$consultation->patient->middlename}} {{$consultation->patient->lastname}} {{
                         isset($consultation->patient->suffix) ?
                         ' '.$consultation->patient->suffix : '' }}, {{$consultation->patient->age}} years old,
                         {{$consultation->patient->gender}},
                         {{$consultation->patient->civil_status}}, and a resident of {{ $barangay_description }} {{
                         $city_municipality_description }}, {{ $province_description }},
                         was
                         <u>examined/treated</u> in this clinic on <u>{{ $medicalCertificateRequest['date'] }}</u> with
                         the following
                         findings
                    </h3>
               </div>
               <div class="col-xs-12" style="padding-left: 24mm; padding-right: 20mm;">
                    <h3><strong>Impression</strong></h3>
                    <h3>{!! $medicalCertificateRequest['assessment'] !!}</h3>
               </div>
               <div class="col-xs-12" style="padding-left: 24mm; padding-right: 20mm;">
                    <h3><strong>Procedure</strong></h3>
                    <h3>{!! $medicalCertificateRequest['procedure'] !!}</h3>
               </div>
               <div class="col-xs-12" style="padding-left: 24mm; padding-right: 20mm;">
                    <h3><strong>Recommendation</strong></h3>
                    <h3>{!! $medicalCertificateRequest['recommendation'] !!}</h3>
               </div>
               <div class="col-md-12" id="sign"
                    style="margin-top: 5em; padding-left: 194mm; padding-right: 20mm; padding-top: 175mm;">
                    <h4>_____________________________</h4>
                    <h4><strong>Jerimiah R. Morales, MD, FPOA, FPSS</strong></h4>
                    <h4><strong>Lic. <u>No.</u> 103836</strong></h4>
                    <h4><strong>Attending Physician</strong></h4>
               </div>
               <div class="col-md-12" style="position: relative; margin-top: 53em; margin-left:80px;">
                    <h3><SMALL>NOT VALID WITHOUT SEAL</SMALL></h3>
               </div>
          </div>
          <footer class="footer" style="padding-left: 20mm; padding-right: 20mm;">
               <div class="col-xs-12">
                    <div class="container" id="footer">
                         <h5>___________________________________________________________________________________________________________________________________
                         </h5>
                         <h4>Clinical Address:</h4>
                         <h4>Panabo City: Rm 2-2Q Medical Arts Building, Rivera Medical Center Incorporated, 7302
                              National Highway, San Francisco, Panabo City, Davao del Norte; Contact Numbers: (084) 628
                              5234; +63933119941</h4>
                         <br>
                         <h4>Davao City: Rm S215, Health Science &amp; Wellness Center, Metro Davao Medical &amp;
                              Research Center, Km 4, JP Laurel Ave., Bajada, Davao City; Contact Numbers: (082) 287 7777
                              (loc 2215); +639227566591</h4>
                    </div>
               </div>
          </footer>
     </body>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
          integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">
     </script>

</html>