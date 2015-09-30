<!DOCTYPE html>
<html>
<head>
    <title>Laravel</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <style>
        .container .row{
            padding-top: 60px;
        }
        .btn-group .btn{
            outline: none;
        }
        .maiko{
            color: #E880E6;
        }
        .romain{
            color: darkcyan;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Romain & Maiko Rate!</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="/login">Login</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>
<div class="container">

    @yield('content')


</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/0.12.16/vue.js"></script>
<script>

    new Vue({
        el: '#rating',
        data: {
            rating: '',
            ratings: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10]
        },
        methods: {
            setRating: function (rating) {
                console.log( rating );
                this.rating = rating;
            },
            // Create method to change star on selection of rating
            isAbove: function (currentRating) {
                return (currentRating <= this.rating);
            },
            isUnder: function (currentRating) {
                return (currentRating > this.rating);
            }
        }
    })

</script>
</body>
</html>
