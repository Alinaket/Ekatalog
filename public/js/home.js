let item = 0
let sliderTimer1 = null
function sliders(element, coordinations){
    const cardList = document.querySelector(".popular .cardList")
    const cards = cardList.querySelectorAll(".card")
    const  margin_r = Number( window.getComputedStyle(cards[0], null).marginRight.replace(/\D/g,""))
    const  margin_l = Number( window.getComputedStyle(cards[0], null).marginLeft.replace(/\D/g,""))
    const width = Number(cards[0].offsetWidth)
    const card_size = margin_r+margin_l+width
    console.log(element)
    if(sliderTimer1){
        clearTimeout(sliderTimer1);
    }
    if(coordinations){
        if(item < (cards.length-5)*card_size){
            item += card_size
        }
    }else{
        // if(item=>268){
        if(item > 0){
            item -= card_size
        }
    }
    cardList.style.right = item + "px"
    sliderTimer1 = setTimeout(()=>{
        sliders(1)
    },5000)
}

