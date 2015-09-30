@extends('layouts/master')

@section('content')
    <div class="row">
        <h2>Create an entry</h2>
        <hr>

        <form method="POST" action="/places" class="col-md-6">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Name of the place" value="name #1">
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <textarea name="address" id="address" cols="30" rows="5" class="form-control" placeholder="Address">address #1</textarea>
            </div>
            <div class="form-group">
                <label for="rating">Ratings</label>

                <div id="rating">
                    <input type="text" name="ratingRomain" v-model="rating" v-show="false">

                    <div class="btn-toolbar" role="toolbar" aria-label="ratings">
                        <div class="btn-group" role="group" aria-label="one star">
                            <button class="btn btn-default romain" type="button"
                                    v-on="click: setRating(selectedRating)"
                                    v-repeat="selectedRating: ratings">
                                <i class="glyphicon"
                                   v-class="glyphicon-star: isAbove(selectedRating),
                                   glyphicon-star-empty: isUnder(selectedRating)"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
        </form>
    </div>
@endsection