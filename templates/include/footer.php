      <!--<div id="footer">
       
      </div>
 
    </div>
	--->
   

<div>
<div id="form-main">
  <div id="form-div">
    <form class="form" id="form1">
      
      <p class="name">
        <input name="name" type="text" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" placeholder="Name" id="name" />
      </p>
      
      <p class="email">
        <input name="email" type="text" class="validate[required,custom[email]] feedback-input" id="email" placeholder="Email" />
      </p>
      
      <p class="text">
        <textarea name="text" class="validate[required,length[6,300]] feedback-input" id="comment" placeholder="Comment"></textarea>
      </p>
      
      
      <div class="submit">
        <input type="submit" value="SEND" id="button-blue"/>
        <div class="ease"></div>
      </div>
    </form>
  </div>
</div>
<div style="background:#3c3c3c;width:100%;height:433px">
<center>
<img  class='adalen'src="images/adalen.jpg" style='    margin-top: 30px;    border: 5px solid #ed1c24;;border-radius:50%;width:200px;height:200px'>
</br>
 	<ul class="social-icons icon-circle icon-zoom list-unstyled list-inline"> 
	      <li> <a href="http://facebook.com/adalenv" target="_blank"><i class="fa fa-facebook" ></i></a></li>
              <li><a href="https://github.com/adalenv"target="_blank"><i class="fa fa-github"></i></a> </li> 
	       <li> <a href="https://al.linkedin.com/in/adalen-vladi-272867110"target="_blank"><i class="fa fa-linkedin"></i></a> </li> 
              <li><a href="http://instagram.com/adalenv"><i class="fa fa-instagram"target="_blank"></i></a> </li>   
	    

	      
	  	</ul>
<hr width="420px" style="margin:30px;background:#FFC000">
<p style="color:white"> Designed & Developed by Adalen VLADI </p>
	 <p style="color:#FFC000">AlbSector 2016</p> 	
<style>
.adalen:hover{-webkit-transform: scale(1.1);
	-moz-transform: scale(1.1);
	-ms-transform: scale(1.1);
	-o-transform: scale(1.1);
	transform: scale(1.1);
	-webkit-transition: all 0.3s ease-in-out;
	-moz-transition: all 0.3s ease-in-out;
	-ms-transition: all 0.3s ease-in-out;
	-o-transition: all 0.3s ease-in-out;
	transition: all 0.3s ease-in-out;
 }
.social-icons .fa-instagram{background-color:#A1755C;}
.social-icons .fa-github,.social-icons .fa-github-alt,.social-icons .fa-github-square{background-color:#070709;}
.social-icons .fa-linkedin,.social-icons .fa-linkedin-square{background-color:#0085AE;} 
.social-icons .fa-facebook,.social-icons .fa-facebook-square{background-color:#3C599F;}  
.social-icons.icon-zoom .fa:hover, .social-icons.icon-zoom .fa:active { 
 	-webkit-transform: scale(1.1);
	-moz-transform: scale(1.1);
	-ms-transform: scale(1.1);
	-o-transform: scale(1.1);
	transform: scale(1.1); 
}
.list-unstyled {
	padding-left: 0;
	list-style: none;
}
.list-inline li {
	display: inline-block;
	padding-right: 5px;
	padding-left: 5px;
	margin-bottom: 10px;
}
/*---- Genral classes end -------*/

/*Change icons size here*/
.social-icons .fa {
	font-size: 1.8em;
}
/*Change icons circle size and color here*/
.social-icons .fa {
	width: 50px;
	height: 50px;
	line-height: 50px;
	text-align: center;
	color: #FFF;
	color: rgba(255, 255, 255, 0.8);
	-webkit-transition: all 0.3s ease-in-out;
	-moz-transition: all 0.3s ease-in-out;
	-ms-transition: all 0.3s ease-in-out;
	-o-transition: all 0.3s ease-in-out;
	transition: all 0.3s ease-in-out;
}

.social-icons.icon-circle .fa{ 
	border-radius: 50%;
}
.social-icons.icon-rounded .fa{
	border-radius:5px;
}
.social-icons.icon-flat .fa{
	border-radius: 0;
}

.social-icons .fa:hover, .social-icons .fa:active {
	color: #FFF;
	-webkit-box-shadow: 1px 1px 3px #333;
	-moz-box-shadow: 1px 1px 3px #333;
	box-shadow: 1px 1px 3px #333; 
}

</style>
</center>
</div>
<style>
@import url(http://fonts.googleapis.com/css?family=Montserrat:400,700);


#feedback-page{
	text-align:center;
}

#text-feedback{
	width: 80%;
	padding-left: 10%;
	padding-right: 10%;
	background-color:white;
	text-align:center;
}

#form-main{

	float:left;
	
}

#form-div {
	background-color:#3c3c3c;
	padding-left:35px;
	padding-right:35px;
	padding-top:35px;
	padding-bottom:50px;
	
       height:433px;

}

.feedback-input {
	opacity:0.9;
	color:#0493bd;
	font-family: 'Montserrat', Helvetica, Arial, sans-serif;
  font-weight:400;
	font-size: 18px;
	border-radius: 0;
	line-height: 22px;
	background-color: #fbfbfb;
  border: 3px solid #fbfbfb;
	padding: 13px 13px 13px 54px;
	margin-bottom: 10px;
	width:100%;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	-ms-box-sizing: border-box;
	box-sizing: border-box;
}

.feedback-input:focus{
	background: #fff;
	box-shadow: 0;
	border: 3px solid #3498db;
	color: #3498db;
	outline: none;
  padding: 13px 13px 13px 54px;
}

.focused{
	color:#30aed6;
	border:#30aed6 solid 3px;
}

/* Icons ---------------------------------- */
#name{
	background-image: url(http://rexkirby.com/kirbyandson/images/name.svg);
	background-size: 30px 30px;
	background-position: 11px 8px;
	background-repeat: no-repeat;
}

#name:focus{
	background-image: url(http://rexkirby.com/kirbyandson/images/name.svg);
	background-size: 30px 30px;
	background-position: 8px 5px;
  background-position: 11px 8px;
	background-repeat: no-repeat;
}

#email{
	background-image: url(http://rexkirby.com/kirbyandson/images/email.svg);
	background-size: 30px 30px;
	background-position: 11px 8px;
	background-repeat: no-repeat;
}

#email:focus{
	background-image: url(http://rexkirby.com/kirbyandson/images/email.svg);
	background-size: 30px 30px;
  background-position: 11px 8px;
	background-repeat: no-repeat;
}

#comment{
	background-image: url(http://rexkirby.com/kirbyandson/images/comment.svg);
	background-size: 30px 30px;
	background-position: 11px 8px;
	background-repeat: no-repeat;
}

textarea {
	width: 100%;
	height: 150px;
	line-height: 150%;
}

input:hover, textarea:hover,
input:focus, textarea:focus {
	background-color:white;
}

#button-blue{
	font-family: 'Montserrat', Helvetica, Arial,  sans-serif;
	float:left;
	width: 100%;
	border: #fbfbfb solid 4px;
	cursor:pointer;
	background-color: #ed1c24;
	color:white;
	font-size:24px;
	padding-top:22px;
	padding-bottom:22px;
	-webkit-transition: all 0.3s;
	-moz-transition: all 0.3s;
	transition: all 0.3s;
}

#button-blue:hover{
	background-color: rgba(0,0,0,0);
	color: #0493bd;
}
	
.submit:hover {
	color: #3498db;
}
	
.ease {
  border-top:3px #3c3c3c solid;
	width: 0px;
	height: 76px;
	background-color: #fbfbfb;
	-webkit-transition: .3s ease;
	-moz-transition: .3s ease;
	-o-transition: .3s ease;
	-ms-transition: .3s ease;
	transition: .3s ease;
}

.submit:hover .ease{
  width:100%;
  background-color:white;
}

@media only screen and (max-width: 580px) {
	#form-div{
		left: 3%;
		margin-right: 3%;
		width: 88%;
		margin-left: 0;
		padding-left: 3%;
		padding-right: 3%;
	}
}

</style>




</center>
</main>

   <a href="#" class="top">&uarr;</a> 
</body>


</html>			