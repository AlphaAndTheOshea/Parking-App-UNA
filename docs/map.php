<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="style.css">
        <title>UNA Map</title>
    </head>
    <body>
        <!--Parent div class for flexbox layout-->
    <div class = "imgbox flex-parent">
        <img class = "center-fit flex-child" src="../img/map.jpg" alt="UNA map">
    <!--Child class for flexbox layout-->
    <div class = "flex-legend">
    	<div class = "markers">
        <p>	
        	<ul>
        			<li>AA - Norton Auditorium Parking Lot</li>
        			<li>A - Common's Parking Lot B</li>
        			<li>B - Common's Parking Lot</li>
        			<li>C - Willingham Parking Lot</li>
        			<li>D - Wesleyan Hall Parking Lot & Bus Stop</li>
        			<li>E - Math Building Parking Lot</li>
        			<li>F - Flower's Hall Parking Lot</li>
        			<li>G - Parking Deck</li>
        			<li>T - Covington Hall Parking</li>
        			<li>R - LaGrange Hall Parking</li>
        			<li>X - Rice Hall Parking Lot</li>
        			<li>S - Mane Market Parking Lot</li>
        			<li>P - Field House Parking Lot</li>
        			<li>O - Science Parking Lot</li>
        			<li>M - Science Parking Lot</li>
        			<li>Y - Secondary Science Parking</li>
        			<li>L - Kilby Parking Lot</li>
        			<li>L1 - Kilby Front Parking Lot</li>
        			<li>N - Power's Hall Parking</li>
        			<li>K - Communications Building Parking Lot</li>
        			<li>H - Back of Common's Parking Lot</li>
        			<li>I - Intramural Field Parking Lot</li>
        			<li>W - Visiting Scholars Residence Parking</li>
        			<li>J - Norton Auditorium Parking Lot</li>
        			<li>Q - Coby Hall Parking</li>
        			<li>A1 - Common's Parking Lot C</li>
        			<li>Z - Appleby Parking Lot</li>
        			

        		</ul>
        	</div>
        	</div>
        </p>
    </div>

    
        <p>Click to view legend</p>
        <form action="legend.php" method="post">
            <input type="submit" value="View Legend">
        </form>

    </body>
</html>
