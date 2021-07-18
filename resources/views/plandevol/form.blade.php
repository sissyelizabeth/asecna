@extends('index')

@section('content-dashboard')
<div class="text-center bg-primary"> <h2 class="pl-5 pt-2 pb-2 text-white">
<i>Formulaire pour la création d'un plan de vol </i></h2></div>
   
    <hr/>
    <form method="post" action="/plan-de-vol/form/add" class="row">
      @csrf
        <div class="container">
            <div class="row" style="margin: 0">
                <!-- Left side form -->
                <div class="col-md-4">
                    <div class="row" style="margin: 0">
                        <div class="form-group" style="width: 100%">
                            <label for="priority">Priority</label>
                            <input type="text" name="priority" id="priority" class="form-control" placeholder="Define priority" required/>
                        </div>
                    </div>
                </div>

                <!-- Right side form -->
                <div class="col-md-8">
                  <div class="row" style="margin: 0">
                    <div class="form-group" style="width: 100%">
                      <label for="address">Address</label>
                      <input type="text" name="address" id="address" class="form-control" placeholder="Set address" required />
                      <input type="text" name="address2" id="address2" class="form-control"/>
                      <input type="text" name="address3" id="address3" class="form-control"/>
                    </div>
                  </div>
                </div>
            </div>

            <div class="row" style="margin: 0">
                <!-- Left side form -->
                <div class="col-md-4">
                    <div class="row" style="margin: 0">
                        <div class="form-group" style="width: 100%">
                            <label for="filing-time">Filing Time</label>
                            <input type="date" name="filing-time" id="filing-time" class="form-control" placeholder="Set filing time" required/>
                        </div>
                    </div>
                </div>
                <!-- Right side form -->
                <div class="col-md-8">
                    <div class="row" style="margin: 0">
                        <div class="form-group" style="width: 100%">
                            <label for="originator">Originator</label>
                            <input type="text" name="originator" id="originator" class="form-control"required/>
                        </div>
                    </div>
                </div>
              </div>



              <div class="row" style="margin: 0">
                <div class="col-md-3">
                    <div class="row" style="margin: 0">
                        <div class="form-group" style="width: 100%">
                            <label for="aircraft-identification">Message type</label>
                            <input type="text" name="aircraft-identification" id="ircraft-identificatio" class="form-control"required/>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="row" style="margin: 0">
                        <div class="form-group" style="width: 100%">
                            <label for="aircraft-identification">Aircraft identification</label>
                            <input type="text" name="aircraft-identification" id="ircraft-identificatio" class="form-control"required/>
                        </div>
                    </div>
                </div>
                <!-- Middle side form -->
                <div class="col-md-3">
                  <div class="row" style="margin: 0">
                      <div class="form-group" style="width: 100%">
                          <label for="flight-group">Flight group</label>
                          <input type="text" name="flight-group" id="flight-group" class="form-control"required/>
                      </div>
                  </div>
                </div>
               <!-- Right side form -->
               <div class="col-md-3">
                    <div class="row" style="margin: 0">
                        <div class="form-group" style="width: 100%">
                            <label for="type-of-flight">Type of flight</label>
                            <input type="text" name="type-of-flight" id="type-of-flight" class="form-control"required/>
                        </div>
                    </div>
                </div>
              </div>


              <div class="row" style="margin: 0">
                <!-- Left side form -->
                <div class="col-md-3">
                  <div class="row" style="margin: 0">
                      <div class="form-group" style="width: 100%">
                          <label for="number">Number</label>
                          <input type="number" name="number" id="number" class="form-control"required/>
                      </div>
                  </div>
                </div>
                <!-- Middle side form -->
                <div class="col-md-3">
                  <div class="row" style="margin: 0">
                    <div class="form-group" style="width: 100%">
                        <label for="type-of-aircraft">Type of aircraft</label>
                        <input type="text" name="type-of-aircraft" id="type-of-aircraft" class="form-control"required/>
                    </div>
                  </div>
                </div>
                <!-- Middle side form -->
                <div class="col-md-3">
                  <div class="row" style="margin: 0">
                      <div class="form-group" style="width: 100%">
                          <label for="wake-turbulence-cat">Wake turbulence cat</label>
                          <input type="text" name="wake-turbulence-cat" id="wake-turbulence-cat" class="form-control"required/>
                      </div>
                  </div>
                </div>
                <!-- Right side form -->
                <div class="col-md-3">
                      <div class="row" style="margin: 0">
                          <div class="form-group" style="width: 100%">
                              <label for="equipment">EQUIPMENT</label>
                              <input type="text" name="equipment" id="equipment" class="form-control"required/>
                          </div>
                      </div>
                </div>
              </div>

              <div class="row" style="margin: 0">
                <!-- Left side form -->
                <div class="col-md-4">
                      <div class="row" style="margin: 0">
                          <div class="form-group" style="width: 100%">
                              <label for="departure-aerodrome">DEPARTURE AERODROME</label>
                              <input type="text" name="departure-aerodrome" id="departure-aerodrome" class="form-control"required/>
                          </div>
                      </div>
                </div>
                <!-- Middle side form -->
                <div class="col-md-4">
                  <div class="row" style="margin: 0">
                      <div class="form-group" style="width: 100%">
                          <label for="time">Time</label>
                          <input type="time" name="time" id="time" class="form-control"required/>
                      </div>
                  </div>
              </div>
            </div>

            <div class="row" style="margin: 0">
              <!-- Left side form -->
              <div class="col-md-3">
                    <div class="row" style="margin: 0">
                        <div class="form-group" style="width: 100%">
                            <label for="cruising-speed">CRUISING SPEED</label>
                            <input type="number" name="cruising-speed" id="cruising-speed" class="form-control"required/>
                        </div>
                    </div>
              </div>
              <!-- Middle side form -->
              <div class="col-md-3">
                    <div class="row" style="margin: 0">
                        <div class="form-group" style="width: 100%">
                            <label for="Level">LEVEL</label>
                            <input type="int" name="level" id="level" class="form-control"required/>
                        </div>
                    </div>
              </div>
              <!-- Right side form -->
              <div class="col-md-6">
                  <div class="row" style="margin: 0">
                    <div class="form-group" style="width: 100%">
                      <label for="route">Route</label>
                      <input type="text" name="route" id="route" class="form-control" placeholder="Set route" required/>
                      <input type="text" name="route2" id="route2" class="form-control"/>
                      <input type="text" name="route3" id="route3" class="form-control"/>
                    </div>
                  </div>
              </div>
            </div>

            <div class="row" style="margin: 0">
              <!-- Left side form -->
              <div class="col-md-4">
                <div class="row" style="margin: 0">
                    <div class="form-group" style="width: 100%">
                        <label for="destination-aerodrome">DESTINATION AERODROME</label>
                        <input type="int" name="destination-aerodrome" id="destination-aerodrome" class="form-control"required/>
                    </div>
                </div>
              </div>
              <!-- Middle side form -->
              <div class="col-md-4">
                <div class="row" style="margin: 0">
                  <div class="form-group" style="width: 100%">
                      <label for="hr mn">HR MN</label>
                      <input type="time" name="hr mn" id="hr mn" class="form-control"required/>
                  </div>
                </div>
              </div>
              <!-- Middle side form-->
              <div class="col-md-4">
               <div class="row" style="margin: 0">
                  <div class="form-group" style="width: 100%">
                      <label for="altn-aerodrome">ALTN AERODROME</label>
                      <input type="int" name="altn-aerodrome" id="altn-aerodrome" class="form-control"/>
                  </div>
                </div>
              </div>
              <!-- Middle side form-->
              <div class="col-md-4">
               <div class="row" style="margin: 0">
                  <div class="form-group" style="width: 100%">
                      <label for="2nd-altn-aerodrome">2ND ALTN AERODROME</label>
                      <input type="int" name="2nd-altn-aerodrome" id="2nd-altn-aerodrome" class="form-control"/>
                  </div>
                </div>
              </div>
            </div>

            <div class="row" style="margin: 0">
              <!-- Right side form -->
              <div class="col-md-12">
                  <div class="row" style="margin: 0">
                    <div class="form-group" style="width: 100%">
                      <label for="other-information">OTHER INFORMATION</label>
                      <input type="text" name="other-information" id="other-information" class="form-control" placeholder="Set other information" />
                      <input type="text" name="other-information2" id="other-information2" class="form-control"/>
                      <input type="text" name="other-information3" id="other-information3" class="form-control"/>
                    </div>
                  </div>
              </div>
            </div>

            <div class="row" style="margin: 0">
              <!-- Left side form -->
              <div class="col-md-4">
                <div class="row" style="margin: 0">
                    <div class="form-group" style="width: 100%">
                        <label for="endurance">ENDURANCE HR MIN</label>
                        <input type="time" name="endurance" id="endurance" class="form-control" required/>
                    </div>
                </div>
              </div>
              <!-- Middle side form -->
              <div class="col-md-4">
                <div class="row" style="margin: 0">
                  <div class="form-group" style="width: 100%">
                      <label for="person-on-board">PERSON ON BOARD</label>
                      <input type="number" name="person-on-board" id="person-on-board" class="form-control"required/>
                  </div>
                </div>
              </div>
              <!-- Right side form-->
              <div class="col-md-4">
               <div class="row" style="margin: 0">
                  <div class="form-group" style="width: 100%">
                      <label for="emergency_radio">Emergency radio</label>
                      <input type="text" name="emergency_radio" id="emergency_radio" class="form-control" placeholder="U/V/E"required/>
                  </div>
                </div>
              </div>
            </div>

            <div class="row" style="margin: 0">
              <!-- Left side form -->
               <div class="col-md-6">
               <div class="row" style="margin: 0">
                  <div class="form-group" style="width: 100%">
                      <label for="polar-desert-maritime-jungle">POLAR DESERT MARITIME JUNGLE</label>
                      <input type="int" name="polar-desert-maritime-jungle" id="polar-desert-maritime-jungle" class="form-control" placeholder="PDMJ/kk/kkk/kkkk"required/>
                  </div>
                </div>
              </div>
              <!-- Right side form -->
              <div class="col-md-6">
               <div class="row" style="margin: 0">
                  <div class="form-group" style="width: 100%">
                      <label for="light-fluores-uhf-vhf">LIGHT FLUORES UHF VHF</label>
                      <input type="int" name="light-fluores-uhf-vhf" id="light-fluores-uhf-vhf" class="form-control" placeholder="LFUV/kk/kkk/kkkk"required/>
                  </div>
                </div>
              </div>
            </div>
             

            <div class="row" style="margin: 0">
              <!-- Left side form -->
              <div class="col-md-6">
                <div class="row" style="margin: 0">
                  <div class="form-group" style="width: 100%">
                      <label for="dinghies-numbers">DINGHIES NUMBERS CAPACITY COVER</label>
                      <input type="int" name="dinghies-numbers-capacity-cover" id="dinghies-numbers-capacity-cover" class="form-control" placeholder="DCC/kk/kkk"required/>
                  </div>
                </div>
              </div>

               <!-- Left side form -->
               <div class="col-md-6">
                <div class="row" style="margin: 0">
                  <div class="form-group" style="width: 100%">
                      <label for="color">COLOR</label>
                      <input type="int" name="color" id="coler" class="form-control"required/>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="row" style="margin: 0">
              <!-- Left side form -->
              <div class="col-md-12">
               <div class="row" style="margin: 0">
                  <div class="form-group" style="width: 100%">
                    <label for="aircraft-color-and-markings">AIRCRAFT COLOR AND MARKINGS</label>
                    <input type="int" name="aircraft-color-and-markings" id="aircraft-color-and-markings" class="form-control"required/>
                  </div>
                </div>
              </div>
            </div>

            <div class="row" style="margin: 0">
              <!-- Left side form -->
              <div class="col-md-11">
               <div class="row" style="margin: 0">
                  <div class="form-group" style="width: 100%">
                    <label for="remarks">REMARKS</label>
                    <input type="int" name="remarks" id="remarks" class="form-control"required/>
                  </div>
                </div>
              </div>
            </div>

            <div class="row" style="margin: 0">
              <!-- Right side form -->
              <div class="col-md-8">
               <div class="row" style="margin: 0">
                  <div class="form-group" style="width: 100%">
                    <label for="pilot-in-command">PILOT-IN-COMMAND</label>
                    <input type="int" name="pilot-in-command" id="pilot-in-command" class="form-control"required/>
                  </div>
                </div>
              </div>
            </div>

            <div class="row" style="margin: 0">
              <!-- Left side form -->
              <div class="col-md-4">
               <div class="row" style="margin: 0">
                  <div class="form-group" style="width: 100%">
                    <label for="filed-by">FILED BY</label>
                    <input type="int" name="filed-by" id="filed-by" class="form-control"required/>
                  </div>
                </div>
              </div>
              <!-- Middle side form -->
              <div class="col-md-4">
               <div class="row" style="margin: 0">
                  <div class="form-group" style="width: 100%">
                    <label for="accepted-by">ACCEPTED BY</label>
                    <input type="int" name="accepted-by" id="accepted-by" class="form-control"required/>
                  </div>
                </div>
              </div>
              <!-- Right side form -->
              <div class="col-md-4">
               <div class="row" style="margin: 0">
                  <div class="form-group" style="width: 100%">
                    <label for="additionnal-information">ADDITIONNAL INFORMATION</label>
                    <input type="int" name="additionnal-information" id="additionnal-information" class="form-control"required/>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 text-center">
                <button type="submit" class="btn btn-primary">Sign in</button>
            </div>
        </div>
        
    </form>
             
        

@endsection
