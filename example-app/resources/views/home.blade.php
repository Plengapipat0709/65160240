@extends('layouts.default')

@section('title', 'Homepage')

@section('content')
    <div class="card-header">
        <h3 class="card-title">SE_CAMP_FORM</h3>
    </div>
    <div class="card-body">
        <div class="form-group">
            <label for="inputFirst_Name">First Name</label>
            <input type="FName" class="form-control" id="inputFName " placeholder="Enter Name">
        </div>
        <div class="form-group">
            <label for="inputLast_Name">Last Name</label>
            <input type="LName" class="form-control" id="inputLName" placeholder="Enter LastName">
        </div>
        <div class="form-group">
            <label>Date BirthDay:</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                </div>
                <input type="date" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label>Age :</label>
            <div class="input-group">
                <input type="number" class="form-control" id="inputage" placeholder="Your  Age" min = "0"
                    max="150">
            </div>
        </div>
        <div class="form-group">
            <div> <label>SEX :</label>
                <div>
                    <input id="radio_a" type="radio" name="same_radio" />
                    <label for="radio_a"><b class="CO">Male</b></label>
                    <input id="radio_b" type="radio" name="same_radio" />
                    <label for="radio_b"><b class="CO">Female</b></label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="inputemail">Email</label>
            <input type="emauk" class="form-control" id="inputemail" placeholder="Enter Email">
        </div>
        <div class="form-group">
            <label for="inputFile">Picture</label>
            <div class="input-group">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="inputFile">
                    <label class="custom-file-label" for="inputFile">Choose File</label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label>Address</label>
            <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
        </div>
        <div class="form-group">
            <label>Color Favorite</label>
            <select class="form-control select2" style="width: 100%;">
                <option selected="selected">Choose Color</option>
                <option>Red</option>
                <option>Orange</option>
                <option>Pink</option>
                <option>Green</option>
                <option>Purple</option>
                <option>Blue</option>
                <option>Yellow</option>
                <option>White</option>
                <option>Black</option>
            </select>
        </div>
        <div class="form-group">
            <div> <label>Favorite Type Music</label>
                <div>
                    <input id="radio_a" type="radio" name="same_radio" />
                    <label for="radio_a"><b class="CO">POP</b></label>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input id="radio_b" type="radio" name="same_radio" />
                    <label for="radio_b"><b class="CO">Jazz</b></label>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input id="radio_c" type="radio" name="same_radio" />
                    <label for="radio_c"><b class="CO">R&B</b></label>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input id="radio_d" type="radio" name="same_radio" />
                    <label for="radio_d"><b class="CO">Rap</b></label>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input id="radio_e" type="radio" name="same_radio" />
                    <label for="radio_e"><b class="CO">Hip Hop</b></label>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input id="radio_f" type="radio" name="same_radio" />
                    <label for="radio_f"><b class="CO">Rock</b></label>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input id="radio_g" type="radio" name="same_radio" />
                    <label for="radio_g"><b class="CO">Other</b></label>
                </div>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="card-footer">
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="checkboxinformation">
                <label class="form-check-label" for="checkinformation">Confirm information</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-primary">Reset</button>
        </div>
    </div>
@endsection
