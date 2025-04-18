// Главная страница
if (document.getElementById('table')) {
	const table = document.getElementById('table')
	const typeFilter = document.getElementById('type-filter')
	const total = document.getElementById('total')
	const items = document.querySelectorAll('#menu input')

	// Загрузка типов для фильтра
	fetch('php/api.php?action=types')
		.then(r => r.json())
		.then(types =>
			types.forEach(t => {
				const opt = document.createElement('option')
				opt.value = t
				opt.textContent = t
				typeFilter.appendChild(opt)
			})
		)

	// Загрузка заведений
	function loadRestaurants() {
		fetch(`php/api.php?action=get&type=${typeFilter.value}`)
			.then(r => r.json())
			.then(data => {
				table.innerHTML = ''
				data.forEach(r => {
					const row = document.createElement('tr')
					row.innerHTML = `<td>${r.name}</td><td>${r.type}</td>`
					table.appendChild(row)
				})
			})
	}
	typeFilter.addEventListener('change', loadRestaurants)
	loadRestaurants()

	// Обновление суммы и списка заказа
	function updateTotal() {
		let sum = 0
		items.forEach(
			i => (sum += (parseInt(i.value) || 0) * parseInt(i.dataset.price))
		)
		total.textContent = `${sum}₽`
		document.getElementById('modal-total').textContent = `Итого: ${sum}₽`
		document.getElementById('modal-items').innerHTML =
			Array.from(items)
				.filter(i => parseInt(i.value) > 0)
				.map(
					i => `${i.parentElement.querySelector('h5').textContent}: ${i.value}`
				)
				.join('<br>') || 'Пусто'
	}
	items.forEach(i => i.addEventListener('change', updateTotal))

	// Обработка кнопки ОК в модальном окне
	document.getElementById('confirm-order').addEventListener('click', () => {
		document.getElementById('alert').classList.remove('d-none')
		bootstrap.Modal.getInstance(document.getElementById('modal')).hide()
	})
}

// Админ-панель
if (document.getElementById('search')) {
	const table = document.getElementById('table')
	const form = document.getElementById('search')
	const name = document.getElementById('name')

	// Загрузка заведений
	function loadRestaurants() {
		fetch(`php/api.php?action=get&name=${name.value}`)
			.then(r => r.json())
			.then(data => {
				table.innerHTML = ''
				data.forEach(r => {
					const row = document.createElement('tr')
					row.innerHTML = `<td>${r.name}</td><td>${r.type}</td>`
					table.appendChild(row)
				})
			})
	}
	form.addEventListener('submit', e => {
		e.preventDefault()
		loadRestaurants()
	})
	loadRestaurants()

	// Добавление заведения
	window.add = function () {
		const data = {
			name: document.getElementById('add-name').value,
			type: document.getElementById('add-type').value,
		}
		fetch('php/api.php?action=add', {
			method: 'POST',
			headers: { 'Content-Type': 'application/json' },
			body: JSON.stringify(data),
		})
			.then(r => r.json())
			.then(r => {
				if (r.success) {
					document.getElementById('alert').classList.remove('d-none')
					bootstrap.Modal.getInstance(document.getElementById('modal')).hide()
					loadRestaurants()
				}
			})
	}
}
