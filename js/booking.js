(function () {
    function addFormValidation(theForm) {
    }

    //load the elements into variables
    var theForm = document.querySelector('#booking-form'),
        passengerSlider = theForm.querySelector('#passengers'),
        totalValue = theForm.querySelector('#total'),
        select = theForm.querySelector('#service'),
        passengerCount = theForm.querySelector('#passengers').value,
        passengerForms = theForm.querySelectorAll('.passengers__form');
        
    theForm.noValidate = true;
    var elements = theForm.elements;
    
    function unhideSecondaries() {
        passengerCount = theForm.querySelector('#passengers').value;
        calculateTotal();

                //loop through the passenger forms, hiding each of them
        for (var i = 0; i < passengerForms.length; i++) {
            passengerForms[i].classList.add('hide');
        }
        //unhide as many forms as are passengers selected
        for (var j = 0; j < (passengerCount - 1); j++) {
            passengerForms[j].classList.remove('hide');
        }
    }
    
    //function to calculate total cost of booking
    function calculateTotal() {
        var passengerPrice = 0;
        var selectedService = select.selectedIndex;
        switch(selectedService) {
            case 1:
                passengerPrice = 350;
                passengerSlider.max = 7;
                break;
            case 2:
                passengerPrice = 450;
                passengerSlider.max = 4;
                break;
            case 3:
                passengerPrice = 1200;
                passengerSlider.max = 1;
                break;
            case 4:
                passengerPrice = 350;
                passengerSlider.max = 7;
                break;
            case 5:
                passengerPrice = 500;
                passengerSlider.max = 7;
                break;
            case 6:
                passengerPrice = 600;
                passengerSlider.max = 7;
                break;
            case 7:
                passengerPrice = 650;
                passengerSlider.max = 7;
                break;
            case 8:
                passengerPrice = 550;
                passengerSlider.max = 7;
                break;
        }
        totalValue.innerHTML = "Total Price = $" + passengerPrice * passengerCount;
    }

    //add passenger form unhide event on release of the passenger count slider
    passengerSlider.addEventListener('mouseup', unhideSecondaries);

    //add passenger slider input event, to display current value of slider
    passengerSlider.addEventListener('input', function () {
        theForm.querySelector('#' + event.target.id + '-value').innerHTML = event.target.value;
    });
    
    //add on input event to service select
    select.addEventListener('change', function() {
        calculateTotal();
        theForm.querySelector('#' + passengerSlider.id + '-value').innerHTML = passengerSlider.value;
        unhideSecondaries();
    }); 

    //add on blur event to all elements
    for (var j = 0; j < elements.length; j++) {
        elements[j].addEventListener('blur', function () {
            isFieldValid(event.target);
        });
    }

    //add submit event
    theForm.addEventListener('submit', function (evt) {
        var isError = false;
        for (var i = 0; i < elements.length; i++) {
            if (!isFieldValid(elements[i])) {
                isError = true;
            }
        }
        if (isError) {
            evt.preventDefault();
        }
    });

    //field validation function
    function isFieldValid(field) {
        var errorMessage = "";
        if (!needsToBeValidated(field)) {
            //if field does not require validation, return true and exit function
            return true;
        }
        //otherwise set the field error condition to normal
        var errorSpan = theForm.querySelector("#" + field.name + "-error");
        errorSpan.classList.remove('danger');
        errorSpan.innerHTML = "";
        
        //conditions to check for
        if (field.type === "select-one" && field.value === "default") {
            errorMessage = "Please select an option.";
        }

        if (field.type === "email" && !isEmail(field.value)) {
            errorMessage = "This should be a valid email address.";
        }
        
        if (field.name === "day" && !isDay(field.value)) {
            errorMessage = "This should be a valid date. Please use dd/mm/yyyy format";
        }

        if (field.required && field.value.trim() === "") {
            errorMessage = "This field is required.";
        }

        //if the error message has been filled, add error message and classes
        //also, only clear text if it is not a drop down
        if (errorMessage !== "") {
            if (field.type !== "select-one") {
                field.value = "";
            }
            errorSpan.classList.add('danger');
            errorSpan.innerHTML = errorMessage;
            return false;
        }
        return true;
    }

    //check for valid email
    function isEmail(input) {
        return input.match(/^([a-z0-9_.\-+]+)@([\da-z.\-]+)\.([a-z\.]{2,})$/);
    }
    
    //check for valid date    
     function isDay(input) {
        return input.match(/^(\d\d\/\d\d\/\d\d\d\d)$/);
    }

    //check if field is needing validation at all.
    function needsToBeValidated(field) {
        if (field.offsetHeight === 0 && field.offsetWidth === 0) {
            return false;
        }
        return ['range', 'radio', 'submit', 'reset', 'button', 'hidden', 'fieldset'].indexOf(field.type) === -1;
    }

    addFormValidation(document.querySelector('#booking-form'));
})
();