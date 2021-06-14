'use strict';

document.addEventListener('DOMContentLoaded', ()=>{


	// липкая шапка
	try{
		let topNav = document.querySelector('.topnav');
		let utp = document.querySelector('.utp');
		let utpHeight = utp.clientHeight;
		let topnavHeight = topNav.clientHeight;
		
		// let topNav = document.querySelector('.topNav');
		window.addEventListener('scroll', () => {
			topNav.classList.toggle('bg-opacity-100', window.scrollY > utpHeight - topnavHeight);
		});

	} catch (err) {
		console.log('topnav');
	}
	






		//  модалка перезвоните мне
	try {
				
			let recallMeBt = document.querySelector('.recallMeBt');
			let modalRecallMe = document.querySelector('.modalRecallMe');
			let closeRecallMeModalBt = document.querySelector('.closeModalBt');



			// #show
			recallMeBt.addEventListener('click', (e)=>{
				e.preventDefault();
				modalRecallMe.classList.add('modalRecallMeActive');
			});




			// #close
			function hideRecallMe () {
				modalRecallMe.classList.remove('modalRecallMeActive');
			}

			modalRecallMe.addEventListener('click', (e)=> {
				if(e.target === modalRecallMe && modalRecallMe.classList.contains('modalRecallMeActive')){
					hideRecallMe ();
				}
			});

			document.addEventListener('keydown', (e)=>{
				if(e.code === 'Escape' && modalRecallMe.classList.contains('modalRecallMeActive')) {
					hideRecallMe ();
				}
			});

			closeRecallMeModalBt.addEventListener('click', (e)=>{
				e.preventDefault();
				hideRecallMe ();
			});

		} catch (err) {
			console('модалка перезвоните мне')
		}
	





		//  модалка записаться на курс
	try {

			let cursyZapisatsaBt = document.querySelectorAll('.cursyZapisatsaBt');
			let zalazKursModal = document.querySelector('.zalazKursModal');
			let closeKursBt = document.querySelector('.closeKursBt');
			let nameOfKurse = document.querySelector('.nameOfKurse');
			let priseKurse = document.querySelector('.priseKurse');
			let thisKurs = document.querySelector('.thisKurs');



			// #show
			function showKurseModal () {
				zalazKursModal.classList.add('zalazKursModalActive');
			}


			cursyZapisatsaBt.forEach(bt => {
				bt.addEventListener('click', function(e){
					e.preventDefault();

					showKurseModal ();
					
					let kurs = this.getAttribute('data-kurs');
					console.log(kurs);
					
					let price = this.getAttribute('data-price');
					console.log(price);

					thisKurs.value = kurs + ' | ' + price;

					nameOfKurse.textContent = kurs;
					priseKurse.textContent = price;
				});
			});




			// #close
			function closeKurseModal () {
				zalazKursModal.classList.remove('zalazKursModalActive');
			}


			closeKursBt.addEventListener('click', (e)=>{
				e.preventDefault();
				closeKurseModal ();
			});


			zalazKursModal.addEventListener('click', (e)=>{
				if(e.target === zalazKursModal && zalazKursModal.classList.contains('zalazKursModalActive')) {
					closeKurseModal ();
				}
			});


			document.addEventListener('keydown', (e)=>{
				if(e.code === 'Escape' && zalazKursModal.classList.contains('zalazKursModalActive')) {
					closeKurseModal ();
				}
			});
	} catch (err) {
		console.log('модалка записаться на курс')
	}
	









	
		//  гамбургер и мобильное левое меню
	try {

		let humb = document.querySelector('.humb');
		let overlayLeft = document.querySelector('.overlayLeft');
		let leftNav = document.querySelector('.leftNav');
		let closeLeftBt = document.querySelector('.closeLeftBt');

		// #show
		function showLeftNav () {
			overlayLeft.classList.add('overlayLeftActive');
			document.body.style.overflow = 'hidden';
			setTimeout((e)=>{
				leftNav.classList.add('leftNavActive');
			},300);
		}

		humb.addEventListener('click', (e)=>{
			e.preventDefault();
			showLeftNav ();
		});



		// #close
		function closeLeftNav () {
			leftNav.classList.remove('leftNavActive');
			document.body.style.overflow = '';
			setTimeout((e)=>{
				overlayLeft.classList.remove('overlayLeftActive');
			},300);
		}

		overlayLeft.addEventListener('click', (e) => {
			if(e.target === overlayLeft && overlayLeft.classList.contains('overlayLeftActive')) {
				closeLeftNav ();
			}
		});

		closeLeftBt.addEventListener('click', (e)=>{
			e.preventDefault();
			closeLeftNav ();
		});

	} catch (err) {
		console.log('humb and left mobile menu');
	}









	// send forms
	// отправка данных перезвоните из модального окна
	try {

		let modalRecallMe = document.querySelector('.modalRecallMe');
		let recallMeForm = document.querySelector('#recallMeForm');

		// #close 
		function hideZakaz() {
			modalRecallMe.classList.remove('modalRecallMeActive');
			document.body.style.overflow = '';
		}

		function postData(form, hidefunc) {
			form.addEventListener('submit', (e) => {

				e.preventDefault();
				alert('отправка');

				let r = new XMLHttpRequest;
				r.open('POST', '/recall.php');

				let formData = new FormData(form);

				r.send(formData);

				r.addEventListener('load', () => {
					if (r.status === 200) {
						alert('Данные отправлены');
						hideZakaz();
						console.log('success / yes');
						form.reset();
					} else {
						alert('Упс. Ошибочка. Мы уже работаем над ее устранением');
						console.log('Упс, ошибочка');
					}
				});
			});
		}

		postData(recallMeForm);

	} catch (e) {
		console.log(e);
	}







	


		// отправка данных 	ЗАКАЗ КУРСА   из модального окна
		try {

			let zalazKursModal = document.querySelector('.zalazKursModal');
			let zakazatCourceForm = document.querySelector('#zakazatCourceForm');
	
			// #close 
			function hideZakaz() {
				zalazKursModal.classList.remove('zalazKursModalActive');
				document.body.style.overflow = '';
			}
	
			function postData(form, hidefunc) {
				form.addEventListener('submit', (e) => {
	
					e.preventDefault();
					alert('отправка');
	
					let r = new XMLHttpRequest;
					r.open('POST', '/recall.php');
	
					let formData = new FormData(form);
	
					r.send(formData);
	
					r.addEventListener('load', () => {
						if (r.status === 200) {
							alert('Данные отправлены');
							hideZakaz();
							console.log('success / yes');
							form.reset();
						} else {
							alert('Упс. Ошибочка. Мы уже работаем над ее устранением');
							console.log('Упс, ошибочка');
						}
					});
				});
			}
	
			postData(zakazatCourceForm);
	
		} catch (e) {
			console.log(e);
		}











		// заказать ТОВАР модалка
		try{

			let tovaryZakazatBt = document.querySelectorAll('.tovaryZakazatBt');
			let zakazTovarModal = document.querySelector('.zakazTovarModal');
			let closeTovarBt = document.querySelector('.closeTovarBt');

			let nameOfTovar = document.querySelector('.nameOfTovar');
			let priseTovar = document.querySelector('.priseTovar');
			let thisTovar = document.querySelector('.thisTovar');

			// #show 
			function showModalTovar () {
				zakazTovarModal.classList.add('zakazTovarModalActive');
				document.body.style.overflow = 'hidden';
			}


			tovaryZakazatBt.forEach(bt => {
				bt.addEventListener('click', function (e){
					e.preventDefault();
					showModalTovar ();

					let tovar = this.getAttribute('data-tovar');
					nameOfTovar.textContent = tovar;
					
					let pricetovar = this.getAttribute('data-pricetovar');
					priseTovar.textContent = pricetovar;

					thisTovar.value = tovar + ' | ' + pricetovar;

				});
			})






			// #hide 
			function hideModalTovar () {
				zakazTovarModal.classList.remove('zakazTovarModalActive');
				document.body.style.overflow = '';
			}

			zakazTovarModal.addEventListener('click', (e)=>{
				if(e.target === zakazTovarModal && zakazTovarModal.classList.contains('zakazTovarModalActive')) {
					hideModalTovar ();
				}
			});

			document.addEventListener('keydown', (e)=> {
				if(e.code === 'Escape' && zakazTovarModal.classList.contains('zakazTovarModalActive')) {
					hideModalTovar ();
				}
			});

			closeTovarBt.addEventListener('click', (e)=>{
				e.preventDefault();
				hideModalTovar ();
			});
			



		} catch (e) {
			console.log('заказать товар');
		}



		// отправка данных 	ЗАКАЗ ТОВАРА   из модального окна
		try {

			let zakazTovarModal = document.querySelector('.zakazTovarModal');
			let zakazatTovarForm = document.querySelector('#zakazatTovarForm');
	
			// #close 
			function hideZakaz() {
				zakazTovarModal.classList.remove('zakazTovarModalActive');
				document.body.style.overflow = '';
			}
	
			function postData(form, hidefunc) {
				form.addEventListener('submit', (e) => {
	
					e.preventDefault();
					alert('отправка');
	
					let r = new XMLHttpRequest;
					r.open('POST', '/recall.php');
	
					let formData = new FormData(form);
	
					r.send(formData);
	
					r.addEventListener('load', () => {
						if (r.status === 200) {
							alert('Данные отправлены');
							hideZakaz();
							console.log('success / yes');
							form.reset();
						} else {
							alert('Упс. Ошибочка. Мы уже работаем над ее устранением');
							console.log('Упс, ошибочка');
						}
					});
				});
			}
	
			postData(zakazatTovarForm);
	
		} catch (e) {
			console.log(e);
		}









		// отправка данных 	СТРАНИЦА КОНТАКТЫ
		try {

		
			let feedbackForm = document.querySelector('#feedbackForm');
	
	
			function postData(form, hidefunc) {
				form.addEventListener('submit', (e) => {
	
					e.preventDefault();
					alert('отправка');
	
					let r = new XMLHttpRequest;
					r.open('POST', '/recall.php');
	
					let formData = new FormData(form);
	
					r.send(formData);
	
					r.addEventListener('load', () => {
						if (r.status === 200) {
							alert('Данные отправлены');
							console.log('success / yes');
							form.reset();
						} else {
							alert('Упс. Ошибочка. Мы уже работаем над ее устранением');
							console.log('Упс, ошибочка');
						}
					});
				});
			}
	
			postData(feedbackForm);
	
		} catch (e) {
			console.log(e);
		}



});