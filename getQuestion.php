<?php

/**
 * set one mark
 */
class Question 
{

	function setQuestion($con,$db)
	{

		$query = "SELECT * FROM mcq WHERE `1m`= $db[0] OR `2m`= $db[1] OR `4m`= $db[2] OR `5m`= $db[3] OR `10m`= $db[4]  ";

		$result=mysqli_query($con,$query);

		$question=array();
		$onemarkcount=0;
		$twomarkcount=0;
		$fourmarkcount=0;
		$fivemarkcount=0;
		$tenmarkcount=0;
		while($row = mysqli_fetch_array($result))
		{
				
						if(($db[0]==1)&&($row[10]==1)){
				$question['1mark'][$onemarkcount]['qid']=$row[0];
				$question['1mark'][$onemarkcount]['Question']=$row[1];
				$question['1mark'][$onemarkcount]['Option1']=$row[2];
				$question['1mark'][$onemarkcount]['Option2']=$row[3];
				$question['1mark'][$onemarkcount]['Option3']=$row[4];
				$question['1mark'][$onemarkcount]['Option4']=$row[5];
				$question['1mark'][$onemarkcount]['Option5']=$row[6];
				$question['1mark'][$onemarkcount]['Correct Answer']=$row[7];
				$question['1mark'][$onemarkcount]['Level']=$row[8];
				$question['1mark'][$onemarkcount]['Complexity']=$row[9];
				$question['1mark'][$onemarkcount]['1m']=$row[10];
				$question['1mark'][$onemarkcount]['2m']=$row[11];
				$question['1mark'][$onemarkcount]['4m']=$row[12];
				$question['1mark'][$onemarkcount]['5m']=$row[13];
				$question['1mark'][$onemarkcount]['10m']=$row[14];
				$question['1mark'][$onemarkcount]['type']="mcq";
				$question['1mark'][$onemarkcount]['done']=0;
				$onemarkcount++;
				}


			if(($db[1]==1)&&($row[11]==1)){
				$question['2mark'][$twomarkcount]['qid']=$row[0];
				$question['2mark'][$twomarkcount]['Question']=$row[1];
				$question['2mark'][$twomarkcount]['Option1']=$row[2];
				$question['2mark'][$twomarkcount]['Option2']=$row[3];
				$question['2mark'][$twomarkcount]['Option3']=$row[4];
				$question['2mark'][$twomarkcount]['Option4']=$row[5];
				$question['2mark'][$twomarkcount]['Option5']=$row[6];
				$question['2mark'][$twomarkcount]['Correct Answer']=$row[7];
				$question['2mark'][$twomarkcount]['Level']=$row[8];
				$question['2mark'][$twomarkcount]['Complexity']=$row[9];
				$question['2mark'][$twomarkcount]['1m']=$row[10];
				$question['2mark'][$twomarkcount]['2m']=$row[11];
				$question['2mark'][$twomarkcount]['4m']=$row[12];
				$question['2mark'][$twomarkcount]['5m']=$row[13];
				$question['2mark'][$twomarkcount]['10m']=$row[14];
				$question['2mark'][$twomarkcount]['type']="mcq";
				$question['2mark'][$twomarkcount]['done']=0;
				$twomarkcount++;
				}



			if(($db[2]==1)&&($row[12]==1)){
				$question['4mark'][$fourmarkcount]['qid']=$row[0];
				$question['4mark'][$fourmarkcount]['Question']=$row[1];
				$question['4mark'][$fourmarkcount]['Option1']=$row[2];
				$question['4mark'][$fourmarkcount]['Option2']=$row[3];
				$question['4mark'][$fourmarkcount]['Option3']=$row[4];
				$question['4mark'][$fourmarkcount]['Option4']=$row[5];
				$question['4mark'][$fourmarkcount]['Option5']=$row[6];
				$question['4mark'][$fourmarkcount]['Correct Answer']=$row[7];
				$question['4mark'][$fourmarkcount]['Level']=$row[8];
				$question['4mark'][$fourmarkcount]['Complexity']=$row[9];
				$question['4mark'][$fourmarkcount]['1m']=$row[10];
				$question['4mark'][$fourmarkcount]['2m']=$row[11];
				$question['4mark'][$fourmarkcount]['4m']=$row[12];
				$question['4mark'][$fourmarkcount]['5m']=$row[13];
				$question['4mark'][$fourmarkcount]['10m']=$row[14];
				$question['4mark'][$fourmarkcount]['type']="mcq";
				$question['4mark'][$fourmarkcount]['done']=0;
				$fourmarkcount++;
				}	


			if(($db[3]==1)&&($row[13]==1)){
				$question['5mark'][$fivemarkcount]['qid']=$row[0];
				$question['5mark'][$fivemarkcount]['Question']=$row[1];
				$question['5mark'][$fivemarkcount]['Option1']=$row[2];
				$question['5mark'][$fivemarkcount]['Option2']=$row[3];
				$question['5mark'][$fivemarkcount]['Option3']=$row[5];
				$question['5mark'][$fivemarkcount]['Option5']=$row[5];
				$question['5mark'][$fivemarkcount]['Option5']=$row[6];
				$question['5mark'][$fivemarkcount]['Correct Answer']=$row[7];
				$question['5mark'][$fivemarkcount]['Level']=$row[8];
				$question['5mark'][$fivemarkcount]['Complexity']=$row[9];
				$question['5mark'][$fivemarkcount]['1m']=$row[10];
				$question['5mark'][$fivemarkcount]['2m']=$row[11];
				$question['5mark'][$fivemarkcount]['5m']=$row[12];
				$question['5mark'][$fivemarkcount]['5m']=$row[13];
				$question['5mark'][$fivemarkcount]['10m']=$row[14];
				$question['5mark'][$fivemarkcount]['type']="mcq";
				$question['5mark'][$fivemarkcount]['done']=0;
				$fivemarkcount++;
				}

			if(($db[4]==1)&&($row[14]==1)){
				$question['10mark'][$tenmarkcount]['qid']=$row[0];
				$question['10mark'][$tenmarkcount]['Question']=$row[1];
				$question['10mark'][$tenmarkcount]['Option1']=$row[2];
				$question['10mark'][$tenmarkcount]['Option2']=$row[3];
				$question['10mark'][$tenmarkcount]['Option3']=$row[10];
				$question['10mark'][$tenmarkcount]['Option10']=$row[10];
				$question['10mark'][$tenmarkcount]['Option10']=$row[6];
				$question['10mark'][$tenmarkcount]['Correct Answer']=$row[7];
				$question['10mark'][$tenmarkcount]['Level']=$row[8];
				$question['10mark'][$tenmarkcount]['Complexity']=$row[9];
				$question['10mark'][$tenmarkcount]['1m']=$row[10];
				$question['10mark'][$tenmarkcount]['2m']=$row[11];
				$question['10mark'][$tenmarkcount]['10m']=$row[12];
				$question['10mark'][$tenmarkcount]['10m']=$row[13];
				$question['10mark'][$tenmarkcount]['10m']=$row[14];
				$question['10mark'][$tenmarkcount]['type']="mcq";
				$question['10mark'][$tenmarkcount]['done']=0;
				$tenmarkcount++;
			}
		}

		return $question;
	}

	function setTFQuestion($con,$db)
	{

		$query = "SELECT * FROM trufal WHERE `1m`= $db[0] OR `2m`= $db[1] OR `4m`= $db[2] OR `5m`= $db[3] OR `10m`= $db[4]";
		
		$result=mysqli_query($con,$query);
		$question=array();
		$onemarkcount=0;
		$twomarkcount=0;
		$fourmarkcount=0;
		$fivemarkcount=0;
		$tenmarkcount=0;
		while($row = mysqli_fetch_array($result))
		{	
			if(($db[0]==1)&&($row[5]==1)){
				$question['1mark'][$onemarkcount]['qid']=$row[0];
				$question['1mark'][$onemarkcount]['Question']=$row[1];
				$question['1mark'][$onemarkcount]['Answer']=$row[2];
				$question['1mark'][$onemarkcount]['Level']=$row[3];
				$question['1mark'][$onemarkcount]['Complexity']=$row[4];
				$question['1mark'][$onemarkcount]['1m']=$row[5];
				$question['1mark'][$onemarkcount]['2m']=$row[6];
				$question['1mark'][$onemarkcount]['4m']=$row[7];
				$question['1mark'][$onemarkcount]['5m']=$row[8];
				$question['1mark'][$onemarkcount]['10m']=$row[9];
				$question['1mark'][$onemarkcount]['type']="true/false";
				$question['1mark'][$onemarkcount]['done']=0;
				$onemarkcount++;
				}


			if(($db[1]==1)&&($row[6]==1)){
				$question['2mark'][$twomarkcount]['qid']=$row[0];
				$question['2mark'][$twomarkcount]['Question']=$row[1];
				$question['2mark'][$twomarkcount]['Answer']=$row[2];
				$question['2mark'][$twomarkcount]['Level']=$row[3];
				$question['2mark'][$twomarkcount]['Complexity']=$row[4];
				$question['2mark'][$twomarkcount]['1m']=$row[5];
				$question['2mark'][$twomarkcount]['2m']=$row[6];
				$question['2mark'][$twomarkcount]['4m']=$row[7];
				$question['2mark'][$twomarkcount]['5m']=$row[8];
				$question['2mark'][$twomarkcount]['10m']=$row[9];
				$question['2mark'][$twomarkcount]['type']="true/false";
				$question['2mark'][$twomarkcount]['done']=0;
				$twomarkcount++;
				}



			if(($db[2]==1)&&($row[7]==1)){
				$question['4mark'][$fourmarkcount]['qid']=$row[0];
				$question['4mark'][$fourmarkcount]['Question']=$row[1];
				$question['4mark'][$fourmarkcount]['Answer']=$row[2];
				$question['4mark'][$fourmarkcount]['Level']=$row[3];
				$question['4mark'][$fourmarkcount]['Complexity']=$row[4];
				$question['4mark'][$fourmarkcount]['1m']=$row[5];
				$question['4mark'][$fourmarkcount]['2m']=$row[6];
				$question['4mark'][$fourmarkcount]['4m']=$row[7];
				$question['4mark'][$fourmarkcount]['5m']=$row[8];
				$question['4mark'][$fourmarkcount]['10m']=$row[9];
				$question['4mark'][$fourmarkcount]['type']="true/false";
				$question['4mark'][$fourmarkcount]['done']=0;
				$fourmarkcount++;
				}	


			if(($db[3]==1)&&($row[8]==1)){
				$question['5mark'][$fivemarkcount]['qid']=$row[0];
				$question['5mark'][$fivemarkcount]['Question']=$row[1];
				$question['5mark'][$fivemarkcount]['Answer']=$row[2];
				$question['5mark'][$fivemarkcount]['Level']=$row[3];
				$question['5mark'][$fivemarkcount]['Complexity']=$row[4];
				$question['5mark'][$fivemarkcount]['1m']=$row[5];
				$question['5mark'][$fivemarkcount]['2m']=$row[6];
				$question['5mark'][$fivemarkcount]['5m']=$row[7];
				$question['5mark'][$fivemarkcount]['5m']=$row[8];
				$question['5mark'][$fivemarkcount]['10m']=$row[9];
				$question['5mark'][$fivemarkcount]['type']="true/false";
				$question['5mark'][$fivemarkcount]['done']=0;
				$fivemarkcount++;
				}

			if(($db[4]==1)&&($row[9]==1)){
				$question['10mark'][$tenmarkcount]['qid']=$row[0];
				$question['10mark'][$tenmarkcount]['Question']=$row[1];
				$question['10mark'][$tenmarkcount]['Answer']=$row[2];
				$question['10mark'][$tenmarkcount]['Level']=$row[3];
				$question['10mark'][$tenmarkcount]['Complexity']=$row[4];
				$question['10mark'][$tenmarkcount]['1m']=$row[5];
				$question['10mark'][$tenmarkcount]['2m']=$row[6];
				$question['10mark'][$tenmarkcount]['10m']=$row[7];
				$question['10mark'][$tenmarkcount]['10m']=$row[8];
				$question['10mark'][$tenmarkcount]['10m']=$row[9];
				$question['10mark'][$tenmarkcount]['type']="true/false";
				$question['10mark'][$tenmarkcount]['done']=0;
				$tenmarkcount++;
			}
		}
		return $question;
	//function setTFQuestion end
	}


		function setSAQuestion($con,$db)
	{

		$query = "SELECT * FROM short WHERE `1m`= $db[0] OR `2m`= $db[1] OR `4m`= $db[2] OR `5m`= $db[3] OR `10m`= $db[4]";
		
		$result=mysqli_query($con,$query);
		$question=array();
		$onemarkcount=0;
		$twomarkcount=0;
		$fourmarkcount=0;
		$fivemarkcount=0;
		$tenmarkcount=0;
		while($row = mysqli_fetch_array($result))
		{	
			if(($db[0]==1)&&($row[14]==1)){
				$question['1mark'][$onemarkcount]['qid']=$row[0];
				$question['1mark'][$onemarkcount]['Question']=$row[1];
				$question['1mark'][$onemarkcount]['answer1']=$row[2];
				$question['1mark'][$onemarkcount]['grade1']=$row[3];
				$question['1mark'][$onemarkcount]['answer2']=$row[4];
				$question['1mark'][$onemarkcount]['grade2']=$row[5];
				$question['1mark'][$onemarkcount]['answer3']=$row[6];
				$question['1mark'][$onemarkcount]['grade3']=$row[7];
				$question['1mark'][$onemarkcount]['answer4']=$row[8];
				$question['1mark'][$onemarkcount]['grade4']=$row[9];
				$question['1mark'][$onemarkcount]['answer5']=$row[10];
				$question['1mark'][$onemarkcount]['grade5']=$row[11];
				$question['1mark'][$onemarkcount]['Level']=$row[12];
				$question['1mark'][$onemarkcount]['Complexity']=$row[13];
				$question['1mark'][$onemarkcount]['1m']=$row[14];
				$question['1mark'][$onemarkcount]['2m']=$row[15];
				$question['1mark'][$onemarkcount]['4m']=$row[16];
				$question['1mark'][$onemarkcount]['5m']=$row[17];
				$question['1mark'][$onemarkcount]['10m']=$row[18];
				$question['1mark'][$onemarkcount]['type']="short answer";
				$question['1mark'][$onemarkcount]['done']=0;
				$onemarkcount++;
				}


			if(($db[1]==1)&&($row[15]==1)){
				$question['2mark'][$onemarkcount]['qid']=$row[0];
				$question['2mark'][$onemarkcount]['Question']=$row[1];
				$question['2mark'][$onemarkcount]['answer1']=$row[2];
				$question['2mark'][$onemarkcount]['grade1']=$row[3];
				$question['2mark'][$onemarkcount]['answer2']=$row[4];
				$question['2mark'][$onemarkcount]['grade2']=$row[5];
				$question['2mark'][$onemarkcount]['answer3']=$row[6];
				$question['2mark'][$onemarkcount]['grade3']=$row[7];
				$question['2mark'][$onemarkcount]['answer4']=$row[8];
				$question['2mark'][$onemarkcount]['grade4']=$row[9];
				$question['2mark'][$onemarkcount]['answer5']=$row[10];
				$question['2mark'][$onemarkcount]['grade5']=$row[11];
				$question['2mark'][$onemarkcount]['Level']=$row[12];
				$question['2mark'][$onemarkcount]['Complexity']=$row[13];
				$question['2mark'][$onemarkcount]['1m']=$row[14];
				$question['2mark'][$onemarkcount]['2m']=$row[15];
				$question['2mark'][$onemarkcount]['4m']=$row[16];
				$question['2mark'][$onemarkcount]['5m']=$row[17];
				$question['2mark'][$onemarkcount]['10m']=$row[18];
				$question['2mark'][$onemarkcount]['type']="short answer";
				$question['2mark'][$onemarkcount]['done']=0;
				$twomarkcount++;
				}



			if(($db[2]==1)&&($row[16]==1)){
				$question['4mark'][$onemarkcount]['qid']=$row[0];
				$question['4mark'][$onemarkcount]['Question']=$row[1];
				$question['4mark'][$onemarkcount]['answer1']=$row[2];
				$question['4mark'][$onemarkcount]['grade1']=$row[3];
				$question['4mark'][$onemarkcount]['answer2']=$row[4];
				$question['4mark'][$onemarkcount]['grade2']=$row[5];
				$question['4mark'][$onemarkcount]['answer3']=$row[6];
				$question['4mark'][$onemarkcount]['grade3']=$row[7];
				$question['4mark'][$onemarkcount]['answer4']=$row[8];
				$question['4mark'][$onemarkcount]['grade4']=$row[9];
				$question['4mark'][$onemarkcount]['answer5']=$row[10];
				$question['4mark'][$onemarkcount]['grade5']=$row[11];
				$question['4mark'][$onemarkcount]['Level']=$row[12];
				$question['4mark'][$onemarkcount]['Complexity']=$row[13];
				$question['4mark'][$onemarkcount]['1m']=$row[14];
				$question['4mark'][$onemarkcount]['2m']=$row[15];
				$question['4mark'][$onemarkcount]['4m']=$row[16];
				$question['4mark'][$onemarkcount]['5m']=$row[17];
				$question['4mark'][$onemarkcount]['10m']=$row[18];
				$question['4mark'][$onemarkcount]['type']="short answer";
				$question['4mark'][$onemarkcount]['done']=0;
				$fourmarkcount++;
				}	


			if(($db[3]==1)&&($row[8]==1)){
				$question['5mark'][$onemarkcount]['qid']=$row[0];
				$question['5mark'][$onemarkcount]['Question']=$row[1];
				$question['5mark'][$onemarkcount]['answer1']=$row[2];
				$question['5mark'][$onemarkcount]['grade1']=$row[3];
				$question['5mark'][$onemarkcount]['answer2']=$row[4];
				$question['5mark'][$onemarkcount]['grade2']=$row[5];
				$question['5mark'][$onemarkcount]['answer3']=$row[6];
				$question['5mark'][$onemarkcount]['grade3']=$row[7];
				$question['5mark'][$onemarkcount]['answer4']=$row[8];
				$question['5mark'][$onemarkcount]['grade4']=$row[9];
				$question['5mark'][$onemarkcount]['answer5']=$row[10];
				$question['5mark'][$onemarkcount]['grade5']=$row[11];
				$question['5mark'][$onemarkcount]['Level']=$row[12];
				$question['5mark'][$onemarkcount]['Complexity']=$row[13];
				$question['5mark'][$onemarkcount]['1m']=$row[14];
				$question['5mark'][$onemarkcount]['2m']=$row[15];
				$question['5mark'][$onemarkcount]['4m']=$row[16];
				$question['5mark'][$onemarkcount]['5m']=$row[17];
				$question['5mark'][$onemarkcount]['10m']=$row[18];
				$question['5mark'][$onemarkcount]['type']="short answer";
				$question['5mark'][$onemarkcount]['done']=0;
				$fivemarkcount++;
				}

			if(($db[4]==1)&&($row[9]==1)){
				$question['10mark'][$onemarkcount]['qid']=$row[0];
				$question['10mark'][$onemarkcount]['Question']=$row[1];
				$question['10mark'][$onemarkcount]['answer1']=$row[2];
				$question['10mark'][$onemarkcount]['grade1']=$row[3];
				$question['10mark'][$onemarkcount]['answer2']=$row[4];
				$question['10mark'][$onemarkcount]['grade2']=$row[5];
				$question['10mark'][$onemarkcount]['answer3']=$row[6];
				$question['10mark'][$onemarkcount]['grade3']=$row[7];
				$question['10mark'][$onemarkcount]['answer4']=$row[8];
				$question['10mark'][$onemarkcount]['grade4']=$row[9];
				$question['10mark'][$onemarkcount]['answer5']=$row[10];
				$question['10mark'][$onemarkcount]['grade5']=$row[11];
				$question['10mark'][$onemarkcount]['Level']=$row[12];
				$question['10mark'][$onemarkcount]['Complexity']=$row[13];
				$question['10mark'][$onemarkcount]['1m']=$row[14];
				$question['10mark'][$onemarkcount]['2m']=$row[15];
				$question['10mark'][$onemarkcount]['4m']=$row[16];
				$question['10mark'][$onemarkcount]['5m']=$row[17];
				$question['10mark'][$onemarkcount]['10m']=$row[18];
				$question['10mark'][$onemarkcount]['type']="short answer";
				$question['10mark'][$onemarkcount]['done']=0;
				$tenmarkcount++;
			}
		}
		return $question;
	//function setSAQuestion end
	}

	// function randomise($arr,){

	// 		$randomArray = [];
	// 		while (count($randomArray) < $k) {
	// 		$randomKey = mt_rand(0, count($array)-1);
	// 		$randomArray[$randomKey] = $array[$randomKey];
	// 		}


	// }

//class end
}
?>