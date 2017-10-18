/**
 *
 * HTML5 Audio player with playlist
 *
 * Licensed under the MIT license.
 * http://www.opensource.org/licenses/mit-license.php
 * 
 * Copyright 2012, Script Tutorials
 * http://www.script-tutorials.com/
 */
jQuery(document).ready(function() {

    // inner variables
    var song;
    var mode;
    var player;
    var tracker = jQuery('.mesh-seek-bar');
    var volume = jQuery('.volume');
    

    var buttonPlay  = jQuery('.mesh-play');
    var buttonPause = jQuery('.mesh-pause');
    var buttonPrev  = jQuery('.mesh-prev');
    var buttonNext  = jQuery('.mesh-next');
    

    function initAudio(elem) {
        var url = elem.attr('audiourl');
        var title = elem.text();
        var cover = elem.attr('cover');
        var artist = elem.attr('artist');

        jQuery('.mesh-title').text(title);
        jQuery('.mesh-artist').text(artist);
        jQuery('.mesh-thumbnail img').attr('src',cover);;

        song = new Audio(url);
  
        song.onloadedmetadata = function() {
            var duration = getFormattedDuration(song.duration);
            if (song.duration == 'Infinity') {
                setLiveMode();
            } else {
                if (mode != 'playlist')
                    setPlaylistMode();

                var timeStart = duration.replace(new RegExp("[0-9]", "g"), "0");
                
                jQuery('.mesh-duration').html(duration);
                jQuery('.mesh-current-time').html(timeStart);
                tracker.slider("option", "max", song.duration);
            }
        };

        // timeupdate event listener
        song.addEventListener('timeupdate',function (){
            var curtime = parseInt(song.currentTime, 10);
            tracker.slider('value', curtime);
            jQuery('.mesh-current-time').html(getFormattedDuration(song.currentTime));
            
            if (song.currentTime == song.duration) {
                jQuery('.ui-slider-range').css('width', '100%');
                setTimeout(function(){
                    jQuery('.mesh-play').trigger('click');
                }, 1000);
                setTimeout(function(){
                    jQuery('.mesh-next').trigger('click');
                }, 500);
                
                
            }   
        });

        jQuery('.playlist li').removeClass('active');
        elem.addClass('active');
    }
    function playAudio() {
        song.play();
        $active = $('.playlist .active');
        id = $active.attr('data-podcast');
        
        $tr = $('table tbody').find('[data-podcast='+id+']');
        $action = $tr.find('.mesh-podcast-action');
        $action.find('.fa-play').addClass('hidden');
        $action.find('.fa-pause').removeClass('hidden');

        jQuery('.mesh-play').removeClass('visible');
        jQuery('.mesh-play').addClass('hidden');
        
        jQuery('.mesh-pause').removeClass('hidden');
        jQuery('.mesh-pause').addClass('visible');
    }
    function stopAudio() {
        song.pause();
        $active = $('.playlist .active');
        id = $active.attr('data-podcast');
        
        $tr = $('table tbody').find('[data-podcast='+id+']');
        $action = $tr.find('.mesh-podcast-action');
        $action.find('.fa-play').removeClass('hidden');
        $action.find('.fa-pause').addClass('hidden');

        jQuery('.mesh-play').removeClass('hidden');
        jQuery('.mesh-play').addClass('visible');
        
        jQuery('.mesh-pause').removeClass('visible');
        jQuery('.mesh-pause').addClass('hidden');
    }


    function setLiveMode() {
        mode = 'live';
        jQuery('#mesh-main-player-content').addClass('live');
        getLiveTrack();
        //jQuery('.player-live').show();
        //jQuery('.player-music').hide();

        buttonPrev.off();
        buttonNext.off();
    }

    function setPlaylistMode() {
        mode = 'playlist';
        jQuery('#mesh-main-player-content').removeClass('live');
        //jQuery('.player-live').hide();
        //jQuery('.player-music').show();

        buttonPrev.on('click', playerPrev);
        //buttonNext.on('click', playerNext);
    }

    // play click
    var playerPlay = function (e) {
        e.stopPropagation();
        e.stopPropagation();
        playAudio();
    }

    // pause click
    var playerPause = function (e) {
        e.stopPropagation();
        e.stopPropagation();
        stopAudio();
    }

    // forward click
    var playerNext = function (e) {
        e.preventDefault();
        e.stopPropagation();
        stopAudio();

        tracker.slider('value', 0);

        var next = jQuery('.playlist li.active').next();
        if (next.length == 0) {
            next = jQuery('.playlist li:first-child');
        }
        setTimeout(function(){
            jQuery('.mesh-play').trigger('click');
        }, 500);
        initAudio(next);
    }

    // rewind click
    var playerPrev = function (e) {
        e.preventDefault();
        e.stopPropagation();
        stopAudio();

        var prev = jQuery('.playlist li.active').prev();
        if (prev.length == 0) {
            prev = jQuery('.playlist li:last-child');
        }
        initAudio(prev);
    }

    function getFormattedDuration(time){
        var duration = '';
        var date = new Date(null);
        date.setSeconds(time);
        
        var time = date.toTimeString().split(' ')[0];
        var hours = time.split(':')[0];
        var minutes = time.split(':')[1];
        var seconds = time.split(':')[2];
        
        if (parseInt(hours) > 1)
            duration = (parseInt(hours)-1) + ':';
                    
        if (parseInt(minutes) == 0 && parseInt(hours) == 1)
            duration = 0 + ':';
        else    
            duration = duration + minutes + ':';
        
        return duration + seconds;
    }

    function getLiveTrack(){
        $.ajax({
            type: "get",
            url: APP_URL + '/ajax-get-live-track',
            success: function(json){
              live = JSON.parse(json);
              jQuery('.mesh-title').text(live.title);
              jQuery('.mesh-artist').text(live.artist);
            }
          });
    }

    buttonNext.on('click',  playerNext);
    buttonPrev.on('click',  playerPrev);
    buttonPlay.on('click',  playerPlay);
    buttonPause.on('click', playerPause);

    // show playlist
    jQuery('.pl').click(function (e) {
        e.preventDefault();

        jQuery('.playlist').fadeIn(300);
    });

    // playlist elements - click
    jQuery('.mesh-podcast-action .fa-play').click(function () {
        $button  = $(this).parent();
        $podcast = $button.parent();
        
        $(this).addClass('hidden');
        $button.find('.fa-pause').removeClass('hidden');

        id = $podcast.attr('data-podcast');
        audio = $('.playlist').find('[data-podcast='+id+']');

        stopAudio();
        setTimeout(function(){
            jQuery('.mesh-play').trigger('click');
        }, 500);
        initAudio(jQuery(audio));
    });

    jQuery('.mesh-podcast-action .fa-pause').click(function () {
        $button  = $(this).parent();
        $podcast = $button.parent();
        
        $(this).addClass('hidden');
        $button.find('.fa-play').removeClass('hidden');

        id = $podcast.attr('data-podcast');
        audio = $('.playlist').find('[data-podcast='+id+']');

        jQuery('.mesh-pause').trigger('click');
    });

    // initialization - first element in playlist
    initAudio(jQuery('.playlist li:first-child'));

    // set volume
    song.volume = 0.8;

    // initialize the volume slider
    volume.slider({
        range: 'min',
        min: 1,
        max: 100,
        value: 100,
        start: function(event,ui) {},
        slide: function(event, ui) {
            song.volume = ui.value / 100;
        },
        stop: function(event,ui) {},
    });

    // empty tracker slider
    tracker.slider({
        range: 'min',
        min: 0, max: 10,
        start: function(event,ui) {},
        slide: function(event, ui) {
            song.currentTime = ui.value;
        },
        stop: function(event,ui) {}
    });

    //jQuery('#playlist-toggle').on('click', playerNext);


    if (jQuery('.main-music-player').css('display') === 'none')
        jQuery('.main-music-player').css('display', 'block');

    window.setInterval(function(){
        if (mode == 'live')
            getLiveTrack();
    }, 150000);

});
