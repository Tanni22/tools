<?php
echo 'hellow world';
$data=100;
echo $data;
$stringName="<br></br>CSE   IIUC";
echo $stringName;
$dataArray=array(18,12,4,5,7);
sort($dataArray);
for($index=0;$index<count($dataArray);$index++)
{
    echo '<br>'.$dataArray[$index];
}

?>
<from method="get" action="save.php">
<table>
<tr>
 <td>Name</td>
 <td>
    <input name="student name" placeholder="enter your name" id="studentname">
 </td>
</tr>
<tr>
 <td>roll</td>
 <td>
    <input name="roll" placeholder="enter your roll" id="roll">
 </td>
</tr>
<tr>
 <td></td>
 <td>
    <input type="submit" value="Save">
 </td>
</tr>
</table>
</from>

