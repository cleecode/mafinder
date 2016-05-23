<?php include("includes/header.php");?> 
<?php include("includes/nav-projects.php");?>
<?php include("data.php");?>



<section id="letter">

<!-- ------------------------------------------------ -->
Hello!
<br><br>
My name is Christopher Lee and I am a <?php echo $role;?> with more than <?php echo $experience;?> of experience and am very interested in the <?php echo $position;?> position at <?php echo $company;?>! I am currently in the process of relocating to the Seattle area and will have time available to meet in person in the next several weeks. I have had the chance to work with startups to large organizations and believe that I have the experience you are looking for.
<br><br>




<!-- CHOOSE TYPE HERE -->
<!--
<?php echo $marketing1;?>
<?php echo $data1;?>
-->

<?php echo $webdesign2;?>
 
<br>
<!--
My experience in <?php echo $relexp1;?> and <?php echo $relexp2;?> aligns with your goals of <?php echo $relgoal1;?>.
<br><br>

-->

<br>
<?php echo $webdesign1;?>


<br><br>
I look forward to hearing back from you soon and can be reached by email or phone at 503-610-0930!
<br><br>
Best,
<br><br>
Christopher
</section>

<section id="search">
<?php

$excludewords = array('that','have','with','this','your','will','they','from','when','then','than','into', 'and', 'a', 'to', 'for', 'of', 'the', 'in', 'or', 'on', 'as', 'is' , 'our');
$replace = array_fill_keys($excludewords, '');


$textcount = file_get_contents('job.txt'); // 
$textcount = implode(" ", array_diff(explode(" ", $textcount), $excludewords));
$words = array_count_values(str_word_count($textcount, 1));
//print_r($words);
arsort($words);
print "<pre>";
print_r($words);
print "</pre>";

?>

</section>
<?php include("includes/footer.php");?>




