(function(){
	var x = document.querySelector(".try0")

	x.addEventListener("mouseover",function(){
	this.style.backgroundColor="blue";
	},false);


	x.addEventListener("mouseout",function(){
	this.style.backgroundColor="yellow";
	},false);

	var y = document.querySelector(".try1")

	// y.addEventListener("mouseover",function(){
	// this.style.backgroundColor="#546984";
	// },false);

	// y.addEventListener("mouseout",function(){
	// this.style.backgroundColor="violet";
	// },false);
		x.addEventListener("mouseover",function(){
		y.style.backgroundColor=this.style.backgroundColor;
},false);
	
	

}())
