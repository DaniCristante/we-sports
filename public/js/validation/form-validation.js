(function() {
    // Before using it we must add the parse and format functions
    // Here is a sample implementation using moment.js
    validate.extend(validate.validators.datetime, {
        // The value is guaranteed not to be null or undefined but otherwise it
        // could be anything.
        parse: function(value, options) {
            return +moment.utc(value);
        },
        // Input is a unix timestamp
        format: function(value, options) {
            var format = options.dateOnly ? "YYYY-MM-DD" : "YYYY-MM-DD hh:mm:ss";
            return moment.utc(value).format(format);
        }
    });

    const surnameRegexp = new RegExp(/^[A-Z](\w+)?(\s?([A-Z]+?\w+))*/);
    const regex = new RegExp(/(?=.*?\d)(?=.*?[a-z])/);
    // These are the constraints used to validate the form
    var constraints = {
        uname: {
            presence: true,
            format: {
                pattern: /[A-Z][a-z]+/,
                message: "^La primera letra en mayúscula"
            }
        },
        surnames: {
            presence: true,
            format: {
                pattern: surnameRegexp,
                message: "^Almenos un apellido y la primera letra en mayúscula."
            }
        },
        // birthdate: {
        //     presence: true,
        // },
        email: {
            presence: true,
            email: true
        },
        phone: {
            presence: true,
            format: {
                pattern: /^[0-9]{9}$/,
                message: "^Deben ser 9 números exactos."
            }
        },
        city: {
            presence: true
        },
        address: {
          presence: true
        }
    };
    // Hook up the form so we can prevent it from being posted
    let form = document.querySelector("form#user-update-form");
    form.addEventListener("submit", function(ev) {
        /*
            El prevent default solo se ejecuta si el formulario tiene errores
        */
        if (!handleFormSubmit(form)){
            ev.preventDefault();
        }
    });
    // Hook up the inputs to validate on the fly
    //contiene todos los inputs del formulario
    var inputs = document.querySelectorAll("input, textarea, select");
    for (var i = 0; i < inputs.length; ++i) {
        inputs.item(i).addEventListener("change", function(ev) {
            var errors = validate(form, constraints) || {};
            showErrorsForInput(this, errors[this])
        });
    }
    function handleFormSubmit(form, input) {
        // validate the form against the constraints
        var errors = validate(form, constraints);
        // then we update the form to reflect the results
        showErrors(form, errors, input || {});
        if (!errors) {
            // showSuccess();
            return true;
        }
        return false;
    }
    // Updates the inputs with the validation errors
    function showErrors(form, errors) {
        console.log(form);
        // We loop through all the inputs and show the errors for that input
        _.each(form.querySelectorAll("input[name], select[name]"), function(input) {
            // Since the errors can be null if no errors were found we need to handle
            // that
            showErrorsForInput(input, errors && errors[input.name]);
        });
    }
    // Shows the errors for a specific input
    function showErrorsForInput(input, errors) {
        // This is the root of the input
        var formGroup = closestParent(input.parentNode, "form-group");
        // Find where the error messages will be insert into
        var messages = formGroup.querySelector(".messages");
        // First we remove any old messages and resets the classes
        resetFormGroup(formGroup, input, messages);
        // If we have errors
        if (errors) {
            // we first mark the group has having errors
            // formGroup.classList.add("has-error");
            // then we append all the errors
            _.each(errors, function(error) {
                addError(messages, error, input);
            });
        } else {
            // otherwise we simply mark it as success
            formGroup.classList.add("has-success");
        }
    }
    // Recusively finds the closest parent that has the specified class
    function closestParent(child, className) {
        if (!child || child == document) {
            return null;
        }
        if (child.classList.contains(className)) {
            return child;
        } else {
            return closestParent(child.parentNode, className);
        }
    }
    function resetFormGroup(formGroup, input) {
        // Remove the success and error classes
        // formGroup.classList.remove("has-error");
        // formGroup.classList.remove("has-success");
        input.style.border = "";
        // and remove any old messages
        _.each(formGroup.querySelectorAll(".text-muted.form-text"), function(el) {
            el.parentNode.removeChild(el);
        });
    }
    // Adds the specified error with the following markup
    // <p class="help-warningMessage error">[message]</p>
    function addError(messages, error, input) {
        var warningMessage = document.createElement("small");
        input.style.border = "2px solid red";
        warningMessage.classList.add("text-muted");
        warningMessage.classList.add("form-text");
        warningMessage.innerText = error;
        messages.appendChild(warningMessage);
    }
    // function showSuccess() {
    //     // We made it \:D/
    //     alert("Success!");
    // }
})();
