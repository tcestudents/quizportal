<?php

include "dbconfig.php";
$con=OpenCon("questionbankdb");
$displayed_qn_number=0;

$typeselect = $_GET['typeSelect']; 
$onemark = $_GET['onemark'];
$twomark = $_GET['twomark'];
$fivemark = $_GET['fivemark'];
$fourmark = $_GET['fourmark'];
$tenmark = $_GET['tenmark'];

// echo "<h1>$typeselect</h1>";
$onemarkdb = 0;
$twomarkdb = 0;
$fourmarkdb = 0;
$fivemarkdb = 0;
$tenmarkdb = 0;

$total_qns=0;
if(isset($onemark)&&(!is_null($onemark))){
	$total_qns+=(int)$onemark;
	$onemarkdb = $onemark > 0 ? 1 : 0;
}if(isset($twomark)&&(!is_null($twomark))){
	$total_qns+=(int)$twomark;
	$twomarkdb = $twomark > 0 ? 1 : 0;
}if(isset($fourmark)&&(!is_null($fourmark))){
	$total_qns+=(int)$fourmark;
	$fourmarkdb = $fourmark > 0 ? 1 : 0;
}if(isset($fivemark)&&(!is_null($fivemark))){
	$total_qns+=(int)$fivemark;
	$fivemarkdb = $fivemark > 0 ? 1 : 0;
}if(isset($tenmark)&&(!is_null($tenmark))){
	$total_qns+=(int)$tenmark;
	$tenmarkdb = $tenmark > 0 ? 1 : 0;
}




$mcq_count=0;

$mcq_query="SELECT * FROM `mcq` WHERE `1m`= $onemarkdb OR `2m`= $twomarkdb OR `4m`= $fourmarkdb OR `5m`= $fivemarkdb OR `10m`= $tenmarkdb  ";
$mcq_result=mysqli_query($con,$mcq_query);

while($row = mysqli_fetch_array($mcq_result)){
	$mcq_qn[$mcq_count]['qid']=$row[0];
	$mcq_qn[$mcq_count]['Question']=$row[1];
	$mcq_qn[$mcq_count]['Option1']=$row[2];
	$mcq_qn[$mcq_count]['Option2']=$row[3];
	$mcq_qn[$mcq_count]['Option3']=$row[4];
	$mcq_qn[$mcq_count]['Option4']=$row[5];
	$mcq_qn[$mcq_count]['Option5']=$row[6];
	$mcq_qn[$mcq_count]['Correct Answer']=$row[7];
	$mcq_qn[$mcq_count]['Level']=$row[8];
	$mcq_qn[$mcq_count]['Complexity']=$row[9];
	$mcq_qn[$mcq_count]['1m']=$row[10];
	$mcq_qn[$mcq_count]['2m']=$row[11];
	$mcq_qn[$mcq_count]['4m']=$row[12];
	$mcq_qn[$mcq_count]['5m']=$row[13];
	$mcq_qn[$mcq_count]['10m']=$row[14];
	$mcq_qn[$mcq_count]['done']=0;
    $mcq_count+=1;
}
shuffle($mcq_qn);
// print_r($mcq_qn);

$mcq_qn_set=$mcq_qn;



    

    





echo "<div class=\"modal-body\">";

echo "<table id=\"fchoice\" name=\"fchoice\"><tr>";   

echo "<th class=\"col-md-5\">Question</th><th class=\"col-md-2\">Level</th><th class=\"col-md-2\">Complexity</th><th class=\"col-md-1\">Mark</th><th class=\"col-md-1\">Type</th><th class=\"col-md-1\">Choice</th></tr>";

echo "<tr>";



$displayone=0;
$displaytwo=0;
$displayfour=0;
$displayfive=0;
$displayten=0;

$total_qns_counter=$total_qns;

for ($i=0;$i<sizeof($mcq_qn);$i++){


if((!is_null($onemark))&&($displayone<(int)$onemark)&&($mcq_qn[$i]['1m']==1)){

echo "<td class=\"col-md-5\">".$mcq_qn[$i]['Question']."</td>";
echo "<td class=\"col-md-5\">".$mcq_qn[$i]['Level']."</td>";
echo "<td class=\"col-md-5\">".$mcq_qn[$i]['Complexity']."</td>";
echo "<td class=\"col-md-5\">1m </td>";
echo "<td class=\"col-md-1\">MCQ</td>";
echo "<td class=\"col-md-1\"><input type=\"checkbox\" id=\"check\"></td>";
echo "</tr>";
$displayone++;
$displayed_qn_number++;
}


if((!is_null($twomark))&&($displaytwo<(int)$twomark)&&($mcq_qn[$i]['2m']==1)){

echo "<td class=\"col-md-5\">".$mcq_qn[$i]['Question']."</td>";
echo "<td class=\"col-md-5\">".$mcq_qn[$i]['Level']."</td>";
echo "<td class=\"col-md-5\">".$mcq_qn[$i]['Complexity']."</td>";
echo "<td class=\"col-md-5\">2m</td>";
echo "<td class=\"col-md-1\">MCQ</td>";
echo "<td class=\"col-md-1\"><input type=\"checkbox\" id=\"check\"></td>";
echo "</tr>";
$displaytwo++;
$displayed_qn_number++;
}

if((!is_null($fourmark))&&($displayfour<(int)$fourmark)&&($mcq_qn[$i]['4m']==1)){

echo "<td class=\"col-md-5\">".$mcq_qn[$i]['Question']."</td>";
echo "<td class=\"col-md-5\">".$mcq_qn[$i]['Level']."</td>";
echo "<td class=\"col-md-5\">".$mcq_qn[$i]['Complexity']."</td>";
echo "<td class=\"col-md-5\">4m</td>";
echo "<td class=\"col-md-1\">MCQ</td>";
echo "<td class=\"col-md-1\"><input type=\"checkbox\" id=\"check\"></td>";
echo "</tr>";
$displayfour++;
$displayed_qn_number++;
}

if((!is_null($fivemark))&&($displayfive<(int)$fivemark)&&($mcq_qn[$i]['5m']==1)){

echo "<td class=\"col-md-5\">".$mcq_qn[$i]['Question']."</td>";
echo "<td class=\"col-md-5\">".$mcq_qn[$i]['Level']."</td>";
echo "<td class=\"col-md-5\">".$mcq_qn[$i]['Complexity']."</td>";
echo "<td class=\"col-md-5\">5m</td>";
echo "<td class=\"col-md-1\">MCQ</td>";
echo "<td class=\"col-md-1\"><input type=\"checkbox\" id=\"check\"></td>";
echo "</tr>";
$displayfive++;
$displayed_qn_number++;
}

if((!is_null($tenmark))&&($displayten<(int)$tenmark)&&($mcq_qn[$i]['10m']==1)){

echo "<td class=\"col-md-5\">".$mcq_qn[$i]['Question']."</td>";
echo "<td class=\"col-md-5\">".$mcq_qn[$i]['Level']."</td>";
echo "<td class=\"col-md-5\">".$mcq_qn[$i]['Complexity']."</td>";
echo "<td class=\"col-md-5\">10m</td>";
echo "<td class=\"col-md-1\">MCQ</td>";
echo "<td class=\"col-md-1\"><input type=\"checkbox\" id=\"check\"></td>";
echo "</tr>";
$displayten++;
$displayed_qn_number++;
}








}


echo "</table></div>";
?>