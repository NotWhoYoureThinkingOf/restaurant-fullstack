@extends('layouts.app')



@section('content')
    <div id="waitlist-page">
        <div class="content-box">
            <div class="row">
                <div class="col-md-6">
                    <h1>Get On The List</h1>
                    <form>
                        <div class="form-group">
                          <label for="firstnameinput">First Name</label>
                          <input name="fname" type="text" class="form-control" id="firstnameinput" placeholder="John">
                        </div>
                        <div class="form-group">
                          <label for="lastnameinput">First Name</label>
                          <input name="lname" type="text" class="form-control" id="lastnameinput" placeholder="Doe">
                        </div>
                        <div class="form-group">
                          <label for="emailinput">Email Address</label>
                          <input type="email" class="form-control" name="email" id="emailinput" placeholder="name@example.com">
                        </div>
                        <div class="form-group">
                            <label for="phoneinput">Phone #</label>
                            <input name="phone" type="email" class="form-control" id="phoneinput" placeholder="718-298-5768">
                        </div>
                        <div class="form-group">
                          <label for="guestsinput">How Many Guests</label>
                          <select name="guests" class="form-control" id="guestsinput">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                          </select>
                        </div>
                        <div class="form-group">
                            <label for="timeinput">What Time?</label>
                            <select name="time" class="form-control" id="timeinput">
                              <option value="6">6:00</option>
                              <option value="7">7:00</option>
                              <option value="8">8:00</option>
                              <option value="9">9:00</option>
                              <option value="10">10:00</option>
                            </select>
                          </div> 
                          <div class="form-group">
                              <button type="submit" class="btn btn-primary mb-2">Confirm</button>
                          </div>                                               
                    </form>
                </div>
                <div class="col-md-6">
                  <p>Please Note: This is not a reservation. You will be added to the current wait list. You may have a short wait onve you arrive while we prepare your table.</p>  
                </div>                     
            </div>
        </div>        
    </div>
@endsection