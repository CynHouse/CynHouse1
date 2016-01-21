<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Euro 2016 Predictor</title>
    <meta name="viewport" content="width=device-width, initial-scale = 1.0, maximum-scale=1.0, user-scalable=no"/>
    <!--Using jQuery and jQuery UI for display effects-->
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://code.jquery.com/ui/1.11.1/jquery-ui.min.js"></script>

    <!--Using Media Queries, if the viewport is smaller than 700px use another stylesheet-->
    <link rel="stylesheet" type="text/css" media="all" href="css/sitestyle.css"/>

</head>


<body>
    
<?php

IF (isset($_SESSION["M1date"])){} ELSE {include 'setdefaults.php';}//Set the defaults if not set

include 'knockoutcalc.php';

?>


<!--This wrapping container is used to get the width of the whole content-->
<div id="container">

    
    <!--The Hamburger Button in the Header -->
    <header>
        <div id="hamburger">
                <div></div>
                <div></div>
                <div></div>
        </div>
        <div class="myheader"><h1>THE title</h1></div>
    </header>
    <!--The mobile navigation Markup hidden via css -->
    <nav>
        <ul> 
            <li><a href="euro20162.php">Home</a></li>
            <li><a href="GA.php">Group A</a></li>
            <li><a href="GB.php">Group B</a></li>
            <li><a href="GC.php">Group C</a></li>
            <li><a href="GD.php">Group D</a></li>
            <li><a href="GE.php">Group E</a></li>
            <li><a href="GF.php">Group F</a></li>
            <li><a href="3rd.php">3rd Placed Teams</a></li>
            <li><a href="knockout.php">Last 16</a></li>
            <li><a href="knockout8.php">Quarter Finals</a></li>
            <li><a href="semi.php">Semi Finals</a></li>
            <li><a href="final.php">Final</a></li>
            <li><a href="all.php">Full schedule</a></li>
        </ul>
    </nav>

    <!--The Layer that will be layed over the content
    so that the content is unclickable while menu is shown-->
    <div id="contentLayer"></div>

    <!--The content of the site-->
    <div id="content">
    
    <table class="tableall1" width=100%>
        <tr>
            <td>No</td>
            <td>Date</td>
            <td>Team 1</td>
            <td colspan=2>Score</td>
            <td>Team 2</td>
            <td colspan=2>Group</td>
        </tr>
        <tr>
            <td>1</td>
            <td><?php echo $_SESSION["M1date"]->format("D j M H:i");?></td>
            <td><?php echo $_SESSION["TeamA1"];?></td>
            <td><?php echo $_SESSION[‘SMatch1Score1’];?></td>
            <td><?php echo $_SESSION[‘SMatch1Score2’];?></td>
            <td><?php echo $_SESSION["TeamA2"];?></td>
            <td colspan=2>A</td>
        </tr> 
        <tr>
            <td>2</td>
            <td><?php echo $_SESSION["M2date"]->format("D j M H:i");?></td>
            <td><?php echo $_SESSION["TeamA3"];?></td>
            <td><?php echo $_SESSION[‘SMatch2Score1’];?></td>
            <td><?php echo $_SESSION[‘SMatch2Score2’];?></td>
            <td><?php echo $_SESSION["TeamA4"];?></td>
            <td colspan=2>A</td>
        </tr>
        <tr>
            <td>3</td>
            <td><?php echo $_SESSION["M3date"]->format("D j M H:i");?></td>
            <td><?php echo $_SESSION["TeamB3"];?></td>
            <td><?php echo $_SESSION[‘SMatch3Score1’];?></td>
            <td><?php echo $_SESSION[‘SMatch3Score2’];?></td>
            <td><?php echo $_SESSION["TeamB4"];?></td>
            <td colspan=2>B</td>
        </tr>
        <tr>
            <td>4</td>
            <td><?php echo $_SESSION["M4date"]->format("D j M H:i");?></td>
            <td><?php echo $_SESSION["TeamB1"];?></td>
            <td><?php echo $_SESSION[‘SMatch4Score1’];?></td>
            <td><?php echo $_SESSION[‘SMatch4Score2’];?></td>
            <td><?php echo $_SESSION["TeamB2"];?></td>
            <td colspan=2>B</td>
        </tr>
        <tr>
            <td>5</td>
            <td><?php echo $_SESSION["M5date"]->format("D j M H:i");?></td>
            <td><?php echo $_SESSION["TeamD3"];?></td>
            <td><?php echo $_SESSION[‘SMatch5Score1’];?></td>
            <td><?php echo $_SESSION[‘SMatch5Score2’];?></td>
            <td><?php echo $_SESSION["TeamD4"];?></td>
            <td colspan=2>D</td>
        </tr> 
        <tr>
            <td>6</td>
            <td><?php echo $_SESSION["M6date"]->format("D j M H:i");?></td>
            <td><?php echo $_SESSION["TeamC3"];?></td>
            <td><?php echo $_SESSION[‘SMatch6Score1’];?></td>
            <td><?php echo $_SESSION[‘SMatch6Score2’];?></td>
            <td><?php echo $_SESSION["TeamC4"];?></td>
            <td colspan=2>C</td>
        </tr> 
        <tr>
            <td>7</td>
            <td><?php echo $_SESSION["M7date"]->format("D j M H:i");?></td>
            <td><?php echo $_SESSION["TeamC1"];?></td>
            <td><?php echo $_SESSION[‘SMatch7Score1’];?></td>
            <td><?php echo $_SESSION[‘SMatch7Score2’];?></td>
            <td><?php echo $_SESSION["TeamC2"];?></td>
            <td colspan=2>C</td>
        </tr>
        <tr>
            <td>8</td>
            <td><?php echo $_SESSION["M8date"]->format("D j M H:i");?></td>
            <td><?php echo $_SESSION["TeamD1"];?></td>
            <td><?php echo $_SESSION[‘SMatch8Score1’];?></td>
            <td><?php echo $_SESSION[‘SMatch8Score2’];?></td>
            <td><?php echo $_SESSION["TeamD2"];?></td>
            <td colspan=2>D</td>
        </tr>
        <tr>
            <td>9</td>
            <td><?php echo $_SESSION["M9date"]->format("D j M H:i");?></td>
            <td><?php echo $_SESSION["TeamE3"];?></td>
            <td><?php echo $_SESSION[‘SMatch9Score1’];?></td>
            <td><?php echo $_SESSION[‘SMatch9Score2’];?></td>
            <td><?php echo $_SESSION["TeamE4"];?></td>
            <td colspan=2>E</td>
        </tr>
        <tr>
            <td>10</td>
            <td><?php echo $_SESSION["M10date"]->format("D j M H:i");?></td>
            <td><?php echo $_SESSION["TeamE1"];?></td>
            <td><?php echo $_SESSION[‘SMatch10Score1’];?></td>
            <td><?php echo $_SESSION[‘SMatch10Score2’];?></td>
            <td><?php echo $_SESSION["TeamE2"];?></td>
            <td colspan=2>E</td>
        </tr>
        <tr>
            <td>11</td>
            <td><?php echo $_SESSION["M11date"]->format("D j M H:i");?></td>
            <td><?php echo $_SESSION["TeamF3"];?></td>
            <td><?php echo $_SESSION[‘SMatch11Score1’];?></td>
            <td><?php echo $_SESSION[‘SMatch11Score2’];?></td>
            <td><?php echo $_SESSION["TeamF4"];?></td>
            <td colspan=2>F</td>
        </tr> 
        <tr>
            <td>12</td>
            <td><?php echo $_SESSION["M12date"]->format("D j M H:i");?></td>
            <td><?php echo $_SESSION["TeamF1"];?></td>
            <td><?php echo $_SESSION[‘SMatch12Score1’];?></td>
            <td><?php echo $_SESSION[‘SMatch12Score2’];?></td>
            <td><?php echo $_SESSION["TeamF2"];?></td>
            <td colspan=2>F</td>
        </tr>
        <tr>
            <td>13</td>
            <td><?php echo $_SESSION["M13date"]->format("D j M H:i");?></td>
            <td><?php echo $_SESSION["TeamB2"];?></td>
            <td><?php echo $_SESSION[‘SMatch13Score1’];?></td>
            <td><?php echo $_SESSION[‘SMatch13Score2’];?></td>
            <td><?php echo $_SESSION["TeamB4"];?></td>
            <td colspan=2>B</td>
        </tr>
        <tr>
            <td>14</td>
            <td><?php echo $_SESSION["M14date"]->format("D j M H:i");?></td>
            <td><?php echo $_SESSION["TeamA2"];?></td>
            <td><?php echo $_SESSION[‘SMatch14Score1’];?></td>
            <td><?php echo $_SESSION[‘SMatch14Score2’];?></td>
            <td><?php echo $_SESSION["TeamA4"];?></td>
            <td colspan=2>A</td>
        </tr>
        <tr>
            <td>15</td>
            <td><?php echo $_SESSION["M15date"]->format("D j M H:i");?></td>
            <td><?php echo $_SESSION["TeamA1"];?></td>
            <td><?php echo $_SESSION[‘SMatch15Score1’];?></td>
            <td><?php echo $_SESSION[‘SMatch15Score2’];?></td>
            <td><?php echo $_SESSION["TeamA3"];?></td>
            <td colspan=2>A</td>
        </tr>
        <tr>
            <td>16</td>
            <td><?php echo $_SESSION["M16date"]->format("D j M H:i");?></td>
            <td><?php echo $_SESSION["TeamB1"];?></td>
            <td><?php echo $_SESSION[‘SMatch16Score1’];?></td>
            <td><?php echo $_SESSION[‘SMatch16Score2’];?></td>
            <td><?php echo $_SESSION["TeamB3"];?></td>
            <td colspan=2>B</td>
        </tr> 
        <tr>
            <td>17</td>
            <td><?php echo $_SESSION["M17date"]->format("D j M H:i");?></td>
            <td><?php echo $_SESSION["TeamC2"];?></td>
            <td><?php echo $_SESSION[‘SMatch17Score1’];?></td>
            <td><?php echo $_SESSION[‘SMatch17Score2’];?></td>
            <td><?php echo $_SESSION["TeamC4"];?></td>
            <td colspan=2>C</td>
        </tr>
        <tr>
            <td>18</td>
            <td><?php echo $_SESSION["M18date"]->format("D j M H:i");?></td>
            <td><?php echo $_SESSION["TeamC1"];?></td>
            <td><?php echo $_SESSION[‘SMatch18Score1’];?></td>
            <td><?php echo $_SESSION[‘SMatch18Score2’];?></td>
            <td><?php echo $_SESSION["TeamC3"];?></td>
            <td colspan=2>C</td>
        </tr>
        <tr>
            <td>19</td>
            <td><?php echo $_SESSION["M19date"]->format("D j M H:i");?></td>
            <td><?php echo $_SESSION["TeamE2"];?></td>
            <td><?php echo $_SESSION[‘SMatch19Score1’];?></td>
            <td><?php echo $_SESSION[‘SMatch19Score2’];?></td>
            <td><?php echo $_SESSION["TeamE4"];?></td>
            <td colspan=2>E</td>
        </tr>
        <tr>
            <td>20</td>
            <td><?php echo $_SESSION["M20date"]->format("D j M H:i");?></td>
            <td><?php echo $_SESSION["TeamD2"];?></td>
            <td><?php echo $_SESSION[‘SMatch20Score1’];?></td>
            <td><?php echo $_SESSION[‘SMatch20Score2’];?></td>
            <td><?php echo $_SESSION["TeamD4"];?></td>
            <td colspan=2>D</td>
        </tr>
        <tr>
            <td>21</td>
            <td><?php echo $_SESSION["M21date"]->format("D j M H:i");?></td>
            <td><?php echo $_SESSION["TeamD1"];?></td>
            <td><?php echo $_SESSION[‘SMatch21Score1’];?></td>
            <td><?php echo $_SESSION[‘SMatch21Score2’];?></td>
            <td><?php echo $_SESSION["TeamD3"];?></td>
            <td colspan=2>D</td>
        </tr> 
        <tr>
            <td>22</td>
            <td><?php echo $_SESSION["M22date"]->format("D j M H:i");?></td>
            <td><?php echo $_SESSION["TeamE1"];?></td>
            <td><?php echo $_SESSION[‘SMatch22Score1’];?></td>
            <td><?php echo $_SESSION[‘SMatch22Score2’];?></td>
            <td><?php echo $_SESSION["TeamE3"];?></td>
            <td colspan=2>E</td>
        </tr>
        <tr>
            <td>23</td>
            <td><?php echo $_SESSION["M23date"]->format("D j M H:i");?></td>
            <td><?php echo $_SESSION["TeamF2"];?></td>
            <td><?php echo $_SESSION[‘SMatch23Score1’];?></td>
            <td><?php echo $_SESSION[‘SMatch23Score2’];?></td>
            <td><?php echo $_SESSION["TeamF4"];?></td>
            <td colspan=2>F</td>
        </tr>
        <tr>
            <td>24</td>
            <td><?php echo $_SESSION["M24date"]->format("D j M H:i");?></td>
            <td><?php echo $_SESSION["TeamF1"];?></td>
            <td><?php echo $_SESSION[‘SMatch24Score1’];?></td>
            <td><?php echo $_SESSION[‘SMatch24Score2’];?></td>
            <td><?php echo $_SESSION["TeamF3"];?></td>
            <td colspan=2>F</td>
        </tr>
        <tr>
            <td>25</td>
            <td><?php echo $_SESSION["M25date"]->format("D j M H:i");?></td>
            <td><?php echo $_SESSION["TeamA2"];?></td>
            <td><?php echo $_SESSION[‘SMatch25Score1’];?></td>
            <td><?php echo $_SESSION[‘SMatch25Score2’];?></td>
            <td><?php echo $_SESSION["TeamA3"];?></td>
            <td colspan=2>A</td>
        </tr>
        <tr>
            <td>26</td>
            <td><?php echo $_SESSION["M26date"]->format("D j M H:i");?></td>
            <td><?php echo $_SESSION["TeamA4"];?></td>
            <td><?php echo $_SESSION[‘SMatch26Score1’];?></td>
            <td><?php echo $_SESSION[‘SMatch26Score2’];?></td>
            <td><?php echo $_SESSION["TeamA1"];?></td>
            <td colspan=2>A</td>
        </tr> 
        <tr>
            <td>27</td>
            <td><?php echo $_SESSION["M27date"]->format("D j M H:i");?></td>
            <td><?php echo $_SESSION["TeamB2"];?></td>
            <td><?php echo $_SESSION[‘SMatch27Score1’];?></td>
            <td><?php echo $_SESSION[‘SMatch27Score2’];?></td>
            <td><?php echo $_SESSION["TeamB3"];?></td>
            <td colspan=2>B</td>
        </tr>
        <tr>
            <td>28</td>
            <td><?php echo $_SESSION["M28date"]->format("D j M H:i");?></td>
            <td><?php echo $_SESSION["TeamB4"];?></td>
            <td><?php echo $_SESSION[‘SMatch28Score1’];?></td>
            <td><?php echo $_SESSION[‘SMatch28Score2’];?></td>
            <td><?php echo $_SESSION["TeamB1"];?></td>
            <td colspan=2>B</td>
        </tr>
        <tr>
            <td>29</td>
            <td><?php echo $_SESSION["M29date"]->format("D j M H:i");?></td>
            <td><?php echo $_SESSION["TeamC2"];?></td>
            <td><?php echo $_SESSION[‘SMatch29Score1’];?></td>
            <td><?php echo $_SESSION[‘SMatch29Score2’];?></td>
            <td><?php echo $_SESSION["TeamC3"];?></td>
            <td colspan=2>C</td>
        </tr>
        <tr>
            <td>30</td>
            <td><?php echo $_SESSION["M30date"]->format("D j M H:i");?></td>
            <td><?php echo $_SESSION["TeamC4"];?></td>
            <td><?php echo $_SESSION[‘SMatch30Score1’];?></td>
            <td><?php echo $_SESSION[‘SMatch30Score2’];?></td>
            <td><?php echo $_SESSION["TeamC1"];?></td>
            <td colspan=2>C</td>
        </tr>
        <tr>
            <td>31</td>
            <td><?php echo $_SESSION["M31date"]->format("D j M H:i");?></td>
            <td><?php echo $_SESSION["TeamD2"];?></td>
            <td><?php echo $_SESSION[‘SMatch31Score1’];?></td>
            <td><?php echo $_SESSION[‘SMatch31Score2’];?></td>
            <td><?php echo $_SESSION["TeamD3"];?></td>
            <td colspan=2>D</td>
        </tr> 
        <tr>
            <td>32</td>
            <td><?php echo $_SESSION["M32date"]->format("D j M H:i");?></td>
            <td><?php echo $_SESSION["TeamD4"];?></td>
            <td><?php echo $_SESSION[‘SMatch32Score1’];?></td>
            <td><?php echo $_SESSION[‘SMatch32Score2’];?></td>
            <td><?php echo $_SESSION["TeamD1"];?></td>
            <td colspan=2>D</td>
        </tr>
        <tr>
            <td>33</td>
            <td><?php echo $_SESSION["M33date"]->format("D j M H:i");?></td>
            <td><?php echo $_SESSION["TeamF2"];?></td>
            <td><?php echo $_SESSION[‘SMatch33Score1’];?></td>
            <td><?php echo $_SESSION[‘SMatch33Score2’];?></td>
            <td><?php echo $_SESSION["TeamF3"];?></td>
            <td colspan=2>F</td>
        </tr>
        <tr>
            <td>34</td>
            <td><?php echo $_SESSION["M34date"]->format("D j M H:i");?></td>
            <td><?php echo $_SESSION["TeamF4"];?></td>
            <td><?php echo $_SESSION[‘SMatch34Score1’];?></td>
            <td><?php echo $_SESSION[‘SMatch34Score2’];?></td>
            <td><?php echo $_SESSION["TeamF1"];?></td>
            <td colspan=2>F</td>
        </tr>
        <tr>
            <td>35</td>
            <td><?php echo $_SESSION["M35date"]->format("D j M H:i");?></td>
            <td><?php echo $_SESSION["TeamE2"];?></td>
            <td><?php echo $_SESSION[‘SMatch35Score1’];?></td>
            <td><?php echo $_SESSION[‘SMatch35Score2’];?></td>
            <td><?php echo $_SESSION["TeamE3"];?></td>
            <td colspan=2>E</td>
        </tr> 
        <tr>
            <td>36</td>
            <td><?php echo $_SESSION["M36date"]->format("D j M H:i");?></td>
            <td><?php echo $_SESSION["TeamE4"];?></td>
            <td><?php echo $_SESSION[‘SMatch36Score1’];?></td>
            <td><?php echo $_SESSION[‘SMatch36Score2’];?></td>
            <td><?php echo $_SESSION["TeamE1"];?></td>
            <td colspan=2>E</td>
        </tr> 
    </table>   
    
    
        
        
        
        
    <table class="tableall2" width=100%>
        <tr>
            <td colspan=8>Group of 16</td>
        </tr>
        <tr>
            <td>No</td>
            <td>Date</td>
            <td>Team 1</td>
            <td colspan=2>Score</td>
            <td>Team 2</td>
            <td colspan=2>Pens</td>
        </tr>

   
        <tr>
            <td>37</td>
            <td><?php echo $_SESSION["M37date"]->format("D j M H:i");?></td>
            <td><?php echo $_SESSION["KTeam1611"];?></td>
            <td><?php echo $_SESSION[‘SMatch161Score1’];?></td>
            <td><?php echo $_SESSION[‘SMatch161Score2’];?></td>
            <td><?php echo $_SESSION["KTeam1612"];?></td>
            <td><?php echo $_SESSION[‘SMatch161Score1P’];?></td>
            <td><?php echo $_SESSION[‘SMatch161Score2P’];?></td>
        </tr>
        <tr>
            <td>38</td>
            <td><?php echo $_SESSION["M38date"]->format("D j M H:i");?></td>
            <td><?php echo $_SESSION["KTeam1621"];?></td>
            <td><?php echo $_SESSION[‘SMatch162Score1’];?></td>
            <td><?php echo $_SESSION[‘SMatch162Score2’];?></td>
            <td><?php echo $_SESSION["KTeam1622"];?></td>
            <td><?php echo $_SESSION[‘SMatch162Score1P’];?></td>
            <td><?php echo $_SESSION[‘SMatch162Score2P’];?></td>
        </tr>
        <tr>
            <td>39</td>
            <td><?php echo $_SESSION["M39date"]->format("D j M H:i");?></td>
            <td><?php echo $_SESSION["KTeam1631"];?></td>
            <td><?php echo $_SESSION[‘SMatch163Score1’];?></td>
            <td><?php echo $_SESSION[‘SMatch163Score2’];?></td>
            <td><?php echo $_SESSION["KTeam1632"];?></td>
            <td><?php echo $_SESSION[‘SMatch163Score1P’];?></td>
            <td><?php echo $_SESSION[‘SMatch163Score2P’];?></td>
        </tr>
        <tr>
            <td>40</td>
            <td><?php echo $_SESSION["M40date"]->format("D j M H:i");?></td>
            <td><?php echo $_SESSION["KTeam1641"];?></td>
            <td><?php echo $_SESSION[‘SMatch164Score1’];?></td>
            <td><?php echo $_SESSION[‘SMatch164Score2’];?></td>
            <td><?php echo $_SESSION["KTeam1642"];?></td>
            <td><?php echo $_SESSION[‘SMatch164Score1P’];?></td>
            <td><?php echo $_SESSION[‘SMatch164Score2P’];?></td>
        </tr>
        <tr>
            <td>41</td>
            <td><?php echo $_SESSION["M41date"]->format("D j M H:i");?></td>
            <td><?php echo $_SESSION["KTeam1651"];?></td>
            <td><?php echo $_SESSION[‘SMatch165Score1’];?></td>
            <td><?php echo $_SESSION[‘SMatch165Score2’];?></td>
            <td><?php echo $_SESSION["KTeam1652"];?></td>
            <td><?php echo $_SESSION[‘SMatch165Score1P’];?></td>
            <td><?php echo $_SESSION[‘SMatch165Score2P’];?></td>
        </tr>
        <tr>
            <td>42</td>
            <td><?php echo $_SESSION["M42date"]->format("D j M H:i");?></td>
            <td><?php echo $_SESSION["KTeam1661"];?></td>
            <td><?php echo $_SESSION[‘SMatch166Score1’];?></td>
            <td><?php echo $_SESSION[‘SMatch166Score2’];?></td>
            <td><?php echo $_SESSION["KTeam1662"];?></td>
            <td><?php echo $_SESSION[‘SMatch166Score1P’];?></td>
            <td><?php echo $_SESSION[‘SMatch166Score2P’];?></td>
        </tr>
        <tr>
            <td>43</td>
            <td><?php echo $_SESSION["M43date"]->format("D j M H:i");?></td>
            <td><?php echo $_SESSION["KTeam1671"];?></td>
            <td><?php echo $_SESSION[‘SMatch167Score1’];?></td>
            <td><?php echo $_SESSION[‘SMatch167Score2’];?></td>
            <td><?php echo $_SESSION["KTeam1672"];?></td>
            <td><?php echo $_SESSION[‘SMatch167Score1P’];?></td>
            <td><?php echo $_SESSION[‘SMatch167Score2P’];?></td>
        </tr>
        <tr>
            <td>44</td>
            <td><?php echo $_SESSION["M44date"]->format("D j M H:i");?></td>
            <td><?php echo $_SESSION["KTeam1681"];?></td>
            <td><?php echo $_SESSION[‘SMatch168Score1’];?></td>
            <td><?php echo $_SESSION[‘SMatch168Score2’];?></td>
            <td><?php echo $_SESSION["KTeam1682"];?></td>
            <td><?php echo $_SESSION[‘SMatch168Score1P’];?></td>
            <td><?php echo $_SESSION[‘SMatch168Score2P’];?></td>
        </tr>
    </table>
    <table class="tableall3" width=100%>

        <tr>
            <td colspan=8>Quarter Finals</td>
            
        </tr>
                <tr>
            <td>No</td>
            <td>Date</td>
            <td>Team 1</td>
            <td colspan=2>Score</td>
            <td>Team 2</td>
            <td colspan=2>Pens</td>
        </tr>
        <tr>
            <td>45</td>
            <td><?php echo $_SESSION["M45date"]->format("D j M H:i");?></td>
            <td><?php echo $_SESSION["KTeam0811"];?></td>
            <td><?php echo $_SESSION[‘SMatch081Score1’];?></td>
            <td><?php echo $_SESSION[‘SMatch081Score2’];?></td>
            <td><?php echo $_SESSION["KTeam0812"];?></td>
            <td><?php echo $_SESSION[‘SMatch081Score1P’];?></td>
            <td><?php echo $_SESSION[‘SMatch081Score2P’];?></td>
        </tr>
        <tr>
            <td>46</td>
            <td><?php echo $_SESSION["M46date"]->format("D j M H:i");?></td>
            <td><?php echo $_SESSION["KTeam0821"];?></td>
            <td><?php echo $_SESSION[‘SMatch082Score1’];?></td>
            <td><?php echo $_SESSION[‘SMatch082Score2’];?></td>
            <td><?php echo $_SESSION["KTeam0822"];?></td>
            <td><?php echo $_SESSION[‘SMatch082Score1P’];?></td>
            <td><?php echo $_SESSION[‘SMatch082Score2P’];?></td>
        </tr>
        <tr>
            <td>47</td>
            <td><?php echo $_SESSION["M47date"]->format("D j M H:i");?></td>
            <td><?php echo $_SESSION["KTeam0831"];?></td>
            <td><?php echo $_SESSION[‘SMatch083Score1’];?></td>
            <td><?php echo $_SESSION[‘SMatch083Score2’];?></td>
            <td><?php echo $_SESSION["KTeam0832"];?></td>
            <td><?php echo $_SESSION[‘SMatch083Score1P’];?></td>
            <td><?php echo $_SESSION[‘SMatch083Score2P’];?></td>
        </tr>
        <tr>
            <td>48</td>
            <td><?php echo $_SESSION["M48date"]->format("D j M H:i");?></td>
            <td><?php echo $_SESSION["KTeam0841"];?></td>
            <td><?php echo $_SESSION[‘SMatch084Score1’];?></td>
            <td><?php echo $_SESSION[‘SMatch084Score2’];?></td>
            <td><?php echo $_SESSION["KTeam0842"];?></td>
            <td><?php echo $_SESSION[‘SMatch084Score1P’];?></td>
            <td><?php echo $_SESSION[‘SMatch084Score2P’];?></td>
        </tr>
    </table>
    <table class="tableall4" width=100%>
        

        <tr>
            <td colspan=8>Semi Finals</td>
        </tr>
           <tr>
            <td>No</td>
            <td>Date</td>
            <td>Team 1</td>
            <td colspan=2>Score</td>
            <td>Team 2</td>
            <td colspan=2>Pens</td>
        </tr>
        <tr>
            <td>49</td>
            <td><?php echo $_SESSION["M49date"]->format("D j M H:i");?></td>
            <td><?php echo $_SESSION["KTeam0411"];?></td>
            <td><?php echo $_SESSION[‘SMatch041Score1’];?></td>
            <td><?php echo $_SESSION[‘SMatch041Score2’];?></td>
            <td><?php echo $_SESSION["KTeam0412"];?></td>
            <td><?php echo $_SESSION[‘SMatch041Score1P’];?></td>
            <td><?php echo $_SESSION[‘SMatch041Score2P’];?></td>
        </tr>
        <tr>
            <td>50</td>
            <td><?php echo $_SESSION["M50date"]->format("D j M H:i");?></td>
            <td><?php echo $_SESSION["KTeam0421"];?></td>
            <td><?php echo $_SESSION[‘SMatch042Score1’];?></td>
            <td><?php echo $_SESSION[‘SMatch042Score2’];?></td>
            <td><?php echo $_SESSION["KTeam0422"];?></td>
            <td><?php echo $_SESSION[‘SMatch042Score1P’];?></td>
            <td><?php echo $_SESSION[‘SMatch042Score2P’];?></td>
        </tr>
        
    </table>
    
    <table class="tableall5" width=100%>
        <tr>
            <td colspan=8>Final</td>
        </tr>
           <tr>
            <td>No</td>
            <td>Date</td>
            <td>Team 1</td>
            <td colspan=2>Score</td>
            <td>Team 2</td>
            <td colspan=2>Pens</td>
        </tr>
        <tr>
            <td>51</td>
            <td><?php echo $_SESSION["M51date"]->format("D j M H:i");?></td>
            <td><?php echo $_SESSION["KTeam0211"];?></td>
            <td><?php echo $_SESSION[‘SMatch021Score1’];?></td>
            <td><?php echo $_SESSION[‘SMatch021Score2’];?></td>
            <td><?php echo $_SESSION["KTeam0212"];?></td>
            <td><?php echo $_SESSION[‘SMatch021Score1P’];?></td>
            <td><?php echo $_SESSION[‘SMatch021Score2P’];?></td>
        </tr>
        
        <tr>
            <td colspan=8><p></p><b><center>Your predicted winner is <?php echo $_SESSION["KTeam0111"]; ?></center></b><p></p></td>
        </tr>
        
        
    </table>
        
        
    </div> <!-- end of id="content" div-->
</div>
    
<script>


jQuery(document).ready(function () {

    //Open the menu
    jQuery("#hamburger").click(function () {

        jQuery('#content').css('min-height', jQuery(window).height());

        jQuery('nav').css('opacity', 1);

        //set the width of primary content container -> content should not scale while animating
        var contentWidth = jQuery('#content').width();

        //set the content with the width that it has originally
        jQuery('#content').css('width', contentWidth);

        //display a layer to disable clicking and scrolling on the content while menu is shown
        jQuery('#contentLayer').css('display', 'block');

        //disable all scrolling on mobile devices while menu is shown
        jQuery('#container').bind('touchmove', function (e) {
            e.preventDefault()
        });

        //set margin for the whole container with a jquery UI animation
        jQuery("#container").animate({"marginLeft": ["70%", 'easeOutExpo']}, {
            duration: 700
        });

    });

    //close the menu
    jQuery("#contentLayer").click(function () {

        //enable all scrolling on mobile devices when menu is closed
        jQuery('#container').unbind('touchmove');

        //set margin for the whole container back to original state with a jquery UI animation
        jQuery("#container").animate({"marginLeft": ["-1", 'easeOutExpo']}, {
            duration: 700,
            complete: function () {
                jQuery('#content').css('width', 'auto');
                jQuery('#contentLayer').css('display', 'none');
                jQuery('nav').css('opacity', 0);
                jQuery('#content').css('min-height', 'auto');

            }
        });
    });


 
});
</script> 
    
</body>
</html>
