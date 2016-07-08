<!DOCTYPE HTML>
<html>
<head>
	<style>
.box{border:2px solid red;height:100px;width:100px;display:inline-block;}
	</style>

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {

            $("ul").sortable();
        });
    </script>
<script>
function allowDrop(ev) {
    ev.preventDefault();

}

function drag(ev) {
    ev.dataTransfer.setData("text", ev.target.id);

}

function drop(ev) {
    ev.preventDefault();
    var data = ev.dataTransfer.getData("text");
    ev.target.appendChild(document.getElementById(data));
     //alert('hi');
}
</script>
</head>
<body>
<div>
<div class="box" id="div1" ondrop="drop(event)" ondragover="allowDrop(event)"  >

<img id="drag1" src="images/a.jpg" draggable="true" ondragstart="drag(event)">
</div>
<div class="box" id="div2" ondrop="drop(event)" ondragover="allowDrop(event)"  >
<img id="drag1" src="images/b.png" draggable="true" ondragstart="drag(event)">
</div>
<div class="box" id="div3" ondrop="drop(event)" ondragover="allowDrop(event)"  >
<img id="drag1" src="images/c.png" draggable="true" ondragstart="drag(event)">
</div>
</div>

<div>
<div class="box" id="div4" ondrop="drop(event)" ondragover="allowDrop(event)"  >
<img id="drag1" src="images/d.png" draggable="true" ondragstart="drag(event)">
</div>
<div class="box" id="div5" ondrop="drop(event)" ondragover="allowDrop(event)"  >
<img id="drag1" src="images/e.png" draggable="true" ondragstart="drag(event)">
</div>
<div class="box" id="div6" ondrop="drop(event)" ondragover="allowDrop(event)"  >
<img id="drag1" src="images/f.jpg" draggable="true" ondragstart="drag(event)">
</div>
</div>

<div>
<div class="box" id="div7" ondrop="drop(event)" ondragover="allowDrop(event)"  >
	<img id="drag1" src="images/g.jpg" draggable="true" ondragstart="drag(event)">
</div>
<div class="box" id="div8" ondrop="drop(event)" ondragover="allowDrop(event)"  >
	<img id="drag1" src="images/g.jpg" draggable="true" ondragstart="drag(event)">
</div>
<div class="box" id="div9" ondrop="drop(event)" ondragover="allowDrop(event)"  >
	<img id="drag1" src="images/i.jpg" draggable="true" ondragstart="drag(event)">
</div>
</div>

<br><br>
 <div>
    <ul id="wrapper">
<li><div id="div10"   ><img id="drag1" src="images/a.jpg" draggable="true" >
</div>
</li>
<li>
<div  id="div11"   ><img id="drag1" src="images/b.png" draggable="true" o>
</div> </li>
</ul>
</div> 


