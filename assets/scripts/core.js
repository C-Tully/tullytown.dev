
function changeSection(selc){
    
    var selection = selc,
        dataAtr = selc.dataset.title,
        sections = document.getElementById('sectionsWrapper').getElementsByTagName('section');

        for (i = 0; i < sections.length; i++) { 
            if(sections[i].dataset.title == dataAtr){
                removeClass(sections[i],'hidden');
                addClass(sections[i],'activeSec');

            } else {
                 addClass(sections[i],'hidden');
            }

    } 

}

function addClass(el, classNameToAdd){
    el.className += ' ' + classNameToAdd;   
}

function removeClass(el, classNameToRemove){
    var elClass = ' ' + el.className + ' ';
    while(elClass.indexOf(' ' + classNameToRemove + ' ') !== -1){
         elClass = elClass.replace(' ' + classNameToRemove + ' ', '');
    }
    el.className = elClass;
}


document.onreadystatechange = function () {
  var state = document.readyState;
  if (state === 'interactive') {
    var nav = document.getElementById('navigation-items').getElementsByTagName('li');        

    for (i = 0; i < nav.length; i++) {       
        if(nav[i]){            
            var currentElement = nav[i];

            nav[i].onclick = function(){  
                changeSection(this);            
            };

        }            
    }
  }
}();
