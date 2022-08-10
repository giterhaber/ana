
  
  //logout
document.querySelector('#logout').addEventListener("click", signoutpage)
function signoutpage() {
firebase.auth().signOut();}


firebase.auth().onAuthStateChanged((user) => {
    if (user) {
      var uid = user.uid;
      // ...
    } else {
      location.href = "./index.php";
    }
  });