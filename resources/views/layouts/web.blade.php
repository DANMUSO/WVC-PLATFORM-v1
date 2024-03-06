<!DOCTYPE html>
<html lang="en">
<head>
<title>World Victory Center</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="{{ asset('v1/css2?family=Nunito+Sans:wght@200;300;400;600;700&display=swap')}}" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('v1/font-awesome/4.7.0/css/font-awesome.min.css')}}">
<link rel="stylesheet" href="{{ asset('v1/ajax/libs/ionicons/4.5.6/css/ionicons.min.css')}}">
<link rel="stylesheet" href="{{ asset('v1/css/animate.css')}}">
<link rel="stylesheet" href="{{ asset('v1/css/flaticon.css')}}">
<link rel="stylesheet" href="{{ asset('v1/css/tiny-slider.css')}}">
<link rel="stylesheet" href="{{ asset('v1/css/glightbox.min.css')}}">
<link rel="stylesheet" href="{{ asset('v1/css/aos.css')}}">
<link rel="stylesheet" href="{{ asset('v1/css/style.css')}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<x-embed-styles />
<link rel="shortcut icon" type="image/png" href="{{asset('v1/images/WVC-Logo-Redo-1-Clear-Small.webp')}}" />
<style>
.checked {
  color: orange;
}
/* styles.css */


.cardinfo {
    width: 100%; /* Adjust the width of the card */
    padding: 15px;
    border-radius: 8px;
    background-color: #fff; /* Slightly lighter blue for card */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.user-info {
    display: flex;
    align-items: center;
}

.user-info img {
    width: 80px; /* Adjust the width of the user photo */
    height: 80px; /* Adjust the height of the user photo */
    border-radius: 50%; /* Makes the image circular */
    margin-right: 15px;
}

.text-info h2 {
    font-size: 1.2rem;
    margin-bottom: 5px;
    color: #253746; /* Text color */
}

.text-info p {
    font-size: 0.9rem;
    margin: 0;
    opacity: 0.8;
    color: #253746; /* Text color */
}
/* styles.css */

.button-container {
    display: flex;
}

.button-container button {
    padding: 10px 20px;
    margin-right: 10px;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 14px;
}

.button-container button:last-child {
    margin-right: 0; /* Remove margin from the last button */
}
/* styles.css */

.scrolling-div {
    height: 150px; /* Set the height of the scrolling div */
    overflow: hidden;
}

.content {
    animation: scroll-up 40s linear infinite; /* Adjust the animation duration as needed */
}

@keyframes scroll-up {
    from {
        transform: translateY(0);
    }
    to {
        transform: translateY(-100%);
    }
}

p {
    margin: 10px 0;
}

.events-container {
  display: flex;
  justify-content: center;
  align-items: center;
  flex-wrap: wrap;
}

.event-card {
  perspective: 1000px;
  width: 150px;
  height: 200px;
  margin: 20px;
  position: relative;
}

.event-front,
.event-back {
  position: absolute;
  width: 100%;
  height: 100%;
  border-radius: 15px;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  text-align: center;
  transition: transform 0.6s;
  backface-visibility: hidden;
}

.event-front {
  background-color: var(--bg-color);
  transform: rotateY(0deg);
}

.event-back {
  background-color: var(--bg-color);
  transform: rotateY(180deg);
}

.event-card:hover .event-front {
  transform: rotateY(180deg);
}

.event-card:hover .event-back {
  transform: rotateY(0deg);
}

.event-date {
  font-size: 23px;
  color: #fff;
  border: 3px solid #fff;
  border-radius: 50%;
  width: 80px;
  height: 80px;
  line-height: 80px;
}

.event-title {
  font-size: 16px;
  color: #fff;
  margin-top: 10px;
  padding: 5px;
}
.git-live-label {
  position: absolute;
  top: -32px; /* Adjust the top value to your preference */
  right: 4px; /* Adjust the right value to your preference */
  color: #fff;
  padding: 5px 5px;
  border-radius: 5px;
  font-size: 14px;
  z-index: 1;
}

.interaction-section {
  display: flex;
  justify-content: space-around;
  align-items: center;
  background-color: #f0f0f0;
  padding: 10px;
}

button {
  padding: 10px;
  font-size: 16px;
  cursor: pointer;
  border: none;
  border-radius: 5px;
  transition: background-color 0.3s;
}

button:hover {
  background-color: #ddd;
}

.like-btn {
  background-color: #3498db;
  color: #fff;
}

.share-btn {
  background-color: #1abc9c;
  color: #fff;
}

.subscribe-btn {
  background-color: #e74c3c;
  color: #fff;
}

        /* Style for the modal container */
        .modal {
            position: absolute;
            width: 480px;
            height: 350px;
            justify-content: center;
            align-items: center;
        }

        /* Style for the modal content */
        .modal-content {
            background-color: #fff;
            border-radius: 8px;
            position: absolute; /* Added position relative */
        }
      /* Styles for the card */
      .cardbody {
            width: 300px;
            border: 1px solid #ccc;
            border-radius: 8px;
            overflow: hidden;
            margin: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        /* Styles for the card header */
        .card-header {
            background-color: #3498db;
            color: #fff;
            padding: 10px;
            text-align: center;
            font-weight: bold;
        }

        /* Styles for the card body */
        .card-body {
            padding: 20px;
        }

        /* Styles for the card footer */
        .card-footer {
            background-color: #f1f1f1;
            padding: 10px;
            text-align: center;
        }  
        

          .treecard {
      background-color: #fff;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      margin: 20px;
      padding: 20px;
      border-radius: 8px;
      width: 300px;
    }

    .tree {
      margin-left: 20px;
    }

    .tree ul {
      list-style-type: none;
      margin: 0;
      padding: 0;
      padding-left: 20px;
    }

    .tree li::before {
      content: "├";
      color: #999;
      display: inline-block;
      width: 1em;
      margin-left: -1em;
    }

    .tree li:last-child::before {
      content: "└";
    }


    .cardprogram {
      background-color: #fff;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      margin: 20px;
      padding: 20px;
      border-radius: 8px;
      width: 300px;
    }

    .event-icon {
      font-size: 24px;
      margin-right: 5px;
    }

    .cardprogram {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            width: 100%;
        }

        .card-headerprogram {
          border-radius: 10px;
            background-color: #007bff;
            color: #fff;
            padding: 15px;
            text-align: center;
        }

        .card-bodyprogram {
            padding: 20px;
        }

        .icon {
            display: block;
            margin: 0 auto;
            font-size: 40px;
            color: #007bff;
        }

        .detailsprogram {
            margin-top: 20px;
        }

        .detailsprogram p {
            margin: 0;
            padding: 5px 0;
        }
        .collapsible {
            cursor: pointer;
            padding: 18px;
            width: 100%;
            border: none;
            text-align: left;
            outline: none;
            font-size: 15px;
            color:#000;
            background-color: #007bff;
        }

        .contentc {
            display: none;
            padding: 0 18px;
            overflow: hidden;
            background-color: #fff;
        }

        form {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 100%;
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
        }
        .audio-container {
            position: relative;
            width: 300px; /* Adjust as needed */
            margin: 20px;
        }

        /* Style for the audio element */
        audio {
            width: 100%;
        }

        /* Style for the image background */
        .background-image {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover; /* Maintain aspect ratio */
            opacity: 0.8; /* Adjust as needed */
        }
       
</style>
</head>
<body>
<div class="py-4 top-wrap">
<div class="container-xl">
<div class="row d-flex align-items-start">
<div class="col-md topper d-flex mb-md-0 align-items-xl-center">
<span  class="fa fa-phone" style="color:#fff; width:35px; height:60px"></span>
<div class="text pl-3 pl-md-3">
<p class="con"><span></span> <span>+254 798 814231 / 0102341618</span></p>
<p class="hr"><span>info@wvc-church.org </span></p>
</div>
</div>
<div class="col-md topper d-flex mb-md-0 align-items-xl-center">
<span  class="fa fa-paper-plane" style="color:#fff; width:35px; height:60px"></span>
<div class="text pl-3 pl-md-3">
<p class="hr"><span>QRMM+G99, Bypass Kiambu Stage, Kiambu</span></p>
</div>
</div>
<div class="col-md topper d-flex mb-md-0 align-items-xl-center">
<div class="text pl-3 pl-md-3">
<a href="" target="_blank"><span class="fa fa-facebook" style="color:#fff; width:20px; height:45px"></span></a> &nbsp&nbsp <a href="" target="_blank"><span class="fa fa-twitter" style="color:#fff; width:20px; height:45px"></span></a> &nbsp&nbsp<a href="" target="_blank"><span class="fa fa-youtube" style="color:#fff; width:20px; height:45px"></span></span></a>&nbsp&nbsp<a href="" target="_blank"><span class="fa fa-instagram" style="color:#fff; width:20px; height:45px"></span></a>

</div>
<a href="{{ url('give')}}" target="_blank">
<button class="subscribe-btn">Give</button>
</a>
</div>
</div>
</div>
</div>
<nav class="navbar navbar-expand-lg  ftco-navbar-light" >
<div class="container-xl" >
<a class="navbar-brand align-items-center" href="index.html">
	<img src="{{ asset('v1/images/WVC-Logo-Redo-1-Clear-Small.webp')}}" style="width:100%; height:50px">
</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
<span class="fa fa-bars"></span> Menu
</button>
<div class="collapse navbar-collapse" id="navbarSupportedContent" >
  
<ul class="navbar-nav m-auto mb-2 mb-lg-0" >
<li class="nav-item"><a class="nav-link" href="{{ url('')}}" >Home</a></li>
<li class="nav-item"><a class="nav-link" href="{{ url('aboutus')}}">About</a></li>
<li class="nav-item"><a class="nav-link" href="{{ url('programs')}}">Programs</a></li>
<li class="nav-item"><a class="nav-link" href="{{ url('ministries')}}">Ministries</a></li>
<li class="nav-item"><a class="nav-link" href="{{ url('testimony')}}">Testimonies</a></li>
<li class="nav-item"><a class="nav-link" href="{{ url('churchlocations')}}">Locations</a></li>
</ul>
</div>
</div>
</nav>
@yield('content')


<div class="container-fluid px-0 py-5 bg-darken">
<div class="container-xl">
<div class="row">
<div class="col-md-12 text-center">
<p class="mb-0" style="color: rgba(255,255,255,.5); font-size: 13px;">Copyright &copy;<script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>document.write(new Date().getFullYear());</script> All rights reserved | Developed  by <a href="https://qloudpointsolutions.com/" target="_blank" rel="nofollow noopener">Qloud Point Solutions Ltd</a>
</p></div>
</div>
</div>
</div>
<script src="{{ asset('v1/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{ asset('v1/js/tiny-slider.js')}}"></script>
<script src="{{ asset('v1/js/glightbox.min.js')}}"></script>
<script src="{{ asset('v1/js/aos.js')}}"></script>
<script src="{{ asset('v1/js/google-map.js')}}"></script>
<script src="{{ asset('v1/js/main.js')}}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDPcXmbNTlOL6p0YwNIpfkZM9xxMn6Vex0&callback=initMap" async defer></script>
    <style>
        #map {
            height: 500px;
            width: 100%;
        }
    </style>
<script async="" src="{{ asset('v1/gtag/js?id=UA-23581568-13')}}"></script>
<script type="text/javascript">

$('#visitordetails').on('submit', (function (e) {
  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });

  e.preventDefault();
  var formsmemberData = new FormData(this);

  $.ajax({
    type: 'POST',
    url: "{{ route('visitordetails')}}",
    data: formsmemberData,
    cache: false,
    contentType: false,
    processData: false,
    success: function (data) {
      if (data.error) {

        console.log('errors');
        const Toast = Swal.mixin({
          toast: true,
          position: 'top-end',
          showConfirmButton: false,
          timer: 2000,
          timerProgressBar: true,
          didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
          }
        })

        Toast.fire({
          icon: 'warning',
          title: data.error
        })


      }   else if (data.errors) {

        console.log('errors');
        const Toast = Swal.mixin({
          toast: true,
          position: 'top-end',
          showConfirmButton: false,
          timer: 2000,
          timerProgressBar: true,
          didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
          }
        })

        Toast.fire({
          icon: 'warning',
          title: data.errors,
        })


      } else {
        const Toast = Swal.mixin({
          toast: true,
          position: 'top-end',
          showConfirmButton: false,
          timer: 3000,
          timerProgressBar: true,
          didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
          }
        })
       //location.reload();
        Toast.fire({
          icon: 'success',
          title: 'Submitted successfully!'
        })
       


      }



    }

  });
}));
</script>
<script>
										window.dataLayer = window.dataLayer || [];
										function gtag(){dataLayer.push(arguments);}
										gtag('js', new Date());

										gtag('config', 'UA-23581568-13');
										// script.js

const content = document.querySelector('.content');
const clonedContent = content.cloneNode(true);

content.parentNode.appendChild(clonedContent);

									</script>
<script defer="" src="{{ asset('v1/beacon.min.js/v84a3a4012de94ce1a686ba8c167c359c1696973893317')}}" integrity="sha512-euoFGowhlaLqXsPWQ48qSkBSCFs3DPRyiwVu3FjR96cMPx+Fr+gpWRhIafcHwqwCqWS42RZhIudOvEI+Ckf6MA==" data-cf-beacon='{"rayId":"83d3147fb82bb196","version":"2023.10.0","token":"cd0b4b3a733644fc843ef0b185f98241"}' crossorigin="anonymous"></script>
</body>
</html>