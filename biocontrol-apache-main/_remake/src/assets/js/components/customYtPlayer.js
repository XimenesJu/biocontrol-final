$(function() {

    const videoPlayers = document.querySelectorAll('.video-player');

    if(videoPlayers.length) {

        // Injecting YouTube Iframe API
        const tag = document.createElement('script');
        tag.src = "//www.youtube.com/iframe_api";
        const firstScriptTag = document.getElementsByTagName('script')[0];
        firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

        window.onYouTubeIframeAPIReady = function() {

            for(let i = 0; i < videoPlayers.length; i++) {

                let target = videoPlayers[i].querySelector('.player .target');
                let btnPlay = videoPlayers[i].querySelector('.play-button');
                let infos = videoPlayers[i].querySelector('.infos');

                let player;

                player = new YT.Player(target, {
                    height: videoPlayers[i].dataset.youtubeWidth || '100%',
                    width: videoPlayers[i].dataset.youtubeHeight || '100%',
                    videoId: videoPlayers[i].dataset.youtubeId,
                    playerVars: {
                        'autoplay': 0,
                        'rel': 0,
                        'showinfo': 0
                    },
                    events: {
                        'onStateChange': ev => playerStateChange(ev, videoPlayers[i])
                    }

                });

                btnPlay.addEventListener('click', () => {

                    let playerWrapper = videoPlayers[i].querySelector('.player');
        
                    if(infos)
                        infos.setAttribute('class', 'infos');

                    setTimeout(() => {

                        player.playVideo();

                        playerWrapper.setAttribute('class', 'player active');

                    }, 200);

                });

                let closeBtn = videoPlayers[i].querySelector('.player .close-player');

                if(closeBtn) {
                    closeBtn.addEventListener('click', ev => {

                        player.pauseVideo();

                        playerStateChange({data: 0}, videoPlayers[i])
                    });
                }
            }
        }

        function playerStateChange(ev, wrapper) {

            if(ev.data != 0) return;

            let playerWrapper = wrapper.querySelector('.player');
            let infos = wrapper.querySelector('.infos');

            playerWrapper.setAttribute('class', 'player');

            if(infos != null)
                infos.setAttribute('class', 'infos');
        }
    }
});