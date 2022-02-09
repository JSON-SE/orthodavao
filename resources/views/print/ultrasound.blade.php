<!DOCTYPE html>
<html>

     <head>
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
               integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
               crossorigin="anonymous">
     </head>
     <style>
          body {
               height: 270mm;
          }

          #sign {
               position: absolute;
          }

          .header {
               text-align: center;
               padding-top: 5mm;
          }

          .header h1 {
               font-size: 31px;
               margin: 1px;
          }

          .sub-header {
               text-align: center;
          }

          .sub-header h4 {
               margin: 0px;
          }

          .addressOne p {
               font-size: 12px;
               margin: 0px;
          }

          .addressTwo p {
               font-size: 12px;
               margin: 0px;
          }

          .addressOne .col-xs-6 {
               padding: 0;
          }

          .addressTwo .col-xs-6 {
               padding-left: 30px;
          }

          .clinicHoursOne p {
               font-size: 12px;
               margin: 0px;
          }

          .clinicHoursOne .col-xs-6 {
               margin-top: 10px;
               padding: 0;
          }

          .clinicHoursTwo p {
               font-size: 12px;
               margin: 0px;
          }

          .clinicHoursTwo .col-xs-6 {
               margin-top: 10px;
               padding-left: 30px;
               margin-bottom: 3px;
          }

          .personalInfo p {
               font-size: 12px;
               margin: 0px;
               margin-top: 0px;
          }

          .personalInfo .col-xs-10 {
               margin-top: 10px;
               padding: 0;
          }

          .personalInfo .col-xs-7 {
               margin-top: 10px;
               padding: 0;
          }

          .personalInfo .col-xs-2 {
               margin-top: 10px;
               padding: 0;
          }

          .personalInfo .col-xs-3 {
               margin-top: 10px;
               padding: 0;
          }
     </style>

     <body>
          <div class="container">
               <div class="header">
                    <h1><strong>JEREMIAH R. MORALES, MD, FPOA</strong></h1>
                    <div class="sub-header">
                         <h4>Orthopedics & Spine Surgery</h4>
                         <h4><i>Diplomate, Philippine Board of Orthopedics</i></h4>
                         <h4><i>Fellow, Philippine Orthopedics Association</i></h4>
                    </div>
               </div><br>
               <div class="col-xs-12">
                    <div class="address">
                         <div class="addressOne">
                              <div class="col-xs-6">
                                   <p><strong>Clinic Address:</strong></p>
                                   <p>Rm 5125, Health Science & Wellness Center</p>
                                   <p>Metro Davao Medical & Research Center</p>
                                   <p>JP Laurel Ave., Bajada, Davao City</p>
                                   <p>Tel. No. 0922-756-6591/287-7777 Local 2215</p>
                              </div>
                         </div>
                         <div class="addressTwo">
                              <div class="col-xs-6">
                                   <p><strong>Clinic Address:</strong></p>
                                   <p>Rm 07, 2nd Floor Medical Arts Building Rivera Medical Center, Inc.</p>
                                   <p>San Francisco, Panabo City</p>
                                   <p>Cell No. 0932-645-0175</p>
                              </div>
                         </div>
                         <div class="clinicHoursOne">
                              <div class="col-xs-6">
                                   <p><strong>Clinic Hours:</strong></p>
                                   <p>Monday-Friday 4:30pm-6:00pm</p>
                                   <p>Saturday 9:00am-12:00nn</p>
                              </div>
                         </div>
                         <div class="clinicHoursTwo">
                              <div class="col-xs-6">
                                   <p><strong>Clinic Hours:</strong></p>
                                   <p>Monday 2:00pm-3:30pm/Tuesday</p>
                                   <p>Wednesday 3:30pm-5:00pm</p>
                                   <p>Other days: by appointment</p>
                              </div>
                         </div>
                         <hr style="
					border: solid;
					border-width: 2px;
					margin: 0px;
				">
                    </div>
               </div>
               <div class="col-xs-12">
                    <div class="personalInfo">
                         <div class="col-xs-7">
                              <p><strong>Name:</strong>&nbsp;&nbsp;<strong>{{$consultation->patient->firstname}}
                                        {{$consultation->patient->middlename}}
                                        {{$consultation->patient->lastname}}{{ isset($consultation->patient->suffix) ?
                                        ', '.$consultation->patient->suffix : '' }}</strong></p>
                         </div>
                         <div class="col-xs-3">
                              <p><strong>Age:</strong>&nbsp;&nbsp;<strong>{{$consultation->patient->age}}</strong></p>
                         </div>
                         <div class="col-xs-2">
                              <p><strong>Date:</strong>&nbsp;&nbsp;<strong>{{$consultation->date}}<strong></p>
                         </div>
                         <div class="col-xs-10">
                              <p><strong>Address:</strong>&nbsp;&nbsp;<strong>{{ $barangay_description }} {{
                                        $city_municipality_description }}, {{ $province_description }}</strong>
                              </p>
                         </div>
                         <div class="col-xs-2">
                              <p><strong>Sex:</strong>&nbsp;&nbsp;<strong>{{$consultation->patient->gender}}</strong>
                              </p>
                         </div>
                    </div>
               </div>
               <div class="col-xs-12">
                    <!-- Content -->
                    <br>
                    <h5 align="center"><strong>ULTRASOUND REQUEST</strong></h5>
                    <br>
                    @foreach($ultrasoundRequest as $ultrasound)
                    <ul style="margin: 0;">
                         <li>{{$ultrasound['name']}}</li>
                    </ul>
                    @endforeach
               </div>
               <!-- Signature and Footer -->
               <div class="sticky-footer" style="bottom: 0; position: absolute; padding-left: 8px;">
                    <div class="sign">
                         <div class="col-xs-12" style="padding: 0; margin: 0; bottom: 30px;">
                              <div class="col-xs-7"></div>
                              <div class="col-xs-5" style="padding: 0; margin: 0; padding-left: 30px;">
                                   <p style="margin: 0; padding: 0;"><strong>____________________________</strong></p>
                                   <p style="margin: 0; padding: 0;"><strong>Jeremiah R. Morales, MD, FPOA</strong></p>
                                   <p style="margin: 0; padding: 0;"><strong>Lic. No. 103836</strong></p>
                                   <p style="margin: 0; padding: 0;"><strong>Attending Physician</strong></p>
                              </div>
                         </div>
                    </div>
                    <div class="content">
                         <hr style="
					border: solid;
					border-width: 2px;
					margin: 0px;
				">
                         <p align="center" style="font-weight: 900; font-size: 26.6px;"><strong>NORTH DAVAO ORTHOPEDIC &
                                   SPINE CLINIC</strong></p>
                    </div>
               </div>
          </div>
     </body>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
          integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">
     </script>

</html>