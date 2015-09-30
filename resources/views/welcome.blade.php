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
    <div class="row">
        <form method="POST" action="/places" class="col-md-6">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Name of the place" value="name #1">
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <textarea name="address" id="address" cols="30" rows="5" class="form-control"  placeholder="Address">address #1</textarea>
            </div>
            <div class="form-group">
                <label for="rating">Ratings</label>

                <div id="rating">

                    {{--@{{ rating }}--}}

                    <h3>Maiko</h3>

                    <input type="text" name="ratingMaiko" v-model="rating" v-show="false">

                    <div class="btn-toolbar" role="toolbar" aria-label="ratings">
                        <div class="btn-group" role="group" aria-label="one star">
                            <button class="btn btn-default maiko" type="button"
                                    v-on="click: setRating(selectedRating)"
                                    v-repeat="selectedRating: ratings">
                                <i class="glyphicon"
                                   v-class="glyphicon-star: isAbove(selectedRating),
                                   glyphicon-star-empty: isUnder(selectedRating)"></i>
{{--                                @{{ selectedRating }}--}}
                            </button>
                        </div>
                    </div>

                    <h3>Romain</h3>
                    <input type="text" name="ratingRomain" v-model="rating" v-show="false">

                    <div class="btn-toolbar" role="toolbar" aria-label="ratings">
                        <div class="btn-group" role="group" aria-label="one star">
                            <button class="btn btn-default romain" type="button"
                                    v-on="click: setRating(selectedRating)"
                                    v-repeat="selectedRating: ratings">
                                <i class="glyphicon"
                                   v-class="glyphicon-star: isAbove(selectedRating),
                                   glyphicon-star-empty: isUnder(selectedRating)"></i>
                                {{--                                @{{ selectedRating }}--}}
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
        </form>

        <div class="col-md-6">
            <ul>
                @foreach($places as $place)
                    <li>{{$place->name}} - {{$place->address}} - {{$place->rating}}</li>
                @endforeach
            </ul>
        </div>
    </div>

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
