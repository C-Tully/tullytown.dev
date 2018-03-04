
/*
* @purpose: changes the core content area's... content.
*
*/
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

/*
* @purpose: 
* @accepts: [content]       RAW innerHTML content block
*           [contentBlock]  content area to be changed
* @returns: [BOOL]  true | false
*/

function changeSkillSet(content,contentBlock){

    var skillSet_content = content;
    var contentArea = contentBlock;
    //Clear previous data
    contentBlock.innerHTML = '';
    // Todo: Fancy data transition here
    if(contentBlock.innerHTML = skillSet_content){
        return true;
    } else{
        return false;
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

    //Refactor: Restrict function calls to specific page calls.
    var nav = document.getElementById('navigation-items').getElementsByTagName('li');

    var skillSet = document.getElementById('skillset').getElementsByTagName('li'),
        contentArea = document.getElementById('content-block');
//console.log(contentArea);
    //Need to refactor this iteration process its being called twice.
    for (i = 0; i < nav.length; i++) {       
        if(nav[i]){            
   
            nav[i].onclick = function(){  
                changeSection(this);            
            };

        }            
    }

    for (i = 0; i < skillSet.length; i++){
          if(skillSet[i]){            
    
            skillSet[i].onclick = function(){  
                // console.log('mark');
                // console.log(this.querySelector('.content-area').innerHTML);
                changeSkillSet(this.querySelector('.content-area').innerHTML,contentArea);            
            };

        }  
    }

  }
}();
