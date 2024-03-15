<?php
include('grab.php');
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
         <title>Coming Soon - SpaceHz</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="./images/favicon.png">
        <meta name="description" content="Atterisage prévu le 1 Janvier 2024, Soyez Prêt !🚀🧑‍🚀">
        <meta name="keywords" content="new, space, spacehz, spacehz.fr, file, serveur, minecraft">
        <meta name="author" content="PetitPrince">
        <meta name="copyright" content="© 2024">
        <meta name="language" content="fr">
        <meta name="revisit-after" content="30 days">
        <meta name="theme-color" content="#f7f7f7">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body id="color_text">

	<audio id="myAudio" hidden controls autoplay loop>
	    <source src="layer3.mp3" type="audio/mp3">
	    Votre navigateur ne supporte pas l'élément audio.
	</audio>	
	
        <h1>Coming Soon</h1>
        <p>Ce site web est actuellement en construction.</p>

        <div class="timer-container">
            <p id="timer"></p>
            <a href="./NDLI2023_Minecraft_World.zip">MAP MINECRAFT NDLI 2023</a>
        </div>



        <footer>
            <h2>©Petitprince - Spacehz.fr - 2024</h2>
        </footer>
        <script>

            let cursorX = 0;
            let cursorY = 0;
            
            let backgroundX = 0;
            let backgroundY = 0;
            
            document.addEventListener('mousemove', function(event) {
                cursorX = event.clientX;
                cursorY = event.clientY;

                backgroundX += (event.clientX - backgroundX) / 2;
                backgroundY += (event.clientY - backgroundY) / 2;
                if (cursorX > window.innerWidth/2) {
                    document.body.style.color = "black"
                } else if (cursorX < window.innerWidth/2) {
                    document.body.style.color = "white"
                }
                document.body.style.backgroundPosition = `${backgroundX}px ${backgroundY}px`;
            });


            function getTimeRemaining(endtime) {
                const total = Date.parse(endtime) - Date.parse(new Date());
                const seconds = Math.floor((total / 1000) % 60);
                const minutes = Math.floor((total / 1000 / 60) % 60);
                const hours = Math.floor((total / (1000 * 60 * 60)) % 24);
                const days = Math.floor(total / (1000 * 60 * 60 * 24));

                return {
                    total,
                    days,
                    hours,
                    minutes,
                    seconds
                };
            }

            function initializeClock(id, endtime) {
                const clock = document.getElementById(id);
                const timeinterval = setInterval(() => {
                    const t = getTimeRemaining(endtime);
                    clock.innerHTML = '<span>' + t.days + '</span><span> Jours </span><span>' +
                        t.hours + '</span><span> Heures </span><span>' + t.minutes + '</span><span> Minutes </span><span>' +
                        t.seconds + '</span><span> Secondes </span>';
                    if (t.total <= 0) {
                        clearInterval(timeinterval);
                    }
                }, 1000);
            }

            const deadline = '2024-01-01T00:00:00';
            initializeClock('timer', deadline);
	
		// Sélectionnez l'élément audio par son ID
	    var audio = document.getElementById("myAudio");

	    // Attendez que la métadonnée de l'audio soit chargée avant de définir le volume
	    audio.addEventListener("loadedmetadata", function() {
		// Définissez le volume sur 0.2 (20%)
		audio.volume = 0.1;
	    });

        </script>
            

    </body>
</html>
