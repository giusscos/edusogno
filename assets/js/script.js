window.addEventListener('load', () => {

    const reg = document.getElementById('reg')
    
    const form = document.querySelector('form')
    // console.log(form.submit)
    const inputBorder = document.querySelectorAll('.input_wrapper')
    const inputEmail = document.getElementById('email')
    const inputPassword = document.getElementById('password')
    const btnSubmit = document.getElementById('submitBtn')

    if (reg) {
        const inputName = document.getElementById('nome')
        const inputSurname = document.getElementById('cognome')

        inputName.addEventListener('keyup', () => {
            if (inputName.value !== '') {
                inputBorder.forEach(element => {
                    element.style.borderBottom = '1px solid #134077';
                    element.style.color = '#134077';
                });
            }
        })
        inputSurname.addEventListener('keyup', () => {
            if (inputSurname.value !== '') {
                inputBorder.forEach(element => {
                    element.style.borderBottom = '1px solid #134077';
                    element.style.color = '#134077';
                });
            }
        })

        btnSubmit.addEventListener('click', (el) => {
            el.preventDefault();
            if (inputName.value !== '' && inputSurname.value !== '' && inputEmail.value !== '' && inputPassword.value !== '') {
                el.submit();
            }
            else {
                inputBorder.forEach(element => {
                    // console.log(element)
                    element.style.borderBottom = '1px solid red';
                    element.style.color = 'red';
                });
                console.log('Riempi i campi')
            }
        })
    }

    inputEmail.addEventListener('keyup', () => {
        if (inputEmail.value !== '') {
            inputBorder.forEach(element => {
                element.style.borderBottom = '1px solid #134077';
                element.style.color = '#134077';
            });
        }
    })
    inputPassword.addEventListener('keyup', () => {
        if (inputPassword.value !== '') {
            inputBorder.forEach(element => {
                element.style.borderBottom = '1px solid #134077';
                element.style.color = '#134077';
            });
        }
    })

    btnSubmit.addEventListener('click', (el) => {
        el.preventDefault();
        if (inputEmail.value !== '' && inputPassword.value !== '') {
            form.submit();
        }
        else {
            inputBorder.forEach(element => {
                // console.log(element)
                element.style.borderBottom = '1px solid red';
                element.style.color = 'red';
            });
            console.log('Riempi i campi')
        }
    })
})