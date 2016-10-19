(function(){
    var icons = document.querySelectorAll('.icon__img'),
        blurb = document.querySelector('#blurb'),
        iconContainer = document.querySelector('.icon-container'),
        blurbHeader = document.querySelector('#blurb__h3'),
        blurbText = document.querySelector('#blurb__p'),
        blurbButton = document.querySelector('#blurb__button'),
        mouseoverCover = document.querySelector('#mouseover-cover'),
        imperative = document.querySelector('#landing__imperative'),
        mouseListener = document.querySelector('#mouseover-listener'),
        navBlock = document.querySelector('#nav');
    
    var mq1080 = window.matchMedia( "(min-width: 1080px)" );
    
    //function to replace icon with blue on hover
    function hoverOn(evt) {
        evt.target.src = 'images/' + evt.target.id.slice(0, -4) + '-icon-blue.png';
        insertContent(evt);
        blurb.classList.remove('hide');
    }

    function hoverOff(evt) {
        evt.target.src = 'images/' + evt.target.id.slice(0, -4) + '-icon.png';
    }
    
    //function to hide blurb on hoveroff of icon strip
    function hoverOffStrip(evt) {
        if (window.matchMedia( "(min-width: 530px)" ).matches) {
            evt.stopPropagation();
            blurb.classList.add('hide');
        }
        canvas();
    }

    //function to canvas that draws lines to icon
    function canvas(x1, y1, x2, y2, x3, y3, x4, y4) {
        var c = document.getElementById("canvas");        
        var ctx = c.getContext("2d");
        //clear canvas
        ctx.clearRect(0, 0, c.width, c.height);
        ctx.beginPath();
        //set stroke and start path
        ctx.strokeStyle = '#FFFFFF';
        ctx.moveTo(x1, y1);
        ctx.lineTo(x2, y2);
        ctx.stroke();
        ctx.lineTo(x3, y3);
        ctx.stroke();
        ctx.lineTo(x4, y4);
        ctx.stroke();
    }
    
    //function to replace content of blurb and shift the mouse hover even screen to alter blurb hide area
    function insertContent(evt) {
        switch(evt.target.id) {
            case 'caravan-img':
                //canvas coordinate to reach icon
                canvas(870, 50, 350, 50, 150, 550, 150, 550);
                //condition that adjusts hide area based on browser size. If too small, stretch most of the page.
                if (mq1080.matches) {
                    mouseoverCover.style.width = '73%';
                } else {
                    mouseoverCover.style.width = '90%';
                }
                imperative.innerHTML = "DISCOVER";
                blurbHeader.innerHTML = "Caravan Amphibian";
                blurbText.innerHTML = "<span id='blurb__span'>Discover</span> the beauty and majesty of " +
                    "New Zealands lakes and valleys in an amphibious floatplane. " +
                    "Travel to any number of destinations, no matter how remote.";
                break;
            case 'skyhawk-img':
                canvas(870, 50, 575, 50, 375, 550, 375, 550);
                if (mq1080.matches) {
                    mouseoverCover.style.width = '57%';
                } else {
                    mouseoverCover.style.width = '85%';
                }
                imperative.innerHTML = "EXPERIENCE";
                blurbHeader.innerHTML = "Cessna Skyhawk";
                blurbText.innerHTML = "<span id='blurb__span'>Experience</span> the freedom of flight and see the lake " +
                    "district from a new perspective via a scenic flight in a Skyhawk. " +
                    "Enjoy the best view anywhere in comfort and safety.";
                break;
            case 'glider-img':
                canvas(870, 50, 825, 50, 625, 550, 625, 550);
                if (mq1080.matches) {
                    mouseoverCover.style.width = '43%';
                } else {
                    mouseoverCover.style.width = '80%';
                }
                imperative.innerHTML = "SOAR";
                blurbHeader.innerHTML = "DG 1001s";
                blurbText.innerHTML = "<span id='blurb__span'>Soar</span> amongst the clouds in an engineless " +
                    "sailplane. Take a 3 hour flight and ride aloft on thermals " +
                    "across the breathtaking southern alps.";
                break;
            case 'jetranger-img':
                canvas(870, 50, 850, 50, 850, 550, 850, 550);
                if (mq1080.matches) {
                    mouseoverCover.style.width = '30%';
                } else {
                    mouseoverCover.style.width = '70%';
                }
                imperative.innerHTML = "EXPLORE";
                blurbHeader.innerHTML = "Bell 206 Jetranger";
                blurbText.innerHTML = "<span id='blurb__span'>Explore</span> the slopes of the mountains, or " +
                    "experience all the lake district has to offer, via day" +
                    "trips made possible due to the versatility of the Jetranger." +
                    " Pick up and drop off available.";
                break;
            case 'extra-img':
                canvas(870, 50, 850, 50, 850, 300, 1050, 550);
                if (mq1080.matches) {
                    mouseoverCover.style.width = '25%';
                } else {
                    mouseoverCover.style.width = '60%';
                }
                imperative.innerHTML = "EXHILARATE";
                blurbHeader.innerHTML = "Extra 200";
                blurbText.innerHTML = "<span id='blurb__span'>Exhilarate</span> your senses as you spin and streak through " +
                    "the sky in an aerobatic stunt plane. If you " +
                    "crave the adrenaline pumping rush of speed and agility, " +
                    "you need not look any further than our Extra 200";
                break;
        }
    }

    //events that handle the hiding of the blurb. If the pointer touches the navblock or its children, or if it touches
    //the mouse listener that covers the entire upper landing area, hide the blurb.
    mouseListener.addEventListener('mouseenter', hoverOffStrip);
    navBlock.addEventListener('mouseenter', hoverOffStrip);

    //add listeners to icons
    for (var i = 0; i < icons.length; i++) {
        icons[i].addEventListener('mouseover', hoverOn);
        icons[i].addEventListener('mouseout', hoverOff);
    }
})();