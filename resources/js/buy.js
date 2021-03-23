const { default: axios } = require("axios");

let buyButton = document.getElementById('buyApp');

buyButton.addEventListener('click',() => {
    axios({
        method:'POST',
        url:'http://127.0.0.1:8000/api/buy',
        params: {id:11}
    }).then(data => console.log(data.data.data))
    .catch(err => console.log(err))
});