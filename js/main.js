
window.onload = function () {
    var sum = 0;
    let prices = document.querySelectorAll('.price');
    
    prices.forEach(element => {
        sum = sum + parseInt(element.textContent);
    });
    document.getElementById('totalPrice').textContent = sum + ' IQD';
    console.log(sum);

    
}
//var btn = document.querySelector('button');
jQuery('button').on('click', ()=>{
        /*fetch('http://myexpenses.local/wp-json/myLife/expenses').then(function(response) {
            return response.json();
        }).then(function(data) {
            console.log(data);
        }).catch(function() {
            console.log("Booo");
        });*/
        jQuery.get("http://myexpenses.local/wp-json/myLife/expenses", function(data){
            console.log(data);
          });
        alert('hello quuery')
        
    })
    console.log(typeof jQuery);
    