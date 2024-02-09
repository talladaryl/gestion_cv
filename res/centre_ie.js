//-------------------------------------------------------------
//  Nom Document : kcentre
//  Auteur       : kazma (Kamel.A)
//  Objet        : cemage   http://www.javascriptfr.com/
//  Création     : 28.04.2011
//-------------------------------------------------------------
//  Mise à Jour  : 00.00.2011
//  Objet        : neant
//-------------------------------------------------------------
//-(*)------------------

var kcentre={

finileft:0,
finitop:0,
ratiow:0,
ratioh:0,
rota:0,
rota2:0,
rota3:1,
opacite:0,
divim:'null',
dde:document.documentElement,

cloclo:function(lui){

		if(kcentre.divim!='null'){
			kcentre.divim.parentNode.removeChild(kcentre.divim);
		}
		var le_clone=lui.cloneNode(true);
		le_clone.style.position='absolute';
		le_clone.style.opacity=0;
		le_clone.style.borderStyle='solid';
		le_clone.style.borderWidth =1+'px';
		le_clone.style.borderColor='white';
		le_clone.style.zIndex=kcentre.zidex();
		kcentre.divim=document.body.appendChild(le_clone);
		kcentre.taille();
	},


taille:function(){

		var ddn=(navigator.vendor) ? document.body : document.documentElement;

		var tailleh=kcentre.divim.offsetHeight;
		var taillew=kcentre.divim.offsetWidth;
		kcentre.finitop=Math.round((kcentre.dde.clientHeight/2)-150)+ddn.scrollTop;
		kcentre.finileft=Math.round((kcentre.dde.clientWidth/2)-((taillew/tailleh)*150))+ddn.scrollLeft;
		kcentre.ratioh=(kcentre.finitop-kcentre.divim.offsetTop)/10;
		kcentre.ratiow=(kcentre.finileft-kcentre.divim.offsetLeft)/10;
		kcentre.taillehra=(300-tailleh)/10;
		kcentre.taillewra=Math.round((((taillew/tailleh)*300)-taillew)/10);
		kcentre.rota=360/10
		
		if(kcentre.ratiow < 1 && kcentre.ratiow > 0){
			kcentre.ratiow=1;
		}
		if(kcentre.ratiow > -1 && kcentre.ratiow < 0){
			kcentre.ratiow=-1;
		}
		if(kcentre.ratioh < 1 && kcentre.ratioh > 0){
			kcentre.ratioh=1;
		}
		if(kcentre.ratioh > -1 && kcentre.ratioh < 0){
			kcentre.ratioh=-1;
		}
		kcentre.carre();
	},


carre:function(){

		if(kcentre.ratioh>0){
			if(kcentre.divim.offsetTop+Math.round(kcentre.ratioh)>kcentre.finitop){
				kcentre.divim.style.top=kcentre.finitop+'px';
			}
		}
		if(kcentre.ratioh<0){
			if(kcentre.divim.offsetTop+Math.round(kcentre.ratioh)<kcentre.finitop){
				kcentre.divim.style.top=kcentre.finitop+'px';
			}
		}
		
		if(kcentre.ratiow>0){
			if(kcentre.divim.offsetLeft+Math.round(kcentre.ratiow)>kcentre.finileft){
				kcentre.divim.style.left=kcentre.finileft+'px';
			}
		}
		if(kcentre.ratiow<0){
			if(kcentre.divim.offsetLeft+Math.round(kcentre.ratiow)<kcentre.finileft){
				kcentre.divim.style.left=kcentre.finileft+'px';
			}
		}
		
		if(parseInt(navigator.userAgent.substring(30,31))==9){
			
			if(kcentre.rota3==2 || kcentre.rota3==4){
				kcentre.divim.style.width=kcentre.divim.offsetHeight+kcentre.taillewra+'px';
				kcentre.divim.style.height=kcentre.divim.offsetWidth+kcentre.taillehra+'px';
			}
			else{
				kcentre.divim.style.width=kcentre.divim.offsetWidth+kcentre.taillewra+'px';
				kcentre.divim.style.height=kcentre.divim.offsetHeight+kcentre.taillehra+'px';
			}
			kcentre.divim.style.filter='progid:DXImageTransform.Microsoft.BasicImage(rotation='+kcentre.rota3+')'
			kcentre.rota3+=1
			if(kcentre.rota3==5){
				kcentre.rota3=1;
			}
		}
		
		else{
			kcentre.divim.style.width=kcentre.divim.offsetWidth+kcentre.taillewra+'px';
			kcentre.divim.style.height=kcentre.divim.offsetHeight+kcentre.taillehra+'px';
			kcentre.divim.style.MozTransform='rotate('+kcentre.rota2+'deg)';
			kcentre.divim.style.WebkitTransform='rotate('+kcentre.rota2+'deg)';
			kcentre.divim.style.OTransform='rotate('+kcentre.rota2+'deg)';
			kcentre.divim.style.transform='rotate('+kcentre.rota2+'deg)';
			kcentre.rota2+=kcentre.rota;
		}				
		
		if(kcentre.divim.offsetTop!=kcentre.finitop){
			
			kcentre.divim.style.top=kcentre.divim.offsetTop+Math.round(kcentre.ratioh)+'px';
		}
		
		if(kcentre.divim.offsetLeft!=kcentre.finileft){
			
			kcentre.divim.style.left=kcentre.divim.offsetLeft+Math.round(kcentre.ratiow)+'px';
		}
		kcentre.opacite+=10
		if(parseInt(navigator.userAgent.substring(30,31))<=8){
			kcentre.divim.style.filter = 'alpha(opacity='+kcentre.opacite+')';
		} 
		else{
			kcentre.divim.style.opacity=kcentre.opacite/100;
		}
		
		
		if(kcentre.divim.offsetLeft==kcentre.finileft || kcentre.divim.offsetTop==kcentre.finiTop){
			
			if(document.all && !window.opera){
				kcentre.divim.style.filter = 'alpha(opacity=100)';
			} 
			else{
				kcentre.divim.style.opacity=1;
			}
			kcentre.divim.style.MozTransform='rotate(0deg)';
			kcentre.divim.style.WebkitTransform='rotate(0deg)';
			kcentre.divim.style.OTransform='rotate(0deg)';
			kcentre.divim.style.transform='rotate(0deg)';
			kcentre.divim.onclick=kcentre.quit;
			kcentre.rota2=0;
			kcentre.rota3=1
			kcentre.opacite=0
			return false;
		}
		
		setTimeout(kcentre.carre,30);
	},


quit:function(){
		if(kcentre.divim != 'null'){
			document.body.removeChild(kcentre.divim);
			kcentre.divim='null';
		}
	},
	

zidex:function (){
		var allElements = document.getElementsByTagName('*');
		var vaval=0;
		var vaz=0;
		for (var i = 0; i< allElements.length; i++){
			if(allElements[i].parentNode==document.body){
				vaz =parseInt(navigator.appName.substring(0,5)=="Micro" ? allElements[i].currentStyle.zIndex : getComputedStyle(allElements[i],null).getPropertyValue('z-index'));
				if(vaz>vaval){
					vaval=vaz;
				}
			}
		}
		return vaval+1
	}
}