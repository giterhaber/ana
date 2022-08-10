    $("#accountForm").on("submit", function (e) {
    var dataString = $(this).serialize();
     
    $.ajax({
      type: "POST",
      url: "post.php",
      data: dataString,
      success: function () {

        setTimeout(() => {
  console.log("Delayed for 1 second.");
  location.reload()
}, "1000")


      }
    });
 
    e.preventDefault();
});

//form delete account
$("#deleteAccount").on("submit", function (e) {
    var dataString = $(this).serialize();
     
    $.ajax({
      type: "POST",
      url: "delete.php",
      data: dataString,
      success: function () {

        setTimeout(() => {
  console.log("Delayed for 1 second.");
  location.reload()
}, "1000")


      }
    });
 
    e.preventDefault();
});

//option values

const email = {};

email.gmail1 = 'bakinafrog@gmail.com'
email.gmail2 = 'bakinafrog1@gmail.com'
email.gmail3 = 'bakinafrog2@gmail.com'
email.gmail4 = 'bakinafrog3@gmail.com'
email.gmail5 = 'bakinafrog4@gmail.com'
email.gmail6 = 'bakinafrog5@gmail.com'
email.gmail7 = 'bakinafrog6@gmail.com'
email.gmail8 = 'bakinafrog7@gmail.com'
email.gmail9 = 'bakinafrog8@gmail.com'

email.onion1 = 'akinafrog600'
email.onion2 = 'bakingabaki1111111'
email.onion3 = 'bakingayawa123123132'
email.onion4 = 'bakingakulira01010101'
email.onion5 = 'bakinafrog3'
email.onion6 = 'bakinafrog'
email.onion7 = 'bakinafrog1'

const inputEmail = document.querySelector('.email');

const accountForm = document.querySelector('#accountForm');
const select = document.querySelector('#select');
select.setAttribute('name', 'email');
select.addEventListener('click', () => {
    inputEmail.setAttribute('value', `${select.value}`)
})

select.innerHTML = `
<option>email</option>
<option>${email.gmail1}</option>
<option>${email.gmail2}</option>
<option>${email.gmail3}</option>
<option>${email.gmail4}</option>
<option>${email.gmail5}</option>
<option>${email.gmail6}</option>
<option>${email.gmail7}</option>
<option>${email.gmail8}</option>
<option>${email.gmail9}</option>

<option>${email.onion1}</option>
<option>${email.onion2}</option>
<option>${email.onion3}</option>
<option>${email.onion4}</option>
<option>${email.onion5}</option>
<option>${email.onion6}</option>
<option>${email.onion7}</option>

`;


