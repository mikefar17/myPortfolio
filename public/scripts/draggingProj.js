let dragged; 

function onDragStart(event) {
    let target = event.target;
    if(target && target.nodeName === 'IMG') {
        dragged = target;
        event.dataTransfer.setData('text', target.id);
        event.dataTransfer.dropEffect ='move';
    
        event.target.style.opacity = .3;
    }
    
}

function onDragEnd(event) {
    if(target && target.nodeName === 'IMG') {
        event.target.style.opacity = ''; 
        dragged = null;
    }
}

const pokemon = document.querySelector('.pokemon');
vehicles.addEventListener('dragstart', onDragStart);
vehicles.addEventListener('dragend', onDragEnd);