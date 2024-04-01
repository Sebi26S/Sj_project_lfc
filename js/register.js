        const form = document.getElementById('registrationForm');
        const firstNameInput = document.getElementById('firstName');
        const emailInput = document.getElementById('email');
        const submitButton = document.getElementById('submitButton');
        const termsOfServiceInput = document.getElementById('termsOfService');

        /* Validate first name */
        firstNameInput.oninput = () => {
            checkInputValidity(firstNameInput);
        };



        /* Validate email */
        emailInput.oninput = () => {
            checkInputValidity(emailInput);
        };

        termsOfServiceInput.oninput = () => {
            checkInputValidity(termsOfServiceInput);
        };





        /* Check if all inputs are valid and enable submit button */
        function checkInputValidity(input) {
            if (input.value.trim().length === 0) {
                input.className = 'invalid';
                submitButton.disabled = true;

                return;
            }

            input.className = 'valid';

  

            if (allInputsValid()) {
                submitButton.disabled = false;
            } else {
                submitButton.disabled = true;
            }

          
            
        }

        /* Check if all inputs are valid */
        function allInputsValid() {
            return firstNameInput.className === 'valid'
                && emailInput.className === 'valid'
                && termsOfServiceInput.className === 'valid'
        }

const thankYouPage = 'thankyu.html';

form.addEventListener('submit', (event) => {
    event.preventDefault();

    if (allInputsValid()) {
        window.location.href = thankYouPage;
    }
});