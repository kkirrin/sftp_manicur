export const initLk = () => {
    const lk = document.querySelector('.lk');

    if (lk) {
        // phone
        const phoneInput = document.querySelector('#reg_shipping_phone');
        const phoneEditButton = document.querySelector('.phone-edit-button');
        const saveButton = document.querySelector('.sendbutton');

        //name
        const nameInput = document.querySelector('#reg_first_name');
        const nameEditButton = document.querySelector('.name-edit-button');
        const saveButton2 = document.querySelector('.sendbutton2');

        //email
        const emailInput = document.querySelector('#reg_email');
        const emailEditButton = document.querySelector('.email-edit-button');
        const saveButton3 = document.querySelector('.sendbutton3');

        saveButton.style.display = 'none';
        saveButton2.style.display = 'none';
        saveButton3.style.display = 'none';
        phoneInput.disabled = true;
        nameInput.disabled = true;
        emailInput.disabled = true;

        // listener PHONE
        phoneEditButton.addEventListener('click', () => {
            phoneInput.disabled = false;
            saveButton.style.display = 'block';
        });

        // listener NAME
        nameEditButton.addEventListener('click', () => {
            nameInput.disabled = false;
            saveButton2.style.display = 'block';
        });

        // listener EMAIL
        emailEditButton.addEventListener('click', () => {
            emailInput.disabled = false;
            saveButton3.style.display = 'block';
        });
    }
}