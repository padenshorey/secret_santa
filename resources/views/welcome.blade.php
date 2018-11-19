@extends('layout')

@section('content')
<h1>SECRET SANTA</h1>

    <h2>Sign Up Now!</h2>

<form class="form-horizontal" method="POST" action="/admin">
    {{csrf_field()}}
    <fieldset>

        <!-- Form Name -->
        <legend>Secret Santa - Sign Up</legend>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="firstName">First Name</label>
            <div class="col-md-4">
                <input id="firstName" name="firstName" type="text" placeholder="enter your first name" class="form-control input-md" required="">

            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="lastName">Last Name</label>
            <div class="col-md-4">
                <input id="lastName" name="lastName" type="text" placeholder="enter your  last name" class="form-control input-md" required="">

            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="email">Email</label>
            <div class="col-md-4">
                <input id="email" name="email" type="text" placeholder="enter your email" class="form-control input-md" required="">

            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="exceptions">Exceptions</label>
            <div class="col-md-4">
                <input id="exceptions" name="exceptions" type="text" placeholder="Paden; Andrew; Kyle P;" class="form-control input-md">
                <span class="help-block">Put in the names of people you DO NOT want to be matched with separated by a semi-colon.</span>
            </div>
        </div>

        <!-- Button -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="submit"></label>
            <div class="col-md-4">
                <button id="submit" name="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </fieldset>
</form>

@endsection