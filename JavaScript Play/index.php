<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>JavaScript Play</title>

    </head>
    <body>
        <button id="test" onclick="clickbutton()">Click this button!</button>

        <button onclick="this.innerHTML = 'Clicked!'">Click this button too!</button>

        <br><button id="displayButton" onclick="displayButtonText()">Display text of first button</button>
        <br><p id="output"></p>
        
        <br><button id="time" onclick="displayDate()">Display time</button>
        
        <br><button id="add" onclick="addText()">Add a paragraph</button>
        
        <br><p id="text"></p>    
        
        <script>
            function clickbutton() {
                var element = document.getElementById("test");
                element.innerHTML = "Clicked!";
            }

            function displayDate() {
                document.getElementById("time").innerHTML = "Current date and time: " + Date();
            }

            function addText() {
                document.getElementById("text").innerHTML = "This paragraph is now displayed";
            }
            
            function displayButtonText() {
                var x = document.getElementById("test").innerHTML;
                document.getElementById("output").innerHTML = "Button text: " + x;
            }
        </script>
    </body>
</html>
