(function ($, root, undefined) {

	$(function () {

		'use strict';


		var controller = new ScrollMagic.Controller();


		var batteryitems =  document.querySelectorAll(".batterysvgwithliquid svg path, .batterysvgwithliquid svg circle");
		var batterybar = document.querySelectorAll('.batterysvgwithliquid .batterybars line');

		var bigPicturetimeline = new TimelineMax();
		var bigTween1 = TweenMax.staggerFrom(batteryitems , 1, {drawSVG:0}, 0.1);
		var bigTween2 = TweenMax.staggerFrom(batterybar , 1, {x:100}, 0.1);
		var bigTween3 = TweenMax.staggerFrom(batterybar , 1, {opacity:0, repeat: -1}, 0.1);

		bigPicturetimeline.add(bigTween1);

		var bigPicture = new ScrollMagic.Scene({
			triggerElement: '.batterysvgwithliquid',
			triggerHook: 1,
			duration: '100%'
		})
		.setTween(bigPicturetimeline);

		var counttimeline = new TimelineMax();
		var Cont={val:0} , NewVal = 100;
		var contTrigger = TweenLite.to(Cont,5,{val:NewVal,roundProps:"val",onUpdate:function(){
			document.getElementById("counter").innerHTML=Cont.val + "%";
		}});
		counttimeline.add(contTrigger);
		var count = new ScrollMagic.Scene({
			triggerElement: '.batterysvgwithliquidtrigger',
			triggerHook: 0.5,
			reverse:false
		})
		.setTween(counttimeline);
		// .addTo(controller);

		var charttimeline = new TimelineMax();
		var tween1 = TweenMax.staggerFrom('.chartline' , 1, {drawSVG:0}, 0.1);
		var tween2 = TweenMax.staggerFrom('.chartlinelabel' , 1, {y:-110, opacity:0}, 0.1);
		charttimeline.add([tween1, tween2]);

		var chart = new ScrollMagic.Scene({
			triggerElement: '.chartwithline',
			triggerHook: 0.5,
			duration: 200
		})
		.setTween(charttimeline);

		var placebricktimeline = new TimelineMax();
		var tween1 = TweenMax.to('.threepanels' , 1, {x:-142, y:12}, 0.1);
		var tween2 = TweenMax.to('.sixpanels' , 1, {x:110}, 0.1);
		placebricktimeline.add([tween1, tween2]);

		var placebrick = new ScrollMagic.Scene({
			triggerElement: '.placebrick',
			triggerHook: 0.9,
			duration: '100%'
		})
		.setTween(placebricktimeline);

		var batterywithsolartimeline = new TimelineMax();
		// solar
		var solarblocks = document.querySelectorAll('.batteryblocks g g');
		var solarcell = document.querySelectorAll('.batterycells path');

		var tween1 = TweenMax.staggerFrom(solarblocks , 0.3, {x:50, opacity:0}, 0.1);
		var tween2 = TweenMax.staggerFrom(solarcell , 1, { opacity:0}, 0.1);

		batterywithsolartimeline.add(tween1).add(tween2);

		var batterywithsolar = new ScrollMagic.Scene({
			triggerElement: '.batterywithsolar',
			triggerHook: 0.5,
			duration: '100%'
		})
		.setTween(batterywithsolartimeline);



		var maptrigger = new TimelineMax();
		var russuamap = document.querySelectorAll('.russuamap path, .russuamap polygon, .russuamap rect');
		var tween1 = TweenMax.set(russuamap , {opacity:0, scaleX:0.3, scaleY:0.3, transformOrigin:"50% 50%"}, 0.1);
		var tween2 = TweenMax.to(russuamap , 1, {opacity:1, scaleX:1, scaleY:1}, 0.1);
		maptrigger.add([tween1, tween2]);

		var map = new ScrollMagic.Scene({
			triggerElement: '.russuamap',
			triggerHook: 0.5,
			duration: '100%'
		})
		.setTween(maptrigger);


		controller.addScene([
			// pinHeader,
			// pinHeader2,
			map,
			batterywithsolar,
			placebrick,
			bigPicture,
			chart,
			count
		]);

		$('.slide-in').each(function(){
			var slideIn = new ScrollMagic.Scene({
				triggerElement: this,
				triggerHook: 0.5,
				reverse: false
			})
			.setClassToggle(this, 'show')
			.addTo(controller);
		});

		// hero
		var heroitems =  document.querySelectorAll(".heroareasvg path");
		TweenMax.staggerFrom(heroitems , 1, {fill:'transparent'}, 0.1);

		// rocket
		TweenMax.set('.satalite-area', {transformOrigin: '0% 97%'});
		TweenMax.to('.satalite-area', 20, {rotation: '+=360',ease:Linear.easeNone, repeat: -1});
		TweenMax.set('.satalite', {transformOrigin: '50% 50%'});
		TweenMax.to('.satalite', 20, {rotation: '-=360',ease:Linear.easeNone, repeat: -1});

		// windmill
		TweenMax.set('.windmillrotate', {transformOrigin: '51% 65%'});
		TweenMax.to('.windmillrotate', 20, {rotation: '+=360',ease:Linear.easeNone, repeat: -1});


	});

})(jQuery, this);
