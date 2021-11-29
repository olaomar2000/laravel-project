
// window.addEventListener('resize',()=>{
//     console.log('resize');
//   let x = window.matchMedia("(max-width: 700px)")
//   if(x.matches){
//       document.body.style.backgroundColor = "yellow";
//   }else{
//       document.body.style.backgroundColor = "pink";
//   }
// })

let togglebtn = document.querySelector('.toggle-butt');
let sidebar = document.querySelector('#sidebar');
togglebtn.addEventListener('click',()=>{
    // let togglebtn = document.querySelector('.toggle-butt');
    console.log(togglebtn.dataset.visible);
    if(togglebtn.dataset.visible == '0'){
        console.log('visibleif');
        sidebar.removeAttribute('style');
        sidebar.setAttribute('style', 'display:block !important');
        togglebtn.textContent = 'اخفاء الشريط الجانبي';
        togglebtn.dataset.visible = '1';
    }else{
        console.log('elseif');
        sidebar.removeAttribute('style');
        sidebar.setAttribute('style', 'display:none !important');
        togglebtn.textContent = 'اظهار الشريط الجانبي';
        togglebtn.dataset.visible = '0';
    }
    // let togglebtn = document.querySelector('.toggle-butt');
    // sidebar.removeAttribute('style');
    // sidebar.setAttribute('style', 'display:block');
    // togglebtn.textContent = 'اخفاء الشريط الجانبي';

    // console.log('toggle button');
    // sidebar.style.display = 'block !important';
    // console.log(sidebar)

});

