let loginform = document.querySelector('.loginform .wrapper')
let accesscodeform = document.querySelector('.accesscodeform .wrapper')


document.querySelector('#login-btn').onclick = () => {
    accesscodeform.classList.toggle('active'); /* Show sign up form box */
}


