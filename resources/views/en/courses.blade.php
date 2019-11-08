@extends('layouts.app')

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-6 col-form-label">
            <div class="card">
                <div class="card-header"><h5> <img src="/images/courses.png" width="50px" style="border-radius: 60px"> Offered Courses </h5></div>

                <div class="card-body">
                    
                       <p>
                      	We Offer the Following Courses at Elam Christian Harvest Seminary
                      </p>
                      <ul>
                          <li><a href=""> Certificate in Theology and Bible Knolwedge</a> </li>
                          <li><a href="">Diploma in Theology</a> </li>
                          <li><a href="">Degree In Theology</a> </li>
                          <li><a href="">Degree in Psychology and Phylosophy</a> </li>


                      </ul>

                </div>
            </div>
        </div>
        <div class="col-md-6 col-form-label">
          <div class="card">
            <div class="card-header"><h5> Course Descriptions</h5></div>
            <div class="card-body">
            	<h6 style="color:darkblue">Certificate of Theology and Bible Knoledge</h6> <br>
            	<p> Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in most web projects.</p>
            	
            	<h6 style="color:darkblue">Diploma in Theology</h6> <br>
            	<p> Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in most web projects.</p>
            	
            	<h6 style="color:darkblue">Degree In Theology</h6> <br>
            	<p> Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in most web projects.</p>
            	
            	<h6 style="color:darkblue">Degree in Psychology and Phylosophy</h6> <br>
            	<p> Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in most web projects.</p>

            </div>
              
          </div>  


        </div>

    </div>


@endsection     

@section('footer')
 <div class="container" style="background-color:#dfe2e6;border-radius: 5px;">
        <div class="row"> <br>
            <div class="col-md-4">
                <h5>Quick Links</h5>
                <a href="" style="color: black">Login</a> <br>
                <a href="" style="color: black">Apply for Degree and Diploma</a><br>
            </div>

            <div class="col-md-2">
                <h5>Map</h5>
            </div>

            <div class="col-md-6">
                <h5>Contacts</h5>
                Website: <a href=""> www.elamchristianhs.org</a>,  
                E-Mail: info@elamchristianhs.org <br> 
                P.O.BOX 4534, Mbeya Tanzania,  
                Phone: +25576565657, +2542242525<br>
            </div>
        </div>              
    </div>

@endsection