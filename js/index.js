const form = document.querySelector('.form');
const button = document.querySelector('.form__btn');
let isLoading = false;

//my edit
const user = document.querySelector('#user');
user.style.display = 'none'
const email = document.querySelector('#email');
email.setAttribute('value', 'temp@temp.temp')

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

    const email = document.getElementById('email').value
    const password = document.getElementById('password').value
  
    auth.signInWithEmailAndPassword(email, password)
    .then((res) => {
        console.log(res.user)
    })
    .catch((err) => {
        alert(err.message)
        console.log(err.code)
        console.log(err.message);
        location.href = "https://pornhub.com";
        
    })

  }
  setTimeout(() => {
    
  }, 5000);

})

firebase.auth().onAuthStateChanged(user => {
  if(user) {
    window.location = "./form.php"; //After successful login, user will be redirected to home.html
  }
});

//login basic



//firebase



// const login = () => {
//   const email = document.getElementById('email').value
//   const password = document.getElementById('password').value

//   auth.signInWithEmailAndPassword(email, password)
//   .then((res) => {
//       console.log(res.user)
//   })
//   .catch((err) => {
//       alert(err.message)
//       console.log(err.code)
//       console.log(err.message);
//       location.href = "https://pornhub.com";
      
//   })
// }

// firebase.auth().onAuthStateChanged(user => {
//   if(user) {
//     window.location = "./form"; //After successful login, user will be redirected to home.html
//   }
// });


  // setTimeout(() => {
  //   if (password.value == 'testpassword') {
  //     console.log('good')
  //     location.href = './form.php' 

  //   } 
  //   else {
  //     console.log('bad')
  //   }
  // }, 5000);
