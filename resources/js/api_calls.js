const { default: axios } = require("axios");
const { isNull } = require("lodash");

    if (!isNull(document.getElementById('buyApp'))) {
        let buyButton = document.getElementById('buyApp');

        let idApp = document.getElementById('buyApp').dataset.id;

        buyButton.addEventListener('click',callApiBuy,true);

        function callApiBuy() {
            axios({
                method:'POST',
                url:'http://127.0.0.1:8000/api/buy',
                params: {'id':idApp}
            }).then(data =>{
                console.log(data);
                buyButton.removeEventListener('click',callApiBuy,true);
                buyButton.innerHTML = data.data.message;
            })
            .catch(err => console.log(err))
        }
    } else if(!isNull(document.getElementById('reembolse'))) {

        let deleteBtn = document.getElementById('reembolse');

        let idApp = document.getElementById('reembolse').dataset.destroy;

        deleteBtn.addEventListener('click',callApiDelete,true);

        function callApiDelete() {
            axios({
                method:'DELETE',
                url:'http://127.0.0.1:8000/api/reembolse',
                params: {'id':idApp}
            }).then(data =>{
                console.log(data);
                deleteBtn.removeEventListener('click',callApiDelete,true);
                deleteBtn.innerHTML = data.data.message;
                deleteBtn.classList.add('deleted-app');
                deleteBtn.classList.add('animate__tada');
                let card = document.querySelector('.card-detail-wrapper');
                card.classList.add('animate__backOutLeft');
                document.querySelector('.delete-icon').style.display = 'none';
            })
            .catch(err => console.log(err))
        }
    }

