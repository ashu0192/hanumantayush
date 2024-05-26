@extends('layouts.app')
  


@section('content')

<div class="">
  <!-- Banner Section with Slider -->
  <div class="row">
    <div class="col">
      <div id="bannerCarousel" class="carousel slide banner" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="{{ asset('storage/ayurveda3.jpg') }}" class="d-block w-100" alt="Image 1">
            <div class="carousel-caption">
              <h1  style="font-size:57px;font-weight: 100px;text-shadow: 0 0 3px rgba(0, 0, 0, 0.5);"> श्री हनुमंत आयुर्वेदिक औषधालय में आपका स्वागत है </h1>
            </div>
          </div>
          <div class="carousel-item">
            <img src="{{ asset('storage/ayurveda2.jpg') }}" class="d-block w-100" alt="Image 2">
            <div class="carousel-caption">
              <h1>Slide 2</h1>
            </div>
          </div>
          <!-- Add more slides as needed -->
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#bannerCarousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#bannerCarousel" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
  </div>


  <!-- Other Sections -->
    
    
  <div> 
    <div class=" container-lg pt-5 pb-5">
    <div class="row">
      <div class="col">
        <p>About Us</p>
        <h1>सर्वश्रेष्ठ आयुर्वेद परामर्श के लिए मार्गदर्शन और सहायता उपचार</h1>
        <h4>आयुर्वेद को जीवन का विज्ञान भी कहा गया है। जहाँ एलोपैथिक दवा बीमारी होने की मूल कारण पर ना जाकर इसको दूर करने पर केंद्रित होती है वहीं आयुर्वेद हमें बीमारी होने की मूलभूत कारणों के साथ-साथ इसके इसके समग्र निदान के विषय में भी बताता है|</h4>
        <h2>Helped Fund 24,537 Projects in 24 Countries,
            BenefIting Over 8.2 Million People.</h2>
            <button class="btn btn-primary">Learn More</button>   
      </div> 
      <div class="col text-center">
        <img  style="height:400px; width:70%" src="{{ asset('storage/hanu-1.jpg') }}" alt="adsfg">
      </div>
     
    </div>
  </div>


  <div class=" container-lg mt-5 mb-5"  >
    <div class="row">
        <div class="col mt-2" >
            <div class="card" >
                <img src="{{ asset('storage/ayurveda3.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
        </div>
        <div class="col mt-2">
            <div class="card">
                <img src="{{ asset('storage/ayurveda3.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
        </div>
        <div class="col mt-2">
            <div class="card" >
                <img src="{{ asset('storage/ayurveda3.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
        </div>
    </div>
  </div>
   
 
<div style="background:green">
<div class=" container-lg pt-5 pb-5 text-white" >
    <div class="row">
      <div class="col">
        <p style="font-size:80px;  line-height:64px;">How to Survive a Recession When the Future Feels Uncertain</p>
        <p style="font-size:25px;  ">When I was 21 I had just finished my second year at Uni studying to be a primary school teacher,</p>
        <h4>Raised: $0.00 </h4>
      </div>
      <div class="col text-center">
        <img  style="height:400px; width:70%" src="{{ asset('storage/hanu-1.jpg') }}" alt="adsfg">
      </div>
    </div>
  </div>
  </div>
 
  <div style="background:#ffffff">
<div class=" container-lg pt-5 pb-5 " >
    <div class="row text-center ">
      <p style="color:red;">अत्यधिक योग्य अनुभवी आयुर्वेद चिकित्सकों समूह</p>
      <p style="font-size:30px;">सर्वश्रेष्ठआयुर्वेद चिकित्सक आयुर्वेदिक क्षेत्र योगदान</p>
      </div>
      <div class="row ">
        <div class="col p-3 text-center"><img src="{{ asset('storage/dr-1.png') }}" alt="">
        <p style="color:red;">आयुर्वेद चिकित्सक</p>
        <p style="font-size:24px;">डॉ. एस.पी. मिश्रा</p>
      
      </div>
        <div class="col p-3 text-center"><img src="{{ asset('storage/Dr-d-D-2.png') }}" alt="">
        <p style="color:red;">आयुर्वेद चिकित्सक </p>
        <p style="font-size:24px;">डॉ. एस.पी. मिश्रा</p>
      </div>
        <div class="col p-3 text-center"><img src="{{ asset('storage/Vpaa.png') }}" alt="">
        <p style="color:red;">आयुर्वेद चिकित्सक</p>
        <p style="font-size:24px;">डॉ. एस.पी. मिश्रा</p>
      </div>
        
      </div>
  </div>
  </div>  

<div class="container-lg pt-5 pb-5">
  <div class="row">
    <div class="col-7">
    <p style="color:red;">Why Choose Us</p>
    <p style="font-size:30px;">For charity water progress begins &with content</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis with nostrud exercitation ullamco laboris nisi ut aliquip </p>
   
       <div class="row">
       <div class="col">
       <div style="border:1px solid black; padding:10px; text-align:center; background:#ffffff; border-radius:7px;  margin:10px; width:250px; height:auto; ">
        <p style="font-size:24px;">116</p>
        <p>children and family</p>
      
        </div>
       </div>
       <div class="col">
       <div style="border:1px solid black; padding:10px; text-align:center; background:#ffffff; border-radius:7px;  margin:10px; width:250px; height:auto; ">
        <p style="font-size:24px;">116</p>
        <p>children and family</p>
      
        </div>
       </div>
      </div>  
      <div class="row">
        <div class="col-2">

        </div>
       <div class="col">
       <div style="border:1px solid black; padding:10px; text-align:center; background:#ffffff; border-radius:7px;  margin:10px; width:250px; height:auto; ">
        <p style="font-size:24px;">116</p>
        <p>children and family</p>
      
        </div>
       </div>
       <div class="col">
       <div style="border:1px solid black; padding:10px; text-align:center; background:#ffffff; border-radius:7px;  margin:10px; width:250px; height:auto; ">
        <p style="font-size:24px;">116</p>
        <p>children and family</p>
      
        </div>
       </div>
      </div>    
    </div>
  </div>
</div>



<div class=" container-lg mt-5 mb-5"  >
    <div class="row">
        <div class="col mt-2" >
            <div class="card" >
                <img src="{{ asset('storage/ayurveda3.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
        </div>
        <div class="col mt-2">
            <div class="card">
                <img src="{{ asset('storage/ayurveda3.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
        </div>
        <div class="col mt-2">
            <div class="card" >
                <img src="{{ asset('storage/ayurveda3.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
        </div>
    </div>
  </div>

  @endsection
