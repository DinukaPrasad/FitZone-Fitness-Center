//logo animation script

const text = document.querySelector('.logo_text p');

text.innerHTML = text.innerText.split("").map(
    (char, i) => `<span style="transform:rotate(${i * 15.7}deg)">${char}</span>`).join("")



// services section next & prev btn function 

let next = document.querySelector('.next')
let prev = document.querySelector('.prev')

next.addEventListener('click' , function(){
    let items = document.querySelectorAll('.item')
    document.querySelector('.slide').appendChild(items[0])
})

prev.addEventListener('click' , function(){
    let items = document.querySelectorAll('.item')
    document.querySelector('.slide').prepend(items[items.length - 1])
})

// plan section card hover effect code

let card = document.querySelectorAll('.plan_box')

card.forEach(item =>
    {
       item.onmousemove = e => {
          item.style.setProperty('--x',(e.pageX - item.offsetLeft) + 'px');
          item.style.setProperty('--y',(e.pageY - item.offsetTop) + 'px');
       };
    }
 );
      