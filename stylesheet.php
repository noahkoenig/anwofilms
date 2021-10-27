<?php 
	header('Content-Type: text/css');
	
	/* color variables */
	$activecolor = '#33adff';
	$hovercolor = '#006bb3';
	
	$headerfootercolor = '#000000';
	$headerfooterbordercolor = '#999999';
	$headerfootertextcolor = '#ffffff';
	
	/*$bodycolor = '#0f0f0f';
	$bodybordercolor = '#4d4d4d';
	$bodytextcolor = '#ffffff';*/
	
	$bodycolor = '#f2f2f2';
	$bodybordercolor = '#4d4d4d';
	$bodytextcolor = '#000000';
	
	/* calibri */
	$calibri = 'font-family: "Raleway", sans-serif;
				font-size: 1rem';
?>				
				@import url('https://fonts.googleapis.com/css2?family=Raleway:wght@300;400&display=swap');
				@import url('https://fonts.googleapis.com/css2?family=Tinos&display=swap');
				
				
				html {
					/*height: 100%;*/
					height: 100%;
					overflow-y: scroll;
				}
				header {
					z-index: 2;
					position: sticky;
					top: 0%;
					width: 100%;
					height: 5rem;
					min-height: 5rem;
					background-color: <?php echo $headerfootercolor;?>;
					border-bottom: 1px solid <?php echo $headerfooterbordercolor;?>;
				}
				body {
					/*position: relative;
					top: 8%;*/
					display: flex;
					flex-direction: column;
					/*height: 100%;*/
					height: 100%;
					margin: 0px;
					/*margin-top: 79px;*/
					background-color: <?php echo $bodycolor;?>;
				}
				footer {
					/*position: relative;
					bottom: 0;*/
					
					padding-top: 0.5rem;
					/*border-top: 1px solid <?php echo $headerfooterbordercolor;?>;*/
					/*margin: 0;*/
					margin-bottom: 0px;
					text-align: center;
					background-color: <?php echo $headerfootercolor;?>;
				}
				h1 {
					overflow: hidden;
					font-weight: normal;
					white-space: nowrap; 
				}
				h2 {
					padding-top: 0.5rem;
					padding-bottom: 0.5rem;
					border-bottom: 1px solid #999999; 
					margin: 0rem;
					<?php echo $calibri;?>;
					font-size: 1.4rem;
					color: <?php echo $bodytextcolor;?>;
				}
				h3 {
					padding-top: 0.5rem;
					padding-bottom: 0.5rem;
					margin: 0rem;
					<?php echo $calibri;?>;
					font-size: 1.2rem;
					color: <?php echo $bodytextcolor;?>;
				}
				h4 {
					padding-top: 0.4rem;
					padding-bottom: 0.4rem;
					margin: 0rem;
					<?php echo $calibri;?>;
					font-size: 1.1rem;
					color: <?php echo $bodytextcolor;?>;
				}
				h5 {
					padding-top: 0rem;
					padding-bottom: 0.4rem;
					margin: 0rem;
					<?php echo $calibri;?>;
					color: <?php echo $bodytextcolor;?>;
				}
				
				
				
				/* header panels */
				.header {
					z-index: 2;
					position: sticky;
					top: 0%;
					width: 100%;
					height: 80px;
					background-color: <?php echo $headerfootercolor;?>;
					/* border-bottom: 1px solid <?php echo $headerfooterbordercolor;?>; */
					transition: 0.2s;
				}
				.headerleftfreespace {
					float: left;
					width: 18%;
				}
				.headerleft {
					float: left;
					margin-left: 1rem;
					margin-top: 0.4rem;
					width: 31%;
				}
				.headerright {
					float: left;
					text-align: right; 
					width: 31%; 
					line-height: 2rem;	
					<?php echo $calibri;?>;
					color: <?php echo $headerfootertextcolor;?>;
				}
				.headerrightfreespace {
					float: left;
					width: 18%;
				}
				
				
				
				/* layout */
				.content {
					flex: 1 0 auto;
					z-index: 0;
				}
				.panecontainer {
					width: 100%;
				}
				.leftpane {
					float: left;
					z-index: -1;
					width: calc((100% - 805px)/2);
				}
				.middlepane {
					float: left;
					z-index: -1;
					margin-top: 0rem;
					text-align: center;
					width: 805px;
				}
				.middlepanecontact {
					float: left;
					z-index: -1;
					margin-top: 2.2rem;
					text-align: center;
					width: 805px;
				}
				.middlepaneproject {
					float: left;
					z-index: -1;
					margin-top: -5rem;
					width: 805px;
				}
				.rightpane {
					float: left;
					z-index: -1;
					width: calc((100% - 805px)/2);
				}
				.textarea {
					display: block;
					position: relative;
					top: 1rem;
					padding: 0.5rem 2rem;
					margin: auto;
					text-align: left;
					width: 720px;
					<?php echo $calibri;?>;
					word-wrap: break-word;
					color: <?php echo $bodytextcolor;?>;
				}
				.successtextarea {
					display: block;
					position: relative;
					top: 1rem;
					padding: 0.5rem 2rem;
					margin-top: -6.7rem; 
					text-align: left;
					width: 720px;
					<?php echo $calibri;?>;
					word-wrap: break-word;
					color: <?php echo $bodytextcolor;?>;
				}	
				
				
				
				/* fonts */
				.calibristandard {
					<?php echo $calibri;?>;
					color: <?php echo $bodytextcolor;?>;
				}
				.calibriheaderfooter {
					margin-top: 0rem;
					<?php echo $calibri;?>;
					color: <?php echo $headerfootertextcolor;?>;
				}
				.calibricopyright {
					margin-top: -1rem;
					<?php echo $calibri;?>;
					color: #666666;
				}
				.calibripreviewvia {
					margin-top: 0rem;
					<?php echo $calibri;?>;
					color: #000000;  
				}
				.calibrifront {
					position: absolute;
					left: 50%;
					top: 46.1%;
					transform: translate(-50%, -50%);
					text-align: center;
					<?php echo $calibri;?>;
					color: #ffffff;
					text-shadow: 0 0 6px #000000, 0 0 8px #000000, 1px 1px 10px #000000, 0 0 6px #000000;
				}
				.calibrisuccess {
					margin-top: 0rem;
					margin-bottom: 3rem;
					<?php echo $calibri;?>;
					color: <?php echo $bodytextcolor;?>;
				}
				.calibrierror {
					<?php echo $calibri;?>;
					color: #ff0000;
				}
				.leftmarktext {
					position: absolute;
					left: 7rem;
					top: 2rem;
					font-family: 'Raleway', sans-serif;
					font-size: 19px;
					color: #ffffff;
					transition: 0.2s;
				}
				.leftmarktext:hover {
					color: #999999;
				}
				
				
				
				/* headerleft elements */
				.leftboxed {
					top: -0.5rem;
					float: left;
					z-index: 2;
					position: relative;
					text-align: center;
					height: 60px;
					line-height: 20px;
				}
				.rightboxed {
					z-index: 1;
					position: absolute;
					margin-left: 240px;
				}
				.rightmark {
					position: absolute;
					margin-left: -35px;
					margin-top: 14px;
					<?php echo $calibri;?>;
					color: white;
				}
				
				
				
				/* sticky buttons */
				.stickytop {
					opacity: 0.0;
					float: right;
					z-index: 1;
					position: fixed;
					position: sticky;
					top: 90%;
					margin-right: -4rem;
					margin-bottom: 2rem;
					text-align: right;
					width: 40px;
					height: 40px;
				}
				.stickybackto {
					z-index: 1;
					margin-bottom: 2rem;
					margin-left: -2.5rem;
					text-align: left;
					width: 40px;
					height: 40px;
				}
				.stickytop a {
					display: inline-block;
					border-radius: 2rem;
					width: 40px;
					height: 40px;
					color: #000000;
					background-color: <?php echo $activecolor;?>;
				}
				.stickybackto a {
					display: inline-block;
					border-radius: 2rem;
					width: 40px;
					height: 40px;
					color: #000000;
					background-color: <?php echo $activecolor;?>;
				}
				
				
				
				/* icons and imgs */
				.backtotopicon {
					width: 40px;
					height: 40px;
				}
				.socialmediaicon {
					width: 30px;
					height: 30px;
				}
				.flagicon {
					width: 33px;
					height: 20px;
					border: 1px solid <?php echo $headerfooterbordercolor;?>;
				}
				.previewviaicon {
					vertical-align: middle;
					width: 25px;
					height: 25px;
				}
				#mySlides img {
					display: none;
					z-index: -1;
					position: fixed;
					left: 50%;
					top: 50%;
					transform: translate(-50%, -50%);
					min-height: 90%;
				}
				#mySlides img:first-child {
					display: block;
				}
				.leftmarkimg {
					width: 90px;
					height: 60px;
					margin-top: 0.75rem;
					opacity: 1;
					transition: 0.2s;
				}
				.leftmarkimg:hover {
					opacity: 0.5;
				}
				.rightmarkimg {
					margin-left: -130px;
					margin-top: 3px;
					width: 200px;
					height: 42px;
				}
				.infoimg {
					display: block;
					border: 1px solid <?php echo $bodybordercolor;?>;
					margin-left: auto;
					margin-top: 1rem;
					margin-right: auto;
					margin-bottom: 1rem;
					text-align: center;
					width: 700px;
					filter: grayscale(100%);
				}
				.previewimg {
					position: relative;
					/*border: 1px solid #333333;*/
					margin-top: 0.5rem;
					margin-bottom: 0.25rem;
					width: 800px;
				}
				
				
				
				/* contact styles */
				.nameandmail {
					padding: 0.5rem; 
					border-radius: 0.2rem;
					margin-top: 0.4rem;
					width: 360px;
					<?php echo $calibri;?>;
					color: black;
					background-color: white;
				}
				.message {
					padding: 0.5rem;
					border-radius: 0.2rem;
					margin-top: 0.4rem;
					width: 720px;
					height: 150px;
					resize: both;
					overflow: auto;
					<?php echo $calibri;?>;
					color: black;
					background-color: white;
				}
				.submit {
					display: block;
					padding: 0.5rem;
					border: 2px solid <?php echo $activecolor;?>;
					border-radius: 2rem;
					padding: 0.5rem;
					margin: 0px auto;
					margin-top: 1rem;
					margin-bottom: 0rem;
					width: 150px;
					<?php echo $calibri;?>;
					color: #ffffff;
					background-color: <?php echo $activecolor;?>;
				}
				.error {
					border: 2px solid #f00;
				}
				
				
				
				/* video styles */
				.reelvideo {
					width: 100%;
					heigth: calc(100%/2.4);
				}
				.video16to9 {
					z-index: 0;
					position: relative;
					padding-top: 56.25%;
					margin-bottom: 7rem;
				}
				.video24to10 {
					z-index: 0;
					position: relative;
					padding-top: 41.67%;
					margin-bottom: 7rem;
				}
				.videoframe {
					position: absolute;
					left: 0;
					top: 0;
					width: 100%;
					height: 100%;
				}
				.videotextarea {
					display: block;
					position: relative;
					padding: 0.5rem 2rem;
					margin: auto;
					margin-top: -6rem;
					text-align: left;
					width: 720px;
					<?php echo $calibri;?>;
					word-wrap: break-word;
					color: <?php echo $bodytextcolor;?>;
					/*margin-top: -1rem;*/
				}
				
				
				
				/* dropdown styles */
				.dropbtn {
					float: right;
					z-index: 1;
					margin-top: 20px;
					margin-right: 20px;
					height: 40px;
					width: 40px;
					cursor: pointer;
					transition: transform 0.25s;
				}
				.dropbtnrotate {
					transform: rotate(180deg);
				}
				.dropdown {
					display: none;
					float: right;
					z-index: 1;
					margin-top: -5.5rem;
					position: relative;
				}
				.dropdown-content {
					display: none;
					position: fixed;
					right: 0;
					top: 5rem;
					border-top: 1px solid <?php echo $headerfooterbordercolor;?>;
					/*border-bottom: 1px solid <?php echo $headerfooterbordercolor;?>;*/
					width: 250px;
					height: calc(100% - 5rem);
					background-color: black;
					box-shadow: -5px 0 50px #000000
					/*top: calc(-100% + 4rem);
					-ms-transition: transform 4s ease-in-out;
					-webkit-transition: transform 4s ease-in-out; 
					transition: transform 4s ease-in-out; */
				}
				.dropdown-content a:hover, .dropdown-content a:active {
					color: <?php echo $hovercolor;?>;
				}
				/*.dropdownslide {
					display: block;
					-ms-transform: translateY(calc(100% + 6rem - 2px));
					-webkit-transform: translateY(calc(100% + 6rem - 2px));
					transform: translateY(calc(100% + 6rem - 2px));
				}*/
				.dropdownnav {
					display: block;
					position: relative;
					top: calc((100% - 343px)/2);
					margin: 0 auto;
					text-align: center;
					width: 100%;
				}
				.dropdownlang {
					display: block;
					position: relative;
					top: calc((100% - 343px + 2rem)/2);
					margin: 0 auto;
					text-align: center;
					width: 100%;
				}
				.dropdownfooter {
					display: absolute;
					position: relative;
					top:  calc(100% - 343px + 2rem);
					text-align: center;
					width: 100%;
				}
				/*.dropblockdisplay {
					display: block;
					z-index: -1;
				}
				.dropabsolutedisplay {
					display: absolute;
					z-index: -1;
				}*/
				.dropnoscroll {
					overflow-y: hidden;
				}
				
				
				
				/* reference classes */
				a.leftmark {
				}
				a.home:link, a.home:visited, a.projects:link, a.projects:visited, a.about:link, a.about:visited, a.contact:link, a.contact:visited {
					font-family: 'Raleway', sans-serif;
					display: inline-block;
					padding: 0.9rem 0.5rem;
					margin-left: 1rem;
					text-decoration: none;
					color: <?php echo $headerfootertextcolor;?>;
					background-color: <?php echo $headerfootercolor;?>;
					transition: 0.2s;
				}
				a.home:hover, a.home:active, a.projects:hover, a.projects:active, a.about:hover, a.about:active, a.contact:hover, a.contact:active {
					border-bottom: 3px solid <?php echo $hovercolor;?>;
					color: <?php echo $hovercolor;?>;
				}
				a.en:link, a.en:visited, a.de:link, a.de:visited {
					display: inline-block;
					padding: 0.625rem 0.625rem;
					margin-top: 3px;
					text-align: center;
					height: 22px;
					text-decoration: none;
					transition: 0.2s;
				}
				a.homemobile:link, a.homemobile:visited, a.projectsmobile:link, a.projectsmobile:visited, a.aboutmobile:link, a.aboutmobile:visited, a.contactmobile:link, a.contactmobile:visited {		
					display: block;
					padding: 1rem 2rem;
					padding-bottom: 0.75rem;
					margin: 0 auto;
					height: 22px;
					width: 100px;
					<?php echo $calibri;?>;
					text-decoration: none;
					color: <?php echo $headerfootertextcolor;?>;
					transition: 0.2s;
				}
				a.homemobile:hover, a.homemobile:active, a.projectsmobile:hover, a.projectsmobile:active, a.aboutmobile:hover, a.aboutmobile:active, a.contactmobile:hover, a.contactmobile:active {		
					border-bottom: 3px solid <?php echo $hovercolor;?>;;
					color: <?php echo $hovercolor;?>;
				}
				a.enmobile, a.demobile {
					display: inline-block;
					padding: 0.75rem 0.75rem;
					height: 22px;
					<?php echo $calibri;?>;
					color: <?php echo $headerfootertextcolor;?>;
					transition: 0.2s;
				}
				a.socialmedia:link, a.socialmedia:visited {
					display: inline-block;
					padding: 0.5rem 0.625rem;
					background-color: <?php echo $headerfootercolor;?>;
					filter: grayscale(100%);
					transition: 0.2s;
				}
				a.socialmedia:hover, a.socialmedia:active {
					filter: grayscale(0%);
				}
				a.contents:link, a.contents:visited {
					text-decoration: none;
					color: <?php echo $bodytextcolor;?>;
					transition: 0.2s;
				}
				a.contents:hover, a.contents:active {
					color: <?php echo $hovercolor;?>;
				}
				/*a.maincontent:link, a.maincontent:visited {
					text-decoration: none;
					color: <?php echo $activecolor;?>;
					transition: 0.2s;
				}
				a.maincontent:hover, a.maincontent:active {
					color: <?php echo $hovercolor;?>;
				}*/
				a.textarealink:link, a.textarealink:visited {
					text-decoration: none;
					font-weight: bold;
					color: <?php echo $hovercolor;?>;
					transition: 0.2s;			
				}
				a.textarealink:hover, a.textarealink:active {
					color: <?php echo $activecolor;?>;
				}
				a.previewlink:link, a.previewlink:visited {
					<?php echo $calibri;?>;
					text-decoration: none;
					font-weight: bold;
					color: <?php echo $bodytextcolor;?>;
					transition: 0.2s;
				}
				a.previewlink:hover, a.previewlink:active {
					color: <?php echo $hovercolor;?>;
				}
				a.sitenoticelink:link, a.sitenoticelink:visited, a.privacypolicylink:link, a.privacypolicylink:visited {
					<?php echo $calibri;?>;
					text-decoration: none;
					color: <?php echo $headerfootertextcolor;?>;
					transition: 0.2s;
				}
				a.sitenoticelink:hover, a.sitenoticelink:active, a.privacypolicylink:hover, a.privacypolicylink:active {
					color: <?php echo $hovercolor;?>;
				}
				/*a.backtoprojects:link, a.backtoprojects:visited {
					display: inline-block;
					padding: 0.625rem 0.5rem;
					margin-top: 1rem;
					margin-bottom: -1rem;
					text-align: center;
					text-decoration: none;
					color: <?php echo $activecolor;?>;
					background-color: <?php echo $bodycolor;?>;
					transition: 0.2s;
				}
				a.backto:hover, a.backto:active {
					color: <?php echo $hovercolor;?>;
				}*/
				
				
				
				/* list layers */
				ol.layer1 {
					text-indent: -1rem;
					counter-reset:listenpunkt_ebene1;
					list-style-type: none;
				}
				ol.layer1 li:before {
					content: counter(listenpunkt_ebene1)". ";
					counter-increment:listenpunkt_ebene1;
				}
				ol.layer2 {
					padding-left: 1.1rem;
					text-indent: -1rem;
					counter-reset:listenpunkt_ebene2;
					list-style-type: none;
				}
				ol.layer2 li:before {
					content: counter(listenpunkt_ebene2,decimal)". ";
					counter-increment:listenpunkt_ebene2;
				}
				ol.layer3 {
					padding-left: 1.1rem;
					text-indent: -1rem;
					counter-reset:listenpunkt_ebene3;
					list-style-type: none;
				}
				ol.layer3 li:before {
					content: counter(listenpunkt_ebene3)". ";
					counter-increment:listenpunkt_ebene3;
				}
				ol.layer4 {
					padding-left: 1.1rem;
					text-indent: -1rem;
					counter-reset:listenpunkt_ebene4;
					list-style-type: none;
				}
				ol.layer4 li:before {
					content: counter(listenpunkt_ebene4)". ";
					counter-increment:listenpunkt_ebene4;
				}
				
				
				
				/* media queries */
				/*@media only screen and (max-height: 600px) {
					#mySlides img {
						min-height: 70%;
					}
				}*/
				@media only screen and (max-width: 1500px) {
					.headerleftfreespace {
						width: 5%;
					}
					.headerrightfreespace {
						width: 5%;
					}
					.headerleft {
						width: 44%;
					}
					.headerright {
						width: 44%;
					}
				}
				@media only screen and (max-height: 440px) {
					a.homemobile:link, a.homemobile:visited, a.projectsmobile:link, a.projectsmobile:visited, a.aboutmobile:link, a.aboutmobile:visited, a.contactmobile:link, a.contactmobile:visited {
						padding: 0.5rem 2rem;
					}
					.dropdownfooter {
						top:  calc(100% - 343px + 5rem);
					}
					.dropdownnav {
						top: calc((100% - 343px + 4rem)/2);
					}
					.dropdownlang {
						top: calc((100% - 343px + 6rem)/2);
					}
				}
				@media only screen and (max-width: 330px) {
					.socialmediaicon {
						width: 25px;
						height: 25px;
					}
				}
				@media only screen and (max-width: 420px) {
					.leftmarktext {
						display: none;
					}
					.rightboxed {
						display: none;
					}
				}
				@media only screen and (max-width: 520px) {
					/*.infoimg {
						width: 100%;
					}*/
					.leftmarktext {
						font-size: 16px;
						margin-left: -1rem;
					}
					.nameandmail {
						width: 95%;
					}
				}
				@media only screen and (max-width: 850px) {
					.rightmark {
						margin-top: 15px;
						font-size: 15px;
					}
					.previewimg {
						width: 95%;
					}
					.infoimg {
						width: 100%;
					}
					.message {
						width: 95%;
					}
					.textarea {
						width: 80%;
					}
					.successtextarea {
						width: 80%;
					}
					.videotextarea {
						width: 80%;
					}
				}
				@media only screen and (max-width: 980px) {
					.headerleftfreespace {
						display: none;
						width: 0%;
					}
					.headerleft {
						width: 85%;
					}
					.headermid {
						display: none;
						width: 0%;
					}
					.headerright {
						display: none;
						width: 0%;
					}
					.headerrightfreespace {
						display: none;
						width: 0%;
					}
					.dropdown {
						display: inline-block;
						width: 14%;
					}
				}
				@media only screen and (min-width: 981px) {
					.dropnoscroll {
						overflow-y: scroll;
					}
				}
				@media only screen and (max-width: 1000px) {
					.stickytop {
						float: none;
						margin: auto;
						margin-bottom: -3.5rem;
					}
					.stickybackto {
						position: sticky;
						top: 90%;
						margin: auto;
						margin-bottom: -2rem;
					}
					.leftpane {
						width: 0%;
					}
					.middlepane {
						float: none;
						margin-top: 1rem;
						margin-bottom: 4rem;
						width: 100%;
					}
					.middlepaneproject {
						float: none;
						margin-top: -3rem;
						margin-bottom: 3rem;
						width: 100%;
					}
					.middlepanecontact {
						float: none;
						margin-top: 4.2rem;
						margin-bottom: 3rem;
						width: 100%;
					}
					.rightpane {
						width: 0%;
					}
				}
				
				
				
				/* IE 11 media queries */
				@media screen and (-ms-high-contrast: active), (-ms-high-contrast: none) {
					.videotextarea { 
						margin-top: -1.4rem;
					}
					.successtextarea { 
						margin-top: -2.2rem;
					}
				}
				@media screen and (-ms-high-contrast: active), (-ms-high-contrast: none), (-ms-max-width: 1040px) {
					.middlepanecontact {
						margin-top: 2.2rem;
					}
					.middlepane {
						margin-top: 0.4rem;
					}
					.stickybackto {
						position: fixed;
					}
					/*.videotextarea {
						margin-top: -4rem;
					}*/
				}
				@media screen and (-ms-high-contrast: active), (-ms-high-contrast: none), (-ms-max-width: 850px) {
					.middlepane {
						margin-bottom: 3rem;
					}
				}
				
				
				
				/* IE 10 media queries */
				@media screen and (min-width:0\0){
					.ie10 .IEerror {
						display: block;
					}
				}
				
				
				
				/* errorclasses for IE 6,7,8,9,10 */
				.IEerror {
					display: none;
					z-index: 5;
					position: absolute;
					left: 0;
					top: 0;
					text-align: center;
					width: 100%;
					min-height: 5rem;
					font-family: Helvetica, Verdana, Arial, sans-serif;
					font-size: 1em;
					color: white;
					background-color: #cc0000;
				}
				.IEerrortext {
				}
				.IEerrorbtn {
					border: 1px solid black;
					margin: 0 auto;
					width: 50px;
					height: 20px;
					color: black;
					background-color: white;
					cursor: pointer;
				}
				
				
				
				
				
