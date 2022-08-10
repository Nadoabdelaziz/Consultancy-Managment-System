<div class="col-lg-11">
<div id="frame" style="">

<div id="bullets" style="
    float: right;
    margin-right: 85px;
    height: 270px;
">
<div class="row" style="
    float: left;
    height: 150px;
    width: min-content;
"><label for="frame1">4</label><br><h4 style="
    flex: auto;
">{{__('Execution')}}</h4></div>     
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
"><label for="frame2">3</label><br><h4 style="
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
        <input type="radio" name="frame" id="frame1" checked="">
        <input type="radio" name="frame" id="frame2">
        <input type="radio" name="frame" id="frame3">
        <input type="radio" name="frame" id="frame4">
        <div id="slides">
            <div id="overflow">
                <div class="inner">
                    <div class="frame frame_1">
                        <div class="frame-content">
                        <h2>Slide 4</h2>
                        </div>
                    </div>
                    <div class="frame frame_2">
                        <div class="frame-content">
                            <h2>Slide 2</h2>
                        </div>
                    </div>
                    <div class="frame frame_3">
                        <div class="frame-content">
                            <h2>Slide 3</h2>
                        </div>
                    </div>
                    <div class="frame frame_4">
                        <div class="frame-content">
                            <div class="frame-content">
                          <form>
                            <h2>List</h2>
                            <div class="row" style="padding-bottom:10px">
                              <input type="text" placeholder="enter name here">
                            </div>
                              <br>
                            <div class="row" style="padding-bottom:10px">
                              <input type="text">
                            </div>
                            
                            <div class="row" style="padding-bottom:10px">
                              <input type="text">
                            </div>
                            <div class="row" style="padding-bottom:10px">
                              <input type="text">
                            </div>
                            <div class="row" style="padding-bottom:10px">
                              <input type="text">
                            </div>
                            <div class="row" style="padding-bottom:10px">
                              <input type="text">
                            </div>
                            <div class="row" style="padding-bottom:10px">
                              <input type="text">
                            </div>
                            <div class="row" style="padding-bottom:10px">
                              <input type="text">
                            </div>
                            <div class="row" style="padding-bottom:10px">
                              <input type="text">
                            </div>
                            <!-- User ID : <input type = "text" name = "user_id" /> -->
                            <br>
                            <!-- Password: <input type = "password" name = "password" /> -->
                          </form>
                          <form style="float:left;height: fit-content;">
                              <h3>استشاري أسماء الكيانات</h3>
                              <br><br>
                            <div class="row" style="padding-bottom:50px;justify-content: space-around;">
                              <input type="text" placeholder="Inventor Name">
                            </div>
                              <br>
                              <div class="row" style="padding-bottom:50px;justify-content: space-around;">
                              <input type="text" placeholder="Enter Activity">
                            </div>
                            
                            <div class="row" style="padding-bottom:50px;justify-content: space-around;">
                              <input type="text" placeholder="enter country">
                            </div>
          
                            <!-- User ID : <input type = "text" name = "user_id" /> -->
                            <br>
                            <!-- Password: <input type = "password" name = "password" /> -->
                          </form>

                          <br><br>

                          <form style="margin-top: 250px;">
                            <h2>List</h2>
                            <textarea name="asd" id="" cols="20" rows="20" style="margin-bottom: 42px;height: 200px;width: 550px;">enter here</textarea>
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

                          </form>

                          <form style="margin-top: 154px;float: right;background-color: transparent;/* margin-right: 165px; */width: fit-content;margin-right: 160px;/* right: 250px; */">
                          
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

                          </form> 

                        
                        </div>
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