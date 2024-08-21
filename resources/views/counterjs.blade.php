<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Counter JS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="container d-flex align-items-center gap-3 justify-content-center">
        <button class="btn btn-danger" onclick="decrement();">-</button>
        <span id="counter">0</span>
        <button class="btn btn-success" onclick="increment();">+</button>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>


    <script>
        var span = document.getElementById('counter');
        var counter = span.innerHTML;

        function increment() {
            counter++;
            span.innerHTML = counter;
        }

        function decrement() {
            if (counter > 0) {
                counter--;
                span.innerHTML = counter;
            }
        }
    </script>
</body>

</html>
