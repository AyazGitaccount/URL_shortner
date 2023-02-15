<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Addvertisment</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/c65a772b92.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container mt-2">
        <div class="p-5 mb-4 bg-light rounded-3">
            <div class="container-fluid py-2">
                <h1 class="display-5 fw-bold ">Custom jumbotron </h1>
                <h4 id='timer'> 5 </h4>                    
                <a class="btn btn-primary btn-lg" href="{{ $short_url['original_url'] }}" id="skip-button" style="display:none;"  role="button">Skipp <i class="fa-solid fa-forward-fast"></i></a>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row">
            <div class="col-md-8 mt-2">
                <div class="ratio" style="--bs-aspect-ratio: 50%;">
                    <iframe src="https://www.youtube.com/embed/NsFSA-MQjeY?autoplay=1" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
    {{-- <iframe width="560" height="315" src="https://www.youtube.com/embed/NsFSA-MQjeY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> --}}


    <script>
         // Get the timer and skip button elements
        let timer = document.getElementById('timer');
        let skipButton = document.getElementById('skip-button');

        // Set the timer to 10 seconds
        let seconds = 5;

        // Start the timer
        let countdown = setInterval(function() {
        // Display the remaining time
        timer.innerText = seconds;

        // Decrement the timer
        seconds--;

        // If the timer reaches 0, display the skip button
        if (seconds < 0) {
            clearInterval(countdown);
            timer.style.display = 'none';
            skipButton.style.display = 'inline-block';
        }
        }, 1000);

    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>