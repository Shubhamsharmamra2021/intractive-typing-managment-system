<?php

include 'connection.php';
 $Id =$_GET['id'];
 $Id=mysqli_real_escape_string($con,$Id);
 $Id=htmlentities($Id);
 $sql="select * from typingtest where id=$Id";
 $res=mysqli_query($con,$sql);
 if(mysqli_num_rows($res)>0)
 {
      $row=mysqli_fetch_assoc($res);


 ?>
<?php   
         $shubh= str_replace(' ','`, `',$row['text'] ) ?>
 
<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>My Practice Texts - Gayatricomputers</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" type="text/css" media="screen, projection">
 	    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 

 

	 
 
	<?php include 'header.php'; ?>
 
   
<div class="container-modified" style="background-color:#DC143C;">
</br>
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

	 
	
	
		 
	
 </div>

 

 		
	<div class="col-xs-10 col-sm-11 col-md-9 col-lg-10" style="background-color:#F5F5F7;" style="  -webkit-border-radius: 5px; border-radius: 5px;" id="main">
        <div class="row main-layout" id="text-practice" style="padding-left:0px; padding-right:0px;">
	        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="main-content" style="background:none;">
		        <div class="row" style="padding-bottom: 2px; border-bottom: 1px solid #eee;">
                    
			        <div class="col-md-4 col-sm-12">
					</div>
			        <div class="col-md-5 col-sm-12 hidden-xs hidden-sm hidden-md">
			        </div>
		        </div>
		     <ul class="nav nav-tabs" id="practice-mode-selection-menu" style="font-size: 1.2em; margin-top: 20px;">
			      		<li class=""><a href=""><span class="glyphicon glyphicon-fire"></span> Repeate</a></li>
			<li class=""><a href="tindex.php" style="padding-left: 20px; padding-right: 20px; margin-right: 40px;">New</a></li>
			 
			    <li style="padding-left: 20px; padding-right: 40px;" class="pull-right ">WELCOME <span id="name" style="color:#DC143C; font-weight:600;">  </span></li>
	         </ul>

		        <div class="tab-content" style="min-height: 400px; border: 1px solid #ddd; border-top: none; background:white; padding: 20px; padding-top:5px;">
			        <div class="tab-pane " id="top1000">
				        <i class="fa fa-spinner fa-spin" style="font-size: 5em; color: #ADD6FF;"></i>
			        </div>
			        <div class="tab-pane active" id="text-practice-content">	
	                    <div class="row" style="padding-top:1em;">
                   	        <div class="col-md-8 col-sm-12 col-xs-12">
									  <h2 id="view-title" style=" text-transform: uppercase;">GYATRI COMPUTER CLASSES MORENA (MP) || ☺ || ༺•|✤आपकी सफलता हमारा ध्‍येय✤|•༻<?php echo  $row['title'];  ?> </h2>
									  </br>
                   	        	<p class="text-muted">
                                    <small>created time:<?php echo date("H:i", strtotime($row['dates']));?> Date:<?php echo date("d.m.Y", strtotime($row['dates']));?><a href="tindex.php">GayatriComputerClasses</a></small>
                   	         	</p>
							</div>
							   </br>
	                        <div class="col-md-4 col-sm-12 col-xs-12 unselectable" unselectable="yes" onselectstart="return false;" >
                                <div class="pull-right">
                                    <div class="favorite-container" id="favorite-container-hook" rel="tooltip" title="" style="margin-left: 0px; padding-left: 10px; text-align: center; border-left: 1px solid #ddd; height: 52px;">
                                        <div id="fav-star" class="fa fa-star "></div>
                                        <br /><span style="text-transform:uppercase;font-size:1.0em; color: #444;" id="fav-count">0</span><br /><br />
                                    </div>
                                </div>
                                <div class="pull-right">
                                    <div class="rating-container" id="rating-container-hook" rel="tooltip" title="" style="margin-left: 0px; padding-left: 5px; padding-right 5px; text-align: center;">
                                        <div class="rating-symbol symbol symbol-empty" style="margin-left: 9px; margin-right: 5px; padding-right: 5px; margin-bottom: -5px; margin-top: -2px;"></div>                <br /><span style="text-transform:uppercase;font-size:.8em">Rating</span><br /><br />
                                    </div>
                                </div>
                        
                                <div class="pull-right" style="text-align: right; border-right: 1px solid #ddd; padding-right: 10px;">
                                    <div style="margin-bottom: 2px;"><span style="text-transform:uppercase;font-size:1.2em;font-weight:bold;"><?php $word= str_word_count($shubh); echo $word;?></span><span style="text-transform:uppercase;font-size:.8em">words</span></div>
                                    <span style="text-transform:uppercase;font-size:1.2em;font-weight:bold;" class="completed-count">0</span> <span style="text-transform:uppercase;font-size:.8em">completed</span>
                                </div>
                            </div>
                        </div>
                        <div class="row" id="text-practice-view" data-text-id="245053">
                        	<span class="hidden" id="my-text-rating"></span>
                        	<span class="hidden" id="rating-average">0</span>
                        	<span class="hidden" id="rating-average-title">
							Rating visible after 3 or more votes	</span>
							</br>
                        	<div class="col-md-12">
                        		<div class="tdiff">
                        			<div class="row">
                        				<div id="tamora"class="col-md-2">
										<span style="font-size:40px;"   id="timemin"> 00</span>
										  <span style="font-size:50px;"  >:</span>
										  <span style="font-size:40px;"   id="time">00</span>                        				</div>
                        				 
                        			</div>
                                    	
									</br>
                                   
									   

                        	        </div>
                                    
                                        <strong style="   ">
                                        	<p id="testPreview"   style=" line-height: 25.8px;  background-color:#F8F8F8; font-family: Arial, 'Helvetica Neue', Helvetica, sans-serif;,  font-weight:300;     border:2px solid black; padding-left:10px; padding-top:10px; padding-botton:10px; font-size:23px;   ">
                                        		<div id="restOfTest"   hidden="hidden"></div>
                                        	</p>
                                        </strong>
                                        	<br>
                                        	<form id="inputForm" style="text-align: center;">
                                        		TYPE HERE <br>
												 <input style="   font-family: Arial, Times, serif;
												  font-weight:300px;  border-radius: 4px; font-size:25px;
												   padding:10px 60% 20px 40px ;" 
												   id="userInput" placeholder="Typing Here"
													type="text" name="userInput" autocomplete="off" 
													autocorrect="off" autocapitalize="off" spellcheck="false" 
													onkeypress="over(event);" onkeydown="ove(event);"  
													onkeyup="observeInput(event);" autofocus>
													 
											</form> </br>
<a name="result"></a>
 											        <div id="div1"  style="display:none; margin-left: 200px; margin-bottom: 50px; margin-top: 100px; font-size: 25px; font-weight: bold; align: center;" id="accuracyOutput">
											            <span style="font-weight: bold; font-size: 35px; color: green; " id="contrats"> </span> 
											            <span style="font-weight: bold; font-size: 35px; color: red; " id="names"></span></br></br> Your fineshed this text in   
											            <span style="font-weight: bold;" id="dtimemin">00</span>:<span style="font-weight: bold;" id="dtime">00</span> Minutes.</br></br>
											            <span style="font-weight: bold;" id="acuracy"></span>.</br></br>
											            You typed 
									                    <span style="font-weight: bold;" id="cnt"> 00   </span> correct keystrokes with
									                    <span style="font-weight: bold;" id="cn"> 00 </span> Correction.</br></br>
                        		                       The <span style="font-weight: bold;" id="wordsCorrect">00 </span> words (Net WPM) were correct   and
                        		                       <span style="font-weight: bold;" id="wordsWrong">00 </span> words were </br></br>incorrect   out of 

                         		                        <span style="font-weight: bold;" id="wordsSubmitted">00</span> words(Gross WPM).

														
														 <style>
														 
table {
  border-collapse: collapse;
  width: 70%;
}

th, td {
  text-align: center;
  padding: 8px;

}

tr:nth-child(even) {background-color: #cccccc;}
</style>
</br></br>														 <table style="  border: 1px solid black">
  <tr>
    <th>Time</th>
    <th>WPM</th>
	<th>CPS</th>
    <th>Accuracy</th>
  </tr>
  <tr>
    <td><span id="sdtim">00</span>:<span id="sdti">00</span></td>
	<td><span id="wpm"></span></td>
    <td ><span id="cps"></span></td>

    <td><span id="acura"></span>%</td>
  </tr>
  
</table>
</br></br>CPCT RESULT :<span  style="font-weight: bold; color:green;"> <span id="ff">00</span> Wpm.</span> 
</div>
<button style="margin-left: 25%; margin-bottom: 200px; margin-top: 100px; 
  position: relative;
   height: 60px;
  width: 40%;
  display: block;
  line-height: 60px;
  border-radius: 30px;
  text-decoration: none;
  background: linear-gradient(to left, #2D3E50 0%, #DC143C 100%);
  color: #fff;
  font-size: 18px;
  font-weight: 500;
  text-transform: uppercase;
  letter-spacing: 1px;
  overflow: hidden;
  box-shadow: 0 4px 15px rgba(0,0,0,0.2);"  id="btnDone" >Done</button>
 												<a href="/login.php#loginform"><button style="margin-left: 25%; margin-bottom: 200px; margin-top: 100px; 
  position: relative;
   height: 60px;
  width: 40%;
  display: none;
  line-height: 60px;
  border-radius: 30px;
  text-decoration: none;
  background: linear-gradient(to left, #2D3E50 0%, #DC143C 100%);
  color: #fff;
  font-size: 18px;
  font-weight: 500;
  text-transform: uppercase;
  letter-spacing: 1px;
  overflow: hidden;
  box-shadow: 0 4px 15px rgba(0,0,0,0.2);" id="bud"> Make your own Text  </button></a>
 </br></br></br></br></br>
			                                        <span  onkeyup="timesUp" ></span>
											        <div class="workspace" id="row1"> 	
                                               


									</div>
                                
								</div>
							</div>			
						</div>	
					</div>
				</div>	
			</div>	
		</div>
    </div>		 
	  

<?php include 'footer.php';?>

    <script type="text/javascript">





window.addEventListener("keydown",function(e){
	if(e.keyIdentifier=='U+000A'||e.keyIdentifier=='Enter'||e.keyCode==13){
		if(e.target.nodeName=='INPUT'&&e.target.type=='text'){
			e.preventDefault();
			return false;
		}
	}
},true);
       // ask user for name with popup prompt    
	   var count = 0;
    function over(event){
        var keycode = event.keyCode ? event.keyCode : event.which;
        if(keycode != 8   ){
          var totalkey =  $('#cnt').html(++count);
		 


        }    
 
    }

 var coun = 0;
    function ove(event){
        var key_code = event.keyCode ? event.keyCode : event.which;
        if(key_code == 8 ){
       var validkey = $('#cn').html(++coun);
        }    

    }        
</script>

 <script type="text/javascript">
//var name = prompt("Enter your name:", "Guest");
        
        // default name is 'Guest'
    	if (!name || name === ' ') {
    	   name = "Guest";	
    	}
    	
    	// strip tags
		 <?php   $name="name";  ?>
		 
 
		
 const TEST_LENGTH =  <?php echo $word?> ;
const CHARS_IN_ROW_ALLOWED =  80;
const Name= <?php echo  $name  ?>;
 
 const keystroke=0;
const totalkey=0;
 
const CUR_WORD_COLOR = "yellow";

 
  
document.getElementById("name").innerHTML = Name;
document.getElementById("names").innerHTML = Name;

 
 generateTest(document.getElementById("restOfTest"), formTestArray(TEST_LENGTH));

 document.getElementById("userInput").addEventListener("input", startTimer);

//I don't like having these here, but I didn't know what else to do
var dispWordNumber = 1;
var userWordNumber = 1;
var wordsSubmitted = 0;
var wordsCorrect = 0;
generateDisplayRow();
generateDisplayRow();
generateDisplayRow();
generateDisplayRow();
generateDisplayRow();
 generateDisplayRow();
generateDisplayRow();
formatTestPreview();
  function observeInput(event){
	var charTyped = String.fromCharCode(event.keyCode);
 
	if (charTyped == ' '  ){
		wordEntered();

	} else{
		
 
		formatCurWord();
	}
}
const playtipe = () => {
	  let date = new Date();
		startTime = date.getTime();
}
btnDone.addEventListener("click", function(){
    
		timesUp(startTime);
		



});
//I remove the event listener, because if I didn't, then I'd be starting this timer a bunch of times. And if I started the timer 5 times, then it would run out 5 times too fast. It was a weird bug and I didn't get why my timer started zooming towards 0 after a few inputs.
function startTimer(){

	document.getElementById("userInput").removeEventListener("input", startTimer);
	playtipe();
	var clock = setInterval(function() {    
		var time = document.getElementById("time");
		var timemin = document.getElementById("timemin");
    	// take one second more
	 
		time.innerHTML++;
         if(time.innerHTML > 59){
		  timemin.innerHTML++;
		  time.innerHTML=0;
 } 
    	// When the countdown is over...
    	if (timemin.innerHTML == "16") {
    	    clearInterval(clock);
    	    document.getElementById("timemin").innerHTML = "timeover";
    	    alert(timesUp());
    	}
	}, 1000);
}

//I've created a span with an ID relative to its position in the test for each word. Now that I have this, all I have to do is display them and check to see if the user types something matching
function generateTest(domObject, testArray){

	for(let i = 0; i < testArray.length; i++){
		
		let word = document.createTextNode(testArray[i]);
		let span = document.createElement("span");
		span.setAttribute("id", "word " + (i+1));
		span.appendChild(word);
		domObject.appendChild(span);
	}
}

function generateDisplayRow(){
	let charsInRow = 0;
	let row = document.createElement("div");

	while (charsInRow < CHARS_IN_ROW_ALLOWED){
		let span = document.getElementById("word " + (dispWordNumber++));	//I'm taking advantage of global variables here, we never leave dispWordNumber's scope. This kinda feels weird, but it works, I guess?
		row.appendChild(span);
		row.appendChild(document.createTextNode(" "));	//formatting
		row.style.padding="2px 2px 4px 3px";
		row.style.fontWeight = 300;

		charsInRow += span.innerHTML.length + 1;
	}
	document.getElementById("testPreview").appendChild(row);
}

function wordEntered(){
	let userBlock = document.getElementById("userInput");
	let userWord = userBlock.value.substring(0, userBlock.value.indexOf(" "));	//discard the space, get only the raw word
	userBlock.value = "";	//clear their typing, making it look like we took/accepted their input. Now let's process it


	var targetBlock = document.getElementById("word " + (userWordNumber++));	//keep track of the word we're on (globally)
	var targetWord = targetBlock.innerHTML;
	document.getElementById("wordsSubmitted").innerHTML++;
        

	if(userWord === targetWord){
		document.getElementById("wordsCorrect").innerHTML++;
	
		formatOldWord(true);
	} else {
		formatOldWord(false);
	}
	formatTestPreview();
}

function formatTestPreview(){
	
	var testPreview = document.getElementById("testPreview");
	var lastRow = testPreview.lastChild;
	var newRowWord = lastRow.firstChild;	//if this is the current word, then we are on a new line!
	var curWord = document.getElementById("word " + (userWordNumber));

	if (newRowWord == curWord){	//if we're on the last row, then stop displaying the first row and generate a new one
		testPreview.removeChild(lastRow.previousSibling);
		generateDisplayRow();
 	}

	formatNewWord();
}

function formatNewWord(){
	var curWord = document.getElementById("word " + (userWordNumber));
	curWord.style.fontWeight = 300;
    
	curWord.style.backgroundColor = CUR_WORD_COLOR;
}

function formatCurWord(){
	let curBlock = document.getElementById("userInput")
	let curWord = curBlock.value.substring(0, curBlock.value.length);

	var targetBlock = document.getElementById("word " + (userWordNumber));
	var targetWord = targetBlock.innerHTML;

	if(curWord == targetWord.substring(0,curWord.length)) {
		targetBlock.style.backgroundColor = CUR_WORD_COLOR;
	} else {
		if (curBlock.value.substring(curBlock.value.length-1) != " "){	//uncertain as to why we enter this function even with " " as the most recently typed key, but this fixes the highlight sometimes flashing red when "entering" words
			targetBlock.style.backgroundColor = "red";
		}
	}
}

function formatOldWord(correctly){
	var oldWord = document.getElementById("word " + (userWordNumber-1));
	oldWord.style.color = correctly?"green":"red";
	oldWord.style.fontWeight = 300;
 
	oldWord.style.backgroundColor = "transparent";
}

function timesUp(){

	var inputBox = document.getElementById("userInput");
	inputBox.value="";
	inputBox.disabled="disabled";
	$("#btnDone").hide();
	$("#tamora").hide();
	$("#bud").show();

	 
	    let date = new Date();
		endTime = date.getTime();
		let totalTime =((endTime-startTime)/60000);

 	var wordsCorrect = document.getElementById("wordsCorrect").innerHTML;
	var wordsSubmitted = document.getElementById("wordsSubmitted").innerHTML;
	var percentAccuracy = (100*(wordsCorrect/wordsSubmitted)).toFixed(2);
	var wordW = (wordsSubmitted-wordsCorrect) ;

		var totalkey = document.getElementById("cnt").innerHTML;
		var totalbk = document.getElementById("cn").innerHTML;
// 		var cps =  $('#cps').html((count/TIME).toFixed(2));
// 		  var cps =  $('#ff').html(((count/5)/TIM).toFixed(0));
 // console.log(totalTime);
var cps=(((totalkey-totalbk)/(totalTime*60)).toFixed(2));
 var ff=((((totalkey-totalbk - wordW*3)/5)/totalTime).toFixed(0));
    document.getElementById("cps").innerHTML = cps;
	 	document.getElementById("wpm").innerHTML = ff;

		var timemin = document.getElementById("timemin").innerHTML;
		var time = document.getElementById("time").innerHTML;
		document.getElementById("dtimemin").innerHTML = timemin;
 	document.getElementById("dtime").innerHTML = time;
	 document.getElementById("sdtim").innerHTML = timemin;
 	document.getElementById("sdti").innerHTML = time;


	var wpm =  (wordsCorrect/totalTime).toFixed(0);
	var congrats = "Congratulations!"
	var return1 = " You typed " + wordsCorrect + " words correctly out of " + wordsSubmitted+ ".";
	var return2 = "That's " + ff + " words per minute at " + percentAccuracy + " % accuracy";
	document.getElementById("contrats").innerHTML = congrats;
 	document.getElementById("acuracy").innerHTML = return2;
      	document.getElementById("ff").innerHTML = wpm;

	document.getElementById("acura").innerHTML = percentAccuracy;
	document.getElementById("wordsWrong").innerHTML = wordW;
    $("#div1").show();
	<?php   $wcorect="congrats";  ?>
	<?php   $wsubmit="return1";  ?>
	<?php   $npaccu="return2";  ?>
	var divResults = document.getElementById("div").innerHTML;		// Create a <div> element
	document.body.appendChild(divResults);
	
	var para = document.createElement("p")
	var text1 = document.createTextNode(return1 + '\n');	// Create a text node
	var text2 = document.createTextNode(return2);			// Create a text node
	para.appendChild(text1);
	para.appendChild(text2);

	divResults.appendChild(para);

	return (congrats + '\n' + return1 + '\n' + return2);
}

function formTestArray(numWords){

    var top1000MostCommonEnglishWords = [`<?php   echo $shubh; ?>`  ];
    var returnMe = []; 

	for(let i = 0; i < numWords; i++){
		let randInt = Math.floor( i);
		returnMe.push(top1000MostCommonEnglishWords[randInt]);
	}

	return returnMe;
}

</script>
 
  <?php }
  
  ?>
        
</body>
</html>
