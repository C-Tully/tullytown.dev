
/*
* @purpose: changes the core content area's... content.
*
*/


function changeNavClass(selectedNav,navBar){
    var selectedNav = selectedNav,
        navBar = navBar;

    for (i = 0; i < navBar.length; i++) { 
        if(navBar[i] === selectedNav){                     
            addClass(selectedNav.getElementsByTagName('a')[0], 'active');
        } else{       
            if(hasClass(navBar[i].getElementsByTagName('a')[0],'active')){          
                removeClass(navBar[i],'active');
            }
        }
    }
}


function changeSection(selc){    
    var selection = selc,
        dataAtr = selc.dataset.title,
        sections = document.getElementById('sectionsWrapper').getElementsByTagName('section');
        //change section class 
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
* @accepts: (content)       RAW innerHTML content block
*           (contentBlock)  content area to be changed
* @returns: [BOOL]  true | false
*/

function changeSkillSet(content,contentBlock){
    var skillSet_content = content,
         contentArea = contentBlock;
    //Clear previous data
    contentBlock.innerHTML = '';
    // Todo: Fancy data transition here
    if(contentBlock.innerHTML = skillSet_content){
        return true;
    } else{       
        return false;
    }
}

/**
* @purpose: [Helper] adds a class off of a given element
* @accepts: (el)[object] The element to add the class to
*           (classNameToAdd) [string] The class to add
* @returns: N/A
*/
function addClass(el, classNameToAdd){
    el.className += ' ' + classNameToAdd;    
}

/**
* @purpose: [Helper] removes a class off of a given element
* @accepts: (el)[object] The element to check
*           (classNameToRemove) [string] The class to check for
* @returns: N/A
*/
function removeClass(el, classNameToRemove){
    var elClass = ' ' + el.className + ' ';
    while(elClass.indexOf(' ' + classNameToRemove + ' ') !== -1){
         elClass = elClass.replace(' ' + classNameToRemove + ' ', '');     
    }
    el.className = elClass;
}

/**
* @purpose: [Helper] Remove Classes off of embeded <a> elements 
* @accepts: (el)[object] The element to check
*           (classNameToRemove) [string] The class to check for
* @returns: N/A
*/

function removeArrayClass(el, classNameToRemove){
    for (i = 0; i < el.length; i++) { 
        var elClass = ' ' + el[i].getElementsByTagName('a')[0].className + ' ';
        while(elClass.indexOf(' ' + classNameToRemove + ' ') !== -1){
             elClass = elClass.replace(' ' + classNameToRemove + ' ', '');       
        }
        el[i].getElementsByTagName('a')[0].className = elClass;
    }
}

/**
* @purpose: [Helper] checks for class
* @accepts: (element)[object] The element to check
*           (classs) [string] The class to check for
* @returns: N/A
*/
function hasClass(element, classs) {
    return (' ' + element.className + ' ').indexOf(' ' + classs+ ' ') > -1;
}

function fadeOutDiv(){
    $('.form_message').fadeOut(5000);
}


document.onreadystatechange = function () {
  var state = document.readyState;
  if (state === 'interactive') {
    fadeOutDiv();
    //Refactor: Restrict function calls to specific page calls.
    var nav = document.getElementById('navigation-items').getElementsByTagName('li');

    var skillSet = document.getElementById('skillset').getElementsByTagName('li'),
        contentArea = document.getElementById('content-block');
    //Need to refactor this iteration process its being called twice.
    for (i = 0; i < nav.length; i++) {       
        if(nav[i]){
            nav[i].onclick = function(){  
                removeArrayClass(nav,'active');
                changeNavClass(this,nav); 
                changeSection(this);
            };
        }            
    }

    for (i = 0; i < skillSet.length; i++){
        if(skillSet[i]){
            skillSet[i].onclick = function(){  
                changeSkillSet(this.querySelector('.content-area').innerHTML,contentArea);            
            };

        }  
    }
  }
}();
