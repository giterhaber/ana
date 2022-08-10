

const editButton = document.getElementById('button');
const editSection = document.getElementById('editSection');

const editSection2 = document.getElementById('editSection2');


function signature(id64) {
    var apiText = `http://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?key=1D44637D2A3CEEF85B9DCE9D42B54C08&steamids=${id64}`
    console.log(apiText)

    $.getJSON(apiText, function(data) { 

        const player = data.response.players[0];

        var state = player.profilestate
        var country = player.loccountrycode
        var steamName = player.personaname
        var url = player.profileurl

        if (state == '1') {
            text = 'online'
        }

        if (state == '0') {
            text = 'ingame'
        }

        console.log(state)
        var statusText = `
        <br>
        ${text}
        <br>
        country: ${country} 
        <br>
        name: ${steamName}
        <br>
        url: ${url}
        <br>
        <a href="${url}friends" target="_blank">check friends</a>
        <br>
        <img src="http://www.steamsignature.com/status/default/${id64}.png">
        `
        editSection.innerHTML = statusText


        //state
    })


    return apiText;
}
signature('76561199382608807')

const inputStatus = document.getElementById('inputStatus')
editButton.addEventListener('click', () => {
    
    console.log(inputStatus.value)

    signature(inputStatus.value)
})


//76561199003313363

const statusID = document.getElementById('765')
function checkStatus() {
    console.log('stats')
}

statusID.addEventListener('click', checkStatus)

