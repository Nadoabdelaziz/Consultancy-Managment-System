
<?php
  $btn_pressed=false;

?>


<div class="col-lg-12">
<div id="frame" style="">

<div id="bullets" style="display: contents;">
<hr style="
    background-color: white;
    margin-bottom: -27px;
    width: 70%;
    height: 4px;
">
  <div class="row" style="height: 150px;width: min-content;display: inline-flex;">
    <label checked for="frame1">4</label>
    <br>
    <h4 style="flex: auto;">{{__('Execution')}}</h4>
  </div>     
    
  <div class="row" style="/* float: left; */height: 150px;width: min-content;display: inline-flex;"><label for="frame2">3</label><br><h4 style="flex: auto;">{{__('Payment')}}</h4></div>
    
            
  <div class="row" style="/* float: left; */height: 150px;width: min-content;display: inline-flex;"><label for="frame3">2</label><br><h4 style="flex: auto;">{{__('Show Price')}}</h4></div>

  <div class="row" style="/* float: left; */height: 150px;width: min-content;display: inline-flex;"><label for="frame4">1</label><br><h4 style="flex: auto;">{{__('Stage Choice')}}</h4></div>
    
</div>
        <br><br>
        <input type="radio" name="frame" id="frame1" >
        <input type="radio" name="frame" id="frame2">
        <input type="radio" name="frame" id="frame3">
        <input type="radio" name="frame" id="frame4" checked>
        <div id="slides">
            <div id="overflow">
                <div class="inner">
                    <div class="frame frame_1">
                      <div class="frame-content" style="flex: none;">
                          <br><br>                            
                          <form action="Phaiupload" method="POST" enctype="multipart/form-data" style="background-color: transparent">
                            @csrf
                            <div class="row" style="/* float: right; */display: inline-table;background-color: #252532;border-radius: 20px;">
                              <h2 style="margin: 25px; /*background-color: crimson;*/ padding: 10px; border-radius: 20px; font-size: x-large;"> {{__('invoice payment upload')}}
                             </h2>
                                
                                <div class="col-md-6" style="
                                    margin: 20px;
                                    overflow-y: 20px;
                                    /* overflow-y: scroll; */
                                    /* overflow: scroll; */
                                    /* height: 50px; */
                                    /* width: fit-content; */
                                    /* display: inline; */
                                    /* background-color: #404040; */
                                    padding: 10px;
                                    display: inline-grid;
                                    /* display: contents; */
                                    border-radius: 20px;
                                ">
                                  <input type="file" name="file" class="form-control" style="border-radius: 6px;width: -webkit-fill-available;font-size: 17px;font-weight: 900;text-align: center;margin: 5px;">
                                  <input style="border-radius: 6px;width: -webkit-fill-available;font-size: 17px;font-weight: 900;text-align: center;margin: 5px;" type="hidden" name="id" value="{{isset($info) ? $info->id : '' }}" class="form-control">

                              </div>
                              <div class="col-md-6" style="background-color: transparent;width: fit-content;display: contents;">
                                  <button class="" type="submit" style="height: 45px;width: 220px;font-size: x-large;margin: 20px;background-color:#FFC107;">{{__('Execution')}}</button>
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
                        <div style="/* float: right; */background-color: #252532;width: 74%;border-radius: 20px;/* margin: 20px; */    display: inline-block;;">
                          <div class="row" style="justify-content: space-between;">
                            <img src="https://res.cloudinary.com/dxdc8azyj/image/upload/v1661717757/bank_owt3ot.png" style="
                            padding: 21px;
                            padding-left: 45px;
                            width: 35%;">
                            <h2 style="/*background-color: #404040; width: 100%; */border-radius: 20px;/* margin-bottom: 20px; *//* margin: auto; */padding: 56px;">{{__('Data of Bank Transfer')}}</h2> 
                          </div>
                                                
                          <hr style="
                            background-color: white;
                            width: 93%;">
                          <div class="row" style="justify-content: end;">
                                <h3 style="/*background-color: #404040; width: 100%; */border-radius: 20px;/* margin-bottom: 20px; *//* margin: auto; */font-weight: 300;padding: 39px;">معلومات الدفع البنكية</h3>
                          </div>

                          <div class="row" style="justify-content: end;">
                                <h4 style="/*background-color: #404040; width: 100%; */border-radius: 20px;/* margin-bottom: 20px; */color: darkgray;/* margin: auto; */font-weight: revert;padding-bottom: 27px;padding-right: 39px;">: {{__('Name of account owner')}}</h4>
                          </div>

                          <div class="row" style="justify-content: end;">
                                <h4 style="/*background-color: #404040; width: 100%; */border-radius: 20px;/* margin-bottom: 20px; */color: darkgray;/* margin: auto; */font-weight: revert;padding-bottom: 27px;padding-right: 39px;">: {{__('IBAN number')}}</h4>
                          </div>
                            
                          <div class="row" style="justify-content: end;">
                                <h4 style="/*background-color: #404040; width: 100%; */border-radius: 20px;/* margin-bottom: 20px; */color: darkgray;/* margin: auto; */font-weight: revert;padding-bottom: 27px;padding-right: 39px;">: {{__('Swift number')}}</h4>   
                          </div>

                            
                          <div class="row" style="justify-content: end;">
                                <h4 style="/*background-color: #404040; width: 100%; */border-radius: 20px;/* margin-bottom: 20px; */color: darkgray;/* margin: auto; */font-weight: revert;padding-bottom: 27px;padding-right: 39px;">: {{__('Country')}}</h4>
                          </div>

                            
                          <div class="row" style="justify-content: end;">
                                <h4 style="/*background-color: #404040; width: 100%; */border-radius: 20px;/* margin-bottom: 20px; */color: darkgray;/* margin: auto; */font-weight: revert;padding-bottom: 27px;padding-right: 39px;">: {{__('City')}}</h4>
                          </div>

                            
                          <div class="row" style="justify-content: end;">
                                <h4 style="/*background-color: #404040; width: 100%; */border-radius: 20px;/* margin-bottom: 20px; */color: darkgray;/* margin: auto; */font-weight: revert;padding-bottom: 27px;padding-right: 39px;">: {{__('Bank name')}}</h4>
                          </div>
                                  <!-- <hr style="padding: 20px;background-color: #404040;/* width: 100%; */border-radius: 20px;display: inline-flex;/* margin-bottom: 20px; */margin: 10px;" class=""> -->
                                
                                <!-- User ID : <input type = "text" name = "user_id" /> -->
                            <br>
                          <div style="background-color: transparent;width: fit-content;display: contents;">  
                                <label for="frame1" class="" style="background-color:#FFC107; color:black; height: 45px;width: 220px;font-size: x-large;margin: 20px;padding: 21px;">انتقل إلى التنفيذ</label>
                          </div>

                        </div>

                               
                      </div>

                      <!-- <h3 for="text" style="padding: 20px;/*background-color: #404040; width: 100%; */border-radius: 20px;display: inline-flex;/* margin-bottom: 20px; */margin: 10px;" class="row mt-5"> 12345 : {{__('Bank Account Transactional Number')}}</h3>
                                      <br>
                                    <h3 for="text" style="padding: 20px;/*background-color: #404040;width: 100%; */border-radius: 20px;display: inline-flex;/* margin-bottom: 20px; */margin: 10px;" class="mt-5 row">Aed Bank : {{__('Transactional Bank Name')}}</h3>
                                        <br>
                                    <h3 for="text" style="padding: 20px;/*background-color: #404040;width: 100%; */border-radius: 20px;display: inline-flex;/* margin-bottom: 20px; */margin: 10px;" class="mt-5 row">123456789 : {{__('Bank Account (IBAN) Number')}}</h3>
                                        <br>
                                    <h3 for="text" style="padding: 20px;/*background-color: #404040;width: 100%; */border-radius: 20px;display: inline-flex;/* margin-bottom: 20px; */margin: 10px;
                                        " class="mt-5 row"> 123456789 : {{__('Bank Account (IBAN) Number')}}</h3>
                                </div> -->
                    </div>

                    <div class="frame frame_3">
                    <div class="frame-content" style="{{isset($info) ? '/*background-color: dimgrey;*/border-radius: 20px;width: max-content;display: inline-block;' : ''}}">
                          <br><br>

                          <div style="/* float: right; */background-color: #252532;border-radius: 20px;display: inline-flex;">
                                  <h3 style="padding: 20px;/*background-color: #404040; width: 100%; */border-radius: 20px;display: inline-flex;/* margin-bottom: 20px; */margin: 10px">{{__('Total Price')}}</h3>
                                  <br>
                                <div class="row" style="/* padding-bottom:10px; */padding: 35px;/* border-radius: 20px; */margin: 10px;/* display: flow-root; background-color: #606060;*/">
                                  <div style="/* border-radius: 6px; *//* width: -webkit-fill-available; */font-size: xxx-large;font-weight: 900;/* text-align: center; */margin: 5px;">30$</div>
                                </div>
                                <!-- User ID : <input type = "text" name = "user_id" /> -->
                                <br>
                                <!-- Password: <input type = "password" name = "password" /> -->
    
                          </div>
                                <!-- User ID : <input type = "text" name = "user_id" /> -->
                                <br>
                        <div style="margin-top: 50px;font-size: large;">
                            <br>
                            <label for="frame2" style="background-color:#FFC107; color:black ; height: 45px;width: 220px;margin-top: 45px;padding-top: 20px;/* margin-bottom: 20px; */font-size: x-large;border-radius: 12px;">{{__('Go To Payment')}}</label>
                          </div>
                        </div>
                    </div>



                    <!-- Frame 4 -->

                    <div class="frame frame_4">
                      <div class="frame-content">

                        @if(!isset($info))

                          <form action="PhaiCons" method="post" enctype="multipart/form-data" style="background-color: transparent">
                            @csrf
                            <div class="art-form-field" style="margin-left: 47px; float: right;background-color: #2E2E39;border-radius: 20px;">
                              <h2 style="padding: 20px ; /*background-color: #252532; width: 100%; *//* margin-bottom: 20px; */margin: 10px;">{{__('Stage')}}</h2>
                              <input type="text" name="user" value="{{(auth()->user()) ? auth()->user()->email : ''}}" style="display:none">
                              

                              <div style="margin: 10px; overflow-y: 20px;padding: 10px;border-radius: 20px;">                                  
                              

                                  <div class="row" style="/* padding-bottom:10px; padding: 5px;  border-radius: 20px; */margin: 10px;display: flow-root;">
                                    <input style="border-radius: 6px;width: -webkit-fill-available;font-size: 17px;font-weight: 900;text-align: center;margin: 5px;" type="text" placeholder="{{isset($info) ? $info->names : __('enter name here')}}" name="first">
                                  </div>
                                    
                                  <br>
                                  
                                  <div class="row" style="/* padding-bottom:10px; padding: 5px; border-radius: 20px; */margin: 10px;display: flow-root;">
                                    <input style="border-radius: 6px;width: -webkit-fill-available;font-size: 17px;font-weight: 900;text-align: center;margin: 5px;" type="text" placeholder="{{__('enter name here')}}" name="Sec">
                                  </div>
                                  
                                  <div id="text-1" class="row" style=" /* padding-bottom:10px; padding: 5px; border-radius: 20px; */margin: 10px;display: none;">
                                    <input style="border-radius: 6px;width: -webkit-fill-available;/* margin: 2px; */font-size: 17px;font-weight: 900;text-align: center;margin: 5px;" type="text"placeholder="{{__('enter name here')}}" name="th">
                                  </div>

                                  <!-- Hidden TextBoxes -->
                                  <div id="text-2" class="row" style="/* padding-bottom:10px; padding: 5px;border-radius: 20px; */margin: 10px;display: none;">
                                    <input style="border-radius: 6px;width: -webkit-fill-available;font-size: 17px;font-weight: 900;text-align: center;margin: 5px;" type="text"placeholder="{{__('enter name here')}}" name="foor">
                                  </div>

                                  <div id="text-3" class="row" style="/* padding-bottom:10px; padding: 5px; border-radius: 20px; */margin: 10px;display: none;">
                                    <input style="border-radius: 6px;width: -webkit-fill-available;/* margin: 2px; */font-size: 17px;font-weight: 900;text-align: center;margin: 5px;" type="text"placeholder="{{__('enter name here')}}" name="fif">
                                  </div>

                                  <div id="text-4" class="row" style="/* padding-bottom:10px; padding: 5px; border-radius: 20px; */margin: 10px;display: none;">
                                    <input style="border-radius: 6px;width: -webkit-fill-available;/* margin: 2px; */font-size: 17px;font-weight: 900;text-align: center;margin: 5px;" type="text"placeholder="{{__('enter name here')}}" name="sth">
                                  </div>

                                  <div id="text-5" class="row" style="/* padding-bottom:10px; padding: 5px; border-radius: 20px; */margin: 10px;display: none;">
                                    <input style="border-radius: 6px; width: -webkit-fill-available;    font-size: 17px;font-weight: 900; text-align: center; margin: 5px;" type="text"placeholder="{{__('enter name here')}}" name="sev">
                                  </div>

                                  <div  id="text-6" class="row" style="/* padding-bottom:10px; padding: 5px;border-radius: 20px; */margin: 10px;display: none;">
                                    <input style="border-radius: 6px;width: -webkit-fill-available;/* margin: 2px; */font-size: 17px;font-weight: 900;text-align: center;margin: 5px;" type="text"placeholder="{{__('enter name here')}}" name="eit">
                                  </div>

                                  <div id="text-7" class="row" style="/* padding-bottom:10px; padding: 5px; border-radius: 20px; */margin: 10px;display: none;">
                                    <input style="border-radius: 6px;width: -webkit-fill-available;/* margin: 2px; */font-size: 17px;font-weight: 900;text-align: center;margin: 5px;" type="text"placeholder="{{__('enter name here')}}" name="nin">
                                  </div>

                                  <div id="pluss" class="row" style="/* padding-bottom:10px; padding: 5px; border-radius: 20px; */margin: 18px;display: flow-root;">
                                    <h2>
                                      <label onclick="addtext()" style="color : #FFC107">+</label>
                                    </h2>
                                  </div>

                                  <input type="text" id="totalprice" name="price" value="30" style="display:none">


                              </div>

                                  <!-- User ID : <input type = "text" name = "user_id" /> -->
                                  <br>
                                  <!-- Password: <input type = "password" name = "password" /> -->

                            </div>

                            <!-- ************************************************************ -->

                            <!-- **************************************************************************** -->
                            <div class="art-form-field" style="float:left;height: fit-content;background-color: #2E2E39; border-radius:20px">
                                    <h3 style="padding: 20px;/* width: 100%; border-radius: 20px;display: inline-flex;*/ /*  margin-bottom: 20px; */margin: 7px;">
                                    {{__('Phai Consultant')}}</h3>
                                    <br><br>

                                    <div class="art-form-field" style="margin: 10px;padding: 10px;border-radius: 20px;">      
                                      <textarea type="text" style="border-radius: 6px;width: -webkit-fill-available;font-size: 17px;color: grey;font-weight: 900;padding: 25px;text-align: end;margin: 5px;" name="details" placeholder="اللقب">{{__('enter details here')}}</textarea>
                                      <br>
                                    </div>  
                
                                  <!-- User ID : <input type = "text" name = "user_id" /> -->
                                  <br>
                                  <!-- Password: <input type = "password" name = "password" /> -->
                            </div>
                            

                                <br><br>

                                <div class="art-form-field" style="float:left;height: fit-content;background-color: #2E2E39; border-radius:20px">      
                                      <div style=" margin: 18px; overflow-y: 20px;/* padding: 10px; */border-radius: 20px;">                                  
                                        
                                      <div class="row" style="/* padding-bottom:10px; padding: 5px;  border-radius: 20px; */margin: -5px;margin-bottom: 29px;justify-content: center;/* padding: 36px; *//* color: red; *//* display: flow-root; */background-color: #23232d;">
                                        <h4 style="padding: 20px;/* width: 100%; border-radius: 20px;display: inline-flex;*//*  margin-bottom: 20px; *//* margin: 7px; */">{{__('Project Steps')}}</h4>
                                      </div>                                        
                                      
                                        <div class="row" style="/* padding-bottom:10px; padding: 5px;  border-radius: 20px; */margin: 10px;display: flow-root;">
                                          <input style="border-radius: 6px;width: -webkit-fill-available;font-size: 17px;font-weight: 900;text-align: center;margin: 5px;" disabled type="text" placeholder="{{__('first step')}}">
                                        </div>
                                        <br>

                                        <div class="row" style="/* padding-bottom:10px; padding: 5px; border-radius: 20px; */margin: 10px;display: flow-root;">
                                          <input style="border-radius: 6px;width: -webkit-fill-available;font-size: 17px;font-weight: 900;text-align: center;margin: 5px;" disabled type="text" placeholder="{{__('second step')}}">
                                        </div>
                                      
                                        <div class="row" style=" /* padding-bottom:10px; padding: 5px; border-radius: 20px; */margin: 10px">
                                          <input style="border-radius: 6px;width: -webkit-fill-available;/* margin: 2px; */font-size: 17px;font-weight: 900;text-align: center;margin: 5px;" disabled type="text" placeholder="{{__('third step')}}">
                                        </div>

                                        <!-- Hidden TextBoxes -->
                                        <div class="row" style="/* padding-bottom:10px; padding: 5px;border-radius: 20px; */margin: 10px">
                                          <input style="border-radius: 6px;width: -webkit-fill-available;font-size: 17px;font-weight: 900;text-align: center;margin: 5px;" disabled type="text" placeholder="{{__('fourth step')}}">
                                        </div>
                                  
                                      </div>
                                      <br>
                                </div>

                                    <br><br>

                            <div class="art-form-field" style="padding: 14px;/* float:left; *//* height: fit-content; */background-color: #2E2E39; border-radius:20px;display: inline-block;margin: 120px;">
                                  <h2 style="padding: 10px;/* width: 100%; border-radius: 20px;*//* display: inline-flex; *//* margin-bottom: 20px; */margin: -2px;">{{__('Comment')}}</h2>
                                  <textarea name="Comment" id="" cols="20" rows="20" style="width: 550px;margin: 11px;text-align: end;color: grey;font-weight: bold;font-size: 17px;padding: 25px;">{{isset($info) ? $info->comment : __('enter name here') }}</textarea>
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
                                
                                  <button class="" onclick="mfunction()" style="background-color:#FFC107; height: 45px;width: 220px;font-size: x-large;margin: 20px;" type="submit">{{__('Book a consultation')}}</button>                                

                                </div> 

                                
                          </form>



                        @else

                          <div class="frame-content" style="background-color: #252532;border-radius: 20px;">
                            <div class="row art-form-field" style="/* padding-bottom:10px; *//* padding: 5px; *//* border-radius: 20px; *//* margin: 10px; */display: unset;/* float: right; background-color: #606060;*/"><br>
                              <h2 style="padding: 20px;/* width: 100%; */border-radius: 20px;/* display: inline-flex; *//* margin-bottom: 20px; */margin: 10px;">
                                {{__('Registration Done Successfully')}}
                              </h2>
                              <label for="frame3" style="color:black; width: max-content;margin-top: 16px;/* padding-top: 20px; *//* margin-bottom: 20px; *//* display: revert; */padding: 20px;font-weight: 800;font-size: x-large;background-color: #FFC107;border-radius: 12px;">انتقل إلى عرض السعر</label>
                            </div>
                            
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


    <script>
      var num=1;
      var num2 = 1;
      var text;
      var text2;
      var plus = document.getElementById("pluss");
      var addplus = document.getElementById("invent");
      
      function addtext(){
        if(num == 8){
          plus.style.display = "none";
        }
        text = document.getElementById("text-"+ num);

        text.style.display="flow-root";
        num++;
      }

      function addinventor(){
        if(num2== 3){
          addplus.style.display = "none";
        }
        text2 = document.getElementById("invent-"+ num2);

        text2.style.display="flow-root";
        num2++;
      }
    </script>
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
    background-color:#FFC107;
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