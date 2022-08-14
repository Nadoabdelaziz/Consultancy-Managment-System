<div class="col-lg-12" style="height: 300px;">
        <div class="art-a art-card art-fluid-card" style="border-style: double;border-color: gray;border-width: thick;border-radius: 20px;/* margin: 20px; *//* height: 150%; */">
            <textarea onkeyup="myfunction()" id="texbox" style="width: -webkit-fill-available;padding: 18px;/* margin: -17px; */height: inherit;background-color: darkgray;border-radius: 20px;"> asd </textarea>
            <div class="row" style="background-color: gray;border-radius: 20px;margin-top: 18px;justify-content: space-evenly;">
                <h4 id="sum">asd</h4>
            </div>        
        </div>
</div>

<script>
    function myfunction(){
        var y = document.getElementById("texbox");
        var x = document.getElementById("sum");
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
            case "ة	":    
                result=result+5;
                x.textContent = result;
                break;  
            case "و	":    
                result=result+6;
                x.textContent = result;
                break;    
            case "ز":    
                result=result+7;
                x.textContent = result;
                break; 
            case "ح	":    
                result=result+8;
                x.textContent = result;
                break;  
            case "ط		":    
                result=result+9;
                x.textContent = result;
                break; 
            case "ى":    
            case "ي":
            case "ئ":    
                result=result+10;
                x.textContent = result;
                break;  
            case "ك	":    
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
                x.textContent= 123;    
        }

        }
        



    }
</script>