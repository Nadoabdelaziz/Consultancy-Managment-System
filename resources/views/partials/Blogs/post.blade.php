
<?php
  $btn_pressed=false;

?>


<div class="col-lg-11">
<div id="frame" style="">

<div id="bullets" style="display: contents;">
  <div class="row" style="height: 150px;width: min-content;display: inline-flex;">
    <label checked for="frame1">4</label>
    <br>
    <h4 style="flex: auto;">{{__('Execution')}}</h4>
  </div>     
    
  <div class="row" style="/* float: left; */height: 150px;width: min-content;display: inline-flex;"><label for="frame2">3</label><br><h4 style="flex: auto;">{{__('Payment')}}</h4></div>
    
            
  <div class="row" style="/* float: left; */height: 150px;width: min-content;display: inline-flex;"><label for="frame3">2</label><br><h4 style="flex: auto;">{{__('Show Price')}}</h4></div>

  <div class="row" style="/* float: left; */height: 150px;width: min-content;display: inline-flex;"><label for="frame4">1</label><br><h4 style="flex: auto;">{{__('Fill Model')}}</h4></div>
    
</div>
        <br><br>
        <input type="radio" name="frame" id="frame1" >
        <input type="radio" name="frame" id="frame2">
        <input type="radio" name="frame" id="frame3">
        <input type="radio" name="frame" id="frame4" checked="">
        <div id="slides">
            <div id="overflow">
                <div class="inner">
                    <div class="frame frame_1">
                      <div class="frame-content">
                          <br><br>                            
                          <form action="upload" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                              <div class="col-md-6">
                                  <input type="file" name="file" class="form-control"/>
                                  <input type="hidden" name="id" value="{{isset($info) ? $info->id : ''}}" class="form-control"/>

                              </div>
                              <div class="col-md-6">
                                  <button type="submit" class="btn btn-success">Upload File...</button>
                              </div>
                            </div>
                          </form>
                                <!-- User ID : <input type = "text" name = "user_id" /> -->
                                <br>
                      </div>
                    </div>
                    <div class="frame frame_2">
                      <div class="frame-content">
                              <br><br>

                              <div style="float:none;background-color: darkgray;border-radius: 50px;/* border-block: 50px; *//* border-block-color: red; */">
                                <h2 style="padding-top: 20px;">{{__('Bank Payment Info')}}</h2><br>
                                <hr style="background-color: black;padding-bottom: 2px;margin-bottom: 50px;" class="">
                                <div class="container mt-3" style="margin-bottom: 165px;background-color: steelblue;width: max-content;border: dashed;border-radius: 35px;">
                                  <br>
                                   <h3 for="text" style="font-family: ui-rounded;background-color: steelblue;justify-content: center;border-radius: 50px;margin: auto;" class="row mt-5">Bank Account Transactional Number: 12345</h3>
                                      <br>
                                      <h3 for="text" style="
                                        /* float: left; */
                                        font-family: ui-rounded;
                                        background-color: steelblue;
                                        justify-content: center;
                                        border-radius: 50px;
                                        " class="mt-5 row">Transactional Bank Name: Aed Bank</h3>
                                        <br>
                                        <h3 for="text" style="
                                        /* float: left; */
                                        font-family: ui-rounded;
                                        justify-content: center;
                                        background-color: steelblue;
                                        border-radius: 50px;" class="mt-5 row">Bank Account (IBAN) Number: 123456789</h3>
                                        <br>
                                        <h3 for="text" style="
                                        /* float: left; */
                                        font-family: ui-monospace;
                                        justify-content: center;
                                        background-color: steelblue;
                                        border-radius: 50px;
                                        margin-bottom: 12px;
                                        " class="mt-5 row">Bank Account (IBAN) Number: 123456789</h3>
                                </div>
                                <!-- User ID : <input type = "text" name = "user_id" /> -->
                                <br>
                                <div style="/* float:none; *//* margin-top: 154px; *//* float: right; */background-color: steelblue;/* margin-right: 220px; *//* padding-top: 20px; *//* flex: auto; */display: contents;/* width: fit-content; *//* width: fit-content; *//* margin-right: 160px; *//* right: 250px; */">
                              
                                <label for="frame1" style="
                                    height: 45px;
                                    width: 220px;
                                    /* margin-top: 45px; */
                                    padding-top: 20px;
                                    /* margin-bottom: 20px; */
                                    font-size: x-large;
                                    background-color: steelblue;
                                    border-radius: 12px;
                                ">continue</label>

                              </div>

                              </div>

                               
                      </div>
                    </div>

                    <div class="frame frame_3">
                    <div class="frame-content">
                          <br><br>

                          <div style="/* float:left; *//* height: fit-content; *//* width: fit-content; */display: inline-block;background-color: lightcoral;border-radius: 20px;">
                                  <h3 style="padding-top: 20px;">Price</h3>
                                  <br>
                                <div class="row" style="/* padding-bottom: 25px; */display: inline-table;margin-top: 100px;/* padding-top: 40px; *//* padding-bottom: 20px; */padding: 50px;border-radius: 20px;/* width: max-content; */background-color: darkgrey;">
                                  <div style="font-size: xxx-large;font-family: ui-monospace;">50$</div>
                                </div>
                                <!-- User ID : <input type = "text" name = "user_id" /> -->
                                <br>
                                <!-- Password: <input type = "password" name = "password" /> -->
    
                          </div>
                                <!-- User ID : <input type = "text" name = "user_id" /> -->
                                <br>
                           <label for="frame2" style="
                                    margin-top: 150px;
                                    height: 45px;
                                    width: 255px;
                                    /* margin-top: 45px; */
                                    padding-top: 20px;
                                    /* margin-bottom: 20px; */
                                    font-size: x-large;
                                    background-color: lightcoral;
                                    border-radius: 12px;
                                ">Go To Show Price</label>

                        </div>
                    </div>
                    <div class="frame frame_4">
                      <div class="frame-content">

                        @if(!isset($info))

                          <form action="PlacesCons" method="post" enctype="multipart/form-data" style="background-color: transparent">
                            @csrf
                            <div style="float: right;background-color: #606060;border-radius: 20px;">
                              <h2 style="padding: 20px;background-color: #404040;/* width: 100%; */border-radius: 20px;display: inline-flex;/* margin-bottom: 20px; */margin: 10px;">قائمة الأسماء المطلوب دراستها</h2>
                                  <input type="text" name="user" value="{{auth()->user()->email}}" style="display:none">
                              <div style="
                                    margin: 10px;
                                    overflow-y: 20px;
                                    /* overflow-y: scroll; */
                                    /* overflow: scroll; */
                                    /* height: 50px; */
                                    /* width: fit-content; */
                                    /* display: inline; */
                                    background-color: #404040;
                                    padding: 10px;
                                    border-radius: 20px;
                                ">                                  
                                
                                <div class="row" style="/* padding-bottom:10px; */padding: 5px;/* border-radius: 20px; */margin: 10px;display: flow-root;background-color: #606060;">
                                    <input style="border-radius: 6px;width: -webkit-fill-available;font-size: 17px;font-weight: 900;text-align: center;margin: 5px;" type="text" placeholder="{{isset($info) ? $info->names : __('List')}}" name="first">
                                  </div>
                                    <br>
                                    <div class="row" style="/* padding-bottom:10px; */padding: 5px;/* border-radius: 20px; */margin: 10px;display: flow-root;background-color: #606060;">
                                    <input style="border-radius: 6px;width: -webkit-fill-available;font-size: 17px;font-weight: 900;text-align: center;margin: 5px;" type="text" placeholder="{{__('enter name here')}}" name="Sec">
                                  </div>
                                  
                                  <div class="row" style="/* padding-bottom:10px; */padding: 5px;/* border-radius: 20px; */margin: 10px;display: flow-root;background-color: #606060;">
                                    <input style="border-radius: 6px;width: -webkit-fill-available;/* margin: 2px; */font-size: 17px;font-weight: 900;text-align: center;margin: 5px;" type="text"placeholder="{{__('enter name here')}}" name="th">
                                  </div>
                                  <div class="row" style="/* padding-bottom:10px; */padding: 5px;/* border-radius: 20px; */margin: 10px;display: flow-root;background-color: #606060;">
                                    <input style="border-radius: 6px;width: -webkit-fill-available;font-size: 17px;font-weight: 900;text-align: center;margin: 5px;" type="text"placeholder="{{__('enter name here')}}" name="foor">
                                  </div>
                                  <div class="row" style="/* padding-bottom:10px; */padding: 5px;/* border-radius: 20px; */margin: 10px;display: flow-root;background-color: #606060;">
                                    <input style="border-radius: 6px;width: -webkit-fill-available;/* margin: 2px; */font-size: 17px;font-weight: 900;text-align: center;margin: 5px;" type="text"placeholder="{{__('enter name here')}}" name="fif">
                                  </div>
                                  <div class="row" style="/* padding-bottom:10px; */padding: 5px;/* border-radius: 20px; */margin: 10px;display: flow-root;background-color: #606060;">
                                    <input style="border-radius: 6px;width: -webkit-fill-available;/* margin: 2px; */font-size: 17px;font-weight: 900;text-align: center;margin: 5px;" type="text"placeholder="{{__('enter name here')}}" name="sth">
                                  </div>
                                  <div class="row" style="/* padding-bottom:10px; */padding: 5px;/* border-radius: 20px; */margin: 10px;display: flow-root;background-color: #606060;">
                                    <input style="border-radius: 6px; width: -webkit-fill-available;    font-size: 17px;font-weight: 900; text-align: center; margin: 5px;" type="text"placeholder="{{__('enter name here')}}" name="sev">
                                  </div>
                                  <div class="row" style="/* padding-bottom:10px; */padding: 5px;/* border-radius: 20px; */margin: 10px;display: flow-root;background-color: #606060;">
                                    <input style="border-radius: 6px;width: -webkit-fill-available;/* margin: 2px; */font-size: 17px;font-weight: 900;text-align: center;margin: 5px;" type="text"placeholder="{{__('enter name here')}}" name="eit">
                                  </div>
                                  <div class="row" style="/* padding-bottom:10px; */padding: 5px;/* border-radius: 20px; */margin: 10px;display: flow-root;background-color: #606060;">
                                    <input style="border-radius: 6px;width: -webkit-fill-available;/* margin: 2px; */font-size: 17px;font-weight: 900;text-align: center;margin: 5px;" type="text"placeholder="{{__('enter name here')}}" name="nin">
                                  </div>
                                  </div>

                                  <!-- User ID : <input type = "text" name = "user_id" /> -->
                                  <br>
                                  <!-- Password: <input type = "password" name = "password" /> -->

                            </div>

                            <!-- ************************************************************ -->

                            <!-- **************************************************************************** -->
                                <div style="float:left;height: fit-content;background-color: #606060; border-radius:20px">
                                    <h3 style="padding: 20px;background-color: #404040;/* width: 100%; */border-radius: 20px;display: inline-flex;/* margin-bottom: 20px; */margin: 10px;">
                                    {{__('Places Consultant')}}</h3>
                                    <br><br>
                                  <div style="margin: 10px;background-color: #404040;padding: 10px;border-radius: 20px;">      
                                   
                                    <div class="row" style="/* padding-bottom:10px; */padding: 5px;/* border-radius: 20px; */margin: 10px;display: flow-root;background-color: #606060;">
                                      <input type="text" style="border-radius: 6px;width: -webkit-fill-available;font-size: 17px;font-weight: 900;text-align: center;margin: 5px;" name="inventor" placeholder="{{isset($info) ? $info->creator_name : __('Inventor Name')}}">
                                    </div>

                                      <br>

                                    <div class="row" style="/* padding-bottom:10px; */padding: 5px;/* border-radius: 20px; */margin: 10px;display: flow-root;background-color: #606060;">
                                      <input type="text" style="border-radius: 6px;width: -webkit-fill-available;font-size: 17px;font-weight: 900;text-align: center;margin: 5px;" name="activity" placeholder="{{isset($info) ? $info->activity : __('Enter Activity')}}">
                                    </div>
                                    
                                    <br>

                                    <div class="row" style="/* padding-bottom:10px; */padding: 5px;/* border-radius: 20px; */margin: 10px;display: flow-root;background-color: #606060;">
                                      <input type="text" style="border-radius: 6px;width: -webkit-fill-available;font-size: 17px;font-weight: 900;text-align: center;margin: 5px;" name="country" placeholder="{{isset($info) ? $info->country :__('enter country')}}">
                                    </div>
                
                                  </div>  
                
                                  <!-- User ID : <input type = "text" name = "user_id" /> -->
                                  <br>
                                  <!-- Password: <input type = "password" name = "password" /> -->
                                </div>

                                <br><br>

                                <div style="/* float:left; *//* height: fit-content; */background-color: #606060; border-radius:20px;display: inline-block;margin: 120px;">
                                  <h2 style="padding: 10px;background-color: #404040;/* width: 100%; */border-radius: 20px;/* display: inline-flex; *//* margin-bottom: 20px; */margin: 10px;">{{__('Comment')}}</h2>
                                  <textarea name="Comment" id="" cols="20" rows="20" style="padding: 10px; margin-bottom: 42px;height: 200px;width: 550px;margin: 25px;border-radius: 20px;">{{isset($info) ? $info->comment : __('enter name here') }}</textarea>
                                  <!-- User ID : <input type = "text" name = "user_id" /> -->
                                  <br>

                                </div>



                                <!-- Alert Box -->
                                <div class="alert alert-warning" style="margin: 30px;font-size: larger;text-align: end;padding: 25px;width: -webkit-fill-available;">
                                  <p style="margin: 8px;font-weight: bold;font-size: initial;padding-bottom: 15px;">{{__('Please Pay Attention')}} : </p> <br>
                                    <br> 
                                  <p style="margin: 8px;"> {{__('We Can add any data in this box please!')}}</p>;.
                                </div>



                                <!-- <button style="height: 45px;width: 220px;/* padding-top: 20px; */font-size: x-large;background-color: red;border-radius: 12px;" class="primary" type="submit">Execute</button> -->


                                <div style="background-color: transparent;width: fit-content;display: contents;">
                                
                                  <button class="btn btn-primary" onclick="mfunction()" style="height: 45px;width: 220px;font-size: x-large;margin: 20px;" type="submit">{{__('Book a consultation')}}</button>                                

                                </div> 

                                
                          </form>



                        @else

                          <div style="margin-top: 50px;font-size: large;">Registeraion Done Succesffully
                            <br>
                            <label for="frame3" style="
                                                          height: 45px;
                                                          width: 220px;
                                                          margin-top: 45px;
                                                          padding-top: 20px;
                                                          /* margin-bottom: 20px; */
                                                          font-size: x-large;
                                                          background-color: red;
                                                          border-radius: 12px;
                                                      ">{{__('Go To Show Price')}}
                                                      
                                                    </label>
                          </div>
                        @endif  

                      </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div id="controls">
            <label for="frame1"></label>
            <label for="frame2"></label>
            <label for="frame3"></label>
            <label for="frame4"></label>
        </div> -->
    </div>


    <!-- <script>
      function mfunction(){
        var element = document.getElementById("mtbn");
        element.style.display = "none";

        var element = document.getElementById("mlabel");
        element.style.display = "visible";

      }
    </script> -->
<style>
      #frame {
    margin: 0 auto;
    /* width: 800px; */
    max-width: 100%;
    text-align: center;
    }

  input{
    height
  }

  .frame-content{
    flex:auto;
    
  }

  form{
    float:right;
    padding-right:25px;
    padding-left: 25px;
    background:#504C4C;
  }
    

  #frame input[type=radio] {
      display: none;
  }
    
  #frame label {
      cursor: pointer;
      text-decoration: none;
  }
    
  #slides {
      padding: 10px;
      /* border: 5px solid #0F0; */
      /* background: black; */
      position: relative;
      z-index: 1;
      padding-top: 150px;

  }
    
  #overflow {
      width: 100%;
      height: -webkit-fill-available;
      overflow: hidden;
  }
    
  #frame1:checked~#slides .inner {
      margin-left: 0;
  }
    
  #frame2:checked~#slides .inner {
      margin-left: -100%;
  }
    
  #frame3:checked~#slides .inner {
      margin-left: -200%;
  }
    
  #frame4:checked~#slides .inner {
      margin-left: -300%;
  }
    
  #slides .inner {
      transition: margin-left 800ms 
          cubic-bezier(0.770, 0.000, 0.175, 1.000);
      width: 400%;
      line-height: 0;
      height: 300px;
  }
    
  #slides .frame {
      width: 25%;
      float: left;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100%;
      color: #FFF;
  }
    
  #slides .frame_1 {
      /* background: #504C4C; */
      height: fit-content;

  }
    
  #slides .frame_2 {
    height: fit-content;
  }
    
  #slides .frame_3 {
    height: fit-content;
  }
    
  #slides .frame_4 {
    height: fit-content;
  }
    
  #controls {
      margin: -180px 0 0 0;
      width: 100%;
      height: 50px;
      z-index: 3;
      position: relative;
  }
    
  #controls label {
      /* transition: opacity 0.2s ease-out;
      display: none;
      width: 50px;
      height: 50px;
      opacity: .4; */
  } 
    
  #controls label:hover {
      opacity: 1;
  }

    
  #frame1:checked~#controls label:nth-child(2),
  #frame2:checked~#controls label:nth-child(3),
  #frame3:checked~#controls label:nth-child(4),
  #frame4:checked~#controls label:nth-child(1) {
      background: 
  url(https://image.flaticon.com/icons/svg/130/130884.svg) no-repeat;
      float: right;
      margin: 0 -50px 0 0;
      display: block;
  }
    
  #frame1:checked~#controls label:nth-last-child(2),
  #frame2:checked~#controls label:nth-last-child(3),
  #frame3:checked~#controls label:nth-last-child(4),
  #frame4:checked~#controls label:nth-last-child(1) {
      background: 
  url(https://image.flaticon.com/icons/svg/130/130882.svg) no-repeat;
      float: left;
      margin: 0 0 0 -50px;
      display: block;
  }
    
  #bullets {
    /* margin-right: 120px; */
      /* margin: 150px 0 0; */
      /* text-align: center; */
      float: right;
  }
    
  #bullets label {
    display: inline-block;
    font-family: fantasy;
    width: 50px;
    height: 50px;
    border-radius: 100%;
    background: #ccc;
    margin: 0 60px;
    font-size: xx-large;
    color: black;
  }

  #bullets label:hover{
    background-color:blue;
  }
  #bullets input:checked{
    background-color:red;
  }
    
  #frame1:checked~#bullets label:nth-child(1),
  #frame2:checked~#bullets label:nth-child(2),
  #frame3:checked~#bullets label:nth-child(3),
  #frame4:checked~#bullets label:nth-child(4) {
      background: #444;
  }
    
  @media  screen and (max-width: 900px) {
      #frame1:checked~#controls label:nth-child(2),
      #frame2:checked~#controls label:nth-child(3),
      #frame3:checked~#controls label:nth-child(4),
      #frame4:checked~#controls label:nth-child(1),
      #frame1:checked~#controls label:nth-last-child(2),
      #frame2:checked~#controls label:nth-last-child(3),
      #frame3:checked~#controls label:nth-last-child(4),
      #frame4:checked~#controls label:nth-last-child(1) {
          margin: 0;
      }
      #slides {
          max-width: calc(100% - 140px);
          margin: 0 auto;
      }
  }

</style>

<!-- <script>
      function myfunction(){
    var inputValue = $("#myfile").val();     
    // alert(inputValue);

    $.ajax( {
        type : "POST",
        cache : false,
        async : true,
        global : false,
        url : "upload",
        data : {
            editorcontents : escape(inputValue),
        }
    } ).done( function ( data )
    {   
        //Handle event send done;
    } )
  }
</script> -->
</div>

@section('javascript')

@endsection