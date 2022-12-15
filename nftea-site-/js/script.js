$(window).scroll(function(){
    $('nav').toggleClass('scrolled', $(this).scrollTop() > 10);
    });


 
/*dark mode*/ 
if (localStorage.getItem('theme') == 'dark'){
    setDarkMode();

    if(document.getElementById('checkbox').checked){
        localStorage.setItem('checkbox', true)
    }

}

function setDarkMode(){
    let isDark = document.body.classList.toggle('darkmode');

    if (isDark){
        setDarkMode.checked = true;
        localStorage.getElementById('checkbox').setAttribute('checked', 'checked'); //name of the attribute and the value to set
    }else{
        setDarkMode.checked = true;
        localStorage.removeItem('theme', 'dark');
    }
}
