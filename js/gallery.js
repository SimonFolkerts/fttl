(function () {

    var images = document.querySelectorAll(".thumbnail-strip__img"),
        mainImage = document.querySelector(".main-image"),
        lastBordered = document.querySelector(".thumbnail-strip__img"),
        loadingImage = document.querySelector('#loading-image'),
        clickLeft = document.querySelector('#left-button'),
        clickRight = document.querySelector('#right-button');


    function addListener() {
            //add listener to thumbails
        for (var i = 0; i < images.length; i++) {
            images[i].addEventListener("click", switchImage)
        }
        //if left chevron clicked, check left for sibling, if present, set sibling as new focus, 
        //otherwise go to the end of the strip and clickthe last thumbnail.
        clickLeft.addEventListener('click', function () {
            if (lastBordered.previousElementSibling) {
                lastBordered.previousElementSibling.click();
            } else {
                lastBordered.parentNode.lastElementChild.click();
            }
        });
        //same for right side, except checking right and otherwise going to the first sibling.
        clickRight.addEventListener('click', function () {
            if (lastBordered.nextElementSibling) {
                lastBordered.nextElementSibling.click();
            } else {
                lastBordered.parentNode.firstElementChild.click();
            }
        });
    }

    //function that actually switches image. Unhides loading image, priming it to rehide upon image load.
    function switchImage(evt) {
        loadingImage.classList.remove('hide');
        mainImage.onload = function () {
            loadingImage.classList.add('hide');
        };
        //rename the src so it points to the main image.
        mainImage.src = evt.target.src.replace('thumb', 'main');
        //remove the border from the previously selected thumbnail.
        lastBordered.classList.remove("border");
        //add the border to the currently clicked image,
        evt.target.classList.toggle("border");
        //and set the currently clicked image to the selected state.
        lastBordered = evt.target;
        
        //find left offset of image, and then scroll the div by said amount plus a modifier to center the
        //selected image in the div.
       var topleft = lastBordered.offsetLeft;
        document.querySelector('#thumbnail-strip').scrollLeft = topleft - 550;

    }

    addListener();
    lastBordered.classList.add("border");
})
();