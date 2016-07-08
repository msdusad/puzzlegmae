 <!DOCTYPE HTML>
    <html> 
    <head>
         <style type="text/css">
.mainbox{
	display:inline-block;
}
         .mover {
             width:90px; height:90px; line-height:4em;  float:left;  text-align:center;  
             } 
             #boxA{
                background-image: url(images/1.png)
             }
             #boxB{
                background-image: url(images/2.png)
             }
             #boxC{
                background-image: url(images/3.png)
             }
             #boxD{
                background-image: url(images/4.png)
             }
             #boxE{
                background-image: url(images/5.png)
              }
              #boxF{
                background-image: url(images/6.png)
              }
              #boxG{
                background-image: url(images/7.png)
              }
              #boxH{
                background-image: url(images/8.png)
              }
              #boxI{
                background-image: url(images/9.png)
              }

          </style>
          <script type="text/javascript">
window.onload=function(){
	  document.getElementById("allcontent").style.pointerEvents ="none";
	  
	}
        
        function playgame(start){


        	document.getElementById("allcontent").style.pointerEvents ="visible";
        	document.getElementById("startbutton").style.display="none";
        	document.getElementById("pausebutton").style.display="block";
        	  window.start = parseFloat(start);
    var end = 0 // change this to stop the counter at a higher value
    var refresh=1000; // Refresh rate in milli seconds
    if(window.start >= end ){
        mytime=setTimeout('display_ct()',refresh)
    } else {
        alert("Time Over ");
         document.getElementById("allcontent").style.pointerEvents ="none";
    }

        }



        function continugame(){
        	  window.start = parseFloat(start);
    var end = 0 // change this to stop the counter at a higher value
    var refresh=1000; // Refresh rate in milli seconds
    if(window.start >= end ){
        mytime=setTimeout('display_ct()',refresh)
    } else {
        alert("Time Over ");
         document.getElementById("allcontent").style.pointerEvents ="none";
    }
        	document.getElementById("allcontent").style.pointerEvents ="visible";
        	document.getElementById("startbutton").style.display="none";
        	document.getElementById("continuebutton").style.display="none";
        	document.getElementById("pausebutton").style.display="block";
        }

// function display_c(start){
//     window.start = parseFloat(start);
//     var end = 0 // change this to stop the counter at a higher value
//     var refresh=1000; // Refresh rate in milli seconds
//     if(window.start >= end ){
//         mytime=setTimeout('display_ct()',refresh)
//     } else {
//         alert("Time Over ");
//          document.getElementById("allcontent").style.pointerEvents ="none";
//     }
// }

function display_ct() {
    // Calculate the number of days left
    var days=Math.floor(window.start / 86400);
    // After deducting the days calculate the number of hours left
    var hours = Math.floor((window.start - (days * 86400 ))/3600)
    // After days and hours , how many minutes are left
    var minutes = Math.floor((window.start - (days * 86400 ) - (hours *3600 ))/60)
    // Finally how many seconds left after removing days, hours and minutes.
    var secs = Math.floor((window.start - (days * 86400 ) - (hours *3600 ) - (minutes*60)))

    // var x = window.start + "(" + days + " Days " + hours + " Hours " + minutes + " Minutes and " + secs + " Secondes " + ")";
   var x = window.start + "(" + minutes + " Minutes and " + secs + " Secondes " + ")";


    document.getElementById('ct').innerHTML = x;
    window.start= window.start- 1;

    tt=playgame(window.start);
}

function stop() {
    clearTimeout(mytime);
     document.getElementById("allcontent").style.pointerEvents ="none";
     document.getElementById("startbutton").style.display="none";
     document.getElementById("pausebutton").style.display="none";
      document.getElementById("continuebutton").style.display="block";

}


               function dragWord(dragEvent){
                  dragEvent.dataTransfer.setData("Id",    dragEvent.target.id+"|"+dragEvent.target.parentNode.id);
                 }                   
               function dropWord(dropEvent){ 
                var dropData = dropEvent.dataTransfer.getData("Id");
                dropItems = dropData.split("|"); 
                var prevElem = document.getElementById(dropItems[1]); 
                prevElem.getElementsByTagName("div")[0].id =      dropEvent.target.id;              
                dropEvent.target.id = dropItems[0]; 
                dropEvent.preventDefault(); 
                } 
                </script> 
                </head> 
                <body> <div>
                	<button id="startbutton" onclick="playgame(300);"> Play </button> 
                     <button id="pausebutton" onclick="stop();" style="display:none"> Pause </button> 
                       <button id="continuebutton" onclick="continugame();" style="display:none"> continue </button> 
                      <!--   <button id="continuebutton" onclick="playgame(300);" > Reset </button> --> 
                     
                	

<!--<input type="button" value="Start Timer" onclick="display_c(300);"/>   <input type="button" value="End Timer" onclick="stop();"/> -->
<span id='ct'></span>
                	<br><br>

                </div> 
               <div id="allcontent">
                 <div class="mainbox">

                    <div  id="box1" ondragover="event.preventDefault()"      ondrop="dropWord(event)"  > 
                    <div class="mover" id="boxA" draggable="true"      ondragstart="dragWord(event)" ></div> 
                    </div>
                    <div   id="box2" ondragover="event.preventDefault()"     ondrop="dropWord(event)"> 
                    <div class="mover" id="boxB" draggable="true"      ondragstart="dragWord(event)"></div> 
                    </div>
                    <div  id="box3" ondragover="event.preventDefault()"      ondrop="dropWord(event)"> 
                    <div class="mover" id="boxC" draggable="true"      ondragstart="dragWord(event)"></div> 
                    </div>

                    </div> 
        <div class="mainbox" style="margin-left:-5px;"> 
                    <div id="box4" ondragover="event.preventDefault()"      ondrop="dropWord(event)"> 
                    <div class="mover" id="boxD" draggable="true"      ondragstart="dragWord(event)"></div> 
                    </div> 
                    <div  id="box5" ondragover="event.preventDefault()"      ondrop="dropWord(event)"> 
                    <div class="mover" id="boxE" draggable="true"     ondragstart="dragWord(event)"></div> 
                    </div>   
                       <div  id="box6" ondragover="event.preventDefault()"      ondrop="dropWord(event)"> 
                    <div class="mover" id="boxF" draggable="true"     ondragstart="dragWord(event)"></div> 
                    </div>  

                            </div> 

                                    <div class="mainbox" style="margin-left:-5px;">  
                       <div  id="box7" ondragover="event.preventDefault()"      ondrop="dropWord(event)"> 
                    <div class="mover" id="boxG" draggable="true"     ondragstart="dragWord(event)"></div> 
                    </div>   
                       <div  id="box8" ondragover="event.preventDefault()"      ondrop="dropWord(event)"> 
                    <div class="mover" id="boxH" draggable="true"     ondragstart="dragWord(event)"></div> 
                    </div>   
                       <div  id="box9" ondragover="event.preventDefault()"      ondrop="dropWord(event)"> 
                    <div class="mover" id="boxI" draggable="true"     ondragstart="dragWord(event)"></div> 
                    </div> 


                            </div>  

                            </div>                                   
            </body> 
            </html>