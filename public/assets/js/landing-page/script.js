document.getElementById('toggle-open').addEventListener('click', function(){
	document.getElementById('navbar-top').classList.remove('nonactive')
	document.getElementById('navbar-top').classList.add('active')
})
document.getElementById('toggle-close').addEventListener('click', function(){
	document.getElementById('navbar-top').classList.add('nonactive')
	document.getElementById('navbar-top').classList.remove('active')
})
document.getElementById('caret-active').addEventListener('click', function(){
	document.getElementById('caret-active').classList.toggle('fa-caret-right')
	document.getElementById('caret-active').classList.toggle('fa-caret-left')
	document.getElementById('navbar-side').classList.toggle('nonactive')
	document.getElementById('navbar-side').classList.toggle('active')
})
var waktu = new Date();
$('#tahun').html(waktu.getFullYear())