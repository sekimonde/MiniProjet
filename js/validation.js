const form = document.getElementById("form");
const nom = document.getElementById("nom");
const prenom = document.getElementById("prenom");
const phone = document.getElementById("phoneNumber");
const email = document.getElementById("email");
const password = document.getElementById("password");
const password_confirmation = document.getElementById("password_confirmation");

form.addEventListener('submit', e => {
    const isValid = validateInputs(); // Check if all inputs are valid
    if (!isValid) {
        e.preventDefault();  // Prevent form submission if validation fails
    }
});

const setError = (element, message) => {
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector('.error');
    errorDisplay.innerText = message;
    inputControl.classList.add('error');
    inputControl.classList.remove('success');
}

const setSuccess = (element) => {
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector('.error');
    errorDisplay.innerText = '';
    inputControl.classList.add('success');
    inputControl.classList.remove('error');
}

const isValidEmail = email => {
    const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}

const validateInputs = () => {
    let isValid = true; // Flag to track overall form validity

    const nomValue = nom.value.trim();
    const prenomValue = prenom.value.trim();
    const phoneValue = phone.value.trim();
    const emailValue = email.value.trim();
    const passwordValue = password.value.trim();
    const password_confirmationValue = password_confirmation.value.trim();

    if (nomValue === '') {
        setError(nom, 'Name is required');
        isValid = false;
    } else {
        setSuccess(nom);
    }
    if (prenomValue === '') {
        setError(prenom, 'Prenom is required');
        isValid = false;
    } else {
        setSuccess(prenom);
    }
    if (phoneValue === '') {
        setError(phone, 'Phone number is required');
        isValid = false;
    } else {
        setSuccess(phone);
    }
    if (emailValue === '') {
        setError(email, 'Email is required');
        isValid = false;
    } else if (!isValidEmail(emailValue)) {
        setError(email, 'Provide a valid email address');
        isValid = false;
    } else {
        setSuccess(email);
    }
    if (passwordValue === '') {
        setError(password, 'Password is required');
        isValid = false;
    } else if (passwordValue.length < 8) {
        setError(password, 'Password must be at least 8 characters.');
        isValid = false;
    } else {
        setSuccess(password);
    }
    if (password_confirmationValue === '') {
        setError(password_confirmation, 'Please confirm your password');
        isValid = false;
    } else if (password_confirmationValue !== passwordValue) {
        setError(password_confirmation, "Passwords don't match");
        isValid = false;
    } else {
        setSuccess(password_confirmation);
    }

    return isValid; // Return flag indicating overall form validity
};

const allFieldsAreValid = () => {
    // Check for any 'error' class in form
    return !Array.from(form.querySelectorAll('.input-control')).some(element => element.classList.contains('error'));
};