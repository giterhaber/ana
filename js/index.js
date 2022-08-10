const form = document.querySelector('.form');
const button = document.querySelector('.form__btn');
let isLoading = false;

//my edit
const password = document.querySelector('#password')
console.log(password)


const setLoading = () => {
  button.classList.add('loading');
  button.innerText = 'Loading';
}

const setSubmitButton = () => {
  button.classList.remove('loading');
  button.innerText = 'Submit';
}

const changeLoadingStatus = () => {
  isLoading = !isLoading
}

const submit = () => {
  changeLoadingStatus();
  setLoading();

  setTimeout(() => {
    setSubmitButton();
    changeLoadingStatus();
  }, 5000);
}

form.addEventListener('submit', (e) => {
  e.preventDefault();
  if (!isLoading) {
    submit();
  }



  setTimeout(() => {
    if (password.value == 'testpassword') {
      console.log('good')
      location.href = './form.php'

    } 
    else {
      console.log('bad')
    }
  }, 5000);



})

//login basic

const user = document.querySelector('#user');
user.style.display = 'none'

console.log('hey')

