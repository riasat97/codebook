
<html>
<head>
<style>
    .contact_form ul {
    width:600px;
    list-style-type:none;
	list-style-position:outside;
	margin:0px;
	padding:0px;
}
.contact_form li{
	padding:12px; 
	border-bottom:1px solid #eee;
	position:relative;
} 
.contact_form li:first-child, .contact_form li:last-child {
	border-bottom:1px solid #777;
}

/* === Form Header === */
.contact_form h2 {
	margin:0;
	display: inline;
}
.required_notification {
	color:#d45252; 
	margin:5px 0 0 0; 
	display:inline;
	float:right;
}
.message {
    color: #00cc33;
	margin:10px 0 0 0;
        
	
}

/* === Form Elements === */
.contact_form label {
	width:150px;
	margin-top: 3px;
	display:inline-block;
	float:left;
	padding:3px;
}
.contact_form input {
	height:20px; 
	width:220px; 
	padding:5px 8px;
}
.contact_form textarea {padding:8px; width:300px;}
.contact_form button {margin-left:156px;}

	/* form element visual styles */
	.contact_form input, .contact_form textarea { 
		border:1px solid #aaa;
		box-shadow: 0px 0px 3px #ccc, 0 10px 15px #eee inset;
		border-radius:2px;
		padding-right:30px;
		-moz-transition: padding .25s; 
		-webkit-transition: padding .25s; 
		-o-transition: padding .25s;
		transition: padding .25s;
	}
	.contact_form input:focus, .contact_form textarea:focus {
		background: #fff; 
		border:1px solid #555; 
		box-shadow: 0 0 3px #aaa; 
		padding-right:70px;
	}

/* === HTML5 validation styles === */	
.contact_form input:required, .contact_form textarea:required {
	background: #fff url(images/red_asterisk.png) no-repeat 98% center;
}
.contact_form input:required:valid, .contact_form textarea:required:valid {
	background: #fff url(images/valid.png) no-repeat 98% center;
	box-shadow: 0 0 5px #5cd053;
	border-color: #28921f;
}
.contact_form input:focus:invalid, .contact_form textarea:focus:invalid {
	background: #fff url(images/invalid.png) no-repeat 98% center;
	box-shadow: 0 0 5px #d45252;
	border-color: #b03535
}

/* === Form hints === */
.form_hint {
	background: #d45252;
	border-radius: 3px 3px 3px 3px;
	color: white;
	margin-left:8px;
	padding: 1px 6px;
	z-index: 999; /* hints stay above all other elements */
	position: absolute; /* allows proper formatting if hint is two lines */
	display: none;
}
.form_hint::before {
	content: "\25C0";
	color:#d45252;
	position: absolute;
	top:1px;
	left:-6px;
}
.contact_form input:focus + .form_hint {display: inline;}
.contact_form input:required:valid + .form_hint {background: #28921f;}
.contact_form input:required:valid + .form_hint::before {color:#28921f;}
	
/* === Button Style === */
button.submit {
	background-color: #68b12f;
	background: -webkit-gradient(linear, left top, left bottom, from(#68b12f), to(#50911e));
	background: -webkit-linear-gradient(top, #68b12f, #50911e);
	background: -moz-linear-gradient(top, #68b12f, #50911e);
	background: -ms-linear-gradient(top, #68b12f, #50911e);
	background: -o-linear-gradient(top, #68b12f, #50911e);
	background: linear-gradient(top, #68b12f, #50911e);
	border: 1px solid #509111;
	border-bottom: 1px solid #5b992b;
	border-radius: 3px;
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	-ms-border-radius: 3px;
	-o-border-radius: 3px;
	box-shadow: inset 0 1px 0 0 #9fd574;
	-webkit-box-shadow: 0 1px 0 0 #9fd574 inset ;
	-moz-box-shadow: 0 1px 0 0 #9fd574 inset;
	-ms-box-shadow: 0 1px 0 0 #9fd574 inset;
	-o-box-shadow: 0 1px 0 0 #9fd574 inset;
	color: white;
	font-weight: bold;
	padding: 6px 20px;
	text-align: center;
	text-shadow: 0 -1px 0 #396715;
}
button.submit:hover {
	opacity:.85;
	cursor: pointer; 
}
button.submit:active {
	border: 1px solid #20911e;
	box-shadow: 0 0 10px 5px #356b0b inset; 
	-webkit-box-shadow:0 0 10px 5px #356b0b inset ;
	-moz-box-shadow: 0 0 10px 5px #356b0b inset;
	-ms-box-shadow: 0 0 10px 5px #356b0b inset;
	-o-box-shadow: 0 0 10px 5px #356b0b inset;
	
}
</style>
</head>
<body>
    <form class="contact_form" action="<?php echo base_url();?>blogger_login/save_blogger" method="post">
    <ul>
        <h3 class="message">
            <?php
                $message=$this->session->userdata('message');
                if(isset($message))
                {
                    echo $message;
                    $this->session->unset_userdata('message');
                }
            ?>
        </h3><br/>
        <li>
            <h2>Contact Us</h2>
            <span class="required_notification">* Denotes Required Field</span>
        </li>
	
				
        <li>
            <label for="name">First Name:</label>
            <input type="text" name="first_name"  placeholder="John " required />
        </li>
        
         <li>
            <label for="name">Last Name:</label>
            <input type="text" name="last_name"  placeholder="Doe" required />
        </li>
        
        <li>
            <label for="email">Email Adress:</label>
            <input type="email" name="email_address" placeholder="" required />
            <span class="form_hint">Proper format "name@something.com"</span>
        </li>
            <li>
            <label for="name">Password:</label>
            <input type="password" name="password" placeholder="12374ddd" required />
        </li>
        
        <li>
            <label for="name">Phone Number:</label>
            <input type="text" name="mobile_no"  placeholder="+88" required />
        </li>
        <li>
            <label for="website">Address:</label>
            <textarea name="address"cols="5" rows="10"></textarea>
        </li>
        <li>
            <label for="name">Gender :</label>
            <input type="radio"  name="gender"  value="Male"/>Male<br/>
             <input type="radio"  name="gender"  value="Female"/>Female
        </li>
        <li>
            <label for="message">City:</label>
            <input type="text"  name="city" placeholder="Subject" required />
        </li>
          <li>
            <label for="message">Country</label>
            <input type="text"  name="country" placeholder="Subject" required />
        </li>
          <li>
            <label for="message">Zipcode</label>
            <input type="text"  name="zip_code" placeholder="Subject" required />
        </li>
        <li>
        	<button class="submit" name="btnsubmit" type="submit">Submit Form</button>
        </li>
		
    </ul>
</form>
</body>
</html>