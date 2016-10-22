       var links = ["http://www.w3schools.com/js/","http://www.w3schools.com/html/default.asp","#form-div","http://we.com"];
        var images = ["images/1.jpg","images/2.jpg","images/3.jpg","images/4.jpg"];
        var i = 0;
		
		
        var renew = setInterval(function(){
			
            if(links.length == i){
                i = 0;
            }
            else {
            document.getElementById("image1").src = images[i]; 
            document.getElementById("link").href = links[i]; 
			document.getElementById("image1").classList.toggle("fadeInLeft");
			
            i++;
		
        }
        },10000);
