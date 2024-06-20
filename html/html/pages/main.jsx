const setAmountOfGuests = () => {
    const amountOfGuests = document.querySelector('#amountGuests').value;
    const registerForm = document.querySelector('#registerform');
    console.log(amountOfGuests);
    for(let i = 0; i < amountOfGuests; i++) {
        const voornaamInput = document.createElement('input');
        voornaamInput.type = 'text';
        voornaamInput.placeholder = 'Voornaam ' + i;
        voornaamInput.name = 'voornaam' + i;

        const achternaamInput = document.createElement('input');
        achternaamInput.type = 'text';
        achternaamInput.placeholder = 'Achternaam ' + i;
        achternaamInput.name = 'achternaam' + i;

        const emailInput = document.createElement('input');
        emailInput.type = 'email';
        emailInput.placeholder = 'Email ' + i;
        emailInput.name = 'email' + i;
        
        registerForm.appendChild(voornaamInput);
        registerForm.appendChild( achternaamInput);
    }
}