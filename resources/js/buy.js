const { default: axios } = require("axios");

let idApp = document.getElementById('buyApp').dataset.id;

let buyButton = document.getElementById('buyApp');

buyButton.addEventListener('click',callAPI,true);

function callAPI() {
    axios({
        method:'POST',
        url:'http://127.0.0.1:8000/api/buy',
        params: {'id':idApp}
    }).then(data =>{
        console.log(data);
        buyButton.removeEventListener('click',callAPI,true);
        buyButton.innerHTML = data.data.message;
    })
    .catch(err => console.log(err))
}