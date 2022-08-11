<div class="col-lg-11">
<div id="frame" style="">

<div id="bullets" style="
    float: right;
    margin-right: 85px;
    height: 270px;
">
  <div class="row" style="float: left;height: 150px;width: min-content;">
    <label checked for="frame1">4</label>
    <br>
    <h4 style="flex: auto;">{{__('Execution')}}</h4>
  </div>     
    
  <div class="row" style="
    float: left;
    height: 150px;
    width: min-content;
"><label for="frame2">3</label><br><h4 style="
    flex: auto;
">{{__('Payment')}}</h4></div>
    
            
            <div class="row" style="
    float: left;
    height: 150px;
    width: min-content;
"><label for="frame3">2</label><br><h4 style="
    flex: auto;
">{{__('Show Price')}}</h4></div>

    <div class="row" style="
    float: left;
    height: 150px;
    width: min-content;
"><label for="frame4">1</label><br><h4 style="
    flex: auto;
">{{__('Fill Model')}}</h4></div>
    
        </div>
        <br><br>
        <input type="radio" name="frame" id="frame1" >
        <input type="radio" name="frame" id="frame2">
        <input type="radio" name="frame" id="frame3">
        <input type="radio" name="frame" id="frame4" checked="">
        <div id="slides">
            <div id="overflow">
            <form action="PlacesCons" method="post" enctype="multipart/form-data" style="background-color: transparent">
                <div class="inner">
                    <div class="frame frame_1">
                    <div class="frame-content">
                          <br><br>

                                <form action="upload" method="post" enctype="multipart/form-data" style="float:none;/* margin-top: 154px; */background-color: transparent;flex: auto;">
                                  <input type="hidden" name="_token" value="jPHPtP1OO5zfkoOXzHbjVoGsM5FtcmE3YGW248sF">                                  
                                  <input type="file" name="file" style="line-height: normal;">
                                  <button style="height: 45px;width: 220px;/* padding-top: 20px; */font-size: x-large;background-color: red;border-radius: 12px;" class="primary" type="submit">Execute</button>
                                </form> 
                                <!-- User ID : <input type = "text" name = "user_id" /> -->
                                <br>
   
                        </div>
                    </div>
                    <div class="frame frame_2">
                      <div class="frame-content">
                              <br><br>

                              <div style="float:none">
                                <h2>List</h2>
                                <div class="container mt-5" style="margin-bottom: 165px;">
                                  <br><br>
                                  <h3 for="text" style="float: LEFt;" class="">IBAN: 123456789</h3><h3 for="text" style="float: right;" class="">Acc Number: 12345</h3>
                                      <br>
                                      <h3 for="text" style="
                                        float: left;" class="mt-5">Bank: Aed Bank</h3>
                                        <br>
                                        <h3 for="text" style="float: right;" class="mt-5">IBAN: 123456789</h3>
                                </div>
                                <!-- User ID : <input type = "text" name = "user_id" /> -->
                                <br>

</div>

                              <div style="float:none; margin-top: 154px;/* float: right; */background-color: transparent;/* margin-right: 220px; */flex: auto;/* width: fit-content; *//* margin-right: 160px; *//* right: 250px; */">
                              
                                <label for="frame1" style="
                                    height: 45px;
                                    width: 220px;
                                    /* margin-top: 45px; */
                                    padding-top: 20px;
                                    /* margin-bottom: 20px; */
                                    font-size: x-large;
                                    background-color: red;
                                    border-radius: 12px;
                                ">continue</label>

</div> 
                        </div>
                    </div>

                    <div class="frame frame_3">
                        <div class="frame-content">
                          <br><br>

                              <div style="float:none">
                                <h2>List</h2>
                                <div class="container mt-5" style="">
                                  <h1 for="text" style="
                                        /* font-size: xx-large; */
                                        margin-bottom: 25px;
                                    ">10$
                                    </h1>
                                </div>
                                <!-- User ID : <input type = "text" name = "user_id" /> -->
                                <br>

</div>

                              <div style="float:none; margin-top: 154px;/* float: right; */background-color: transparent;/* margin-right: 220px; */flex: auto;/* width: fit-content; *//* margin-right: 160px; *//* right: 250px; */">
                              
                                <label for="frame2" style="
                                    height: 45px;
                                    width: 220px;
                                    /* margin-top: 45px; */
                                    padding-top: 20px;
                                    /* margin-bottom: 20px; */
                                    font-size: x-large;
                                    background-color: red;
                                    border-radius: 12px;
                                ">continue</label>

</div>    
                        </div>
                    </div>
                    <div class="frame frame_4">
                      <div class="frame-content">

                        <form action="PlacesCons" method="post" enctype="multipart/form-data" style="background-color: transparent">
                          @csrf
                          <div style="float: right;background-color: gray;">
                                <h2>قائمة الأسماء المطلوب دراستها</h2>
                                <input type="text" name="user" value="{{auth()->user()->email}}" style="display:none">
                                <div class="row" style="padding-bottom:10px;display: flow-root;">
                                  <input type="text" placeholder="enter name here" name="first">
                                </div>
                                  <br>
                                <div class="row" style="padding-bottom:10px;/* display: inline-block; */display: flow-root;">
                                  <input type="text" placeholder="enter name here" name="Sec">
                                </div>
                                
                                <div class="row" style="padding-bottom:10px;display: flow-root;">
                                  <input type="text"placeholder="enter name here" name="th">
                                </div>
                                <div class="row" style="padding-bottom:10px;display: flow-root;">
                                  <input type="text"placeholder="enter name here" name="foor">
                                </div>
                                <div class="row" style="padding-bottom:10px;display: flow-root;">
                                  <input type="text"placeholder="enter name here" name="fif">
                                </div>
                                <div class="row" style="padding-bottom:10px;display: flow-root;">
                                  <input type="text"placeholder="enter name here" name="sth">
                                </div>
                                <div class="row" style="padding-bottom:10px;display: flow-root;">
                                  <input type="text"placeholder="enter name here" name="sev">
                                </div>
                                <div class="row" style="padding-bottom:10px;display: flow-root;">
                                  <input type="text"placeholder="enter name here" name="eit">
                                </div>
                                <div class="row" style="padding-bottom:10px;display: flow-root;">
                                  <input type="text"placeholder="enter name here" name="nin">
                                </div>
                                <!-- User ID : <input type = "text" name = "user_id" /> -->
                                <br>
                                <!-- Password: <input type = "password" name = "password" /> -->
                              </div>
                              <div style="float:left;height: fit-content;background-color: grey;">
                                  <h3>{{__('Places Consultant')}}</h3>
                                  <br><br>
                                <div class="row" style="padding-bottom:50px;justify-content: space-around;">
                                  <input type="text" name="inventor" placeholder="{{__('Inventor Name')}}">
                                </div>
                                  <br>
                                  <div class="row" style="padding-bottom:50px;justify-content: space-around;">
                                  <input type="text" name="activity" placeholder="{{__('Enter Activity')}}">
                                </div>
                                
                                <div class="row" style="padding-bottom:50px;justify-content: space-around;">
                                  <input type="text" name="country" placeholder="{{__('enter country')}}">
                                </div>
              
                                <!-- User ID : <input type = "text" name = "user_id" /> -->
                                <br>
                                <!-- Password: <input type = "password" name = "password" /> -->
                              </div>

                              <br><br>

                              <div style="margin-top: 250px;float: right;background-color: slategrey;">
                                <h2>{{__('Comment')}}</h2>
                                <textarea name="Comment" id="" cols="20" rows="20" style="margin-bottom: 42px;height: 200px;width: 550px;">enter here</textarea>
                                <!-- User ID : <input type = "text" name = "user_id" /> -->
                                <br>
                                <!-- Password: <input type = "password" name = "password" /> -->                           
                                <!-- <label for="frame3" style="
                                    height: 45px;
                                    width: 220px;
                                    /* margin-top: 45px; */
                                    padding-top: 20px;
                                    margin-bottom: 20px;
                                    font-size: x-large;
                                    background-color: red;
                                    border-radius: 12px;
                                ">continue</label> -->

                              </div>


                              <!-- <button style="height: 45px;width: 220px;/* padding-top: 20px; */font-size: x-large;background-color: red;border-radius: 12px;" class="primary" type="submit">Execute</button> -->

                              
                              <div style="margin-top: 154px;float: right;background-color: transparent;/* margin-right: 165px; */width: fit-content;margin-right: 240px;/* right: 250px; */">
                              
                              <button style="height: 45px;width: 220px;/* padding-top: 20px; */font-size: x-large;background-color: red;border-radius: 12px;" class="primary" type="submit">Execute</button>

                                <label for="frame3" style="
                                    height: 45px;
                                    width: 220px;
                                    /* margin-top: 45px; */
                                    padding-top: 20px;
                                    /* margin-bottom: 20px; */
                                    font-size: x-large;
                                    background-color: red;
                                    border-radius: 12px;
                                ">continue</label>

                              </div> 
                        </form>
                      </div>
                    </div>
                </div>
                <!-- </form> -->
            </div>
        </div>
        <!-- <div id="controls">
            <label for="frame1"></label>
            <label for="frame2"></label>
            <label for="frame3"></label>
            <label for="frame4"></label>
        </div> -->
    </div>


    <style>
      #frame {
    margin: 0 auto;
    width: 800px;
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
    width: 50px;
    height: 50px;
    border-radius: 100%;
    background: #ccc;
    margin: 0 60px;
    font-size:x-large;
    color:black;
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
</div>
<!-- 

    <style>
      #frame {
    margin: 0 auto;
    width: 800px;
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
  padding-right:55px;
  padding-left: 50px;
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
    background: #F90;
}
  
#slides .frame_3 {
    background: #606;
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
    width: 50px;
    height: 50px;
    border-radius: 100%;
    background: #ccc;
    margin: 0 60px;
    font-size:x-large;
    color:black;
}

#bullets label:hover{
  background-color:blue;
}
  
#frame1:checked~#bullets label:nth-child(1),
#frame2:checked~#bullets label:nth-child(2),
#frame3:checked~#bullets label:nth-child(3),
#frame4:checked~#bullets label:nth-child(4) {
    background: #444;
}
  
@media screen and (max-width: 900px) {
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
</div> -->