//create XMLHttpRequest server 
var server = new XMLHttpRequest();

//GET API FROM SERVER 
server.open("GET","API/ColorPlates/color.json");
//server.open("GET","https://mocki.io/v1/edc2f21b-7afe-47ea-a464-5ad68a2e409d");

//SET CONDTION FOR SERVER IF ON READY STATE CHANGE AND STATUS
server.onreadystatechange = function(){
	
	//SET CONDTION FOR SERVER STATUS
	if(server.readyState == 4 && server.status == 200){
		
		//GET API TEXT AND CONVERT INTO OBJECTS
		var myObj = JSON.parse(this.responseText);
		console.log(myObj);
		var mycolorArrey = myObj.ColorPlates;
		
		//ACCESS TOW COLOR PLATES
		for(var i in mycolorArrey){
			var singleColor = mycolorArrey[i].towColor;
			
			for(var i in singleColor){	
				document.querySelector('#colorsplates>.container>.row').innerHTML+=`
				    <div class="col-md-3 col-xs-6">
					    <div class="mycolorScheme mb-3  text-center">
						    <img src="${singleColor[i].Svg}" alt="" class="shadow-lg img-fluid border">
							<div class="color-code ">
							    <span class="color01"><b>${singleColor[i].color01}</b></span>
							    <span class="color02"><b>${singleColor[i].color02}</b></span>
							</div>
						</div>
					</div>
				`;
			}
	
		}	
	
	}//IF Function END
	
		//FOR INTERVIEW QUESTION API 
		server01 = new XMLHttpRequest();
		
		server01.open("GET","API/Interview/htmlinterview.json");
		server01.onreadystatechange = function(){
			if(server01.readyState == 4 && server01.status == 200){
				var myObj01 = JSON.parse(this.responseText);
				
			var questionData  = myObj01.InterViewQuestion;
			
			questionData.forEach(i =>{
				//JavaScript QUESTION
				var fullData= i.JavaScript;
				//HTMLCss 
				var htmldata = i.HTMLCss;
				console.log(htmldata);
				for(var i in fullData){
					document.querySelector('#interview>.container>.row').innerHTML+=`
					    <div class="QuestionData mt-4 mb-3 p-3">
						    <div class="question">
							    <h3 class="text-info">${fullData[i].question}</h3>
							</div>
							<div class="answer">
							    <p class="lead text-body">${fullData[i].answer}</p>
							</div>
							<div class="procode">
							    <h5><b>Example : </b></h5>
							    <img src="${fullData[i].code}" alt="${fullData[i].question} in programming ashram" class="img-fluid">
							</div>
						</div>
						<hr>
					`;
				}
				for(var i in htmldata){
					document.querySelector('#HTML>.container>.row').innerHTML+=`
					    <div class="QuestionData mt-4 mb-3 p-3">
						    <div class="question">
							    <h1 class="text-primary">${htmldata[i].question}</h1>
							</div>
							<div class="answer">
							    <p class="lead text-body">${htmldata[i].answer}</p>
							</div>
							<div class="procode">
							    <h5><b>Example : </b></h5>
							    <img src="${htmldata[i].code}" alt="${htmldata[i].question} in Programming ashram" class="img-fluid">
							</div>
							
						</div>
						<hr>
					`;
				}
			})
				
			}//IF ELSE END
			
			server02 = new XMLHttpRequest();
			server02.open('GET','API/APIs-CDN/apis_cdn.json');
			server02.onreadystatechange = function(){
				if(server02.readyState == 4 && server02.status == 200){
					myObj02 = JSON.parse(this.responseText);
					//console.log(myObj02);
				    
				    var getAllData = myObj02.Data;
					
					for(var i = 0;i < getAllData.length;i++){
						
						var api = getAllData[i].API;
					    var cdn = getAllData[i].CDN;
						//console.log(cdn);
						for(var i in api){
							document.querySelector('#apiData>.container>.row>.col-md-12').innerHTML+=`
							    <div class="apilink p-3 border text-body mb-4">
								   <p><i class="fas fa-database"></i><strong> ${api[i].apiName}</strong></p>
								   <a href="${api[i].apilink}" target="_blank" class="text-secondary">${api[i].apilink}</a>
								</div>
							`;
							
						}
						for(var i in cdn){
							document.querySelector('#cdnlinkData>.container>.row>.col-md-12').innerHTML+=`
								<div class="cdnlink p-3 border text-body mb-4">
								   <p><i class="fab fa-keycdn"></i><strong> ${cdn[i].cdnName}</strong></p>
								   <a href="${cdn[i].cdns}"  target="_blank" class="text-secondary">${cdn[i].cdns}</a>
								</div>
							`;
						}
							
					}	      
				}//END IF FOR API-CDN SERVER
				
					server03 = new XMLHttpRequest();
					server03.open('GET','API/psdDatat.json');
					server03.onreadystatechange = function(){
					if(server03.readyState == 4 && server03.status == 200){
						 myObj03 = JSON.parse(this.responseText);
						//console.info(myObj03);
						var getPSD = myObj03.PSDdata;
						
						for(var i in getPSD){
							 console.log(getPSD[i].donwloadLink);//UNDEFIND
							// console.log(getPSD[i].images);
							// console.log(getPSD[i].Headline);
							document.querySelector('#psd-hero>.container>.row').innerHTML+=`
								<div class="col-md-3">
									<div class="item-area bg-secondary text-white border-primary p-3 mb-4">
										<img src="${getPSD[i].images}" alt="${getPSD[i].Headline}" class="img-fluid">
										
										<div class="tab">
											<p><strong>${getPSD[i].Headline}</strong></p>
											<a href="${getPSD[i].donwloadLink}" class="text-light font-18"><i class="fas fa-cloud-download-alt"></i></a>
										</div>
									</div>
								</div>`;
						}
						
					}//END IF
					
					server04 = new XMLHttpRequest();
					server04.open("GET","API/blogsAPI/blogs.json");
					server04.onreadystatechange = function(){
						if(server04.readyState == 4 && server04.status == 200){
							 myObj04 = JSON.parse(this.responseText);
							var allblog = myObj04.blogs;
							//console.log(allblog);
							for(var i in allblog){
							document.querySelector('#blogspace>.container>.row').innerHTML+=`
								<div class="col-md-4 col-lg-4 col-xs-12 col-sm-6">
								<a class="text-decoration-none blogshow text-body" data-toggle="collapse" data-target="#${allblog[i].blogid}" role="button">
									<div class="blog-wrapper position-relative rouded mb-5 justify-content-center bg-white shadow-sm">
										
										<img src="${allblog[i].image}" alt="${allblog[i].Title}" class="img-fluid position-relative mb-4 rounded">
										<h1 class="title searchAccsss text-muted   font-20 p-2  text-body">${allblog[i].Title}</h1>
										
										<span class="badge-secondary categories position-absolute top-0 start-0 badge bg-muted"  disabled>${allblog[i].Descriptionshort} </span>
										<p class="card-text p-2 collapse " id="${allblog[i].blogid}">
											<span  class="navbar-collapse">${allblog[i].Descriptionfull}</span>		
										</p>
										<div class="card-footer p-0">
												
										</div>
										
									</a>
									   
										
									</div>
								</div>
							`	
							}							
						}	

						server05 = new XMLHttpRequest();
						server05.open('GET','API/projectAPI/project.json');
						server05.onreadystatechange = function(){
							if(server05.readyState == 4 && server05.status == 200){
								myObj05 = JSON.parse(this.responseText);
								var alldata = myObj05.projectsdata;
								alldata.forEach(i=>{
									var pro = i.projects;
									for(var i= 0;i < pro.length;i++){
										document.querySelector('#projects>.container>.row').innerHTML+=`
											<div class="col-xs-12 col-sm-6 col-lg-4">
												<div class="d-flex pro-wrapper bg-light p-2 border-start border-success m-3 shadow-sm text-muted">
													<img src="${pro[i].projectimages}" alt="${pro[i].name}" title="${pro[i].name}" class="img-thumbnail">
													<p class="title pl-2 mr-1"><strong>
														${pro[i].name}</strong>
													</p>
													<a href="${pro[i].codeDownload}" class="d-block" download>
														<i class="fas fa-arrow-circle-down"></i>
													</a>
												</div>
											</div>
										`;
									}
								})
							}
						}
						server05.send();
						//project ACCESS SERVER
					}
					server04.send();
					//ALLBLOG ACCESS SERVER
				}
				server03.send();
				//PSDAPI ACCESS SERVER
			
			}
			server02.send();
			//API-CDN SERVER
				
		}//interview Question Function end
		server01.send();
}//SERVER Function END
server.send();


       
	