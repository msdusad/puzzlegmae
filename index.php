 <!DOCTYPE HTML>
    <html> 
    <head>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script>
     <!--    <meta http-equiv="refresh" content="120;url=http://www.google.com/" /> -->
         <style type="text/css">
.mainbox{
	display:inline-block;
}
         .mover {
            height:100px;width: 100px;   float:left;  text-align:center;  
             } 
             #box1{
                background-image: url(images/part1/1.png)
             }
             #box2{
                background-image: url(images/part1/2.png)
             }
             #box3{
                background-image: url(images/part1/3.png)
             }
             #box4{
                background-image: url(images/part1/4.png)
             }
             #box5{
                background-image: url(images/part1/5.png)
              }
              #box6{
                background-image: url(images/part1/6.png)
              }
              #box7{
                background-image: url(images/part1/7.png)
              }
              #box8{
                background-image: url(images/part1/8.png)
              }
              #box9{
                background-image: url(images/part1/9.png)
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

                answertest();
                }


function level2(){
// for(i=1;i<=9;i++){
// var urlString = 'url(images/part2/' + i + '.jpg)'; 
// $('#box'+i).css('background-image', urlString);
// //$('#box'+i).load('#box'+i);
// }
 $("#allcontent").load('part2.php');

}

function answertest () {
    //obj=document.getElementById('box1');
 //alert('background-image= '+getComputedStyle(obj,'').getPropertyValue('background-image'));
}




                </script> 
                </head> 
                <body> <div>
                	<button id="startbutton" onclick="playgame(300);"> Play </button>
					<button id="level2" onclick="level2();return false"> Level2 </button> 
                     <button id="pausebutton" onclick="stop();" style="display:none"> Pause </button> 
                       <button id="continuebutton" onclick="continugame();" style="display:none"> continue </button> 
                      <!--   <button id="continuebutton" onclick="playgame(300);" > Reset </button> --> 
                     
                	

<!--<input type="button" value="Start Timer" onclick="display_c(300);"/>   <input type="button" value="End Timer" onclick="stop();"/> -->
<span id='ct'></span>
                	<br><br>

                </div> 
               <div id="allcontent">
                 <div class="mainbox">

                    <div  id="boxA" ondragover="event.preventDefault()"      ondrop="dropWord(event)"  > 
                    <div class="mover" id="box1" draggable="true"      ondragstart="dragWord(event)" ></div> 
                    </div>
                    <div   id="boxB" ondragover="event.preventDefault()"     ondrop="dropWord(event)"> 
                    <div class="mover" id="box2" draggable="true"      ondragstart="dragWord(event)"></div> 
                    </div>
                    <div  id="boxC" ondragover="event.preventDefault()"      ondrop="dropWord(event)"> 
                    <div class="mover" id="box3" draggable="true"      ondragstart="dragWord(event)"></div> 
                    </div>

                    </div> 
					<div class="mainbox" style="margin-left:-5px;"> 
                    <div id="boxD" ondragover="event.preventDefault()"      ondrop="dropWord(event)"> 
                    <div class="mover" id="box4" draggable="true"      ondragstart="dragWord(event)"></div> 
                    </div> 
                    <div  id="boxE" ondragover="event.preventDefault()"      ondrop="dropWord(event)"> 
                    <div class="mover" id="box5" draggable="true"     ondragstart="dragWord(event)"></div> 
                    </div>   
                       <div  id="boxF" ondragover="event.preventDefault()"      ondrop="dropWord(event)"> 
                    <div class="mover" id="box6" draggable="true"     ondragstart="dragWord(event)"></div> 
                    </div>  

                            </div> 

                                    <div class="mainbox" style="margin-left:-5px;">  
                       <div  id="boxG" ondragover="event.preventDefault()"      ondrop="dropWord(event)"> 
                    <div class="mover" id="box7" draggable="true"     ondragstart="dragWord(event)"></div> 
                    </div>   
                       <div  id="boxH" ondragover="event.preventDefault()"      ondrop="dropWord(event)"> 
                    <div class="mover" id="box8" draggable="true"     ondragstart="dragWord(event)"></div> 
                    </div>   
                       <div  id="boxI" ondragover="event.preventDefault()"      ondrop="dropWord(event)"> 
                    <div class="mover" id="box9" draggable="true"     ondragstart="dragWord(event)"></div> 
                    </div> 


                            </div>  




                            </div>                                   
            </body> 
            </html>