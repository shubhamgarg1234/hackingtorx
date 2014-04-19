<?php
?>
   <!-- center -->
   <div id="center">
   <h1>Contact Us</h1><hr>
   The easiest way to contact us is to use the form provided below. We will respond to you as quickly as we can.
   Feel free to say hi or send us any comments or suggestions you have...good or bad. 
   <br /><br /><br /><br />
   <div id="insidecenter">
   <form name="send message" method="post" action="sendmessage.php" onKeyUp="highlight(event)" onClick="highlight(event)" onsubmit="return formCheck(this);"  >
		   Name:<br />
		   <input type="text" name="name" size="25" maxlength="30" /><br /><br />
		   Email:<br />
		   <input type="text" name="myemail" size="25" maxlength="40" /><br /><br />
		   Topic:<br /><br />
		   <input type="radio" name="topic" />suggestion for Hackingtorx<br />
		   <input type="radio" name="topic" />Report a bug / error<br />
		   <input type="radio" name="topic" />Ask a question<br />
		   <input type="radio" name="topic" />Just to say hi<br />
		   <input type="radio" name="topic" />Anything else<br /><br />
		   Message:<br />
		   <textarea name="message" rows="10" cols="50"></textarea><br /><br />
		   <input type="submit" name="send" value="send" size="8" onClick="return checkmail(this.form.myemail)"/>
 	</form> 
  </div> 
   </div>

