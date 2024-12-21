document.querySelector('#postForm').addEventListener('submit', event => {
    event.preventDefault() 
    const form = event.target;
    const formData = new FormData(form);

    fetch('store', {
        method : 'POST',
        body : formData
    }).then(
        response => response.json()
            .then(data => {
                const result = document.querySelector('#result');
                if(data.success){
                    console.log('Ae porra');
                }else{
                    console.log('F');
                }
            })).catch(e => {
                console.log('errado');
            });

})

