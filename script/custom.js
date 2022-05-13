//showing full blog
function blogshow(evt, blog){
	var more_btn,i,description;
	more_btn = document.getElementsByClassName('readbtn');
	description = document.querySelectorAll('.moreDescription');
	for(var i= 0 ;i <= more_btn.length;i++){
		//console.log(more_btn[i]);
	}
	document.getElementById(blog).style.display ="inline";
	
}


$(document).ready(function(){
	$('#hindi').on('click',function(){
		$('.client-lang>.hindi').html($('#hindi').val());
	})
	$('#english').on('click',function(){
		$('.client-lang>.english').html($('#english').val());
	})
	$('#franch').on('click',function(){
		$('.client-lang>.franch').html($('#franch').val());
	})

})

let addbtn = document.getElementById('addpro');
addbtn.addEventListener('click',function(){
	let arr = []
	let face = document.querySelector('.face06');
	face.innerHTML+=`
		<div class="input-group">
			<input type="text" id="proname" class="form-control input-text mt-2 mb-2" placeholder="www.project.com" disabled>
			<input type="text" id="prolink" class="form-control input-text mt-2 mb-2" placeholder="Project link">
		</div>
		<a class="btn btn-primary" id="add">Add</a>
	`;
	add.addEventListener('click', function(){
		arr.push({name:`${proname.value}`, link:`${prolink.value}`});
		proname.value="";
		prolink.value="";
		for(let i = 0;i<arr.length;i++){
			mynewpro.innerHTML+=`
				<li class="list-item mb-2">
					<a href="${arr[i].link}" class="nav-link text-body text-decoration-none" style="font-size:{{parafont}}px">
						<i class="far fa-check-circle" style='color:{{color}}'></i>
						${arr[i].link}
					</a>
				</li>
			`;
		}
	})
})






// //MAIN MENU FIXED CODE
// window.onscroll = fixedNav;
// var slide = document.querySelector('.navitem>h1');
// var nav = document.querySelector('nav');
// var fixed = nav.offsetTop;
// function fixedNav(){
   // if(window.pageYOffset > fixed){
        // nav.classList.add("fixed");
		
    // }else{
        // nav.classList.remove("fixed");
		
    // }
// }

// //INTERVIEW MENU TABS CODE 
// function myNav(ev , current){
	// var page, tab,i;
	// page = document.getElementsByClassName('page');
	// for(i =0;i<page.length;i++){
		// page[i].style.display = "none";
	// }
	// tab = document.getElementsByClassName('tab');
	// for(i = 0;i < tab.length;i++){
		
	// }
	// document.getElementById(current).style.display ="block";
	
// }



// //DRAG_START
// function drag_start(event) {
	// //ACCESS ALL STYLE OF TAREGT EVENT/ID
	// var style = window.getComputedStyle(event.target, null);
	
	// //ACCESS TARGET ID AND CONVERT INT OF TARGET POSITION LEFT AND TOP 
	// var str = (parseInt(style.getPropertyValue("left")) - event.clientX) + ',' + (parseInt(style.getPropertyValue("top")) - event.clientY) + ',' + event.target.id;
	
	// //SET STR VALUES IN TEXT FOR TRANSFER TO DROP AREA
	// event.dataTransfer.setData("Text", str);
// }

// //DROP HERE  
// function drop(event) {
	
	// //GET DATA TRANSFER AND ADD COUMA BY SPLIT MATHOD
	// var offset = event.dataTransfer.getData("Text").split(',');
	
	// //ACCESS TAREGT ID WITH INDEXING 
	// var dm = document.getElementById(offset[2]);
	
	// //SET STYLE IN TARGET ID FOR CURSER DIRECTION
	// //STYLE OF LEFT 
	// dm.style.left = (event.clientX + parseInt(offset[0], 10)) + 'px';
	
	// //STYLE OF TOP
	// dm.style.top = (event.clientY + parseInt(offset[1], 10)) + 'px';
	// event.preventDefault();
	// return false;
// }

// function drag_over(event) {
	// event.preventDefault();
	// return false;
// }


// //MOBILE MENU CODE
// document.querySelector('.mainmenu').onclick = function(){
	
	// var navlist = document.querySelector('.navlist');
	// if(navlist.style.display === "block"){
		// navlist.style.display = "none";
	// }else{
		// navlist.style.display = "block";
	// }
	// window.onscroll = function(){
		// var mobileMenu = document.querySelector('.navlist');
		// if(mobileMenu.style.display === "block"){
			// mobileMenu.style.display = "none";
		// }
	// }
// }

// //MINIMISE INTERVIEW TABS MENU CODE
// minimise.onclick = function(){
	// var myNav = document.querySelector('.minimenu');
	// if(myNav.style.display === "block"){
		// myNav.style.display = "none";
	// }else{
		// myNav.style.display = "block";
	// }
// }
// //FOR PWA INSTALL POPUP

// //SUBSCRIBE FOR M VALIDATE 





