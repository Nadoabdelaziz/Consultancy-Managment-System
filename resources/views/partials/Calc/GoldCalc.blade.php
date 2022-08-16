<div class="col-lg-9" style="height:fit-content;">
    <div class="art-a art-card art-fluid-card" style="font-family: cursive;color:white;font-weight: 600;border-style: double;border-color: gray;border-width: thick;border-radius: 20px;height: fit-content;">
        
    
        <div class="row" style="justify-content: center;margin-bottom: 46px;"> 
            <textarea disabled style="font-size: large;text-align: right;width: -webkit-fill-available;padding: 18px;/* margin-bottom: 30px; */margin: 24px;/* height: inherit; */background-color: darkgray;/* border-radius: 20px; */"></textarea>
        </div>

        <!-- Sc Calc -->
        <div class="row" style="justify-content: center;margin-bottom: 68px;"> 
            <textarea onkeyup="myfunction()" id="texbox" placeholder="{{__('enter name here')}}" style="text-align: end; border-radius: 15px;padding: 33px;width: 50%;background-color: darkgray;"></textarea>
            <label style="margin: 20px;font-size: large;font-weight: 700;">{{__('Sentence Names Calculator')}}</label> 
        </div>

        

        <!-- Sc Calc result -->
        <div class="row" style="background-color: gray;border-radius: 20px;margin-top: 18px;justify-content: space-evenly;margin-bottom:30px">
            <h4 style="padding: 2px;">
                <p id="sum" style="float: left;display: contents"></p> : حاسبة الجمل
            </h4>
        </div>       

        <div class="row" style="justify-content: center;margin: 40px;">
            <button onclick="result()" class="btn-lg btn-primary" style="">{{__('Continue')}}</button>
        </div>

        <!-- <div class="row" style="justify-content: center;margin-bottom: 55px;"> 
            <input type="text" placeholder="enter here" style="border-radius: 9px;height: fit-content;padding: 3px;background-color: darkgray;">
            <label style="margin-left: 35px;font-size: large;font-weight: 700;">Barcode Name</label> 
        </div> -->

        <div class="row" style="justify-content: center;display: inline-grid;margin-bottom: 53px;width: -webkit-fill-available;"> 
            <input type="text" id="proper" placeholder="000" style="font-size: large;font-weight: bold;text-align: center;border-radius: 9px;height: fit-content;width: 350px;margin-bottom: 9px;padding: 2px;background-color: darkgray;">
            <h2 class="row" style="justify-content: end;margin-right: -50px;">-</h2>
            <input type="text" id="3aks" placeholder="000" style="font-size: large;font-weight: bold;text-align: center;border-radius: 9px;height: fit-content;width: 350px;margin-bottom: 9px;padding: 2px;background-color: darkgray;">
        </div>
    
        <div class="row" style="justify-content: center;margin-bottom: 52px;"> 
            <input id="frst_result" type="text" placeholder="0" style="border-radius: 9px;height: fit-content;font-size: x-large;text-align: center;padding: 32px;background-color: darkgray;">
            <label style="margin-left: 35px;font-size: -webkit-xxx-large;font-weight: 700;">=</label>  
        </div>

        <hr style="background-color: aliceblue;margin-bottom: 70px;">

        <div class="row" style="justify-content: center;display: inline-grid;margin-bottom: 53px;width: -webkit-fill-available;"> 
            <input type="text" id="proper2" placeholder="0" style="font-size: large;font-weight: bold;text-align: center;border-radius: 9px;height: fit-content;width: 350px;margin-bottom: 9px;padding: 2px;background-color: darkgray;">
            <h2 class="row" id="sign" style="justify-content: end;margin-right: -50px;"></h2>
            <input type="text" id="3aks2" placeholder="0" style="font-size: large;font-weight: bold;text-align: center;border-radius: 9px;height: fit-content;width: 350px;margin-bottom: 9px;padding: 2px;background-color: darkgray;">
        </div>

        <div class="row" style="justify-content: center;margin-bottom: 52px;"> 
            <input id="Last_result" type="text" placeholder="0" style="border-radius: 9px;height: 133px;width: 64%;font-size: xx-large;padding: 32px;text-align: center;background-color: darkgray;">
            <label style="font-size: -webkit-xxx-large;font-weight: 700;padding: 33px;">=</label>  
        </div>
<!-- 
        <div class="row" style="justify-content: center;">
            <button class="btn btn-primary"> Execute </button>
        </div>

        <div class="row" style="background-color: gray;border-radius: 20px;margin-top: 18px;justify-content: space-evenly;">
            <h4 style="padding: 2px;">
                <p id="sum" style="float: left;display: contents;"></p> : حاسبة الجمل
            </h4>
        </div>        -->

    </div>
</div>


<script>
        var y = document.getElementById("texbox");
        var x = document.getElementById("sum");
        var res1 = document.getElementById("proper");
        var res2 = document.getElementById("3aks");
        var the_res = document.getElementById("frst_result");
        var res3 = document.getElementById("proper2");
        var res4 = document.getElementById("3aks2");
        var the_result = document.getElementById("Last_result");
        var the_sign = document.getElementById("sign");





    function myfunction(){

        var result=0;


        for(var i =0; i < y.value.length; i++){
            switch(y.value[i]){
            case "أ" : 
            case "ا" : 
            case  "إ" : 
            case  "ٱ" : 
            case  "ء" :
            case "ئ" : 
            case "ؤ" :
                result=result+1;
                x.textContent = result;
                break;

            case "ب" : 
            case "آ":
                result=result+2;
                x.textContent = result;
                break;
            case "ج" : 
                result=result+3;
                x.textContent = result;
                break; 
            case "ه" :    
            case "د" : 
                result=result+4;
                x.textContent = result;
                break;     
            case "ة":    
                result=result+5;
                x.textContent = result;
                break;  
            case "و":    
                result=result+6;
                x.textContent = result;
                break;    
            case "ز":    
                result=result+7;
                x.textContent = result;
                break; 
            case "ح":    
                result=result+8;
                x.textContent = result;
                break;  
            case "ط":    
                result=result+9;
                x.textContent = result;
                break; 
            case "ى":    
            case "ي":
            case "ئ":    
                result=result+10;
                x.textContent = result;
                break;  
            case "ك":    
                result=result+20;
                x.textContent = result;
                break;    
            case "ل":    
                result=result+30;
                x.textContent = result;
                break;
            case "م":    
                result=result+40;
                x.textContent = result;
                break;    
            case "ن":    
                result=result+50;
                x.textContent = result;
                break;  
            case "غ":    
                result=result+1000;
                x.textContent = result;
                break;   
            case "س":    
                result=result+60;
                x.textContent = result;
                break;  
            case "ع":    
                result=result+70;
                x.textContent = result;
                break;  
            case "ف":    
                result=result+80;
                x.textContent = result;
                break; 
            case "ص":    
                result=result+90;
                x.textContent = result;
                break;        
            case "ق":    
                result=result+100;
                x.textContent = result;
                break;  
            case "ر":    
                result=result+200;
                x.textContent = result;
                break;  
            case "ش":    
                result=result+300;
                x.textContent = result;
                break;  
            case "ت":    
                result=result+400;
                x.textContent = result;
                break;  
            case "ث":    
                result=result+500;
                x.textContent = result;
                break;  
            case "خ":    
                result=result+600;
                x.textContent = result;
                break;  
            case "ذ":    
                result=result+700;
                x.textContent = result;
                break;  
            case "ض":    
                result=result+800;
                x.textContent = result;
                break;  
            case "ظ":    
                result=result+900;
                x.textContent = result;
                break;                                                   
            default : 
                // x.textContent= 123;    
        }
        
        }

        if(y.value == ""){
            x.textContent="";
        }
        
    }

    function result(){
        // res= res1.value + x.textContent;
        // res1.value = res.substr(res.length-2); 
        var num = x.textContent;
        // const dec = num.split('.')[1]
        const thelen = num.length;
        const zeros= thelen == 1 ? '00' : thelen == 2 ? '0' : '' ;
        // const len = dec && dec.length > 2 ? dec.length : 2
        // alert(zeros);
        res1.value= String(zeros) + num;


        res2.value = res1.value.split("").reverse().join("");


        the_res.value= Number(res1.value)- Number(res2.value);

        // sign + or -

        the_sign.textContent=the_res.value.charAt(0) == '-' ? '-' :'+'; 


        res3.value= the_res.value;

        const sub = res3.value.charAt(0);

        // alert(sub);

        res4.value = sub == '-' ? "-" + String(res3.value.substring(1).split("").reverse().join("")) : res3.value.split("").reverse().join("") ;

        

        // res4.value = res3.value.split("").reverse().join("");




        // const sub2 = res4.value.charAt(0);

        // alert(sub2);
        // alert(res3.value);
        // alert(res4.value);
        the_result.value = Number(res3.value) + Number(res4.value);



    }
</script>