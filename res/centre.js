//-------------------------------------------------------------
//  Nom Document : kcentre
//  Auteur       : kazma (Kamel.A)
//  Objet        : cemage   http://www.javascriptfr.com/
//  Création     : 28.04.2011
//-------------------------------------------------------------
//  Mise à Jour  : 18.11.2016
//  Objet        : neant
//-------------------------------------------------------------
//-(*)------------------

addEventListener('load', function(){
	
	var all=document.getElementsByTagName("img")

	for(var i=0; i<all.length; i++){
		
		if(all[i].hasAttribute("data-tourne")){

			all[i].onclick=kcentre.cloclo
		}
	}
}, false);


var kcentre={

finileft:0,
finitop:0,
rota:0,
rota2:0,
compte:1,
taille_img:0.7,  // taille de l'image en pourcentage divisé par 100 par rapport a la fenetre du navigateur
duree:300,		//duree de transition en milliseconde
divim:'null',
ww:0,
hh:0,

cloclo:function(e){

		if(kcentre.divim!='null'){
			kcentre.divim.parentNode.removeChild(kcentre.divim);
		}
		var le_clone=e.currentTarget.cloneNode(true);
		
		le_clone.style.position='absolute';
		le_clone.style.opacity=0;
		le_clone.style.borderStyle='solid';
		le_clone.style.borderWidth =0+'px';
		le_clone.style.borderColor='white';
		var client=e.currentTarget.getBoundingClientRect()
		
		if(window.scrollX!=undefined){
			
			le_clone.style.left=client.left+scrollX+'px'
			le_clone.style.top=client.top+scrollY+'px'
		}
		else{
		
			le_clone.style.left=client.left+document.documentElement.scrollLeft+'px'
			le_clone.style.top=client.top+document.documentElement.scrollTop+'px'
		}
		le_clone.style.width=client.width+'px'
		le_clone.style.height=client.height+'px'

		le_clone.style.zIndex=kcentre.zidex();
		kcentre.divim=document.body.appendChild(le_clone);

		var dde=document.documentElement;
		var ddn=document.body.scrollTop ? document.body : document.documentElement;

		var tailleh=client.height;
		var taillew=client.width;
		var ratio=taillew/tailleh
		
		var hfin=dde.clientHeight*kcentre.taille_img		//70 represente la taille de l'image en pourcentage par rapport a la taille de la fenetre du navigateur
		var wfin=hfin*ratio
		
		kcentre.finitop=Math.round((dde.clientHeight-hfin)/2)+ddn.scrollTop;
		kcentre.finileft=Math.round((dde.clientWidth-wfin)/2)+ddn.scrollLeft;
		
		var ratioh=(kcentre.finitop-kcentre.divim.offsetTop);
		var ratiow=(kcentre.finileft-kcentre.divim.offsetLeft);
		
		var duree=kcentre.duree/40;
		
		kcentre.ww=ratiow/duree;
		kcentre.hh=ratioh/duree;
		
		kcentre.taillehra=(hfin-tailleh)/duree;
		kcentre.taillewra=(wfin-taillew)/duree;
		
		kcentre.rota=360/duree;
		kcentre.rota2=360/duree;

		kcentre.carre();
	},


carre:function(){

		var lestyle=kcentre.divim.style

		if(kcentre.compte>=kcentre.duree/40){

			lestyle.opacity=1;
			lestyle.transform='rotate(0deg)';
			lestyle.boxShadow='5px 5px 20px #212121';
			kcentre.divim.onclick=kcentre.quit;
			kcentre.rota2=0;
			lestyle.borderWidth=1+'px';
			lestyle.height=kcentre.taille_img*100+'%';
			lestyle.width='auto';
			lestyle.top=kcentre.finitop+'px';
			lestyle.left=kcentre.finileft+'px';
			kcentre.compte=1;
			window.addEventListener("resize", kcentre.sscro, false);
			return false;
		}

		lestyle.transform='rotate('+kcentre.rota2+'deg)';
		lestyle.height=kcentre.divim.offsetHeight+kcentre.taillehra+'px';
		lestyle.width=kcentre.divim.offsetWidth+kcentre.taillewra+'px';
		lestyle.top=kcentre.divim.offsetTop+kcentre.hh+'px';
		lestyle.left=kcentre.divim.offsetLeft+kcentre.ww+'px';
		lestyle.opacity=(lestyle.opacity*100+10)/100;
		kcentre.rota2+=kcentre.rota;
		kcentre.compte++
		setTimeout(kcentre.carre,40);
	},


quit:function(){
		if(kcentre.divim != 'null'){
			document.body.removeChild(kcentre.divim);
			kcentre.divim='null';
			window.removeEventListener("resize", kcentre.sscro, false);
		}
	},


sscro:function(){

		var ddn=document.body.scrollTop ? document.body : document.documentElement;
		var dico=kcentre.divim;
		dico.style.top=((document.documentElement.clientHeight-dico.offsetHeight)/2)+ddn.scrollTop+"px";
		dico.style.left=((document.documentElement.clientWidth-dico.offsetWidth)/2)+ddn.scrollLeft+'px';

	},


zidex:function (){
		var allElements = document.getElementsByTagName('*');
		var vaval=0;
		var vaz=0;
		for (var i = 0; i< allElements.length; i++){
			if(allElements[i].parentNode==document.body){
				vaz =parseInt(getComputedStyle(allElements[i],null).getPropertyValue('z-index'));
				if(vaz>vaval){
					vaval=vaz;
				}
			}
		}
		return vaval+1
	}
}