<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/app.css">
    <!-- <link rel="stylesheet" href="media-query.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link href="https://fonts.googleapis.com/css2?family=Gabarito:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300&display=swap" rel="stylesheet">
    <title>Website Jahat</title>
</head>
<body>
    @include('partials.navbar')

    <main>
        @include('partials.content')

        @include('partials.sidebar')
    </main>

    <div class="page-container">
        <div class="button"><p>1</p></div>
        <div class="button"><p>2</p></div>
        <div class="button"><p>3</p></div>
    </div>

    <footer>
        <h1>copyright: SuSu</h1>
        @yield('admin_input')
    </footer>


    
    <script src="assets/js/app.js"></script>
</body>
</html>