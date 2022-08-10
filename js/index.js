const form = document.querySelector('.form');
const button = document.querySelector('.form__btn');
let isLoading = false;


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
})