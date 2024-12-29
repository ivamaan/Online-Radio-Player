<?php
// Array of stream URLs extracted from the provided HTML MAX 3 WORDS ON NAMES
$streams = [
    [
        'name' => 'WELCOME TO CAST PLAYER! ',
        'url' => 'welcome.mp3'
    ],
    [
        'name' => 'Radio Navahang',
        'url' => 'https://navairan.com/stream.nsv'
    ],
    [
        'name' => 'Radio Farda',
        'url' => 'https://n02.radiojar.com/cp13r2cpn3quv'
    ],
    [
        'name' => 'Radio Simorgh',
        'url' => 'https://stream-160.zeno.fm/9svfnobkrxrvv'
    ],
    [
        'name' => 'Radio Smooth Relax',
        'url' => 'https://21363.live.streamtheworld.com/SMOOTHRELAX_SYD_AAC.aac'
    ],
    [
        'name' => 'Antenne Bayern Relax',
        'url' => 'https://s2-webradio.antenne.de/relax.aac'
    ],
    [
        'name' => 'Antenne Bayern Live',
        'url' => 'https://stream.antenne.de/antenne/stream/mp3'
    ],
    [
        'name' => 'Antenne Bayern Chillout',
        'url' => 'https://stream.antenne.de/chillout/stream/mp3'
    ],
        [
        'name' => 'Antenne Love Songs',
        'url' => 'http://stream.antenne.de/lovesongs'
    ],
    [
        'name' => 'Ibiza Chill',
        'url' => 'https://radio2.vip-radios.fm:18018/stream-128kmp3-IbizaChill'
    ],
    [
        'name' => 'I Love Music & Chill',
        'url' => 'https://streams.ilovemusic.de/iloveradio10.mp3'
    ],
    [
        'name' => '1.FM Chillout Lounge',
        'url' => 'http://strm112.1.fm/chilloutlounge_mobile_mp3'
    ],
    [
        'name' => 'NRJ HITS REMIX',
        'url' => 'https://scdn.nrjaudio.fm/adwz1/fr/31019/mp3_128.mp3'
    ],
                [
        'name' => 'Deep House Ibiza',
        'url' => 'https://radio4.vip-radios.fm:18015/stream-128kmp3-DeepHouseIbiza'
    ],
     [
        'name' => 'Deep Radio 320',
        'url' => 'http://playerservices.streamtheworld.com/api/livestream-redirect/DEEP_RADIO.mp3'
    ],
    
    [
        'name' => '104.6 RTL black',
        'url' => 'https://stream.104.6rtl.com/rtl-black/mp3-128'
    ],
    
    [
        'name' => 'LoFi Focus',
        'url' => 'https://stream.bigfm.de/exlofifocus/mp3-192/'
    ],
    
    [
        'name' => 'I Love Chillhop',
        'url' => 'https://streams.ilovemusic.de/iloveradio17.mp3'
    ],
    
];


// Function to generate a random color
function getRandomColor() {
    $r = rand(0, 222);
    $g = rand(0, 222);
    $b = rand(0, 111);
    return "rgba($r, $g, $b, 0.2)";
}javascript:;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=0.8, maximum-scale=0.8, viewport-fit=cover">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-title" contejavascript:;nt="Cast Player">
        <link rel="apple-touch-icon" href="cursor.svg">
        <meta name="theme-color" content= ""/>
     <title>Cast Player</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Codystar:wght@300;400&display=swap');
        
        h2{
          margin-top: 5px;
          margin-bottom: 0px;
          font-family: "Codystar", sans-serif;
          font-style: normal;
          font-size: 29px;
          text-align: center;
          color: #9a269f;
          text-shadow: #000 0px 0 10px;
        }
    
        html {
            cursor: url('cursor.svg'), auto; /* custom cursor */
            scrollbar-color: #121212 #01000e;
            scrollbar-width: thin;
        }
        
        body {
            font-family: Arial, sans-serif;
            background-color: #BFBFBF;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='100%25' height='100%25' viewBox='0 0 1600 800'%3E%3Cg %3E%3Cpolygon fill='%23b7babf' points='800 100 0 200 0 800 1600 800 1600 200'/%3E%3Cpolygon fill='%23afb6c0' points='800 200 0 400 0 800 1600 800 1600 400'/%3E%3Cpolygon fill='%23a6b1c1' points='800 300 0 600 0 800 1600 800 1600 600'/%3E%3Cpolygon fill='%239dadc2' points='1600 800 800 400 0 800'/%3E%3Cpolygon fill='%2393a8c4' points='1280 800 800 500 320 800'/%3E%3Cpolygon fill='%2389a3c6' points='533.3 800 1066.7 800 800 600'/%3E%3Cpolygon fill='%237E9EC9' points='684.1 800 914.3 800 800 700'/%3E%3C/g%3E%3C/svg%3E");
            background-attachment: fixed;
            background-size: cover;
            background-position: bottom center;
            margin: 0;
            padding: 20px;
            transition: background-color 0.3s, color 0.3s;
            max-width: 1400px;
            margin-left: auto;
            margin-right: auto;
            min-height: 80vh;
            display: flex;
            flex-direction: column;
            user-select: none; /* Prevent text selection */
        }
        .dark-mode {
        background-color: #100018;
        background-image: url("");
        background-attachment: fixed;
        background-size: cover;
        background-position: unset;
        color: #eaeaea; /* Light text color */
        }
        .grid-container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(220px, 1fr));
            gap: 15px; /* Increased gap for better spacing */
            margin-top: 20px;
        }
        .stream {
            display: flex;
            flex-direction: column;
            justify-content: space-between; /* Space items out */
            border: 1px solid #ddd;
            border-radius: 25px;
            padding: 15px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.8);
            transition: background 0.3s, border-color 0.3s;
            position: relative; /* For positioning the loading indicator */
            backdrop-filter: blur(5px);
             -webkit-backdrop-filter: blur(5px);
             width: auto;
             height: 190px;
        }
        
        .stream.dark-mode {
            border-color: #373737a8; /* Lighter navy for borders */
        }
        
        .dark-mode h2{
          color: #f6caf7 !important;
          text-shadow: #D2D2D2 0px 0 10px;
          font-weight: normal;
        }
        
        .time-counter{
              display: none;
              text-align: center;
              color: #0003a8;
              font-family: Codystar;
              letter-spacing: 5px;
              margin-bottom: 5px;
              font-size: 18px;
              text-shadow: #000 0px 0px 5px;
              font-weight: 600;
            }
            
         .dark-mode .time-counter{
              color: #fff6e4;
              text-shadow: #D25B3F 0px 0px 5px;
            }
        .play-button {
              background: #453e9421;
              border-color: #37373738;
              padding: 7px 0px 5px;
              border-radius: 30px;
              cursor: pointer;
              width: 50%;
              box-shadow: 0px 1px 5px rgb(0, 0, 0);
              transition: background-color 0.2s ease-in-out, transform 0.1s ease;
              margin-left: auto;
              margin-right: auto;
                cursor: url('cursor.svg'), auto;
        }
        .play-button:hover {
            box-shadow: 0px 1px 10px rgb(0, 0, 0);
            transform: scale(1.05);
        }
        .play-button:active {
            transform: scale(0.9);
        }
        .stop-button {
            background: #00000042; /* Red for stop */
        }
        .stop-button:hover {
            opacity: 0.8;
        }
        
        .loading {
            display: none; /* Hide by default */
            border: 1px solid #000; /* Light grey */
            border-top: 2px solid #fff; /* Blue */
            border-radius: 50%;
            width: 10px;
            height: 10px;
            margin:3px;
            animation: spin 1s linear infinite; /* Spin animation */
            margin-left: auto;
            margin-right: auto;
            filter:drop-shadow(0px 0px 5px #fff);
        }
        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
        audio {
            display: none; /* Hide audio element */
        } 
        darkmodebutton {
            margin-top: auto;
            position: absolute;
            right: 10px;
        }
        
        footer {
          position: absolute;
          left: 20px;
          opacity: 50%;
          color: white;
          text-shadow: #fff 0px 0 5px;
          text-align: center;
          font-size: 10px;
          bottom: 15px;
          z-index: -99;
          display: none;
        }
        
        #toggle-dark-mode {
         border: none;
        cursor: pointer;
        }
        #toggle-dark-mode:hover {
        }
    logo {
        opacity: 0.7;
        filter: drop-shadow(0px 0px 5px #000);
        margin-left: 10px;
        cursor: url('cursor.svg'), auto;
        max-width: 50px;
        display: block;
    }
    
    
        /* Responsive styles */
        @media (max-width: 768px) {
            body {
                padding: 10px;
            }
            .stream {
                padding: 10px;
            }
            .play-button {
                padding: 8px 12px;
                font-size: 14px;
            }
            
              #toggle-dark-mode {
              padding: 8px 12px;
             font-size: 5px;
            }
        }

        @media (max-width: 480px) {
            .grid-container {
                grid-template-columns: 1fr 1fr; /* Single column on very small screens */
                font-size: small;
            }
        }
    </style>
</head>
<body>
<logo style="opacity: 0.7;filter: drop-shadow(0px 0px 5px #000);margin-left: 10px;">
    <svg xmlns="http://www.w3.org/2000/svg" width="40px" class="svg-icon" viewBox="0 -960 960 960" fill="#fff">
        <path d="M481-480Zm340 320H601q0-15-1-30t-3-30h224v-520H141v60q-15-2-30-3t-30-1v-56q0-24.75 17.63-42.38Q116.25-800 141-800h680q24.75 0 42.38 17.62Q881-764.75 881-740v520q0 24.75-17.62 42.37Q845.75-160 821-160Zm-740 0v-104q41.67 0 70.83 30.33Q181-203.33 181-160H81Zm200 0q0-84.66-58-144.33Q165-364 81-364v-60q108.64 0 184.32 77.5Q341-269 341-160h-60Zm160 0q0-75-28-141.5t-77-116q-49-49.5-114.5-78T81-524v-60q87 0 163.5 33.5t133.5 91q57 57.5 90 135T501-160h-60Z"/>
    </svg>
</logo>


<div class="grid-container">
    <?php foreach ($streams as $index => $stream): ?>
        <div class="stream" style="background: <?php echo getRandomColor(); ?>;">
            <h2><?php echo htmlspecialchars($stream['name']); ?></h2><div class="loading" id="loading-<?php echo $index; ?>"></div>
            <audio id="audio-<?php echo $index; ?>" preload="auto"></audio>
            <div id="time-<?php echo $index; ?>" class="time-counter">00:00</div>
            <button class="play-button" id="button-<?php echo $index; ?>" 
                    aria-label="Play stream for <?php echo htmlspecialchars($stream['name']); ?>" 
                    onclick="toggleStream('<?php echo htmlspecialchars($stream['url']); ?>', this, '<?php echo $index; ?>')">
                <svg width="18px" height="18px" viewBox="-0.5 0 7 7" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#e0e0e0" stroke="#e0e0e0"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>play [#1003]</title> <desc>abc</desc> <defs> </defs> <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="Dribbble-Light-Preview" transform="translate(-347.000000, -3766.000000)" fill="#d4d4d4"> <g id="icons" transform="translate(56.000000, 160.000000)"> <path d="M296.494737,3608.57322 L292.500752,3606.14219 C291.83208,3605.73542 291,3606.25002 291,3607.06891 L291,3611.93095 C291,3612.7509 291.83208,3613.26444 292.500752,3612.85767 L296.494737,3610.42771 C297.168421,3610.01774 297.168421,3608.98319 296.494737,3608.57322" id="play-[#1003]"> </path> </g> </g> </g> </g></svg> 
            </button>
        </div>
    <?php endforeach; ?>
</div>

<darkmodebutton>
    <a id="toggle-dark-mode" onclick="toggleDarkMode()"><svg width="22px" height="22x" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-labelledby="nightModeIconTitle" stroke="#a7a7a7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="none" color="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title id="nightModeIconTitle">Night Mode</title> <path d="M12 19a7 7 0 1 0 0-14 7 7 0 0 0 0 14z"></path> <path d="M15.899 12.899a4 4 0 0 1-4.797-4.797A4.002 4.002 0 0 0 12 16c1.9 0 3.49-1.325 3.899-3.101z"></path> <path d="M12 5V3M12 21v-2"></path> <path d="M5 12H2h3zM22 12h-3 3zM16.95 7.05L19.07 4.93 16.95 7.05zM4.929 19.071L7.05 16.95 4.93 19.07zM16.95 16.95l2.121 2.121-2.121-2.121zM4.929 4.929L7.05 7.05 4.93 4.93z"></path> </g></svg></a>
</darkmodebutton>


<footer>
    <a><?php $currentYear = date("Y"); echo " © " . $currentYear;?> made with &#10084;</a>
</footer>

<script>


</script>
<script>
    let currentAudio = null;
    let currentButton = null;
    let timerInterval = null;
    let elapsedTime = 0; // Track elapsed time globally

    // Function to set a cookie
    function setCookie(name, value, days) {
        const expires = new Date(Date.now() + days * 864e5).toUTCString();
        document.cookie = name + '=' + encodeURIComponent(value) + '; expires=' + expires + '; path=/';
    }

    // Function to get a cookie
    function getCookie(name) {
        return document.cookie.split('; ').reduce((r, v) => {
            const parts = v.split('=');
            return parts[0] === name ? decodeURIComponent(parts[1]) : r;
        }, '');
    }

    // Function to format time (in seconds) to MM:SS
    function formatTime(seconds) {
        const minutes = Math.floor(seconds / 60);
        const secs = Math.floor(seconds % 60);
        return `${String(minutes).padStart(2, '0')}:${String(secs).padStart(2, '0')}`;
    }

    // Function to set audio metadata
    function setAudioMetadata(audio, title, artist, album, artwork) {
        audio.setAttribute('title', title);
        audio.setAttribute('artist', artist);
        audio.setAttribute('album', album);
        audio.setAttribute('poster', artwork);
    }

    // Function to toggle stream
    function toggleStream(url, button, index) {
        const timeCounter = document.getElementById(`time-${index}`);
        const loadingIndicator = document.getElementById(`loading-${index}`);
        
        // Function to reset button and UI state
        const resetButtonState = (targetButton) => {
            targetButton.innerHTML = '<svg width="18px" height="18px" viewBox="-0.5 0 7 7" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#e0e0e0" stroke="#e0e0e0"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>play [#1003]</title> <desc>abc</desc> <defs> </defs> <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="Dribbble-Light-Preview" transform="translate(-347.000000, -3766.000000)" fill="#d4d4d4"> <g id="icons" transform="translate(56.000000, 160.000000)"> <path d="M296.494737,3608.57322 L292.500752,3606.14219 C291.83208,3605.73542 291,3606.25002 291,3607.06891 L291,3611.93095 C291,3612.7509 291.83208,3613.26444 292.500752,3612.85767 L296.494737,3610.42771 C297.168421,3610.01774 297.168421,3608.98319 296.494737,3608.57322" id="play-[#1003]"> </path> </g> </g> </g> </g></svg>';
            targetButton.classList.remove('stop-button');
        };

        // Stop current stream if different URL
        if (currentAudio) {
            if (currentAudio.src !== url) {
                currentAudio.pause();
                currentAudio.src = '';
                clearInterval(timerInterval);
                
                const currentIndex = currentButton.id.split('-')[1];
                document.getElementById(`time-${currentIndex}`).style.display = 'none';
                document.getElementById(`loading-${currentIndex}`).style.display = 'none';
                
                resetButtonState(currentButton);
            } else {
                // If clicking the same stream, stop it
                currentAudio.pause();
                currentAudio.src = '';
                clearInterval(timerInterval);
                timeCounter.style.display = 'none';
                loadingIndicator.style.display = 'none';
                resetButtonState(button);
                currentAudio = null;
                currentButton = null;
                elapsedTime = 0;
                return;
            }
        }

        // Prepare for new stream with 3-second buffer
        loadingIndicator.style.display = 'block';
        button.innerHTML = '<svg fill="#fff" height="18px" width="18px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve" stroke="#ed030a"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M465.5,0H46.5C20.9,0,0,20.9,0,46.5v418.9C0,491.1,20.9,512,46.5,512h418.9c25.7,0,46.5-20.9,46.5-46.5V46.5 C512,20.9,491.1,0,465.5,0z"></path> </g></svg>';
        button.classList.add('stop-button');

        // Create a new Audio object with preloading
        currentAudio = new Audio();
        currentAudio.src = url;
        currentAudio.preload = 'auto';

        // Set audio metadata (customize as needed)
        setAudioMetadata(currentAudio, 'DJ ARMIN 2024', 'TOP', 'Music', 'art.jpg');

        // Add event listeners for buffering and error handling
        currentAudio.addEventListener('waiting', () => {
            // Show buffering indicator
            loadingIndicator.style.display = 'inline';
        });

        currentAudio.addEventListener('playing', () => {
            // Hide buffering indicator
            loadingIndicator.style.display = 'none';
        });

        let retryCount = 0;
        const maxRetries = 5;
        const retryDelay = 1000; // Initial delay in milliseconds

        function retryPlayback() {
            retryCount++;
            if (retryCount <= maxRetries) {
                const delay = retryDelay * Math.pow(2, retryCount - 1); // Exponential backoff
                console.log(`Retrying playback in ${delay / 1000} seconds...`);
                setTimeout(() => {
                    currentAudio.play().then(() => {
                        elapsedTime = 0;
                        timeCounter.style.display = 'inline';
                        timerInterval = setInterval(() => {
                            elapsedTime++;
                            timeCounter.textContent = formatTime(elapsedTime);
                        }, 1000);
                    }).catch((error) => {
                        console.error('Playback failed:', error);
                        retryPlayback();
                    });
                }, delay);
            } else {
                console.error('Maximum retries reached. Playback failed.');
                resetButtonState(button);
                loadingIndicator.style.display = 'none';
                // Attempt to play from an alternative source
                tryAlternativeSource();
            }
        }

        function tryAlternativeSource() {
            // Implement logic to try playing the audio from an alternative source
            // For example, load the audio from a local file or a different URL
        }

        // Play the audio after a 3-second buffer
        setTimeout(() => {
            currentAudio.play().then(() => {
                elapsedTime = 0;
                timeCounter.style.display = 'inline';
                timerInterval = setInterval(() => {
                    elapsedTime++;
                    timeCounter.textContent = formatTime(elapsedTime);
                }, 1000);
            }).catch((error) => {
                console.error('Playback failed:', error);
                retryPlayback();
            });
        }, 3000);

        currentButton = button;
    }

    // Function to toggle dark mode (remains the same)
    function toggleDarkMode() {
        document.body.classList.toggle('dark-mode');
        const streams = document.querySelectorAll('.stream');
        streams.forEach(stream => {
            stream.classList.toggle('dark-mode');
        });

        // Change the theme color meta tag
        const themeMeta = document.querySelector('meta[name="theme-color"]');
        if (themeMeta) {
            themeMeta.setAttribute('content', document.body.classList.contains('dark-mode') ? '#100018' : '#bfbfbf');
        }

        // Save dark mode state in a cookie
        setCookie('darkMode', document.body.classList.contains('dark-mode') ? 'true' : 'false', 7);
    }

    // Check cookie and set dark mode on page load
    window.onload = function() {
        const darkModeCookie = getCookie('darkMode');
        if (darkModeCookie === 'true') {
            document.body.classList.add('dark-mode');
            const streams = document.querySelectorAll('.stream');
            streams.forEach(stream => {
                stream.classList.add('dark-mode');
            });

            // Directly update meta tag based on cookie
            const themeMeta = document.querySelector('meta[name="theme-color"]');
            if (themeMeta) {
                themeMeta.setAttribute('content', '#100018'); 
            }
        } else {
            // If cookie is not set or false, set light mode
            const themeMeta = document.querySelector('meta[name="theme-color"]');
            if (themeMeta) {
                themeMeta.setAttribute('content', '#bfbfbf'); 
            }
        }
    };
</script>

<script>
// Function to navigate between stream divs using keyboard
function handleStreamNavigation(event) {
    const streams = document.querySelectorAll('.stream');
    const currentIndex = Array.from(streams).findIndex(stream => 
        stream === document.activeElement || stream.contains(document.activeElement)
    );

    switch(event.key) {
        case 'ArrowRight':
            // Move to next stream, wrap around to first if at end
            const nextIndex = (currentIndex + 1) % streams.length;
            streams[nextIndex].focus();
            break;
        case 'ArrowLeft':
            // Move to previous stream, wrap around to last if at beginning
            const prevIndex = (currentIndex - 1 + streams.length) % streams.length;
            streams[prevIndex].focus();
            break;
        case 'Enter':
            // If a stream div is focused, find and click its play button
            const playButton = streams[currentIndex].querySelector('.play-button');
            if (playButton) {
                playButton.click();
            }
            break;
    }
}

// Add event listener for keyboard navigation
document.addEventListener('keydown', handleStreamNavigation);

// Make stream divs focusable and add tabindex
document.querySelectorAll('.stream').forEach((stream, index) => {
    stream.setAttribute('tabindex', '0');
    stream.setAttribute('aria-label', `Stream ${index + 1}: ${stream.querySelector('h2').textContent}`);
});
</script>

<script>
    const logo = document.querySelector('logo');

    logo.addEventListener('click', () => {
        if (document.fullscreenElement) {
            document.exitFullscreen();
        } else {
            document.documentElement.requestFullscreen();
        }
    });
</script>



</body>
</html>