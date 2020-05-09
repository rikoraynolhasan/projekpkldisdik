const dropdown = document.querySelectorAll('.dropdown-trigger');
M.Dropdown.init(dropdown, {
    coverTrigger:false
});

const nav = document.querySelectorAll('.sidenav');
M.Sidenav.init(nav);

const slid = document.querySelectorAll('.sli');
M.Slider.init(slid,{
    interval: 3000,
    duration: 300,
    height:500
});

const slidi = document.querySelectorAll('.sli2');
M.Slider.init(slidi,{
    indicators:false
});

const img = document.querySelectorAll('.materialboxed');
M.Materialbox.init(img);

const prl = document.querySelectorAll('.parallax');
M.Parallax.init(prl);

const scrlspy =  document.querySelectorAll('.scrollspy');
M.ScrollSpy.init(scrlspy);