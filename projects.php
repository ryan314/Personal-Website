<html>

<head>
    <title>
        PROJECTS
    </title>

    <link rel="stylesheet" href="projects.css">
</head>

<body>
    <?php
    include 'navbar.php';
    ?>

    <div class="slideshow-container">
        <div class="mySlides fade">
            <div class="frac">1 / 3</div>
            <img src="img/bg1.jpg" style="width:100%">
            <a class="text" href="https://github.com/ryan314/Self-Driving-Car-AI">Self Driving Car AI</a>
        </div>

        <div class="mySlides fade">
            <div class="frac">2 / 3</div>
            <img src="img/bg2.jpg" style="width:100%">
            <a class="text" href="https://github.com/ryan314/Drawing-Recognition-AI">Drawing Recognition AI</a>
        </div>

        <div class="mySlides fade">
            <div class="frac">3 / 3</div>
            <img src="img/bg3.jpg" style="width:100%">
            <a class="text" href="https://github.com/ryan314/Binary-Prediction-Neural-Network">Binary Prediction Neural Network</a>
        </div>

        <a class="prev" onClick="changeSlide(-1)">❮</a>
        <a class="next" onClick="changeSlide(1)">❯</a>
    </div>

    <br>

    <div style="text-align:center">
        <span class="dot" onClick="currSlide(1)"></span>
        <span class="dot" onClick="currSlide(2)"></span>
        <span class="dot" onClick="currSlide(3)"></span>
    </div>

    <script>
        let slideIdx = 1;

        function currSlide(n) {
            showSlide(slideIdx = n);
        }

        function changeSlide(n) {
            showSlide(slideIdx += n);
        }

        function showSlide(n) {
            let i;
            let dots = document.getElementsByClassName("dot");
            let slides = document.getElementsByClassName("mySlides");
            
            if (n < 1) {
                slideIdx = slides.length
            } else if (n > slides.length) {
                slideIdx = 1
            }

            for (i = 0; i < slides.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
                slides[i].style.display = "none";
            }

            dots[slideIdx - 1].className += " active";
            slides[slideIdx - 1].style.display = "block";
        }

        showSlide(slideIdx);
    </script>
</body>

</html>