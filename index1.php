<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title></title>
    <style type="text/css">
     .ui-drop-hover{border:2px solid #bbb;}
#dragdiv li,#dropdiv li{border:1px solid #bbb;}
#dropdiv li{padding-left:10px;}
#maindiv{width:700px;height:750px;border:2px solid #bbb;}
#allItems,#Ul1{list-style:none;}
#dragdiv,#dropdiv{width:180px;height:250px;float:left;}
    </style>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script>
    <script src="http://code.jquery.com/ui/1.8.20/jquery-ui.min.js" type="text/javascript"></script>
    <script src="http://jquery-ui.googlecode.com/svn/tags/latest/external/jquery.bgiframe-2.1.2.js"
        type="text/javascript"></script>
    <script src="http://jquery-ui.googlecode.com/svn/tags/latest/ui/minified/i18n/jquery-ui-i18n.min.js"
        type="text/javascript"></script>
    <script type="text/javascript">
        $(function() {
            $("#dragdiv li,#dropdiv li").draggable({
                appendTo: "body",
                helper: "clone",
                cursor: "move",
                revert: "invalid"
            });
 
            initDroppable($("#dropdiv li,#dragdiv li"));
            function initDroppable($elements) {
                $elements.droppable({
                    activeClass: "ui-state-default",
                    hoverClass: "ui-drop-hover",
                    accept: ":not(.ui-sortable-helper)",
 
                    over: function(event, ui) {
                        var $this = $(this);
                    },
                    drop: function(event, ui) {
                        var $this = $(this);
                        var li1 = $('<li>' + ui.draggable.text() + '</li>')
                        var linew1 = $(this).after(li1);
 
                        var li2 = $('<li>' + $(this).text() + '</li>')
                        var linew2 = $(ui.draggable).after(li2);
 
                        $(ui.draggable).remove();
                        $(this).remove();
 
                        initDroppable($("#dropdiv li,#dragdiv li"));
                        $("#dragdiv li,#dropdiv li").draggable({
                            appendTo: "body",
                            helper: "clone",
                            cursor: "move",
                            revert: "valid"
                        });
                    }
                });
            }
        });
    </script>
</head>
<body>
<center>
    <div id="maindiv">
   
        <div id="dragdiv">
           
            <ul id="allItems" runat="server">
                <li id="node1"><img src="images/1.png"></li>
                <li id="node2"> <img src="images/2.png"></li>
                <li id="node3"><img src="images/3.png"></li>
                <li id="node4"><img src="images/4.png"></li>
               
               <!--  <li id="node9"><img src="images/9.png"></li> -->
            </ul>
        </div>
             <div id="dropdiv">
                 <ul id="Ul1" runat="server">
               <li id="Li1"><img src="images/5.png"></li>
                <li id="Li2"><img src="images/6.png"></li>
                <li id="Li3"><img src="images/7.png"></li>
                <li id="Li4"><img src="images/8.png"></li>
               <!--  <li id="Li5">Item N</li>
                <li id="Li6">Item O</li>
                <li id="Li7">Item P</li>
                <li id="Li8">Item Q</li>
                <li id="Li9">Item R</li> -->
            </ul>
        </div>
    </div>
    </center>
</body>
</html>
