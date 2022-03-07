var btns = document.querySelectorAll('.content__search-product-sort__btn')
btns[0].style.backgroundColor = 'red'
btns[0].style.color = '#fff'
btns.forEach(function(btn){
    btn.onclick = function(){
        btns.forEach(function(e){
            e.style.backgroundColor = '#fff'
            e.style.color = '#000'
        })
        btn.style.backgroundColor = 'red'
        btn.style.color = '#fff'
    }
})

// var pageBtns = document.querySelectorAll('.content__product-pages__btn')
// pageBtns[0].style.backgroundColor = 'red'
// pageBtns[0].style.color = '#fff'
// pageBtns[0].style.cursor = 'default'

// pageBtns.forEach(function(pageBtn){

//     pageBtn.onclick = function(){
//         pageBtns.forEach(function(e){
//             e.style.backgroundColor = '#EFEFEF'
//             e.style.color = '#474646'
//             e.style.cursor = 'pointer'
//         })
//         pageBtn.style.backgroundColor = 'red'
//         pageBtn.style.color = '#fff'
//         pageBtn.style.cursor = 'default'
//     }
// })