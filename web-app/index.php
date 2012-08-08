<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <title>Interactive Drum Machine</title>
		<link href="css/general.css" rel="stylesheet">
    </head>

    <body>
    	
    	<div id="pageWrapper">
    	
    		<div id="filesWrapper">
    		
    			<!--Files for Row 1-->
    			
    			<div class="fileWrapper">
					<label for="file1">1</label>
					<input type="text" id="file1">
					<button class="loadFile" id="loadFile1" data-pad="pad1">Load Sample</button>
				</div>
				
				<div class="fileWrapper">	
					<label for="file2">2</label>
					<input type="text" id="file2">
					<button class="loadFile" id="loadFile2" data-pad="pad2">Load Sample</button>
				</div>
				
				<div class="fileWrapper">	
					<label for="file3">3</label>
					<input type="text" id="file3">
					<button class="loadFile" id="loadFile3" data-pad="pad3">Load Sample</button>
				</div>	
				
				<div class="fileWrapper">	
					<label for="file4">4</label>
					<input type="text" id="file4">
					<button class="loadFile" id="loadFile4" data-pad="pad4">Load Sample</button>
				</div>
				
				<!--Files for Row 2-->
				
				<div class="fileWrapper">
					<label for="file5">Q</label>
					<input type="text" id="file5">
					<button class="loadFile" id="loadFile5" data-pad="pad5">Load Sample</button>
				</div>
				
				<div class="fileWrapper">	
					<label for="file6">W</label>
					<input type="text" id="file6">
					<button class="loadFile" id="loadFile6" data-pad="pad6">Load Sample</button>
				</div>
				
				<div class="fileWrapper">
					<label for="file7">E</label>
					<input type="text" id="file7">
					<button class="loadFile" id="loadFile7" data-pad="pad7">Load Sample</button>
				</div>
				
				<div class="fileWrapper">
					<label for="file8">R</label>
					<input type="text" id="file8">
					<button class="loadFile" id="loadFile8" data-pad="pad8">Load Sample</button>
				</div>
				
				<!--Files for Row 3-->
				
				<div class="fileWrapper">
					<label for="file9">A</label>
					<input type="text" id="file9">
					<button class="loadFile" id="loadFile9" data-pad="pad9">Load Sample</button>
				</div>
				
				<div class="fileWrapper">
					<label for="file10">S</label>
					<input type="text" id="file10">
					<button class="loadFile" id="loadFile10" data-pad="pad10">Load Sample</button>
				</div>
				
				<div class="fileWrapper">
					<label for="file11">D</label>
					<input type="text" id="file11">
					<button class="loadFile" id="loadFile11" data-pad="pad11">Load Sample</button>
				</div>
				
				<div class="fileWrapper">
					<label for="file12">F</label>
					<input type="text" id="file12">
					<button class="loadFile" id="loadFile12" data-pad="pad12">Load Sample</button>
    			</div>
    			
    			<!--Files for Row 4-->
    			
    			<div class="fileWrapper">
					<label for="file13">Z</label>
					<input type="text" id="file13">
					<button class="loadFile" id="loadFile13" data-pad="pad13">Load Sample</button>
				</div>
				
				<div class="fileWrapper">
					<label for="file14">X</label>
					<input type="text" id="file14">
					<button class="loadFile" id="loadFile14" data-pad="pad14">Load Sample</button>
				</div>
				
				<div class="fileWrapper">
					<label for="file15">C</label>
					<input type="text" id="file15">
					<button class="loadFile" id="loadFile15" data-pad="pad15">Load Sample</button>
				</div>
				
				<div class="fileWrapper">
					<label for="file16">V</label>
					<input type="text" id="file16">
					<button class="loadFile" id="loadFile16" data-pad="pad16">Load Sample</button>
				</div>
				
    		</div>
    	
			<div id="padsWrapper">
				
				<div class="padsRow" id="row1">
					<button class="pads" id="pad1" data-audio="audio/808kick.wav" data-key="49">1</button>
					<button class="pads" id="pad2" data-audio="audio/808snare.wav" data-key="50">2</button>
					<button class="pads" id="pad3" data-audio="audio/808clap.wav" data-key="51">3</button>
					<button class="pads" id="pad4" data-audio="audio/808maracas.wav" data-key="52">4</button>
				</div>
				
				<div class="padsRow" id="row2">
					<button class="pads" id="pad5" data-audio="audio/808chihat.wav" data-key="113">Q</button>
					<button class="pads" id="pad6" data-audio="audio/808ohihat.wav" data-key="119">W</button>
					<button class="pads" id="pad7" data-audio="audio/808cowbell.wav" data-key="101">E</button>
					<button class="pads" id="pad8" data-audio="audio/808rim.wav" data-key="114">R</button>
				</div>
				
				<div class="padsRow" id="row3">
					<button class="pads" id="pad9" data-audio="audio/808conga1.wav" data-key="97">A</button>
					<button class="pads" id="pad10" data-audio="audio/808conga2.wav" data-key="115">S</button>
					<button class="pads" id="pad11" data-audio="audio/808ride.wav" data-key="100">D</button>
					<button class="pads" id="pad12" data-audio="audio/808stick.wav" data-key="102">F</button>
				</div>
				
				<div class="padsRow" id="row4">
					<button class="pads" id="pad13" data-audio="audio/808tom1.wav" data-key="122">Z</button>
					<button class="pads" id="pad14" data-audio="audio/808tom2.wav" data-key="120">X</button>
					<button class="pads" id="pad15" data-audio="audio/808tom3.wav" data-key="99">C</button>
					<button class="pads" id="pad16" data-audio="audio/808tom4.wav" data-key="118">V</button>
				</div>
				
			</div>
			
			<div id="saveLoadKitWrapper">
			
				<button id="saveKit">Save your kit!</button>
				<button id="loadKit">Load a kit</button>
				<button id="registerAccount">Register</button>
                <button id="userLogin">Login</button>
			
			</div>
			
			<div id="loadSample">
            	
                <!--First set of 16 samples-->
                
				<input type="radio" name="radioSelect" data-audio="audio/909bassdrum.wav">909bassdrum
                <input type="radio" name="radioSelect" data-audio="audio/909chihat.wav">909chihat
                <input type="radio" name="radioSelect" data-audio="audio/909clap.wav">909clap
                <input type="radio" name="radioSelect" data-audio="audio/909crash.wav">909crash
                
                <input type="radio" name="radioSelect" data-audio="audio/909hitom.wav">909hitom
                <input type="radio" name="radioSelect" data-audio="audio/909ltom.wav">909ltom
                <input type="radio" name="radioSelect" data-audio="audio/909mtom.wav">909mtom
                <input type="radio" name="radioSelect" data-audio="audio/909ohihat.wav">909ohihat
                
                <input type="radio" name="radioSelect" data-audio="audio/909ride.wav">909ride
                <input type="radio" name="radioSelect" data-audio="audio/909rim.wav">909rim
                <input type="radio" name="radioSelect" data-audio="audio/909snare.wav">909snare
                <input type="radio" name="radioSelect" data-audio="audio/707bassdrum1.wav">707bassdrum1
                
                <input type="radio" name="radioSelect" data-audio="audio/707bassdrum2.wav">707bassdrum2
                <input type="radio" name="radioSelect" data-audio="audio/707chihat.wav">707chihat
                <input type="radio" name="radioSelect" data-audio="audio/707cowbell.wav">707cowbell
                <input type="radio" name="radioSelect" data-audio="audio/707crash.wav">707crash
                
                <!--Second set of 16 samples-->
                
                <input type="radio" name="radioSelect" data-audio="audio/707handclap.wav">707handclap
                <input type="radio" name="radioSelect" data-audio="audio/707hitom.wav">707hitom
                <input type="radio" name="radioSelect" data-audio="audio/707lotom.wav">707lotom
                <input type="radio" name="radioSelect" data-audio="audio/707metom.wav">707metom
                
                <input type="radio" name="radioSelect" data-audio="audio/707ohihat.wav">707ohihat
                <input type="radio" name="radioSelect" data-audio="audio/707ride.wav">707ride
                <input type="radio" name="radioSelect" data-audio="audio/707rimshot.wav">707rimshot
                <input type="radio" name="radioSelect" data-audio="audio/707snare1.wav">707snare1
                
                <input type="radio" name="radioSelect" data-audio="audio/707snare2.wav">707snare2
                <input type="radio" name="radioSelect" data-audio="audio/707tamb.wav">707tamb
                <input type="radio" name="radioSelect" data-audio="audio/727cabasa.wav">727cabasa
                <input type="radio" name="radioSelect" data-audio="audio/727hibongo.wav">727hibongo
                
                <input type="radio" name="radioSelect" data-audio="audio/727hitimba.wav">727hitimba
                <input type="radio" name="radioSelect" data-audio="audio/727hmconga.wav">727hmconga
                <input type="radio" name="radioSelect" data-audio="audio/727hoconga.wav">727hoconga
                <input type="radio" name="radioSelect" data-audio="audio/727lobongo.wav">727lobongo
                
                <!--Third set of 16 samples-->
                
                <input type="radio" name="radioSelect" data-audio="audio/727loconga.wav">727loconga
                <input type="radio" name="radioSelect" data-audio="audio/727lotimba.wav">727lotimba
                <input type="radio" name="radioSelect" data-audio="audio/727lwhistle.wav">727lwhistle
                <input type="radio" name="radioSelect" data-audio="audio/727maracas.wav">727maracas
                
                <input type="radio" name="radioSelect" data-audio="audio/727quijada.wav">727quijada
                <input type="radio" name="radioSelect" data-audio="audio/727starchim.wav">727starchim
                <input type="radio" name="radioSelect" data-audio="audio/727swhistle.wav">727swhistle
                <input type="radio" name="radioSelect" data-audio="audio/808chihat.wav">808chihat
                
                <input type="radio" name="radioSelect" data-audio="audio/808clap.wav">808clap
                <input type="radio" name="radioSelect" data-audio="audio/808conga1.wav">808conga1
                <input type="radio" name="radioSelect" data-audio="audio/808conga2.wav">808conga2
                <input type="radio" name="radioSelect" data-audio="audio/808cowbell.wav">808cowbell
                
                <input type="radio" name="radioSelect" data-audio="audio/808kick.wav">808kick
                <input type="radio" name="radioSelect" data-audio="audio/808maracas.wav">808maracas
                <input type="radio" name="radioSelect" data-audio="audio/808ohihat.wav">808ohihat
                <input type="radio" name="radioSelect" data-audio="audio/808ride.wav">808ride
                
                <!--Fourth set of 7 samples-->
                
                <input type="radio" name="radioSelect" data-audio="audio/808rim.wav">808rim
                <input type="radio" name="radioSelect" data-audio="audio/808snare.wav">808snare
                <input type="radio" name="radioSelect" data-audio="audio/808stick.wav">808stick
                <input type="radio" name="radioSelect" data-audio="audio/808tom1.wav">808tom1
                
                <input type="radio" name="radioSelect" data-audio="audio/808tom2.wav">808tom2
                <input type="radio" name="radioSelect" data-audio="audio/808tom3.wav">808tom3
                <input type="radio" name="radioSelect" data-audio="audio/808tom4.wav">808tom4
                                
				<button id="closeLoadSample">X</button>
			</div>
            
            <div id="saveKitBox">
            	<label for="saveKitName">Name your Kit</label>
                <input type="text" id="saveKitName" name="saveKitName">
                <button type="submit">Save</button>
            	<button id="closeSaveKit">X</button>
            </div>
            
            <div id="loadKitBox">
                <button type="submit">Load</button>
            	<button id="closeLoadKit">X</button>
            </div>
            
            <div id="registrationBox">
            
            	<form action="registrationCheck.php" method="post">
                	
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email">
                    
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password">
                    
                    <button type="submit">Register</button>
                    <button id="closeRegistrationBox">X</button>
                </form>
                
            </div>
            
            <div id="loginBox">
            	
                <form action="loginCheck.php" method="post">
                	
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email">
                    
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password">
                    
                    <button type="submit">Login</button>
                    <button type="closeLoginBox">X</button>
                    
                </form>
                
            </div>
             
		</div>
		
    	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    	<script src="js/general.js"></script>
		
    </body>
</html>
