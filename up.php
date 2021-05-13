<?php

session_start();
require ('check.php');

 
include ('connection.php'); 

	if(isset($_POST['submit']))
	{               
        $id = $_POST['id'];           
        $title = $_POST['datatitle'];
        $text = $_POST['datatext'];
		$langu = $_POST['datalan'];
 		$context = str_replace(" ",'\", \"', $_POST['datatext'] );

 		$char = strlen( $_POST['datatext']);
        $words = substr_count("$text"," ");
                                     	//updating the table
 $swl = mysqli_query($con, "UPDATE typingtest SET title='$title' , text='$text' , language='$langu' , converttext = '$context' , words = '$words' , characters =  '$char' WHERE id=$id");

 if ( $swl) {
	echo "Record updated successfully";
  } else {
	echo "Error updating record: " . mysqli_error($con);
  }
  					
					
	}					
	 
 
//getting id from url
$id = $_GET['id'];
 
//selecting data associated with this particular id
$result = mysqli_query($con, "SELECT * FROM typingtest WHERE id=$id");
 
while($res = mysqli_fetch_array($result))
{
    $title=$res['title'];
    $text=$res['text'];
    $lan=$res['language'];
 
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="ie6"> <![endif]-->
<!--[if IE 7]>         <html class="ie7"> <![endif]-->
<!--[if IE 8]>         <html class="ie8"> <![endif]-->
<!--[if gt IE 8]><!--> <html>         <!--<![endif]-->

<head>
	<script type="text/javascript">var_sf_startpt=(new Date()).getTime()</script>

	<title>Add a Text for typing practice - Text Practice Mode - Gy.com</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

	
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" type="text/css" media="screen, projection">
 
 
 			
	
<?php include "header.php" ;?>
      <h1>Hello <?php echo $_SESSION['uname'];?></h1>
	<br />

<div class="col-xs-10 col-sm-11 col-md-9 col-lg-10" id="main">
    <div class="row main-layout" id="text-practice">
    	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="main-content" style="background:none;">
    		<div class="row" style="padding-bottom: 2px; border-bottom: 1px solid #eee;">
    		<!--Text Practice is temporarily disabled, sorry for the inconvenience!-->
    
    			 
    			<div class="col-md-5 col-sm-12 hidden-xs hidden-sm hidden-md">
    			</div>
    		</div></div></div></div>
    	 
    </br></br></br></br>
    		<div class="tab-content" style="min-height: 400px; border: 1px solid #ddd; border-top: none; background:white; padding: 20px; padding-top:5px;">
    			<div class="tab-pane " id="top1000">
    				<i class="fa fa-spinner fa-spin" style="font-size: 5em; color: #ADD6FF;"></i>
    			</div>
    			<div class="tab-pane active" id="text-practice-content">
                    <h3>Create new text</h3>
                    <div class="row">
                        <div class="col-md-12">			    						
                        		<form method="post" action="up.php?id=<?php  echo $res['id']; ?>" class="form-horizontal" role="form" >
                        		    		
                        		    <div class="form-group">
                        			    <label for="" class="col-sm-2 control-label">Text title</label>
                        			        <div class="col-sm-10">
                        				        <div class="input text required">
                        						    <input name="datatitle" class="form-control" value="<?php echo $title; ?>" 
                        							maxlength="255" type="text" id="TextTitle" required="required"/>
                        						</div>			
                        					</div>
                        		    </div>
                        		
                        		    <div class="form-group">
                        		    	<label for="" class="col-sm-2 control-label">Your text</label>
                        		    	<div class="col-sm-10">
                        		    		<div class="input textarea required">
			    							    <textarea name="datatext" class="form-control" rows="20"  cols="30" id="TextText" required="required"><?php echo $text;?></textarea>
			    							</div>		
			    						</div>
                         		    </div>	
                        		    <div class="form-group">
                        		    	<label for="" class="col-sm-2 control-label">Text language</label>
                        		    	<div class="col-sm-10">
                        		    		<select name="datalan"   class="form-control"  >
 			    								<option value="1" <?php if($lan=="1"){echo "selected";} ?> >English (English)</option>
                        		    			<option value="2" <?php if($lan=="2"){echo "selected";} ?> >Hindi (Mangal)</option>
			    								<option value="3" <?php if($lan=="3"){echo "selected";} ?> >Hindi (kurtidev)</option>
                        		    			<option value="4" <?php if($lan=="4"){echo "selected";} ?> >Hindi (police)</option>
			    								<option value="5" <?php if($lan=="5"){echo "selected";} ?> >Beginner English (English)</option>
                        		    			<option value="6" <?php if($lan=="6"){echo "selected";} ?> >Beginner Hindi (Mangal)</option>
			    								<option value="7" <?php if($lan=="7"){echo "selected";} ?> >Beginner Hindi (kurtidev)</option>
                        		    			<option value="8" <?php if($lan=="8"){echo "selected";} ?> >Beginner Hindi (police)</option>
                                            </select>
                        		        </div>
			    					</div>	
			    					<div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-10">
                        				    <div  >  
			    							 	<input   name="id"   value="<?php echo $_GET['id']; ?>"/>
                        					</div>
                        	        <div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-10">
                        				    <div>  
											<button name="submit" style="margin-left: 200px;   position: relative; height: 60px; width: 400px; display: inline; line-height: 60px; border-radius: 30px; text-decoration: none; background-color: orange; color: #fff; font-size: 18px; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; overflow: hidden; box-shadow: 0 4px 15px rgba(0,0,0,0.2);">UPDATE</button>

                         					</div>
			    						</div>
			    					</div>		
                        		</form>	
			    				<?php } ?>	
                 	 	
                    	</div>
                    </div>
    	        </div>
            </div>
    	</div>
    </div>
</div>
<button style="margin-left: 200px;   position: relative; height: 60px; width: 400px; display: inline; line-height: 60px; border-radius: 30px; text-decoration: none; background-color: Green; color: #fff; font-size: 18px; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; overflow: hidden; box-shadow: 0 4px 15px rgba(0,0,0,0.2);"><a href="logout.php">logout</a></button>
<button style="margin-left: 200px;    position: relative;  height: 60px; width: 400px; display: inline; line-height: 60px; border-radius: 30px; text-decoration: none; background-color: Blue; color: #fff; font-size: 18px; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; overflow: hidden; box-shadow: 0 4px 15px rgba(0,0,0,0.2);"><a href="upde.php">POST UPDATE DELETE</a></button>
</br>
</br></br>	<div id="main-content-trenner"></div>
  
	  
	<?php include "footer.php" ;?>
      
</body>
</html>

