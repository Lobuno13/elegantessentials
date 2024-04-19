/* FAQ / Help open-close content help*/
const accordionItem = document.querySelectorAll('.questionitem')

accordionItem.forEach((item) => {
    const accordionHeader = item.querySelector('.header')

    accordionHeader.addEventListener('click', () => {
        const openItem = document.querySelector('.accordion-open')

        toggleItem(item)

        if(openItem && openItem !== item) {
            toggleItem(openItem)
        }
    })
} )

const toggleItem = (item) => {
    const accordionContent = item.querySelector('.content')

    if(item.classList.contains('accordion-open')) {
        accordionContent.removeAttribute('style')
        item.classList.remove('accordion-open')
    }
   else{
    accordionContent.style.height = accordionContent.scrollHeight + 'px'
    item.classList.add('accordion-open')
   }
}

/*Login / Registration swap*/ 

const container = document.getElementById('container');
const registerBtn = document.getElementById('register');
const signinBtn = document.getElementById('signin')
registerBtn.addEventListener('click', () =>{
    
    container.classList.add("active");
});
signinBtn.addEventListener('click', () =>{
 
   container.classList.remove("active");
});























