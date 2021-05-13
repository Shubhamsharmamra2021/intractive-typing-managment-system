<?php

session_start();
require ('checkuser.php');

?>
<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>My Practice Texts Update - Gayatricomputers</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
        <script type="text/javascript">var_sf_startpt=(new Date()).getTime()</script>

 
	
	    <?php include "header.php";?>
    <h1>Hello <?php echo $_SESSION['unamee'];?></h1>
	<br />


 
 

 
	
	
	<br />

 
<div class="container-modified" style="background-color:#DC143C;">
</br></br></br>
	<div class="row" style="  -webkit-border-radius: 5px; border-radius: 5px;">
		
		
<div id="sidebar-md-lg" class="sidebar col-md-12 col-lg-2 visible-md visible-lg "  style="background-color:#DC143C;">


    <div class="list-group" style="font-size:15px;">
 
		<a href="tindex.php" class="list-group-item active" >&nbsp;<i class="fa fa-play"></i>&nbsp; <strong>All languages</strong></br><small>Take a Test</small>  </a>
        <a href="benglish.php" class="list-group-item "  >&nbsp;<i class="fa fa-forward"></i>&nbsp; <strong>English (English)</strong></br><small>Take a Test</small>  </a>
		<a href="hindiindex.php" class="list-group-item "  >&nbsp;<i class="fa fa-cogs"></i>&nbsp; <strong>Hindi (Mangal)</strong></br><small>Take a Test</small> </a>
		<a href="hindikindex.php" class="list-group-item "  >&nbsp;<i class="fa fa-users"></i>&nbsp; <strong>Hindi (kurtidev)</strong></br><small>Take a Test</small> </a>
		<a href="hindipindex.php" class="list-group-item "  >&nbsp;<i class="fa fa-trophy"></i>&nbsp; <strong>Hindi (police)</strong></br><small>Take a Test</small> </a>
        <a href="bigenerindex.php" class="list-group-item"  >&nbsp;<i style="margin-left:2px; margin-right:3px;" class="fa fa-file-text-o"></i>&nbsp; <strong>Beginner in English (English)</strong></br><small>Take a Test</small> </a>
        <a href="bhindim.php" class="list-group-item "  >&nbsp;<i class="fa fa-signal"></i>&nbsp; <strong>Beginner in Hindi (Mangal)</strong></br><small>Take a Test</small> </a>
		<a href="bhindik.php" class="list-group-item "  >&nbsp;<i class="fa fa-trophy"></i>&nbsp; <strong>Beginner in Hindi (kurtidev)</strong></br><small>Take a Test</small> </a>
        <a href="bhindip.php" class="list-group-item "  >&nbsp;<i style="margin-left:2px; margin-right:3px;" class="fa fa-file-text-o"></i>&nbsp; <strong>Beginner in Hindi (police)</strong></br><small>Take a Test</small> </a>
    </div>

	 
	
	
		<div class="list-group" id="activity-module">
 			<div id="children">
	  </div></div>
	
 </div>

<div id="sidebar-xs" class="sidebar col-xs-2 visible-xs" style="max-width: 50px;">

     
</div>

 		
		<div class="col-xs-10 col-sm-11 col-md-9 col-lg-10" style="background-color:#F5F5F7;" style="  -webkit-border-radius: 5px; border-radius: 5px;" id="main">

				
			
		
			
	

<div class="row main-layout" id="text-practice"  >
</br>
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="main-content"  style="background:none;">
		<div class="row" style="padding-bottom: 2px; border-bottom: 1px solid http://gcc.shivanjprogramming.tech/eee;">
 
			<div class="col-md-7 col-sm-18"><h2 style="  padding:30px 0px 20px 100px; border:none">Text Practice Mode</h2></div>
			<div class="col-md-4 col-sm-12">
									<div style="margin-top:7px; margin-left: 50px;" class="pull-left">Language filter:</div>
					<div style="margin-left:0px;" class="pull-left">
						<form method="post"  >
			 
	 			 <div class="form-group" >
						<select  name="language"     style="margin-bottom: 3px;">
							<option value="" >All languages</option>
							<option value="1" >English (English)</option>
                    		<option value="2" >Hindi (Mangal)</option>
							<option value="3" >Hindi (kurtidev)</option>
                    		<option value="4" >Hindi (police)</option>
							<option value="5" >Beginner in English (English)</option>
                    		<option value="6" >Beginner in Hindi (Mangal)</option>
							<option value="7" >Beginner in Hindi (kurtidev)</option>
                    		<option value="8" >Beginner in Hindi (police)</option>

							<option value="">&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;</option>
						
 	</select>
	 
	 </div>
	 <div class="form-group">
	  
 	 </div>
	 </form>
					</div>
							</div>
  
			<div class="col-md-5 col-sm-12 hidden-xs hidden-sm hidden-md">
			</div>
		</div>
		<ul class="nav nav-tabs" id="practice-mode-selection-menu" style="font-size: 1.2em; margin-top: 0px; margin-left:00px">
 			<li class=""><a href="hindiindex.php"><span class="glyphicon glyphicon-fire"></span> HINDI (MANGAL)</a></li>
			<li class=""><a href="tindex.php" style="padding-left: 20px; padding-right: 20px; margin-right: 40px;">TYPING-TEST</a></li>
			<li class="" style="padding-left: 0px;"><a href="bigenerindex.php"><span class="glyphicon glyphicon-edit"></span>ENGLISH TYPING</a></li>
			<li class="" style="padding-left: 0px;"><a href="hindikindex.php"><span class="glyphicon glyphicon-edit"></span>Hindi ( kurtidev )</a></li>
 			<li class="active" style="padding-left: 0px;"><a href="usertypingtext.php"><span class="glyphicon glyphicon-edit"></span>MYTypingText</a></li>

  <div class="form-group" style="margin-bottom:0 ; " style="margin-left:100px;">
							 
						</div>
 	    </ul>

		<div class="tab-content" style="min-height: 400px; border: 1px solid http://gcc.shivanjprogramming.tech/ddd; border-top: none; background:white; padding: 20px; padding-top:5px;">
			<div class="tab-pane " id="top1000">
				<i class="fa fa-spinner fa-spin" style="font-size: 5em; color: http://gcc.shivanjprogramming.tech/ADD6FF;"></i>
			</div>
			<div class="tab-pane active" id="text-practice-content">

			 

				

 
	<div id="text-selection-by-time">
		</div>

	<div class="table-responsive" id="sortable-table-wrap">

		<table class="table table-striped table-responsive">
			<thead>
				<tr>
					<th class="sort col-md-1 status" data-sort="status">State</th>
					<th class="star-col"></th>
					<th class="sort col-md-4" data-sort="title"><a href="/text-practice/new/sort:title/direction:asc">Title</a></th>
					<th class="col-md-2">
		
					</th>
					<th class="sort col-md-1">Rating</th>
					<th class="sort col-md-1" data-sort="textlength" style="width: 85px; min-width: 85px; max-width: 85px;"><a href="#">Textlength</a></th>
					<th class="sort col-md-1" data-sort="views"><div id="fav-star" class="fa fa-star "></div></th>
					<th class="sort col-md-1" data-sort="tests_taken">completed</th>
					<th class="sort col-md-1" data-sort="age"><a href="#">Age</a></th>
 					<th class="sort col-md-2" style="align:center;" ><a href="#">Operation</a></th>


				</tr>
			</thead>

	  		<tbody class="list">

				
<?php

include 'connection.php';
$limit = 10;  
if (isset($_GET["page"])) {
	$page  = $_GET["page"]; 
	} 
	else{ 
	$page=1;
	}  
$start_from = ($page-1) * $limit;  
 $uname = $_SESSION['unamee'];
$selectquery="select * from  usertest where username = '$uname' order by id desc LIMIT $start_from, $limit  ";
$query= mysqli_query($con,$selectquery);
$nums = mysqli_num_rows($query);
if (mysqli_num_rows($query)>0)
{
  while($res=mysqli_fetch_assoc($query)){
?>
				             	<tr onclick="location.href='type.php?id=<?php echo $res['id']; ?>'">
  
									<td class="status"><span class="label label-success">public</span></td>
									<td class="star-col"><span class="glyphicon glyphicon-star inactive"></span></td>
									<td class="title" colspan="2">
										<a href="type.php?id=<?php echo $res['id']; ?>"><?php echo $res['title']; ?></a> 
										<br><small class="text-muted">&quot;<?php $desc = $res['text'] ;
                                       $strcut=substr($desc,0,80);
                                       $desc=substr($strcut,0,strrpos($strcut, ' ')).'...';
                                       echo $desc;?></small>
									</td>
									<td class="rating"><div class="rating-symbol symbol symbol-empty" rel="tooltip" title="Rating visible after 3 or more votes" style="margin-left: 9px; margin-right: 5px; padding-right: 5px; margin-bottom: -5px; margin-top: -2px;"></div><br><small class="text-muted" style="padding-left: 4px; text-shadow:none">0 votes</small></td>
									<td class="textlength"><?php echo $res['words']; ?> words<br><small class="text-muted"><?php echo $res['characters']; ?> characters</small></td>
									<td class="views">0</td>
									<td class="tests_taken">7</td>
									<td class="age">Time:<?php echo date("H:i", strtotime($res['dates']));?><br><small class="text-muted">Date:<?php echo date("d.m.Y", strtotime($res['dates']));?></small></td>
                                    <td><a style="color:Green;" href="userupdate.php?id=<?php echo $res['id']; ?>">Update/Edit</a> </td>
									<td><a style="color:red;" href="userdelete.php?id=<?php echo $res['id']; ?>">Delete</a> </td>

								</tr> 
									
<?php } 
}   

 
 ?>                     
				</tbody>
		</table>
	</div>  
	<?php  

$result_db = mysqli_query($con,"SELECT COUNT(id) FROM typingtest"); 
$row_db = mysqli_fetch_row($result_db);  
$total_records = $row_db[0];  
$total_pages = ceil($total_records / $limit); 
/* echo  $total_pages; */
$pagLink = "<ul class='pagination'>
<li class='page-item'><a class='page-link' href='upde.php'>«</a></li>";  
for ($i=1; $i<=$total_pages; $i++) {
	$pagLink .= "<li class='page-item'><a class='page-link' href='upde.php?page=".$i."'>".$i."</a></li>";	
}
echo $pagLink . "</ul>";  
?>
 
			</div>
		</div>

	</div>
</div>


		</div>
	</div>
</div>
<br /><br /><br /> 
	<button style="margin-left: 200px;   position: relative; height: 60px; width: 400px; display: inline; line-height: 60px; border-radius: 30px; text-decoration: none; background-color: Green; color: #fff; font-size: 18px; font-weight: 500; text-transform: uppercase; letter-spacing: 1px; overflow: hidden; box-shadow: 0 4px 15px rgba(0,0,0,0.2);">
		              <a href="logout.php">logout</a></button>
<button style="margin-left: 200px;    position: relative;  height: 60px; width: 400px; display: inline; line-height: 60px; border-radius: 30px; text-decoration: none; background-color: Blue; color: #fff; font-size: 18px; font-weight: 500; text-transform: uppercase; letter-spacing: 1px; overflow: hidden; box-shadow: 0 4px 15px rgba(0,0,0,0.2);">
 <a href="createtext.php">CREATE POST</a></button>
 <br /><br /><br /> 

<?php include 'footer.php';?>        
		<!-- main JS
		============================================ -->		
        <script src="js/main.js"></script>
    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
	<!-- <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script> -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.10.2/jquery.min.js" crossorigin="anonymous"></script>
	 
 
        
</body>
</html>
