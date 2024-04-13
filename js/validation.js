//JavaScript validation sign up
const form =document.getElementById("form");
const nom = document.getElementById("nom");
const prenom= document.getElementById("prenom");
const phone = document.getElementById("phoneNumber");
const email = document.getElementById("email");
const password = document.getElementById("password");
const password_confirmation = document.getElementById("password_confirmation");
    
    form.addEventListener('submit', e=>{
        e.preventDefault();
        validateInputs();
    });
    const setError = (element,message) => {
        const inputControl= element.parentElement;
        const errorDisplay= inputControl.querySelector('.error');
        errorDisplay.innerText = message;
        inputControl.classList.add('error');
        inputControl.classList.remove('success');

    }
    const setSuccess = (element) => {
        const inputControl= element.parentElement;
        const errorDisplay= inputControl.querySelector('.error');
        errorDisplay.innerText = '';
        inputControl.classList.add('success');
        inputControl.classList.remove('error');
    }
    const isValidEmail = email => {
        const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(String(email).toLowerCase());
    }
    const validateInputs = () => {
        const nomValue = nom.value.trim();
        const prenomValue = prenom.value.trim();
        const phoneValue = phone.value.trim();
        const emailValue = email.value.trim();
        const passwordValue = password.value.trim();
        const password_confirmationValue = password_confirmation.value.trim();
        
        if (nomValue ===''){
            setError(nom, 'name is required');
        }else{
            setSuccess(nom);
        }
        if (prenomValue ===''){
            setError(prenom, 'prenom is required');
        }else{
            setSuccess(prenom);
        }
        if (phoneValue ===''){
            setError(phone, 'phone number is required');
        } else{
            setSuccess(phone);
        }
        if(emailValue === '') {
            setError(email, 'Email is required');
        } else if (!isValidEmail(emailValue)) {
            setError(email, 'Provide a valid email address');
        } else {
            setSuccess(email);
        }
    
        if(passwordValue === '') {
            setError(password, 'Password is required');
        } else if (passwordValue.length < 8 ) {
            setError(password, 'Password must be at least 8 character.');
        } else {
            setSuccess(password);
        }
    
        if(password_confirmationValue === '') {
            setError(password_confirmation, 'Please confirm your password');
        } else if (password_confirmationValue !== passwordValue) {
            setError(password_confirmation, "Passwords doesn't match");
        } else {
            setSuccess(password_confirmation);
        }
    
    };
    