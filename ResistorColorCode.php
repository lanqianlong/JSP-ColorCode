<?php include_once('../refam/include/common.inc.php');?>
<?php include_once('../refam/include/db.inc.php'); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html><head>
	<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
	<!-- #BeginEditable "doctitle" -->
	<title>TSU VR-Lab - Resistor Color Code experiment</title>
	<link rel="icon" href="../images/VR-Lab.ico" type="image/x-icon" />
	<!-- #EndEditable -->
	<?php include '../refam/include/format.php'; ?>
</head>

<body onload="showInitialStatus()">
	<?php include '../refam/include/header.php'; ?>
	<?php include '../refam/include/nav.php'; ?>
	<div id="page_content" align="center">
		<h2 style="width: 446px"> VR-Lab: Resistor Color Code</h2>
		<div>

<script type="text/javascript" language="javascript" src="ColorCode.js">

</script>
<p> <!-- four Selection for Color Code.-->
    &nbsp;
    <select id="ColorBends_1" name="ColorBends_1" size="1" onchange="resetPIC(1,getOptionValue(1))">
        <option value="0">Black</option>
        <option value="1">Brown</option>
        <option value="2">Red</option>
        <option value="3">Orange</option>
        <option value="4">Yellow</option>
        <option value="5">Green</option>
        <option value="6">Blue</option>
        <option value="7">Purple</option>
        <option value="8">Gray</option>
        <option value="9">White</option>
    </select>
    <select id="ColorBends_2" name="ColorBends_2" size="1" onchange="resetPIC(2,getOptionValue(2))">
        <option value="0">Black</option>
        <option value="1">Brown</option>
        <option value="2">Red</option>
        <option value="3">Orange</option>
        <option value="4">Yellow</option>
        <option value="5">Green</option>
        <option value="6">Blue</option>
        <option value="7">Purple</option>
        <option value="8">Gray</option>
        <option value="9">White</option>
    </select>
    <select id="ColorBends_3" name="ColorBends_3" size="1" onchange="resetPIC(3,getOptionValue(3))">
        <option value="0">Black</option>
        <option value="1">Brown</option>
        <option value="2">Red</option>
        <option value="3">Orange</option>
        <option value="4">Yellow</option>
        <option value="5">Green</option>
        <option value="6">Blue</option>
        <option value="7">Purple</option>
        <option value="8">Gray</option>
        <option value="9">White</option>
        <option value="10">Gold</option>
        <option value="11">Silver</option>
    </select>
    <select id="ColorBends_4" name="ColorBends_4" size="1" onchange="resetPIC(4,getOptionValue(4))">
        <option value="0">Brown</option>
        <option value="1">Red</option>
        <option value="2">Green</option>
        <option value="3">Blue</option>
        <option value="4">Purple</option>
        <option value="5">Gold</option>
        <option value="6">Silver</option>
        <option value="7">None</option>
    </select>
</p>

<p>
    <span style="color:#a9a9a9;">
        <strong>
            &nbsp;
            Put your answer in the following boxes, click SUBMIT when you finish.
        </strong>
    </span>
</p>
<p>
    <span style="color:#000000;">
        <strong>
            &nbsp;
            Resistance Value:
            &nbsp;
            <input maxlength="8" id="Res_Value" name="Res_Value" size="8" type= text value="0" />
        </strong>
    </span>
    <select id="resUnit_Selection" name="resUnit_Selection" size="1">
       <option selected="selected" value="0">Ω</option>
        <option value="1">KΩ</option>
        <option value="2">MΩ</option>
    </select>
    &nbsp;
    <strong>
        Tolerance: ±
        <input maxlength="5" id="Tol_Value" name="Tol_Value" size="5" type="text" value="0" />
        %&nbsp;
    </strong>
</p>
<p><!-- Show the PIC -->
    &nbsp;
    <img id="Image_slef" src="resleft.gif" style="width: 127px; height: 182px; " /><img id="Image_No1" src="rBrown.gif" style="width: 21px; height: 182px; " /><img id="Image_No2" src="rBlack.gif" style="width: 21px; height: 182px; " /><img id="Image_No3" src="rBlack.gif" style="width: 21px; height: 182px; " /><img id="Image_None" src="rNone.gif" style="width: 21px; height: 182px; " /><img id="Image_No4" src="rGold.gif" style="width: 21px; height: 182px; " /><img id="Image_Resright" src="resright.gif" style="width: 138px; height: 182px; " />
</p>

<p>
    <strong>
        &nbsp;
        Quize Mode:
        &nbsp;
    </strong>

    <input id="Quiz_On" name="Quiz_On" type="radio" value="0" onclick="QuizOn_itemStateChanged()"/>
    On
    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
    <input id="Quiz_Off" name="Quiz_Off" type="radio" value="1" onclick="QuizOff_itemStateChanged()"/>
    Off

</p>
<p>
    &nbsp;
    <input id="ColorCode_Start" name="ColorCode_Start" type= button value="Start" onclick="startAction()" />
    &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;
    <input id="ColorCode_Submit" name="ColorCode_Submit" type= button value="Submit" onclick="submitAction()" />
    &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;
    <input id="ColorCode_Help" name="ColorCode_Help" type= button value="Help" onclick="HelpAction()" />
</p>
<p>
    &nbsp;
    Texas Southern University.
</p>

</div>
	</div>
	<!-- End Page Content -->
	<?php include '../refam/include/footer.php';?>
</body>
</html>