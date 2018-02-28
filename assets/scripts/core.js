document.onreadystatechange = function () {
  var state = document.readyState;
  if (state === 'interactive') {
    var nav = document.getElementById('main-navigation').getElementsByTagName('li');
        //sections = document.getElementById('sectionsWrapper');

       // console.log(nav);
       for (i = 0; i < nav.length; i++) { 
            nav[i].addEventListener('click',function(){

                
            });           
       }
  }
}();




