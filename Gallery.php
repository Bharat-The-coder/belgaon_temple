<?php
include("header.php");
?>
  <style>
 
    .slider-container {
      position: relative;
     
      overflow: hidden;
      max-width: 600px; /* Set your desired maximum width */
      margin: 20px auto; /* Adjust as needed */
    }

    .slider {
      display: flex;
      transition: transform 0.5s ease-in-out;
    }

    .slide {
      min-width: 100%;
      box-sizing: border-box;

    }

    img {
      width: 100%;
      max-height:450px;
      min-height: 100px; /* Set your desired minimum height */
      object-fit:cover;
    }

  

    .prev, .next {
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      font-size: 20px;
      cursor: pointer;
      color: white;
      background-color: rgba(0, 0, 0, 0.5);
      padding: 10px;
      border: none;
      outline: none;
    }

    .prev { left: 10px; }
    .next { right: 10px; }

    .video-slider-container {
      position: relative;
      overflow: hidden;
      max-width: 600px; /* Set your desired maximum width */
      margin: 20px auto; /* Adjust as needed */
      justify-self :center;
    }

    .video-slider {
      display: flex;
      flex-wrap: nowrap;
      transition: transform 0.5s ease-in-out;
     
    }

    .video-slide {
      flex: 0 0 100%; /* Ensure each video takes 100% width */
      box-sizing: border-box;
    }

    .video {
      width: 150%;
      height: auto;
      max-width: 250px; /* Set your desired maximum width for videos */
      min-height: 200px; /* Set your desired minimum height */
     
      object-fit: cover;
    }
    .slider_box{
      display:flex;
      position: relative;
      padding:20px;
      margin:10px;

    }
    .video-prev, .video-next {
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      font-size: 20px;
      cursor: pointer;
      color: white;
      background-color: rgba(0, 0, 0, 0.5);
      padding: 10px;
      border: none;
      outline: none;
    }

    .video-prev { left: 10px; }
    .video-next { right: 10px; }
    @media (max-width: 768px) {
      .slider-container, .video-slider-container {
        max-width: 100%;
      }

      .prev, .next, .video-prev, .video-next {
        font-size: 16px;
      }
    }

    @media (max-width: 480px) {
      .slider_box, .video_box {
        padding: 10px;
      }

      h4 {
        font-size: 24px;
      }
    }
  </style>
</head>
<body>
  <main class="main">
  <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
<h4>Programs</h4>
  </div>
  </section>
  <div class="slider_box ">
<div class="slider-container">
 
  <div class="slider">
    <div class="slide"><img src="images/albem/1.jpg" alt="Image 1"></div>
    <div class="slide"><img src="images/albem/2.jpg" alt="Image 2"></div>
    <div class="slide"><img src="images/albem/3.jpg" alt="Image 3"></div>
    <div class="slide"><img src="images/albem/4.jpg" alt="Image 4"></div>
    <div class="slide"><img src="images/albem/5.jpg" alt="Image 5"></div>
    <div class="slide"><img src="images/albem/6.jpg" alt="Image 6"></div>
    <div class="slide"><img src="images/albem/7.jpg" alt="Image 7"></div>
  </div>
 
  <button class="prev" onclick="prevProgramSlide()">&#10094;</button>
  <button class="next" onclick="nextProgramSlide()">&#10095;</button>
</div>
<div style="padding:10px;">
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae quis, ipsa obcaecati veniam est nisi unde deserunt vero doloremque animi, rem repellat atque, voluptatibus sequi omnis labore blanditiis ullam itaque.
</div>
</div>
<section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
<h4>News</h4>
  </div>
  </section>
<div class="slider_box">
<div style="padding:10px;">
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae quis, ipsa obcaecati veniam est nisi unde deserunt vero doloremque animi, rem repellat atque, voluptatibus sequi omnis labore blanditiis ullam itaque.
</div>
<div class="slider-container">



  <div class="slider">
    <div class="slide"><img src="images/paper.jpg" alt="1"></div>
    <div class="slide"><img src="images/paper2.jpg" alt="2"></div>
    <div class="slide"><img src="images/paper3.jpg" alt="3"></div>
</div>
<button class="prev" onclick="prevNewsSlide()">&#10094;</button>
  <button class="next" onclick="nextNewsSlide()">&#10095;</button>
</div>
</div>
<section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
<h4>नवरात्र उत्सव</h4>
  </div>
  </section>
<div class="slider_box">
<div class="video-slider-container">

  <div class="video-slider">
    <div class="video-slide">
      <video class="video" controls>
        <source src="images/1.mp4" type="video/mp4">
        Your browser does not support the video tag.
      </video>
    </div>
    <div class="video-slide">
      <video class="video" controls>
        <source src="images/2.mp4" type="video/mp4">
        Your browser does not support the video tag.
      </video>
    </div>
    <div class="video-slide">
      <video class="video" controls>
        <source src="images/3.mp4" type="video/mp4">
        Your browser does not support the video tag.
      </video>
    </div>
    <div class="video-slide">
      <video class="video" controls>
        <source src="images/4.mp4" type="video/mp4">
        Your browser does not support the video tag.
      </video>
    </div>
    <div class="video-slide">
      <video class="video" controls>
        <source src="images/5.mp4" type="video/mp4">
        Your browser does not support the video tag.
      </video>
    </div>
    <div class="video-slide">
      <video class="video" controls>
        <source src="images/6.mp4" type="video/mp4">
        Your browser does not support the video tag.
      </video>
    </div>
    <div class="video-slide">
      <video class="video" controls>
        <source src="images/8.mp4" type="video/mp4">
        Your browser does not support the video tag.
      </video>
    </div>
    <div class="video-slide">
      <video class="video" controls>
        <source src="images/9.mp4" type="video/mp4">
        Your browser does not support the video tag.
      </video>
    </div>
    <div class="video-slide">
      <video class="video" controls>
        <source src="images/10.mp4" type="video/mp4">
        Your browser does not support the video tag.
      </video>
    </div>
  </div>
  <button class="video-prev" onclick="prevVideoSlide()">&#10094;</button>
  <button class="video-next" onclick="nextVideoSlide()">&#10095;</button>
</div>
<div style="padding:10px;">
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae quis, ipsa obcaecati veniam est nisi unde deserunt vero doloremque animi, rem repellat atque, voluptatibus sequi omnis labore blanditiis ullam itaque.
</div>
</div>
</main>
<script>
  let currentProgramSlide = 0;

function showProgramSlide(index) {
  const programSlider = document.querySelector('.slider');
  const programSlides = document.querySelectorAll('.slide');
  
  if (index < 0) {
    currentProgramSlide = programSlides.length - 1;
  } else if (index >= programSlides.length) {
    currentProgramSlide = 0;
  } else {
    currentProgramSlide = index;
  }

  const newPosition = -currentProgramSlide * 100 + '%';
  programSlider.style.transform = 'translateX(' + newPosition + ')';
}

function nextProgramSlide() {
  showProgramSlide(currentProgramSlide + 1);
}

function prevProgramSlide() {
  showProgramSlide(currentProgramSlide - 1);
}

// Functions for News slider
let currentNewsSlide = 0;

function showNewsSlide(index) {
  const newsSlider = document.querySelectorAll('.slider')[1];
  const newsSlides = newsSlider.querySelectorAll('.slide');
  
  if (index < 0) {
    currentNewsSlide = newsSlides.length - 1;
  } else if (index >= newsSlides.length) {
    currentNewsSlide = 0;
  } else {
    currentNewsSlide = index;
  }

  const newPosition = -currentNewsSlide * 100 + '%';
  newsSlider.style.transform = 'translateX(' + newPosition + ')';
}


function nextNewsSlide() {
  showNewsSlide(currentNewsSlide + 1);
}

function prevNewsSlide() {
  showNewsSlide(currentNewsSlide - 1);
}


  let currentVideoSlide = 0;

  function showVideoSlide(index) {
    const videoSlider = document.querySelector('.video-slider');
    const videoSlides = document.querySelectorAll('.video-slide');
    
    if (index < 0) {
      currentVideoSlide = videoSlides.length - 1;
    } else if (index >= videoSlides.length) {
      currentVideoSlide = 0;
    } else {
      currentVideoSlide = index;
    }

    const newPosition = -currentVideoSlide * 100 + '%';
    videoSlider.style.transform = 'translateX(' + newPosition + ')';
  }
 
  function nextVideoSlide() {
    showVideoSlide(currentVideoSlide + 1);
  }

  function prevVideoSlide() {
    showVideoSlide(currentVideoSlide - 1);
  }
    // Auto-slide for Program slider
    setInterval(() => {
    nextProgramSlide();
  }, 5000); // Change 5000 to the desired interval in milliseconds (e.g., 5000 for 5 seconds)

  // Auto-slide for News slider
  setInterval(() => {
    nextNewsSlide();
  }, 5000); // Change 5000 to the desired interval in milliseconds

  // Auto-slide for Video slider
  setInterval(() => {
    nextVideoSlide();
  }, 5000); // Change 5000 to the desired interval in milliseconds

</script>
</body>
<?php include("footer.php");?>
