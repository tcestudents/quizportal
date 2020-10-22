<?php

include "dbconfig.php";
include "getQuestion.php";
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
	$onemark=(int)$onemark;
	$total_qns+=$onemark;
	$onemarkdb = $onemark > 0 ? 1 : 0;
}if(isset($twomark)&&(!is_null($twomark))){
	$twomark=(int)$twomark;
	$total_qns+=$twomark;
	$twomarkdb = $twomark > 0 ? 1 : 0;
}if(isset($fourmark)&&(!is_null($fourmark))){
	$fourmark=(int)$fourmark;
	$total_qns+=$fourmark;
	$fourmarkdb = $fourmark > 0 ? 1 : 0;
}if(isset($fivemark)&&(!is_null($fivemark))){
	$fivemark=(int)$fivemark;
	$total_qns+=$fivemark;
	$fivemarkdb = $fivemark > 0 ? 1 : 0;
}if(isset($tenmark)&&(!is_null($tenmark))){
	$tenmark=(int)$tenmark;
	$total_qns+=$tenmark;
	$tenmarkdb = $tenmark > 0 ? 1 : 0;
}

// accessing question class
$db = Array($onemarkdb,$twomarkdb,$fourmarkdb,$fivemarkdb,$tenmarkdb);
$Question1 = new Question();

$mcqQuestionbank=array();
$tfQuestionbank=array();
$saQuestionbank=array();
$matchQuestionbank=array();



if($typeselect[0]==1)
{
	//mcq questoin fetching
	$mcqQuestionbank = $Question1->setQuestion($con,$db);
	
}

if($typeselect[4]==1)
{
	$tfQuestionbank = $Question1->setTFQuestion($con,$db);	
}

if($typeselect[6]==1)
{
	$saQuestionbank = $Question1->setSAQuestion($con,$db);
}



$Questionbank= array_merge_recursive($mcqQuestionbank,$tfQuestionbank,$saQuestionbank,$matchQuestionbank);



echo "<div class=\"modal-body\">";
echo "<table id=\"fchoice\" name=\"fchoice\"><tr>";   
echo "<th class=\"col-md-5\">Question</th><th class=\"col-md-2\">Level</th><th class=\"col-md-2\">Complexity</th><th class=\"col-md-1\">Mark</th><th class=\"col-md-1\">Type</th><th class=\"col-md-1\">Choice</th></tr><tr>";
		

for($questionloop=0;$questionloop<=$total_qns;$questionloop++);{

if($onemark>0){
	$onemarkqn=$Questionbank['1mark'];
	shuffle($onemarkqn);
	for($i=0;$i<$onemark;$i++){
			
			if(sizeof($onemarkqn)>$i){
				echo "<tr><td class=\"col-md-5\">".$onemarkqn[$i]['Question']."</td>";
				echo "<td class=\"col-md-5\">".$onemarkqn[$i]['Level']."</td>";
				echo "<td class=\"col-md-5\">".$onemarkqn[$i]['Complexity']."</td>";
				echo "<td class=\"col-md-5\">1m </td>";
				echo "<td class=\"col-md-1\">".$onemarkqn[$i]['type']."</td>";
				echo "<td class=\"col-md-1\"><input type=\"checkbox\" id=\"check\"></td>";
				echo "</tr>";
			}else{
				echo "no enough question in DB for 1 mark<br>";
			}
			

	}

}



if($twomark>0){
	$twomarkqn=$Questionbank['2mark'];
	shuffle($twomarkqn);
	for($i=0;$i<$twomark;$i++){
		if(sizeof($twomarkqn)>$i){
			echo "<tr><td class=\"col-md-5\">".$twomarkqn[$i]['Question']."</td>";
			echo "<td class=\"col-md-5\">".$twomarkqn[$i]['Level']."</td>";
			echo "<td class=\"col-md-5\">".$twomarkqn[$i]['Complexity']."</td>";
			echo "<td class=\"col-md-5\">2m </td>";
			echo "<td class=\"col-md-1\">".$twomarkqn[$i]['type']."</td>";
			echo "<td class=\"col-md-1\"><input type=\"checkbox\" id=\"check\"></td>";
			echo "</tr>";
		}else{
				echo "no enough question in DB for 2 mark<br>";
		}
	}
}

if($fourmark>0){
	$fourmarkqn=$Questionbank['4mark'];
	shuffle($fourmarkqn);

	for($i=0;$i<$fourmark;$i++){
		if(sizeof($fourmarkqn)>$i){
			echo "<tr><td class=\"col-md-5\">".$fourmarkqn[$i]['Question']."</td>";
			echo "<td class=\"col-md-5\">".$fourmarkqn[$i]['Level']."</td>";
			echo "<td class=\"col-md-5\">".$fourmarkqn[$i]['Complexity']."</td>";
			echo "<td class=\"col-md-5\">4m </td>";
			echo "<td class=\"col-md-1\">".$fourmarkqn[$i]['type']."</td>";
			echo "<td class=\"col-md-1\"><input type=\"checkbox\" id=\"check\"></td>";
			echo "</tr>";
		}else{
			echo "no enough question in DB for 4 mark<br>";
		}
	}
}


if($fivemark>0){
	$fivemarkqn=$Questionbank['5mark'];
	shuffle($fivemarkqn);

	for($i=0;$i<$fivemark;$i++){
		if(sizeof($fivemarkqn)>$i){

			echo "<tr><td class=\"col-md-5\">".$fivemarkqn[$i]['Question']."</td>";
			echo "<td class=\"col-md-5\">".$fivemarkqn[$i]['Level']."</td>";
			echo "<td class=\"col-md-5\">".$fivemarkqn[$i]['Complexity']."</td>";
			echo "<td class=\"col-md-5\">5m </td>";
			echo "<td class=\"col-md-1\">".$fivemarkqn[$i]['type']."</td>";
			echo "<td class=\"col-md-1\"><input type=\"checkbox\" id=\"check\"></td>";
			echo "</tr>";
		}else{
			echo "no enough question in DB for 5 mark<br>";
		}
	}
}




if($tenmark>0){
	$tenmarkqn=$Questionbank['10mark'];
	shuffle($tenmarkqn);

	for($i=0;$i<$tenmark;$i++){
		if(sizeof($tenmarkqn)>$i){

			echo "<td class=\"col-md-5\">".$tenmarkqn[$i]['Question']."</td>";
			echo "<td class=\"col-md-5\">".$tenmarkqn[$i]['Level']."</td>";
			echo "<td class=\"col-md-5\">".$tenmarkqn[$i]['Complexity']."</td>";
			echo "<td class=\"col-md-5\">10m </td>";
			echo "<td class=\"col-md-1\">".$tenmarkqn[$i]['type']."</td>";
			echo "<td class=\"col-md-1\"><input type=\"checkbox\" id=\"check\"></td>";
			echo "</tr>";}
		else{
				echo "no enough question in DB for 10 mark<br>";
		}
	}
}}










echo "</table></div>";
?>